<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }
    public function index2(){
        return view('admin.index2');
    }
    public function index3(){
        return view('admin.index3');
    }
    public function calendar(){
        return view('admin.calendar');
    }
    public function chartsjs(){
        return view('admin.chartjs');
    }
    public function chartjs2(){
        return view('admin.chartjs2');
    }
    public function contacts(){
        return view('admin.contacts');
    }
    public function e_commerce(){
        return view('admin.additional_pages.e-commerce');
    }
    public function profile(){
        return view('admin.additional_pages.profile');
    }
    public function project_detail(){
        return view('admin.additional_pages.project_detail');
    }
    public function project(){
        return view('admin.additional_pages.project');
    }
    public function table(){
        return view('admin.table.table');
    }
    public function table_dynamic(){
        return view('admin.table.table_dynamic');
    }
    public function genral_form(){
        return view('admin.form.form');
    }
    public function morijis(){
        return view('admin.morijis');
    }
    public function other_charts(){
        return view('admin.other_charts');
    }
    public function form_advance(){
        return view('admin.form.form_advanced');
    }
    public function form_upload(){
        return view('admin.form.form_upload');
    }
    public function form_validation(){
        return view ('admin.form.form_validation');
    }
    public function form_wizards(){
        return view('admin.form.form_wizard');
    }
    public function genral_elements(){
        return view('admin.ui_elements.genral_elements');
    }
    public function glyphicons(){
        return view ('admin.ui_elements.glyphicons');
    }
    public function icons(){
        return view ('admin.ui_elements.icons');
    }
    public function inbox(){
        return view ('admin.ui_elements.inbox');
    }
    public function invoice(){
        return view ('admin.ui_elements.invoice');
    }
    public function typography(){
        return view ('admin.ui_elements.typography');
    }
    public function widget(){
        return view ('admin.ui_elements.widget');
    }
    public function level1(){
        return view ('admin.multilevel_menu.level1');
    }
    public function login(){
        return view ('admin.authentication.login');
    }
    public function media_gallery(){
        return view ('admin.ui_elements.media_gallery');
    }
    public function error403(){
        return view('admin.extras.error403');
    }
    public function error404(){
        return view('admin.extras.error404');
    }
    public function error500(){
        return view('admin.extras.error500');
    }
    public function plain_page(){
        return view('admin.extras.plain_page');
    }
    public function pricing_table(){
        return view('admin.extras.pricing_table');
    }
    public function fixed_sidebar(){
        return view('admin.fixed_sidebar');
    }
    public function fixed_footer(){
        return view('admin.fixed_footer');
    }
    public function sample_post(){
        return view('front.sample_post');
    }
    public function contact(){
        return view('front.contact');
    }
    public function home(){
        return view('front.home');
    }
    public function about(){
        return view('front.about');
    }
    public function table_page(){
        return view('admin.table.table_page');
    }
    public function form_page(){
        return view('admin.form.form_page');
    }
    public function page_add(){
        return view('front.add_page');
    }
    public function link(){
        return view('front.link');
    }




}
