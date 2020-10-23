<?php
namespace App\Http\Controllers\Dashboard;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CategoriesController extends Controller
{
    public function __construct()
    {
        //create read update delete
        $this->middleware(['permission:read-categories'])->only(['index','show']);
        $this->middleware(['permission:create-categories'])->only(['create','store']);
        $this->middleware(['permission:update-categories'])->only(['edit']);
        $this->middleware(['permission:delete_trash'])->only('destroy');
        $this->middleware(['permission:delete-categories'])->only('disabled');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $categories = Category::get();
        if (isset(request()->id)){
              $categories = Category::where('id',request()->id)->get();
          }
          return view('admin.categories.index',compact('categories'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
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
            $rules += [$locale . '.name' => ['required', Rule::unique('category_translations', 'name')]];
        }//end of for each
        $data = $request->validate($rules);
        auth()->user()->category()->create($data);
        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('admin.categories.index');

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
         abort(404);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cag = Category::findOrFail($id);
         return view('admin.categories.edit',compact(['cag']));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $rules = [];

        foreach (config('translatable.locales') as $locale) {

            $rules += [$locale . '.name' => ['required', Rule::unique('category_translations', 'name')->ignore($category->id, 'category_id')]];

        }//end of for each

        $data = $request->validate($rules);

        $category->update($data);
        session()->flash('success', __('site.updated_successfully'));
        return back();

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat = Category::findOrFail($id);
        $cat->update(['enabled'=>0]);
        session()->flash('success', __('site.deleted_successfully'));
        return back();
    }
    public function restore($id)
    {
        $cat = Category::findOrFail($id);
        $cat->update(['enabled'=>1]);
        session()->flash('success', __('site.resore_successfully'));

//        toastr()->success(' Category Sussessfully..');
        return back();
    }
    public function force_del($id)
    {
        $cat = Category::findOrFail($id);
        $cat->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return back();
    }
//
}
