@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body p-5">
                <div class="card-title text-center">
                    <h2>
                        {{ $post->title }}
                    </h2>
                </div>
                <div class="card-image text-center my-3">
                    <img class="w-50" src="{{ $post->post_image }}" alt="">
                </div>
                <div class="subtitle">
                    <p>
                        ID: {{ $post->id }} | Date: {{ $post->post_date }} by {{ $post->author }}
                    </p>
                </div>
                <div class="card-text">
                    <p>
                        {{ $post->post_content }}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection