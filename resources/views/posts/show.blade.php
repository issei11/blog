@extends('layouts.app')

@section('content')
<h1 class="title">
    {{ $post->title }}
</h1>
<div class="content">
    <div class="content__post">
        <h3>本文</h3>
        <p>{{ $post->body }}</p>    
    </div>
</div>
<div class="footer">
    <a href="">{{ $post->category->name }}</a>
    <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
    <p class="edit">[<a href="/posts/{{ $post->id }}/edit">edit</a>]</p>
    <a href="/">戻る</a>
</div>
@endsection