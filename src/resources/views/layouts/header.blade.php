<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <title>@yield('title')</title>
</head>
<body class="bg-gray-200">
  <header>
    <section class="w-full bg-white h-16 flex justify-between pl-2 pr-3">
      <h1>
        <img src="{{asset('img/posse_logo.png')}}" alt="POSSE" class="w-32 object-contain">
      </h1>
      <div class="flex gap-2">
        <button onclick="location.href='{{$button_url}}'" class="w-20 h-7 my-auto text-xs rounded-2xl bg-gradient-to-r from-blue-700 to-blue-500 text-white">@yield('header_btn')</button>
        <button class="w-20 h-7 my-auto text-xs rounded-2xl bg-gradient-to-r from-blue-700 to-blue-500 text-white">ログアウト</button>
        <a href="{{route('cart.index')}}" class="flex relative">
          <img src="{{asset('img/cart.svg')}}" alt="cart" class="w-7">
          <div class="bg-red-500 w-4 h-4 rounded-full text-xs text-center leading-4 text-white absolute top-3 left-5">2</div>
        </a>
      </div>
    </section>
    <section class="w-full bg-white">
      <input type="checkbox" id="user_status" class="hidden peer">
      <label for="user_status" class="peer-checked:hidden">
        <div class="text-gray-200 text-center pb-2">▼</div>
      </label>
      <label for="user_status" class="h-16 hidden peer-checked:block">
        <div class="text-gray-200 text-center pb-2">▲</div>
        <div class="flex justify-around">
          <p>name:<span>{{ $capa->user->name }}</span></p>
          <p>todo:<span>{{ $todo_count }}</span></p>
          <p>capa<span>{{ $capa->now_capa }}</span>/<span>{{ $capa->max_capa }}</span></p>
        </div>
      </label>
    </section>
  </header>
  @yield('content')
  <footer class="h-10 bg-blue-600 w-full text-center absolute bottom-0">
    <address class="text-white text-xs leading-10 text-md not-italic">Knucklebuster Band Corp.</address>
  </footer>
  <script src="{{ asset('/js/main.js') }}"></script>
</body>
</html>