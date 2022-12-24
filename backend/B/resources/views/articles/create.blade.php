@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">投稿する</div>
                    <div class="card-body">
                        <div class="">
                            <textarea class="form-control" name="body" placeholder="本文を書く">{{ old('body') }}</textarea>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">投稿する</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
