<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class PostController extends Controller
{
    function listing(){
        $data['result']=DB:: table('posts')->get();
        return view('admin.table.table',$data);
    }
    function submit(Request $request){
      $request->validate([
          'title'=>'required',
          'short_desc'=>'required',
          'long_desc'=>'required',
          'image'=>'required|mimes:jpeg,jpg,png',
          'post_date'=>'required',
      ]);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $getImage = $this->image_upload($file);
            $image = $getImage;
        }

      $data=array(
          'title'=>$request->input('title'),
          'short_desc'=>$request->input('short_desc'),
          'long_desc'=>$request->input('long_desc'),
          'image'=>$image,
          'post_date'=>$request->input('post_date'),
          'status'=>1,
          'added_on'=>date('y-m-d h:i:s'),
      );

      DB::table('posts')->insert($data);
      $request->session()->flash('msg','data submitted');
      return redirect('table');
    }
    function delete(Request $request,$id){
        DB::table('posts')->where('id',$id)->delete();
        $request->session()->flash('msg','Post delete');
        return redirect('table');
    }
    public function edit(Request $request,$id){
        $result = DB::table('posts')->where('id',$id)->first();
        return view('admin.form.edit',['result' => $result]);
    }
    function update(Request $request){
        $request->validate([
            'title'=>'required',
            'short_desc'=>'required',
            'long_desc'=>'required',
            'image'=>'mimes:jpeg,jpg,png',
            'post_date'=>'required',
        ]);
        $data=array(
            'title'=>$request->input('title'),
            'short_desc'=>$request->input('short_desc'),
            'long_desc'=>$request->input('long_desc'),
            'post_date'=>$request->input('post_date'),
            'status'=>1,
            'added_on'=>date('y-m-d h:i:s'),
        );

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $getImage = $this->image_upload($file);
            $data['image'] = $getImage;
        }
//        if($request->hasfile('image')){
////      $image=$request->file('image')->store('public/post');
//        $image=$request->file('image');
//        $ext=$image->extension();
//        $file=time().'.'.$ext;
//        $image->storeAs('/upload/post/',$file);
//        $data['image']=$file;
//        }
           DB::table('posts')->where('id',$request->edit_id)->update($data);
        $request->session()->flash('msg','data update');
        return redirect('table');
    }
}
