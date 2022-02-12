<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Capa;
use App\Models\Task;

class MainController extends Controller
{
  public function shop()
  {
    $tasks = Task::with('user')->orderBy('dead_line', 'asc')->get();
    $capas = Capa::with('user')->where('user_id', 1)->first();
    // TODO 後ほど、where句が動的に変更できるようにする
    $todo_count = Task::where('user_id', 0)->get()->count();
    return view('shop', compact('tasks', 'capas', 'todo_count'));
  }
  
  public function mypage()
  {
    $capas = Capa::with('user')->first();
    $tasks = Task::all();
    return view('mypage', compact('tasks', 'capas'));
  }
}
