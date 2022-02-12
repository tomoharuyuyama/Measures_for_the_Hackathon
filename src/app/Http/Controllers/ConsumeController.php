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
    $capa_update = [
      'now_capa' => ($now_capa->now_capa - ($request->cost_capa)),
    ];
    Capa::where('user_id', $request->user_id)->update($capa_update);
    return redirect()->route('shop.index');
  }

  public function done(Request $request, $id)
  {
    $now_capa = Capa::where('user_id', $request->user_id)->first();
    $update = [
      'status' => $request->status
    ];
    Task::where('id', $id)->update($update);
    if ($request->status == 2) {
      $capa_update = [
        'now_capa' => ($now_capa->now_capa + floor(($request->cost_capa)*2/3)),
      ];
      Capa::where('user_id', $request->user_id)->update($capa_update);
    }
    return redirect()->route('mypage.index');
  }
}
