@extends('layouts.header')

@section('title', 'shop')

@section('content')
<section class="mt-10 px-10">
  <div class="flex mb-5 bg-white h-20 justify-around rounded-lg shadow-sm hover:shadow-md transition-shadow px-2">
    <div class="my-auto">
      <h2 class="font-bold text-base">タスク名を決めるタスク</h2>
      <p class="text-sm"><span>30</span>capa(<span>20</span>capa)</p>
    </div>
    <button class="w-20 h-7 my-auto text-xs rounded-2xl bg-gradient-to-r from-blue-700 to-blue-500 text-white">購入</button>
  </div>
  <div class="flex mb-5 bg-white h-20 justify-around rounded-lg shadow-sm hover:shadow-md transition-shadow px-2">
    <div class="my-auto">
      <h2 class="font-bold text-base">タスク名を決めるタスク</h2>
      <p class="text-sm"><span>30</span>capa(<span>20</span>capa)</p>
    </div>
    <button class="w-20 h-7 my-auto text-xs rounded-2xl bg-gradient-to-r from-blue-700 to-blue-500 text-white">購入</button>
  </div>
</section>
@endsection