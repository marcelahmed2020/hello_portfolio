<?php
namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Subscribe;
use RealRashid\SweetAlert\Facades\Alert;

class ComingSoonController extends Controller
{
   public function coming_soon(){
       $date = strtotime(sitesetting()->date);
       $remaining = $date - time();
       $days_remaining = floor($remaining / 86400);
       $hours_remaining = floor(($remaining % 86400) / 3600);
       $min = floor(($remaining % 3600) / 60);
       $sec = ($remaining % 60);
       $info = ['days'=>$days_remaining,'hours' => $hours_remaining,'mins' => $min,'secs' => $sec];
        return view('coming_soon',compact('info','remaining'));
   }


}
