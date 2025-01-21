<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Subscription;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NewsletterController extends Controller
{
    public function subscribe(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
//            'email' => 'required|email|unique:subscriptions,email',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'error' => $validator->errors()->first(),
                'code' => 400,
            ], 400);
        }

        // Check if the email already exists in the database
        if (Subscription::where('email', $request->email)->exists()) {
            return response()->json([
                'status' => false,
                'error' => 'You have already subscribed our newsletter.',
                'code' => 400,
            ], 400);
        }

        // Create a new subscription
        Subscription::create([
            'email' => $request->email,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Subscription successful.',
            'code' => 200,
        ], 200);
    }

}

