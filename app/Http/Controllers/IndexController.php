<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\AboutData;
use App\PortfolioData;
use App\PortfolioMeta;
use App\Mail\Contact;
use App\ContactUs;
class IndexController extends Controller
{
   public function index(){
//       $subjectVal  = "It was nice meeting you. May you shine brightly.";
//       $x = str_replace('.', '.<br> ', $subjectVal);
//        dd($x );

      return view('index');
   }
   public function sendEmail(Request $request)
   {
       $data = $this->validate($request,[
           'name'           => 'required|string|min:4',
           'email'           => 'required|email|max:100',
           'subject'           => 'required|min:8|max:100',
           'message'           => 'required|string|min:3|max:255'
       ]);
       $details = [
           'name' =>   $request->name,
           'email' =>   $request->email,
           'message' =>   $request->message,
           'subject' =>   $request->subject,
           'site_name' => sitesetting()->site_name
       ];
//       ContactUs::create($data);
       $resec = filter_var(sitesetting()->email, FILTER_SANITIZE_EMAIL); // site e-mail from database in dir app\OurSt\Helpers.php
       \Mail::to($resec)->send(new Contact($details));
       toastr()->success('Success To Send Email , Marcel!');
       return redirect()->back();

   }

}
