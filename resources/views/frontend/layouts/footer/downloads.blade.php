@extends('frontend.app')

@section('title','Zally-downloads')

@section('content')
    <section class="sl-download-section smooth--section">
        <div class="container">
            <div class="sl-download-container">
                <div class="contact-menu">
                    <ul>
                        <li class=""><a href="{{route('contact')}}">contact</a></li>
                        <li class=""><a href="{{route('faqs')}}">faqs</a></li>
                        <li class="active"><a href="{{route('downloads')}}">downloads</a></li>
                    </ul>
                </div>
                <div class="sl-download-onnner-wrappper">
                    <div class="row g-4 g-lg-5">
                        <div class="col-lg-4 col-md-6">
                            <div class="sl-download-item">
                                <p>Apple devices</p>
                                <div class="sl-download-image">
                                    <img src="{{asset('frontend/images/apple-device.png')}}" alt="">
                                </div>
                                <a href="">
                                    <img src="{{asset('frontend/images/apple-app-store.svg')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="sl-download-item">
                                <p>Apple devices</p>
                                <div class="sl-download-image">
                                    <img src="{{asset('frontend/images/apple-device.png')}}" alt="">
                                </div>
                                <a href="" class="coming-soon">
                                    coming soon
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="sl-download-item">
                                <p>Apple devices</p>
                                <div class="sl-download-image">
                                    <img src="{{asset('frontend/images/shopify-app-device.png')}}" alt="">
                                </div>
                                <a href="">
                                    <img src="{{asset('frontend/images/shopify-app-store.svg')}}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
