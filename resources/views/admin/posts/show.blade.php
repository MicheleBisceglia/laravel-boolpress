@extends('layouts.dashboard')

@section('content')
    <h1 class="mb-3"> {{ $post->title }} </h1>
    <p>Categoria: {{ $post->category ? $post->category->name : 'nessuna categoria'}}</p>
    <p class="mb-3">Slug: {{ $post->slug }}</p>
    <p>{{ $post->content }}</p>

    <div class="w-25 d-flex justify-content-between">
        <a href="{{ route('admin.posts.edit', ['post' => $post->id]) }}" class="btn btn-success">Modifica</a>

        <form action="{{ route('admin.posts.destroy', ['post' => $post->id]) }}" method="post">
        @csrf
        @method('DELETE')

            <button class="btn btn-danger" type="submit">Cancella</button>
        </form>
    </div>
    
@endsection