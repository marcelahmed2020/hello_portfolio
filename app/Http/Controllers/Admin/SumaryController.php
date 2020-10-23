<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Sumary;
class SumaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.summaries.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.summaries.create');
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
                'adress' => 'required|min:2',
                'phone'  => 'required|min:2',
                'email'  => 'required|email|min:2',
                'name'   => 'required|min:2'
            ]);
        Sumary::create($data);
        toastr()->success('Success To Add Summary..');
        return back();
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Skills  $summarys
     * @return \Illuminate\Http\Response
     */
    public function show(Skills $summarys)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Skills  $summarys
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $summary = Sumary::findOrFail($id);
        return view('admin.summaries.edit',compact('summary'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Skills  $summarys
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $summary = Sumary::findOrFail($id);
        $data =   $this->validate($request,[
            'title'  => 'required|string|min:2',
            'adress' => 'required|min:2',
            'phone'  => 'required|min:2',
            'email'  => 'required|email|min:2',
            'name'   => 'required|min:2'
        ]);
        $summary->update($data);
        toastr()->success('Success To Update Summary..');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Skills  $summarys
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $summary = Sumary::findOrFail($id);
        $summary->delete();
        toastr()->success('Success To Delete Summary..');
        return back();

    }
}
