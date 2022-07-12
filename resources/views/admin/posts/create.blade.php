@extends('layouts.dashboard')

@section('content')
    <h1>Crea un nuovo post</h1>

    <form action="{{ route('admin.posts.store') }}" method="POST">
      @method('POST')
      @csrf 
      <div class="form-group row">
        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Title</label>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-sm" name="title" id="title" placeholder="Inserisci qui il titolo del tuo post">
        </div>
      </div>

      <div class="form-group row">
        <label for="colFormLabel" class="col-sm-2 col-form-label">Content</label>
        <div class="col-sm-10">
          <textarea type="text" class="form-control" name="content" id="content" placeholder="Inserisci qui il contenuto del tuo post"></textarea>
        </div>
      </div>

      <button type="submit" class=" btn btn-primary">submit</button>
    </form>
@endsection