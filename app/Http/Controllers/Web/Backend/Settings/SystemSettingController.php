<?php

namespace App\Http\Controllers\Web\Backend\Settings;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\SystemSetting;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class SystemSettingController extends Controller
{
    /**
     * Display the system settings page.
     *
     * @return View
     */
    public function index() {
        $setting = SystemSetting::latest('id')->first();
        return view('backend.layouts.settings.system_settings', compact('setting'));

    }

    /**
     * Update the system settings.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(Request $request) {
        $validator = Validator::make($request->all(), [
            'title'          => 'nullable',
            'email'          => 'nullable',
            'system_name'    => 'nullable',
            'copyright_text' => 'nullable',
            'logo'           => 'nullable|mimes:jpeg,jpg,png,ico,svg',
            'favicon'        => 'nullable|mimes:jpeg,jpg,png,ico,svg',
            'description'    => 'nullable',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        try {
            $setting                 = SystemSetting::firstOrNew();
            $setting->title          = $request->title;
            $setting->email          = $request->email;
            $setting->system_name    = $request->system_name;
            $setting->copyright_text = $request->copyright_text;
            $setting->description    = $request->description;

            if ($request->hasFile('logo')) {
                $setting->logo = Helper::fileUpload($request->file('logo'), 'logos', $setting->title);
            }

            if ($request->hasFile('favicon')) {
                $setting->favicon = Helper::fileUpload($request->file('favicon'), 'favicons', $setting->title);
            }

            $setting->save();

            return back()->with('notify-success', 'System Settings Updated Successfully');
        } catch (Exception) {
            return back()->with('notify-warning', 'Failed to update');
        }
    }
}
