<?php

namespace App\Http\Controllers\Web\Backend\SocialLink;

use App\Http\Controllers\Controller;
use App\Models\LinkSocial;
use Illuminate\Http\Request;

class LinkSocialController extends Controller
{
    /**
     * Display the footer settings page.
     */
    public function index() {
        $social_link = LinkSocial::latest('id')->first();
        return view('backend.layouts.social-link.index', compact('social_link'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'facebook_link' => 'nullable|url|max:255',
            'instagram_link' => 'nullable|url|max:255',
            'twitter_link' => 'nullable|url|max:255',
            'tiktok_link' => 'nullable|url|max:255',
            'linkedin_link' => 'nullable|url|max:255',
            'github_link' => 'nullable|url|max:255',
            'youtube_link' => 'nullable|url|max:255',

        ]);

        $data                   = LinkSocial::firstOrNew();
        $data->facebook_link    = $request->facebook_link;
        $data->instagram_link   = $request->instagram_link;
        $data->twitter_link     = $request->twitter_link;
        $data->tiktok_link      = $request->tiktok_link;
        $data->linkedin_link    = $request->linkedin_link;
        $data->github_link      = $request->github_link;
        $data->youtube_link     = $request->youtube_link;
        $data->save();

        return back()->with('notify-success', 'Data Updated Successfully');
    }
}
