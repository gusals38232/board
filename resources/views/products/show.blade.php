@extends('products.layout')
{{-- 아래 html을 layout으로 보낸다. --}}
@section('content')
    <h2 class="mt-4 mb-3" >商品名前: {{$product->name}}</h2>
    <p style="text-align: right" class="pt-2">{{$product->created_at}}</p>

    <div class="content mt-4 rounded-3 border border-secondary" >
        <div class="p-3" >
            {{$product->content}}
        </div>
    </div>
@endsection