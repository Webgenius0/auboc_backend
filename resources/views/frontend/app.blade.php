<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0"
    />
    <title>@yield('title')</title>

    @include('frontend.partials.styles')

</head>

<body class="
    {{
        Request::routeIs('home') || Request::routeIs('for-business-home') ||
        Request::routeIs('why-zally') || Request::routeIs('how-it-works-business') ||
        Request::routeIs('for-business-form')
            ? 'body--pink'
            : (Request::routeIs('about', 'team', 'events', 'blog','contact','faqs','downloads','legal','media-center')
                ? 'body--purple'
                : (Request::routeIs('event-details-session','blog-update-details')
                    ? 'body--mild--purple'
                    : (Request::routeIs('blog-podcast-details')
                        ? 'light-sky-blue'
                        : (Request::routeIs('blog-news-details')
                            ? 'light--green'
                            : (Request::routeIs('event-details-flip')
                                ? 'body--black'
                                : 'body--mild--pink')
                          )
                      )
                  )
              )
    }}">

<!-- header area starts -->
<header >

    @include('frontend.partials.header')

</header>

<!-- header area starts -->

<!-- main area starts -->
<main>
   @yield('content')
</main>
<!-- main area starts -->

<!-- footer area starts -->
     @include('frontend.partials.footer')
<!-- footer area ends -->

@include('frontend.partials.scripts')

</body>
</html>

