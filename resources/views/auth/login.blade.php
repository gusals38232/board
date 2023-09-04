@extends('layouts.app')

@section('title', 'login')

@section('content')
    <div class="mx-auto pt-4 pb-4 max-w-2xl h-auto bg-white shadow-lg">
        <form class="p-4 w-full" action="/products" method="post">
            @csrf
            <p class="border-b border-gray-400 text-2xl text-left mb-8 pb-1"
            >&nbsp ログイン</p>


                {{-- input name이 userid로 되있어서? --}}
            <p class="mt-4">
                <label for="name" class="inline-block w-1/3 text-lg text-right mr-4">アカウント</label>
                <input type="text" name="name" id="name" class="border-2 border-blue-400 rounded-lg pl-2 outline-none" size="30">
            </p>
            <p class="mt-6">
                <label for="password" class="inline-block w-1/3 text-lg text-right mr-4">パスワード</label>
                <input type="password" name="password" id="password" class="border-2 border-blue-400 rounded-lg pl-2 outline-none" size="30">
            </p>
            <p class="mt-6 w-3/5 mx-auto text-right">
                <label for="remember_me" class="inline-block"></label>
                <input type="checkbox" id="remember_me" name="remember" class="w-4 h-4">
                <span class="text-xl text-gray-400">ログインセッション</span>
            </p>

            <p class="mt-8 text-center">
                <input class="bg-blue-600 rounded-xl hover:bg-blue-800 text-white px-6 py-2 mr-6" type="submit" value="ログイン">
               

                <input class="bg-red-600 rounded-xl hover:bg-red-800 text-white px-6 py-2" id="backMain" type="button"
                       value="取り消し" onclick="location.href = '{{route('products.index')}}'">
            </p>

            {{-- login ui설정 --}}
            {{-- <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('아이디') }}</label>
                <div class="col-md-6">
                    <input id="user_id" type="text" class="form-control @error('user_id') is-invalid @enderror" 
                                   name="user_id" value="{{ old('user_id') }}" required autocomplete="user_id" autofocus>
            
                    @error('user_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div> --}}



        </form>
    </div>
@endsection