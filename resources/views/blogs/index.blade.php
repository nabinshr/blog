@extends('layout.app')

@section('content')
<a href="{{ route('blogs.create') }}"><button class="btn btn-primary">Add Blog</button></a>
    <table class="table table-border">
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Creator</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach($blogs as $blog)
        <tr>
            <td>{{ $blog->title }}</td>
            <td>{{ $blog->body }}</td>
            <td>{{ \App\User::find($blog->user_id)->name }}</td>
            <td><a href="/blogs/{{ $blog->id }}/edit">Edit</a></td>
            <td>
                <form method="POST" action="{{ route('blogs.destroy', $blog->id) }}">
                    {{ csrf_field() }}
                    @method('delete')
                    <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {{ $blogs->links() }}
@endsection

@section('title')
    Blog Page
@endsection    