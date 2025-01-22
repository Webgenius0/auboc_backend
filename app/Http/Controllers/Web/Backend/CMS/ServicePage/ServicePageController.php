<?php

namespace App\Http\Controllers\Web\Backend\CMS\ServicePage;

use App\Enums\Page;
use App\Enums\Section;
use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\CMS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class ServicePageController extends Controller
{

    // public function serviceSection()
    // {
    //     // Retrieve the CMS data for the banner section of the homepage
    //     $data = CMS::where('page', Page::ServicePage)->where('section', Section::ServiceSectionOne)->first();
    //     return view('backend.layouts.cms.service-page.service-section', compact('data'));
    // }

    // public function storeServiceSection(Request $request)
    // {
    //     $request->validate([
    //         'title' => 'nullable',
    //         'description' => 'nullable',
    //         'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4048',
    //     ]);

    //     $data = CMS::where('page', Page::ServicePage)->where('section', Section::ServiceSectionOne)->first();

    //     //! Check Image Update
    //     //! Handle image upload and replacement if a new image is provided

    //     if ($request->hasFile('image')) {
    //         //! Remove old image if it exists
    //         if ($data) {
    //             $oldImagePath = $data->image;
    //             if ($oldImagePath && File::exists(public_path($oldImagePath))) {
    //                 File::delete(public_path($oldImagePath));
    //             }
    //         }

    //         //! Generate a random string and store new image
    //         $featuredImage = Helper::fileUpload( $request->file( 'image' ), 'cms-image', $request->image);
    //     }else{
    //         //! Use existing image if no new image is provided
    //         $featuredImage = $data ? $data->image : null;
    //     }

    //     //! Update or create record
    //     $data = CMS::updateOrCreate(
    //         [
    //             'page' => Page::HomePage,
    //             'section' => Section::ServiceSectionOne,
    //         ],
    //         [
    //             'title' => $request->title,
    //             'description' => $request->description,
    //             'image' => $featuredImage,
    //         ]
    //     );

    //     if ($data)
    //     {
    //         return redirect()->back()->with('notify-success', 'Data Updated Successfully');
    //     }
    //     else
    //     {
    //         return redirect()->back()->with('notify-warning', 'Data Update Failed');
    //     }
    // }






    public function serviceSection($section)
    {
        $data = CMS::where('page', Page::ServicePage)->where('section', $section)->first();
        return view('backend.layouts.cms.service-page.service-section', compact('data', 'section'));
    }

    public function storeServiceSection(Request $request)
    {
        $request->validate([
            'title' => 'nullable',
            'description' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4048',
            'section' => 'required|string',
        ]);

        $section = $request->input('section');
        $data = CMS::where('page', Page::ServicePage)->where('section', $section)->first();

        if ($request->hasFile('image')) {
            if ($data) {
                $oldImagePath = $data->image;
                if ($oldImagePath && File::exists(public_path($oldImagePath))) {
                    File::delete(public_path($oldImagePath));
                }
            }
            $featuredImage = Helper::fileUpload($request->file('image'), 'cms-image' . $section, $request->image);
        } else {
            $featuredImage = $data ? $data->image : null;
        }

        CMS::updateOrCreate(
            ['page' => Page::ServicePage, 'section' => $section],
            ['title' => $request->title, 'description' => $request->description, 'image' => $featuredImage]
        );

        return redirect()->back()->with('notify-success', 'Data Updated Successfully');
    }



}
