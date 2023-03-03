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
                </div>
            </div>
            <div class="search-form">
                <div id="quick-search-form-container" class="search-form-inner">
                    <div class="padding">
                    <div class="quick-search-form-container form-inputs-container">
                        <form id="quick-search-form">
                            <div class="offertype-selection"> 
                                <div class="form-heading heading-with-checkbox">
                                    <h1> Automobiliai </h1>
                                    <a class="adds-count" data-ads-count="10392" id="mainAdsCount">(10392)</a>
                                </div>
                                <div class="group-condition" id="groupCondition">
                                    <input type="checkbox" checked="checked" value="Naudotas" class="checkbox-condition" id="f_Naudotas">
                                    <label for="f_Naudotas"> Naudoti </label>
                                    <input type="checkbox" checked="checked" value="Naujas" class="checkbox-condition" id="f_Naudotas">
                                    <label for="f_Naudotas"> Nauji </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="left search-field-input-f_1">
                                    <div class="label">Markė</div>
                                    <select class="form-input" id="f_1"  onchange="enableSecondSelect()" placeholder="-------">
                                        <div class="hidden-inputs">
                                        </div>
                                        <div class="title">--------</div>
                                        <div class="input-text"> </div>
                                        <div class="values">
                                            <option class="value simple show">
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
                                    <select class="form-input" id="f_model_14" tabindex="3" value title name="f_model_14[0]" placeholder="-------">
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
                            <div class="row">
                                <div class="left search-field-input-f_215">
                                    <div class="label"> Kaina</div>
                                    <div class="row">
                                        <div class="left">
                                            <select id="f_215" name="f_215" class="select-input">
                                                <option value default>Nuo</option>
                                                <option value="150">150</option>
                                                <option value="300">300</option>
                                                <option value="500">500</option>
                                                <option value="1000">1000</option>
                                                <option value="1500">1500</option>
                                                <option value="2000">2000</option>
                                                <option value="2500">2500</option>
                                                <option value="3000">3000</option>
                                                <option value="3500">3500</option>
                                                <option value="4000">4000</option>
                                                <option value="4500">4500</option>
                                                <option value="5000">5000</option>
                                                <option value="6000">6000</option>
                                                <option value="7000">7000</option>
                                                <option value="8000">8000</option>
                                                <option value="9000">9000</option>
                                                <option value="10000">10000</option>
                                                <option value="12500">12500</option>
                                                <option value="15000">15000</option>
                                                <option value="17500">17500</option>
                                                <option value="20000">20000</option>
                                                <option value="25000">25000</option>
                                                <option value="30000">30000</option>
                                                <option value="45000">45000</option>
                                                <option value="60000">60000</option>
                                                <option value="70000">70000</option>
                                                <option value="80000">80000</option>
                                                <option value="90000">90000</option>
                                                <option value="100000">100000</option>
                                            </select>
                                        </div>
                                    <div class="right">
                                        <select id="f_216" name="f_216" class="select-input">
                                            <option value default>Iki</option>
                                                <option value="150">150</option>
                                                <option value="300">300</option>
                                                <option value="500">500</option>
                                                <option value="1000">1000</option>
                                                <option value="1500">1500</option>
                                                <option value="2000">2000</option>
                                                <option value="2500">2500</option>
                                                <option value="3000">3000</option>
                                                <option value="3500">3500</option>
                                                <option value="4000">4000</option>
                                                <option value="4500">4500</option>
                                                <option value="5000">5000</option>
                                                <option value="6000">6000</option>
                                                <option value="7000">7000</option>
                                                <option value="8000">8000</option>
                                                <option value="9000">9000</option>
                                                <option value="10000">10000</option>
                                                <option value="12500">12500</option>
                                                <option value="15000">15000</option>
                                                <option value="17500">17500</option>
                                                <option value="20000">20000</option>
                                                <option value="25000">25000</option>
                                                <option value="30000">30000</option>
                                                <option value="45000">45000</option>
                                                <option value="60000">60000</option>
                                                <option value="70000">70000</option>
                                                <option value="80000">80000</option>
                                                <option value="90000">90000</option>
                                                <option value="100000">100000</option>
                                            </select>
                                        </div>
                                    </div>
                            </div>
                            <div class="right search-field-input-f_41">
                                <div class="label">Metai</div>
                                <div class="row">
                                    <div class="left">
                                        <select id="f_41" name="f_41" class="select-input">
                                                <option value default>Nuo</option>
                                                <option value="2022">2022</option>
                                                <option value="2021">2021</option>
                                                <option value="2020">2020</option>
                                                <option value="2019">2019</option>
                                                <option value="2018">2018</option>
                                                <option value="2017">2017</option>
                                                <option value="2016">2016</option>
                                                <option value="2015">2015</option>
                                                <option value="2014">2014</option>
                                                <option value="2013">2013</option>
                                                <option value="2012">2012</option>
                                                <option value="2011">2011</option>
                                                <option value="2010">2010</option>
                                                <option value="2009">2009</option>
                                                <option value="2008">2008</option>
                                                <option value="2007">2007</option>
                                                <option value="2006">2006</option>
                                                <option value="2005">2005</option>
                                                <option value="2004">2004</option>
                                                <option value="2003">2003</option>
                                                <option value="2002">2002</option>
                                                <option value="2001">2001</option>
                                                <option value="2000">2000</option>
                                                <option value="1999">1999</option>
                                                <option value="1998">1998</option>
                                                <option value="1997">1997</option>
                                                <option value="1996">1996</option>
                                                <option value="1995">1995</option>
                                                <option value="1994">1994</option>
                                                <option value="1993">1993</option>
                                                <option value="1992">1992</option>
                                                <option value="1991">1991</option>
                                                <option value="1990">1990</option>
                                                <option value="1989">1989</option>
                                                <option value="1988">1988</option>
                                                <option value="1987">1987</option>
                                                <option value="1986">1986</option>
                                                <option value="1985">1985</option>
                                                <option value="1980">1980</option>
                                                <option value="1975">1975</option>
                                                <option value="1970">1970</option>
                                                <option value="1965">1965</option>
                                                <option value="1960">1960</option>
                                                <option value="1950">1950</option>
                                                <option value="1940">1940</option>
                                                <option value="1930">1930</option>
                                                <option value="1925">1925</option>
                                        </select>
                                    </div>
                                    <div class="right">
                                        <select id="f_42" name="f_42" class="select-input">
                                            <option value default>Iki</option>
                                            <option value="2022">2022</option>
                                            <option value="2021">2021</option>
                                            <option value="2020">2020</option>
                                            <option value="2019">2019</option>
                                            <option value="2018">2018</option>
                                            <option value="2017">2017</option>
                                            <option value="2016">2016</option>
                                            <option value="2015">2015</option>
                                            <option value="2014">2014</option>
                                            <option value="2013">2013</option>
                                            <option value="2012">2012</option>
                                            <option value="2011">2011</option>
                                            <option value="2010">2010</option>
                                            <option value="2009">2009</option>
                                            <option value="2008">2008</option>
                                            <option value="2007">2007</option>
                                            <option value="2006">2006</option>
                                            <option value="2005">2005</option>
                                            <option value="2004">2004</option>
                                            <option value="2003">2003</option>
                                            <option value="2002">2002</option>
                                            <option value="2001">2001</option>
                                            <option value="2000">2000</option>
                                            <option value="1999">1999</option>
                                            <option value="1998">1998</option>
                                            <option value="1997">1997</option>
                                            <option value="1996">1996</option>
                                            <option value="1995">1995</option>
                                            <option value="1994">1994</option>
                                            <option value="1993">1993</option>
                                            <option value="1992">1992</option>
                                            <option value="1991">1991</option>
                                            <option value="1990">1990</option>
                                            <option value="1989">1989</option>
                                            <option value="1988">1988</option>
                                            <option value="1987">1987</option>
                                            <option value="1986">1986</option>
                                            <option value="1985">1985</option>
                                            <option value="1980">1980</option>
                                            <option value="1975">1975</option>
                                            <option value="1970">1970</option>
                                            <option value="1965">1965</option>
                                            <option value="1960">1960</option>
                                            <option value="1950">1950</option>
                                            <option value="1940">1940</option>
                                            <option value="1930">1930</option>
                                            <option value="1925">1925</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="left search-field-input-f_3">
                                <div class="label">Kėbulo tipas</div>
                                <div class="form-input form-multiple" id="f_3">
                                    <div class="title">---------</div>
                                    <div class="values-container" style="display: none;">

                                    </div>
                                </div>
                            </div>
                            <div class="right search-field-input-f_2">
                                <div class="label">Kuro tipas</div>
                                <div class="form-input form-multiple" id="f_2">
                                    <div class="title">---------</div>
                                    <div class="values-container" style="display: none;">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="submit-button">
                                <a href="/" class="extended-search">Detali paieška</a>
                                <div class="submit-button-container" id="submit-button-container">
                                <button type="submit">
                                    <span class="icon icon-search">
                                        Ieškoti
                                    </span>
                        </div>
                        </form>
                    </div>
            </div>
                </div>
        </div>

    </div>



</section>
</div>
<script src="{{ asset('js/main.js')}}"></script>
{{--<script>
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
    
</script>--}}

</body>
@endsection