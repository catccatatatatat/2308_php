
{{-- 상속 --}}
{{-- /가 아닌 .으로 연결됨 blade.templet은 --}}
{{-- inc 폴더 안의 layout, 문법 --}}
@extends('inc.layout')

{{-- section : 부모 템플릿에 해당하는 yield 부분에 삽입 --}}
@section('title', '자식1 타이틀')

{{-- @section ~  @endsection : 처리해야 될 코드가 많을 경우 --}}
{{-- @for ~ @endfor : 반복문 처리 경우 --}}

@section('main')
<h2>자식 1 화면입니다.</h2>
<p>여러 데이터를 표시 합니다.</p>


<hr>

{{-- 반복문 --}}
<h3>for문</h3>
@for($i = 0; $i < 5; $i++)
        {{-- 화면에 변수를 출력하는 방법 {{ 변수 }} --}}
    <span>{{$i}}</span>
@endfor

<hr>
<h3>foreach문</h3>

@foreach ($data as $key => $val)
    <span>{{$key.' : '.$val}}</span>
    <br>

@endforeach

<hr>
{{-- forech와 forelse의 경우, $loop벼눗가 생성되고 사용 할 수 있다. --}}
<h3>forelse</h3>
@forelse($data2 as $key => $val)
      <span>{{ $key.' : '.$val }}</span>
      <br>
@empty
      <span>빈배열입니다.</span>

@endforelse

<br>
<hr>

{{-- 조건문 작성 예시--}}
    @if($gender === '0')
        <span>성별 : 남자</span>

    @elseif($gender === '1')
        <span>성별 : 여자</span>

    @else
        <span>성별 : 트렌스젠더</span>    

@endif

@endsection



{{-- 부모 shwo 테스트용 --}}

@section('show')
    <h2>자식1 show 입니다.</h2>
    <p>자식1자식1자식1</p>
@endsection