@extends('layouts.header')

@section('title', 'shop')

@section('content')
<section class="mt-10 px-10">
  @foreach ($tasks as $task)
    <form action="{{route('shop.buy', $task->id)}}" method="POST">
      @csrf
      @method('PUT')
      <input type="hidden" name="task_id" value="{{$task->id}}">
      <!-- user_id はログインによって動的に代入されるようにする -->
      <input type="hidden" name="user_id" value=1>
      <input type="hidden" name="cost_capa" value={{ $task->cost_capa }}>
      <div class="flex mb-5 bg-white h-20 justify-around rounded-lg shadow-sm hover:shadow-md transition-shadow px-2">
        <div class="my-auto">
          <h2 class="font-bold text-base">{{ $task->title }}</h2>
          <p class="text-sm"><span>{{ $task->cost_capa }}</span>capa(<span>{{ floor(($task->cost_capa)/3) }}</span>capa)</p>
          <p class="text-sm">期日 : {{ $task->dead_line }}</p>
        </div>
        <button class="w-20 h-7 my-auto text-xs rounded-2xl bg-gradient-to-r from-blue-700 to-blue-500 text-white" onClick="delete_alert(event);return false;">購入</button>
      </div>
    </form>
  @endforeach
</section>
@endsection