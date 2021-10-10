<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    function login(Request $request){

        $user = User::where(['email'=>$request->email])->first();
        if(!$user || !Hash::check($request->password,$user->password)){
            return "Username and password not matched.";
        }else{
            $request->session()->put('user',$user);
            return redirect('/');
        }
    }

    function logout(Request $request){
        $request->session()->forget('user');
            return redirect("login");
    }

    function registration(Request $req){
        $user = new User;
        $user->name = $req->user;
        $user->email = $req->email;
        $user->type = $req->type;
        $user->department = $req->department;
        $user->password = Hash::make($req->password);

        
        $user->save();

        return redirect('login');
        //return $user;

    }
}
