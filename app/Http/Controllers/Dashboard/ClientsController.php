<?php
namespace App\Http\Controllers\Dashboard;
use App\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::get();

         return  view('admin.clients.index',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('admin.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
   $data =  $this->validate($request,[
       'email' => 'required|email|min:2|max:255|unique:clients',
       'name' => 'required',
       'address' => 'required',
       'phone' => 'required',
    ]);
        $clients = auth()->user()->clients()->create($data);
        session()->flash('success', __('site.added_successfully'));
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $client = Client::findOrFail($id);
        return  view('admin.clients.edit',compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $client = Client::findOrFail($id);
        $data =  $this->validate($request,[
            'email' => 'required|email|min:2|max:255|unique:clients,email,'.$id,
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ]);

        $data['edit'] = auth()->user()->id;
        $client->update($data);
        session()->flash('success', __('site.updated_successfully'));
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        $client->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return back();
    }
}
