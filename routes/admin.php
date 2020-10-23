<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
|
*/

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']],
    function () {
        // Guest
        Route::prefix('admin')->name('admin.')->middleware(['guest'])->group(function () {
            Route::match(['get', 'post'], '/login','IndexControllr@login')->name('login');
            Route::match(['get', 'post'], '/forgot-password','IndexControllr@forgotPassword')->name('forgot-password');
  Route::post('/send-password','IndexControllr@send_mail_password')->name('send_mail_password');
  Route::get('/password-reset/{token}','IndexControllr@password_reset')->name('password_reset_t');
  Route::put('/change-password/{id}','IndexControllr@change_password')->name('change-password');
// End Guest
        });//end of admin routes

        // Auth
        Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
            // admin
            Route::get( '/dashboard','IndexControllr@dashboard')->name('dashboard');
            Route::get( '/logout','IndexControllr@logout')->name('logout');




            // Profile
            Route::get('/profile','AdminsController@index')->name('profile.index'); // Profile View
            Route::put('/profile/{id}','AdminsController@update')->name('profile.update'); // Profile View




            // aboutus
            Route::resource('aboutus','AboutUsController');
            Route::get('/aboutus/restore/{id}','AboutUsController@restore')->name('aboutus.restore');
            Route::delete('/del/aboutus/{id}','AboutUsController@force_del')->name('aboutus.force_del');
            Route::get('/aboutus/enabled/{id}','AboutUsController@enabled')->name('aboutus.enabled');
            Route::get('/aboutus/one/{id}','AboutUsController@one')->name('aboutus.one');
            Route::get('/aboutus/disabled/{id}','AboutUsController@disabled')->name('aboutus.disabled');
            Route::get('/aboutus/del/{id}','AboutUsController@del_status')->name('aboutus.del');

           // prices
            Route::resource('prices','PriceListController');
            Route::get('/prices/restore/{id}','PriceListController@restore')->name('prices.restore');
            Route::delete('/del/prices/{id}','PriceListController@force_del')->name('prices.force_del');
            Route::get('/prices/enabled/{id}','PriceListController@enabled')->name('prices.enabled');
            Route::get('/prices/one/{id}','PriceListController@one')->name('prices.one');
            Route::get('/prices/disabled/{id}','PriceListController@disabled')->name('prices.disabled');
            Route::get('/prices/del/{id}','PriceListController@del_status')->name('prices.del');

           //skills
            Route::resource('skills','SkillsController');
           //services
            Route::resource('services','ServicesController');
            Route::get('/services/restore/{id}','ServicesController@restore')->name('services.restore');
            Route::delete('/del/services/{id}','ServicesController@force_del')->name('services.force_del');
            Route::get('/services/enabled/{id}','ServicesController@enabled')->name('services.enabled');
            Route::get('/services/disabled/{id}','ServicesController@disabled')->name('services.disabled');
            Route::get('/services/del/{id}','ServicesController@del_status')->name('services.del');
         //educations
            Route::resource('educations','EducationController');
            Route::get('/educations/restore/{id}','EducationController@restore')->name('educations.restore');
            Route::delete('/del/educations/{id}','EducationController@force_del')->name('educations.force_del');
            Route::get('/educations/enabled/{id}','EducationController@enabled')->name('educations.enabled');
            Route::get('/educations/disabled/{id}','EducationController@disabled')->name('educations.disabled');
            Route::get('/educations/del/{id}','EducationController@del_status')->name('educations.del');
         //professional_experiences
            Route::resource('professional_experiences','ProfessionalExperienceController');
            Route::get('/professional_experiences/restore/{id}','ProfessionalExperienceController@restore')->name('professional_experiences.restore');
            Route::delete('/del/professional_experiences/{id}','ProfessionalExperienceController@force_del')->name('professional_experiences.force_del');
            Route::get('/professional_experiences/enabled/{id}','ProfessionalExperienceController@enabled')->name('professional_experiences.enabled');
            Route::get('/professional_experiences/disabled/{id}','ProfessionalExperienceController@disabled')->name('professional_experiences.disabled');
            Route::get('/professional_experiences/del/{id}','ProfessionalExperienceController@del_status')->name('professional_experiences.del');

          // settings
            Route::get('/settings','SettingsController@index')->name('settings.index');
            Route::put('/settings/{id}','SettingsController@update')->name('settings.update');

            // portfolios
            Route::resource('portfolios','PortfoliosController');



            // admins
            Route::resource('admins','AdminsController');
            Route::post('/admins/disabled/{id}','AdminsController@disabled')->name('admins.disabled'); // Admins/disabled/
            Route::put('/admins/image/{id}','AdminsController@image')->name('admins.image'); // Admins/image
            Route::put('/admins/info/{id}','AdminsController@infos')->name('admins.infos'); // Admins/info
//            Route::put('/profile/{user}','AdminsController@D_Profile')->name('admin.do_profile');// Profile Action
            //  clients
            Route::resource('clients','ClientsController');
            Route::get('/clients/enabled/{id}','ClientsController@enabled')->name('clients.enabled');
            Route::get('/clients/disabled/{id}','ClientsController@disabled')->name('clients.disabled');
            // clients Orders :)
//            Route::get('/orders','Clients\OrdersController@AllOrders')->name('all.orders');
//            Route::resource('clients.orders','Clients\OrdersController');

            // users
            Route::resource('users','UsersController');
            Route::post('/users/disabled/{id}','UsersController@disabled')->name('users.disabled'); // Admins/disabled/
            Route::put('/users/image/{id}','UsersController@image')->name('users.image'); // Admins/image
            Route::put('/users/info/{id}','UsersController@infos')->name('users.infos'); // Admins/info
//            Route::put('/profile/{user}','UsersController@D_Profile')->name('users.do_profile');// Profile Action
            Route::get('/orders','Clients\OrdersController@AllOrders')->name('all.orders');
            Route::resource('users.orders','Clients\OrdersController');
            Route::get('/orders/show/time/{id}','Clients\OrdersController@showTime')->name('show.time');

//            // categories
            Route::resource('categories','CategoriesController');
            Route::get('/categories/restore/{id}','CategoriesController@restore')->name('categories.restore');
            Route::delete('/del/categories/{id}','CategoriesController@force_del')->name('categories.force_del');
          // Tages
            Route::resource('tag','TagController');
            Route::get('/tag/restore/{id}','TagController@restore')->name('tag.restore');
            Route::delete('/del/tag/{id}','TagController@force_del')->name('tag.force_del');
            Route::get('/tag/enabled/{id}','TagController@enabled')->name('tag.enabled');
            Route::get('/tag/disabled/{id}','TagController@disabled')->name('tag.disabled');
            // Coupons
            Route::resource('coupons','CouponsController');
            Route::get('/coupons/restore/{id}','CouponsController@restore')->name('coupons.restore');
            Route::delete('/del/coupons/{id}','CouponsController@force_del')->name('coupons.force_del');
            Route::get('/coupons/enabled/{id}','CouponsController@enabled')->name('coupons.enabled');
            Route::get('/coupons/disabled/{id}','CouponsController@disabled')->name('coupons.disabled');
            //products
            Route::resource('products','ProductsController');
            // Route::get('/products/restore/{id}','ProductsController@restore')->name('products.restore');
            // Route::get('/products/attribute/{id}','ProductsController@Attribute')->name('products.attribute');
            // Route::post('/products/attribute/add','ProductsController@attribute_add')->name('products.attribute_add');
            // Route::delete('/del/attribute/{id}','ProductsController@attribute_delete')->name('products.attribute_delete');
            // Route::put('/put/attribute/{id}','ProductsController@attribute_update')->name('products.attribute_update');
            // Route::post('/products/image/add','ProductsController@image_add')->name('products.image_add');
            // Route::delete('/del/image/{id}','ProductsController@image_delete')->name('products.image_delete');
            // Route::delete('/del/products/{id}','ProductsController@force_del')->name('products.force_del');







        });//end of admin routes
    });
