@extends('layout.master')

@section('title', 'Countries')

@section('content')
    <a href="/posts">Home</a><br><br>
    <h2>Cr</h2>
    @foreach ($Countries as $country)
        <li>{{ $country }}</li>
    @endforeach
@endsection
