@extends('frontend.app')

@section('title','Zally-podcast-details')

@section('content')
    <!-- section 1 -->
    <section class="smooth--section pt-lg-5">
        <div class="container event-details-page-container">
            <div class="event-details-page-contents-container">
                <!-- tittle -->
                <div class="event-details-page-title text-dark">Episode 8: Career changing into cyber</div>
                <div class="event-details-page-subtitle">Cyber Sessions by CIISec</div>
                <!-- -events image -->
                <div class="event-page-image-section">
                    <img src="{{asset('frontend/images/blog-1.png')}}" alt="" srcset="">
                    <div class="event-page-image-btns">

                        <a href="#" class="common-btn live-btn">
                            <span>listen now</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M6.4082 11.1842V4.81567L11.1846 7.99996L6.4082 11.1842Z" stroke="#FAFAFA" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M1.10156 7.99999C1.10156 11.8104 4.19048 14.8993 8.00085 14.8993C11.8113 14.8993 14.9001 11.8104 14.9001 7.99999C14.9001 4.18962 11.8113 1.10071 8.00085 1.10071C4.19048 1.10071 1.10156 4.18962 1.10156 7.99999Z" stroke="#FAFAFA" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>

                        <div class="event-page-date-time">
                            <span class="event-time-line text-dark light-sky-blue">05 Sep 2024</span>
                            <span class="event-type text-dark light-sky-blue">podcast</span>
                        </div>

                    </div>
                </div>
                <!-- -events details page tab btns -->

                <!-- counters  -->

                <!-- tab contents -->



            </div>
        </div>
    </section>
    <!-- section 1 -->
@endsection
