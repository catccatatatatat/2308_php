<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function index() {
        return view('test')->with('name','미스터 존');
    }
}
// 첫번째 : 변수명($name), 두번째 : value name= Test.Index ,test = 미스터 존