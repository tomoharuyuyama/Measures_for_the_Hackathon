<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
  public function shop()
  {
    return view('shop');
  }
  
  public function mypage()
  {
    return view('mypage');
  }
}
