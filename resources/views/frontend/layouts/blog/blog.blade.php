@extends('frontend.app')

@section('title','Zally-blogs')

@section('content')
    <!-- section 1 -->
    <section class="smooth--section event-and-blog-section">
        <div class="container">
            <div class="bi-common-container  event-and-blog-page">
                <div class="smooth--section--content">
                    <div class="bi-common-large-title section-title">
                        posts and press
                    </div>
                    <div class="bi-event-page-subtitle">
                        <span>our blog, news, podcasts and other cool ztuff </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container tab-section-container">
            <div class="bi-tab-container">
                <div class="sl-blog-tab-btn-wrapper">
                    <div class="bi-tab-btns-container">
                        <button class="bi-common-tab-btn active">all</button>
                        <button class="bi-common-tab-btn">in the news</button>
                        <button class="bi-common-tab-btn">podcasts</button>
                        <button class="bi-common-tab-btn">zally updates</button>
                    </div>
                </div>
                <div class="bi-tab-contents-container">
                    <!-- all section tab-->
                    <div class="bi-common-tab-content active">
                        <!-- type 1 -->
                        <a href="{{route('blog-podcast-details')}}" class="bi-event-card">
                            <div class="event-card-image">
                                <img src="{{asset('frontend/images/blog-1.png')}}" alt="" srcset="" />
                                <div class="event-card-img-btns">
                      <span class="event-time-line text-dark light-sky-blue"
                      >05 Sep 2024</span
                      >
                                    <span class="event-type text-dark light-sky-blue"
                                    >podcast</span
                                    >
                                </div>
                            </div>

                            <div class="event-description">
                                <div class="event-time-and-place">
                      <span class="event-place">
                        <span>Cyber Sessions by CIISec</span>
                      </span>

                                    <span style="display: none" class="event-time">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="16"
                            height="16"
                            viewBox="0 0 16 16"
                            fill="none"
                        >
                          <path
                              d="M8.00084 15.4286C12.1036 15.4286 15.4294 12.1027 15.4294 8C15.4294 3.89731 12.1036 0.571426 8.00084 0.571426C3.89815 0.571426 0.572266 3.89731 0.572266 8C0.572266 12.1027 3.89815 15.4286 8.00084 15.4286Z"
                              stroke="#4F208A"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                          />
                          <path
                              d="M8 5.14285V8L10.9029 11.3829"
                              stroke="#4F208A"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                          />
                        </svg>
                        <span>12-1pm</span>
                      </span>
                                </div>

                                <div class="blog-card-description">
                                    Episode 8: Career changing into cyber
                                </div>
                            </div>
                        </a>

                        <!-- type 2 -->
                        <a href="{{route('blog-news-details')}}" class="bi-event-card">
                            <div class="event-card-image">
                                <img src="{{asset('frontend/images/blog-2.png')}}" alt="" srcset="" />
                                <div class="event-card-img-btns">
                      <span class="event-time-line text-dark light--green"
                      >22 August 2024</span
                      >
                                    <span class="event-type text-dark light--green"
                                    >in the news</span
                                    >
                                </div>
                            </div>

                            <div class="event-description">
                                <div class="event-time-and-place">
                      <span class="event-place">
                        <span>GM Business Growth Hub</span>
                      </span>
                                </div>

                                <div class="blog-card-description">
                                    GM Business Growth Hub Announces the Selection of 25
                                    Business Leaders for ASCEND Scale Up Programme
                                </div>
                            </div>
                        </a>
                        <!-- type 3 -->
                        <a href="{{route('blog-news-details')}}" class="bi-event-card">
                            <div class="event-card-image">
                                <img src="{{asset('frontend/images/blog-3.png')}}" alt="" srcset="" />
                                <div class="event-card-img-btns">
                      <span class="event-time-line text-dark light--green"
                      >22 August 2024</span
                      >
                                    <span class="event-type text-dark light--green"
                                    >in the news</span
                                    >
                                </div>
                            </div>

                            <div class="event-description">
                                <div class="event-time-and-place">
                      <span class="event-place">
                        <span>BusinessCloud</span>
                      </span>
                                </div>

                                <div class="blog-card-description">
                                    GM Business Growth Hub selects 25 business leaders for
                                    ASCEND Scale Up Programme
                                </div>
                            </div>
                        </a>

                        <!-- type 4 -->
                        <a href="{{route('blog-podcast-details')}}" class="bi-event-card">
                            <div class="event-card-image">
                                <img src="{{asset('frontend/images/blog-4.png')}}" alt="" srcset="" />
                                <div class="event-card-img-btns">
                      <span class="event-time-line text-dark light-sky-blue"
                      >05 Sep 2024</span
                      >
                                    <span class="event-type text-dark light-sky-blue"
                                    >podcast</span
                                    >
                                </div>
                            </div>

                            <div class="event-description">
                                <div class="event-time-and-place">
                      <span class="event-place">
                        <span>UHY Hacker Young</span>
                      </span>

                                    <span style="display: none" class="event-time">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="16"
                            height="16"
                            viewBox="0 0 16 16"
                            fill="none"
                        >
                          <path
                              d="M8.00084 15.4286C12.1036 15.4286 15.4294 12.1027 15.4294 8C15.4294 3.89731 12.1036 0.571426 8.00084 0.571426C3.89815 0.571426 0.572266 3.89731 0.572266 8C0.572266 12.1027 3.89815 15.4286 8.00084 15.4286Z"
                              stroke="#4F208A"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                          />
                          <path
                              d="M8 5.14285V8L10.9029 11.3829"
                              stroke="#4F208A"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                          />
                        </svg>
                        <span>12-1pm</span>
                      </span>
                                </div>

                                <div class="blog-card-description">
                                    UHY Cast: Series 2, Episode 7 - An Architect’s Journey
                                    into AI (with David Webb)
                                </div>
                            </div>
                        </a>

                        <!-- type 5 -->

                        <a href="{{route('blog-update-details')}}" class="bi-event-card">
                            <div class="event-card-image">
                                <img src="{{asset('frontend/images/blog-6.png')}}" alt="" srcset="" />
                                <div class="event-card-img-btns">
                      <span class="event-time-line text-dark body--purple"
                      >June 28, 2024</span
                      >
                                    <span class="event-type text-dark body--purple"
                                    >zally updates</span
                                    >
                                </div>
                            </div>

                            <div class="event-description">
                                <div class="event-time-and-place">
                      <span class="event-place">
                        <span>zally</span>
                      </span>
                                    <span style="display: none" class="event-time">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="16"
                            height="16"
                            viewBox="0 0 16 16"
                            fill="none"
                        >
                          <path
                              d="M8.00084 15.4286C12.1036 15.4286 15.4294 12.1027 15.4294 8C15.4294 3.89731 12.1036 0.571426 8.00084 0.571426C3.89815 0.571426 0.572266 3.89731 0.572266 8C0.572266 12.1027 3.89815 15.4286 8.00084 15.4286Z"
                              stroke="#4F208A"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                          />
                          <path
                              d="M8 5.14285V8L10.9029 11.3829"
                              stroke="#4F208A"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                          />
                        </svg>
                        <span>12-1pm</span>
                      </span>
                                </div>

                                <div class="blog-card-description">
                                    How AI is shaping Cybersecurity & Business Transformation
                                </div>
                            </div>
                        </a>

                        <!-- type 6 -->
                        <a href="{{route('blog-update-details')}}" class="bi-event-card">
                            <div class="event-card-image">
                                <img src="{{asset('frontend/images/blog-5.png')}}" alt="" srcset="" />
                                <div class="event-card-img-btns">
                      <span class="event-time-line text-dark body--purple"
                      >June 14, 2024</span
                      >
                                    <span class="event-type text-dark body--purple"
                                    >zally updates</span
                                    >
                                </div>
                            </div>

                            <div class="event-description">
                                <div class="event-time-and-place">
                      <span class="event-place">
                        <span>zally</span>
                      </span>
                                    <span style="display: none" class="event-time">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="16"
                            height="16"
                            viewBox="0 0 16 16"
                            fill="none"
                        >
                          <path
                              d="M8.00084 15.4286C12.1036 15.4286 15.4294 12.1027 15.4294 8C15.4294 3.89731 12.1036 0.571426 8.00084 0.571426C3.89815 0.571426 0.572266 3.89731 0.572266 8C0.572266 12.1027 3.89815 15.4286 8.00084 15.4286Z"
                              stroke="#4F208A"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                          />
                          <path
                              d="M8 5.14285V8L10.9029 11.3829"
                              stroke="#4F208A"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                          />
                        </svg>
                        <span>12-1pm</span>
                      </span>
                                </div>

                                <div class="blog-card-description">
                                    AI: Experiment, Test, Invest
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- in the news tab -->
                    <div class="bi-common-tab-content">
                        <!-- type 2 -->
                        <a href="{{route('blog-news-details')}}" class="bi-event-card">
                            <div class="event-card-image">
                                <img src="{{asset('frontend/images/blog-2.png')}}" alt="" srcset="" />
                                <div class="event-card-img-btns">
                      <span class="event-time-line text-dark light--green"
                      >22 August 2024</span
                      >
                                    <span class="event-type text-dark light--green"
                                    >in the news</span
                                    >
                                </div>
                            </div>

                            <div class="event-description">
                                <div class="event-time-and-place">
                      <span class="event-place">
                        <span>GM Business Growth Hub</span>
                      </span>
                                </div>

                                <div class="blog-card-description">
                                    GM Business Growth Hub Announces the Selection of 25
                                    Business Leaders for ASCEND Scale Up Programme
                                </div>
                            </div>
                        </a>
                        <!-- type 3 -->
                        <a href="{{route('blog-news-details')}}" class="bi-event-card">
                            <div class="event-card-image">
                                <img src="{{asset('frontend/images/blog-3.png')}}" alt="" srcset="" />
                                <div class="event-card-img-btns">
                      <span class="event-time-line text-dark light--green"
                      >22 August 2024</span
                      >
                                    <span class="event-type text-dark light--green"
                                    >in the news</span
                                    >
                                </div>
                            </div>

                            <div class="event-description">
                                <div class="event-time-and-place">
                      <span class="event-place">
                        <span>BusinessCloud</span>
                      </span>
                                </div>

                                <div class="blog-card-description">
                                    GM Business Growth Hub selects 25 business leaders for
                                    ASCEND Scale Up Programme
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- podcasts tab-->
                    <div class="bi-common-tab-content">
                        <!-- type 1 -->
                        <a href="{{route('blog-podcast-details')}}" class="bi-event-card">
                            <div class="event-card-image">
                                <img src="{{asset('frontend/images/blog-1.png')}}" alt="" srcset="" />
                                <div class="event-card-img-btns">
                      <span class="event-time-line text-dark light-sky-blue"
                      >05 Sep 2024</span
                      >
                                    <span class="event-type text-dark light-sky-blue"
                                    >podcast</span
                                    >
                                </div>
                            </div>

                            <div class="event-description">
                                <div class="event-time-and-place">
                      <span class="event-place">
                        <span>Cyber Sessions by CIISec</span>
                      </span>

                                    <span style="display: none" class="event-time">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="16"
                            height="16"
                            viewBox="0 0 16 16"
                            fill="none"
                        >
                          <path
                              d="M8.00084 15.4286C12.1036 15.4286 15.4294 12.1027 15.4294 8C15.4294 3.89731 12.1036 0.571426 8.00084 0.571426C3.89815 0.571426 0.572266 3.89731 0.572266 8C0.572266 12.1027 3.89815 15.4286 8.00084 15.4286Z"
                              stroke="#4F208A"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                          />
                          <path
                              d="M8 5.14285V8L10.9029 11.3829"
                              stroke="#4F208A"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                          />
                        </svg>
                        <span>12-1pm</span>
                      </span>
                                </div>

                                <div class="blog-card-description">
                                    Episode 8: Career changing into cyber
                                </div>
                            </div>
                        </a>

                        <!-- type 4 -->
                        <a href="{{route('blog-podcast-details')}}" class="bi-event-card">
                            <div class="event-card-image">
                                <img src="{{asset('frontend/images/blog-4.png')}}" alt="" srcset="" />
                                <div class="event-card-img-btns">
                      <span class="event-time-line text-dark light-sky-blue"
                      >05 Sep 2024</span
                      >
                                    <span class="event-type text-dark light-sky-blue"
                                    >podcast</span
                                    >
                                </div>
                            </div>

                            <div class="event-description">
                                <div class="event-time-and-place">
                      <span class="event-place">
                        <span>UHY Hacker Young</span>
                      </span>

                                    <span style="display: none" class="event-time">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="16"
                            height="16"
                            viewBox="0 0 16 16"
                            fill="none"
                        >
                          <path
                              d="M8.00084 15.4286C12.1036 15.4286 15.4294 12.1027 15.4294 8C15.4294 3.89731 12.1036 0.571426 8.00084 0.571426C3.89815 0.571426 0.572266 3.89731 0.572266 8C0.572266 12.1027 3.89815 15.4286 8.00084 15.4286Z"
                              stroke="#4F208A"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                          />
                          <path
                              d="M8 5.14285V8L10.9029 11.3829"
                              stroke="#4F208A"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                          />
                        </svg>
                        <span>12-1pm</span>
                      </span>
                                </div>

                                <div class="blog-card-description">
                                    UHY Cast: Series 2, Episode 7 - An Architect’s Journey
                                    into AI (with David Webb)
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- zally updates tab -->
                    <div class="bi-common-tab-content">
                        <!-- type 5 -->

                        <a href="{{route('blog-update-details')}}" class="bi-event-card">
                            <div class="event-card-image">
                                <img src="{{asset('frontend/images/blog-6.png')}}" alt="" srcset="" />
                                <div class="event-card-img-btns">
                      <span class="event-time-line text-dark body--purple"
                      >June 28, 2024</span
                      >
                                    <span class="event-type text-dark body--purple"
                                    >zally updates</span
                                    >
                                </div>
                            </div>

                            <div class="event-description">
                                <div class="event-time-and-place">
                      <span class="event-place">
                        <span>zally</span>
                      </span>
                                    <span style="display: none" class="event-time">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="16"
                            height="16"
                            viewBox="0 0 16 16"
                            fill="none"
                        >
                          <path
                              d="M8.00084 15.4286C12.1036 15.4286 15.4294 12.1027 15.4294 8C15.4294 3.89731 12.1036 0.571426 8.00084 0.571426C3.89815 0.571426 0.572266 3.89731 0.572266 8C0.572266 12.1027 3.89815 15.4286 8.00084 15.4286Z"
                              stroke="#4F208A"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                          />
                          <path
                              d="M8 5.14285V8L10.9029 11.3829"
                              stroke="#4F208A"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                          />
                        </svg>
                        <span>12-1pm</span>
                      </span>
                                </div>

                                <div class="blog-card-description">
                                    How AI is shaping Cybersecurity & Business Transformation
                                </div>
                            </div>
                        </a>

                        <!-- type 6 -->
                        <a href="{{route('blog-update-details')}}" class="bi-event-card">
                            <div class="event-card-image">
                                <img src="{{asset('frontend/images/blog-5.png')}}" alt="" srcset="" />
                                <div class="event-card-img-btns">
                      <span class="event-time-line text-dark body--purple"
                      >June 14, 2024</span
                      >
                                    <span class="event-type text-dark body--purple"
                                    >zally updates</span
                                    >
                                </div>
                            </div>

                            <div class="event-description">
                                <div class="event-time-and-place">
                      <span class="event-place">
                        <span>zally</span>
                      </span>
                                    <span style="display: none" class="event-time">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="16"
                            height="16"
                            viewBox="0 0 16 16"
                            fill="none"
                        >
                          <path
                              d="M8.00084 15.4286C12.1036 15.4286 15.4294 12.1027 15.4294 8C15.4294 3.89731 12.1036 0.571426 8.00084 0.571426C3.89815 0.571426 0.572266 3.89731 0.572266 8C0.572266 12.1027 3.89815 15.4286 8.00084 15.4286Z"
                              stroke="#4F208A"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                          />
                          <path
                              d="M8 5.14285V8L10.9029 11.3829"
                              stroke="#4F208A"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                          />
                        </svg>
                        <span>12-1pm</span>
                      </span>
                                </div>

                                <div class="blog-card-description">
                                    AI: Experiment, Test, Invest
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section 1 -->
@endsection
