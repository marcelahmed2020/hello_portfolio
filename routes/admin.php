<?php
/*
|--------------------------------------------------------------------------
| Admins Routes
|--------------------------------------------------------------------------
*/
// Start Guest
  Route::match(['get','post'],'/admin/login','IndexController@login')->name('admin.login'); //  Login Page
  // forgot password
  Route::get('/admin/forgot-password','IndexController@forgot_password')->name('admin.forgot_password');
  Route::post('/admin/send-password','IndexController@send_mail_password')->name('admin.send_mail_password');
  Route::get('/admin/password-reset/{token}','IndexController@password_reset_t')->name('admin.password_reset_t');
  Route::put('/admin/change-password/{id}','IndexController@change_password')->name('admin.change_password');
// End Guest

Route::group(['middleware'=>['auth'],'prefix'=>'admin'],function ()
{// Start For Admin Acces

    Route::get('/dashboard','IndexController@dashboard')->name('dashboard'); // dashboard

    Route::get('/profile','AdminController@profile')->name('profile'); // User Profile View
    Route::put('/profile/{user}','AdminController@profile_update')->name('users.do_profile');// User Profile Action
    Route::match(['get','post'],'/about','AdminController@about')->name('about'); // about
    // Facts
    Route::resource('facts','FactsController');
    // Skills
    Route::resource('skills','SkillsController');
    // summaries
    Route::resource('summaries','SumaryController');
    // education
    Route::resource('education','EducationController');
    // portfolios
    Route::resource('portfolios','PortfolioController');
    // services
    Route::resource('services','ServicesController');
    // testimonials
    Route::resource('testimonials','TestimonialsController');
    // professionalexperiences
    Route::resource('professionalexperiences','ProfessionalExperienceController');

    // Trash
    Route::get('/trash','TrashController@trash')->name('trash'); // Trash

    Route::get('/logout','IndexController@logout')->name('admin.logout'); // logout

//    settings
    Route::get('/settings','SettingsController@index')->name('settings.index'); // settings
    Route::put('/settings/{id}','SettingsController@update')->name('settings.update'); // settings

});  // End For Admin Acces
