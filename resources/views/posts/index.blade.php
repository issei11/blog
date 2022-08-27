@extends('layouts.app')

@section('content')
<p>{{Auth::user()->name}}</p>
<h1>Blog Name</h1>
<div class='posts'>
    [<a href='/posts/create'>create</a>]
    @foreach ($posts as $post)
        <div class='post'>
            <h2 class='title'>
                <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
            </h2>
            <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
            <p class='body'>{{ $post->body }}</p>
            <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit">delete</button> 
            </form>
        </div>
    @endforeach
</div>
<div class='paginate'>
    {{ $posts->links() }}
</div>
@endsection