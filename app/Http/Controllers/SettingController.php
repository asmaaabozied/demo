<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laraeast\LaravelSettings\Facades\Settings;
use DB;

class SettingController extends Controller
{
    public function index()
    {


        return view('dashboard.settings.index');
    }

    /**
     * Update the website global settings.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

//        $files = [
//            'slider',
//        ];
        foreach (
            $request->except(
                array_merge(
                    ['_token', '_method']

                )
            )
            as $key => $value
        ) {
            Settings::set($key, $value);
        }

//        foreach ($files as $file) {
//            Settings::set($file)->addAllMediaFromTokens();
//        }
//        DB::table('media')->where('collection_name','slider')->update(['custom_properties'=>'[]']);

        flash(trans('settings.messages.updated'));

        return back();
    }
}
