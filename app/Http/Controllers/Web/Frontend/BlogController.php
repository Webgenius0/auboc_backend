<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    /**
     * Display the main blog page.
     *
     * @return \Illuminate\View\View The view for the blog page.
     */
    public function blog()
    {
        return view('frontend.layouts.blog.blog');
    }

    /**
     * Display the blog news details page.
     *
     * @return \Illuminate\View\View The view for the blog news details page.
     */
    public function blogNewsDetails()
    {
        return view('frontend.layouts.blog.blog-news-details');
    }

    /**
     * Display the blog podcast details page.
     *
     * @return \Illuminate\View\View The view for the blog podcast details page.
     */
    public function blogPodcastDetails()
    {
        return view('frontend.layouts.blog.blog-podcast-details');
    }

    /**
     * Display the Zelly updates details page.
     *
     * @return \Illuminate\View\View The view for the Zelly updates details page.
     */
    public function blogUpdateDetails()
    {
        return view('frontend.layouts.blog.blog-zelly-updates-details');
    }
}
