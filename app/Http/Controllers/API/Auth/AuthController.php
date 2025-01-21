<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Mail;
use App\Mail\OTPMail;
use App\Notifications\PasswordResetNotification;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;

class AuthController extends Controller
{
    /**
     * Register a new user and send OTP for verification.
     *
     * @param Request $request
     * @return JsonResponse
     */

    // User Registration
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'nullable|string|max:255',
            'password' => 'required|string|min:6',
            'password_confirmation' => 'required|string|min:6|same:password',
        ], [
            'required' => 'All fields are required.', // Custom message for the 'required' rule
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();

            // Check for specific error and customize the message
            if ($errors->has('email')) {
                return response()->json([
                    'status'  => false,
                    'error' => $errors->first('email'),
                    'code'    => 422,
                ], 422);
            }

            return response()->json([
                'status'  => false,
                'message' => 'Validation Error',
                'code'    => 422,
                'errors'  => $errors->first(),
            ], 422);
        }

        // Handle avatar upload
        $avatarPath = null;
        if ($request->hasFile('avatar')) {
            // Store the avatar and get the file path
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
        }

        // Create the user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'avatar' => $avatarPath, // Store the avatar path
        ]);

        $token = JWTAuth::fromUser($user);

        return response()->json([
            'status'     => true,
            'message'    => 'User Successfully Registered',
            'code'       => 201,
            'token_type' => 'bearer',
            'token'      => $token,
            'userData' => $user,
        ], 201);
    }

    /**
     * Log in an existing user.
     *
     * @param Request $request
     * @return JsonResponse
     */
//    public function login(Request $request): JsonResponse
//    {
//        $validator = Validator::make($request->all(), [
//            'email' => 'required|email',
//            'password' => 'required|string|min:6',
//        ]);
//
//        if ($validator->fails()) {
//            return response()->json([
//                'status' => false,
//                'message' => $validator->errors()->first(),
//                'code' => 403,
//            ], 403);
//        }
//
//        // Find the user and check verification status
//        $user = User::with('userDetails')->where('email', $request->email)->first();
//
//        // Attempt login and token generation
//        $token = auth()->guard('api')->attempt($validator->validated());
//        if (!$token) {
//            return response()->json([
//                'status' => false,
//                'message' => 'Incorrect credentials, please try again.',
//                'code' => 403,
//            ], 403);
//        }
//
//        return response()->json([
//            'status' => true,
//            'message' => 'User logged in successfully.',
//            'token' => $token,
//            'userData' => $user,
//            'token_type' => 'Bearer',
//            //            'expires_in' => auth()->guard('api')->factory()->getTTL() * 60,
//            'expires_in' => auth()->guard('api')->factory()->getTTL(),
//            'code' => 200,
//        ], 200);
//    }

    public function login(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validator->errors()->first(),
                'code' => 403,
            ], 403);
        }

        // Find the user and check verification status
        $user = User::with('userDetails')->where('email', $request->email)->first();

        // Attempt login and token generation
        $token = auth()->guard('api')->attempt($validator->validated());
        if (!$token) {
            return response()->json([
                'status' => false,
                'message' => 'Incorrect credentials, please try again.',
                'code' => 403,
            ], 403);
        }

        // Extract the first user detail, if available
        $userDetail = $user->userDetails->first();

        // Combine user data with address fields
        $userData = [
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'role' => $user->role,
            'status' => $user->status,
            'avatar' => $user->avatar,
            'address' => $userDetail->address ?? null,
            'town' => $userDetail->town ?? null,
            'state' => $userDetail->state ?? null,
            'postal_code' => $userDetail->postal_code ?? null,
        ];

        return response()->json([
            'status' => true,
            'message' => 'User logged in successfully.',
            'token' => $token,
            'userData' => $userData,
            'token_type' => 'Bearer',
            'expires_in' => auth()->guard('api')->factory()->getTTL(),
            'code' => 200,
        ], 200);
    }



    /**
     * Log out the user and invalidate token.
     *
     * @return JsonResponse
     */
    public function logout(): JsonResponse
    {
        try {
            // Invalidate token
            JWTAuth::invalidate(JWTAuth::getToken());

            return response()->json([
                'message' => 'Successfully logged out',
                'code'    => 200,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Failed to log out, please try again.',
                'code'    => 500,
            ], 500);
        }
    }
}
