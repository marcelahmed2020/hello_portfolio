<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Portfolios;
use Image;
class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.portfolios.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.portfolios.create');
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
            'link' => 'required|min:2',
            'image'                 => 'sometimes|required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        if ($request->hasFile('image')) {
            $image_tmp =  $request->file('image');
            if ($image_tmp->isValid()) {
                $extension =  $image_tmp->getClientOriginalExtension();
                $filename = rand(111,99999).'.'.$extension;
                $news_path = "marc/images/".$filename;
                Image::make($image_tmp)->save($news_path);
                $data['image']           =  $filename;
            }
        }
        Portfolios::create($data);
        toastr()->success('Success To Add Portfolio..');
        return back();
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Portfolios  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Portfolios  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $education = Portfolios::findOrFail($id);
        return view('admin.portfolios.edit',compact('education'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Portfolios  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $portfolio = Portfolios::findOrFail($id);
        $data =   $this->validate($request,[
            'title'  => 'required|string|min:2',
            'link' => 'required|min:2',
            'image'                 => 'sometimes|required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        if ($request->hasFile('image')) {
            $image_tmp =  $request->file('image');
            if ($image_tmp->isValid()) {
                $image_ab = 'marc/images/';
                if (file_exists($image_ab.$portfolio->image)) {
                    unlink($image_ab.$portfolio->image);
                }
                $extension =  $image_tmp->getClientOriginalExtension();
                $filename = rand(111,99999).'.'.$extension;
                $news_path = "marc/images/".$filename;
                Image::make($image_tmp)->save($news_path);
                $data['image']           =  $filename;
            }
        } else {
            $data['image']           =  $request->old_image;
        }
        $portfolio->update($data);
        toastr()->success('Success To Update Portfolio..');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Portfolios  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portfolio = Portfolios::findOrFail($id);
        $image_ab = 'marc/images/';
        if (file_exists($image_ab.$portfolio->image)) {
            unlink($image_ab.$portfolio->image);
        }
        $portfolio->delete();
        toastr()->success('Success To Delete Portfolio..');
        return back();

    }
}
