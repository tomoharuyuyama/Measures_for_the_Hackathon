<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class ConsumeController extends Controller
{
  public function buy(Request $request, $id)
  {
    $update = [
      'user_id' => $request->user_id
    ];
    Task::where('id', $id)->update($update);
    return redirect()->route('shop.index');
  }
}
