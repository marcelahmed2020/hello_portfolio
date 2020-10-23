<?php
namespace App\Http\View\Composer;
use App\About;

use App\Education;
use App\Experience;
use App\Portfolios;
use App\Price;
use App\Services;
use App\Settings;
use App\Skills;
use App\User;
use Illuminate\View\View;
class SettingsComposer
{
    public function compose(View $view)
    {
        $view->with('about_me',About::where(['one'=>1,'enabled'=>1])->get()->first());
        $view->with('my_price',Price::where(['enabled'=>1])->get());
        $view->with('my_portfolios',Portfolios::where(['enabled'=>1])->get());
        $view->with('my_educations',Education::where(['enabled'=>1])->get());
        $view->with('my_experience',Experience::where(['enabled'=>1])->get());
        $view->with('my_serices',Services::where(['enabled'=>1])->get());
        $view->with('skillsList',Skills::get());

        $view->with('my_info',User::first());
        $view->with('settings',Settings::get()->first());
//        $view->with('categories',Category::get());
//        $view->with('product_Rated',Product::where(['enabled'=>1,'ratting'=>5])->orderBy('ratting','DESC')->take(6)->get());
//        $view->with('products_list',Product::where(['enabled'=>1])->orderBy('id','DESC')->get());
//        $view->with('countries',Country::where(['enabled'=>1])->get());
//        $view->with('cmspage_all',CmsPage::where(['enabled'=>1])->get());
        // trash
//        $view->with('categories_trash',Category::where(['enabled'=>0])->get());


    }
}
