<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    function createNotice(Request $req){

        //validate
        $req->validate([
            'title'=>'required',
            'description'=>'required',
            'department'=>'required',
            'noticefile'=>'required|file|mimes:jpg,jpeg,bmp,png,doc,docx,csv,rtf,xlsx,xls,txt,pdf,zip'
        ]);
        
        //from session
        $userType = $req->session()->get('user')['type'];
        $userName = $req->session()->get('user')['name'];
        $userId = $req->session()->get('user')['id'];

        // file
        $noticeFileExt = $req->noticefile->extension();
        // $old_noticefile_detail = $req->noticefile;
        // dd($req->all());
        // dd($old_noticefile_detail);
        // dd($fileExt);
        $new_noticeFileName = time().'_'.$req->title.'_for_'.$req->department.'.'.$noticeFileExt;
        //save file
        $req->noticefile->move(public_path('noticefiles'), $new_noticeFileName);

        //form input
        $notice = new Notice();
        $notice->title = $req->title;
        $notice->description = $req->description;
        $notice->department = $req->department;
        $notice->ownerType = $userType;
        $notice->ownerName = $userName;
        $notice->ownerId = $userId;
        $notice->approval = false;
        $notice->fileName = $new_noticeFileName;


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

        $notices = Notice::where('approval',1)->orderBy('id','DESC')->get();

        return view('admin/noticeList',['notices'=>$notices]);
        
        //return $notices;
    }

    function approveList(){

        $notices = Notice::where('approval',0)->orderBy('id','DESC')->get();

        return view('admin/approval',['notices'=>$notices]);
        
        //return $notices;
    }

    function approveNotice($id){

        $notice = Notice::find($id);
        $notice->approval =true;
        $notice->save();
        return redirect('approveList');

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
