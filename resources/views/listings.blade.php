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
                    <img class="listingImage" src="test.jpg">
                </div>
                <div class="description">
                    <div class="up" title="Skelbimo iškelimo paslauga">
                        "20"
                    </div>
                    <h2 class="item-title"><a class="listingTitle" href="/listings/{{$listing['id']}}">{{$listing['title']}}"</a>
                    </h2>
                    
                    <div class="item-description">
                         <div class="primary">
                             {{$listing['description']}}
                         </div>
                    </div>
                </div>

            </div>
    
           
        
        
        
        
        </a>
    

    </article>



    <div class="listing">
    
   
    </div>
@endforeach
</body>
@endsection
