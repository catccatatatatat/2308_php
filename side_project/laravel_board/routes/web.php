<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BoardController;

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

Route::get('/', function () {
    return view('login');
});


// 유저관련
Route::get('/user/login', [UserController::class, 'loginget'])->name('user.login.get'); // 로그인 화면 이동
Route::middleware('my.user.validation')->post('/user/login', [UserController::class, 'loginpost'])->name('user.login.post'); //로그인 처리
Route::get('/user/registration', [UserController::class, 'registrationget'])->name('user.registration.get'); //회원가입 확인
Route::middleware('my.user.validation')->post('/user/registration', [UserController::class, 'registrationpost'])->name('user.registration.post'); //회원가입 처리
Route::get('/user/logout', [UserController::class, 'logoutget'])->name('user.logout.get');// 로그아웃 처리

//GET|HEAD        user .................... task.index › UserController@index  로그인 화면 이동
//GET|HEAD        user/{user} ............. task.destroy › UserController@edit 로그인 처리

//GET|HEAD        user/create ............. task.create › UserController@create  회원 가입 화면 이동
//POST            user .................... task.store › UserController@store  회원 가입 처리

//GET|HEAD        user/{user} ............. task.show › UserController@show  회원 정보 화면 이동
//PUT|PATCH       user/{user} ............. task.update › UserController@update  회원 정보 수정 처리

//DELETE          user/{user} ............. task.destroy › UserController@destroy  회원 탈퇴 처리

// 보드관련
Route::middleware('auth')->resource('/board', BoardController::class);
// GET|HEAD        board .......................................................... board.index › BoardController@index 리스트페이지 이동
// POST            board .......................................................... board.store › BoardController@store 작성 처리
// GET|HEAD        board/create ................................................. board.create › BoardController@create 작성 페이지로 이동
// GET|HEAD        board/{board} .................................................... board.show › BoardController@show 상세 페이지로 이동
// PUT|PATCH       board/{board} ................................................ board.update › BoardController@update 수정 처리
// DELETE          board/{board} .............................................. board.destroy › BoardController@destroy 삭제 처리
// GET|HEAD        board/{board}/edit ............................................... board.edit › BoardController@edit 수정 페이지로 이동