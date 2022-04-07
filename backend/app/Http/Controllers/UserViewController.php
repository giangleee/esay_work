<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Interfaces\UserViewRepositoryInterface;


class UserViewController extends Controller
{
    // protected $userViewRepositoryInterface;

    public function about(){
        return view("about");
    }

    public function career(){
        return view('career');
    }

    public function contact(){
        return view('contact');
    }

    public function news(){
        return view('news');
    }

    public function our_works(){
        return view('our_works');
    }
}
