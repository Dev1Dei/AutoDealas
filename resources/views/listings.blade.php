@extends('layout')
@section('content')

@if(count($listings) == 0)
<p> Listings not found </p>
@endif
@foreach($listings as $listing)
    <h2>
        <a href="/listings/{{$listing['id']}}">{{$listing['title']}}" </a>
    </h2>
    <p>
        {{$listing['description']}}
    </p>
@endforeach
@endsection