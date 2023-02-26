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
                    <a class="button active" href="/" >
                        <div class="category-button cat-btn " id="category-group-1" title="Automobiliai" data-target="caricon">
                            <div class="icons">
                                <span class="icon car">
                                    
                                        <img class="caricon" src="{{asset('/assets/Images/car_icon_active.svg')}}">
                                
                                        {{--<img class="caricon" src="{{asset('/assets/Images/car_icon_inactive.svg')}}">
                                        --}}
                                </span>
                            </div>
                            <div class="title">Auto</div>
                        </div>
                    </a>
                    <a class="button" href="moto">
                        <div class="category-button cat-btn" id="category-group-2" title="Motociklai">
                            <div class="icons">
                                <span class="icon moto">
                                    <img class="motoricon" src="{{asset('/assets/Images/motorbike_icon_inactive.svg')}}">
                                </span>
                            </div>
                            <div class="title">Motociklai</div>
                        </div>
                    </a>
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
            <div class="search-form">
                <div id="quick-search-form-container" class="search-form-inner">
                    <div class="quick-search-form-container form-inputs-container">
                        <form id="quick-search-form">
                            <div class="offertype-selection"> 
                                <div class="form-heading heading-with-checkbox">
                                    <h1> Automobiliai </h1>
                                    <a class="adds-count" data-ads-count="10392" id="mainAdsCount">(10392)</a>
                                </div>
                                <div class="group-condition" id="groupCondition">
                                    <input type="checkbox" checked="checked" value="Naudotas" class="checkbox-condition" name="f_434[]" id="f_Naudotas">
                                    <label for="f_Naudotas"> Naudoti </label>
                                    <input type="checkbox" checked="checked" value="Naujas" class="checkbox-condition" name="f_434[]" id="f_Naudotas">
                                    <label for="f_Naudotas"> Nauji </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="left search-field-input-f_1">
                                    <div class="label">Markė</div>
                                    <select class="form-input" id="f_1" onchange="enableSecondSelect()" onchange="updateModelDropdown()" tabindex="2" value title name="f_1[0]" placeholder="-------">
                                        <div class="hidden-inputs">
                                        </div>
                                        <div class="title">--------</div>
                                        <div class="input-text"> </div>
                                        <div class="values">
                                            <option class="value simple show" value="" data-value data-title="Visos markės" data-search="Visos markės">
                                                <div v class="value-title">Visos markės</div>
                                                <div  class="value-records-count"> --- </div>
                                                <div class="cl"></div>
                                            </option>
                                            @foreach ($brands as $brand)
                                                {{--@if($brand['records'] > 0) --}}
                                                         <option id="brand" class="value simple show" style="display: block;">
                                                            <div class="value-title"> {{$brand['title']}} </div>
                                                            {{--<div class="value-records-count"> {{$brand['records']}} </div> --}}
                                                            <div class="cl"></div>
                                               {{-- @endif --}}
                                                </option>
                                                @endforeach
                                           
                                        </div>
                                    </select>
                                    
                                </div>
                                <div class="right search-field-input-f_1">
                                    <div class="label">Modelis</div>
                                    <select class="form-input" id="f_model_14" tabindex="3" disabled value title name="f_model_14[0]" placeholder="-------">
                                        <div class="hidden-inputs">
                                        </div>
                                        <div class="title">--------</div>
                                        <div class="input-text"> </div>
                                        <div class="values">
                                            <option class="value simple show" id="default" data-value data-title="Visi modeliai" data-search="Visi modeliai">
                                                <div class="value-title">Visi modeliai</div>
                                                <div class="value-records-count"> --- </div>
                                                <div class="cl"></div>
                                            </option>
                                            @foreach ($models as $model)
                                                <option class="value simple show" style="display: block;">
                                                    <div class="value-title">{{ $model['model'] }}</div>
                                                    <div class="value-records-count">{{ $model['records'] }}</div>
                                                    <div class="cl"></div>
                                                </option>
                                            @endforeach
                                        </div>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
        </div>

    </div>



</section>
</div>
<script src="{{ asset('js/main.js')}}"></script>
<script>
    function enableSecondSelect() {
    var firstSelect = document.getElementById("f_1");
    var secondSelect = document.getElementById("f_model_14");
    var defaultOption = document.getElementById("default");
    var selectedBrand = document.getElementById("brand");

    console.log('veikia');
    if(firstSelect.value !== ""){
      console.log('leisti');
      console.log(selectedBrand);

      
        secondSelect.disabled = false;


    } else {
        secondSelect.disabled = true;
        secondSelect.value = '-----';

        console.log('neleisti');
    }
    }

    window.addEventListener('load'), function() {
    enableSecondSelect();
    }
    
</script>

</body>
@endsection