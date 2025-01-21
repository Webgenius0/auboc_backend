@extends('frontend.app')

@section('title','Zally-events')

@section('content')
    <!-- section 1 -->
    <section class="smooth--section event-and-blog-section">
        <div class="container">
            <div class="bi-common-container  event-and-blog-page">
                <div class="smooth--section--content">
                    <div class="bi-common-large-title section-title">eventz</div>
                    <div class="bi-event-page-subtitle">
                <span
                >we’re passionate about giving back to the community and
                  creating a space to share ideas, knowledge and the occasional
                  famingo*
                </span>
                        <span class="event-xsm-text">*not a real one</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container tab-section-container">
            <div class="bi-tab-container">
                <div class="sl-blog-tab-btn-wrapper">
                    <div class="bi-tab-btns-container">
                        <button class="bi-common-tab-btn active">all</button>
                        <button class="bi-common-tab-btn">coming soon</button>
                        <button class="bi-common-tab-btn">zessions</button>
                        <button class="bi-common-tab-btn">flip</button>
                    </div>
                </div>

                <div class="bi-tab-contents-container">
                    <!-- all section tab-->
                    <div class="bi-common-tab-content active">
                        <!-- type 1 -->
                        <a href="{{route('event-details-session')}}" class="bi-event-card">
                            <div class="event-card-top-header just-annouced">
                                JUST ANNOUNCED
                            </div>
                            <div class="event-card-image">
                                <img src="{{asset('frontend/images/event-1.png')}}" alt="" srcset="" />
                                <div class="event-card-img-btns">
                      <span class="event-time-line text-white btn-bg-deep-pink"
                      >16 November 2024</span
                      >
                                    <span class="event-type text-white btn-bg-deep-pink"
                                    >zessions</span
                                    >
                                </div>
                            </div>

                            <div class="event-description">
                                <div class="event-time-and-place">
                      <span class="event-place">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="14"
                            height="16"
                            viewBox="0 0 14 16"
                            fill="none"
                        >
                          <path
                              d="M0.786299 6.90628C0.786299 11.0663 4.91659 14.2263 6.44344 15.2526C6.78287 15.4811 7.21716 15.4811 7.55773 15.2526C9.08344 14.2263 13.2149 11.0651 13.2149 6.90628C13.2149 3.408 10.4309 0.571426 7.00001 0.571426C3.56801 0.571426 0.786299 3.408 0.786299 6.90628Z"
                              stroke="#4F208A"
                              stroke-width="1.14286"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                          />
                          <path
                              d="M4.71484 6.28571C4.71484 6.89192 4.95566 7.4733 5.38431 7.90196C5.81297 8.33061 6.39435 8.57143 7.00056 8.57143C7.60677 8.57143 8.18815 8.33061 8.6168 7.90196C9.04546 7.4733 9.28627 6.89192 9.28627 6.28571C9.28627 5.67951 9.04546 5.09812 8.6168 4.66947C8.18815 4.24082 7.60677 4 7.00056 4C6.39435 4 5.81297 4.24082 5.38431 4.66947C4.95566 5.09812 4.71484 5.67951 4.71484 6.28571Z"
                              stroke="#4F208A"
                              stroke-width="1.14286"
                          />
                        </svg>
                        <span>DiSH, Manchester</span>
                      </span>
                                    <span class="event-time">
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

                                <div class="get-tickets-btns">
                                    <div class="event-ticket-title">zally zessions</div>
                                    <button class="get-ticket-btn">get tickets</button>
                                </div>
                            </div>
                        </a>

                        <!-- type 2 -->
                        <a href="{{route('event-details-session')}}" class="bi-event-card">
                            <div class="event-card-top-header remaining">
                                LAST FEW TICKETS REMAINING
                            </div>
                            <div class="event-card-image">
                                <img src="{{asset('frontend/images/event-1.png')}}" alt="" srcset="" />
                                <div class="event-card-img-btns">
                      <span class="event-time-line text-white btn-bg-deep-pink"
                      >8 October 2024</span
                      >
                                    <span class="event-type text-white btn-bg-deep-pink"
                                    >zessions</span
                                    >
                                </div>
                            </div>

                            <div class="event-description">
                                <div class="event-time-and-place">
                      <span class="event-place">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="14"
                            height="16"
                            viewBox="0 0 14 16"
                            fill="none"
                        >
                          <path
                              d="M0.786299 6.90628C0.786299 11.0663 4.91659 14.2263 6.44344 15.2526C6.78287 15.4811 7.21716 15.4811 7.55773 15.2526C9.08344 14.2263 13.2149 11.0651 13.2149 6.90628C13.2149 3.408 10.4309 0.571426 7.00001 0.571426C3.56801 0.571426 0.786299 3.408 0.786299 6.90628Z"
                              stroke="#4F208A"
                              stroke-width="1.14286"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                          />
                          <path
                              d="M4.71484 6.28571C4.71484 6.89192 4.95566 7.4733 5.38431 7.90196C5.81297 8.33061 6.39435 8.57143 7.00056 8.57143C7.60677 8.57143 8.18815 8.33061 8.6168 7.90196C9.04546 7.4733 9.28627 6.89192 9.28627 6.28571C9.28627 5.67951 9.04546 5.09812 8.6168 4.66947C8.18815 4.24082 7.60677 4 7.00056 4C6.39435 4 5.81297 4.24082 5.38431 4.66947C4.95566 5.09812 4.71484 5.67951 4.71484 6.28571Z"
                              stroke="#4F208A"
                              stroke-width="1.14286"
                          />
                        </svg>
                        <span>DiSH, Manchester</span>
                      </span>
                                    <span class="event-time">
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

                                <div class="get-tickets-btns">
                                    <div class="event-ticket-title">accessible by design</div>
                                    <button class="get-ticket-btn">get tickets</button>
                                </div>
                            </div>
                        </a>
                        <!-- type 3 -->
                        <a href="{{route('event-details-flip')}}" class="bi-event-card">
                            <div class="event-card-top-header sold-out">SOLD OUT</div>
                            <div class="event-card-image">
                                <img src="{{asset('frontend/images/event-2.png')}}" alt="" srcset="" />
                                <div class="event-card-img-btns">
                      <span class="event-time-line text-black btn-bg-white"
                      >12 Sep 2024</span
                      >
                                    <span class="event-type text-black btn-bg-white"
                                    >flip</span
                                    >
                                </div>
                            </div>

                            <div class="event-description">
                                <div class="event-time-and-place">
                      <span class="event-place">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="14"
                            height="16"
                            viewBox="0 0 14 16"
                            fill="none"
                        >
                          <path
                              d="M0.786299 6.90628C0.786299 11.0663 4.91659 14.2263 6.44344 15.2526C6.78287 15.4811 7.21716 15.4811 7.55773 15.2526C9.08344 14.2263 13.2149 11.0651 13.2149 6.90628C13.2149 3.408 10.4309 0.571426 7.00001 0.571426C3.56801 0.571426 0.786299 3.408 0.786299 6.90628Z"
                              stroke="#4F208A"
                              stroke-width="1.14286"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                          />
                          <path
                              d="M4.71484 6.28571C4.71484 6.89192 4.95566 7.4733 5.38431 7.90196C5.81297 8.33061 6.39435 8.57143 7.00056 8.57143C7.60677 8.57143 8.18815 8.33061 8.6168 7.90196C9.04546 7.4733 9.28627 6.89192 9.28627 6.28571C9.28627 5.67951 9.04546 5.09812 8.6168 4.66947C8.18815 4.24082 7.60677 4 7.00056 4C6.39435 4 5.81297 4.24082 5.38431 4.66947C4.95566 5.09812 4.71484 5.67951 4.71484 6.28571Z"
                              stroke="#4F208A"
                              stroke-width="1.14286"
                          />
                        </svg>
                        <span>UAC92, Trafford</span>
                      </span>
                                    <span class="event-time">
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
                        <span>from 17:30</span>
                      </span>
                                </div>

                                <div class="get-tickets-btns">
                                    <div class="event-ticket-title">FLIP 2.0</div>
                                </div>
                            </div>
                        </a>
                        <!-- type 4 -->
                        <a href="{{route('event-details-flip')}}" class="bi-event-card">
                            <div class="event-card-image">
                                <img src="{{asset('frontend/images/event-4.png')}}" alt="" srcset="" />
                                <div class="event-card-img-btns">
                      <span class="event-time-line text-white btn-bg-deep-pink"
                      >12 Sep 2024</span
                      >
                                    <span class="event-type text-white btn-bg-deep-pink"
                                    >flip</span
                                    >
                                </div>
                            </div>

                            <div class="event-description">
                                <div class="event-time-and-place">
                      <span class="event-place">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="14"
                            height="16"
                            viewBox="0 0 14 16"
                            fill="none"
                        >
                          <path
                              d="M0.786299 6.90628C0.786299 11.0663 4.91659 14.2263 6.44344 15.2526C6.78287 15.4811 7.21716 15.4811 7.55773 15.2526C9.08344 14.2263 13.2149 11.0651 13.2149 6.90628C13.2149 3.408 10.4309 0.571426 7.00001 0.571426C3.56801 0.571426 0.786299 3.408 0.786299 6.90628Z"
                              stroke="#4F208A"
                              stroke-width="1.14286"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                          />
                          <path
                              d="M4.71484 6.28571C4.71484 6.89192 4.95566 7.4733 5.38431 7.90196C5.81297 8.33061 6.39435 8.57143 7.00056 8.57143C7.60677 8.57143 8.18815 8.33061 8.6168 7.90196C9.04546 7.4733 9.28627 6.89192 9.28627 6.28571C9.28627 5.67951 9.04546 5.09812 8.6168 4.66947C8.18815 4.24082 7.60677 4 7.00056 4C6.39435 4 5.81297 4.24082 5.38431 4.66947C4.95566 5.09812 4.71484 5.67951 4.71484 6.28571Z"
                              stroke="#4F208A"
                              stroke-width="1.14286"
                          />
                        </svg>
                        <span>UAC92, Trafford</span>
                      </span>
                                    <span class="event-time">
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
                        <span>26 july 2024</span>
                      </span>
                                </div>

                                <div class="get-tickets-btns">
                                    <div class="event-ticket-title">let’s talk tech</div>
                                </div>
                            </div>
                        </a>

                        <!-- type 5 -->

                        <a href="{{route('event-details-flip')}}" class="bi-event-card">
                            <div class="event-card-image">
                                <img src="{{asset('frontend/images/event-3.png')}}" alt="" srcset="" />
                                <div class="event-card-img-btns">
                      <span class="event-time-line text-white btn-bg-deep-pink"
                      >12 Sep 2024</span
                      >
                                    <span class="event-type text-white btn-bg-deep-pink"
                                    >flip</span
                                    >
                                </div>
                            </div>

                            <div class="event-description">
                                <div class="event-time-and-place">
                      <span class="event-place">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="14"
                            height="16"
                            viewBox="0 0 14 16"
                            fill="none"
                        >
                          <path
                              d="M0.786299 6.90628C0.786299 11.0663 4.91659 14.2263 6.44344 15.2526C6.78287 15.4811 7.21716 15.4811 7.55773 15.2526C9.08344 14.2263 13.2149 11.0651 13.2149 6.90628C13.2149 3.408 10.4309 0.571426 7.00001 0.571426C3.56801 0.571426 0.786299 3.408 0.786299 6.90628Z"
                              stroke="#4F208A"
                              stroke-width="1.14286"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                          />
                          <path
                              d="M4.71484 6.28571C4.71484 6.89192 4.95566 7.4733 5.38431 7.90196C5.81297 8.33061 6.39435 8.57143 7.00056 8.57143C7.60677 8.57143 8.18815 8.33061 8.6168 7.90196C9.04546 7.4733 9.28627 6.89192 9.28627 6.28571C9.28627 5.67951 9.04546 5.09812 8.6168 4.66947C8.18815 4.24082 7.60677 4 7.00056 4C6.39435 4 5.81297 4.24082 5.38431 4.66947C4.95566 5.09812 4.71484 5.67951 4.71484 6.28571Z"
                              stroke="#4F208A"
                              stroke-width="1.14286"
                          />
                        </svg>
                        <span>UAC92, Trafford</span>
                      </span>
                                    <span class="event-time">
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
                        <span>26 july 2024</span>
                      </span>
                                </div>

                                <div class="get-tickets-btns">
                                    <div class="event-ticket-title">
                                        gen z: the future of work
                                    </div>
                                </div>
                            </div>
                        </a>

                        <!-- type 6 -->
                        <a href="{{route('event-details-flip')}}" class="bi-event-card">
                            <div class="event-card-top-header sold-out">SOLD OUT</div>
                            <div class="event-card-image">
                                <img src="{{asset('frontend/images/event-2.png')}}" alt="" srcset="" />
                                <div class="event-card-img-btns">
                      <span class="event-time-line text-black btn-bg-white"
                      >12 Sep 2024</span
                      >
                                    <span class="event-type text-black btn-bg-white"
                                    >flip</span
                                    >
                                </div>
                            </div>

                            <div class="event-description">
                                <div class="event-time-and-place">
                      <span class="event-place">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="14"
                            height="16"
                            viewBox="0 0 14 16"
                            fill="none"
                        >
                          <path
                              d="M0.786299 6.90628C0.786299 11.0663 4.91659 14.2263 6.44344 15.2526C6.78287 15.4811 7.21716 15.4811 7.55773 15.2526C9.08344 14.2263 13.2149 11.0651 13.2149 6.90628C13.2149 3.408 10.4309 0.571426 7.00001 0.571426C3.56801 0.571426 0.786299 3.408 0.786299 6.90628Z"
                              stroke="#4F208A"
                              stroke-width="1.14286"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                          />
                          <path
                              d="M4.71484 6.28571C4.71484 6.89192 4.95566 7.4733 5.38431 7.90196C5.81297 8.33061 6.39435 8.57143 7.00056 8.57143C7.60677 8.57143 8.18815 8.33061 8.6168 7.90196C9.04546 7.4733 9.28627 6.89192 9.28627 6.28571C9.28627 5.67951 9.04546 5.09812 8.6168 4.66947C8.18815 4.24082 7.60677 4 7.00056 4C6.39435 4 5.81297 4.24082 5.38431 4.66947C4.95566 5.09812 4.71484 5.67951 4.71484 6.28571Z"
                              stroke="#4F208A"
                              stroke-width="1.14286"
                          />
                        </svg>
                        <span>UAC92, Trafford</span>
                      </span>
                                    <span class="event-time">
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
                        <span>from 17:30</span>
                      </span>
                                </div>

                                <div class="get-tickets-btns">
                                    <div class="event-ticket-title">
                                        FLIP MCR x Female Founders
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- coming soon tab -->
                    <div class="bi-common-tab-content">
                        <!-- type 1 -->
                        <a href="{{route('event-details-session')}}" class="bi-event-card">
                            <div class="event-card-top-header just-annouced">
                                JUST ANNOUNCED
                            </div>
                            <div class="event-card-image">
                                <img src="{{asset('frontend/images/event-1.png')}}" alt="" srcset="" />
                                <div class="event-card-img-btns">
                      <span class="event-time-line text-white btn-bg-deep-pink"
                      >16 November 2024</span
                      >
                                    <span class="event-type text-white btn-bg-deep-pink"
                                    >zessions</span
                                    >
                                </div>
                            </div>

                            <div class="event-description">
                                <div class="event-time-and-place">
                      <span class="event-place">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="14"
                            height="16"
                            viewBox="0 0 14 16"
                            fill="none"
                        >
                          <path
                              d="M0.786299 6.90628C0.786299 11.0663 4.91659 14.2263 6.44344 15.2526C6.78287 15.4811 7.21716 15.4811 7.55773 15.2526C9.08344 14.2263 13.2149 11.0651 13.2149 6.90628C13.2149 3.408 10.4309 0.571426 7.00001 0.571426C3.56801 0.571426 0.786299 3.408 0.786299 6.90628Z"
                              stroke="#4F208A"
                              stroke-width="1.14286"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                          />
                          <path
                              d="M4.71484 6.28571C4.71484 6.89192 4.95566 7.4733 5.38431 7.90196C5.81297 8.33061 6.39435 8.57143 7.00056 8.57143C7.60677 8.57143 8.18815 8.33061 8.6168 7.90196C9.04546 7.4733 9.28627 6.89192 9.28627 6.28571C9.28627 5.67951 9.04546 5.09812 8.6168 4.66947C8.18815 4.24082 7.60677 4 7.00056 4C6.39435 4 5.81297 4.24082 5.38431 4.66947C4.95566 5.09812 4.71484 5.67951 4.71484 6.28571Z"
                              stroke="#4F208A"
                              stroke-width="1.14286"
                          />
                        </svg>
                        <span>DiSH, Manchester</span>
                      </span>
                                    <span class="event-time">
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

                                <div class="get-tickets-btns">
                                    <div class="event-ticket-title">zally zessions</div>
                                    <button class="get-ticket-btn">get tickets</button>
                                </div>
                            </div>
                        </a>

                        <!-- type 2 -->
                        <a href="{{route('event-details-session')}}" class="bi-event-card">
                            <div class="event-card-top-header remaining">
                                LAST FEW TICKETS REMAINING
                            </div>
                            <div class="event-card-image">
                                <img src="{{asset('frontend/images/event-1.png')}}" alt="" srcset="" />
                                <div class="event-card-img-btns">
                      <span class="event-time-line text-white btn-bg-deep-pink"
                      >8 October 2024</span
                      >
                                    <span class="event-type text-white btn-bg-deep-pink"
                                    >zessions</span
                                    >
                                </div>
                            </div>

                            <div class="event-description">
                                <div class="event-time-and-place">
                      <span class="event-place">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="14"
                            height="16"
                            viewBox="0 0 14 16"
                            fill="none"
                        >
                          <path
                              d="M0.786299 6.90628C0.786299 11.0663 4.91659 14.2263 6.44344 15.2526C6.78287 15.4811 7.21716 15.4811 7.55773 15.2526C9.08344 14.2263 13.2149 11.0651 13.2149 6.90628C13.2149 3.408 10.4309 0.571426 7.00001 0.571426C3.56801 0.571426 0.786299 3.408 0.786299 6.90628Z"
                              stroke="#4F208A"
                              stroke-width="1.14286"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                          />
                          <path
                              d="M4.71484 6.28571C4.71484 6.89192 4.95566 7.4733 5.38431 7.90196C5.81297 8.33061 6.39435 8.57143 7.00056 8.57143C7.60677 8.57143 8.18815 8.33061 8.6168 7.90196C9.04546 7.4733 9.28627 6.89192 9.28627 6.28571C9.28627 5.67951 9.04546 5.09812 8.6168 4.66947C8.18815 4.24082 7.60677 4 7.00056 4C6.39435 4 5.81297 4.24082 5.38431 4.66947C4.95566 5.09812 4.71484 5.67951 4.71484 6.28571Z"
                              stroke="#4F208A"
                              stroke-width="1.14286"
                          />
                        </svg>
                        <span>DiSH, Manchester</span>
                      </span>
                                    <span class="event-time">
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

                                <div class="get-tickets-btns">
                                    <div class="event-ticket-title">accessible by design</div>
                                    <button class="get-ticket-btn">get tickets</button>
                                </div>
                            </div>
                        </a>
                        <!-- type 3 -->
                    </div>
                    <!-- sessions tab-->
                    <div class="bi-common-tab-content">
                        <!-- type 1 -->
                        <a href="{{route('event-details-session')}}" class="bi-event-card">
                            <div class="event-card-top-header just-annouced">
                                JUST ANNOUNCED
                            </div>
                            <div class="event-card-image">
                                <img src="{{asset('frontend/images/event-1.png')}}" alt="" srcset="" />
                                <div class="event-card-img-btns">
                      <span class="event-time-line text-white btn-bg-deep-pink"
                      >16 November 2024</span
                      >
                                    <span class="event-type text-white btn-bg-deep-pink"
                                    >zessions</span
                                    >
                                </div>
                            </div>

                            <div class="event-description">
                                <div class="event-time-and-place">
                      <span class="event-place">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="14"
                            height="16"
                            viewBox="0 0 14 16"
                            fill="none"
                        >
                          <path
                              d="M0.786299 6.90628C0.786299 11.0663 4.91659 14.2263 6.44344 15.2526C6.78287 15.4811 7.21716 15.4811 7.55773 15.2526C9.08344 14.2263 13.2149 11.0651 13.2149 6.90628C13.2149 3.408 10.4309 0.571426 7.00001 0.571426C3.56801 0.571426 0.786299 3.408 0.786299 6.90628Z"
                              stroke="#4F208A"
                              stroke-width="1.14286"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                          />
                          <path
                              d="M4.71484 6.28571C4.71484 6.89192 4.95566 7.4733 5.38431 7.90196C5.81297 8.33061 6.39435 8.57143 7.00056 8.57143C7.60677 8.57143 8.18815 8.33061 8.6168 7.90196C9.04546 7.4733 9.28627 6.89192 9.28627 6.28571C9.28627 5.67951 9.04546 5.09812 8.6168 4.66947C8.18815 4.24082 7.60677 4 7.00056 4C6.39435 4 5.81297 4.24082 5.38431 4.66947C4.95566 5.09812 4.71484 5.67951 4.71484 6.28571Z"
                              stroke="#4F208A"
                              stroke-width="1.14286"
                          />
                        </svg>
                        <span>DiSH, Manchester</span>
                      </span>
                                    <span class="event-time">
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

                                <div class="get-tickets-btns">
                                    <div class="event-ticket-title">zally zessions</div>
                                    <button class="get-ticket-btn">get tickets</button>
                                </div>
                            </div>
                        </a>

                        <!-- type 3 -->
                        <a href="{{route('event-details-session')}}" class="bi-event-card">
                            <div class="event-card-top-header sold-out">SOLD OUT</div>
                            <div class="event-card-image">
                                <img src="{{asset('frontend/images/event-2.png')}}" alt="" srcset="" />
                                <div class="event-card-img-btns">
                      <span class="event-time-line text-black btn-bg-white"
                      >12 Sep 2024</span
                      >
                                    <span class="event-type text-black btn-bg-white"
                                    >flip</span
                                    >
                                </div>
                            </div>

                            <div class="event-description">
                                <div class="event-time-and-place">
                      <span class="event-place">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="14"
                            height="16"
                            viewBox="0 0 14 16"
                            fill="none"
                        >
                          <path
                              d="M0.786299 6.90628C0.786299 11.0663 4.91659 14.2263 6.44344 15.2526C6.78287 15.4811 7.21716 15.4811 7.55773 15.2526C9.08344 14.2263 13.2149 11.0651 13.2149 6.90628C13.2149 3.408 10.4309 0.571426 7.00001 0.571426C3.56801 0.571426 0.786299 3.408 0.786299 6.90628Z"
                              stroke="#4F208A"
                              stroke-width="1.14286"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                          />
                          <path
                              d="M4.71484 6.28571C4.71484 6.89192 4.95566 7.4733 5.38431 7.90196C5.81297 8.33061 6.39435 8.57143 7.00056 8.57143C7.60677 8.57143 8.18815 8.33061 8.6168 7.90196C9.04546 7.4733 9.28627 6.89192 9.28627 6.28571C9.28627 5.67951 9.04546 5.09812 8.6168 4.66947C8.18815 4.24082 7.60677 4 7.00056 4C6.39435 4 5.81297 4.24082 5.38431 4.66947C4.95566 5.09812 4.71484 5.67951 4.71484 6.28571Z"
                              stroke="#4F208A"
                              stroke-width="1.14286"
                          />
                        </svg>
                        <span>UAC92, Trafford</span>
                      </span>
                                    <span class="event-time">
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
                        <span>from 17:30</span>
                      </span>
                                </div>

                                <div class="get-tickets-btns">
                                    <div class="event-ticket-title">FLIP 2.0</div>
                                </div>
                            </div>
                        </a>

                        <!-- type 5 -->

                        <a href="{{route('event-details-session')}}" class="bi-event-card">
                            <div class="event-card-image">
                                <img src="{{asset('frontend/images/event-3.png')}}" alt="" srcset="" />
                                <div class="event-card-img-btns">
                      <span class="event-time-line text-white btn-bg-deep-pink"
                      >12 Sep 2024</span
                      >
                                    <span class="event-type text-white btn-bg-deep-pink"
                                    >flip</span
                                    >
                                </div>
                            </div>

                            <div class="event-description">
                                <div class="event-time-and-place">
                      <span class="event-place">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="14"
                            height="16"
                            viewBox="0 0 14 16"
                            fill="none"
                        >
                          <path
                              d="M0.786299 6.90628C0.786299 11.0663 4.91659 14.2263 6.44344 15.2526C6.78287 15.4811 7.21716 15.4811 7.55773 15.2526C9.08344 14.2263 13.2149 11.0651 13.2149 6.90628C13.2149 3.408 10.4309 0.571426 7.00001 0.571426C3.56801 0.571426 0.786299 3.408 0.786299 6.90628Z"
                              stroke="#4F208A"
                              stroke-width="1.14286"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                          />
                          <path
                              d="M4.71484 6.28571C4.71484 6.89192 4.95566 7.4733 5.38431 7.90196C5.81297 8.33061 6.39435 8.57143 7.00056 8.57143C7.60677 8.57143 8.18815 8.33061 8.6168 7.90196C9.04546 7.4733 9.28627 6.89192 9.28627 6.28571C9.28627 5.67951 9.04546 5.09812 8.6168 4.66947C8.18815 4.24082 7.60677 4 7.00056 4C6.39435 4 5.81297 4.24082 5.38431 4.66947C4.95566 5.09812 4.71484 5.67951 4.71484 6.28571Z"
                              stroke="#4F208A"
                              stroke-width="1.14286"
                          />
                        </svg>
                        <span>UAC92, Trafford</span>
                      </span>
                                    <span class="event-time">
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
                        <span>26 july 2024</span>
                      </span>
                                </div>

                                <div class="get-tickets-btns">
                                    <div class="event-ticket-title">
                                        gen z: the future of work
                                    </div>
                                </div>
                            </div>
                        </a>

                        <!-- type 6 -->
                    </div>
                    <!-- flip tab -->
                    <div class="bi-common-tab-content">
                        <!-- type 3 -->
                        <a href="{{route('event-details-flip')}}" class="bi-event-card">
                            <div class="event-card-top-header sold-out">SOLD OUT</div>
                            <div class="event-card-image">
                                <img src="{{asset('frontend/images/event-2.png')}}" alt="" srcset="" />
                                <div class="event-card-img-btns">
                      <span class="event-time-line text-black btn-bg-white"
                      >12 Sep 2024</span
                      >
                                    <span class="event-type text-black btn-bg-white"
                                    >flip</span
                                    >
                                </div>
                            </div>

                            <div class="event-description">
                                <div class="event-time-and-place">
                      <span class="event-place">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="14"
                            height="16"
                            viewBox="0 0 14 16"
                            fill="none"
                        >
                          <path
                              d="M0.786299 6.90628C0.786299 11.0663 4.91659 14.2263 6.44344 15.2526C6.78287 15.4811 7.21716 15.4811 7.55773 15.2526C9.08344 14.2263 13.2149 11.0651 13.2149 6.90628C13.2149 3.408 10.4309 0.571426 7.00001 0.571426C3.56801 0.571426 0.786299 3.408 0.786299 6.90628Z"
                              stroke="#4F208A"
                              stroke-width="1.14286"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                          />
                          <path
                              d="M4.71484 6.28571C4.71484 6.89192 4.95566 7.4733 5.38431 7.90196C5.81297 8.33061 6.39435 8.57143 7.00056 8.57143C7.60677 8.57143 8.18815 8.33061 8.6168 7.90196C9.04546 7.4733 9.28627 6.89192 9.28627 6.28571C9.28627 5.67951 9.04546 5.09812 8.6168 4.66947C8.18815 4.24082 7.60677 4 7.00056 4C6.39435 4 5.81297 4.24082 5.38431 4.66947C4.95566 5.09812 4.71484 5.67951 4.71484 6.28571Z"
                              stroke="#4F208A"
                              stroke-width="1.14286"
                          />
                        </svg>
                        <span>UAC92, Trafford</span>
                      </span>
                                    <span class="event-time">
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
                        <span>from 17:30</span>
                      </span>
                                </div>

                                <div class="get-tickets-btns">
                                    <div class="event-ticket-title">FLIP 2.0</div>
                                </div>
                            </div>
                        </a>

                        <!-- type 5 -->

                        <a href="{{route('event-details-flip')}}" class="bi-event-card">
                            <div class="event-card-image">
                                <img src="{{asset('frontend/images/event-3.png')}}" alt="" srcset="" />
                                <div class="event-card-img-btns">
                      <span class="event-time-line text-white btn-bg-deep-pink"
                      >12 Sep 2024</span
                      >
                                    <span class="event-type text-white btn-bg-deep-pink"
                                    >flip</span
                                    >
                                </div>
                            </div>

                            <div class="event-description">
                                <div class="event-time-and-place">
                      <span class="event-place">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="14"
                            height="16"
                            viewBox="0 0 14 16"
                            fill="none"
                        >
                          <path
                              d="M0.786299 6.90628C0.786299 11.0663 4.91659 14.2263 6.44344 15.2526C6.78287 15.4811 7.21716 15.4811 7.55773 15.2526C9.08344 14.2263 13.2149 11.0651 13.2149 6.90628C13.2149 3.408 10.4309 0.571426 7.00001 0.571426C3.56801 0.571426 0.786299 3.408 0.786299 6.90628Z"
                              stroke="#4F208A"
                              stroke-width="1.14286"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                          />
                          <path
                              d="M4.71484 6.28571C4.71484 6.89192 4.95566 7.4733 5.38431 7.90196C5.81297 8.33061 6.39435 8.57143 7.00056 8.57143C7.60677 8.57143 8.18815 8.33061 8.6168 7.90196C9.04546 7.4733 9.28627 6.89192 9.28627 6.28571C9.28627 5.67951 9.04546 5.09812 8.6168 4.66947C8.18815 4.24082 7.60677 4 7.00056 4C6.39435 4 5.81297 4.24082 5.38431 4.66947C4.95566 5.09812 4.71484 5.67951 4.71484 6.28571Z"
                              stroke="#4F208A"
                              stroke-width="1.14286"
                          />
                        </svg>
                        <span>UAC92, Trafford</span>
                      </span>
                                    <span class="event-time">
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
                        <span>26 july 2024</span>
                      </span>
                                </div>

                                <div class="get-tickets-btns">
                                    <div class="event-ticket-title">
                                        gen z: the future of work
                                    </div>
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
