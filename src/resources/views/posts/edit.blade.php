@extends('layouts.default')

@section('main')
    <div class="return_button">
        <a href="{{ route('mypage') }}">←戻る</a>
    </div>
    <div class="detail">
        <form method="POST" action="{{ route('posts.update', $post->id) }}">
            @csrf
            @method('patch')
            <div>
                <input type="text" class="sns_form" name="title" value="{{ $post->title }}">
            </div>
            <div>
                <textarea class="sns_form sns_textarea" name="text">{{ $post->text }}</textarea>
            </div>
            <div>
                <input class="submit" type="submit" value="更新">
            </div>
        </form>
    </div>
@endsection
