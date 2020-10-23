<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Education;
class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.education.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.education.create');
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
        Education::create($data);
        toastr()->success('Success To Add Education..');
        return back();
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\education  $educations
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\education  $educations
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $education = Education::findOrFail($id);
        return view('admin.education.edit',compact('education'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\education  $educations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $education = Education::findOrFail($id);
        $data =   $this->validate($request,[
            'title'  => 'required|string|min:2',
            'sub_title' => 'required|min:2',
            'from'  => 'required|min:2',
            'to'  => 'required|string|min:2',
            'desc'   => 'required|min:2'
        ]);
        $education->update($data);
        toastr()->success('Success To Update Education..');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\education  $educations
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $education = Education::findOrFail($id);
        $education->delete();
        toastr()->success('Success To Delete Education..');
        return back();

    }
}
