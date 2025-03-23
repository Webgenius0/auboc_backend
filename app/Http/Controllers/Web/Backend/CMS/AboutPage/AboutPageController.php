<?php

namespace App\Http\Controllers\Web\Backend\CMS\AboutPage;

use App\Enums\Page;
use App\Enums\Section;
use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\CMS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AboutPageController extends Controller
{
    public function aboutFeature()
    {
        $data[0] = CMS::where('page', Page::AboutPage)->where('section', Section::AboutSection)->first();
        $data[1] = CMS::where('page', Page::AboutPage)->where('section', Section::AboutSection)->skip(1)->first();
        $data[2] = CMS::where('page', Page::AboutPage)->where('section', Section::AboutSection)->skip(2)->first();
        $data[3] = CMS::where('page', Page::AboutPage)->where('section', Section::AboutSection)->skip(3)->first();
        $data[4] = CMS::where('page', Page::AboutPage)->where('section', Section::AboutSection)->skip(4)->first();

        return view('backend.layouts.cms.about-page.about-section', compact('data'));
    }


    public function storeaboutFeature(Request $request)
    {
        $request->validate([
            'title'         => 'nullable',
            'sub_title'     => 'nullable',
            'image'         => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4048',
        ]);

        $data = CMS::where('page', Page::AboutPage)->where('section', Section::AboutSection)->first();

        //! Check Image Update
        //! Handle image upload and replacement if a new image is provided

        if ($request->hasFile('image')) {
            if ($data) {
                $oldImagePath = $data->image;
                if ($oldImagePath && File::exists(public_path($oldImagePath))) {
                    File::delete(public_path($oldImagePath));
                }
            }

            $featuredImage = Helper::fileUpload($request->file('image'), 'cms-image', $request->image);
        } else {
            $featuredImage = $data ? $data->image : null;
        }

        // Update or create record
        $data = CMS::updateOrCreate(
            [
                'page'          => Page::AboutPage,
                'section'       => Section::AboutSection,
            ],
            [
                'title'         => $request->title,
                'sub_title'     => strip_tags($request->sub_title),
                'image'         => $featuredImage,
            ]
        );

        if ($data) {
            return redirect()->back()->with('notify-success', 'Data Updated Successfully');
        } else {
            return redirect()->back()->with('notify-warning', 'Data Update Failed');
        }
    }



    public function storeaboutFeatureItemOne(Request $request)
    {
        $request->validate([
            'title'             => 'nullable',
            'sub_title'         => 'nullable',
            'image'             => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4048',
        ]);
        $getData = CMS::where('page', Page::AboutPage)->where('section', Section::AboutSection)->skip(1)->first();

        //!! Check Image Update
        //!! Handle image upload and replacement if a new image is provided

        if ($request->hasFile('image')) {
            if ($getData) {
                $oldImagePath = $getData->image;
                if ($oldImagePath && File::exists(public_path($oldImagePath))) {
                    File::delete(public_path($oldImagePath));
                }
            }

            $featuredImage = Helper::fileUpload($request->file('image'), 'cms-image', $request->image);
        } else {

            $featuredImage = $getData ? $getData->image : null;
        }

        if ($getData) {
            $data = $getData->update(
                [
                    'title'         => $request->title,
                    'sub_title'     => strip_tags($request->sub_title),
                    'image'         => $featuredImage,
                ]
            );
        } else {
            $data = CMS::create(
                [
                    'page'          => Page::AboutPage,
                    'section'       => Section::AboutSection,
                    'title'         => $request->title,
                    'sub_title'     => strip_tags($request->sub_title),
                    'image'         => $featuredImage,

                ],
            );
        }

        if ($data) {
            return redirect()->back()->with('notify-success', 'Data Updated Successfully');
        } else {
            return redirect()->back()->with('notify-warning', 'Data Update Failed');
        }
    }


    public function storeaboutFeatureItemTwo(Request $request)
    {
        $request->validate([
            'title'             => 'nullable',
            'sub_title'         => 'nullable',
            'image'             => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4048',
        ]);
        $getData = CMS::where('page', Page::AboutPage)->where('section', Section::AboutSection)->skip(2)->first();

        //!! Check Image Update
        //!! Handle image upload and replacement if a new image is provided

        if ($request->hasFile('image')) {
            if ($getData) {
                $oldImagePath = $getData->image;
                if ($oldImagePath && File::exists(public_path($oldImagePath))) {
                    File::delete(public_path($oldImagePath));
                }
            }

            $featuredImage = Helper::fileUpload($request->file('image'), 'cms-image', $request->image);
        } else {

            $featuredImage = $getData ? $getData->image : null;
        }

        if ($getData) {
            $data = $getData->update(
                [
                    'title'     => $request->title,
                    'sub_title' => strip_tags($request->sub_title),
                    'image'     => $featuredImage,
                ]
            );
        } else {
            $data = CMS::create(
                [
                    'page'      => Page::AboutPage,
                    'section'   => Section::AboutSection,
                    'title'     => $request->title,
                    'sub_title' => strip_tags($request->sub_title),
                    'image'     => $featuredImage,

                ],
            );
        }

        if ($data) {
            return redirect()->back()->with('notify-success', 'Data Updated Successfully');
        } else {
            return redirect()->back()->with('notify-warning', 'Data Update Failed');
        }
    }


    public function storeaboutFeatureItemThree(Request $request)
    {
        $request->validate([
            'title' => 'nullable',
            'sub_title' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4048',
        ]);
        $getData = CMS::where('page', Page::AboutPage)->where('section', Section::AboutSection)->skip(3)->first();

        //!! Check Image Update
        //!! Handle image upload and replacement if a new image is provided

        if ($request->hasFile('image')) {
            if ($getData) {
                $oldImagePath = $getData->image;
                if ($oldImagePath && File::exists(public_path($oldImagePath))) {
                    File::delete(public_path($oldImagePath));
                }
            }

            $featuredImage = Helper::fileUpload($request->file('image'), 'cms-image', $request->image);
        } else {

            $featuredImage = $getData ? $getData->image : null;
        }

        if ($getData) {
            $data = $getData->update(
                [
                    'title' => $request->title,
                    'sub_title' => strip_tags($request->sub_title),
                    'image' => $featuredImage,
                ]
            );
        } else {
            $data = CMS::create(
                [
                    'page' => Page::AboutPage,
                    'section' => Section::AboutSection,
                    'title' => $request->title,
                    'sub_title' => strip_tags($request->sub_title),
                    'image' => $featuredImage,

                ],
            );
        }

        if ($data) {
            return redirect()->back()->with('notify-success', 'Data Updated Successfully');
        } else {
            return redirect()->back()->with('notify-warning', 'Data Update Failed');
        }
    }
}
