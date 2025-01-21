<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    public function index(): JsonResponse
    {
        $categories = Category::where('status','active')->get();
        return response()->json([
            'success' => true,
            'status' => Response::HTTP_OK,
            'message' => 'Categories retrieved successfully',
            'data' => $categories,
        ]);
    }
}
