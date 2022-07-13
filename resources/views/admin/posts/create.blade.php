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
        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Title</label>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-sm" name="title" id="title" placeholder="Inserisci qui il titolo del tuo post">
        </div>
      </div>

      <div class="form-group row">
        <label for="colFormLabel" class="col-sm-2 col-form-label">Categoria</label>
        <select class="form-controll border-secondary h-75 ml-3 mt-2" name="category_id" id="category_id">
          <option value="">Nessuna</option>
          @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
          @endforeach
          
        </select>
      </div>

      <button type="submit" class=" btn btn-success">submit</button>
    </form>
@endsection