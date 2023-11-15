@extends('layout.layout')

@section('title', 'Login')
 
@section('main')
<main class="d-flex justify-content-center align-items-center h-75">
    <div class="container">
        <p>{{ $data->b_id }}</p>
        <p>{{ $data->b_title }}</p>
        <p>{{ $data->b_content }}</p>
        <p>{{ $data->b_hits }}</p>
        <p>{{ $data->created_at }}</p>
        <p>{{ $data->deleted_at }}</p>
        <p>{{ $data->updated_at }}</p>
    </div>
</main>
@endsection
