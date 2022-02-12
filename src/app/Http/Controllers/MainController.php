<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Capa;
use App\Models\Task;

class MainController extends Controller
{
  public function shop()
  {
    $capas = Capa::all();
    $tasks = Task::all();
    dd($tasks);
    return view('shop', compact('tasks', 'capas'));
  }
  
  public function mypage()
  {
    $capas = Capa::with('user')->first();
    $tasks = Task::all();
    dd($capas->user->name);
    return view('mypage', compact('tasks', 'capas'));
  }
}
