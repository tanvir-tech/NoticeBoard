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
            return "Department not found";
            
        }else{
            return view('/deptNotice',['notices'=>$notices,$department]);
        }
        

        //return $notices;
    }

}