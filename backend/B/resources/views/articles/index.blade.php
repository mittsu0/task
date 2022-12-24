@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex gap-3">
            <h1 class="">投稿一覧</h1>
            <div class="">
                <a href="{{ route('articles.create') }}" class="btn btn-primary">投稿する</a>
            </div>
        </div>
        @foreach ($articles as $article)
            <div class="border-bottom">
                <p class="">{{ $article->body }}</p>
            </div>
        @endforeach
    </div>
@endsection
