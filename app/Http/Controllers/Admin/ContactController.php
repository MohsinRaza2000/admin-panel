<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    function listing(){
        $data['result']=DB:: table('contacts')->get();
        return view('admin.table.table_contact',$data);
    }
}
