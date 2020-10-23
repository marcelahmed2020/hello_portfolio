<?php
namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Auth;
use Session;
use App\Password_Back;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\ForgotPassword;
class IndexControllr extends Controller
{
    public function dashboard(){
         return view('dashboard.dashboard');
    }

    public function login(Request $request){

        if ($request->isMethod('post')) {
            $data =  $this->validate($request,['email' => 'required|email','password' => 'required']);
            if (Auth::attempt(['email' => $data['email'], 'password' => $data['password'] , 'admin'=>1,'enabled'=>1,'status'=>1]))
            {
                toastr()->success('Welcome back Again');
                return  redirect(route('admin.dashboard'));
            } else {
                toastr()->error('Invalid Username Or Password');
                return  redirect(route('admin.login'));
            }
        }
        return view('dashboard.guest.login');
    }
    public function forgotPassword(Request  $request)
    {
        if ($request->isMethod('post')) {
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
        }
        return view('dashboard.guest.forgot-password');
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
    public function password_reset($token)
    {
//        dd('ssssssssssss');
        $check_ex = Password_Back::where(['token'=>$token])->first();
        if (isset($check_ex)) {
            $user = User::where(['email'=>$check_ex->email])->first();

            return view('dashboard.guest.change-password',compact('user'));
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
//logout
    public function logout()
    {
        auth()->logout();
        \Session::flush();
        toastr()->success('Logged Out Sussessfully');
        return  redirect('/admin/login');
    } // logout
}
