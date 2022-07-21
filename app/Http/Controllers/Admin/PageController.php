<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function listing(){
        $data['result']=DB:: table('pages')->get();
        return view('admin.table.table_page',$data);
    }

    function submit(Request $request){
        $request->validate([
            'name'=>'required',
            'slug'=>'required',
            'description'=>'required',
        ]);
        $data=array(
            'name'=>$request->input('name'),
            'slug'=>$request->input('slug'),
            'description'=>$request->input('description'),
            'status'=>1,
            'added_on'=>date('y-m-d h:i:s'),
        );
        DB::table('pages')->insert($data);
        $request->session()->flash('msg','data submitted');
        return redirect('table_page');
    }
    function delete(Request $request,$id){
        DB::table('pages')->where('id',$id)->delete();
        $request->session()->flash('msg','Post delete');
        return redirect('table_page');
    }
    public function edit(Request $request,$id){
        $result = DB::table('pages')->where('id',$id)->first();
        return view('admin.form.edit_page',['result' => $result]);
    }
    function update(Request $request){
        $request->validate([
            'name'=>'required',
            'slug'=>'required',
            'description'=>'required',
        ]);
        $data=array(
            'name'=>$request->input('name'),
            'slug'=>$request->input('slug'),
            'description'=>$request->input('description'),
            'status'=>1,
            'added_on'=>date('y-m-d h:i:s'),
        );
        DB::table('pages')->where('id',$request->edit_id)->update($data);
        $request->session()->flash('msg','data update');
        return redirect('table_page');
    }

}
