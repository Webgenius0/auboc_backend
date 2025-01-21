<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\LinkSocial;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SocialLinkController extends Controller
{
    public function index(): JsonResponse
    {
        $social_links = LinkSocial::where('status','active')->get();
        return response()->json([
            'success' => true,
            'status' => Response::HTTP_OK,
            'message' => 'Social Links Retrieved Successfully',
            'data' => $social_links,
        ]);
    }
}
