@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $post->title }}</h1>
           <a href="/dashboard/posts" class="btn btn-success">Back to all my posts</a>
           <a href="">edit</a>
            <a href=""> | hapus</a>
            <img src="https://source.unsplash.com/1200x400?{{ $post -> category -> name}}" class="card-img-top" alt="{{ $post -> category -> name }}">
            <article class="my-5 fs-5">
                {!! $post->body !!}
            </article>
            <a href="/posts" class="d-block mt-3">back to posts</a>
        </div>
    </div>
</div>
@endsection