<?php

namespace App\Http\Controllers;

use App\modeluserss;
use App\modeladmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class user extends Controller
{
    //
    public function Login(){
        return view ('page.login');
    }
    public function LoginPost(Request $request){
        $uname=$request->uname;
        $psw=$request->psw;
        if($data=modeluserss::where('uname',$uname)->first())
        {if($data){
            if(Hash::check($psw,$data->psw))
            Session::put('uname',$data->uname);
            Session::put('afterlogin',TRUE);
            return view('page.afterlogin');
            
        }
        else{
            return redirect()->back()->with("error","Gagal Login");
        }}
        else if($data=modeladmin::where('uname',$uname)->first())
        {
            {if($data){
                if(Hash::check($psw,$data->psw))
                Session::put('uname',$data->uname);
                Session::put('admin',TRUE);
                return view('page.admin');
                
            }
            else{
                return redirect()->back()->with("error","Gagal Login");
                }
            }
        }
    }
    public function register(Request $request){
        return view('page.register');
    }
    public function registerPost(Request $request){
        $this->validate($request, [
            'uname' => 'required|min:4',
            'email' => 'required|min:4|email|unique:users',
            'psw' => 'required',
            'psw-repeat' => 'required|same:psw'
        ]);

        $data =  new modeluserss();
        $data->email = $request->email;
        $data->psw = bcrypt($request->psw);
        $data->uname = $request->uname;
        $data->save();

        return redirect()->back()->with("success","Berhasil Mendaftar, Anda sudah dapat Login!");
    }
    public function logout(){
        Session::flush();
        return redirect('home');
    }
}
