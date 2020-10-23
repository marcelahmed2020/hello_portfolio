<?php
namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
class AdminsController extends Controller
{
    public function index()
    {
         return view('dashboard.profile.index');
    }

    public function update(Request $request, $id)
    {
        $admin = User::findOrFail($id);
        $this->validate($request, [
            'name' => 'required|string|min:4',
//            'password' => 'sometimes|required|min:6',
            'email' => 'required|max:255|unique:users,email,' . $id,
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
            }

            $password = \Hash::make($request['password']);

            $min_image = '';
        if ($request->hasFile('min_image')) {
            $image_tmp = $request->file('min_image');
            if ($image_tmp->isValid()) {
                $image_ab = 'admin/img/';
                if ($admin->min_image != 'default.png') {
                    if (file_exists($image_ab . $admin->min_image)) {
                        unlink($image_ab . $admin->min_image);
                    }
                }
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = rand(111, 99999) . '.' . $extension;
                $news_path = "admin/img/" . $filename;
                Image::make($image_tmp)->save($news_path);
                $min_image = $filename;
            }
           }
        else {
            $min_image = $request->old_min_image;
           }
        $max_image = '';
        if ($request->hasFile('max_image')) {
            $image_tmp = $request->file('max_image');
            if ($image_tmp->isValid()) {
                $image_ab = 'admin/img/';
                if ($admin->max_image != 'default.png') {
                    if (file_exists($image_ab . $admin->max_image)) {
                        unlink($image_ab . $admin->max_image);
                    }
                }
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = rand(111, 99999) . '.' . $extension;
                $news_path = "admin/img/" . $filename;
                Image::make($image_tmp)->save($news_path);
                $max_image = $filename;
            }
        }
        else {
            $max_image = $request->old_max_image;
        }
        $admin->update(['edit' => auth()->id(), 'max_image' => $max_image,  'min_image' => $min_image,
            'name' => $request['name'], 'email' => $request['email'], 'password' => $password]);

        toastr()->success( __('site.update_successfully'));
        return back();
    }



}
