@extends('frontend.app')

@section('title','Zally-for-business')

@section('content')
    <!-- section 1 -->
    <section class="smooth--section">
        <div class="container">
            <div class="bi-common-container">
                <div class="smooth--section--content">
                    <div class="bi-common-large-title">are you human?</div>
                    <div class="bi-common-large-subtitle">
                        and more important, are you the right human?
                    </div>
                    <div class="bi-common-btns">
                        <a href="{{route('for-business-form')}}" class="common-btn common-btn-pink">zally and your business</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section 1 -->

    <!-- section 2 -->
    <section class="smooth--section">
        <div class="container">
            <div class="bi-common-container">
                <div class="smooth--section--content">
                    <div class="bi-common-large-title section-title">
                        in a world of deep fakes and AI
                    </div>
                    <div class="bi-common-large-subtitle section-subtitle">
                        it’s becoming harder to know who’s who and more importantly,
                        who’s real
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section 2 -->

    <!-- section 3 -->
    <div class="smooth--section vertical--scroll--wrapper">
        <!-- FRAME 1 -->
        <div class="verti--scroll long--arrow--wrapper">
            <div class="vertical-scroll-frame-left business pl_136">
                <div class="bi-common-large-title section-title">
                    beyond point-in-time exercises
                </div>

                <div class="bi-common-large-subtitle section-subtitle">
                    even cool tech like facial recognition, fingerprints or passkeys
                    just approves access once after that you don’t know if the same
                    person is signed-in
                </div>
            </div>

            <div class="vertical-scroll-frame-right">
                <div class="common-small-scroll-box box-one">
                    <div class="vertical-section-img">
                        <img src="{{asset('frontend/images/bussines-frame-icon-1.png')}}" alt="" srcset="" />
                    </div>

                    <div class="vertical-section-text">
                        knowing you customer has become complex
                    </div>
                </div>


                <div class="horizontal-arrow">
                    <svg width="100%" height="55" viewBox="0 0 4844 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1609 14H1721.81C1748.36 14 1774.85 16.6898 1800.87 22.0282V22.0282C1845.91 31.2711 1892.23 32.5441 1937.71 25.7894L1973.43 20.4841C2002.5 16.1672 2031.84 14 2061.23 14H2161H2410.77H2548.9C2584.26 14 2619.49 18.2861 2653.82 26.7644L2675.22 32.0499C2736.08 47.0825 2799.84 45.7586 2860.03 28.2124V28.2124C2892.36 18.7853 2925.88 14 2959.56 14H3216"
                            stroke="#250028" stroke-width="4" stroke-linecap="round" stroke-dasharray="8 8" />
                        <path
                            d="M2 14H114.808C141.365 14 167.854 16.6898 193.869 22.0282V22.0282C238.911 31.2711 285.226 32.5441 330.708 25.7894L366.43 20.4841C395.498 16.1672 424.843 14 454.229 14H554H803.771H941.901C977.26 14 1012.49 18.2861 1046.82 26.7644L1068.22 32.0499C1129.08 47.0825 1192.84 45.7586 1253.03 28.2124V28.2124C1285.36 18.7853 1318.88 14 1352.56 14H1609"
                            stroke="#250028" stroke-width="4" stroke-linecap="round" stroke-dasharray="8 8" />
                        <path
                            d="M3216 14H3328.81C3355.36 14 3381.85 16.6898 3407.87 22.0282V22.0282C3452.91 31.2711 3499.23 32.5441 3544.71 25.7894L3580.43 20.4841C3609.5 16.1672 3638.84 14 3668.23 14H3768H4017.77H4155.9C4191.26 14 4226.49 18.2861 4260.82 26.7644L4282.22 32.0499C4343.08 47.0825 4406.84 45.7586 4467.03 28.2124V28.2124C4499.36 18.7853 4532.88 14 4566.56 14H4823"
                            stroke="#250028" stroke-width="4" stroke-linecap="round" stroke-dasharray="8 8" />
                        <path
                            d="M4824.54 3.42972C4828.25 7.47764 4843.11 13.866 4841.9 15.9974C4840.54 18.3732 4835.72 19.0366 4831.97 20.9029C4828.28 22.7437 4825.9 23.4405 4822.96 25.3902C4821.85 26.1273 4822.09 24.6335 4821.97 23.7728C4821.19 18.1177 4821.23 12.4138 4821.47 6.71965C4821.51 5.90751 4820.98 2.60283 4822.15 2.44108C4822.7 2.36434 4822.83 2.45945 4823.3 2.5946C4823.87 2.76021 4824.13 2.9866 4824.54 3.42972Z"
                            fill="#FF2882" stroke="#250028" stroke-width="3" stroke-linecap="round" />
                    </svg>
                </div>

            </div>

            <!-- large arrow -->

        </div>
        <!-- FRAME 2 -->
        <div class="verti--scroll">
            <div class="second-frame-container-business">
                <!-- box1 -->
                <div class="common-small-scroll-box">
                    <div class="vertical-section-img">
                        <img src="{{asset('frontend/images/bussines-frame-icon-2.png')}}" alt="" srcset="" />
                    </div>

                    <div class="vertical-section-text">
                        it’s not continuously secure
                    </div>
                </div>
                <!-- box2 -->

                <div class="common-small-scroll-box">
                    <div class="vertical-section-img">
                        <img src="{{asset('frontend/images/bussines-frame-icon-3.png')}}" alt="" srcset="" />
                    </div>

                    <div class="vertical-section-text">
                        <p>even then you don’t know if that person is genuine</p>
                    </div>
                </div>
                <!-- box 3 -->
                <div class="common-small-scroll-box">
                    <div class="vertical-section-img">
                        <img src="{{asset('frontend/images/bussines-frame-icon-4.png')}}" alt="" srcset="" />
                    </div>

                    <div class="vertical-section-text">
                        that’s where <b>zally</b>
                        comes in
                    </div>
                </div>
            </div>
        </div>
        <!-- FRAME 3 -->

        <div class="verti--scroll">
            <div class="second-frame-container-business">
                <!-- box1 -->
                <div class="common-small-scroll-box">
                    <div class="vertical-section-img">
                        <img src="{{asset('frontend/images/bussines-frame-icon-5.png')}}" alt="" srcset="" />
                    </div>

                    <div class="vertical-section-text">
                        <p>continuous protection without any extra effort</p>
                    </div>
                </div>
                <!-- box2 -->

                <div class="common-small-scroll-box">
                    <div class="vertical-section-img">
                        <img src="{{asset('frontend/images/bussines-frame-icon-6.png')}}" alt="" srcset="" />
                    </div>

                    <div class="vertical-section-text">
                        simple API or SDK integration <br />
                        <small>*coming soon*</small>
                    </div>
                </div>
                <!-- box 3 -->
                <div class="common-small-scroll-box">
                    <div class="vertical-section-img">
                        <img src="{{asset('frontend/images/bussines-frame-icon-7.png')}}" alt="" srcset="" />
                    </div>

                    <div class="vertical-section-text">use on any website or app</div>
                </div>
            </div>
        </div>
    </div>
    <!-- section 3 -->

    <!-- section 4 -->
    <section class="smooth--section">
        <div class="container">
            <div class="bi-common-container">
                <div class="smooth--section--content">
                    <div class="bi-common-large-title section-title">
                        zally provides continuous authentication
                    </div>
                    <div class="bi-common-large-subtitle section-subtitle">
                        unlike other authentication methods, zally monitors that the
                        right human is using your service at all times
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section 4 -->

    <!-- section 5 -->
    <section class="smooth--section">
        <div class="container">
            <div class="bi-common-container">
                <div class="smooth--section--content">
                    <div class="bi-common-large-title section-title">
                        making authentication as simple as real life
                    </div>
                    <div class="bi-common-large-subtitle section-subtitle">
                        nothing should be that difficult
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section 5 -->
@endsection
