@extends('layout')
@section('content')
<head>
<link href="/css/header.css" rel="stylesheet">
</head>
<body>
@if(count($listings) == 0)
<p> Listings not found </p>
@endif
@foreach($listings as $listing)

    <article class="list-item"> 
            <div class="right">
                <div class="image">
                    <div class="hide badge viewed-badge" data-badge="Žiūrėjote"> </div>
                    <div class="badge vin-badge" data-badge title="Nurodytas automobilio VIN numeris"></div>
                    <img class="listingImage" src="{{asset('/assets/Images/test.jpg')}}">
                </div>
                <div class="description">
                    <div class="up" title="Skelbimo iškelimo paslauga">
                        20
                        <img class="starIcon" src="{{asset('/assets/Images/star.svg')}}">
                    </div>
                    <h2 class="item-title"><a class="listingTitle" href="/listings/{{$listing['id']}}">Audi A4{{--{{$listing['title']}}"--}}</a>
                    </h2>
                    
                    <div class="item-description">
                         <div class="primary">
                            1.8 l, Dyzelinas, 2013 m, Mechaninė, 96 kW
                             {{--{{$listing['engine']}}
                             //{{$listing['fuelType']}}
                             //{{$listing['Year']}}
                             //{{$listing['transmition']}}
                            --}}
                         </div>
                         <div class="secondary">
                            217 000km., Visureigis, Telšiai
                            {{--
                                {{$listing['mileage']}}
                                {{$listing['Type']}}
                                {{$listing['city']}}
                            --}}
                         </div>
                         <div class="item-price">
                            2 000 €
                         </div>
                    </div>
                </div>

            </div>
    
    

    </article>
@endforeach
</body>
@endsection
