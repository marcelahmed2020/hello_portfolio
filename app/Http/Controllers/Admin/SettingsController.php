<?php
namespace App\Http\Controllers\Admin;
use App\Settings;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class SettingsController extends Controller
{
    public function index()
    {
        return view('admin.settings.index');
   }
    public function update(Request $request,$id)
    {
        $data = $this->validate($request,[
            'site_name'                    => 'required|min:3',
            'email'                         => 'required|email|min:3',
            'facebook'                      => 'required|min:3',
            'twitter'                       => 'required|min:3',
            'linkedin'                       => 'required|min:3',
            'skype'                       => 'required',
            'description'                   => 'required|min:3',
            'keywords'                      => 'required|min:3',
            'message_maintenance'          => 'required|min:3',
            'adress'          => 'required|min:3',
        ]);
        $setting = Settings::find($id);
        if (empty($request['facebook_status'])) {
            $data['facebook_status']     =   0;
        }else {
            $data['facebook_status']     =  1;
        }
        if (empty($request['linkedin_status'])) {
            $data['linkedin_status']     =   0;
        }else {
            $data['linkedin_status']     =  1;
        }
        if (empty($request['twitter_status'])) {
            $data['twitter_status']     =   0;
        }else {
            $data['twitter_status']     =  1;
        }
        if (empty($request['skype_status'])) {
            $data['skype_status']     =   0;
        }else {
            $data['skype_status']     =  1;
        }
        if (empty($request['status'])) {
            $data['status']     =   0;
        }else {
            $data['status']     =  1;
        }

        $setting->update($data);
        toastr()->success('Success To Update , Have Fun!');
        return redirect()->back();
   }
}
