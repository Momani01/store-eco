@extends('layout.master')

@section('title', 'contact me')

@section('content')
    <div class="container">
        <h1>{!! $page_name !!}</h1>
        <p>{{ $page_description }}</p>
    </div>
@endsection
