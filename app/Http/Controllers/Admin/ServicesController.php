<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services;
class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.services.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data =   $this->validate($request,['title' => 'required|string|min:2','desc' => 'required|string|min:2','icon' => 'required|min:2']);
        Services::create($data);
        toastr()->success('Success To Add Service..');
        return back();

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Services  $servs
     * @return \Illuminate\Http\Response
     */
    public function show(Services $servs)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Services  $servs
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $serv = Services::findOrFail($id);
        return view('admin.services.edit',compact('serv'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Services  $servs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $serv = Services::findOrFail($id);
        $data =   $this->validate($request,['title' => 'required|string|min:2','desc' => 'required|string|min:2','icon' => 'required|min:2']);
        $serv->update($data);
        toastr()->success('Success To Update Service..');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Services  $servs
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $serv = Services::findOrFail($id);
        $serv->delete();
        toastr()->success('Success To Delete Service..');
        return back();

    }
}
