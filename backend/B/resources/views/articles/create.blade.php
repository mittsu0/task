@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">投稿を作成</div>
                    <div class="card-body">
                        <form action="{{ route('articles.store') }}" class="" method="post">
                            @csrf
                            <div class="mb-3">
                                <textarea class="form-control" name="body" placeholder="本文を書く">{{ old('body') }}</textarea>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary">投稿する</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
