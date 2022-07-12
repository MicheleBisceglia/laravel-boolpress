@extends('layouts.dashboard')

@section('content')
    <h1 class="mb-3"> {{ $post->title }} </h1>
    <p class="mb-3">Slug: {{ $post->slug }}</p>
    <p>{{ $post->content }}</p>

    <div class="w-25 d-flex justify-content-between">
        <a href="{{ route('admin.posts.edit', ['post' => $post->id]) }}" class="btn btn-primary">Modifica</a>

        <form action="{{ route('admin.posts.destroy', ['post' => $post->id]) }}" method="post">
        @csrf
        @method('DELETE')

            <button class="btn btn-warning text-danger border-danger" type="submit">Cancella</button>
        </form>
    </div>
    
@endsection