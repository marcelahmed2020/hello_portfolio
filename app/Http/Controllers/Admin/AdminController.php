<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Image;
use App\About;
class AdminController extends Controller
{
   public function profile()
   {
     return view('admin.profile');
   }
   public function profile_update(Request $request,$id)
    {
        $user = User::findOrFail($id);
        $this->validate($request,[
            'name' => 'required|string|min:2',
            'email'         => 'required|max:255|unique:users,email,'.$id,
        ]);
        if (empty($request->password)) {
            $password = $request->old_password;
        }else {
            if (strlen($request->password) < 6) {
                toastr()->error('Should Password Be More Than 6 Char'); // i want to display this one
                return redirect()->back();
            }
            if (strlen($request->password) > 100) {
                toastr()->error('Should Password Be Less Than 100 Char!'); // i want to display this one
                return redirect()->back();
            }

            $password = \Hash::make($request['password']);

        }
        if ($request->hasFile('image')) {
            $image_tmp =  $request->file('image');
            if ($image_tmp->isValid()) {
                $image_ab = 'marc/images/';
                if (file_exists($image_ab.$user->image)) {
                    unlink($image_ab.$user->image);
                }
                $extension =  $image_tmp->getClientOriginalExtension();
                $filename = rand(111,99999).'.'.$extension;
                $news_path = "marc/images/".$filename;
                Image::make($image_tmp)->save($news_path);
                $image           =  $filename;
            }
        }else {
            $image           =  $request->old_image;
        }
        if ($request->hasFile('max_image')) {
            $image_tmp =  $request->file('max_image');
            if ($image_tmp->isValid()) {
                //
                $image_ab = 'marc/images/';
                if (file_exists($image_ab.$user->max_image)) {
                    unlink($image_ab.$user->max_image);
                }
                $extension =  $image_tmp->getClientOriginalExtension();
                $filename = rand(111,99999).'.'.$extension;
                $news_path = "marc/images/".$filename;
                Image::make($image_tmp)->save($news_path);
                $max_image           =  $filename;
            }
        }else {
            $max_image           =  $request->old_max_image;
        }
        $user->update([
            'name'           => $request['name'],
            'email'          => $request['email'],
            'password'       => $password,
            'image'          => $image,
            'max_image'      => $max_image
        ]);
            toastr()->success('Update Success Admin');
        return back();
   }
   public function about(Request $request)
    {
        if ($request->isMethod('post')) {

            $update =  About::findOrFail($request->about_id);
            $data = $this->validate($request,[
                'age'           => 'required',
                'phone'           => 'required',
                'title'           => 'required|min:3|max:200',
                'freelance'           => 'required|min:3|max:200',
                'degree'           => 'required|min:3|max:200',
                'sub_title'           => 'required|min:3|max:200',
                'website'           => 'required|max:200',
                'desc'           => 'required|string|min:3',
                'image'                 => 'sometimes|required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            if ($request->hasFile('image')) {
                $image_tmp =  $request->file('image');
                if ($image_tmp->isValid()) {
                    $image_ab = 'marc/images/';
                    if (file_exists($image_ab.$update->image)) {
                        unlink($image_ab.$update->image);
                    }
                    $extension =  $image_tmp->getClientOriginalExtension();
                    $filename = rand(111,99999).'.'.$extension;
                    $news_path = "marc/images/".$filename;
                    Image::make($image_tmp)->save($news_path);
                    $data['image']           =  $filename;
                }
            }  else {
                $data['image']           =  $request->old_image;
            }

            $update->update($data);
            toastr()->success('Success To Update About Me.. ');
            return back();



        }
        return view('admin.about');
    }
}
