<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Capa;
use App\Models\Task;

class MainController extends Controller
{
  public function shop()
  {
    $tasks = Task::with('user')->where('user_id', 0)->orderBy('dead_line', 'asc')->get();
    $capa = Capa::with('user')->where('user_id', 1)->first();
    return view('shop', compact('tasks', 'capa'));
  }
  
  public function mypage()
  {
    $tasks = Task::with('user')->where('user_id', 1)->where('status', '!=', 2)->orderBy('dead_line', 'asc')->get();
    $capa = Capa::with('user')->where('user_id', 1)->first();
    return view('mypage', compact('tasks', 'capa'));
  }
}
