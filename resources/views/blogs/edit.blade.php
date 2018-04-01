@extends('layout.app')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{ route('blogs.update', $blog->id) }}">
        {{ csrf_field() }}
        @method('put')
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input type="text" name="title" class="form-control" 
        value="{{ $blog->title }}"
          id="name" 
           placeholder="Enter Title">
        </div>
        <div class="form-group">
          <label for="body">Example textarea</label>
          <textarea class="form-control" name="body" id="body" rows="3">{{ $blog->body }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection

@section('title')
    Blog Create
@endsection    