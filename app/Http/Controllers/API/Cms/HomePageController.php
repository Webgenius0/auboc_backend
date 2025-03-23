<?php

namespace App\Http\Controllers\API\Cms;

use App\Enums\Page;
use App\Enums\Section;
use App\Http\Controllers\Controller;
use App\Models\CMS;

class HomePageController extends Controller
{

    /**
     * Controller for Home Page
     * It's for Home Page Hero Section Text
     * @package App\Http\Controllers\API\Cms
     * @author Satya Mohanta <satyamohanta3@gmail.com>
     */
    public function heroSection()
    {
        try {
            $data = CMS::where('page', Page::HomePage)
                ->where('section', Section::HomeSection)
                ->select('id','title', 'sub_title')
                ->where('status', 'active')
                ->get();

            if ($data->isEmpty()) {
                return response()->json([
                    'status'    => true,
                    'message'   => 'No data found for About Feature section.',
                    'data'      => [],
                ], 404);
            }

            return response()->json([
                'status'        => true,
                'message'       => 'Data fetched successfully.',
                'data'          => $data,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status'        => false,
                'message'       => 'Something went wrong!',
                'error'         => $e->getMessage(),
            ], 500);
        }
    }


     /**
     * Controller for Home Page
     * It's for Home Page Hero Section Images
     * @package App\Http\Controllers\API\Cms
     * @author Satya Mohanta <satyamohanta3@gmail.com>
     */
    public function heroSectionImage()
    {
        try {
            $data = CMS::where('page', Page::HomePage)
                ->where('section', Section::HomeSectionImage)
                ->select('id','title', 'image')
                ->where('status', 'active')
                ->get();

            if ($data->isEmpty()) {
                return response()->json([
                    'status'    => true,
                    'message'   => 'No data found for About Feature section.',
                    'data'      => [],
                ], 404);
            }

            return response()->json([
                'status'        => true,
                'message'       => 'Data fetched successfully.',
                'data'          => $data,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status'        => false,
                'message'       => 'Something went wrong!',
                'error'         => $e->getMessage(),
            ], 500);
        }
    }


}
