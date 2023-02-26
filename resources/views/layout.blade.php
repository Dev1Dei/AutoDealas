<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name"viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AutoDealas.lt</title>
    <link href="/css/main.css" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <div class="page-header"> 
            <div class="container">
                <div class="navbar">
                  <a class="header-logo" href="/" title="AutoDealas"> 
                     <img class="logo" src="{{asset('/assets/Images/AutoDealas.svg')}}">
                  </a>
                  <ul class="header-menu">
                    <li class="newSkelbimas">
                        <a>+ Naujas skelbimas</a>
                    </li>
                    <li class="announcement-bookmark-count">
                        <a href="/">
                            <span class="header-ico ico-bookmarks">
                                <img class="search" src="{{asset('/assets/Images/user.svg')}}">
                            </span>
                            <span class="header-label">Prisijungti</span>
                        </a>
                    </li>
                    <li class="announcement-bookmark-count">
                        <a href="/">
                            <span class="header-ico ico-bookmarks">
                                <img class="search" src="{{asset('/assets/Images/history.svg')}}">
                            </span>
                            <span class="header-label">Istorija</span>
                        </a>
                    </li>
                    <li class="announcement-bookmark-count">
                        <a href="/">
                            <span class="header-ico ico-bookmarks">
                                <img class="search" src="{{asset('/assets/Images/search.svg')}}">
                            </span>
                            <span class="header-label">Ieškoti</span>
                        </a>
                    </li>
                    <li class="announcement-bookmark-count">
                        <a href="/">
                            <span class="header-ico ico-bookmarks">
                                <img class="heart" src="{{asset('/assets/Images/heart.svg')}}">
                            </span>
                            <span class="header-label">Įsiminti</span>
                        </a>
                    </li>
                  </ul>
                </div>
            </div>
    <nav class="header-bosch-shadow">
            <div class="container leader-benefits-wrapper"> 
                <ul class="navigation-items">
                    <li class="active">
                        <a href="listings"> Skelbimai </a>
                    </li>
                    <li class="basic"> <a href="/"> Nauji auto </a></li>
                    
                  
                    <li class="basic"> <a href="/"> Straipsniai </a></li>
                </ul>

            </div>
        </nav>
    </div>
    
    {{-- VIEW OUTPUT --}}
    @yield('content')
</div>
</body>
</html>