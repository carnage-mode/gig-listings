@extends('layout')

@section('content')

@isset($listing)
    <a href="/listings/{{$listing['id']}}"><h2>{{$listing['title']}}</h2></a>
    <p>{{$listing['description']}}</p>
@else
    <p>Listing not found</p>
@endisset

@endsection
