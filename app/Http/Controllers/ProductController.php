<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class ProductController extends Controller
{
    private $product;

    public function __construct(Product $product){
        // Laravel 의 IOC(Inversion of Control)
        // 모델을 가져오는 것
        $this->product = $product;
    }

    public function index(){
        // products 의 데이터를 최신순으로 페이징
        $products = $this->product->latest()->paginate(7);
        // products/index.blade 에 $products 를 보내줍니다
        return view('products.index', compact('products')); //
        
    }

    

    //Create로 가는 메서드
    public function create(){
        return view('products.create');
    }

    public function store(Request $request)
    {
        // Request 에 대한 유효성 검사입니다, 다양한 종류가 있기에 공식문서를 보시는 걸 추천드립니다.
        // 유효성에 걸린 에러는 errors 에 담깁니다.
        $request = $request->validate([
            'name' => 'required',
            'content' => 'required'
        ]);
        $this->product->create($request);
        return redirect()->route('products.index');
        // 만들고 나면 products.index로 돌아간다.
    }


    // 상세 페이지
        public function show(Product $product){
        // show 에 경우는 해당 페이지의 모델 값이 파라미터로 넘어옵니다.
            return view('products.show', compact('product'));
       }


       
    
    
        public function edit(Product $product){
            return view('products.edit', compact('product'));
        }
    
        public function update(Request $request, Product $product){
            $request = $request->validate([
                'name' => 'required',
                'content' => 'required'
            ]);
            // $product는 수정할 모델 값이므로 바로 업데이트 해줍시다.
            $product->update($request);
            return redirect()->route('products.index', $product);
        }
    
        public function destroy(Product $product){
            $product->delete();
            return redirect()->route('products.index');
        }
        // delete보단 fuction에 destroy권장
    


      


}
