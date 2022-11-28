<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagescontroller extends Controller
{
    public function portfolio(){
        return view('page.portfolio');
    }
    public function home(){
        return view('page.home');
    }
    public function contact(){
        return view('page.contact');
    }
    public function login(){
    return view('page.login');
    }
    public function regist(){
        return view('page.register');
        }
    public function afterlogin(){
     return view('page.afterlogin');
        }
    public function riwayat(){
        return view('page.riwayat');
        }
    public function indexper(){
            return view('page.permintaanorder');
        }
}