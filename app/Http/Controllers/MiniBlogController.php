<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MiniBlog;

class MiniBlogController extends Controller
{

    /*
    public function __construct()
    {
        $this->middleware('auth');
    }
    */
    
    public function index(){
        $blogs = MiniBlog::all();
        return view('welcome',['blogs' => $blogs]);
    }

    public function myblogs($email){
        $myblogs = MiniBlog::where('email', $email)->get();
        return view('myblog',['myblogs' => $myblogs]);
    }

    public function get_addblogs(){
        return view('addblog');
    }

    public function post_addblogs(){
        $n_blog = new MiniBlog();
        $n_blog->name = request('name');
        $n_blog->email = request('user_mail');
        $n_blog->title = request('b_title');
        $n_blog->body = request('b_body');
        
        $n_blog->save();

        $usr_mail = request('user_mail');
        return redirect("/myblog/$usr_mail");
    }

    public function delete_blogs($id){
        $d_blog = MiniBlog::findOrFail($id);
        $d_blog->delete();
        return redirect("/myblog/$d_blog->email");
    }

    public function blogdetail($id){
        $detail_blog = MiniBlog::findOrFail($id);
        return view('detail',['detail_blog' => $detail_blog]);
    }

    public function get_edit_blogdetail($id){
        $edit_detail_blog = MiniBlog::findOrFail($id);
        return view('edit',['edit_detail_blog' => $edit_detail_blog]);
    }

    public function post_edit_blogdetail($id){
        $redirect_mail = request('user_mail');
        $edit_blog = MiniBlog::findOrFail($id);
        $edit_blog->title=request('b_title');
        $edit_blog->body=request('b_body');
        $edit_blog->name=request('name');
        $edit_blog->email=request('user_mail');
        $edit_blog->save();
        return redirect("/myblog/$redirect_mail");
    }
}
