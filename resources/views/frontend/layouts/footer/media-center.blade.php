@extends('frontend.app')

@section('title','Zally-media')

@section('content')
    <section class="sl-media-center-section smooth--section mt-55px">
        <div class="container">
            <div class="sl-media-center-container">
                <div class="sl-media-center-title">
                    <h2>media centre</h2>
                    <p>zally resources</p>
                </div>

                <div class="sl-media-center-inner-container sl-logo-inner-container">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                    aria-selected="true">
                                logo
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="false">
                                bios
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content sl-tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                             aria-labelledby="pills-home-tab">
                            <div class="row g-5">
                                <div class="col-md-4 col-sm-6">
                                    <div class="sl-logo-item">
                                        <img src="{{asset('frontend/images/logo-pink.png')}}" alt="" />


                                        <a href="#" class="download-link" data-image="{{asset('frontend/images/logo-pink.png')}}">
                                            electric pink logo
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17"
                                                 viewBox="0 0 16 17" fill="none">
                                                <path
                                                    d="M0.570312 12.2581V13.4009C0.570313 14.0071 0.811128 14.5885 1.23978 15.0172C1.66844 15.4458 2.24982 15.6866 2.85603 15.6866H13.1417C13.748 15.6866 14.3293 15.4458 14.758 15.0172C15.1866 14.5885 15.4275 14.0071 15.4275 13.4009V12.2581"
                                                    stroke="#250028" stroke-width="1.14286" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M5.14062 8.25806L7.99777 11.1152L10.8549 8.25806"
                                                      stroke="#250028" stroke-width="1.14286" stroke-linecap="round"
                                                      stroke-linejoin="round" />
                                                <path d="M8 11.1152V0.829468" stroke="#250028"
                                                      stroke-width="1.14286" stroke-linecap="round"
                                                      stroke-linejoin="round" />
                                            </svg>
                                        </a>

                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="sl-logo-item">
                                        <img src="{{asset('frontend/images/logo-white.png')}}" alt="" />
                                        <a href="#" class="download-link" data-image="{{asset('frontend/images/logo-white.png')}}">
                                            electric pink logo
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17"
                                                 viewBox="0 0 16 17" fill="none">
                                                <path
                                                    d="M0.570312 12.2581V13.4009C0.570313 14.0071 0.811128 14.5885 1.23978 15.0172C1.66844 15.4458 2.24982 15.6866 2.85603 15.6866H13.1417C13.748 15.6866 14.3293 15.4458 14.758 15.0172C15.1866 14.5885 15.4275 14.0071 15.4275 13.4009V12.2581"
                                                    stroke="#250028" stroke-width="1.14286" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M5.14062 8.25806L7.99777 11.1152L10.8549 8.25806"
                                                      stroke="#250028" stroke-width="1.14286" stroke-linecap="round"
                                                      stroke-linejoin="round" />
                                                <path d="M8 11.1152V0.829468" stroke="#250028"
                                                      stroke-width="1.14286" stroke-linecap="round"
                                                      stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="sl-logo-item">
                                        <img src="{{asset('frontend/images/logo-black.png')}}" alt="" />
                                        <a href="#" class="download-link" data-image="{{asset('frontend/images/logo-black.png')}}">
                                            electric pink logo
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17"
                                                 viewBox="0 0 16 17" fill="none">
                                                <path
                                                    d="M0.570312 12.2581V13.4009C0.570313 14.0071 0.811128 14.5885 1.23978 15.0172C1.66844 15.4458 2.24982 15.6866 2.85603 15.6866H13.1417C13.748 15.6866 14.3293 15.4458 14.758 15.0172C15.1866 14.5885 15.4275 14.0071 15.4275 13.4009V12.2581"
                                                    stroke="#250028" stroke-width="1.14286" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M5.14062 8.25806L7.99777 11.1152L10.8549 8.25806"
                                                      stroke="#250028" stroke-width="1.14286" stroke-linecap="round"
                                                      stroke-linejoin="round" />
                                                <path d="M8 11.1152V0.829468" stroke="#250028"
                                                      stroke-width="1.14286" stroke-linecap="round"
                                                      stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                             aria-labelledby="pills-profile-tab">
                            <div class="row g-5">
                                <div class="col-md-4 col-sm-6">
                                    <div class="sl-logo-item bios">
                                        <img src="{{asset('frontend/images/bios-1.png')}}" alt="" />


                                        <a href="#" class="download-link" data-image="{{asset('frontend/images/bios-1.png')}}">
                                            electric pink logo
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17"
                                                 viewBox="0 0 16 17" fill="none">
                                                <path
                                                    d="M0.570312 12.2581V13.4009C0.570313 14.0071 0.811128 14.5885 1.23978 15.0172C1.66844 15.4458 2.24982 15.6866 2.85603 15.6866H13.1417C13.748 15.6866 14.3293 15.4458 14.758 15.0172C15.1866 14.5885 15.4275 14.0071 15.4275 13.4009V12.2581"
                                                    stroke="#250028" stroke-width="1.14286" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M5.14062 8.25806L7.99777 11.1152L10.8549 8.25806"
                                                      stroke="#250028" stroke-width="1.14286" stroke-linecap="round"
                                                      stroke-linejoin="round" />
                                                <path d="M8 11.1152V0.829468" stroke="#250028"
                                                      stroke-width="1.14286" stroke-linecap="round"
                                                      stroke-linejoin="round" />
                                            </svg>
                                        </a>

                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="sl-logo-item bios">
                                        <img src="{{asset('frontend/images/bios-2.png')}}" alt="" />
                                        <a href="#" data-image="{{asset('frontend/images/bios-2.png')}}" class="download-link">
                                            electric pink logo
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17"
                                                 viewBox="0 0 16 17" fill="none">
                                                <path
                                                    d="M0.570312 12.2581V13.4009C0.570313 14.0071 0.811128 14.5885 1.23978 15.0172C1.66844 15.4458 2.24982 15.6866 2.85603 15.6866H13.1417C13.748 15.6866 14.3293 15.4458 14.758 15.0172C15.1866 14.5885 15.4275 14.0071 15.4275 13.4009V12.2581"
                                                    stroke="#250028" stroke-width="1.14286" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M5.14062 8.25806L7.99777 11.1152L10.8549 8.25806"
                                                      stroke="#250028" stroke-width="1.14286" stroke-linecap="round"
                                                      stroke-linejoin="round" />
                                                <path d="M8 11.1152V0.829468" stroke="#250028"
                                                      stroke-width="1.14286" stroke-linecap="round"
                                                      stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="sl-logo-item bios">
                                        <img src="{{asset('frontend/images/bios-3.png')}}" alt="" />
                                        <a href="#" class="download-link" data-image="{{asset('frontend/images/bios-3.png')}}">
                                            electric pink logo
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17"
                                                 viewBox="0 0 16 17" fill="none">
                                                <path
                                                    d="M0.570312 12.2581V13.4009C0.570313 14.0071 0.811128 14.5885 1.23978 15.0172C1.66844 15.4458 2.24982 15.6866 2.85603 15.6866H13.1417C13.748 15.6866 14.3293 15.4458 14.758 15.0172C15.1866 14.5885 15.4275 14.0071 15.4275 13.4009V12.2581"
                                                    stroke="#250028" stroke-width="1.14286" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M5.14062 8.25806L7.99777 11.1152L10.8549 8.25806"
                                                      stroke="#250028" stroke-width="1.14286" stroke-linecap="round"
                                                      stroke-linejoin="round" />
                                                <path d="M8 11.1152V0.829468" stroke="#250028"
                                                      stroke-width="1.14286" stroke-linecap="round"
                                                      stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
