<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    //
    function createNotice(Request $req){
        
        $userType = $req->session()->get('user')['type'];
        $userName = $req->session()->get('user')['name'];

        $notice = new Notice();
        $notice->title = $req->title;
        $notice->description = $req->description;
        $notice->department = $req->department;
        $notice->ownerType = $userType;
        $notice->ownerName = $userName;
        $notice->approval = false;

        $notice->save();
        return redirect('/home');
        
        //return $notice;
    }

    function deptNotice($department){

        $notices = Notice::where('department','like', '%'.$department.'%')->where('approval',1)->orderBy('id','DESC')->get();

        if(count($notices)==0){
            return "<h1>No notice for you</h1>";
            
        }else{
            return view('/deptNotice',['notices'=>$notices]);
            //return redirect('/deptNotice',['notices'=>$notices]);
        }
        //return $notices;
    }

    function homeNotice(){

        $notices = Notice::where('department','like', '%'."All".'%')->where('approval',1)->orderBy('id','DESC')->get();

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


        $notices = Notice::where('title','like', '%'.$req->input('query').'%')->orWhere('department','like', '%'.$req->input('query').'%')->orWhere('created_at','like', '%'.$req->input('query').'%')->get();


        // $notices4 = Notice::where('owner','like', '%'.$req->input('query').'%')->get();

        //where('created_at','like', '%'.$req->input('query').'%')->get();

       

        return view('/searchResult',['notices'=>$notices]);
        
    }

}
