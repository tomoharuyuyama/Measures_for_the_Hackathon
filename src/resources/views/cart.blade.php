@extends('layouts.header')

@section('title', 'cart')

@section('content')
<section class="mt-10 px-10">
  <h2 class="font-bold text-xl mb-10 border-black border-b-2 w-2/3 pl-2">カートの中身</h2>

  <div class="flex mb-5 bg-white h-20 justify-around rounded-lg shadow-sm hover:shadow-md transition-shadow px-2">
    <div class="my-auto">
      <h3 class="font-bold text-base">task_title</h3>
      <p class="text-sm"><span>30</span>capa(<span>20</span>capa)</p>
      <p class="text-sm">期日 : 2022-02-19</p>
    </div>
    <div class="flex flex-col py-1">
      <button class="w-24 h-7 my-auto text-xs rounded-2xl bg-gradient-to-r from-blue-700 to-blue-500 text-white">カートから出す</button>
      <button class="w-24 h-7 my-auto text-xs rounded-2xl bg-gradient-to-r from-blue-700 to-blue-500 text-white">購入</button>
    </div>
  </div>
  <div class="flex mb-5 bg-white h-20 justify-around rounded-lg shadow-sm hover:shadow-md transition-shadow px-2">
    <div class="my-auto">
      <h3 class="font-bold text-base">task_title</h3>
      <p class="text-sm"><span>30</span>capa(<span>20</span>capa)</p>
      <p class="text-sm">期日 : 2022-02-19</p>
    </div>
    <div class="flex flex-col py-1">
      <button class="w-24 h-7 my-auto text-xs rounded-2xl bg-gradient-to-r from-blue-700 to-blue-500 text-white">カートから出す</button>
      <button class="w-24 h-7 my-auto text-xs rounded-2xl bg-gradient-to-r from-blue-700 to-blue-500 text-white">購入</button>
    </div>
  </div>

  <p class="font-bold text-lg text-center pt-4">合計capa: <span>60</span>capa</p>
  <div class="w-full text-center mt-2">
    <button class="w-24 h-7 my-auto text-xs rounded-2xl bg-gradient-to-r from-blue-700 to-blue-500 text-white">まとめて購入</button>
  </div>
</section>
@endsection