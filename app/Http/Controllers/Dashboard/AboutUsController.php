<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\About;
use Intervention\Image\ImageManagerStatic as Image;

class AboutUsController extends Controller
{
//    public function __construct()
//    {
//        //create read update delete
//        $this->middleware(['permission:read-tag'])->only(['index','show']);
//        $this->middleware(['permission:create-tag'])->only(['create','store']);
//        $this->middleware(['permission:update-tag'])->only(['edit']);
//        $this->middleware(['permission:delete_trash'])->only('destroy');
//        $this->middleware(['permission:delete-tag'])->only('disabled');
//    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::where('status',1)->orderBy('one','Desc')->get();
         if (isset(request()->id)){
            $abouts = About::where('id',request()->id)->get();
        }
        return view('dashboard.aboutus.index',compact('abouts'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.aboutus.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->all());
        $rules = [];
        foreach (config('translatable.locales') as $locale) {
            $rules += [$locale . '.title' => ['required','min:2','max:200']];
            $rules += [$locale . '.sub_title' => ['required','min:2','max:200']];
            $rules += [$locale . '.degree' => ['required','min:2','max:200']];
            $rules += [$locale . '.freelance' => ['required','min:2','max:200']];
            $rules += [$locale . '.desc' => ['required','min:2']];
            $rules += [$locale . '.address' => ['required','min:2']];
            $rules += ['phone' => ['required']];
            $rules += ['birthday' => ['required']];
            $rules += ['email' => ['required']];
        }//end of for each
        $image = '';
        if ($request->hasFile('image')) {
            $image_tmp = $request->file('image');
            if ($image_tmp->isValid()) {
                $image_ab = 'admin/img/';
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = rand(111, 99999) . '.' . $extension;
                $news_path = "admin/img/" . $filename;
                Image::make($image_tmp)->save($news_path);
                $rules['image'] = $filename;
            }
        }

        $data = $request->validate($rules);
        auth()->user()->aboutus()->create($data);
        toastr()->success( __('site.added_successfully'));
//
        return back();
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $about = About::findOrFail($id);
        return view('dashboard.aboutus.show',compact(['about']));

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $about = About::findOrFail($id);
        return view('dashboard.aboutus.edit',compact(['about']));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $about = About::findOrFail($id);
        $rules = [];
        foreach (config('translatable.locales') as $locale) {
            $rules += [$locale . '.title' => ['required','min:2','max:200']];
            $rules += [$locale . '.sub_title' => ['required','min:2','max:200']];
            $rules += [$locale . '.degree' => ['required','min:2','max:200']];
            $rules += [$locale . '.freelance' => ['required','min:2','max:200']];
            $rules += [$locale . '.desc' => ['required','min:2']];
            $rules += [$locale . '.address' => ['required','min:2']];
             $rules += ['phone' => ['required']];
            $rules += ['birthday' => ['required']];
            $rules += ['email' => ['required']];
        }//end of for each
        $data = $request->validate($rules);

        $image = '';
        if ($request->hasFile('image')) {
            $image_tmp = $request->file('image');
            if ($image_tmp->isValid()) {
                $image_ab = 'admin/img/';
                if ($about->image != 'default.png') {
                    if (file_exists($image_ab . $about->image)) {
                        unlink($image_ab . $about->image);
                    }
                }
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = rand(111, 99999) . '.' . $extension;
                $news_path = "admin/img/" . $filename;
                Image::make($image_tmp)->save($news_path);
                $data['image'] = $filename;
            }
        }
        else {
            $data['image'] = $request->old_image;
        }
        $data['enabled'] = empty($request->enabled)?0:1;
        $data['edit'] = auth()->user()->id;
         $about->update($data);
         toastr()->success( __('site.update_successfully'));
         return back();

    }

    public function one($id)
    {
        About::where(['one'=>1])->update(['one'=>'0']);
        $about = About::findOrFail($id);
        $about->update(['one'=>1]);
        toastr()->success( __('site.update_successfully'));
        return back();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function del_status($id)
    {
        $about = About::findOrFail($id);
        $about->update(['enabled'=>0,'status'=>0,'one'=>0,'delete'=> auth()->user()->id]);
        $About2 = About::where('enabled',1)->first();
        if (! empty($About2)){
            $About2->update(['one'=>1]);
        }
        toastr()->success( __('site.deleted_successfully'));
        return back();
    }
    public function restore($id)
    {
        $about = About::findOrFail($id);
        $about->update(['enabled'=>1,'status'=>1,'edit'=> auth()->user()->id]);
        toastr()->success( __('site.restored_successfully'));
        return back();
    }
    public function force_del($id)
    {
        $about = About::findOrFail($id);
        $about->delete();
        toastr()->success('Delete About Us Sussessfully..');
        return back();
    }
    public function enabled($id)
    {
        $about = About::findOrFail($id);
        $about->update(['enabled'=>1,'edit'=> auth()->user()->id]);
        toastr()->success('Resore About Us Sussessfully..');
        return back();
    }
    public function disabled($id)
    {
        $about = About::findOrFail($id);
        $about->update(['enabled'=>0,'edit'=> auth()->user()->id]);
        toastr()->success('Resore About Us Sussessfully..');
        return back();
    }

//
}

