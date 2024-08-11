@extends('layout')

@section('content')

@include('partials._hero')
@include('partials._search')

<h1 class="text-center text-2xl font-bold">{{$heading}}</h1>
<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
@unless (count($listings) == 0)
@foreach ($listings as $listing)
    <div class="bg-gray-50 border border-gray-200 rounded p-6">
        <div class="flex">
            <img class="hidden w-48 mr-6 md:block" src="{{ asset('images/no-image.png') }}" alt="" />
            <div>
                <h2 class="text-2xl"><a href="listings/{{$listing->id}}">{{$listing->title}}</a></h2>
                <div class="text-xl font-bold mb-4">{{$listing->company}}</div>
                <!-- <p>{{$listing->description}}</p> -->
                <div class="text-lg mt-4">
                    <i class="fa-solid fa-location-dot"></i>
                    {{$listing->location}}
                </div>
            </div>
        </div>
    </div>
@endforeach
@else
    <p>No listings found</p>
@endunless

</div>

@endsection
