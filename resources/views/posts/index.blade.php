@extends('layouts.app')

@section('content')
    <div class="container">
        <header>
            <h1>Posts</h1>
        </header>
        <main>
            @foreach ($posts as $post)
                <article>
                    <h2>{{ $post->title }}</h2>
                    <p>{{ $post->content }}</p>
                </article>
            @endforeach
        </main>
    </div>
@endsection