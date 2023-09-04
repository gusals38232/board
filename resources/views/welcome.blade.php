<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
    <meta name="csrf-token" content="Nbw50WgL24qSqY9q0bs4ireev4gwuunR7oaK3wKz">
        <link rel="stylesheet" href="/resources/css/app.css">
        <title>MJBoard</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
        <script src="https://kit.fontawesome.com/4943f6a8d7.js" crossorigin="anonymous"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">
         <!-- Favicon -->
        <link rel="manifest" href="https://rimclnc.mixjam.net/favicons/manifest.json?ver=2021121683">
        <link rel="shortcut icon" href="https://rimclnc.mixjam.net/favicons/favicon.ico?ver=2021121683">
        <!-- Styles -->
        <link rel="stylesheet" href="https://rimclnc.mixjam.net/css/app.css?ver=2021121683">
        {{-- weather --}}
        <link rel="stylesheet" href="./style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">  
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>  
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        

        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
         body {
    font-family: 'Nunito', sans-serif;
}


button.button_3 {
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

button.button_3:hover {
    box-shadow: -3px -3px 3px rgb(172, 172, 172), 3px 3px 3px rgb(237, 237, 237);
    transition: 0.3s;
}

           

        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            {{-- @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sl text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}

            <body class="w-100 h-100 p-0 m-0 overflow-hidden" style="background-color: #8deaed">
                <header class="fixed-top p-0 m-0">
                </header>

            <main class="h-100 p-0 m-0 d-flex container-fluid mjAppLayoutLogin">
                <div
                    class="loginBody ps-3 w-100 h-100 d-flex justify-content-center align-items-center min-h-100 row mjScrollY">
        
                    





                    <section class="p-2 m-0 overflow-hidden col-lg-7">

                        <div class="w-100 h-100 d-flex flex-column p-3 m-0 border mjBorder-newNavy bg-white shadow">
                            <label class="fa-2x mb-4 text-center fw-normal" style="color:#22323; border-bottom: 2px #ced4de solid ;" >
                                今日の天気

                                <i class="fas fa-thin fa-umbrella fa-flip" style="color: #44597e"></i>
                           </label>
                           <button onclick="location.href='https://tenki.jp/'">
                            <svg stroke="currentColor"  fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M909.6 854.5L649.9 594.8C690.2 542.7 712 479 712 412c0-80.2-31.3-155.4-87.9-212.1-56.6-56.7-132-87.9-212.1-87.9s-155.5 31.3-212.1 87.9C143.2 256.5 112 331.8 112 412c0 80.1 31.3 155.5 87.9 212.1C256.5 680.8 331.8 712 412 712c67 0 130.6-21.8 182.7-62l259.7 259.6a8.2 8.2 0 0 0 11.6 0l43.6-43.5a8.2 8.2 0 0 0 0-11.6zM570.4 570.4C528 612.7 471.8 636 412 636s-116-23.3-158.4-65.6C211.3 528 188 471.8 188 412s23.3-116.1 65.6-158.4C296 211.3 352.2 188 412 188s116.1 23.2 158.4 65.6S636 352.2 636 412s-23.3 116.1-65.6 158.4z"></path></svg>
                          </button>
                                  <br><br><br><br><br><br>
                                  <br><br><br><br><br><br>
                                  <br><br><br><br><br><br><br><br>
                        
                        
                        </div>



                                <br><br><br><br> <br><br>



                        <div class="w-100 h-100 d-flex flex-column p-3 m-0 border mjBorder-newNavy bg-white shadow">
                            <div class="flex-shrink-1 p-0 m-0 text-center">
                                <label class="fa-2x mb-4 fw-normal" style="color:#22323; border-bottom: 2px #ced4de solid ;" >
                                     お知らせ
                                     
                                     <i class="fas fa-sharp fa-light fa-tag fa-flip" style="color: #44597e;"></i>
                                </label>
                            </div>
                            <div id="divMJNotice" class="flex-grow-1 w-100 accordion accordion-borderless mjScrollY">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOneX">
                                        <button class="accordion-button row collapsed" type="button" data-mdb-toggle="collapse"
                                            data-mdb-target="#mjNotice001" aria-expanded="false" aria-controls="mjNotice001">
                                            <span class="fw-bold text-secondary d-flex col-lg-4 p-0">2023/06/30</span>
                                            <span class="fw-bold text-dark d-flex col-lg-7">水曜日</span>
                                        </button>
                                    </h2>
                                    <div id="mjNotice001" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingOneX" data-mdb-parent="#divMJNotice" style="">
                                        <div class="accordion-body" style="text-align: left">
        
                                            無し
        
        
        
        
                                        </div>
                                    </div>
                                </div>
        
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOneX">
                                        <button class="accordion-button row collapsed" type="button" data-mdb-toggle="collapse"
                                            data-mdb-target="#mjNotice001" aria-expanded="false" aria-controls="mjNotice001">
                                            <span class="fw-bold text-secondary d-flex col-lg-4 p-0">2023/06/13</span>
                                            <span class="fw-bold text-dark d-flex col-lg-7">月曜日</span>
                                        </button>
                                    </h2>
                                    <div id="mjNotice001" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingOneX" data-mdb-parent="#divMJNotice" style="">
                                        <div class="accordion-body">
                                            無し
                                        </div>
        
        
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOneX">
                                        <button class="accordion-button row collapsed" type="button" data-mdb-toggle="collapse"
                                            data-mdb-target="#mjNotice001" aria-expanded="false" aria-controls="mjNotice001">
                                            <span class="fw-bold text-secondary d-flex col-lg-4 p-0">2023/06/13</span>
                                            <span class="fw-bold text-dark d-flex col-lg-7">火曜日</span>
                                        </button>
                                    </h2>
                                    <div id="mjNotice001" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingOneX" data-mdb-parent="#divMJNotice" style="">
                                        <div class="accordion-body">
                                           　　　
                                        </div>
        

                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingOneX">
                                                <button class="accordion-button row collapsed" type="button" data-mdb-toggle="collapse"
                                                    data-mdb-target="#mjNotice001" aria-expanded="false" aria-controls="mjNotice001">
                                                    <span class="fw-bold text-secondary d-flex col-lg-4 p-0">2023/06/13</span>
                                                    <span class="fw-bold text-dark d-flex col-lg-7">水曜日</span>
                                                </button>
                                            </h2>
                                            <div id="mjNotice001" class="accordion-collapse collapse"
                                                aria-labelledby="flush-headingOneX" data-mdb-parent="#divMJNotice" style="">
                                                <div class="accordion-body">
                                                    無し
                                                </div>
                
                
                                            </div>
                                        </div>
        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
        
                    <section class="p-2 m-0 col-lg-5">
                        <div class="w- h-100 py-5 px-5 m-0 border mjBorder-newNavy bg-white shadow">
                            <form method="POST" class="d-flex flex-grow-1 flex-column p-0 h-100 position-relative"
                                action="http://192.168.2.13:8000/welcome">
                                <input type="hidden" name="_token" value="Nbw50WgL24qSqY9q0bs4ireev4gwuunR7oaK3wKz">
                                <div class="d-flex flex-column flex-grow-1">
                                    <div class="row justify-content-center align-items-center mb-4">
                                        <div class="flex-shrink-1 me-2" style="width:20% ;">
                                            <i class="fas fa-sharp fa-light fa-m"></i>
                                            <i class="fas fa-sharp fa-light fa-j"></i>
        
        
                                           
        
        
                                            {{-- 페이지 이동 --}}
                                            {{-- <button>
                                                <a href="{{ url('/home') }}"
                                                    class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                                            </button> --}}
        
        
        
                                        </div>
        
        
        
        
        
                                        <div class="col-auto">
                                            <label class="flex-shrink-1 mjText-darkgrey fw-bold fa-2x">MJBoard</label>
                                        </div>
                                        
                                    </div>
        
                                    <br><br>
        
                                    {{-- 로그인 --}}
                                    {{-- <div class="row align-items-center mb-5">
                                <label class="form-text fw-bold fa-1x mjText-newNavy">
                                    @if (Route::has('login'))
                                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                            @auth
                                                <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                                            @else
                                                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                                
                                               
                                            @endauth
                                        </div>
                                    @endif
                                
                                
                                </label> --}}
        
        
                                    {{-- 로그인 밑에 입력창 --}}
                                    {{-- <div class="d-flex submit w-100 flex-shrink-1">
                                    <button value="logbox" style="" type="submit" class="btn btn-lg mjBg-lownavy w-100 fa-1x fw-bold position-relative">
                                        @if (Route::has('login'))
                                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                            @auth
                                                <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                                            @else
                                                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                                
                                               
                                            @endauth
                                        </div>
                                    @endif
                                    </button>
                                </div> --}}
        
        
                                    <div class="card-body">

                                        @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif




                                        <form method="POST" action="{{ route('login')}}">
                                            @csrf
                                            @method('PUT')
        
                                             <div class="row mb-3">
                                                <label for="name"
                                                    class="col-md-4 col-form-label text-md-end">{{ __('name') }}</label>
        
                                                <div class="col-md-6">
                                                    <input id="name" type="name"
                                                        class="form-control @error('name') is-invalid @enderror"
                                                        name="name" value="{{ old('name') }}" required
                                                        autocomplete="email" autofocus>
        
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </form> 
        
                                            <div class="row mb-3">
                                                <label for="password"
                                                    class="col-md-4 col-form-label text-md-end">{{ __('パスワード') }}</label>
        
                                                <div class="col-md-6">
                                                    <input id="password" type="password"
                                                        class="form-control @error('password') is-invalid @enderror"
                                                        name="password" required autocomplete="current-password">
        
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
   
                                                  <div class="row mb-0">
                                                <div class="col-md-8 offset-md-4">
                                                    
                                                    <button type="submit" class="btn btn-primary">
                                                        {{ __('ログイン') }}
                                                    </button>
                                                   
                                                </div>
                                            </div> 
                                        {{-- </form>  --}}
                                    </div>
                                    
        
                                    {{-- 레지스터 창 --}}
        
                                    {{-- <div value="logbox" style="" type="submit"
                                        class="btn btn-lg mjBg-my w-100 fa-1x fw-bold position-relative">
        
                                        <label class="form-text fw-bold fa-1x mjText-darkgrey">
                                            @if (Route::has('register'))
                                                <a href="{{ route('register') }}"
                                                    class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                            @endif
                                        </label>
                                    </div> --}}
        
                                    {{-- register --}}
                                    {{-- <div class="row align-items-center mb-5">   
                                <label class="form-text fw-bold fa-1x mjText-darkgrey">
                                    @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                @endif </label> --}}
        
        
                                </div>
        
        
        
        
                                {{-- 원래 비번입력창 --}}
        
                                {{-- <div class="col m-0 row">
                                    <div class="p-2 mjBg-lownavy mjBorder-radius-1 mjBorder-radius-right-0" style="width:50px">
                                        <i class="mjIcon-white-password"></i>
                                    </div>
                                    <div class="col p-0">
                                        <input id="password" type="password" class="mjBorder-radius-left-0 h-100 form-control mjBg-lightblue placeholder-active" name="password" placeholder="パスワード" required="" autocomplete="off">
                                    </div>
                                                            </div> --}}
        
        
        
                                <div
                                    class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        


                                                    {{-- form action기능은  폼 데이터(form data)를 서버로 보낼 때 해당 데이터가 도착할 URL을 명시합니다.  --}}
                                    <form class="p-4 w-full" action="/products" method="POST">
                                        @csrf
                                        {{-- <p class="border-b border-gray-400 text-2xl text-left mb-8 pb-1">
                                            @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="ml-4 text-sl text-gray-700 dark:text-gray-500 underline">Register</a>
                                        @endif
                                           </p> --}}
                                        <p class="mt-4">
                                            <label for="userId" class="inline-block w-1/3 text-lg text-right mr-4">アカウント</label>
                                            <input   type="text" name="name" id="name" class="border-2 border-blue-400 rounded-lg pl-2 outline-none" size="30">
                                        </p>
                                        <p class="mt-6">
                                            <label for="password" class="inline-block w-1/3 text-lg text-right mr-4">パスワード</label>
                                            <input type="password" name="password" id="password" class="border-2 border-blue-400 rounded-lg pl-2 outline-none" size="30">
                                        </p>
                                        <p class="mt-6 w-3/5 mx-auto text-right">
                                            <label for="remember_me" class="inline-block"></label>
                                            <input type="checkbox" id="remember_me" name="remember" class="w-4 h-4">
                                            <span class="text-lg text-darkgrey-400">ログインセッション</span>
                                        </p>
                            
                                        <p class="mt-8 text-center">
                                           
                                            <input class="bg-blue-600 rounded-xl hover:bg-blue-800 text-black px-6 py-2 mr-6" type="button"
                                             value="ログイン" onclick="location.href = '{{route('products.index')}}'">
                                            {{-- login경로로 하니까 로그인이 된다. --}}

                                            
                                            <input class="bg-red-600 rounded-xl hover:bg-red-800 text-black px-6 py-2" id="backMain" type="button"
                                                   value="新規登録" onclick="location.href = '{{route('register')}}'">
                                        </p>
                                    </form>

                                </div>
        
        
                                {{-- 로긴창 --}}
        
                                {{-- <div class="d-flex submit w-100 flex-shrink-1">
                            <button value="logbox" style="" type="submit" class="btn btn-lg mjBg-lownavy w-100 fa-1x fw-bold position-relative" onclick="location.href='http://192.168.2.13:8000/2'">ログイン!</button>
                        </div> --}}
        
        
        
                            </form>
                        </div>
                    </section>
                </div>
            </main>










        </div>

        <footer class="fixed-bottom p-0 m-0">

        </footer>
        <!-- Scripts -->
        <script src="https://rimclnc.mixjam.net/js/app.js?ver=2021121683"></script>
        <script src="https://rimclnc.mixjam.net/js/common/common.js?ver=2021121683" defer=""></script>
        <script src="https://rimclnc.mixjam.net/js/common/common.window.open.js?ver=2021121683" defer=""></script>
    
    
    </body>


    <script src="./script.js"></script>
<script>
    
</script>

    
</html>
