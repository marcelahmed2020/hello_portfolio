<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Skills;
class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.skills.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.skills.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data =   $this->validate($request,['title' => 'required|string|min:2','progress' => 'required|min:2']);
        Skills::create($data);
        toastr()->success('Success To Add Skill..');
        return back();
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Skills  $skills
     * @return \Illuminate\Http\Response
     */
    public function show(Skills $skills)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Skills  $skills
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $skill = Skills::findOrFail($id);
        return view('admin.skills.edit',compact('skill'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Skills  $skills
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $skill = Skills::findOrFail($id);
        $data =   $this->validate($request,['title' => 'required|string|min:2','progress' => 'required|min:2']);
        $skill->update($data);
        toastr()->success('Success To Update Skill..');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Skills  $skills
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $skill = Skills::findOrFail($id);
        $skill->delete();
        toastr()->success('Success To Delete Skill..');
        return back();

    }
}
