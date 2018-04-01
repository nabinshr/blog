@extends('layout.app')

@section('content')
    Blog Title: {{ $blog->title }}
    Blog Description: {{ $blog->body }}
@endsection