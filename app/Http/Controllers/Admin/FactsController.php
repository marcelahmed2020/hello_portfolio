<?php
namespace App\Http\Controllers\Admin;
use App\Facts;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class FactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

         return view('admin.facts.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.facts.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $data =   $this->validate($request,['title' => 'required|string|min:2','sub_title' => 'required|string|min:2','icon' => 'required|min:2','number' => 'required|min:2']);
     Facts::create($data);
        toastr()->success('Success To Add Fact..');
        return back();

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Facts  $facts
     * @return \Illuminate\Http\Response
     */
    public function show(Facts $facts)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Facts  $facts
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $fact = Facts::findOrFail($id);
        return view('admin.facts.edit',compact('fact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Facts  $facts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $fact = Facts::findOrFail($id);
        $data =   $this->validate($request,['title' => 'required|string|min:2','sub_title' => 'required|string|min:2','icon' => 'required|min:2','number' => 'required|min:2']);
        $fact->update($data);
        toastr()->success('Success To Update Fact..');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Facts  $facts
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fact = Facts::findOrFail($id);
        $fact->delete();
        toastr()->success('Success To Delete Fact..');
        return back();

    }
}
