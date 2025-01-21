@extends('frontend.app')

@section('title','Zally-why zally')

@section('content')

    <!-- section 1 -->
    <section class="smooth--section"   >
        <div class="container">
            <div class="bi-common-container">
                <div class="smooth--section--content">
                    <div class="bi-common-large-title section-title">seamless security
                        that feels like magic</div>
                    <div class="bi-common-large-subtitle section-subtitle">
                        stop integrating multiple services,
                        your developers, service desk and customers will thank you
                    </div>
                    <div class="bi-common-btns">
                        <a href="{{route('for-business-form')}}" class="common-btn common-btn-pink">want to know more?</a>
                        <a href="#" class="common-btn common-btn-light-pink">zally vs...</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section 1 -->

    <!-- section 2 -->
    <div class="smooth--section vertical--scroll--wrapper"  >

        <!-- FRAME 1 -->
        <div class="verti--scroll long--arrow--wrapper ">

            <div class="vertical-scroll-frame-left pl_136 ">
                <div class="bi-common-large-title section-title">
                    lots of problems
                </div>

                <div class="bi-common-large-subtitle section-subtitle">
                    no single solution
                </div>
                <div class="why-zally-common-tab-container">
                    <div class="why-zally-tab-title">zally can address your business problems in the following areas:</div>
                    <div class="why-zally-tab-btns">
                        <span  data-tab-type="1" class="why-zally-tab-btn active">fraud</span>
                        <span data-tab-type="2" class="why-zally-tab-btn">AI</span>
                        <span data-tab-type="3" class="why-zally-tab-btn">password</span>
                    </div>
                </div>
            </div>

            <div class="vertical-scroll-frame-right">


                <!-- boxes for tab 1 -->
                <div class="common-small-scroll-box tab-box active" data-tab-type="1" >
                    <div class="vertical-section-img">
                        <img src="{{asset('frontend/images/lots-of-pbl-1.png')}}" alt="" srcset="">
                    </div>

                    <div class="vertical-section-text-why-zally-type-1">
                        fraud
                    </div>
                </div>
                <!-- boxes for tab 2 -->
                <div class="common-small-scroll-box tab-box" data-tab-type="2">

                    <div class="vertical-section-img">
                        <img src="{{asset('frontend/images/lots-of-pbl-8.png')}}" alt="" srcset="">
                    </div>

                    <div class="vertical-section-text-why-zally-type-1">
                        AI

                    </div>
                </div>
                <!-- boxes for tab 3 -->
                <div class="common-small-scroll-box tab-box"  data-tab-type="3">

                    <div class="vertical-section-img">
                        <img src="{{asset('frontend/images/lots-of-pbl-14.png')}}" alt="" srcset="">
                    </div>

                    <div class="vertical-section-text-why-zally-type-1">
                        passwords

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


        </div>
        <!-- FRAME 2 -->
        <div class="verti--scroll ">
            <div class="second-frame-container-business">
                <!-- boxes for tab 1 -->
                <!-- box1 -->
                <div class="common-small-scroll-box tab-box active" data-tab-type="1" >

                    <div class="vertical-section-img">
                        <img src="{{asset('frontend/images/lots-of-pbl-2.png')}}" alt="" srcset="">
                    </div>

                    <div class="vertical-section-text-why-zally-type-2">
                        account takeover

                    </div>
                </div>
                <!-- box2 -->

                <div class="common-small-scroll-box tab-box active" data-tab-type="1">
                    <div class="vertical-section-img">
                        <img src="{{asset('frontend/images/lots-of-pbl-3.png')}}" alt="" srcset="">
                    </div>

                    <div class="vertical-section-text-why-zally-type-2">
                        identity theft

                    </div>
                </div>
                <!-- box 3 -->
                <div class="common-small-scroll-box tab-box active" data-tab-type="1">

                    <div class="vertical-section-img">
                        <img src="{{asset('frontend/images/lots-of-pbl-4.png')}}" alt="" srcset="">
                    </div>

                    <div class="vertical-section-text-why-zally-type-2">

                        malicious actors
                    </div>
                </div>
                <!-- boxes for tab 2 -->
                <!-- box1 -->
                <div class="common-small-scroll-box tab-box" data-tab-type="2">

                    <div class="vertical-section-img">
                        <img src="{{asset('frontend/images/lots-of-pbl-9.png')}}" alt="" srcset="">
                    </div>

                    <div class="vertical-section-text-why-zally-type-2">
                        AI-generated text

                    </div>

                </div>
                <!-- box2 -->

                <div class="common-small-scroll-box tab-box" data-tab-type="2">

                    <div class="vertical-section-img">
                        <img src="{{asset('frontend/images/lots-of-pbl-10.png')}}" alt="" srcset="">
                    </div>

                    <div class="vertical-section-text-why-zally-type-2">
                        AI influencers

                    </div>



                </div>
                <!-- box 3 -->
                <div class="common-small-scroll-box tab-box" data-tab-type="2">

                    <div class="vertical-section-img">
                        <img src="{{asset('frontend/images/lots-of-pbl-11.png')}}" alt="" srcset="">
                    </div>

                    <div class="vertical-section-text-why-zally-type-2">

                        synthetic images
                    </div>

                </div>

                <!-- boxes for tab 3 -->
                <!-- box1 -->
                <div class="common-small-scroll-box tab-box" data-tab-type="3">

                    <div class="vertical-section-img">
                        <img src="{{asset('frontend/images/lots-of-pbl-15.png')}}" alt="" srcset="">
                    </div>

                    <div class="vertical-section-text-why-zally-type-2">
                        bad experiences

                    </div>
                </div>
                <!-- box2 -->

                <div class="common-small-scroll-box tab-box" data-tab-type="3">

                    <div class="vertical-section-img">
                        <img src="{{asset('frontend/images/lots-of-pbl-16.png')}}" alt="" srcset="">
                    </div>

                    <div class="vertical-section-text-why-zally-type-2">
                        lack of real proof

                    </div>



                </div>
                <!-- box 3 -->
                <div class="common-small-scroll-box tab-box" data-tab-type="3">

                    <div class="vertical-section-img">
                        <img src="{{asset('frontend/images/lots-of-pbl-17.png')}}" alt="" srcset="">
                    </div>

                    <div class="vertical-section-text-why-zally-type-2">

                        lost customers
                    </div>
                </div>

            </div>


        </div>
        <!-- FRAME 3 -->
        <div class="verti--scroll ">

            <div class="second-frame-container-business">
                <!-- boxes for tab 1 -->
                <!-- box1 -->
                <div class="common-small-scroll-box tab-box active" data-tab-type="1">

                    <div class="vertical-section-img">
                        <img src="{{asset('frontend/images/lots-of-pbl-5.png')}}" alt="" srcset="">
                    </div>

                    <div class="vertical-section-text-why-zally-type-2">
                        money laundering

                    </div>



                </div>
                <!-- box2 -->

                <div class="common-small-scroll-box tab-box active" data-tab-type="1">

                    <div class="vertical-section-img">
                        <img src="{{asset('frontend/images/lots-of-pbl-6.png')}}" alt="" srcset="">
                    </div>

                    <div class="vertical-section-text-why-zally-type-2">
                        social engineering

                    </div>
                </div>
                <!-- box 3 -->
                <div class="common-small-scroll-box tab-box active" data-tab-type="1">

                    <div class="vertical-section-img">
                        <img src="{{asset('frontend/images/lots-of-pbl-7.png')}}" alt="" srcset="">
                    </div>

                    <div class="vertical-section-text-why-zally-type-2">
                        stolen credentials

                    </div>
                </div>

                <!-- boxes for tab 2 -->
                <!-- box1 -->
                <div class="common-small-scroll-box tab-box" data-tab-type="2">

                    <div class="vertical-section-img">
                        <img src="{{asset('frontend/images/lots-of-pbl-12.png')}}" alt="" srcset="">
                    </div>

                    <div class="vertical-section-text-why-zally-type-2">
                        synthetic video

                    </div>



                </div>
                <!-- box2 -->
                <div class="common-small-scroll-box tab-box" data-tab-type="2">

                    <div class="vertical-section-img">
                        <img src="{{asset('frontend/images/lots-of-pbl-13.png')}}" alt="" srcset="">
                    </div>

                    <div class="vertical-section-text-why-zally-type-2">
                        synthetic voice

                    </div>
                </div>
                <!-- boxes for tab 3 -->
                <!-- box1 -->
                <div class="common-small-scroll-box tab-box" data-tab-type="3">

                    <div class="vertical-section-img">
                        <img src="{{asset('frontend/images/lots-of-pbl-18.png')}}" alt="" srcset="">
                    </div>

                    <div class="vertical-section-text-why-zally-type-2">
                        lost revenue

                    </div>



                </div>
                <!-- box2 -->

                <div class="common-small-scroll-box tab-box" data-tab-type="3">

                    <div class="vertical-section-img">
                        <img src="{{asset('frontend/images/lots-of-pbl-19.png')}}" alt="" srcset="">
                    </div>

                    <div class="vertical-section-text-why-zally-type-2">
                        only point-in-time

                    </div>
                </div>

                <!-- box 3 -->
                <div class="common-small-scroll-box tab-box" data-tab-type="3">

                    <div class="vertical-section-img">
                        <img src="{{asset('frontend/images/lots-of-pbl-20.png')}}" alt="" srcset="">
                    </div>

                    <div class="vertical-section-text-why-zally-type-2">
                        password resets

                    </div>
                </div>

            </div>


        </div>

    </div>
    <!-- section 2 -->

    <!-- section 5 -->
    <div class="smooth--section vertical--scroll--wrapper" >

        <!-- FRAME 1 -->
        <div class="verti--scroll long--arrow--wrapper">

            <div class="vertical-scroll-frame-left pl_136 ">
                <div class="bi-common-large-title section-title">
                    reduce complexity, reduce risk
                </div>
                <span class="why-zally-middle-text">and costs</span>
                <div class="bi-common-large-subtitle section-subtitle">
                    as fraudsters are becoming more advanced, making it harder for your business to adapt and continuously implement preventions
                </div>
                <div class="bi-common-btns">
                    <a href="{{route('for-business-form')}}" class="common-btn common-btn-pink">want to know more?</a>

                </div>
            </div>

            <div class="vertical-scroll-frame-right">

                <div class="common-small-scroll-box">

                    <div class="why-zally-round-shape">
                        <span class="currency">$</span><span class="value counter" data-count="58" >0</span><span class="value-point">b</span>
                    </div>

                    <div class="vertical-section-text">
                        global e-commerce losses <br> due to online payment fraud <br> expected in 2024

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


        </div>
        <!-- FRAME 2 -->
        <div class="verti--scroll">

            <div class="second-frame-container-business">
                <!-- box1 -->
                <div class="common-small-scroll-box">

                    <div class="why-zally-round-shape">
                        <span class="currency"></span><span class="value counter" data-count="87" >0</span><span class="value-point">%</span>
                    </div>

                    <div class="vertical-section-text">
                        of consumers abandon carts, <br> resulting in $260b in lost <br> revenue annually

                    </div>




                </div>
                <!-- box2 -->

                <div class="common-small-scroll-box">

                    <div class="why-zally-round-shape">
                        <span class="currency">$</span><span class="value counter" data-count="434">0</span><span class="value-point">b</span>
                    </div>

                    <div class="vertical-section-text">
                        cumulative losses to online <br> payment fraud globally <br> between now and 2027

                    </div>




                </div>
                <!-- box 3 -->
                <div class="common-small-scroll-box">

                    <div class="why-zally-round-shape">
                        <span class="currency"></span><span class="value counter" data-count="71" >0</span><span class="value-point">%</span>
                    </div>

                    <div class="vertical-section-text">
                        of organizations having been <br> victims of payments fraud <br> attacks in 2021
                    </div>

                </div>

            </div>


        </div>
        <!-- FRAME 3 -->

        <div class="verti--scroll">

            <div class="second-frame-container-business">
                <!-- box1 -->
                <div class="common-small-scroll-box">

                    <div class="why-zally-round-shape">
                        <span class="currency">$</span><span class="value counter" data-count="5">0</span><span class="value-point">m</span>
                    </div>

                    <div class="vertical-section-text">
                        the average firm spend to <br> set and reset passwords

                    </div>

                </div>
                <!-- box2 -->

                <div class="common-small-scroll-box">

                    <div class="why-zally-round-shape">
                        <span class="currency"></span><span class="value counter" data-count="5">0</span><span class="value-point">mins</span>
                    </div>

                    <div class="vertical-section-text">
                        to brute force 8-character <br> passwords (numbers, symbols, <br> upper and lowercase letters)

                    </div>

                </div>
                <!-- box 3 -->
                <div class="common-small-scroll-box">

                    <div class="why-zally-round-shape">
                        <span class="currency"></span><span class="value">0</span><span class="value-point">sec</span>
                    </div>

                    <div class="vertical-section-text">
                        to brute force a <br> 4-digit pin code

                    </div>

                </div>
            </div>
        </div>





    </div>
    <!-- section 5 -->
    <!-- section 6 -->
    <div class="smooth--section vertical--scroll--wrapper" >
        <!-- FRAME 1 -->
        <div class="verti--scroll long--arrow--wrapper">

            <div class="vertical-scroll-frame-left why-zally  pl_136 ">
                <div class="bi-common-large-title section-title">
                    let’s fight the emerging threat
                </div>

                <div class="bi-common-large-subtitle section-subtitle">
                    Over 5.5 billion* people are online today, and cybercrime costs are projected to hit $10.5 trillion by 2025; increasing security is paramount
                </div>
                <span class="small-text">* 69% of the worlds population has access to internet (Forbes/Statista, 23/24)</span>
                <div class="bi-common-btns">
                    <a href="{{route('for-business-form')}}" class="common-btn common-btn-pink">want to know more?</a>

                </div>
            </div>

            <div class="vertical-scroll-frame-right">

                <div class="common-small-scroll-box why-zally-box">
                    <div class="vertical-section-img">
                        <img src="{{asset('frontend/images/lots-of-pbl-1.png')}}" alt="" srcset="">
                    </div>

                    <div class="why-zally-box-title">
                        <span class="currency">$</span><span class="counter" data-count="486">0</span><span class="value-point">billion</span>
                    </div>

                    <div class="vertical-section-text text-start">
                        were lost by victims of financial scams alone in 2023

                    </div>
                </div>

                <div class="horizontal-arrow why-zally">
                    <svg width="100%" height="55" viewBox="0 0 2371 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_433_20647)">
                            <path d="M-863 14H-750.192C-723.635 14 -697.146 16.6898 -671.131 22.0282V22.0282C-626.089 31.2711 -579.774 32.5441 -534.292 25.7894L-498.57 20.4841C-469.502 16.1672 -440.157 14 -410.771 14H-311H-61.2292H76.9011C112.26 14 147.489 18.2861 181.816 26.7644L203.217 32.0499C264.081 47.0825 327.838 45.7586 388.027 28.2124V28.2124C420.365 18.7853 453.878 14 487.561 14H744" stroke="#250028" stroke-width="4" stroke-linecap="round" stroke-dasharray="8 8"/>
                            <path d="M744 14H856.808C883.365 14 909.854 16.6898 935.869 22.0282V22.0282C980.911 31.2711 1027.23 32.5441 1072.71 25.7894L1108.43 20.4841C1137.5 16.1672 1166.84 14 1196.23 14H1296H1545.77H1683.9C1719.26 14 1754.49 18.2861 1788.82 26.7644L1810.22 32.0499C1871.08 47.0825 1934.84 45.7586 1995.03 28.2124V28.2124C2027.36 18.7853 2060.88 14 2094.56 14H2351" stroke="#250028" stroke-width="4" stroke-linecap="round" stroke-dasharray="8 8"/>
                            <path d="M2350.54 3.42972C2354.25 7.47764 2369.11 13.866 2367.9 15.9974C2366.54 18.3732 2361.72 19.0366 2357.97 20.9029C2354.28 22.7437 2351.9 23.4405 2348.96 25.3902C2347.85 26.1273 2348.09 24.6335 2347.97 23.7728C2347.19 18.1177 2347.23 12.4138 2347.47 6.71965C2347.51 5.90751 2346.98 2.60283 2348.15 2.44108C2348.7 2.36434 2348.83 2.45945 2349.3 2.5946C2349.87 2.76021 2350.13 2.9866 2350.54 3.42972Z" fill="#FF2882" stroke="#250028" stroke-width="3" stroke-linecap="round"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_433_20647">
                                <rect width="2371" height="55" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>
                </div>


            </div>


        </div>
        <!-- FRAME 2 -->
        <div class="verti--scroll">
            <div class="second-frame-container-business justify-content-around">
                <!-- box1 -->
                <div class="common-small-scroll-box why-zally-box">

                    <div class="vertical-section-img">
                        <img src="{{asset('frontend/images/lots-of-pbl-8.png')}}" alt="" srcset="">
                    </div>

                    <div class="why-zally-box-title">
                        <span class="currency"></span><span class="counter" data-count="63" >0</span><span class="value-point">percent</span>
                    </div>

                    <div class="vertical-section-text text-start">
                        of merchants have seen criminals use AI technology against them

                    </div>


                </div>
                <!-- box2 -->

                <div class="common-small-scroll-box why-zally-box">

                    <div class="vertical-section-img">
                        <img src="{{asset('frontend/images/lots-of-pbl-14.png')}}" alt="" srcset="">
                    </div>

                    <div class="why-zally-box-title">
                        <span class="currency"></span><span class="counter" data-count="24">0</span><span class="value-point">billion</span>
                    </div>

                    <div class="vertical-section-text text-start">
                        passwords are exposed by hackers, with 80% of breaches are related to stolen, weak, or reused passwords

                    </div>


                </div>
                <!-- box 3 -->


            </div>

        </div>
    </div>
    <!-- section 6 -->
    <!-- section 7 -->
    <section class="smooth--section">
        <div class="container">
            <div class="bi-common-container-for-humans">
                <div class="for-humans-home-common-content-container">
                    <div class="bi-for-humans-left why-zally-left">
                        <div class="bi-common-large-title section-title">
                            creating a brand-new category: <br>
                            <span class="text-pink">always you</span>
                        </div>
                        <div class="bi-common-large-subtitle section-subtitle">
                            even new tech, like Passkeys or FaceID, only verifies you at that point in time
                        </div>
                        <div class="bi-common-large-subtitle section-subtitle purple-text">zally is the only solution to confirm
                            you are you, continuously </div>
                        <div class="bi-common-btns">
                            <a href="{{route('for-business-form')}}" class="common-btn common-btn-pink">want to know more?</a>

                        </div>
                    </div>
                    <div class="bi-for-humans-right why-zally-right">

                        <div class="why-zally-round-image">
                            <img src="{{asset('frontend/images/round-image.png')}}" alt="" srcset="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section 7 -->

@endsection
