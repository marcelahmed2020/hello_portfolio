<?php

namespace App\Http\Controllers\Dashboard;

use App\About;
use App\Http\Controllers\Controller;
use App\Price;
use Illuminate\Http\Request;

class PriceListController extends Controller
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
        $prices = Price::where('status',1)->get();
        if (isset(request()->id)){
            $prices = Price::where('id',request()->id)->get();
        }

        return view('dashboard.prices.index',compact('prices'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.prices.create');
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
            $rules += [$locale . '.footer_desc' => ['required','min:2']];
            $rules += ['price' => ['required']];
//            $rules += ['birthday' => ['required']];
//            $rules += ['email' => ['required']];
        }//end of for each

        $data = $request->validate($rules);
        auth()->user()->price()->create($data);
        toastr()->success( __('site.added_successfully'));
        return back();
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\About  $price
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $price = Price::findOrFail($id);
        return view('dashboard.prices.show',compact(['price']));

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About  $price
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $price = Price::findOrFail($id);
        return view('dashboard.prices.edit',compact(['price']));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\About  $price
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $price = Price::findOrFail($id);
        $rules = [];
        foreach (config('translatable.locales') as $locale) {
            $rules += [$locale . '.title' => ['required','min:2','max:200']];
            $rules += [$locale . '.sub_title' => ['required','min:2','max:200']];
            $rules += [$locale . '.desc1' => ['sometimes']];
            $rules += [$locale . '.desc2' => ['sometimes']];
            $rules += [$locale . '.desc3' => ['sometimes']];
            $rules += [$locale . '.footer_desc' => ['required','min:2']];
            $rules += ['price' => ['required']];
         }//end of for each
         $data = $request->validate($rules);
        $data['enabled'] = empty($request->enabled)?0:1;
        $data['edit'] = auth()->user()->id;
        $price->update($data);
        toastr()->success( __('site.update_successfully'));
        return back();

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $price
     * @return \Illuminate\Http\Response
     */
    public function del_status($id)
    {
        $price = Price::findOrFail($id);
        $price->update(['enabled'=>0,'status'=>0,'one'=>0,'delete'=> auth()->user()->id]);
        $About2 = Price::where('enabled',1)->first();
        if (! empty($About2)){
            $About2->update(['one'=>1]);
        }
        toastr()->success( __('site.deleted_successfully'));
        return back();
    }
    public function restore($id)
    {
        $price = Price::findOrFail($id);
        $price->update(['enabled'=>1,'status'=>1,'edit'=> auth()->user()->id]);
        toastr()->success( __('site.restored_successfully'));
        return back();
    }
    public function force_del($id)
    {
        $price = Price::findOrFail($id);
        $price->delete();
        toastr()->success('Delete About Us Sussessfully..');
        return back();
    }
    public function enabled($id)
    {
        $price = Price::findOrFail($id);
        $price->update(['enabled'=>1,'edit'=> auth()->user()->id]);
        toastr()->success('Resore About Us Sussessfully..');
        return back();
    }
    public function disabled($id)
    {
        $price = Price::findOrFail($id);
        $price->update(['enabled'=>0,'edit'=> auth()->user()->id]);
        toastr()->success('Resore About Us Sussessfully..');
        return back();
    }

//
}
