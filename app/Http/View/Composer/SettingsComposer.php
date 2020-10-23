<?php
namespace App\Http\View\Composer;
use App\Settings;
use App\User;
use App\About;
use App\Facts;
use App\Skills;
use App\Services;
use App\Portfolios;
use App\Testimonials;
use App\Sumary;
use App\Education;
use App\ProfessionalExperience;
use Illuminate\View\View;
class SettingsComposer
{
    public function compose(View $view)
    {
        $view->with('settings',Settings::get()->first());
        $view->with('about',About::where('one',1)->first());
        $view->with('facts',Facts::get());
        $view->with('summaries',Sumary::get());
        $view->with('educations',Education::get());
        $view->with('portfolios',Portfolios::get());
        $view->with('services',Services::get());
        $view->with('testimonials',Testimonials::get());
        $view->with('skills',Skills::get());
        $view->with('user',User::get()->first());
        $view->with('professionalexperiences',ProfessionalExperience::latest()->get());



    }
}
