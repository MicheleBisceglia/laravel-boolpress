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

    <div class="form-group">
      <label for="category_id">Categoria</label>
      <select class="form-control" name="category_id" id="category_id">
          <option value="">nessuna</option>
          @foreach ($categories as $category)
              <option value="{{ $category->id }}"
                  {{ $post->category && old('category_id', $post->category->id) == $category->id ? 'selected' : '' }}>
                  {{ $category->name }} </option>
          @endforeach
      </select>
  </div>

    <button type="submit" class="btn btn-success">Submit</button>
  </form>
@endsection