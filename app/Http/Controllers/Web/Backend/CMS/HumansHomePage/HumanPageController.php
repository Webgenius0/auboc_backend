<?php

namespace App\Http\Controllers\Web\Backend\CMS\HumansHomePage;

use App\Enums\Page;
use App\Enums\Section;
use App\Http\Controllers\Controller;
use App\Models\CMS;
use Illuminate\Http\Request;

class HumanPageController extends Controller
{
    //Section One

    /**
     * Display the first section of the homepage.
     *
     * @return \Illuminate\View\View
     */

    public function sectionOne()
    {
        // Retrieve the CMS data for the banner section of the homepage
        $data = CMS::where('page', Page::HumanPage)->where('section', Section::SectionOne)->first();
        return view('backend.layouts.cms.humans-home-page.section-one', compact('data'));
    }

    /**
     * Store or update the first section of the homepage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeSectionOne(Request $request)
    {
        $request->validate([
            'title' => 'nullable',
            'sub_title' => 'nullable',
            'button_text' => 'nullable',
        ]);


        // Retrieve existing CMS data for the banner section, if it exists
        $data = CMS::where('page', Page::HumanPage)->where('section', Section::SectionOne)->first();

        // Update or create record
        $data = CMS::updateOrCreate(
            [
                'page' => Page::HumanPage,
                'section' => Section::SectionOne,
            ],
            [
                'title' => $request->title,
                'sub_title' => $request->sub_title,
                'button_text' => $request->button_text,
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


    //Section Two

    /**
     * Display the second section of the homepage.
     *
     * @return \Illuminate\View\View
     */

    public function sectionTwo()
    {
        // Retrieve the CMS data for the banner section of the homepage
        $data = CMS::where('page', Page::HumanPage)->where('section', Section::SectionTwo)->first();
        return view('backend.layouts.cms.humans-home-page.section-two', compact('data'));
    }

    /**
     * Store or update the second section of the homepage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeSectionTwo(Request $request)
    {
        $request->validate([
            'title' => 'nullable',
            'sub_title' => 'nullable',
        ]);


        // Retrieve existing CMS data for the banner section, if it exists
        $data = CMS::where('page', Page::HumanPage)->where('section', Section::SectionTwo)->first();

        // Update or create record
        $data = CMS::updateOrCreate(
            [
                'page' => Page::HumanPage,
                'section' => Section::SectionTwo,
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

    //Section Three

    /**
     * Display the third section of the homepage.
     *
     * @return \Illuminate\View\View
     */

    public function sectionThree()
    {
        // Retrieve the CMS data for the banner section of the homepage
        $data = CMS::where('page', Page::HumanPage)->where('section', Section::SectionThree)->first();
        return view('backend.layouts.cms.humans-home-page.section-three', compact('data'));
    }

    /**
     * Store or update the first section of the homepage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeSectionThree(Request $request)
    {
        $request->validate([
            'title' => 'nullable',
            'sub_title' => 'nullable',
        ]);


        // Retrieve existing CMS data for the banner section, if it exists
        $data = CMS::where('page', Page::HumanPage)->where('section', Section::SectionThree)->first();

        // Update or create record
        $data = CMS::updateOrCreate(
            [
                'page' => Page::HumanPage,
                'section' => Section::SectionThree,
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

    // Section Four

    /**
     * Display the fourth section of the homepage.
     *
     * @return \Illuminate\View\View
     */

    public function sectionFour()
    {
        // Retrieve the CMS data for the banner section of the homepage
        $data = CMS::where('page', Page::HumanPage)->where('section', Section::SectionFour)->first();
        return view('backend.layouts.cms.humans-home-page.section-four', compact('data'));
    }

    /**
     * Store or update the first section of the homepage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeSectionFour(Request $request)
    {
        $request->validate([
            'title' => 'nullable',
            'sub_title' => 'nullable',
        ]);


        // Retrieve existing CMS data for the banner section, if it exists
        $data = CMS::where('page', Page::HumanPage)->where('section', Section::SectionFour)->first();

        // Update or create record
        $data = CMS::updateOrCreate(
            [
                'page' => Page::HumanPage,
                'section' => Section::SectionFour,
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

    //Section Five

    /**
     * Display the fifth section of the homepage.
     *
     * @return \Illuminate\View\View
     */

    public function sectionFive()
    {
        // Retrieve the CMS data for the banner section of the homepage
        $data = CMS::where('page', Page::HumanPage)->where('section', Section::SectionFive)->first();
        return view('backend.layouts.cms.humans-home-page.section-five', compact('data'));
    }

    /**
     * Store or update the first section of the homepage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeSectionFive(Request $request)
    {
        $request->validate([
            'title' => 'nullable',
            'sub_title' => 'nullable',
        ]);


        // Retrieve existing CMS data for the banner section, if it exists
        $data = CMS::where('page', Page::HumanPage)->where('section', Section::SectionFive)->first();

        // Update or create record
        $data = CMS::updateOrCreate(
            [
                'page' => Page::HumanPage,
                'section' => Section::SectionFive,
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
}
