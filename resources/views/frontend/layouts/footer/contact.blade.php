@extends('frontend.app')

@section('title','Zally-contact')

@section('content')
    <section class="sl-contact-section smooth--section mt-55px">
        <div class="container">
            <div class="sl-contact-container">
                <div class="sl-contact-left-site">
                    <h2>get in touch</h2>
                    <p>ask us anything, except our passwords</p>
                    <div class="contact-menu">
                        <ul>
                            <li class="active"><a href="{{route('contact')}}">contact</a></li>
                            <li class=""><a href="{{route('faqs')}}">faqs</a></li>
                            <li><a href="{{route('downloads')}}">downloads</a></li>
                        </ul>
                    </div>
                </div>
                <div class="sl-contact-right-site">
                    <div class="sl-contact-form">
                        <form action="">
                            <div class="sl-form-input-item">
                                <label for="">name</label>
                                <input type="text" class="shadow-none form-control"
                                       placeholder="First and last name" required>
                            </div>
                            <div class="sl-form-input-item">
                                <label for="">company</label>
                                <input type="text" class="shadow-none form-control" placeholder="e.g. zally" required>
                            </div>
                            <div class="sl-form-input-item">
                                <label for="">mobile number</label>
                                <input type="number" class="shadow-none form-control"
                                       placeholder="e.g. +44 7123456789" required>
                            </div>
                            <div class="sl-form-input-item">
                                <label for="">email</label>
                                <input type="email" class="shadow-none form-control" placeholder="email@email.com" required>
                            </div>

                            <div class="sl-form-input-item">
                                <label for="">your question?</label>
                                <textarea name="" rows="3" id="" placeholder="ask us anything" required></textarea>
                            </div>

                            <div class="sl-form-input-item">
                                <div class="line">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="49" height="2" viewBox="0 0 49 2"
                                         fill="none">
                                        <path d="M0.5 1H48.5" stroke="#4F208A" stroke-linecap="round" />
                                    </svg>
                                </div>
                            </div>

                            <div class="sl-checkbox-area">
                                <h6>your device</h6>
                                <div class="form-check">
                                    <input class="form-check-input shadow-none" type="radio" name="flexRadioDefault"
                                           id="flexRadioDefault1" required>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Apple
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input shadow-none" type="radio" name="flexRadioDefault"
                                           id="flexRadioDefault2" required>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Android
                                    </label>
                                </div>
                            </div>

                            <div class="sl-form-input-item">
                                <div class="line">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="49" height="2" viewBox="0 0 49 2"
                                         fill="none">
                                        <path d="M0.5 1H48.5" stroke="#4F208A" stroke-linecap="round" />
                                    </svg>
                                </div>
                            </div>

                            <div class="form-agree">
                                <div>
                                    <input class="form-check-input shadow-none" type="checkbox" id="aggriLabel"
                                           value="" aria-label="..." required>
                                </div>
                                <div>
                                    <label for="aggriLabel">I agree to the t&cs</label>
                                    <p>by submitting this form you agree to our terms and conditions ‍</p>
                                </div>
                            </div>

                            <div class="sl-form-input-item">
                                <button class="submit-btn" type="submit">Submit</button>
                            </div>



                        </form>
                    </div>
                    <div class="bottom-shape">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="42" height="41" viewBox="0 0 42 41"
                                     fill="none">
                                    <path
                                        d="M28.0011 37.6703C28.0011 37.6703 22.6709 39.683 20.5388 37.358C18.9709 35.6482 18.5241 32.3897 18.3887 30.4785C18.3642 30.1325 18.3147 29.6363 18.207 29.3072C18.1649 29.1786 16.4102 30.1939 16.2771 30.273C15.5132 30.7268 14.7108 31.4845 13.7502 31.2629C12.346 30.9389 11.1883 29.2437 10.9048 27.9359C10.5394 26.2505 10.908 24.4195 11.2442 22.7663C11.7714 20.1735 12.6696 17.9183 13.895 15.5967C14.522 14.409 15.2399 13.3169 15.649 12.0356"
                                        stroke="#250028" stroke-width="3" stroke-linecap="round" />
                                    <path
                                        d="M21.3477 12.6388C20.171 10.1277 20.0424 1.96301 18.8131 2.12299C17.4428 2.30134 16.2083 4.42208 14.6173 5.81296C13.0481 7.18479 12.2652 8.16335 10.791 9.15973C10.2336 9.53648 10.9775 9.71065 11.3564 9.93152C13.8464 11.3828 16.5171 12.4596 19.222 13.4404C19.6078 13.5803 21.0492 14.4615 21.3494 13.9465C21.4918 13.7022 21.4717 13.6249 21.4986 13.3802C21.5315 13.0803 21.4765 12.9137 21.3477 12.6388Z"
                                        fill="#FF2882" stroke="#250028" stroke-width="3" stroke-linecap="round" />
                                </svg>
                                tell me more</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
