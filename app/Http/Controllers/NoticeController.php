<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    //
    function createNotice(Request $req){
        
        $notice = new Notice();
        $notice->title = $req->title;
        $notice->description = $req->description;
        $notice->department = $req->department;

        $notice->save();
        return redirect('/home');
        
        //return $notice;
    }

    function deptNotice($department){

        $notices = Notice::where('department','like', '%'.$department.'%')->orderBy('id','DESC')->get();

        if(count($notices)==0){
            return "<h1>No notice for you</h1>";
            
        }else{
            return view('/deptNotice',['notices'=>$notices]);
            //return redirect('/deptNotice',['notices'=>$notices]);
        }
        //return $notices;
    }

    function homeNotice(){

        $notices = Notice::where('department','like', '%'."All".'%')->orderBy('id','DESC')->get();

        return view('/home',['notices'=>$notices]);
        //return $notices;
    }

    function noticeList(){

        $notices = Notice::all();

        return view('admin/noticeList',['notices'=>$notices]);
        
        //return $notices;
    }

    function deleteNotice($id){

        Notice::destroy($id);
        return redirect('noticeList');
    }

    function search(Request $req){

        // return $req->input();


        $notices1 = Notice::where('title','like', '%'.$req->input('query').'%')->get();

        $notices2 = Notice::where('department','like', '%'.$req->input('query').'%')->get();

        $notices3 = Notice::where('description','like', '%'.$req->input('query').'%')->get();

        // $notices4 = Notice::where('owner','like', '%'.$req->input('query').'%')->get();

        // $notices5 = Notice::where('created_at','like', '%'.$req->input('query').'%')->get();

        

        $notices = $notices1+$notices2+$notices3;

        return view('/searchResult',['notices'=>$notices]);
        
    }

}
