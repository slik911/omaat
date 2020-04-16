<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();
Route::get('/login', function () {
    return abort(404);
});


Route::get('/admin/authenticate/login', 'Auth\LoginController@showLoginForm');
Route::post('/admin/authenticate/login', 'Auth\LoginController@login');
Route::get('/admin/authenticate/logout', 'Auth\LoginController@logout');

Route::get('/', 'IndexController@index')->name('index');
Route::get('/about', 'IndexController@about')->name('about');
Route::get('/portfolio', 'IndexController@portfolio')->name('portfolio');
Route::get('/portfolio/{id}/single', 'IndexController@singleportfolio')->name('single.portfolio');
Route::get('/product', 'IndexController@product')->name('product');
Route::get('/product/{id}/category', 'IndexController@productCategory')->name('product.category');

Route::get('/service/professional_cleaning_service', 'IndexController@cleaning')->name('service.cleaning');
Route::get('/service/PestControl_and_fumigation_services', 'IndexController@pestControl')->name('service.pestControl');
Route::get('/service/Facility_solutions_and_maintenance', 'IndexController@facility')->name('service.facility');
Route::get('/service/Laundry_and_dry_cleaning_services', 'IndexController@laundry')->name('service.laundry');
Route::get('/service/Training_services', 'IndexController@training')->name('service.training');
Route::get('/service/electrical_installations_IT_solutions_and_maintenance', 'IndexController@electrical')->name('service.electrical');
Route::get('/blog', 'IndexController@blog')->name('blog');
Route::get('/blog/{id}/single', 'IndexController@singleblog')->name('blog.single');
Route::get('/Quality_management_System', 'IndexController@qms')->name('qms');
Route::get('/Health_safety_environment_policy', 'IndexController@hse')->name('hse');
Route::post('/contact/send', 'IndexController@contactMe')->name('contact.me');
Route::get('/contact', 'IndexController@contact')->name('contact');

Route::group(['middleware' => ['web']], function () {
    Route::get('/cpanel/admin/authorised/user/home', 'HomeController@index')->name('home');
    Route::get('/cpanel/admin/authorised/user', 'HomeController@profileIndex')->name('user.profile');
Route::PUT('/cpanel/admin/authorised/user/update', 'HomeController@Update')->name('user.update');
Route::PUT('/cpanel/admin/authorised/user/password/change', 'HomeController@passwordUpdate')->name('Profilepassword.update');
    Route::get('/cpanel/admin/authorised/user/blog', "BlogController@index")->name('admin.blog');
    Route::get('/cpanel/admin/authorised/user/project', "ProjectController@index")->name('admin.project');
    Route::get('/cpanel/admin/authorised/user/product', "ProductController@index")->name('admin.product');

    Route::get('/cpanel/admin/authorised/user/blog/create', 'BlogController@create')->name('blog.create');
    Route::post('/cpanel/admin/authorised/user/blog/create', 'BlogController@save')->name('post.create');
    Route::get('/cpanel/admin/authorised/user/blog/{id}/view', 'BlogController@view')->name('blog.view');
    Route::put('/cpanel/admin/authorised/user/blog/update', 'BlogController@update')->name('post.edit');
    Route::get('/cpanel/admin/authorised/user/blog/{id}/publish', 'BlogController@publish')->name('blog.publish');

    Route::get('/cpanel/admin/authorised/user/blog/{id}/delete', 'BlogController@delete')->name('blog.delete');
    Route::get('/cpanel/admin/authorised/user/category', 'ProductController@category')->name('category.index');
    Route::get('/cpanel/admin/authorised/user/category/show', 'ProductController@categoryshow')->name('category.show');
    Route::post('/cpanel/admin/authorised/user/category', 'ProductController@createcategory')->name('category.create');
    Route::put('/cpanel/admin/authorised/user/category/update', 'ProductController@categoryupdate')->name('category.update');
    Route::get('/cpanel/admin/authorised/user/category/{id}/delete', 'ProductController@categorydelete')->name('category.delete');
    Route::post('/cpanel/admin/authorised/user/product/create', "ProductController@productcreate")->name('product.create');

    Route::get('/cpanel/admin/authorised/user/product/show', "ProductController@productshow")->name('product.show');
    
    Route::put('/cpanel/admin/authorised/user/product/update', "ProductController@productupdate")->name('product.update');

    Route::get('/cpanel/admin/authorised/user/product/{id}/delete', "ProductController@productdelete")->name('product.delete');

    Route::get('/cpanel/admin/authorised/user/project/get', "ProjectController@getproject")->name('project.get');

    Route::post('/cpanel/admin/authorised/user/project/create', "ProjectController@project")->name('project.upload');
    Route::put('/cpanel/admin/authorised/user/project/update', "ProjectController@update")->name('project.update');

    Route::get('/cpanel/admin/authorised/user/project/{id}/delete', "ProjectController@delete")->name('project.delete');

});
