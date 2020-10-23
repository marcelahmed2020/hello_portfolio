<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Portfolios;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class PortfoliosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = Portfolios::get();
        return view('dashboard.portfolios.index',compact('portfolios'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.portfolios.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [];
        foreach (config('translatable.locales') as $locale) {
            $rules += [$locale . '.title' => ['required','min:2','max:200']];
            $rules += ['links' => ['required']];
        }//end of for each
        $data = $request->validate($rules);
         if ($request->hasFile('image')) {
            $image_tmp = $request->file('image');
            if ($image_tmp->isValid()) {
                $image_ab = 'admin/portfolios/';
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = rand(111, 99999) . '.' . $extension;
                $news_path = "admin/portfolios/" . $filename;
                Image::make($image_tmp)->save($news_path);
                $data['image'] = $filename;
            }
        }
        auth()->user()->portfolios()->create($data);
        toastr()->success( __('site.added_successfully'));
        return back();

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Portfolios  $portfolios
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolios $portfolios)
    {
        abort(404);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Portfolios  $portfolios
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $portfolio = Portfolios::findOrFail($id);
        return view('dashboard.portfolios.edit',compact('portfolio'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Portfolios  $portfolios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $portfolio = Portfolios::findOrFail($id);
        $rules = [];
        foreach (config('translatable.locales') as $locale) {
            $rules += [$locale . '.title' => ['required','min:2','max:200']];
            $rules += ['links' => ['required']];
        }//end of for each
        $data = $request->validate($rules);
        if ($request->hasFile('image')) {
            $image_tmp = $request->file('image');
            if ($image_tmp->isValid()) {
                $image_ab = 'admin/portfolios/';
                if ($portfolio->image != 'default.png') {
                    if (file_exists($image_ab . $portfolio->image)) {
                        unlink($image_ab . $portfolio->image);
                    }
                }
                $image_ab = 'admin/portfolios/';
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = rand(111, 99999) . '.' . $extension;
                $news_path = "admin/portfolios/" . $filename;
                Image::make($image_tmp)->save($news_path);
                $data['image'] = $filename;
            }
        }else{
            $data['image'] = $request->old_image;

        }
         $portfolio->update($data);
        toastr()->success( __('site.update_successfully'));
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Portfolios  $portfolios
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portfolio = Portfolios::findOrFail($id);
        $image_ab = 'admin/portfolios/';
        if ($portfolio->image != 'default.png') {
            if (file_exists($image_ab . $portfolio->image)) {
                unlink($image_ab . $portfolio->image);
            }
        }
        $portfolio->delete();
        toastr()->success( __('site.delete_successfully'));
        return back();

    }
}
