<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', function () {
    return view('/welcome');
});


//로그인
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');

Route::post('login', [LoginController::class, 'login']); 
Route::post('auth/logout', [LoginController::class, 'logout'])->name('logout');

// Route::any('login', [LoginController::class, 'login'])->name('login');


//회원가입
// 회원가입 양식 보기
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
// 회원가입 처리
Route::post('register', [RegisterController::class, 'register']);

Route::post('auth/logout', [LoginController::class, 'logout'])->name('logout');



//board 전반적인 부분
// products 로 get 요청이 올 경우 ProductController 의 index 함수를 실행
// name 은 별명으로 나중에 route('product.index') 주소 출력 가능
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
// store 요청은 form 을 통해 post로 온다
Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
Auth::routes();




// {product}는 주소의 변경가능한 값이 오는 것을 product로 받는 것을 의미합니다, 이 값은 현재 아이디가 오는 데
// 해당 아이디에 맞춘 모델 객체를 ProductController의 show 함수에 매개변수로 보내는 동작을 수행합니다.
Route::get('products/{product}',[ProductController::class, 'show'])->name("products.show");
// 


// 수정 페이지
Route::get('products/{product}/edit', [ProductController::class, 'edit'])->name("products.edit");
// Laravel에서 업데이트의 대한 메서드로는 Patch 또는 Put을 권장합니다.
Route::patch('products/{product}', [ProductController::class, 'update'])->name('products.update');

// 삭제 페이지
Route::delete('products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
            // function 이름임 destroy,update,edit..