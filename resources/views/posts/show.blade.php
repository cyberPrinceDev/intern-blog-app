@extends('layouts.app')

@section('content')
<div class="container">
    <a href="/posts">Back to Posts</a>
    
    <div class="post">
        <h1>{{ $post['title'] }}</h1>
        <p class="post-id">ID: {{ $post['id'] }}</p>
        <p class="post-content">{{ $post['content'] }}</p>
    </div>
</div>
@endsection
