@php

    $system = \App\Models\SystemSetting::first();

@endphp



<div class="sidebar-wrapper">
    <div>
        <div class="logo-wrapper">
            <a href="{{ route('dashboard') }}">
                @if (!empty($system->logo))
                    <img class="mb-3 w-auto" height="60px" src="{{ asset($system->logo ?? '') }}" alt="logo" />
                @else
                    <img class="img-fluid for-light" src="{{ asset('backend/images/logo/bag-logo3.png') }}" alt="">
                @endif
            </a>
            <div class="back-btn"><i data-feather="grid"></i></div>
            <div class="toggle-sidebar icon-box-sidebar"><i class="status_toggle middle sidebar-toggle"
                    data-feather="grid"> </i></div>
        </div>
        <div class="logo-icon-wrapper"><a href="index.html">
                <div class="icon-box-sidebar"><i data-feather="grid"></i></div>
            </a></div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>
                    <li class="pin-title sidebar-list">
                        <h6>Pinned</h6>
                    </li>
                    <hr>

                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                            class="sidebar-link {{ Request::routeIs('dashboard') ? 'active open' : ' ' }}"
                            href="{{ route('dashboard') }}"><i data-feather="home"></i><span
                                class="lan-3">Dashboard</span></a>
                    </li>

                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                            class="sidebar-link sidebar-title {{ Request::routeIs('cms.*') ? 'active open' : ' ' }}"
                            href="javascript:void(0)"><i data-feather="layers"></i><span>CMS</span></a>
                        <ul class="sidebar-submenu">
                            {{-- home page --}}
                            <li><a class="submenu-title {{ Request::routeIs('cms.home-page.*') ? 'active open' : '' }}"
                                    href="javascript:void(0)">Home Page<span class="sub-arrow"><i
                                            class="fa fa-angle-right"></i></span></a>
                                <ul class="nav-sub-childmenu submenu-content">
                                    <li><a class="{{ Request::routeIs('cms.home-page.home-section-text') ? 'active' : ' ' }}"
                                        href="{{ route('cms.home-page.home-section-text') }}">Hero Banner text</a></li>

                                        {{-- <li>
                                            <a class="{{ Request::routeIs('cms.service-page.section') ? 'active' : '' }}"
                                               href="{{ route('cms.service-page.section', ['section' => 'Service Section']) }}">
                                                Our Service
                                            </a>
                                        </li> --}}

                                </ul>
                            </li>
                            {{-- home page end --}}


                            {{-- Blog Page --}}
                            <li><a class="submenu-title {{ Request::routeIs('cms.blog-page.*') ? 'active open' : '' }}"
                                href="javascript:void(0)">Blog Page<span class="sub-arrow"><i
                                        class="fa fa-angle-right"></i></span></a>
                                <ul class="nav-sub-childmenu submenu-content">
                                    <li>
                                        <a class="{{ Request::routeIs('cms.blog-page.section') ? 'active' : '' }}"
                                            href="{{ route('cms.blog-page.section', ['section' => 'Blog Section']) }}">
                                                Our Blogs
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            {{-- Service Page --}}
                            <li><a class="submenu-title {{ Request::routeIs('cms.service-page.*') ? 'active open' : '' }}"
                                href="javascript:void(0)">Service Page<span class="sub-arrow"><i
                                        class="fa fa-angle-right"></i></span></a>
                                <ul class="nav-sub-childmenu submenu-content">
                                    <li>
                                        <a class="{{ Request::routeIs('cms.service-page.section') ? 'active' : '' }}"
                                            href="{{ route('cms.service-page.section', ['section' => 'service Section']) }}">
                                                Our Services
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            {{-- About Page --}}
                            <li><a class="submenu-title {{ Request::routeIs('cms.about-page.*') ? 'active open' : '' }}"
                                href="javascript:void(0)">About Page<span class="sub-arrow"><i
                                        class="fa fa-angle-right"></i></span></a>
                                <ul class="nav-sub-childmenu submenu-content">
                                    <li>
                                        <a class="{{ Request::routeIs('cms.about-page.section') ? 'active' : '' }}"
                                            href="{{ route('cms.about-page.section', ['section' => 'About Section']) }}">
                                                About Us
                                        </a>
                                    </li>
                                </ul>
                            </li>


                        </ul>
                    </li>

                    {{-- <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                            class="sidebar-link sidebar-title {{ Request::routeIs('category.*') ? 'active open' : ' ' }}"
                            href="javascript:void(0)"><i data-feather="box"></i><span>Category</span></a>
                        <ul class="sidebar-submenu">
                            <li><a class="{{ Request::routeIs('category.index') ? 'active' : ' ' }}"
                                    href="{{ route('category.index') }}">Category Details</a></li>
                        </ul>
                    </li>



                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                            class="sidebar-link sidebar-title {{ Request::routeIs('product.*') ? 'active open' : ' ' }}"
                            href="javascript:void(0)"><i data-feather="shopping-bag"></i><span>Products</span></a>
                        <ul class="sidebar-submenu">
                            <li><a class="{{ Request::routeIs('product.index') ? 'active' : ' ' }}"
                                    href="{{ route('product.index') }}">Product List</a></li>
                        </ul>
                    </li>


                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                            class="sidebar-link sidebar-title {{ Request::routeIs('contact.*') ? 'active open' : ' ' }}"
                            href="javascript:void(0)"><i data-feather="phone"></i><span>Contacts</span></a>
                        <ul class="sidebar-submenu">
                            <li><a class="{{ Request::routeIs('contact.index') ? 'active' : ' ' }}"
                                    href="{{ route('contact.index') }}">Contact List</a></li>
                        </ul>
                    </li>


                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                            class="sidebar-link sidebar-title {{ Request::routeIs('subscription.*') ? 'active open' : ' ' }}"
                            href="javascript:void(0)"><i data-feather="mail"></i><span>Subscriptions</span></a>
                        <ul class="sidebar-submenu">
                            <li><a class="{{ Request::routeIs('subscription.index') ? 'active' : ' ' }}"
                                    href="{{ route('subscription.index') }}">Subscription List</a></li>
                        </ul>
                    </li>


                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                            class="sidebar-link sidebar-title {{ Request::routeIs('social-links') ? 'active open' : ' ' }}"
                            href="javascript:void(0)"><i data-feather="zap"></i><span>Social</span></a>
                        <ul class="sidebar-submenu">
                            <li><a class="{{ Request::routeIs('social-links') ? 'active' : ' ' }}"
                                    href="{{ route('social-links') }}">Social Links</a></li>
                        </ul>
                    </li> --}}


                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                            class="sidebar-link sidebar-title {{ Request::routeIs('settings.*') ? 'active open' : '' }}"
                            href="javascript:void(0)"><i data-feather="settings"></i><span>Settings</span></a>
                        <ul class="sidebar-submenu">
                            <li><a class="{{ Request::routeIs('settings.profile') ? 'active' : '' }}"
                                    href="{{ route('settings.profile') }}">Profile Settings</a></li>
                            <li><a class="{{ Request::routeIs('settings.system.index') ? 'active' : ' ' }}"
                                    href="{{ route('settings.system.index') }}">System Settings</a></li>
                            <li><a class="{{ Request::routeIs('settings.mail') ? 'active' : ' ' }}"
                                    href="{{ route('settings.mail') }}">Mail Settings</a></li>
                            <li><a class="{{ Request::routeIs('settings.stripe.index') ? 'active' : ' ' }}"
                                    href="{{ route('settings.stripe.index') }}">Stripe Settings</a></li>
                            <li><a class="{{ Request::routeIs('settings.dynamic-page.index') || Request::routeIs('settings.dynamic-page.create') || Request::routeIs('settings.dynamic-page.edit') ? 'active' : ' ' }}"
                                    href="{{ route('settings.dynamic-page.index') }}">Dynamic Page Settings</a></li>
                            <li><a class="{{ Request::routeIs('settings.custom-script.*') ? 'active' : ' ' }}"
                                    href="{{ route('settings.custom-script.index') }}">Custom Script Settings</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
