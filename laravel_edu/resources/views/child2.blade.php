
{{-- 상속 --}}
{{-- /가 아닌 .으로 연결됨 blade.templet은 --}}
@extends('inc.layout')

{{-- section : 부모 템플릿에 해당하는 yield 부분에 삽입 --}}
@section('title', '자식2 타이틀')

{{-- 구구단 찌고쥬세요 --}}
@section('main')
    @for($i = 2; $i <= 9; $i++)
        <span>{{$i, '단'}}</span>
        <br>
        @for($k = 1; $k <= 9 ; $k++)
        <span>{{$i}}*{{$k}} = {{$i*$k}}</span>
        <br>
        @endfor
    @endfor
@endsection