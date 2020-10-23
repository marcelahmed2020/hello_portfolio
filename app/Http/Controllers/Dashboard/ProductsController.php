<?php
namespace App\Http\Controllers\Dashboard;
use App\Category;
use App\Product;
use App\Http\Controllers\Controller;
use App\ProductAttributes;
use App\ProductImages;
use App\Tag;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as Image;
use Illuminate\Support\Str;
class ProductsController extends Controller
{
  public function __construct()
    {
    //create read update delete
    $this->middleware(['permission:read-products'])->only(['index','show']);
    $this->middleware(['permission:create-products'])->only(['create','store']);
    $this->middleware(['permission:update-products'])->only(['edit']);
    $this->middleware(['permission:delete-trash'])->only('destroy');
    $this->middleware(['permission:delete-products'])->only('disabled');
    }

/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = Product::get();
        if (isset(request()->id)){
            $products = Product::where('id',request()->id)->get();
        }
       // dd(json_decode(json_encode($products)));
        return view('admin.products.index',compact('products'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        // $tags = Tag::where('enabled',1)->get();
        return view('admin.products.create',compact(['categories']));
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
           $rules += [$locale . '.name' => 'required|unique:product_translations,name'];
           $rules += [$locale . '.description' => 'required'];
       }//end of  for each
       $rules += [
           'purchase_price' => 'required',
           'sale_price' => 'required',
           'stock' => 'required',
           'category_id' => 'required',
           'image'                 => 'required|image|mimes:jpeg,png,jpg,gif,svg',
       ];
       $request_data = $request->all();
       $data = $request->validate($rules);
         $image = '';
       if ($request->hasFile('image')) {
           $image_tmp =  $request->file('image');
           if ($image_tmp->isValid()) {
               $extension =  $image_tmp->getClientOriginalExtension();
               $filename = rand(111,99999).'.'.$extension;
               $product_path_large = "admin/images/product_images/".$filename;
               Image::make($image_tmp)->save($product_path_large);
               $image   =  $filename;
           }
       }
       $data['image'] = $image;
       auth()->user()->products()->create($data);
      session()->flash('success', __('site.added_successfully'));
      return redirect()->route('admin.products.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Products  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('admin.products.show',compact(['product']));

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Products  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::get();
        // $tags = Tag::where('enabled',1)->get();

        return view('admin.products.edit',compact(['categories','product' ]));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Products  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $rules = [];
        foreach (config('translatable.locales') as $locale) {
            $rules += [$locale . '.name' => 'required|unique:product_translations,name'];
            $rules += [$locale . '.description' => 'required'];
        }//end of  for each
        $rules += [
            'purchase_price' => 'required',
            'sale_price' => 'required',
            'stock' => 'required',
            'category_id' => 'required',
            'image'                 => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ];
        $request_data = $request->all();
        $data = $request->validate($rules);
          $image = '';
        if ($request->hasFile('image')) {
            $image_tmp =  $request->file('image');
            if ($image_tmp->isValid()) {
              $product_path_small = "admin/images/product_images/";
              if (file_exists($product_path_small.$product->image)) {
                  unlink($product_path_small.$product->image);
              }
                $extension =  $image_tmp->getClientOriginalExtension();
                $filename = rand(111,99999).'.'.$extension;
                $product_path_large = "admin/images/product_images/".$filename;
                Image::make($image_tmp)->save($product_path_large);
                $image   =  $filename;
            }
        }else {
          $image = $request->old_image;
        }
        $data['image'] = $image;
        $data['edit']     = auth()->id();
        // dd($data);
        $product->update($data);
       session()->flash('success', __('site.updated_successfully'));
       return back();

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Products  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product_path_small = "admin/images/product_images/";
        if (file_exists($product_path_small.$product->image)) {
            unlink($product_path_small.$product->image);
        }
        $product->delete();
        toastr()->success('Delete Product Sussessfully..');
        return redirect()->route('admin.products.index');
    }


}
