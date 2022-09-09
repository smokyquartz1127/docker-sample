@extends('layouts.default')

@section('main')
    <div class="return_button">
        <a href="{{ url()->previous() }}">←戻る</a>
    </div>
    <div class="detail">
        <div class="article_container">
            <h2>{{ $blog->title }}</h2>
            <div>
                <li class="article_text">
                    @if ($blog->image !== '')
                        <img src="{{ asset('storage/' . $blog->image) }}" class="article_image">
                    @else
                        <img src="{{ asset('css/image/bird_shima_fukurou.png') }}" alt="画像はありません。" class="article_image">
                    @endif
                    {{ $blog->first_paragraph }}
                </li>
                <li class="article_text">{{ $blog->second_paragraph }}</li>
                <li class="article_text">{{ $blog->third_paragraph }}</li>
            </div>
        </div>
    </div>
    <div class="article_link">
        @if ($blog->id - 1 > 0)
            <li><a href="{{ route('blogs.show_all', $previous) }}">&lt;前の記事</a></li>
        @endif
        <li><a href="{{ route('blogs.index_all') }}">ブログ一覧へ戻る</a></li>
        @if ($blog->id < $max)
            <li><a href="{{ route('blogs.show_all', $next) }}">次の記事&gt;</a></li>
        @endif
    </div>
@endsection
