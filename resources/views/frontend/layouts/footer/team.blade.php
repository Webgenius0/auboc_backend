@extends('frontend.app')

@section('title','Zally-team')

@section('content')
    <!-- section 1 -->
    <section class="smooth--section">
        <div class="container">
            <div class="bi-common-container">
                <div class="smooth--section--content">
                    <div class="bi-common-large-title section-title">the team</div>
                    <div class="bi-common-large-subtitle">
                        meet the crazy people building the magic
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
                <div class="bi-team-member-box">
                    <!-- image -->
                    <div class="bi-team-member-img">
                        <img src="{{asset('frontend/images/member-1.png')}}" alt="" srcset="">
                    </div>
                    <!-- name -->
                    <div class="bi-team-member-name">Patrick Smith</div>
                    <!-- position and social link -->
                    <div class="bi-team-member-info">
                        <span>founder / ceo</span> <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                    viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M18 5H5.99687C5.44687 5 5 5.45313 5 6.00938V17.9906C5 18.5469 5.44687 19 5.99687 19H18C18.55 19 19 18.5469 19 17.9906V6.00938C19 5.45313 18.55 5 18 5ZM9.23125 17H7.15625V10.3187H9.23438V17H9.23125ZM8.19375 9.40625C7.52812 9.40625 6.99063 8.86563 6.99063 8.20312C6.99063 7.54062 7.52812 7 8.19375 7C8.85625 7 9.39687 7.54062 9.39687 8.20312C9.39687 8.86875 8.85937 9.40625 8.19375 9.40625ZM17.0094 17H14.9344V13.75C14.9344 12.975 14.9187 11.9781 13.8562 11.9781C12.775 11.9781 12.6094 12.8219 12.6094 13.6938V17H10.5344V10.3187H12.525V11.2312H12.5531C12.8312 10.7062 13.5094 10.1531 14.5188 10.1531C16.6188 10.1531 17.0094 11.5375 17.0094 13.3375V17Z"
                                    stroke="#4F208A" stroke-linejoin="round" />
                            </svg></a>
                    </div>
                    <!-- about team member -->
                    <div class="bi-team-member-about">
                        A serial entrepreneur, who launched two businesses by age ten. After leaving high school, he sold his
                        first business
                        at 18, and later founded a London agency that grew to a 50+ team with 250+ clients in under two years. Now
                        as
                        zally's CEO, Patrick aims to kill passwords and build the UK's next unicorn.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section 2 -->


    <!-- section 3 -->
    <section class="smooth--section">
        <div class="container">
            <div class="bi-common-container">
                <div class="bi-team-member-box">
                    <!-- image -->
                    <div class="bi-team-member-img">
                        <img src="{{asset('frontend/images/member-2.png')}}" alt="" srcset="">
                    </div>
                    <!-- name -->
                    <div class="bi-team-member-name">David Webb</div>
                    <!-- position and social link -->
                    <div class="bi-team-member-info">
                        <span>chairman / investor</span> <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                          height="24" viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M18 5H5.99687C5.44687 5 5 5.45313 5 6.00938V17.9906C5 18.5469 5.44687 19 5.99687 19H18C18.55 19 19 18.5469 19 17.9906V6.00938C19 5.45313 18.55 5 18 5ZM9.23125 17H7.15625V10.3187H9.23438V17H9.23125ZM8.19375 9.40625C7.52812 9.40625 6.99063 8.86563 6.99063 8.20312C6.99063 7.54062 7.52812 7 8.19375 7C8.85625 7 9.39687 7.54062 9.39687 8.20312C9.39687 8.86875 8.85937 9.40625 8.19375 9.40625ZM17.0094 17H14.9344V13.75C14.9344 12.975 14.9187 11.9781 13.8562 11.9781C12.775 11.9781 12.6094 12.8219 12.6094 13.6938V17H10.5344V10.3187H12.525V11.2312H12.5531C12.8312 10.7062 13.5094 10.1531 14.5188 10.1531C16.6188 10.1531 17.0094 11.5375 17.0094 13.3375V17Z"
                                    stroke="#4F208A" stroke-linejoin="round" />
                            </svg></a>
                    </div>
                    <!-- about team member -->
                    <div class="bi-team-member-about">
                        Accomplished technologist and entrepreneur with over 35 years of experience.

                        Previously, David founded, 6point6 supplying services to Central Government, Defence & Security, Financial
                        Services and Commercial sectors.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section 3 -->


    <!-- section 4 -->
    <section class="smooth--section">
        <div class="container ">
            <div class="bi-common-container">
                <div class="bi-team-member-box">
                    <!-- image -->
                    <div class="bi-team-member-img">
                        <img src="{{asset('frontend/images/member-3.png')}}" alt="" srcset="">
                    </div>
                    <!-- name -->
                    <div class="bi-team-member-name">Paul Wilshaw</div>
                    <!-- position and social link -->
                    <div class="bi-team-member-info">
                        <span>cxo / board member</span> <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                         viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M18 5H5.99687C5.44687 5 5 5.45313 5 6.00938V17.9906C5 18.5469 5.44687 19 5.99687 19H18C18.55 19 19 18.5469 19 17.9906V6.00938C19 5.45313 18.55 5 18 5ZM9.23125 17H7.15625V10.3187H9.23438V17H9.23125ZM8.19375 9.40625C7.52812 9.40625 6.99063 8.86563 6.99063 8.20312C6.99063 7.54062 7.52812 7 8.19375 7C8.85625 7 9.39687 7.54062 9.39687 8.20312C9.39687 8.86875 8.85937 9.40625 8.19375 9.40625ZM17.0094 17H14.9344V13.75C14.9344 12.975 14.9187 11.9781 13.8562 11.9781C12.775 11.9781 12.6094 12.8219 12.6094 13.6938V17H10.5344V10.3187H12.525V11.2312H12.5531C12.8312 10.7062 13.5094 10.1531 14.5188 10.1531C16.6188 10.1531 17.0094 11.5375 17.0094 13.3375V17Z"
                                    stroke="#4F208A" stroke-linejoin="round" />
                            </svg></a>
                    </div>
                    <!-- about team member -->
                    <div class="bi-team-member-about">
                        Award-winning products and designs.
                        <br>
                        Previously Head of Innovation at Barclays, Involved in many firsts; mobile-to-mobile payments, mobile
                        check
                        deposits, accessible banking, 3D printed bones for the NHS and even hacking a pinball machine to accept
                        SMS
                        payments.
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- section 4 -->

    <!-- section 5 -->
    <section class="smooth--section">
        <div class="container ">
            <div class="bi-common-container">
                <div class="bi-team-member-box">
                    <!-- image -->
                    <div class="bi-team-member-img">
                        <img src="{{asset('frontend/images/member-4.png')}}" alt="" srcset="">
                    </div>
                    <!-- name -->
                    <div class="bi-team-member-name">Rob Jones</div>
                    <!-- position and social link -->
                    <div class="bi-team-member-info">
                        <span>cfo / board member</span> <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                         viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M18 5H5.99687C5.44687 5 5 5.45313 5 6.00938V17.9906C5 18.5469 5.44687 19 5.99687 19H18C18.55 19 19 18.5469 19 17.9906V6.00938C19 5.45313 18.55 5 18 5ZM9.23125 17H7.15625V10.3187H9.23438V17H9.23125ZM8.19375 9.40625C7.52812 9.40625 6.99063 8.86563 6.99063 8.20312C6.99063 7.54062 7.52812 7 8.19375 7C8.85625 7 9.39687 7.54062 9.39687 8.20312C9.39687 8.86875 8.85937 9.40625 8.19375 9.40625ZM17.0094 17H14.9344V13.75C14.9344 12.975 14.9187 11.9781 13.8562 11.9781C12.775 11.9781 12.6094 12.8219 12.6094 13.6938V17H10.5344V10.3187H12.525V11.2312H12.5531C12.8312 10.7062 13.5094 10.1531 14.5188 10.1531C16.6188 10.1531 17.0094 11.5375 17.0094 13.3375V17Z"
                                    stroke="#4F208A" stroke-linejoin="round" />
                            </svg></a>
                    </div>
                    <!-- about team member -->
                    <div class="bi-team-member-about">
                        An accomplished financial expert with a passion for making boring forecasts and numbers exciting, making
                        them easy to understand.
                        <br>
                        Previously, Finance AMD Alstom Power Nederland B.V. and Yokogawa.
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- section 5 -->


    <!-- section 6 -->

    <section class="smooth--section">
        <div class="container ">
            <div class="bi-common-container">
                <div class="bi-team-member-box">
                    <!-- image -->
                    <div class="bi-team-member-img">
                        <img src="{{asset('frontend/images/member-5.png')}}" alt="" srcset="">
                    </div>
                    <!-- name -->
                    <div class="bi-team-member-name">Alban Tramard</div>
                    <!-- position and social link -->
                    <div class="bi-team-member-info">
                        <span>ciso / board member</span> <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                          height="24" viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M18 5H5.99687C5.44687 5 5 5.45313 5 6.00938V17.9906C5 18.5469 5.44687 19 5.99687 19H18C18.55 19 19 18.5469 19 17.9906V6.00938C19 5.45313 18.55 5 18 5ZM9.23125 17H7.15625V10.3187H9.23438V17H9.23125ZM8.19375 9.40625C7.52812 9.40625 6.99063 8.86563 6.99063 8.20312C6.99063 7.54062 7.52812 7 8.19375 7C8.85625 7 9.39687 7.54062 9.39687 8.20312C9.39687 8.86875 8.85937 9.40625 8.19375 9.40625ZM17.0094 17H14.9344V13.75C14.9344 12.975 14.9187 11.9781 13.8562 11.9781C12.775 11.9781 12.6094 12.8219 12.6094 13.6938V17H10.5344V10.3187H12.525V11.2312H12.5531C12.8312 10.7062 13.5094 10.1531 14.5188 10.1531C16.6188 10.1531 17.0094 11.5375 17.0094 13.3375V17Z"
                                    stroke="#4F208A" stroke-linejoin="round" />
                            </svg></a>
                    </div>
                    <!-- about team member -->
                    <div class="bi-team-member-about">
                        Cyber security executive/senior manager with a data and engineering background.
                        <br>
                        Previously Group CISO for THG, one of the world’s largest online retailers, with £2Bn turnover, 10,000
                        staff, 30+ locations worldwide, across multiple industry types.
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- section 7 -->
    <section class="smooth--section">
        <div class="container">
            <div class="bi-common-container">
                <div class="bi-team-member-box">
                    <!-- image -->
                    <div class="bi-team-member-img">
                        <img src="{{asset('frontend/images/member-6.png')}}" alt="" srcset="">
                    </div>
                    <!-- name -->
                    <div class="bi-team-member-name">Amro Safadi</div>
                    <!-- position and social link -->
                    <div class="bi-team-member-info">
                        <span>principal data scientist</span> <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                               height="24" viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M18 5H5.99687C5.44687 5 5 5.45313 5 6.00938V17.9906C5 18.5469 5.44687 19 5.99687 19H18C18.55 19 19 18.5469 19 17.9906V6.00938C19 5.45313 18.55 5 18 5ZM9.23125 17H7.15625V10.3187H9.23438V17H9.23125ZM8.19375 9.40625C7.52812 9.40625 6.99063 8.86563 6.99063 8.20312C6.99063 7.54062 7.52812 7 8.19375 7C8.85625 7 9.39687 7.54062 9.39687 8.20312C9.39687 8.86875 8.85937 9.40625 8.19375 9.40625ZM17.0094 17H14.9344V13.75C14.9344 12.975 14.9187 11.9781 13.8562 11.9781C12.775 11.9781 12.6094 12.8219 12.6094 13.6938V17H10.5344V10.3187H12.525V11.2312H12.5531C12.8312 10.7062 13.5094 10.1531 14.5188 10.1531C16.6188 10.1531 17.0094 11.5375 17.0094 13.3375V17Z"
                                    stroke="#4F208A" stroke-linejoin="round" />
                            </svg></a>
                    </div>
                    <!-- about team member -->
                    <div class="bi-team-member-about">
                        PhD from UoM with 25 yrs experience in AI/ML.
                        <br>
                        Previously held senior roles at N Brown Group, Quint Group, DataRobot, and instructor at the University of
                        Birmingham.
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- section 8 -->
    <section class="smooth--section">
        <div class="container ">
            <div class="bi-common-container">
                <div class="bi-team-member-box">
                    <!-- image -->
                    <div class="bi-team-member-img">
                        <img src="{{asset('frontend/images/member-7.png')}}" alt="" srcset="">
                    </div>
                    <!-- name -->
                    <div class="bi-team-member-name">Siân Gwyther</div>
                    <!-- position and social link -->
                    <div class="bi-team-member-info">
                        <span>communities manager</span> <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                          height="24" viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M18 5H5.99687C5.44687 5 5 5.45313 5 6.00938V17.9906C5 18.5469 5.44687 19 5.99687 19H18C18.55 19 19 18.5469 19 17.9906V6.00938C19 5.45313 18.55 5 18 5ZM9.23125 17H7.15625V10.3187H9.23438V17H9.23125ZM8.19375 9.40625C7.52812 9.40625 6.99063 8.86563 6.99063 8.20312C6.99063 7.54062 7.52812 7 8.19375 7C8.85625 7 9.39687 7.54062 9.39687 8.20312C9.39687 8.86875 8.85937 9.40625 8.19375 9.40625ZM17.0094 17H14.9344V13.75C14.9344 12.975 14.9187 11.9781 13.8562 11.9781C12.775 11.9781 12.6094 12.8219 12.6094 13.6938V17H10.5344V10.3187H12.525V11.2312H12.5531C12.8312 10.7062 13.5094 10.1531 14.5188 10.1531C16.6188 10.1531 17.0094 11.5375 17.0094 13.3375V17Z"
                                    stroke="#4F208A" stroke-linejoin="round" />
                            </svg></a>
                    </div>
                    <!-- about team member -->
                    <div class="bi-team-member-about">
                        Bachelor of Arts (Hons) in Business and Marketing. Experience in event management, such as managing FLIP
                        MCR
                        and zally's presence at MTF. A keen interest in brand identity and now building zally's profile with
                        events
                        and across social channels.
                    </div>
                </div>
            </div>

        </div>
    </section>



    <section class="smooth--section">
        <div class="container">
            <div class="bi-common-container">
                <div class="bi-team-member-box">
                    <!-- image -->
                    <div class="bi-team-member-img">
                        <img src="{{asset('frontend/images/member-8.png')}}" alt="" srcset="">
                    </div>
                    <!-- name -->
                    <div class="bi-team-member-name">Lucy Forth</div>
                    <!-- position and social link -->
                    <div class="bi-team-member-info">
                        <span>social media manager</span> <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                           height="24" viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M18 5H5.99687C5.44687 5 5 5.45313 5 6.00938V17.9906C5 18.5469 5.44687 19 5.99687 19H18C18.55 19 19 18.5469 19 17.9906V6.00938C19 5.45313 18.55 5 18 5ZM9.23125 17H7.15625V10.3187H9.23438V17H9.23125ZM8.19375 9.40625C7.52812 9.40625 6.99063 8.86563 6.99063 8.20312C6.99063 7.54062 7.52812 7 8.19375 7C8.85625 7 9.39687 7.54062 9.39687 8.20312C9.39687 8.86875 8.85937 9.40625 8.19375 9.40625ZM17.0094 17H14.9344V13.75C14.9344 12.975 14.9187 11.9781 13.8562 11.9781C12.775 11.9781 12.6094 12.8219 12.6094 13.6938V17H10.5344V10.3187H12.525V11.2312H12.5531C12.8312 10.7062 13.5094 10.1531 14.5188 10.1531C16.6188 10.1531 17.0094 11.5375 17.0094 13.3375V17Z"
                                    stroke="#4F208A" stroke-linejoin="round" />
                            </svg></a>
                    </div>
                    <!-- about team member -->
                    <div class="bi-team-member-about">
                        Bachelor of Arts (Hons) in Business and Marketing. Experience in event management, such as managing FLIP
                        MCR
                        and zally's presence at MTF. A keen interest in brand identity and now building zally's profile with
                        events
                        and across social channels.
                    </div>
                </div>
            </div>


        </div>
    </section>

    <section class="smooth--section">
        <div class="container ">
            <div class="bi-common-container">
                <div class="bi-team-member-box">
                    <!-- image -->
                    <div class="bi-team-member-img">
                        <img src="{{asset('frontend/images/member-9.png')}}" alt="" srcset="">
                    </div>
                    <!-- name -->
                    <div class="bi-team-member-name">Aiden Bradwell</div>
                    <!-- position and social link -->
                    <div class="bi-team-member-info">
                        <span>communities manager</span> <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                          height="24" viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M18 5H5.99687C5.44687 5 5 5.45313 5 6.00938V17.9906C5 18.5469 5.44687 19 5.99687 19H18C18.55 19 19 18.5469 19 17.9906V6.00938C19 5.45313 18.55 5 18 5ZM9.23125 17H7.15625V10.3187H9.23438V17H9.23125ZM8.19375 9.40625C7.52812 9.40625 6.99063 8.86563 6.99063 8.20312C6.99063 7.54062 7.52812 7 8.19375 7C8.85625 7 9.39687 7.54062 9.39687 8.20312C9.39687 8.86875 8.85937 9.40625 8.19375 9.40625ZM17.0094 17H14.9344V13.75C14.9344 12.975 14.9187 11.9781 13.8562 11.9781C12.775 11.9781 12.6094 12.8219 12.6094 13.6938V17H10.5344V10.3187H12.525V11.2312H12.5531C12.8312 10.7062 13.5094 10.1531 14.5188 10.1531C16.6188 10.1531 17.0094 11.5375 17.0094 13.3375V17Z"
                                    stroke="#4F208A" stroke-linejoin="round" />
                            </svg></a>
                    </div>
                    <!-- about team member -->
                    <div class="bi-team-member-about">
                        BSc Dual Major in Computer Science and Psychology from the University of Ottawa Computer-Vision
                        Researcher,
                        Semiconductor Firmware Programmer, Back-end System Developer, and most recently Full-stack Cyber Security
                        Developer with zally.
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="smooth--section">
        <div class="container">
            <div class="bi-common-container">
                <div class="bi-team-member-box">
                    <!-- image -->
                    <div class="bi-team-member-img">
                        <img src="{{asset('frontend/images/member-10.png')}}" alt="" srcset="">
                    </div>
                    <!-- name -->
                    <div class="bi-team-member-name">Zak Yeomanson</div>
                    <!-- position and social link -->
                    <div class="bi-team-member-info">
                        <span>software engineer</span> <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M18 5H5.99687C5.44687 5 5 5.45313 5 6.00938V17.9906C5 18.5469 5.44687 19 5.99687 19H18C18.55 19 19 18.5469 19 17.9906V6.00938C19 5.45313 18.55 5 18 5ZM9.23125 17H7.15625V10.3187H9.23438V17H9.23125ZM8.19375 9.40625C7.52812 9.40625 6.99063 8.86563 6.99063 8.20312C6.99063 7.54062 7.52812 7 8.19375 7C8.85625 7 9.39687 7.54062 9.39687 8.20312C9.39687 8.86875 8.85937 9.40625 8.19375 9.40625ZM17.0094 17H14.9344V13.75C14.9344 12.975 14.9187 11.9781 13.8562 11.9781C12.775 11.9781 12.6094 12.8219 12.6094 13.6938V17H10.5344V10.3187H12.525V11.2312H12.5531C12.8312 10.7062 13.5094 10.1531 14.5188 10.1531C16.6188 10.1531 17.0094 11.5375 17.0094 13.3375V17Z"
                                    stroke="#4F208A" stroke-linejoin="round" />
                            </svg></a>
                    </div>
                    <!-- about team member -->
                    <div class="bi-team-member-about">
                        Bournemouth University graduate with a 1st class degree in Computer Science. Holds a year of R&D
                        experience
                        at Macro 4, focusing on innovative B2B software solutions & s mainframe applications. Previously engaged
                        at
                        Code Ninja, facilitating coding education for children.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="smooth--section">
        <div class="container">
            <div class="bi-common-container">
                <div class="bi-team-member-box">
                    <!-- image -->
                    <div class="bi-team-member-img">
                        <img src="{{asset('frontend/images/member-11.png')}}" alt="" srcset="">
                    </div>
                    <!-- name -->
                    <div class="bi-team-member-name">Adil Said</div>
                    <!-- position and social link -->
                    <div class="bi-team-member-info">
                        <span>data scientist</span> <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                     viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M18 5H5.99687C5.44687 5 5 5.45313 5 6.00938V17.9906C5 18.5469 5.44687 19 5.99687 19H18C18.55 19 19 18.5469 19 17.9906V6.00938C19 5.45313 18.55 5 18 5ZM9.23125 17H7.15625V10.3187H9.23438V17H9.23125ZM8.19375 9.40625C7.52812 9.40625 6.99063 8.86563 6.99063 8.20312C6.99063 7.54062 7.52812 7 8.19375 7C8.85625 7 9.39687 7.54062 9.39687 8.20312C9.39687 8.86875 8.85937 9.40625 8.19375 9.40625ZM17.0094 17H14.9344V13.75C14.9344 12.975 14.9187 11.9781 13.8562 11.9781C12.775 11.9781 12.6094 12.8219 12.6094 13.6938V17H10.5344V10.3187H12.525V11.2312H12.5531C12.8312 10.7062 13.5094 10.1531 14.5188 10.1531C16.6188 10.1531 17.0094 11.5375 17.0094 13.3375V17Z"
                                    stroke="#4F208A" stroke-linejoin="round" />
                            </svg></a>
                    </div>
                    <!-- about team member -->
                    <div class="bi-team-member-about">
                        University of Greenwich graduate with First-Class Honours in BSc H Mathematics. Dissertation explored a
                        niche application of Bayesian spatial-temporal models to study violent crime dynamics in London. Developed
                        machine learning applications and natural language processing for live event sentiment analysis and
                        contributed data science / statistics articles on Medium.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="smooth--section">
        <div class="container">
            <div class="bi-common-container">
                <div class="bi-team-member-box">
                    <!-- image -->
                    <div class="bi-team-member-img">
                        <img src="{{asset('frontend/images/member-12.png')}}" alt="" srcset="">
                    </div>
                    <!-- name -->
                    <div class="bi-team-member-name">Andy Fanthome</div>
                    <!-- position and social link -->
                    <div class="bi-team-member-info">
                        <span>data scientist</span> <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                     viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M18 5H5.99687C5.44687 5 5 5.45313 5 6.00938V17.9906C5 18.5469 5.44687 19 5.99687 19H18C18.55 19 19 18.5469 19 17.9906V6.00938C19 5.45313 18.55 5 18 5ZM9.23125 17H7.15625V10.3187H9.23438V17H9.23125ZM8.19375 9.40625C7.52812 9.40625 6.99063 8.86563 6.99063 8.20312C6.99063 7.54062 7.52812 7 8.19375 7C8.85625 7 9.39687 7.54062 9.39687 8.20312C9.39687 8.86875 8.85937 9.40625 8.19375 9.40625ZM17.0094 17H14.9344V13.75C14.9344 12.975 14.9187 11.9781 13.8562 11.9781C12.775 11.9781 12.6094 12.8219 12.6094 13.6938V17H10.5344V10.3187H12.525V11.2312H12.5531C12.8312 10.7062 13.5094 10.1531 14.5188 10.1531C16.6188 10.1531 17.0094 11.5375 17.0094 13.3375V17Z"
                                    stroke="#4F208A" stroke-linejoin="round" />
                            </svg></a>
                    </div>
                    <!-- about team member -->
                    <div class="bi-team-member-about">
                        University of Liverpool alumnus with a first-class BSc in Computer Science.
                        <br>
                        Former Junior Data Scientist at NHS Alder Hey Innovation and Software Engineer at Thomson Reuters.
                        Passionate about advancing machine learning and data science at zally.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="smooth--section">
        <div class="container ">
            <div class="bi-common-container">
                <div class="bi-team-member-box">
                    <!-- image -->
                    <div class="bi-team-member-img">
                        <img src="{{asset('frontend/images/member-13.png')}}" alt="" srcset="">
                    </div>
                    <!-- name -->
                    <div class="bi-team-member-name">Chloe Wong</div>
                    <!-- position and social link -->
                    <div class="bi-team-member-info">
                        <span>software engineer</span> <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M18 5H5.99687C5.44687 5 5 5.45313 5 6.00938V17.9906C5 18.5469 5.44687 19 5.99687 19H18C18.55 19 19 18.5469 19 17.9906V6.00938C19 5.45313 18.55 5 18 5ZM9.23125 17H7.15625V10.3187H9.23438V17H9.23125ZM8.19375 9.40625C7.52812 9.40625 6.99063 8.86563 6.99063 8.20312C6.99063 7.54062 7.52812 7 8.19375 7C8.85625 7 9.39687 7.54062 9.39687 8.20312C9.39687 8.86875 8.85937 9.40625 8.19375 9.40625ZM17.0094 17H14.9344V13.75C14.9344 12.975 14.9187 11.9781 13.8562 11.9781C12.775 11.9781 12.6094 12.8219 12.6094 13.6938V17H10.5344V10.3187H12.525V11.2312H12.5531C12.8312 10.7062 13.5094 10.1531 14.5188 10.1531C16.6188 10.1531 17.0094 11.5375 17.0094 13.3375V17Z"
                                    stroke="#4F208A" stroke-linejoin="round" />
                            </svg></a>
                    </div>
                    <!-- about team member -->
                    <div class="bi-team-member-about">
                        Manchester Metropolitan University graduate, completing Bachelor's degree in Biomedical Sciences.
                        <br>
                        <br>
                        Chloe is a Biomedical Scientist turned Software Engineer with an interest in cloud computing and front-end
                        development. Chloe has experience with AWS and front-end technologies.
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
