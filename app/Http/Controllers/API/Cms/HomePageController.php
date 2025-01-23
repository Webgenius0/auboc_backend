<?php

namespace App\Http\Controllers\API\Cms;

use App\Enums\Page;
use App\Enums\Section;
use App\Http\Controllers\Controller;
use App\Models\CMS;
use Illuminate\Http\Request;

class HomePageController extends Controller
{

    public function heroSection()
    {
        try {
            // Specific fields fetch korte `select` use korchi
            $data = CMS::where('page', Page::HomePage)
                ->where('section', Section::HomeSection)
                ->select('id','title', 'sub_title')
                ->where('status', 'active') // Active status filter
                ->get();

            if ($data->isEmpty()) {
                return response()->json([
                    'status' => true,
                    'message' => 'No data found for About Feature section.',
                    'data' => [],
                ], 404); // HTTP status 404
            }

            return response()->json([
                'status' => true,
                'message' => 'Data fetched successfully.',
                'data' => $data,
            ], 200); // HTTP status 200
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Something went wrong!',
                'error' => $e->getMessage(),
            ], 500); // HTTP status 500
        }
    }


}
