<div class="phone-header-section  d-block d-md-none">
    <div class="phone-header-container">

        <div class="phone-header-menu">
            <div class="phone-menu-wrapper">

                <div class="menu-button">
                    <ul>
                        <li class="menu-title menu-pink">for business <span><i class="fa-solid fa-angle-down"></i></span> </li>
                    </ul>
                </div>

                <div class="phone-menu">
                    <ul>
                        <li class="menu-pink"><a href="#">solutions</a></li>
                        <li class="menu-pink"><a href="why-zally.html">why zally</a></li>
                        <li class="menu-pink"><a href="how-it-works-business.html">how it works</a></li>
                        <li class="menu-title"><a href="for-humans-home.html">for humans</a></li>
                        <li class=""><a href="get-the-app.html">get the app</a></li>
                        <li class=""><a href="how-it-works.html">how it works</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="phone-header-logo">
            <img src="{{asset('frontend/images/Zally logo.png')}}" alt="" />
        </div>
    </div>
</div>

<!-- content -->


<div class="header--content--wrapper">
    <div class="header--left">
        @if (request()->routeIs('for-business-home') || request()->routeIs('why-zally') || request()->routeIs('how-it-works-business') || request()->routeIs('for-business-form'))

            <a href="{{ route('for-business-home') }}" class="bi-common-route transition-link">for business</a>
            <a href="{{ route('for-humans-home') }}" class="bi-common-route active--type--1 transition-link">for humans</a>

        @elseif (request()->routeIs('for-humans-home') || request()->routeIs('get-the-app') || request()->routeIs('how-it-works') || request()->routeIs('for-humans-form'))

            <a href="{{ route('for-business-home') }}" class="bi-common-route transition-link active--type--2">for business</a>
            <a href="{{ route('for-humans-home') }}" class="bi-common-route transition-link">for humans</a>

        @elseif(!request()->routeIs('for-business-home','for-humans-home','get-the-app','how-it-works','how-it-works-business','why-zally','for-business-form','for-humans-form'))

            <a href="{{ route('for-business-home') }}" class="bi-common-route active--type--2">for business</a>
            <a href="{{ route('for-humans-home') }}" class="bi-common-route active--type--1 ">for humans</a>

        @endif
    </div>

    <div class="header--right">

        @if(!request()->routeIs('for-business-home','how-it-works-business','why-zally'))
            <a href="{{route('get-the-app')}}"
               class="{{ Request::routeIs('get-the-app')
                ? 'bi-common-route active transition-link'
                : (Request::routeIs('event-details-flip') ? 'bi-common-route text-white' : 'bi-common-route') }}">
                get the app
            </a>
        @endif

        @if(request()->routeIs('home','for-business-home','why-zally','how-it-works-business','get-the-app'))
            <a href="{{route('why-zally')}}" class="{{ Request::routeIs('why-zally') ? 'bi-common-route active transition-link' : 'bi-common-route' }}">why zally</a>
        @elseif(request()->routeIs('how-it-works'))
            <a href="{{route('about')}}" class="{{ Request::routeIs('about') ? 'bi-common-route active transition-link' : 'bi-common-route' }}">why zally</a>
        @endif

        @if(request()->routeIs('home','for-business-home','how-it-works-business'))
            <a href="{{route('how-it-works-business')}}"
               class="{{ Request::routeIs('how-it-works-business')
                ? 'bi-common-route active transition-link'
                : (Request::routeIs('event-details-flip') ? 'bi-common-route text-white' : 'bi-common-route') }}">
                how it works
            </a>
        @else
            <a href="{{route('how-it-works')}}"
               class="{{ Request::routeIs('how-it-works-business') || Request::routeIs('how-it-works')
                ? 'bi-common-route active transition-link'
                : (Request::routeIs('event-details-flip') ? 'bi-common-route text-white' : 'bi-common-route') }}">
                how it works
            </a>
        @endif

        <a href="{{route('home')}}" class="route-logo  d-none d-md-block">
            <img src="{{asset('frontend/images/Zally logo.png')}}" alt="" srcset="">
        </a>

    </div>
</div>
