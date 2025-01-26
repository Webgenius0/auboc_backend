<?php

namespace App\Http\Controllers\Web\Backend\CMS\HomePage;

use App\Enums\Page;
use App\Enums\Section;
use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\CMS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class HomePageController extends Controller
{
    /**
     * Display the first section of the homepage.
     * for the banner section text
     * @return \Illuminate\View\View
     */

    public function homeSection()
    {
        // Retrieve the CMS data for the banner section of the homepage
        $data = CMS::where('page', Page::HomePage)->where('section', Section::HomeSection)->first();
        return view('backend.layouts.cms.home-page.home-section', compact('data'));
    }

    /**
     * Store or update the first section of the homepage.
     *for the banner section text
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeHomeSection(Request $request)
    {
        $request->validate([
            'title' => 'nullable',
            'sub_title' => 'nullable',
        ]);


        // Retrieve existing CMS data for the banner section, if it exists
        $data = CMS::where('page', Page::HomePage)->where('section', Section::HomeSection)->first();

        // Update or create record
        $data = CMS::updateOrCreate(
            [
                'page' => Page::HomePage,
                'section' => Section::HomeSection,
            ],
            [
                'title' => $request->title,
                'sub_title' => $request->sub_title,
            ]
        );

        if ($data)
        {
            return redirect()->back()->with('notify-success', 'Data Updated Successfully');
        }
        else
        {
            return redirect()->back()->with('notify-warning', 'Data Update Failed');
        }
    }


    /**
     * Display the first section of the homepage.
     * for the banner section images
     * @return \Illuminate\View\View
     */
    public function homeSectionImage()
    {
        // Retrieve the CMS data for the banner section of the homepage hero Images
        $data[0] = CMS::where('page', Page::HomePage)->where('section', Section::HomeSectionImage)->first();
        $data[1] = CMS::where('page', Page::HomePage)->where('section', Section::HomeSectionImage)->skip(1)->first();
        $data[2] = CMS::where('page', Page::HomePage)->where('section', Section::HomeSectionImage)->skip(2)->first();
        $data[3] = CMS::where('page', Page::HomePage)->where('section', Section::HomeSectionImage)->skip(3)->first();
        $data[4] = CMS::where('page', Page::HomePage)->where('section', Section::HomeSectionImage)->skip(4)->first();


        return view('backend.layouts.cms.home-page.home-section-image', compact('data'));
    }


    /**
     * Store or update the first section of the homepage.
     *for the banner section text
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function homeSectionImageOne(Request $request)
    {
        $request->validate([
            'title' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4048',
        ]);
        $getData = CMS::where('page', Page::HomePage)->where('section', Section::HomeSectionImage)->first();

        // Check Image Update
        // Handle image upload and replacement if a new image is provided

        if ($request->hasFile('image')) {
            // Remove old image if it exists
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
                    'image' => $featuredImage,
                ]
            );
        } else {
            $data = CMS::create(
                [
                    'page' => Page::HomePage,
                    'section' => Section::HomeSectionImage,
                    'title' => $request->title,
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

    public function homeSectionImageTwo(Request $request)
    {
        $request->validate([
            'title' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4048',
        ]);
        $getData = CMS::where('page', Page::HomePage)->where('section', Section::HomeSectionImage)->skip(1)->first();

        // Check Image Update
        // Handle image upload and replacement if a new image is provided

        if ($request->hasFile('image')) {
            // Remove old image if it exists
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
                    'image' => $featuredImage,
                ]
            );
        } else {
            $data = CMS::create(
                [
                    'page' => Page::HomePage,
                    'section' => Section::HomeSectionImage,
                    'title' => $request->title,
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

    public function homeSectionImageThree(Request $request)
    {
        $request->validate([
            'title' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4048',
        ]);
        $getData = CMS::where('page', Page::HomePage)->where('section', Section::HomeSectionImage)->skip(2)->first();

        // Check Image Update
        // Handle image upload and replacement if a new image is provided

        if ($request->hasFile('image')) {
            // Remove old image if it exists
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
                    'image' => $featuredImage,
                ]
            );
        } else {
            $data = CMS::create(
                [
                    'page' => Page::HomePage,
                    'section' => Section::HomeSectionImage,
                    'title' => $request->title,
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

    public function homeSectionImageFour(Request $request)
    {
        $request->validate([
            'title' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4048',
        ]);
        $getData = CMS::where('page', Page::HomePage)->where('section', Section::HomeSectionImage)->skip(3)->first();

        // Check Image Update
        // Handle image upload and replacement if a new image is provided

        if ($request->hasFile('image')) {
            // Remove old image if it exists
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
                    'image' => $featuredImage,
                ]
            );
        } else {
            $data = CMS::create(
                [
                    'page' => Page::HomePage,
                    'section' => Section::HomeSectionImage,
                    'title' => $request->title,
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

    public function homeSectionImageFive(Request $request)
    {
        $request->validate([
            'title' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4048',
        ]);
        $getData = CMS::where('page', Page::HomePage)->where('section', Section::HomeSectionImage)->skip(4)->first();

        // Check Image Update
        // Handle image upload and replacement if a new image is provided

        if ($request->hasFile('image')) {
            // Remove old image if it exists
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
                    'image' => $featuredImage,
                ]
            );
        } else {
            $data = CMS::create(
                [
                    'page' => Page::HomePage,
                    'section' => Section::HomeSectionImage,
                    'title' => $request->title,
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
