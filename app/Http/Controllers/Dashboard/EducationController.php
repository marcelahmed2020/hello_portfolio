<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
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
        $educations = Education::where('status',1)->get();
        if (isset(request()->id)){
            $educations = Education::where('id',request()->id)->get();
        }
        return view('dashboard.educations.index',compact('educations'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.educations.create');
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
            $rules += [$locale . '.desc' => ['required','min:2']];
            $rules += ['from' => ['required']];
            $rules += ['to' => ['required']];
        }//end of for each
        $data = $request->validate($rules);
        $data['enabled'] = empty($request->enabled)?0:1;
        auth()->user()->education()->create($data);
        toastr()->success( __('site.added_successfully'));
        return back();
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\About  $educations
     * @return \Illuminate\Http\Response
     */
//    public function show($id)
//    {
//        $educations = Education::findOrFail($id);
//        return view('dashboard.educations.show',compact(['about']));
//
//    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About  $educations
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $education = Education::findOrFail($id);
        return view('dashboard.educations.edit',compact(['education']));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\About  $educations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $educations = Education::findOrFail($id);
        $rules = [];
        foreach (config('translatable.locales') as $locale) {
            $rules += [$locale . '.title' => ['required','min:2','max:200']];
            $rules += [$locale . '.sub_title' => ['required','min:2','max:200']];
            $rules += [$locale . '.desc' => ['required','min:2']];
            $rules += ['from' => ['required']];
            $rules += ['to' => ['required']];
        }//end of for each
        $data = $request->validate($rules);
        $data['enabled'] = empty($request->enabled)?0:1;
        $data['edit'] = auth()->user()->id;
        $educations->update($data);
        toastr()->success( __('site.update_successfully'));
        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $educations
     * @return \Illuminate\Http\Response
     */
    public function del_status($id)
    {
        $educations = Education::findOrFail($id);
        $educations->update(['enabled'=>0,'status'=>0,'delete'=> auth()->user()->id]);

        toastr()->success( __('site.deleted_successfully'));
        return back();
    }
    public function restore($id)
    {
        $educations = Education::findOrFail($id);
        $educations->update(['enabled'=>1,'status'=>1,'edit'=> auth()->user()->id]);
        toastr()->success( __('site.restored_successfully'));
        return back();
    }
    public function force_del($id)
    {
        $educations = Education::findOrFail($id);
        $educations->delete();
        toastr()->success( __('site.deleted_successfully'));
        return back();
    }
    public function enabled($id)
    {
        $educations = Education::findOrFail($id);
        $educations->update(['enabled'=>1,'edit'=> auth()->user()->id]);
        toastr()->success( __('site.deleted_successfully'));
        return back();
    }
    public function disabled($id)
    {
        $educations = Education::findOrFail($id);
        $educations->update(['enabled'=>0,'edit'=> auth()->user()->id]);
        toastr()->success( __('site.restored_successfully'));
        return back();
    }

//
}
