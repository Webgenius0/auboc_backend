<?php

namespace App\Http\Controllers\Web\Backend\CMS\WhyZally;

use App\Enums\Page;
use App\Enums\Section;
use App\Http\Controllers\Controller;
use App\Models\CMS;
use Illuminate\Http\Request;

class WhyZallyPageController extends Controller
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
        $data = CMS::where('page', Page::WhyZallyPage)->where('section', Section::SectionOne)->first();
        return view('backend.layouts.cms.why-zally.section-one', compact('data'));
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
            'sub_button_text' => 'nullable',
        ]);


        // Retrieve existing CMS data for the banner section, if it exists
        $data = CMS::where('page', Page::WhyZallyPage)->where('section', Section::SectionOne)->first();

        // Update or create record
        $data = CMS::updateOrCreate(
            [
                'page' => Page::WhyZallyPage,
                'section' => Section::SectionOne,
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


    //Section Two

    /**
     * Display the second section of the homepage.
     *
     * @return \Illuminate\View\View
     */

    public function sectionTwo()
    {
        // Retrieve the CMS data for the banner section of the homepage
        $data = CMS::where('page', Page::WhyZallyPage)->where('section', Section::SectionTwo)->first();
        return view('backend.layouts.cms.why-zally.section-two', compact('data'));
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
        $data = CMS::where('page', Page::WhyZallyPage)->where('section', Section::SectionTwo)->first();

        // Update or create record
        $data = CMS::updateOrCreate(
            [
                'page' => Page::WhyZallyPage,
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
        $data = CMS::where('page', Page::WhyZallyPage)->where('section', Section::SectionThree)->first();
        return view('backend.layouts.cms.why-zally.section-three', compact('data'));
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
        $data = CMS::where('page', Page::WhyZallyPage)->where('section', Section::SectionThree)->first();

        // Update or create record
        $data = CMS::updateOrCreate(
            [
                'page' => Page::WhyZallyPage,
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
        $data = CMS::where('page', Page::WhyZallyPage)->where('section', Section::SectionFour)->first();
        return view('backend.layouts.cms.why-zally.section-four', compact('data'));
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
        $data = CMS::where('page', Page::WhyZallyPage)->where('section', Section::SectionFour)->first();

        // Update or create record
        $data = CMS::updateOrCreate(
            [
                'page' => Page::WhyZallyPage,
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
        $data = CMS::where('page', Page::WhyZallyPage)->where('section', Section::SectionFive)->first();
        return view('backend.layouts.cms.why-zally.section-five', compact('data'));
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
        $data = CMS::where('page', Page::WhyZallyPage)->where('section', Section::SectionFive)->first();

        // Update or create record
        $data = CMS::updateOrCreate(
            [
                'page' => Page::WhyZallyPage,
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
