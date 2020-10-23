<?php

namespace App\Http\Controllers\Dashboard;

use App\Experience;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfessionalExperienceController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $professional_experiences = Experience::where('status',1)->get();
        if (isset(request()->id)){
            $professional_experiences = Experience::where('id',request()->id)->get();
        }
        return view('dashboard.professional_experience.index',compact('professional_experiences'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.professional_experience.create');
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
            $rules += [$locale . '.desc1' => ['sometimes']];
            $rules += [$locale . '.desc2' => ['sometimes']];
            $rules += [$locale . '.desc3' => ['sometimes']];
            $rules += ['from' => ['required']];
            $rules += ['to' => ['required']];
        }//end of for each
        $data = $request->validate($rules);
        $data['enabled'] = empty($request->enabled)?0:1;
        auth()->user()->professional_experiences()->create($data);
        toastr()->success( __('site.added_successfully'));
        return back();
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\About  $professional_experiences
     * @return \Illuminate\Http\Response
     */
//    public function show($id)
//    {
//        $professional_experiences = Experience::findOrFail($id);
//        return view('dashboard.professional_experience.show',compact(['about']));
//
//    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About  $professional_experiences
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $education = Experience::findOrFail($id);
        return view('dashboard.professional_experience.edit',compact(['education']));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\About  $professional_experiences
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $professional_experiences = Experience::findOrFail($id);
        $rules = [];
        foreach (config('translatable.locales') as $locale) {
            $rules += [$locale . '.title' => ['required','min:2','max:200']];
            $rules += [$locale . '.sub_title' => ['required','min:2','max:200']];
            $rules += [$locale . '.desc1' => ['required','min:2']];
            $rules += [$locale . '.desc2' => ['sometimes']];
            $rules += [$locale . '.desc3' => ['sometimes']];
            $rules += ['from' => ['required']];
            $rules += ['to' => ['required']];
        }//end of for each
        $data = $request->validate($rules);
        $data['enabled'] = empty($request->enabled)?0:1;
        $data['edit'] = auth()->user()->id;
        $professional_experiences->update($data);
        toastr()->success( __('site.update_successfully'));
        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $professional_experiences
     * @return \Illuminate\Http\Response
     */
    public function del_status($id)
    {
        $professional_experiences = Experience::findOrFail($id);
        $professional_experiences->update(['enabled'=>0,'status'=>0,'delete'=> auth()->user()->id]);

        toastr()->success( __('site.deleted_successfully'));
        return back();
    }
    public function restore($id)
    {
        $professional_experiences = Experience::findOrFail($id);
        $professional_experiences->update(['enabled'=>1,'status'=>1,'edit'=> auth()->user()->id]);
        toastr()->success( __('site.restored_successfully'));
        return back();
    }
    public function force_del($id)
    {
        $professional_experiences = Experience::findOrFail($id);
        $professional_experiences->delete();
        toastr()->success( __('site.deleted_successfully'));
        return back();
    }
    public function enabled($id)
    {
        $professional_experiences = Experience::findOrFail($id);
        $professional_experiences->update(['enabled'=>1,'edit'=> auth()->user()->id]);
        toastr()->success( __('site.deleted_successfully'));
        return back();
    }
    public function disabled($id)
    {
        $professional_experiences = Experience::findOrFail($id);
        $professional_experiences->update(['enabled'=>0,'edit'=> auth()->user()->id]);
        toastr()->success( __('site.restored_successfully'));
        return back();
    }

//
}
