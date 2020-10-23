<?php
namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use MongoDB\Driver\Session;

use Closure;
use Session;
use App;
use Config;

class IndexController extends Controller
{
   public function index(Request  $request)
   {
//       $languages = ['en', 'ru', 'ar'];
//       $browserLanguage = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
//       $lang = in_array($browserLanguage,$languages) ?  $browserLanguage : 'ru';
//       if (request()->path() != $browserLanguage){
//           App::setLocale($lang);
//         //return  redirect("/".$lang);
//
//       }
//       dd(request()->path());
        return view('frontend.index');
   }
   public function contact(Request $request)
   {
//        dd($request->all());/
//  "name" => "Marcel Ahmed"
//  "email" => "nubianmarcel@gmail.com"
//  "subject" => "we want creat website"
//  "message" => "we want creat website"
       $data = $request->validate([
           'name' => 'required|min:2|max:200',
           'email' => 'required|email|min:2|max:200',
           'subject' => 'required|min:2|max:300',
           'message' => 'required|min:2|max:1000',
       ]);
       $details = [
           'name' => $request->name,
           'email' => $request->email,
           'subject' => $request->subject,
           'message' => $request->message,
        ];
      $se = App\Settings::first();
      \Mail::to($se->email)->send(new \App\Mail\sendMessageContact($details));
//       dd("Email is Sent.");
    return __('site.success_to_send_message');
   }
}
