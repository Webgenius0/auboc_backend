<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="tivo admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Tivo admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">

    @include('backend.partials.styles')

</head>
<body>
<!-- tap on top starts-->
<div class="tap-top"><i data-feather="chevrons-up"></i></div>
<!-- tap on tap ends-->
<!-- Loader starts-->
<div class="loader-wrapper">
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"> </div>
    <div class="dot"></div>
</div>
<!-- Loader ends-->
<!-- page-wrapper Start-->
<div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- error-404 start-->
    <div class="error-wrapper">
        <div class="container">
            <div class="svg-wrraper">
                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 500 500">
                    <style>
                        tspan { white-space:pre }
                        .shp0 { fill: #f5f5f5 }
                        .shp1 { fill: #ffffff }
                        .shp2 { fill: #263238 }
                        .shp3 { fill: #5c61f2 }
                        .shp4 { fill: #5c61f2;opacity: 0.5 }
                        .shp5 { fill: #ffffff;opacity: 0.2 }
                        .shp6 { fill: #ffffff;opacity: 0.4 }
                        .shp7 { opacity: 0.1 }
                        .shp8 { opacity: 0.3 }
                        .shp9 { fill: #f0f0f0 }
                    </style>
                    <g id="freepik--background-complete--inject-22">
                        <rect class="shp1" y="382.4" width="500" height="0.25"></rect>
                        <rect class="shp1" x="359" y="391.92" width="90.9" height="0.25"></rect>
                        <rect class="shp1" x="306.33" y="389.21" width="24.89" height="0.25"></rect>
                        <rect class="shp1" x="349.52" y="401.21" width="38.59" height="0.25"></rect>
                        <rect class="shp1" x="52.46" y="399.53" width="22.64" height="0.25"></rect>
                        <rect class="shp1" x="84" y="399.53" width="26.89" height="0.25"></rect>
                        <rect class="shp1" x="178.31" y="395.31" width="46.84" height="0.25"></rect>
                        <path class="shp1" d="M237,337.8H43.91a5.71,5.71,0,0,1-5.7-5.71V60.66A5.71,5.71,0,0,1,43.91,55H237a5.71,5.71,0,0,1,5.71,5.71V332.09A5.71,5.71,0,0,1,237,337.8ZM43.91,55.2a5.46,5.46,0,0,0-5.45,5.46V332.09a5.46,5.46,0,0,0,5.45,5.46H237a5.47,5.47,0,0,0,5.46-5.46V60.66A5.47,5.47,0,0,0,237,55.2Z"></path>
                        <path class="shp1" d="M453.31,337.8H260.21a5.72,5.72,0,0,1-5.71-5.71V60.66A5.72,5.72,0,0,1,260.21,55h193.1A5.71,5.71,0,0,1,459,60.66V332.09A5.71,5.71,0,0,1,453.31,337.8ZM260.21,55.2a5.47,5.47,0,0,0-5.46,5.46V332.09a5.47,5.47,0,0,0,5.46,5.46h193.1a5.47,5.47,0,0,0,5.46-5.46V60.66a5.47,5.47,0,0,0-5.46-5.46Z"></path>
                        <path class="shp0" d="M429.17,262.11a17.67,17.67,0,0,0-4.39.57,17.61,17.61,0,0,0-25.39-3.16,28.18,28.18,0,0,0-52.31,11.75,20,20,0,1,0,5.11,37.15,23.81,23.81,0,0,0,44,4.77A26.57,26.57,0,0,0,440,293.68a17.62,17.62,0,0,0-10.79-31.57Z"></path>
                        <path class="shp0" d="M72.67,156.32a9.24,9.24,0,0,0-12.16,4.77A9.24,9.24,0,1,0,53.12,178l16.93,7.39,7.39-16.93A9.23,9.23,0,0,0,72.67,156.32Z"></path>
                        <path class="shp0" d="M151.61,75.66a6.17,6.17,0,0,0-8.34-2.59,6.18,6.18,0,0,0-10.93,5.76l5.76,10.93L149,84A6.17,6.17,0,0,0,151.61,75.66Z"></path>
                        <path class="shp0" d="M403,50.84a6.17,6.17,0,0,0-8.34-2.58A6.18,6.18,0,1,0,383.7,54l5.76,10.92,10.92-5.75A6.19,6.19,0,0,0,403,50.84Z"></path>
                        <path class="shp1" d="M443,231.57a4.58,4.58,0,0,0-5.22-3.81,4.56,4.56,0,0,0-9,1.41l1.41,9,9-1.41A4.57,4.57,0,0,0,443,231.57Z"></path>
                        <path class="shp0" d="M350.53,154.26a3.73,3.73,0,0,0-4.68,2.45,3.74,3.74,0,0,0-2.23,7.14l7.14,2.23,2.23-7.14A3.74,3.74,0,0,0,350.53,154.26Z"></path>
                        <path class="shp0" d="M73.39,63a3.75,3.75,0,0,0-4.69,2.46,3.73,3.73,0,1,0-2.22,7.13l7.13,2.23,2.23-7.14A3.73,3.73,0,0,0,73.39,63Z"></path>
                        <path class="shp1" d="M184.91,229.92a24,24,0,0,0-21.66-23.86,41.39,41.39,0,0,0-71.4-7.37A21.12,21.12,0,0,0,59,221.19a31.91,31.91,0,1,0,44.05,46,33.83,33.83,0,0,0,59.85-13.36A24,24,0,0,0,184.91,229.92Z"></path>
                        <path class="shp9" d="M346.8,117.42a16.26,16.26,0,0,1,14.68-16.17,28,28,0,0,1,48.38-5,14.32,14.32,0,0,1,22.24,15.25,21.62,21.62,0,1,1-29.85,31.15,22.92,22.92,0,0,1-40.56-9A16.25,16.25,0,0,1,346.8,117.42Z"></path>
                    </g>
                    <g id="freepik--Shadow--inject-22">
                        <ellipse class="shp0" id="freepik--path--inject-22" cx="250" cy="416.24" rx="193.89" ry="11.32"></ellipse>
                    </g>
                    <g id="freepik--error-404--inject-22">
                        <path class="shp2" d="M136.11,390.75H81.78A4.83,4.83,0,0,1,77,385.92V363.63a4.84,4.84,0,0,1,1.14-3.11l61.4-73a4.84,4.84,0,0,1,3.7-1.72h23.53a4.83,4.83,0,0,1,4.83,4.83v68a4.83,4.83,0,0,0,4.83,4.83h6.21a4.83,4.83,0,0,1,4.83,4.83v17.59a4.83,4.83,0,0,1-4.83,4.83h-6.21a4.83,4.83,0,0,0-4.83,4.83v14a4.83,4.83,0,0,1-4.83,4.83H145.77a4.83,4.83,0,0,1-4.83-4.83v-14A4.83,4.83,0,0,0,136.11,390.75Zm4.83-30.63v-27.2a3.38,3.38,0,0,0-6-2.19l-23.11,27.2a3.38,3.38,0,0,0,2.57,5.57h23.12A3.38,3.38,0,0,0,140.94,360.12Z"></path>
                        <path class="shp2" d="M198.37,350.66q0-36,13-50.45t39.53-14.4q12.76,0,21,3.15a38.73,38.73,0,0,1,13.36,8.19,43.62,43.62,0,0,1,8.15,10.6,55.21,55.21,0,0,1,4.79,13,121,121,0,0,1,3.54,29.49q0,34.41-11.65,50.36t-40.09,16q-16,0-25.79-5.09A41.73,41.73,0,0,1,208,396.53q-4.58-7-7.12-19.1A131,131,0,0,1,198.37,350.66Zm34.84.08q0,24.15,4.27,33t12.37,8.85a13,13,0,0,0,9.27-3.76q3.93-3.75,5.78-11.86t1.85-25.26q0-25.17-4.27-33.84t-12.8-8.67q-8.72,0-12.59,8.84T233.21,350.74Z"></path>
                        <path class="shp2" d="M371.69,390.75H317.37a4.83,4.83,0,0,1-4.83-4.83V363.63a4.84,4.84,0,0,1,1.13-3.11l61.41-73a4.82,4.82,0,0,1,3.69-1.72h23.54a4.83,4.83,0,0,1,4.83,4.83v68A4.83,4.83,0,0,0,412,363.5h6.2a4.83,4.83,0,0,1,4.83,4.83v17.59a4.83,4.83,0,0,1-4.83,4.83H412a4.83,4.83,0,0,0-4.83,4.83v14a4.83,4.83,0,0,1-4.83,4.83h-21a4.83,4.83,0,0,1-4.83-4.83v-14A4.83,4.83,0,0,0,371.69,390.75Zm4.83-30.63v-27.2a3.38,3.38,0,0,0-5.95-2.19l-23.12,27.2A3.38,3.38,0,0,0,350,363.5h23.11A3.38,3.38,0,0,0,376.52,360.12Z"></path>
                        <path class="shp1" d="M157.82,298.88c-.93,2-1.91,3.8-2.86,5.66l-2.8,5.55-2.8,5.57c-.94,1.87-1.91,3.74-3.06,5.58a28.65,28.65,0,0,1,1.23-6.31,36.91,36.91,0,0,1,2.37-6,34.49,34.49,0,0,1,3.4-5.48A23.17,23.17,0,0,1,157.82,298.88Z"></path>
                        <path class="shp1" d="M161.38,303.58c-.87,1.73-1.77,3.36-2.65,5l-2.59,4.9-2.59,4.92c-.87,1.65-1.76,3.31-2.82,4.93a25.81,25.81,0,0,1,1.19-5.61,33.57,33.57,0,0,1,2.21-5.29,29.48,29.48,0,0,1,3.13-4.82A20.44,20.44,0,0,1,161.38,303.58Z"></path>
                        <path class="shp1" d="M151.66,296.91c-.77,1.8-1.59,3.49-2.39,5.19l-2.35,5.09-2.35,5.1c-.8,1.71-1.61,3.43-2.59,5.12a25.5,25.5,0,0,1,.93-5.72,32.18,32.18,0,0,1,2-5.45,31,31,0,0,1,2.89-5A21.29,21.29,0,0,1,151.66,296.91Z"></path>
                        <path class="shp1" d="M381,372.91a23.45,23.45,0,0,1,4.52,4.6A34.77,34.77,0,0,1,389,383a37.43,37.43,0,0,1,2.36,6,29.26,29.26,0,0,1,1.24,6.31c-1.16-1.84-2.12-3.71-3.07-5.58l-2.8-5.57-2.8-5.55C382.94,376.71,382,374.87,381,372.91Z"></path>
                        <path class="shp1" d="M377.48,377.61a20.88,20.88,0,0,1,4.11,4,29.34,29.34,0,0,1,3.13,4.83,31.79,31.79,0,0,1,2.21,5.29,25.25,25.25,0,0,1,1.2,5.61c-1.06-1.62-1.95-3.28-2.83-4.93l-2.59-4.92-2.59-4.9C379.24,381,378.34,379.34,377.48,377.61Z"></path>
                        <path class="shp1" d="M387.19,370.94a21.34,21.34,0,0,1,3.92,4.3,30.27,30.27,0,0,1,2.88,5,33.11,33.11,0,0,1,2,5.45,26.08,26.08,0,0,1,.93,5.72c-1-1.7-1.8-3.41-2.59-5.12l-2.35-5.11-2.35-5.08C388.79,374.43,388,372.74,387.19,370.94Z"></path>
                    </g>
                    <g id="freepik--Error--inject-22">
                        <path class="shp3" d="M299.12,401.62H312.4V405h-8.31v2.55h7.71v3.27h-7.71V414h8.55v3.63H299.12Z"></path>
                        <path class="shp3" d="M312.64,419.59H299.12a1.93,1.93,0,0,1-1.93-1.93v-16a1.92,1.92,0,0,1,1.93-1.93H312.4a1.92,1.92,0,0,1,1.93,1.93V405a1.93,1.93,0,0,0-.6,2.55v3.27a1.94,1.94,0,0,0,.84,3.17v3.63A1.93,1.93,0,0,1,312.64,419.59Zm-11.59-3.86h2.13a1.91,1.91,0,0,1-1-1.7v-3.17a1.94,1.94,0,0,0,0-3.27V405a1.92,1.92,0,0,1,.71-1.49h-1.82Z"></path>
                        <path class="shp3" d="M315.38,417.66v-16h8.26a12.11,12.11,0,0,1,3.51.39,3.71,3.71,0,0,1,2,1.46,4.52,4.52,0,0,1-1.39,6.47,5.85,5.85,0,0,1-1.74.64,5,5,0,0,1,1.29.59,4.77,4.77,0,0,1,.79.84,7.06,7.06,0,0,1,.7,1l2.4,4.65h-5.6l-2.65-4.9a3.8,3.8,0,0,0-.9-1.24,2.06,2.06,0,0,0-1.21-.37h-.44v6.51Zm5-9.54h2.09a8.25,8.25,0,0,0,1.31-.22,1.31,1.31,0,0,0,.81-.51,1.63,1.63,0,0,0-.18-2.12,3,3,0,0,0-1.85-.41h-2.18Z"></path>
                        <path class="shp3" d="M331.16,419.59h-5.6a1.94,1.94,0,0,1-1.7-1l-1.57-2.92v2a1.94,1.94,0,0,1-1.93,1.93h-5a1.93,1.93,0,0,1-1.93-1.93v-16a1.92,1.92,0,0,1,1.93-1.93h8.26a13.61,13.61,0,0,1,4.11.49,5.63,5.63,0,0,1,2.94,2.19,6.29,6.29,0,0,1,1.09,3.7,6.42,6.42,0,0,1-.83,3.28,6.11,6.11,0,0,1-1.3,1.56,7.56,7.56,0,0,1,.83,1.24l2.39,4.62a1.93,1.93,0,0,1-1.71,2.82Zm-4.45-3.86H328L327,413.9a3.51,3.51,0,0,0-.48-.68,5.64,5.64,0,0,0-.45-.51h0a3.78,3.78,0,0,0-.74-.3,2,2,0,0,1-.67-.39Zm-9.4,0h1.12v-4.58a1.93,1.93,0,0,1,.74-1.52,1.91,1.91,0,0,1-.74-1.51v-3.26a1.94,1.94,0,0,1,.51-1.31h-1.63Zm5.86-5.75a4.18,4.18,0,0,1,.93,1,2.15,2.15,0,0,1-.05-.51,2.12,2.12,0,0,1,.18-.71l-.09,0C323.76,409.88,323.44,409.94,323.17,410Zm2.23-6.35.23.17a3.33,3.33,0,0,1,1.18,2.66,3.4,3.4,0,0,1-.7,2.09,2.39,2.39,0,0,0,.61-.26,2.59,2.59,0,0,0,.91-.89,2.62,2.62,0,0,0,.3-1.33,2.5,2.5,0,0,0-.4-1.49,1.82,1.82,0,0,0-1-.74A6.48,6.48,0,0,0,325.4,403.63ZM323.34,406h0Z"></path>
                        <path class="shp3" d="M332.81,417.66v-16h8.26a12.14,12.14,0,0,1,3.52.39,3.69,3.69,0,0,1,2,1.46,4.52,4.52,0,0,1-1.39,6.47,5.85,5.85,0,0,1-1.74.64,5,5,0,0,1,1.29.59,4.72,4.72,0,0,1,.8.84,7.7,7.7,0,0,1,.69,1l2.4,4.65H343l-2.65-4.9a3.66,3.66,0,0,0-.9-1.24,2,2,0,0,0-1.21-.37h-.44v6.51Zm5-9.54h2.09a8.08,8.08,0,0,0,1.31-.22,1.31,1.31,0,0,0,.81-.51,1.45,1.45,0,0,0,.31-.93,1.48,1.48,0,0,0-.49-1.19,3,3,0,0,0-1.85-.41h-2.18Z"></path>
                        <path class="shp3" d="M348.59,419.59H343a1.94,1.94,0,0,1-1.7-1l-1.57-2.92v2a1.93,1.93,0,0,1-1.93,1.93h-5a1.94,1.94,0,0,1-1.93-1.93v-16a1.93,1.93,0,0,1,1.93-1.93h8.26a13.57,13.57,0,0,1,4.11.49,5.61,5.61,0,0,1,2.95,2.19,6.82,6.82,0,0,1,.25,7,6.28,6.28,0,0,1-1.29,1.56,8.28,8.28,0,0,1,.83,1.24l2.38,4.62a1.93,1.93,0,0,1-1.71,2.82Zm-4.45-3.86h1.29l-.95-1.83a5,5,0,0,0-.49-.68,3.28,3.28,0,0,0-.45-.51h0a3.78,3.78,0,0,0-.74-.3,2,2,0,0,1-.66-.39Zm-9.4,0h1.12v-4.58a1.93,1.93,0,0,1,.74-1.52,1.91,1.91,0,0,1-.74-1.51v-3.26a1.91,1.91,0,0,1,.52-1.31h-1.64ZM340.6,410a4.18,4.18,0,0,1,.93,1,1.73,1.73,0,0,1,0-.51,1.9,1.9,0,0,1,.17-.71l-.08,0C341.19,409.88,340.87,409.94,340.6,410Zm2.24-6.35.22.17a3.33,3.33,0,0,1,1.18,2.66,3.4,3.4,0,0,1-.7,2.09,2.52,2.52,0,0,0,.62-.26,2.56,2.56,0,0,0,.9-.89,2.62,2.62,0,0,0,.3-1.33,2.5,2.5,0,0,0-.4-1.49,1.82,1.82,0,0,0-1-.74A6.51,6.51,0,0,0,342.84,403.63ZM340.77,406h0Z"></path>
                        <path class="shp3" d="M349.17,409.65a7.6,7.6,0,0,1,8.29-8.31,8.41,8.41,0,0,1,6.17,2.15,8.14,8.14,0,0,1,2.16,6,9.9,9.9,0,0,1-.94,4.61,6.78,6.78,0,0,1-2.74,2.8,9,9,0,0,1-4.46,1,10.36,10.36,0,0,1-4.49-.86,6.71,6.71,0,0,1-2.88-2.74A9.06,9.06,0,0,1,349.17,409.65Zm5,0a5.39,5.39,0,0,0,.9,3.49,3.42,3.42,0,0,0,4.93,0,5.93,5.93,0,0,0,.88-3.73,5,5,0,0,0-.92-3.31,3.14,3.14,0,0,0-2.48-1,3,3,0,0,0-2.4,1.06A5.37,5.37,0,0,0,354.13,409.67Z"></path>
                        <path class="shp3" d="M357.65,419.86a12.2,12.2,0,0,1-5.33-1.06,8.57,8.57,0,0,1-3.7-3.49,10.89,10.89,0,0,1-1.38-5.66A10.64,10.64,0,0,1,365,402.13a10,10,0,0,1,2.74,7.39,11.76,11.76,0,0,1-1.17,5.51,8.62,8.62,0,0,1-3.5,3.58A10.92,10.92,0,0,1,357.65,419.86ZM359,403.37a4.84,4.84,0,0,1,2.38,1.5,6.67,6.67,0,0,1,1.39,4.58c0,2.29-.43,3.91-1.32,5a4.79,4.79,0,0,1-2.16,1.46,5.68,5.68,0,0,0,1.89-.63,4.85,4.85,0,0,0,2-2,8,8,0,0,0,.73-3.71,6.26,6.26,0,0,0-1.6-4.66A5.63,5.63,0,0,0,359,403.37Zm-3.09,0a5.51,5.51,0,0,0-3.18,1.52,6.38,6.38,0,0,0-1.62,4.75,7.19,7.19,0,0,0,.84,3.7,4.77,4.77,0,0,0,2.06,2,6.34,6.34,0,0,0,1.61.51,4.87,4.87,0,0,1-2.05-1.43,8.95,8.95,0,0,1,0-9.5A4.84,4.84,0,0,1,355.9,403.38Zm1.54,3.65a1.09,1.09,0,0,0-.94.38,3.71,3.71,0,0,0-.44,2.26,3.64,3.64,0,0,0,.44,2.24,1.14,1.14,0,0,0,1,.38c.7,0,.9-.23,1-.35s.42-.56.42-2.49a3.16,3.16,0,0,0-.44-2A1.22,1.22,0,0,0,357.44,407Z"></path>
                        <path class="shp3" d="M368.53,417.66v-16h8.26a12.11,12.11,0,0,1,3.51.39,3.71,3.71,0,0,1,2,1.46,4.52,4.52,0,0,1-1.39,6.47,5.85,5.85,0,0,1-1.74.64,5,5,0,0,1,1.29.59,4.77,4.77,0,0,1,.79.84,7.06,7.06,0,0,1,.7,1l2.4,4.65h-5.6l-2.65-4.9a3.8,3.8,0,0,0-.9-1.24,2.06,2.06,0,0,0-1.21-.37h-.44v6.51Zm5-9.54h2.09a8.25,8.25,0,0,0,1.31-.22,1.31,1.31,0,0,0,.81-.51,1.63,1.63,0,0,0-.18-2.12,3,3,0,0,0-1.85-.41h-2.18Z"></path>
                        <path class="shp3" d="M384.31,419.59h-5.6a1.94,1.94,0,0,1-1.7-1l-1.57-2.92v2a1.94,1.94,0,0,1-1.93,1.93h-5a1.93,1.93,0,0,1-1.93-1.93v-16a1.92,1.92,0,0,1,1.93-1.93h8.26a13.61,13.61,0,0,1,4.11.49,5.63,5.63,0,0,1,2.94,2.19,6.29,6.29,0,0,1,1.1,3.7,6.4,6.4,0,0,1-.84,3.28,6.11,6.11,0,0,1-1.3,1.56,7.56,7.56,0,0,1,.83,1.24l2.39,4.62a1.93,1.93,0,0,1-1.71,2.82Zm-4.45-3.86h1.28l-.94-1.83a5,5,0,0,0-.49-.68,5.64,5.64,0,0,0-.45-.51h0a3.78,3.78,0,0,0-.74-.3,2,2,0,0,1-.67-.39Zm-9.4,0h1.12v-4.58a1.93,1.93,0,0,1,.74-1.52,1.91,1.91,0,0,1-.74-1.51v-3.26a1.9,1.9,0,0,1,.51-1.31h-1.63Zm5.86-5.75a4.18,4.18,0,0,1,.93,1,1.73,1.73,0,0,1,0-.51,1.9,1.9,0,0,1,.17-.71l-.09,0C376.91,409.88,376.59,409.94,376.32,410Zm2.24-6.35.22.17a3.33,3.33,0,0,1,1.18,2.66,3.4,3.4,0,0,1-.7,2.09,2.58,2.58,0,0,0,1.51-1.15,3,3,0,0,0-.09-2.82,1.82,1.82,0,0,0-1-.74A6.51,6.51,0,0,0,378.56,403.63Zm-2.09,3.23Zm0-.84h0Z"></path>
                        <path class="shp1" d="M299.12,401.62H312.4V405h-8.31v2.55h7.71v3.27h-7.71V414h8.55v3.63H299.12Z"></path>
                        <path class="shp1" d="M315.38,417.66v-16h8.26a12.11,12.11,0,0,1,3.51.39,3.71,3.71,0,0,1,2,1.46,4.52,4.52,0,0,1-1.39,6.47,5.85,5.85,0,0,1-1.74.64,5,5,0,0,1,1.29.59,4.77,4.77,0,0,1,.79.84,7.06,7.06,0,0,1,.7,1l2.4,4.65h-5.6l-2.65-4.9a3.8,3.8,0,0,0-.9-1.24,2.06,2.06,0,0,0-1.21-.37h-.44v6.51Zm5-9.54h2.09a8.25,8.25,0,0,0,1.31-.22,1.31,1.31,0,0,0,.81-.51,1.63,1.63,0,0,0-.18-2.12,3,3,0,0,0-1.85-.41h-2.18Z"></path>
                        <path class="shp1" d="M332.81,417.66v-16h8.26a12.14,12.14,0,0,1,3.52.39,3.69,3.69,0,0,1,2,1.46,4.52,4.52,0,0,1-1.39,6.47,5.85,5.85,0,0,1-1.74.64,5,5,0,0,1,1.29.59,4.72,4.72,0,0,1,.8.84,7.7,7.7,0,0,1,.69,1l2.4,4.65H343l-2.65-4.9a3.66,3.66,0,0,0-.9-1.24,2,2,0,0,0-1.21-.37h-.44v6.51Zm5-9.54h2.09a8.08,8.08,0,0,0,1.31-.22,1.31,1.31,0,0,0,.81-.51,1.45,1.45,0,0,0,.31-.93,1.48,1.48,0,0,0-.49-1.19,3,3,0,0,0-1.85-.41h-2.18Z"></path>
                        <path class="shp1" d="M349.17,409.65a7.6,7.6,0,0,1,8.29-8.31,8.41,8.41,0,0,1,6.17,2.15,8.14,8.14,0,0,1,2.16,6,9.9,9.9,0,0,1-.94,4.61,6.78,6.78,0,0,1-2.74,2.8,9,9,0,0,1-4.46,1,10.36,10.36,0,0,1-4.49-.86,6.71,6.71,0,0,1-2.88-2.74A9.06,9.06,0,0,1,349.17,409.65Zm5,0a5.39,5.39,0,0,0,.9,3.49,3.42,3.42,0,0,0,4.93,0,5.93,5.93,0,0,0,.88-3.73,5,5,0,0,0-.92-3.31,3.14,3.14,0,0,0-2.48-1,3,3,0,0,0-2.4,1.06A5.37,5.37,0,0,0,354.13,409.67Z"></path>
                        <path class="shp1" d="M368.53,417.66v-16h8.26a12.11,12.11,0,0,1,3.51.39,3.71,3.71,0,0,1,2,1.46,4.52,4.52,0,0,1-1.39,6.47,5.85,5.85,0,0,1-1.74.64,5,5,0,0,1,1.29.59,4.77,4.77,0,0,1,.79.84,7.06,7.06,0,0,1,.7,1l2.4,4.65h-5.6l-2.65-4.9a3.8,3.8,0,0,0-.9-1.24,2.06,2.06,0,0,0-1.21-.37h-.44v6.51Zm5-9.54h2.09a8.25,8.25,0,0,0,1.31-.22,1.31,1.31,0,0,0,.81-.51,1.63,1.63,0,0,0-.18-2.12,3,3,0,0,0-1.85-.41h-2.18Z"></path>
                    </g>
                    <g id="freepik--Character--inject-22">
                        <path class="shp2" d="M426.5,156.28a40.77,40.77,0,0,0-13-1.91A34.67,34.67,0,0,0,401,156.78a19.19,19.19,0,0,0-4.67,2.64c-.14.12-.3.23-.41.34s-.22.19-.4.38-.65.67-1,1a22.46,22.46,0,0,0-1.77,2.29,25,25,0,0,0-4.14,11,20.27,20.27,0,0,0,.07,5.62,16.45,16.45,0,0,0,.61,2.58,17.86,17.86,0,0,0,1,2.46A49.68,49.68,0,0,0,394,191c1.53,2.18,3.3,4.56,5,7.47a33.07,33.07,0,0,1,4.17,10.46,26.55,26.55,0,0,1,.44,6.32,26.24,26.24,0,0,1-1.09,6.12,29,29,0,0,1-5.7,10.37,29.56,29.56,0,0,1-4.25,4.05,30.69,30.69,0,0,1-4.78,3.09,35,35,0,0,1-10.36,3.43,43.78,43.78,0,0,1-10.23.48,53.55,53.55,0,0,1-9.65-1.58,77.91,77.91,0,0,1-8.75-2.83c-5.56-2.13-10.6-4.57-15.41-6.64a69.59,69.59,0,0,0-13.9-4.68,33,33,0,0,0-6.59-.66,36.5,36.5,0,0,0-6.69.64,51.42,51.42,0,0,0-13.36,4.72c-8.74,4.41-16.82,11.13-25.18,18.17h0a7.5,7.5,0,0,1-9.76-11.39c8.25-7.19,16.94-14.9,27.72-20.66a66.64,66.64,0,0,1,17.44-6.5,51.93,51.93,0,0,1,9.63-1.11,48.65,48.65,0,0,1,9.77.77,85.08,85.08,0,0,1,17.35,5.37c5.3,2.17,10.19,4.4,14.91,6.1a62.27,62.27,0,0,0,6.92,2.1,35.37,35.37,0,0,0,6.58.94,21.38,21.38,0,0,0,11.31-2.19,13.86,13.86,0,0,0,2.08-1.42,12.33,12.33,0,0,0,1.66-1.65,11.13,11.13,0,0,0,2.08-4,7.86,7.86,0,0,0,.3-2,7.65,7.65,0,0,0-.18-1.86,15.63,15.63,0,0,0-2.08-4.65c-1.11-1.8-2.63-3.82-4.3-6.09a66,66,0,0,1-5.21-8,37.15,37.15,0,0,1-2.24-5.08,35.8,35.8,0,0,1-1.4-5.38,39.08,39.08,0,0,1-.41-10.77,44,44,0,0,1,6.9-19.63,41.85,41.85,0,0,1,3.17-4.28c.59-.68,1.19-1.35,1.82-2,.29-.31.71-.7,1.08-1.05s.76-.67,1.14-1a38.29,38.29,0,0,1,9.44-5.68,54.12,54.12,0,0,1,19.54-4.18,60.83,60.83,0,0,1,19.4,2.53,10,10,0,0,1-5.69,19.13Z"></path>
                        <path class="shp3" d="M426.26,157.09a40.82,40.82,0,0,0-16.72-2,33.88,33.88,0,0,0-8,1.72,20,20,0,0,0-5.92,3.22l-.57.49A9.64,9.64,0,0,1,382,146.31a38,38,0,0,1,12.17-8,53.86,53.86,0,0,1,12.73-3.55,61.83,61.83,0,0,1,25.68,1.64,10.83,10.83,0,1,1-5.72,20.9l-.53-.16Z"></path>
                        <path class="shp2" d="M239.8,280.85l3.71,5.78c-3.73,1.95-7.63,1.66-11.61,1.66C230.21,280.47,239.8,280.85,239.8,280.85Z"></path>
                        <path class="shp3" d="M217.19,250c4.73,13.61,22.27,31.66,22.27,31.66s-7.4,1.48-5.39,6.59H244.4l22.24-4.19a3,3,0,0,0,2.28-3.41l-8.21-27.54Z"></path>
                        <path class="shp2" d="M303.46,257.79l2,8.11c3.92-1.55,7.23-2.61,8.93-6.25C312.42,254.59,303.46,257.79,303.46,257.79Z"></path>
                        <path class="shp3" d="M285.9,216.18c7,12.54,21.76,43.12,21.76,43.12s7.58.32,6.57,5.65l-29.39,7.26A3.15,3.15,0,0,1,281.2,271l-21-17.78C271.66,246.22,285,227.85,285.9,216.18Z"></path>
                        <path class="shp7" d="M272.28,242.49a54.33,54.33,0,0,1-12,10.77l6,4.89C272.75,252.36,274.59,246.16,272.28,242.49Z"></path>
                        <path class="shp3" d="M264.8,179.77c8.16,1.39,42.05-3.21,44.57-3.33.27-1.87,1.13-6.5,3.16-5.68s3.07,4.32,2.66,6c4.81-.86,11.13,9,3.94,17-10.53,11.82-49,13.63-49,13.63S249.26,181.73,264.8,179.77Z"></path>
                        <path class="shp7" d="M267.34,195.5a11.12,11.12,0,0,0-4.82.53,85.51,85.51,0,0,0,7.62,11.36s7.76-.37,17.26-1.83C282.17,201.82,273.88,196.55,267.34,195.5Z"></path>
                        <path class="shp3" d="M315.19,176.73c4.86-2,8.26-3,9.38-1.33s-.38,5.18-5.08,6.09C315.18,178.79,315.19,176.73,315.19,176.73Z"></path>
                        <path class="shp3" d="M318.35,180.89c5.12-.17,8.55.13,9,2s-2.13,4.59-6.71,3.8C317.63,182.77,318.35,180.89,318.35,180.89Z"></path>
                        <path class="shp3" d="M321.58,186.12c3.29,1.53,5.31,2.87,4.71,4.48s-3.45,2.85-6,.75C320.26,187.33,321.58,186.12,321.58,186.12Z"></path>
                        <path class="shp3" d="M202.15,205.34c-3.76,7.37-27.72,31.77-29.33,33.73-1.66-.91-5.88-3-6.43-.87s1.62,5.05,3.18,5.7c-3.56,3.34.53,14.29,11.3,13.35,15.77-1.38,40.22-31.11,40.22-31.11S213,194.05,202.15,205.34Z"></path>
                        <path class="shp7" d="M213.23,216.78a11.4,11.4,0,0,1,3.31-3.55,84.67,84.67,0,0,1,4.55,12.91s-4.93,6-11.79,12.73C209.43,232.45,210.16,222.65,213.23,216.78Z"></path>
                        <path class="shp3" d="M169.57,243.9c-4.53,2.68-7.34,4.83-6.67,6.72s4.38,2.8,7.92-.42C171.23,245.13,169.57,243.9,169.57,243.9Z"></path>
                        <path class="shp3" d="M171,248.93c-3.2,4-5,6.92-3.74,8.41s4.94,1,7.05-3.12C173,249.47,171,248.93,171,248.93Z"></path>
                        <path class="shp3" d="M173.28,254.64c-.75,3.55-.88,6,.78,6.46s4.34-1.06,4.16-4.34C175,254.31,173.28,254.64,173.28,254.64Z"></path>
                        <path class="shp7" d="M260.73,253.21l0-.06-13.3-1c-.27,5.73,6.4,9.36,15.36,7.82Z"></path>
                        <path class="shp3" d="M263.19,184.37l-27.44,11.75-27.43,11.75s2.92,35.46,11.92,47.61,26.38,8.41,41.73,1.83,30-16.57,27.46-31.47S263.19,184.37,263.19,184.37Z"></path>
                        <path class="shp5" d="M251.25,191l-14.94,6.4-14.93,6.4c.22-2.91-5.88,24.16,4.52,38.59,6.78,9.4,19.44,6.82,30.57,2.05s21.72-12.15,19.59-23.54C272.8,203.43,249,189.18,251.25,191Z"></path>
                        <path class="shp5" d="M246.5,195.22l-10,4.26-9.95,4.27c.07-2.1-3.38,17.37,4,28.09,4.83,7,13.34,5.44,20.76,2.26s14.42-8.27,12.69-16.59C261.41,204.76,244.92,193.83,246.5,195.22Z"></path>
                        <ellipse class="shp5" cx="174.74" cy="248.93" rx="3.69" ry="4.77" transform="translate(-80.11 82.95) rotate(-21.86)"></ellipse>
                        <path class="shp5" d="M319.48,185.84c.19,2.63-1.3,4.88-3.33,5s-3.84-1.86-4-4.48,1.3-4.88,3.33-5S319.29,183.22,319.48,185.84Z"></path>
                        <path class="shp2" d="M175.69,120c-39.87-28.22-101.13-10.91-105.94-.25-5.11,11.35,50.37,41.92,64,71.46C153.65,154.24,175.69,120,175.69,120Z"></path>
                        <path class="shp4" d="M161,131.57c-31.56-22-76.06-12.1-78.94-4.6-3.07,8,40.28,32.35,52.39,54.25C146.8,155.37,161,131.57,161,131.57Z"></path>
                        <path class="shp2" d="M164.93,126.23c-8.94.6-16.51,3.6-23.18,10.64a18.31,18.31,0,0,1,17.64,3.65Z"></path>
                        <path class="shp2" d="M223.4,99.55c19.16-60.46,87.4-60.7,101-51.55,10.33,7-33.66,34.93-21.87,75.25C262.85,109.67,223.4,99.55,223.4,99.55Z"></path>
                        <path class="shp4" d="M241.43,98.24c16-35,53.32-49,70.75-45.87,16.48,2.94-32.76,41.37-22.7,75.2C265.7,111.57,241.43,98.24,241.43,98.24Z"></path>
                        <path class="shp2" d="M240.34,92.84a26.56,26.56,0,0,1,20.33-2.07,14.65,14.65,0,0,0-10.7,9.68Z"></path>
                        <path class="shp2" d="M241.17,90a21.2,21.2,0,0,1,15.26-5.7,11.69,11.69,0,0,0-6.3,9.63Z"></path>
                        <path class="shp3" d="M314.33,126.34c10.08,23.52-26.28,52-76.9,73.69S141.11,228.4,131,204.87s14.24-80.11,64.86-101.8S304.25,102.81,314.33,126.34Z"></path>
                        <path class="shp7" d="M294.35,128.58c9.34,21.81-19.14,46.81-60,64.31s-78.59,20.87-87.93-.95,13.24-60.57,54.08-78.06S285,106.76,294.35,128.58Z"></path>
                        <path class="shp2" d="M212.17,160.37c-.88-2.06,1.81-4.42,5.66-6.08s7.43-2,8.31.09-.47,7.54-4.33,9.2S213.05,162.43,212.17,160.37Z"></path>
                        <path class="shp8" d="M220.34,178.74c-.59-1.4,2.24-3.43,6.1-5.08s7.28-2.3,7.87-.91-1.33,5.53-5.18,7.18S220.94,180.13,220.34,178.74Z"></path>
                        <path class="shp6" d="M148.91,161.77c5.51-15.78,18.1-27.49,30.94-30.42,21.65-4.94,28,22.17,17.54,40.86-11.68,20.92-37.48,17.73-40,8.16C153.76,186.74,139,190.07,148.91,161.77Z"></path>
                        <path class="shp1" d="M197.4,144s-1.47,19.21-11.61,26-25.12-1.53-25.12-1.53,1.47-19.2,11.61-26S197.4,144,197.4,144Z"></path>
                        <path class="shp2" d="M160.67,168.37a43.31,43.31,0,0,1,2-13.88,31.08,31.08,0,0,1,2.86-6.58,20.46,20.46,0,0,1,4.71-5.65,15.72,15.72,0,0,1,6.74-3.21,20.18,20.18,0,0,1,7.3-.2,31.45,31.45,0,0,1,13.1,5.1,47.32,47.32,0,0,0-13.3-3,20.63,20.63,0,0,0-6.5.6,13.34,13.34,0,0,0-5.62,2.82,18.76,18.76,0,0,0-4.23,4.87l-.46.69-.41.73c-.26.49-.55,1-.8,1.47-.47,1-1,2-1.39,3.07A80.81,80.81,0,0,0,160.67,168.37Z"></path>
                        <path class="shp1" d="M224.45,132.36s14.92,12.19,26.79,9.5,16.22-19.24,16.22-19.24-14.91-12.19-26.79-9.5S224.45,132.36,224.45,132.36Z"></path>
                        <path class="shp2" d="M267.46,122.62a81.64,81.64,0,0,0-12.29-6.17c-1-.42-2.13-.74-3.19-1.1-.53-.17-1.08-.29-1.62-.44l-.8-.21-.82-.14a19,19,0,0,0-6.44-.3,13.52,13.52,0,0,0-5.92,2.13,20.35,20.35,0,0,0-4.91,4.29,46.93,46.93,0,0,0-7,11.68,31.35,31.35,0,0,1,5.34-13,20.29,20.29,0,0,1,5.18-5.15,15.71,15.71,0,0,1,7-2.66,20.44,20.44,0,0,1,7.33.49A31,31,0,0,1,256,114.5,43.44,43.44,0,0,1,267.46,122.62Z"></path>
                        <circle class="shp2" cx="185.31" cy="156" r="10.83" transform="translate(-31.62 48.22) rotate(-13.67)"></circle>
                        <path class="shp1" d="M176.61,156.65a4.56,4.56,0,1,0,2.39-6A4.56,4.56,0,0,0,176.61,156.65Z"></path>
                        <circle class="shp2" cx="241.1" cy="132.09" r="10.83" transform="translate(28.89 306.87) rotate(-68.19)"></circle>
                        <path class="shp1" d="M232.4,132.74a4.56,4.56,0,1,0,2.39-6A4.55,4.55,0,0,0,232.4,132.74Z"></path>
                        <path class="shp1" d="M186.9,156.67a1.82,1.82,0,1,0,.95-2.4A1.83,1.83,0,0,0,186.9,156.67Z"></path>
                        <path class="shp1" d="M242.69,132.76a1.82,1.82,0,1,0,1-2.39A1.81,1.81,0,0,0,242.69,132.76Z"></path>
                        <path class="shp2" d="M236.88,166.87c-.55.35-1.1.71-1.67,1s-1.2.57-1.83.8a12.69,12.69,0,0,1-4,.71,10.53,10.53,0,0,1-4.07-.88,9.54,9.54,0,0,1-3.43-2.55l1.63-.7a9.71,9.71,0,0,1-.52,4.25,10.52,10.52,0,0,1-2.17,3.55,12.42,12.42,0,0,1-3.27,2.4,19.39,19.39,0,0,1-1.84.77c-.64.19-1.28.35-1.91.5.57-.34,1.14-.65,1.7-1s1.08-.67,1.58-1.07a14.32,14.32,0,0,0,2.65-2.56,10.24,10.24,0,0,0,1.62-3.17,9.51,9.51,0,0,0,.36-1.73,7.25,7.25,0,0,0,0-1.68.92.92,0,0,1,.78-1,.94.94,0,0,1,.85.34,8.46,8.46,0,0,0,1.21,1.17,11,11,0,0,0,1.5.92,10.45,10.45,0,0,0,3.41,1,13.91,13.91,0,0,0,3.69-.16c.63-.08,1.24-.28,1.87-.4S236.25,167.05,236.88,166.87Z"></path>
                        <path class="shp2" d="M222.61,166.35a.93.93,0,0,1-.84-.55L219,159.29a.91.91,0,0,1,.48-1.19.9.9,0,0,1,1.2.48l2.79,6.5a.91.91,0,0,1-.84,1.27Z"></path>
                        <path class="shp3" d="M131.72,180.23c-8.11,3.81-14,11.91-15.47,21.5,7.16-8.74,15.51-6.17,15.51-6.17Z"></path>
                        <path class="shp3" d="M132.55,203.86A21.62,21.62,0,0,0,134,224c-.08-8.6,6.06-11.16,6.06-11.16Z"></path>
                        <path class="shp3" d="M132.08,190.66c-8.17,6.1-12.85,16.47-12.36,27.51,6-11.39,15.9-10.42,15.9-10.42Z"></path>
                        <path class="shp3" d="M296,109.84c8.35-3.24,18.25-1.88,26.24,3.63-11.27-.84-15.17,7-15.17,7Z"></path>
                        <path class="shp3" d="M309.86,126.34c6.73-1.09,14.07-.24,18.57,4.14a23.44,23.44,0,0,0-15.1,5.5Z"></path>
                        <path class="shp3" d="M307.61,125.36c6.11,3,11.57,8,12.67,14.19a23.41,23.41,0,0,0-15.48-4.34Z"></path>
                        <path class="shp3" d="M303.32,117.3c10.05-1.71,20.78,2.06,28.44,10-12.38-3.51-18.51,4.32-18.51,4.32Z"></path>
                        <path class="shp3" d="M190,107.53c-.38-5.66,2.35-10.53,9.11-15.56-1.42,8.08,4.43,10.1,4.43,10.1Z"></path>
                        <path class="shp3" d="M197.38,104.38c1.34-6.58,8.08-13,17.89-17.13-7,7.54-1.36,12.22-1.36,12.22Z"></path>
                        <path class="shp2" d="M141.59,222.55a.49.49,0,0,1-.25-.08.45.45,0,0,1-.12-.63c26.51-39.62,74.75-55.25,75.23-55.4a.47.47,0,0,1,.58.3.46.46,0,0,1-.3.57c-.48.15-48.42,15.69-74.76,55A.43.43,0,0,1,141.59,222.55Z"></path>
                        <path class="shp2" d="M148.89,247.51a.4.4,0,0,1-.15,0,.46.46,0,0,1-.29-.58c18.3-53.45,66.2-76.61,66.68-76.83a.45.45,0,0,1,.6.21.45.45,0,0,1-.21.61c-.48.23-48,23.23-66.2,76.31A.47.47,0,0,1,148.89,247.51Z"></path>
                        <path class="shp2" d="M227.8,162.53a.43.43,0,0,1-.39-.23.44.44,0,0,1,.16-.62c.44-.26,44.51-25.33,91.65-18.19a.44.44,0,0,1,.38.51.48.48,0,0,1-.52.39c-46.81-7.1-90.61,17.82-91,18.08A.46.46,0,0,1,227.8,162.53Z"></path>
                        <path class="shp2" d="M322.38,165.89a.32.32,0,0,1-.14,0c-55.8-18-90.41-2-90.76-1.82a.45.45,0,1,1-.39-.82c.34-.17,35.25-16.36,91.43,1.77a.47.47,0,0,1,.29.58A.45.45,0,0,1,322.38,165.89Z"></path>
                    </g>
                    <g id="freepik--ball-of-yarn--inject-22">
                        <circle class="shp3" cx="202.29" cy="394.69" r="22.97" transform="translate(-224.74 274.91) rotate(-47.2)"></circle>
                        <path class="shp3" d="M266.75,418.62c-11.38,0-15.4-4.31-19.28-8.47a33.43,33.43,0,0,0-4.21-4c-5.82-4.44-15-6.47-19.63-4.34a1,1,0,0,1-.81-1.75c5.3-2.43,15.19-.34,21.61,4.55a36.26,36.26,0,0,1,4.46,4.25c3.76,4.05,7.32,7.87,17.86,7.87a14.25,14.25,0,0,0,12.74-7.16,11.52,11.52,0,0,0,.15-11.64c-2.39-3.85-7.31-5.81-13.87-5.5a1,1,0,1,1-.09-1.93c7.29-.33,12.83,1.94,15.6,6.41a13.48,13.48,0,0,1-.1,13.6A16.15,16.15,0,0,1,266.75,418.62Z"></path>
                        <path class="shp3" d="M212,412.2a51,51,0,0,1-32.91-12.48,1,1,0,0,1,1.28-1.44c8,7.14,22.28,13.9,38.21,11.5a1,1,0,1,1,.29,1.91A46.26,46.26,0,0,1,212,412.2Z"></path>
                        <path class="shp3" d="M209.48,415.06c-11.79,0-21.86-4.64-30.65-14.1a1,1,0,0,1,0-1.36,1,1,0,0,1,1.37,0c9.73,10.48,21.1,14.77,34.75,13.15a1,1,0,1,1,.23,1.91A47.29,47.29,0,0,1,209.48,415.06Z"></path>
                        <path class="shp3" d="M192.06,416.22a1,1,0,0,1-1-.9c-.84-11.28,3.05-29.24,13.61-43.93a1,1,0,0,1,1.57,1.12C196,386.82,192.21,404.25,193,415.18a1,1,0,0,1-.89,1Z"></path>
                        <path class="shp3" d="M182.47,407.27a1,1,0,0,1-.52-.15,1,1,0,0,1-.3-1.33c3.36-5.31,15.84-23.12,35.4-29.37a1,1,0,0,1,1.21.62,1,1,0,0,1-.62,1.21c-18.94,6.06-31.09,23.4-34.36,28.57A1,1,0,0,1,182.47,407.27Z"></path>
                        <path class="shp3" d="M182.47,407.27a.92.92,0,0,1-.36-.07,1,1,0,0,1-.54-1.25,55.26,55.26,0,0,1,33-31.36,1,1,0,0,1,.64,1.82,53.33,53.33,0,0,0-31.88,30.26A1,1,0,0,1,182.47,407.27Z"></path>
                        <path class="shp3" d="M189.21,414.54a1,1,0,0,1-1-.86c-2.42-20.84,4.42-32.76,12.18-42.53a1,1,0,0,1,1.35-.16,1,1,0,0,1,.16,1.36c-7.5,9.45-14.11,21-11.77,41.11a1,1,0,0,1-.85,1.07Z"></path>
                        <path class="shp3" d="M186.53,412.36a1,1,0,0,1-.93-.7c-3-11.05-.77-28.33,11.47-40.18a1,1,0,0,1,1.36,0,1,1,0,0,1,0,1.37c-11.15,10.79-13.95,27.42-10.95,38.27a1,1,0,0,1-.67,1.19Z"></path>
                        <path class="shp3" d="M225,398.86a1,1,0,0,1-.56-.18c-14.3-10.29-31.74-14.08-42.67-13.26a1,1,0,0,1-.14-1.93c11.28-.83,29.24,3.05,43.94,13.62a1,1,0,0,1-.57,1.75Z"></path>
                        <path class="shp3" d="M225.2,396.19a.88.88,0,0,1-.39-.08c-12.82-5.69-32.22-6.44-45.12-1.76a1,1,0,1,1-.66-1.81c13.32-4.84,33.33-4.06,46.56,1.81a1,1,0,0,1,.49,1.27A1,1,0,0,1,225.2,396.19Z"></path>
                        <path class="shp3" d="M225.16,393.49a1,1,0,0,1-.71-.31c-9.51-10.34-21.83-14-40-11.91a1,1,0,1,1-.23-1.91c18.56-2.16,31.78,1.82,41.61,12.52a1,1,0,0,1-.71,1.61Z"></path>
                        <path class="shp3" d="M224.44,389.57a1,1,0,0,1-.68-.29c-11.89-11.86-28.66-13.57-36.25-11a1,1,0,0,1-.62-1.83c8.05-2.73,25.77-1,38.23,11.46a1,1,0,0,1,0,1.36A1,1,0,0,1,224.44,389.57Z"></path>
                        <path class="shp3" d="M220,410.31a.84.84,0,0,1-.27,0c-23-6.81-39.91-22.27-40.07-22.43a1,1,0,0,1,1.3-1.42c.17.16,16.77,15.32,39.32,22a1,1,0,0,1-.28,1.89Z"></path>
                        <path class="shp3" d="M220.46,409.72a1,1,0,0,1-.38-.08,255.59,255.59,0,0,1-39.84-22.25,1,1,0,1,1,1.11-1.57,253.23,253.23,0,0,0,39.49,22.05,1,1,0,0,1-.38,1.85Z"></path>
                        <path class="shp3" d="M221.31,408.53a.91.91,0,0,1-.45-.11c-19.67-10.58-40.29-20.85-40.49-20.95a1,1,0,0,1,.85-1.73c.21.1,20.86,10.39,40.55,21a1,1,0,0,1-.46,1.81Z"></path>
                        <path class="shp3" d="M222,407.47a.92.92,0,0,1-.59-.2c-17.86-14-40.31-20.5-40.54-20.56a1,1,0,0,1,.53-1.86c.23.07,23,6.65,41.2,20.9a1,1,0,0,1,.16,1.35A.94.94,0,0,1,222,407.47Z"></path>
                        <path class="shp3" d="M223.84,403.59a1,1,0,0,1-.61-.21c-16.36-13.44-42-16.61-42.22-16.64a1,1,0,0,1,.23-1.92c.26,0,26.41,3.27,43.22,17.07a1,1,0,0,1,.13,1.35A1,1,0,0,1,223.84,403.59Z"></path>
                        <path class="shp3" d="M193.69,417a1,1,0,0,1-.56-1.74c18.23-13.19,28.64-31.49,28.74-31.67a1,1,0,1,1,1.68.95c-.1.18-10.72,18.85-29.29,32.28A1,1,0,0,1,193.69,417Z"></path>
                        <g class="shp8">
                            <path d="M212,412.2a51,51,0,0,1-32.91-12.48,1,1,0,0,1,1.28-1.44c8,7.14,22.28,13.9,38.21,11.5a1,1,0,1,1,.29,1.91A46.26,46.26,0,0,1,212,412.2Z"></path>
                            <path d="M209.48,415.06c-11.79,0-21.86-4.64-30.65-14.1a1,1,0,0,1,0-1.36,1,1,0,0,1,1.37,0c9.73,10.48,21.1,14.77,34.75,13.15a1,1,0,1,1,.23,1.91A47.29,47.29,0,0,1,209.48,415.06Z"></path>
                            <path d="M192.06,416.22a1,1,0,0,1-1-.9c-.84-11.28,3.05-29.24,13.61-43.93a1,1,0,0,1,1.57,1.12C196,386.82,192.21,404.25,193,415.18a1,1,0,0,1-.89,1Z"></path>
                            <path d="M182.47,407.27a1,1,0,0,1-.52-.15,1,1,0,0,1-.3-1.33c3.36-5.31,15.84-23.12,35.4-29.37a1,1,0,0,1,1.21.62,1,1,0,0,1-.62,1.21c-18.94,6.06-31.09,23.4-34.36,28.57A1,1,0,0,1,182.47,407.27Z"></path>
                            <path d="M182.47,407.27a.92.92,0,0,1-.36-.07,1,1,0,0,1-.54-1.25,55.26,55.26,0,0,1,33-31.36,1,1,0,0,1,.64,1.82,53.33,53.33,0,0,0-31.88,30.26A1,1,0,0,1,182.47,407.27Z"></path>
                            <path d="M189.21,414.54a1,1,0,0,1-1-.86c-2.42-20.84,4.42-32.76,12.18-42.53a1,1,0,0,1,1.35-.16,1,1,0,0,1,.16,1.36c-7.5,9.45-14.11,21-11.77,41.11a1,1,0,0,1-.85,1.07Z"></path>
                            <path d="M186.53,412.36a1,1,0,0,1-.93-.7c-3-11.05-.77-28.33,11.47-40.18a1,1,0,0,1,1.36,0,1,1,0,0,1,0,1.37c-11.15,10.79-13.95,27.42-10.95,38.27a1,1,0,0,1-.67,1.19Z"></path>
                            <path d="M225,398.86a1,1,0,0,1-.56-.18c-14.3-10.29-31.74-14.08-42.67-13.26a1,1,0,0,1-.14-1.93c11.28-.83,29.24,3.05,43.94,13.62a1,1,0,0,1-.57,1.75Z"></path>
                            <path d="M225.2,396.19a.88.88,0,0,1-.39-.08c-12.82-5.69-32.22-6.44-45.12-1.76a1,1,0,1,1-.66-1.81c13.32-4.84,33.33-4.06,46.56,1.81a1,1,0,0,1,.49,1.27A1,1,0,0,1,225.2,396.19Z"></path>
                            <path d="M225.16,393.49a1,1,0,0,1-.71-.31c-9.51-10.34-21.83-14-40-11.91a1,1,0,1,1-.23-1.91c18.56-2.16,31.78,1.82,41.61,12.52a1,1,0,0,1-.71,1.61Z"></path>
                            <path d="M224.44,389.57a1,1,0,0,1-.68-.29c-11.89-11.86-28.66-13.57-36.25-11a1,1,0,0,1-.62-1.83c8.05-2.73,25.77-1,38.23,11.46a1,1,0,0,1,0,1.36A1,1,0,0,1,224.44,389.57Z"></path>
                            <path d="M220,410.31a.84.84,0,0,1-.27,0c-23-6.81-39.91-22.27-40.07-22.43a1,1,0,0,1,1.3-1.42c.17.16,16.77,15.32,39.32,22a1,1,0,0,1-.28,1.89Z"></path>
                            <path d="M220.46,409.72a1,1,0,0,1-.38-.08,255.59,255.59,0,0,1-39.84-22.25,1,1,0,1,1,1.11-1.57,253.23,253.23,0,0,0,39.49,22.05,1,1,0,0,1-.38,1.85Z"></path>
                            <path d="M221.31,408.53a.91.91,0,0,1-.45-.11c-19.67-10.58-40.29-20.85-40.49-20.95a1,1,0,0,1,.85-1.73c.21.1,20.86,10.39,40.55,21a1,1,0,0,1-.46,1.81Z"></path>
                            <path d="M222,407.47a.92.92,0,0,1-.59-.2c-17.86-14-40.31-20.5-40.54-20.56a1,1,0,0,1,.53-1.86c.23.07,23,6.65,41.2,20.9a1,1,0,0,1,.16,1.35A.94.94,0,0,1,222,407.47Z"></path>
                            <path d="M223.84,403.59a1,1,0,0,1-.61-.21c-16.36-13.44-42-16.61-42.22-16.64a1,1,0,0,1,.23-1.92c.26,0,26.41,3.27,43.22,17.07a1,1,0,0,1,.13,1.35A1,1,0,0,1,223.84,403.59Z"></path>
                            <path d="M193.69,417a1,1,0,0,1-.56-1.74c18.23-13.19,28.64-31.49,28.74-31.67a1,1,0,1,1,1.68.95c-.1.18-10.72,18.85-29.29,32.28A1,1,0,0,1,193.69,417Z"></path>
                        </g>
                    </g>
                </svg>
            </div>
            <div class="col-md-8 offset-md-2">
                <h3>Page Not Found</h3>
                <p class="sub-content">The page you are attempting to reach is currently not available. This may be because the page does not exist or has been moved.</p><a class="btn btn-primary" href="{{route('dashboard')}}">BACK TO HOME PAGE</a>
            </div>
        </div>
    </div>
    <!-- error-404 end-->
</div>

{{--@include('backend.partials.scripts')--}}
<!-- latest jquery-->
<script src="{{asset('backend/js/jquery-3.6.0.min.js')}}"></script>
<!-- Bootstrap js-->
<script src="{{asset('backend/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
<!-- feather icon js-->
<script src="{{asset('backend/js/icons/feather-icon/feather.min.js')}}"></script>
<script src="{{asset('backend/js/icons/feather-icon/feather-icon.js')}}"></script>
<!-- scrollbar js-->
<!-- Sidebar jquery-->
<script src="{{asset('backend/js/config.js')}}"></script>
<!-- Template js-->
<script src="{{asset('backend/js/script.js')}}"></script>
<!-- login js-->
</body>
</html>
