@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="">
            <h1>投稿一覧</h1>
        </div>
        @foreach ($articles as $article)
            <div class="border-bottom">
                <p class="">{{ $article->body }}</p>
            </div>
        @endforeach
    </div>
