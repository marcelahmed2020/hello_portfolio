<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Password_Back;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\ForgotPassword;

use Intervention\Image\Facades\Image as Image;
class IndexController extends Controller
{ // Start IndexController
    public function dashboard(Request $request)
    {
         return view('admin.dashboard');
    } // dashboard
    public function login(Request $request){
        if ($request->isMethod('post')) {
            $data = $request->all();
            if (\Auth::attempt(['email'=>$data['email'],'password'=>$data['password']])) {
                toastr()->success('Welcome back Again');
                return  redirect(url('/admin/dashboard'));
            } else {
                toastr()->error('Invalid Username Or Password');
                return  redirect(url('/admin/login'));
            }
        }
        return view('admin.guest.login');
    } // login View&Action
    public function forgot_password()
    {
        return view('admin.guest.login');
    }// Forgot Password View
    public function send_mail_password(Request $request)
    {
        $email = $request['email'];
        $exist_email = User::where(['email'=>$email])->first();
        if (isset($exist_email)) {
            $token = Str::random(30);
            $data = ['email'=>$email,'token'=>$token];
            Password_Back::create($data);
            Mail::to($email)->send(new ForgotPassword($data));
            toastr()->success('Check Your [E-mail] Please');
            return  back();
        }else {
            toastr()->error('You Not Have [E-mail] Here..!');
            return  back();
        }

    } // Send Mail Password
    public function password_reset_t($token)
    {
        $check_ex = Password_Back::where(['token'=>$token])->first();
        if (isset($check_ex)) {
            $user = User::where(['email'=>$check_ex->email])->first();
            return view('admin.guest.change_password',compact('user'));
        }else {
            abort(404);
        }
    } // password_reset_t View
    public function change_password(Request $request,$id)
    {
        $user = User::where(['id'=>$id])->first();
        if (isset($user)) {
            $this->validate($request,[
                'password' => 'required|string|min:8|confirmed',

            ]);
            $password = \Hash::make($request['password']);
            $user->update(['password'=>$password]);
            Password_Back::where(['email'=>$user['email']])->delete();
            toastr()->success('Success Change Password , Login Now!!');
            return  redirect(url('/admin/login'));
        }
        // code...
    } // Change Password View&Action
    public function logout()
    {
        auth()->logout();
        \Session::flush();
        toastr()->success('Logged Out Sussessfully');
        return  redirect('/admin/login');
    } // logout
} // End IndexController

