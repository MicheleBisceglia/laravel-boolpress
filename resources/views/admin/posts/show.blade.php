@extends('layouts.dashboard')

@section('content')
    <h1 class="mb-3"> {{ $post->title }} </h1>
    <p class="mb-3">Slug: {{ $post->slug }}</p>
    <p>{{ $post->content }}</p>
@endsection