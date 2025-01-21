@extends('frontend.app')

@section('title','Zally-faqs')

@section('content')
    <section class="sl-faqs-section smooth--section mt-55px">
        <div class="container">
            <div class="sl-faqs-container">

                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="contact-menu">
                            <ul>
                                <li class=""><a href="{{route('contact')}}">contact</a></li>
                                <li class="active"><a href="{{route('faqs')}}">faqs</a></li>
                                <li><a href="{{route('downloads')}}">downloads</a></li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="sl-faqs-wrapper">
                    <div class="sl-faqs-search-wrapper">
                        <form action="">
                            <input type="text" class="form-control shadow-none" placeholder="search for an answer to a question" required />
                            <button type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path
                                        d="M6.85603 13.1428C8.5231 13.1428 10.1219 12.4806 11.3007 11.3018C12.4795 10.123 13.1417 8.5242 13.1417 6.85713C13.1417 5.19005 12.4795 3.59125 11.3007 2.41245C10.1219 1.23365 8.5231 0.571411 6.85603 0.571411C5.18895 0.571411 3.59016 1.23365 2.41136 2.41245C1.23256 3.59125 0.570313 5.19005 0.570312 6.85713C0.570313 8.5242 1.23256 10.123 2.41136 11.3018C3.59016 12.4806 5.18895 13.1428 6.85603 13.1428Z"
                                        stroke="#250028" stroke-width="1.14286" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M15.4258 15.4286L11.4258 11.4286" stroke="#250028" stroke-width="1.14286"
                                          stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </form>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="sl-faqs-inner-wrapper bsb-accordion-6">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button shadow-none" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                how does zally work?
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                             data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>
                                                    check out the how it works page to get a better
                                                    understanding of behavioural biometrics and how our
                                                    technology works.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                does zally work on my phone?
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                             data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>
                                                    If your bank or credit union does not offer Zelle®, then you
                                                    must have a smartphone in order to access the Zelle® app to
                                                    send and receive money.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                can i trust zally with my passwords?
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                             data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>You have probably heard that passwords are safe because web accounts store only the hash of
                                                    the password. That's generally true, but the fact is ...</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFour">
                                            <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                can i add zally to my website?
                                            </button>
                                        </h2>
                                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                             data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>A Zally Rest Api server MUST be running on your local machine or somewhere over the
                                                    network. Use windowEnv.ZALLY_API_URL configuration option to set the desired</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFive">
                                            <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                what’s the difference between zally and iCloud keychain?
                                            </button>
                                        </h2>
                                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                             data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>The Mac uses the login keychain for its apps and then the iCloud Keychain is used to sync
                                                    between iOS devices and the Mac.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingSix">
                                            <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                can i still use iCloud keychain?
                                            </button>
                                        </h2>
                                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                             data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p> With iCloud Keychain, you can keep your passwords (and other secure information) updated
                                                    across your devices and shared with the people that you trust.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingSiven">
                                            <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseSiven" aria-expanded="false" aria-controls="collapseSiven">
                                                how do i move all my passwords to zally?
                                            </button>
                                        </h2>
                                        <div id="collapseSiven" class="accordion-collapse collapse" aria-labelledby="headingSiven"
                                             data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p> With iCloud Keychain, you can keep your passwords (and other secure information) updated
                                                    across your devices and shared with the people that you trust.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingEight">
                                            <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                                when is the Android app available?
                                            </button>
                                        </h2>
                                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                                             data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p> With iCloud Keychain, you can keep your passwords (and other secure information) updated
                                                    across your devices and shared with the people that you trust.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingNine">
                                            <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                                why is the blue location arrow alway on?
                                            </button>
                                        </h2>
                                        <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                                             data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p> With iCloud Keychain, you can keep your passwords (and other secure information) updated
                                                    across your devices and shared with the people that you trust.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTen">
                                            <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                                why is the blue location arrow alway on?
                                            </button>
                                        </h2>
                                        <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                                             data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p> With iCloud Keychain, you can keep your passwords (and other secure information) updated
                                                    across your devices and shared with the people that you trust.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingEleven">
                                            <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                                my app still says calibrating, is it working?
                                            </button>
                                        </h2>
                                        <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven"
                                             data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p> With iCloud Keychain, you can keep your passwords (and other secure information) updated
                                                    across your devices and shared with the people that you trust.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwelf">
                                            <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseTwelf" aria-expanded="false" aria-controls="collapseTwelf">
                                                how do i log out?
                                            </button>
                                        </h2>
                                        <div id="collapseTwelf" class="accordion-collapse collapse" aria-labelledby="headingTwelf"
                                             data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p> With iCloud Keychain, you can keep your passwords (and other secure information) updated
                                                    across your devices and shared with the people that you trust.</p>
                                            </div>
                                        </div>
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
