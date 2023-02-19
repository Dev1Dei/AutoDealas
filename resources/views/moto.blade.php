@extends('layout')
@section('content')
<head>
    <link href="/css/main.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<div class="main-wrapper">
<section id="content" class="container"> 
    <div class="overlay" id="overlay"></div>
        <div class="search-panel panel-car">
            <div class="panel-overlay"></div>
            <div class="categories categories-list-container">
                <div class="buttons">
                    <a class="button" href="/" >
                        <div class="category-button cat-btn " id="category-group-1" title="Automobiliai" data-target="caricon">
                            <div class="icons">
                                <span class="icon car">
                                    
                                        {{--<img class="caricon" src="{{asset('/assets/Images/car_icon_active.svg')}}">
                                        --}}
                                    <img class="caricon" src="{{asset('/assets/Images/car_icon_inactive.svg')}}">
                                        
                                </span>
                            </div>
                            <div class="title">Auto</div>
                        </div>
                    </a>
                    <div class="button active">
                        <div class="category-button cat-btn" id="category-group-2" title="Motociklai">
                            <div class="icons">
                                <span class="icon moto">
                                    <img class="motoricon" src="{{asset('/assets/Images/motorbike_icon_active.svg')}}">
                                </span>
                            </div>
                            <div class="title">Motociklai</div>
                        </div>
                    </div>
                    <div class="button">
                        <div class="category-button cat-btn" id="category-group-2" title="Ratai">
                            <div class="icons">
                                <span class="icon ratai">
                                    <img >
                                </span>
                            </div>
                            <div class="title">Ratai</div>
                        </div>
                    </div>
                    <div class="button">
                        <div class="category-button cat-btn" id="category-group-2" title="Dalys">
                            <div class="icons">
                                <span class="icon dalys">
                                    <img >
                                </span>
                            </div>
                            <div class="title">Dalys</div>
                        </div>
                    </div>
                    <div class="button">
                        <div class="category-button cat-btn" id="category-group-2" title="Žemės ūkio">
                            <div class="icons">
                                <span class="icon ukis">
                                    <img >
                                </span>
                            </div>
                            <div class="title">Ž. ūkio</div>
                        </div>
                    </div>
                    <div class="button">
                        <div class="category-button cat-btn" id="category-group-2" title="Sunkusis transportas">
                            <div class="icons">
                                <span class="icon str">
                                    <img >
                                </span>
                            </div>
                            <div class="title">Sunkusis tr.</div>
                        </div>
                    </div>
                    <div class="button">
                        <div class="category-button cat-btn" id="category-group-2" title="Priekabos">
                            <div class="icons">
                                <span class="icon priekabos">
                                    <img >
                                </span>
                            </div>
                            <div class="title">Priekabos</div>
                        </div>
                    </div>
                    <div class="button">
                        <div class="category-button cat-btn" id="category-group-2" title="Nuoma">
                            <div class="icons">
                                <span class="icon nuoma">
                                    <img >
                                </span>
                            </div>
                            <div class="title">Nuoma</div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>

    </div>



</section>
</div>
<script src="{{ asset('js/main.js')}}"></script>
</body>
@endsection