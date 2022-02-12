@extends('layouts.header')

@section('title', 'mypage')
@section('header_btn', 'ショップ')
@section('root', 'http://localhost/shop')
@section('cart', 'http://localhost/cart')

@section('content')
<section class="mt-10 px-10">
  @foreach ($tasks as $task)
    <form action="{{route('mypage.done', $task->id)}}" method="POST" name="completedform">
      @csrf
      @method('PUT')
      <input type="hidden" name="task_id" value="{{$task->id}}">
      <!-- user_id はログインによって動的に代入されるようにする -->
      <input type="hidden" name="user_id" value=1>
      <input type="hidden" name="cost_capa" value={{ $task->cost_capa }}>
      <div class="flex mb-5 bg-white h-20 justify-around rounded-lg shadow-sm hover:shadow-md transition-shadow px-2">
        <div class="my-auto">
          <h2 class="font-bold text-base">{{ $task->title }}</h2>
          <p class="text-sm"><span>{{ $task->cost_capa }}</span>capa(<span>{{ floor(($task->cost_capa)*2/3) }}</span>capa)</p>
          <p class="text-sm">期日 : {{ $task->dead_line }}</p>
        </div>
        @if ($task->status == 1)
        <input type="hidden" name="status" value=2>
        <button class="w-20 h-7 my-auto text-xs rounded-2xl bg-gradient-to-r from-blue-700 to-blue-500 text-white" onclick="completed_alert(event);return false;">完了</button>
        @elseif ($task->status == 0)
        <input type="hidden" name="status" value=1>
        <button class="w-20 h-7 my-auto text-xs rounded-2xl bg-gradient-to-r from-blue-700 to-blue-500 text-white">着手中</button>
        @endif
      </div>
    </form>
  @endforeach
</section>
@endsection