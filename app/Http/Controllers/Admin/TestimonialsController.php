<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Testimonials;
use Image;
class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.testimonials.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonials.create');
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
            'name'  => 'required|string|min:2',
            'job_desc' => 'required|min:2',
            'desc' => 'required|min:2',
            'image'                 => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

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
        Testimonials::create($data);
        toastr()->success('Success To Add Testimonial..');
        return back();
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Testimonials  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimonials  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimonial = Testimonials::findOrFail($id);
        return view('admin.testimonials.edit',compact('testimonial'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimonials  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $testimonial = Testimonials::findOrFail($id);
        $data =   $this->validate($request,[
            'name'  => 'required|string|min:2',
            'job_desc' => 'required|min:2',
            'desc' => 'required|min:2',
            'image'                 => 'sometimes|required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        if ($request->hasFile('image')) {
            $image_tmp =  $request->file('image');
            if ($image_tmp->isValid()) {
                $image_ab = 'marc/images/';
                if (file_exists($image_ab.$testimonial->image)) {
                    unlink($image_ab.$testimonial->image);
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
        $testimonial->update($data);
        toastr()->success('Success To Update Testimonial..');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimonials  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonial = Testimonials::findOrFail($id);
        $image_ab = 'marc/images/';
        if (file_exists($image_ab.$testimonial->image)) {
            unlink($image_ab.$testimonial->image);
        }
        $testimonial->delete();
        toastr()->success('Success To Delete Testimonial..');
        return back();

    }
}
