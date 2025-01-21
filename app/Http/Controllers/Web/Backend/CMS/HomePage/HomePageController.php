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
     *
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
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeHomeSection(Request $request)
    {
        $request->validate([
            'title' => 'nullable',
            'sub_title' => 'nullable',
            'button_text' => 'nullable',
            'sub_button_text' => 'nullable',
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
                'button_text' => $request->button_text,
                'sub_button_text' => $request->sub_button_text,
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
}
