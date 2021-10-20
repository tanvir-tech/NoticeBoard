<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    //
    function downloadNotice(Request $request, $fileName){

        return response()->download(public_path('noticefiles/'.$fileName));
    }
}
