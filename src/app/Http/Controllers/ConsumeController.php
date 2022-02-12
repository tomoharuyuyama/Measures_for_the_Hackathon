<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Capa;

class ConsumeController extends Controller
{
  public function buy(Request $request, $id)
  {
    $now_capa = Capa::where('user_id', $request->user_id)->first();
    $update = [
      'user_id' => $request->user_id,
    ];
    Task::where('id', $id)->update($update);
    // dd($now_capa->now_capa - ($request->cost_capa));
    $capa_update = [
      'now_capa' => ($now_capa->now_capa - ($request->cost_capa)),
    ];
    Capa::where('user_id', $request->user_id)->update($capa_update);
    return redirect()->route('shop.index');
  }
}
