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
    // TODO 後ほど、where句が動的に変更できるようにする
    $todo_count = Task::where('user_id', 1)->get()->count();
    return view('shop', compact('tasks', 'capa', 'todo_count'));
  }
  
  public function mypage()
  {
    $tasks = Task::with('user')->where('user_id', 1)->where('status', '!=', 2)->orderBy('dead_line', 'asc')->get();
    $capa = Capa::with('user')->where('user_id', 1)->first();
    $todo_count = Task::where('user_id', 1)->get()->count();
    return view('mypage', compact('tasks', 'capa', 'todo_count'));
  }

  public function cart()
  {
    $tasks = Task::with('user')->where('user_id', 1)->where('status', '!=', 2)->orderBy('dead_line', 'asc')->get();
    $capa = Capa::with('user')->where('user_id', 1)->first();
    $todo_count = Task::where('user_id', 1)->get()->count();
    return view('cart', compact('tasks', 'capa', 'todo_count'));
  }
}
