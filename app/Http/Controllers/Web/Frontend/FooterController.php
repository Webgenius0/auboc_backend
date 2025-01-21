<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;

class FooterController extends Controller
{
    /**
     * Display the events page.
     *
     * @return \Illuminate\View\View The view for the events page.
     */
    public function events()
    {
        return view('frontend.layouts.footer.events');
    }

    /**
     * Display the team page.
     *
     * @return \Illuminate\View\View The view for the team page.
     */
    public function team()
    {
        return view('frontend.layouts.footer.team');
    }

    /**
     * Display the contact page.
     *
     * @return \Illuminate\View\View The view for the contact page.
     */
    public function contact()
    {
        return view('frontend.layouts.footer.contact');
    }

    /**
     * Display the FAQs page.
     *
     * @return \Illuminate\View\View The view for the FAQs page.
     */
    public function faqs()
    {
        return view('frontend.layouts.footer.faq');
    }

    /**
     * Display the downloads page.
     *
     * @return \Illuminate\View\View The view for the downloads page.
     */
    public function downloads()
    {
        return view('frontend.layouts.footer.downloads');
    }

    /**
     * Display the legal page.
     *
     * @return \Illuminate\View\View The view for the legal page.
     */
    public function legal()
    {
        return view('frontend.layouts.footer.legal');
    }

    /**
     * Display the media center page.
     *
     * @return \Illuminate\View\View The view for the media center page.
     */
    public function mediaCenter()
    {
        return view('frontend.layouts.footer.media-center');
    }

    /**
     * Display the event details page for flip events.
     *
     * @return \Illuminate\View\View The view for the flip event details page.
     */
    public function eventDetailsFlip()
    {
        return view('frontend.layouts.footer.event-details-flip');
    }

    /**
     * Display the event details page for session events.
     *
     * @return \Illuminate\View\View The view for the session event details page.
     */
    public function eventDetailsSession()
    {
        return view('frontend.layouts.footer.event-details-session');
    }
}
