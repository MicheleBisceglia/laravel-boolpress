@extends('layouts.dashboard')

@section('content')
<h1>Modifica post</h1>

  <form action="{{ route('admin.posts.update', ['post' => $post->id ]) }} " method="POST">
    @method('PUT')
    @csrf
    <div class="form-group">
      <label for="title">Titolo</label>
      <input type="text" class="form-control" id="title" name='title' value="{{ $post->title }}">
    </div>
    <div class="form-group">
      <label for="content">contenuto</label>
      <textarea type="text" class="form-control" id="content" name='content'>{{ $post->content }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection