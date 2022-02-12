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
        <button class="w-20 h-7 my-auto text-xs rounded-2xl bg-gradient-to-r from-blue-700 to-blue-500 text-white">マイページ</button>
        <button class="w-20 h-7 my-auto text-xs rounded-2xl bg-gradient-to-r from-blue-700 to-blue-500 text-white">ログアウト</button>
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
          <p>name:<span>姑</span></p>
          <p>todo:<span>2</span></p>
          <p>capa<span>60</span>/<span>100</span></p>
        </div>
      </label>
    </section>
  </header>
  @yield('content')
</body>
</html>