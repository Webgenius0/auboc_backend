<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class ReviewController extends Controller
{

    public function storeReview(Request $request)
    {
        $user = auth('api')->user();

        // Validate the request
        $validator = Validator::make($request->all(), [
            'product_id' => 'required|exists:products,id',
            'description' => 'required|string|max:1000',
            'rating' => 'required|integer|min:1|max:5',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'error' => $validator->errors()->first(),
            ], 422);
        }


        // Check if the user has already reviewed this product
        $existingReview = Review::where('user_id', $user->id)
            ->where('product_id', $request->product_id)
            ->first();

        if ($existingReview) {
            return response()->json([
                'status' => false,
                'error' => 'You have already reviewed this product.',
                'code' => 403
            ], 403);
        }





        $productId = $request->product_id;

        // Check if the user has purchased this product
        $hasPurchased = OrderItem::whereHas('order', function ($query) use ($user) {
            $query->where('user_id', $user->id);
        })->where('product_id', $productId)->exists();

        if (!$hasPurchased) {
            return response()->json([
                'status' => false,
                'error' => 'You can only review products you have purchased.',
            ], 403);
        }

        // Store the review
        $reviewData = [
            'user_id' => $user->id,
            'product_id' => $productId,
            'description' => $request->description,
            'rating' => $request->rating,
        ];

        // Handle optional image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('reviews', 'public');
            $reviewData['image'] = $imagePath;
        }

        $review = Review::create($reviewData);

        return response()->json([
            'status' => true,
            'message' => 'Review submitted successfully.',
            'review' => $review,
        ]);
    }



    public function getLatestReviews(): JsonResponse
    {
//        $reviews = Review::where('status', 'active')
        $reviews = Review::with('user:id,name,email,avatar')
            ->latest()
            ->take(20)
            ->orderBy('id', 'desc')
            ->get();


        $formattedReviews = $reviews->map(function ($review) {
            return [
                'id' => $review->id,
                'user_id' => $review->user_id,
                'user_name' => $review->user->name ?? null,
                'user_email' => $review->user->email ?? null,
                'user_avatar' => $review->user->avatar ?? null,
//                'product_id' => $review->product_id,
                'review' => $review->description,
                'rating' => $review->rating,
            ];
        });

        return response()->json([
            'success' => true,
            'status' => Response::HTTP_OK,
            'message' => 'Reviews retrieved successfully',
            'data' => $formattedReviews,
        ]);
    }
}
