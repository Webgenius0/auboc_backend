@extends('frontend.app')

@section('title','Zally-blog-news-details')

@section('content')
    <!-- section 1 -->
    <section class="smooth--section pt-lg-5">
        <div class="container">
            <div class="event-details-page-container">
                <div class="event-details-page-contents-container">
                    <!-- tittle -->
                    <div class="event-details-page-title text-dark">GM Business Growth Hub Announces the Selection of 25 Business Leaders
                        for ASCEND Scale Up Programme</div>
                    <div class="event-details-page-subtitle">GM Business Growth Hub</div>
                    <!-- -events image -->
                    <div class="event-page-image-section">
                        <img src="{{asset('frontend/images/blog-2.png')}}" alt="" srcset="">
                        <div class="event-page-image-btns">

                            <a href="#" class="common-btn live-btn">
                                <span>visit website</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                                    <g clip-path="url(#clip0_4114_6327)">
                                        <path d="M7 4.5H4.5C2.567 4.5 1 6.067 1 8V8C1 9.933 2.567 11.5 4.5 11.5H7" stroke="#FAFAFA"
                                              stroke-width="1.14" stroke-linecap="round" />
                                        <path d="M10 4.5H12.5C14.433 4.5 16 6.067 16 8V8C16 9.933 14.433 11.5 12.5 11.5H10" stroke="#FAFAFA"
                                              stroke-width="1.14" stroke-linecap="round" />
                                        <path d="M6 8H11" stroke="#FAFAFA" stroke-width="1.14" stroke-linecap="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_4114_6327">
                                            <rect width="16" height="16" fill="white" transform="translate(0.5)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>

                            <div class="event-page-date-time">
                                <span class="event-time-line text-dark light--green">22 Sep 2024</span>
                                <span class="event-type text-dark light--green">in the news</span>
                            </div>

                        </div>
                    </div>
                    <!-- -events details page tab btns -->

                    <!-- counters  -->

                    <!-- tab contents -->



                </div>
            </div>

        </div>
    </section>
    <!-- section 1 -->
@endsection
