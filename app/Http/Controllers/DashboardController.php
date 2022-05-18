<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response as Res;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){return view('live.index');}
    public function main_sign_in(){return view('live.authentication.sign-in');}
    public function main_sign_up(){return view('live.authentication.sign-up');}
    public function forget_password(){return view('live.authentication.forget-password');}

    public function coloring_book_sign_in(){return view('live.coloringbook.authentication.sign-in');}
    public function coloring_book_sign_up(){return view('live.coloringbook.authentication.sign-up');}
    public function coloring_book_forget_password(){return view('live.coloringbook.authentication.forget-password');}

    public function coloring_book_main_dashboard(){return view('live.coloringbook.main-dashboard');}

    public function changelog(){return view('live.changelog');}
}
