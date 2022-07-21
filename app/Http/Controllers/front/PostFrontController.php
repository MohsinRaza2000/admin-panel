<?php

namespace App\Http\Controllers\front;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class PostFrontController extends Controller
{
    function home(){
        $data['result']=DB:: table('posts')->get();
        return view('front.home',$data);
    }
    function link(Request $request){
        $data=DB:: table('posts')->where('id',$request->post_id)->first();
        return view('front.link',compact('data'));
    }
    function contact_post(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'mobile'=>'required',
            'message'=>'required',
        ]);
        $data=array(
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'mobile'=>$request->input('mobile'),
            'message'=>$request->input('message'),
            'added_on'=>date('y-m-d h:i:s'),
        );
        DB::table('contacts')->insert($data);
        $request->session()->flash('msg','data submitted');
        return redirect('contact');
    }

    public static function page_menu(){
        $result=DB:: table('pages')->where('status','1')->get();
        return $result;
    }
    function page($id){
        $data['result']=DB:: table('pages')->where('slug',$id)->get();
        return view('front.page_add',$data);
    }
}
