{{-- layout 으로 --}}
@extends('products.layout')


{{-- 아래 html 을 @yield('content')에 보낸다 --}}
@section('content')
    
<h2 class="mt-4 mb-3">商品リスト               <a href="{{ url('/') }}">
                                                    {{-- 주소이동. --}}
        
        <button type="button" class="btn btn-light " style="" style="background-color: rgb(102, 75, 39)">ホーム</button>
    </a></h2>
    

    <a href="{{route("products.create")}}">
        <button  type="button" class="btn btn-dark" style="float: right;" >登録</button>
    </a>
  
    <form  action="{{ route('logout') }}" method="POST">
        @csrf
        <button  type="submit" class="btn btn-dark" style="float: right;">ログアウト</button>
    </form>



    <table class="table table-striped table-hover">
        <colgroup>
            <col width="15%"/>
            <col width="55%"/>
            <col width="15%"/>
            <col width="15%"/>
        </colgroup>
        <thead>
        <tr>
            <th scope="col">ナンバー</th>
            <th scope="col">商品名前</th>
            <th scope="col">時間</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        {{-- blade 에서는 아래 방식으로 반복문을 처리합니다. --}}
        {{-- Product Controller의 index에서 넘긴 $products(product 데이터 리스트)를 출력해줍니다. --}}
        @foreach ($products as $key => $product)
        <tr>
            <th scope="row">{{$key+1 + (($products->currentPage()-1) * 10)}}</th>
            <td>
                <a href="{{route("products.show", $product->id)}}">{{$product->name}}</a>
            </td>
            <td>{{$product->created_at}}</td>
            <td>
                <input type="button" value="修正" onclick="location.href='{{route("products.edit", $product)}}'"/>

                <form action="{{route('products.destroy', $product->id)}}" method="post" style="display:inline-block;">
                    {{-- delete method와 csrf 처리필요 --}}
                    @method('delete')
                    @csrf
                    <input onclick="return confirm('削除しますか?')" type="submit" value="削除"/>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

    {{-- 라라벨 기본 지원 페이지네이션 --}}
    {!! $products->links() !!}
@endsection