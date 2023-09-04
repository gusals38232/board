<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/resources/css/app.css">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'MJBoard') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<style>
button.button_4 {
  border: 0;
  outline: none;
  width: 150px;
  height: 50px;
  border-radius: 10px;
  font-size: 30px;
  margin: 30px;
  box-shadow: 3px 3px 3px rgb(109, 109, 109), -3px -3px 3px rgb(237, 237, 237);
  transition: 0.3s;
}

button.button_4:hover {
  box-shadow: -3px -3px 3px rgb(172, 172, 172), 3px 3px 3px rgb(237, 237, 237);
  transition: 0.3s;
}

.goo {
                font-family: arial,sans-serif;
                clear: both;
                margin-left: 0;
                padding-top: 20px;
                box-sizing: border-box;
                position: relative;
                min-height: 100vh;
}

</style>



</head>


{{-- body-------------------------------------------------------------------- --}}

<body>


<form method="POST" action="{{ route('register') }}">
    
    <div class="mx-auto pt-4 pb-4 max-w-2xl h-auto bg-white shadow-lg">
    {{--  --}}

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/welcome') }}">
                    {{-- url 바꿔서 home으로 갈수있다 --}}
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                        {{-- 신규등록 로그인창 없애두기. --}}
                            {{-- @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('ログイン') }}</a>
                                </li>
                            @endif --}}

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('新規登録') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        {{-- 이 부분을 수정하면 register가 수정된다. --}}
        <main class="py-3">
            @yield('content')
        </main>
    </div>




        {{--  --}}
    @csrf
    
    <div class="w-100 h-100 d-flex flex-column p-3 m-0 border mjBorder-newNavy  shadow" style="background-color: rgb(242, 244, 245)">
    <p class="mt-4">
    <div >
        <label  for="name">名前</label>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
    </div>
    </p>

    <p class="mt-4">
    <div>
        
        <label for="email">メールアドレス</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required>
        
    </div>
    </p>

    <p class="mt-4">
    <div>
        <label for="password">パスワード</label>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input id="password" type="password" name="password" required>
    </div>
    </p>

    <p class="mt-4">
    <div>
        <label for="password_confirmation">パスワード確認</label>
        <input style="padding-right: 5px" id="password_confirmation" type="password" name="password_confirmation" required>
    </div>
    </p>
    <div class="goo" style="padding-left: 110px">
        {{-- <button type="submit">加入する</button> --}}
        <button type="submit" class="button_4">加入する</button>
    </div>

    </div>
</form>




</body>

<html></html>