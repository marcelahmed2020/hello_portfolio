<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Settings;
class SettingsController extends Controller
{
    public function index()
    {
     return view('dashboard.settings.index');
    }
    public function update(Request $request, $id)
    {
        dd($request->all());
        $settings = Settings::findOrFail($id);
        $rules = [];
        foreach (config('translatable.locales') as $locale) {
            $rules += [$locale . '.site_name' => ['required','min:2','max:200']];
            $rules += [$locale . '.adress' => ['required','min:2','max:200']];
            $rules += [$locale . '.description' => ['required','min:2']];
            $rules += [$locale . '.keywords' => ['required','min:2']];
            $rules += [$locale . '.message_maintenance' => ['required','min:2']];
            $rules += ['phone1' => ['required']];
            $rules += ['email' => ['required','min:2']];
            $rules += ['facebook' => ['sometimes']];
            $rules += ['twitter' => ['sometimes']];
            $rules += ['telegram' => ['sometimes']];
            $rules += ['vk' => ['sometimes']];
            $rules += ['whatsapp' => ['sometimes']];
         }//end of for each
        $data = $request->validate($rules);
        $data['facebook_status'] = empty($request->facebook_status)?0:1;
        $data['twitter_status'] = empty($request->twitter_status)?0:1;
        $data['vk_status'] = empty($request->vk_status)?0:1;
        $data['telegram_status'] = empty($request->telegram_status)?0:1;
        $data['whatsapp_status'] = empty($request->whatsapp_status)?0:1;
        $data['closed'] = empty($request->closed)?0:1;
        $data['edit'] = auth()->user()->id;
        $settings->update($data);
        toastr()->success( __('site.update_successfully'));
        return back();

    }

}
