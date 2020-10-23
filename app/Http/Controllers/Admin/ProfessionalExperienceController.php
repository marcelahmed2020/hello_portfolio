<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ProfessionalExperience;
class ProfessionalExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.professionalexperiences.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.professionalexperiences.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data =   $this->validate($request,[
            'title'  => 'required|string|min:2',
            'sub_title' => 'required|min:2',
            'from'  => 'required|min:2',
            'to'  => 'required|string|min:2',
            'desc'   => 'required|min:2'
        ]);
        $data['desc2'] =  empty($request->desc2)?'0':$request->desc2;
        $data['desc3'] =  empty($request->desc3)?'0':$request->desc3;
        $data['desc4'] =  empty($request->desc4)?'0':$request->desc4;
        ProfessionalExperience::create($data);
        toastr()->success('Success To Add Professional Experience..');
        return back();
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\ProfessionalExperience  $proexs
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProfessionalExperience  $proexs
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proex = ProfessionalExperience::findOrFail($id);
        return view('admin.professionalexperiences.edit',compact('proex'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProfessionalExperience  $proexs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $proex = ProfessionalExperience::findOrFail($id);
        $data =   $this->validate($request,[
            'title'  => 'required|string|min:2',
            'sub_title' => 'required|min:2',
            'from'  => 'required|min:2',
            'to'  => 'required|string|min:2',
            'desc'   => 'required|min:2'
        ]);
        $data['desc2'] =  empty($request->desc2)?'0':$request->desc2;
        $data['desc3'] =  empty($request->desc3)?'0':$request->desc3;
        $data['desc4'] =  empty($request->desc4)?'0':$request->desc4;
        $proex->update($data);
        toastr()->success('Success To Update Professional Experience..');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProfessionalExperience  $proexs
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proex = ProfessionalExperience::findOrFail($id);
        $proex->delete();
        toastr()->success('Success To Delete Professional Experience..');
        return back();

    }
}