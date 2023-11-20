@extends('layout.layout')

@section('title', 'edit')

@section('main')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card p-3">
                <h2 class="text-center mb-4">게시물 수정</h2>

                <form action="{{ route('board.update', ['board' => $data->b_id]) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="b_title">제목</label>
                        <input type="text" name="b_title" class="form-control" placeholder="제목을 입력하세요." value="{{ $data->b_title }}">
                    </div>

                    <div class="form-group">
                        <label for="b_content">내용</label>
                        <textarea name="b_content" class="form-control" cols="30" rows="10" placeholder="내용을 입력하세요.">{{ $data->b_content }}</textarea>
                    </div>
                    <br>
                    <div class="text-center">
                        <a href="{{ route('board.index') }}" class="btn btn-secondary">닫기 <i class="fas fa-times"></i></a>
                        <button type="submit" class="btn btn-primary">수정 <i class="fas fa-pen"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

