<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthenticationController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\front\PostFrontController;




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

Route::get('index',[AdminController::class,'index'])->name('index');
Route::get('index2',[AdminController::class,'index2'])->name('getitbyroute');
Route::get('index3',[AdminController::class,'index3'])->name('index3');
Route::get('calendar',[AdminController::class,'calendar'])->name('calendar');
Route::get('chartjs',[AdminController::class,'chartjs'])->name('chartjs');
Route::get('chartjs2',[AdminController::class,'chartjs2'])->name('chartjs2');
Route::get('contacts',[AdminController::class,'contacts'])->name('contacts');
Route::get('e_commerce',[AdminController::class,'e_commerce'])->name('e_commerce');
Route::get('profile',[AdminController::class,'profile'])->name('profile');
Route::get('project_detail',[AdminController::class,'project_detail'])->name('project_detail');
Route::get('project',[AdminController::class,'project'])->name('project');
Route::get('table',[AdminController::class,'table'])->name('table');
Route::get('table_dynamic',[AdminController::class,'table_dynamic'])->name('table_dynamic');
Route::get('genral_form',[AdminController::class,'genral_form'])->name('genral_form');
Route::get('form_page',[AdminController::class,'form_page'])->name('form_page');
Route::get('morijis',[AdminController::class,'morijis'])->name('morijis');
Route::get('other_charts',[AdminController::class,'other_charts'])->name('other_charts');
Route::get('form_advance',[AdminController::class,'form_advance'])->name('form_advance');
Route::get('form_upload',[AdminController::class,'form_upload'])->name('form_upload');
Route::get('form_validation',[AdminController::class,'form_validation'])->name('form_validation');
Route::get('form_wizards',[AdminController::class,'form_wizards'])->name('form_wizards');
Route::get('genral_elements',[AdminController::class,'genral_elements'])->name('genral_elements');
Route::get('glyphicons',[AdminController::class,'glyphicons'])->name('glyphicons');
Route::get('icons',[AdminController::class,'icons'])->name('icons');
Route::get('inbox',[AdminController::class,'inbox'])->name('inbox');
Route::get('invoice',[AdminController::class,'invoice'])->name('invoice');
Route::get('typography',[AdminController::class,'typography'])->name('typography');
Route::get('widget',[AdminController::class,'widget'])->name('widget');
Route::get('level1',[AdminController::class,'level1'])->name('level1');
Route::get('link',[AdminController::class,'link'])->name('link');
Route::get('page_add',[AdminController::class,'page_add'])->name('page_add');
Route::get('login',[AuthenticationController::class,'login'])->name('login');
Route::get('media_gallery',[AdminController::class,'media_gallery'])->name('media_gallery');
Route::get('error403',[AdminController::class,'error403'])->name('error403');
Route::get('error404',[AdminController::class,'error404'])->name('error404');
Route::get('error500',[AdminController::class,'error500'])->name('error500');
Route::get('plain_page',[AdminController::class,'plain_page'])->name('plain_page');
Route::get('pricing_table',[AdminController::class,'pricing_table'])->name('pricing_table');
Route::get('fixed_sidebar',[AdminController::class,'fixed_sidebar'])->name('fixed_sidebar');
Route::get('fixed_footer',[AdminController::class,'fixed_footer'])->name('fixed_footer');
Route::get('sample_post',[AdminController::class,'sample_post'])->name('sample_post');
Route::get('contact',[AdminController::class,'contact'])->name('contact');
Route::get('home',[AdminController::class,'home'])->name('home');
Route::get('about',[AdminController::class,'about'])->name('about');
Route::get('table_page',[AdminController::class,'table_page'])->name('table_page');
Route::post('login_submit', [Admin_auth::class, 'login_submit']);
Route::get('register',[AuthenticationController::class,'register'])->name('register');
Route::post('post_register',[AuthenticationController::class,'postregistration'])->name('post_registration');
Route::post('login_registration',[AuthenticationController::class,'loginregistration'])->name('login_registration');
Route::get('table',[PostController::class,'listing'])->name('table');
Route::post('form_submission',[PostController::class,'submit'])->name('form_submission');
Route::get('submission_delete/{id}',[PostController::class,'delete'])->name('submission_delete');
Route::get('edit/{id}',[PostController::class,'edit'])->name('form_edit');
Route::post('update',[PostController::class,'update'])->name('form_update');
Route::get('table_page',[PageController::class,'listing'])->name('table_page');
Route::post('form_submission_page',[PageController::class,'submit'])->name('form_submission_page');
Route::get('submission_delete_page/{id}',[PageController::class,'delete'])->name('submission_delete_page');
Route::get('edit_page/{id}',[PageController::class,'edit'])->name('form_edit_page');
Route::post('update_page',[PageController::class,'update'])->name('form_page_update');
Route::get('table_contact',[ContactController::class,'listing'])->name('table_contact');
Route::get('home_post',[PostFrontController::class,'home'])->name('home_post');
Route::get('front_posting',[PostFrontController::class,'page_menu'])->name('front_posting');
Route::get('page_adding/{id}',[PostFrontController::class,'page'])->name('page_adding');
Route::get('link_post',[PostFrontController::class,'link'])->name('link_post');
Route::post('contact_post',[PostFrontController::class,'contact_post'])->name('contact_post');
//Route::post('user_post',[PostFrontController::class,'users'])->name('user_post');

