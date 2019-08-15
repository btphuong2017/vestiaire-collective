<div class="page-loader-body loader_show">
    <div class="cssload-loader cssload_loader_show">
        <div class="cssload-inner cssload-one"></div>
        <div class="cssload-inner cssload-two"></div>
        <div class="cssload-inner cssload-three"></div>
    </div>
</div>
<header id="header">
    {{-- Background Overflow --}}
    <div class="overflow-background"></div>
    {{-- Fixed Topbar --}}
    <div class="fixed-topbar" id="topbar">
        <div class="inner_fix_topbar">
            <div class="single_text_show">
                <span class="show_text">Don't have the App? Download it now!</span>
            </div>
            <div class="single_text_show">
                <!-- <span class="show_text"> Authenticated pre-owed luxury fashion</span> -->
            </div>
        </div>
    </div>
    {{-- Fixed Topbar --}}
    {{-- Header FirstLine --}}
    <div class="header-firstline">
        <div class="container">
            {{-- Header Logo --}}
            <a href="#" class="header-logo">
                <img src="{{ frontend('images/logo.svg') }}" alt="Logo" />
            </a>
            {{-- Header Logo --}}

            {{-- Header Accesses --}}
            <div class="header-user-access left d-none d-md-flex d-lg-none">
                {{-- User Access Buying --}}
                <div class="user-access-item access-buying">
                    <button type="button" class="btn btn-icon" id="btn-sidebar-menu">
                        <svg class="svg_buy" viewBox="0 0 38 28">
                            <g fill="none" fill-rule="evenodd" stroke="none" stroke-width="1">
                                <g transform="translate(0.000000, 1.000000)">
                                    <g fill="currentColor" transform="translate(0.000000, 5.000000)">
                                        <rect height="1.20000005" rx="0.600000024" width="7.48535156" x="0.5" y="0">
                                        </rect>
                                        <rect height="1.20000005" rx="0.600000024" width="7.48535156" x="0.5" y="7">
                                        </rect>
                                        <rect height="1.20000005" rx="0.600000024" width="7.48535156" x="0.5" y="14">
                                        </rect>
                                    </g>
                                    <ellipse cx="22.1521739" cy="11.3191489" rx="11.1521739" ry="11.3191489"
                                        stroke="currentColor" stroke-width="1.2"></ellipse>
                                    <rect fill="currentColor" height="1.20000005" rx="0.600000024"
                                        transform="translate(33.304348, 23.238298) rotate(45.000000) translate(-33.304348, -23.238298)"
                                        width="10.5652174" x="28.0217391" y="22.6382979"></rect>
                                </g>
                            </g>
                        </svg>
                        <span class="access-item-text">Buy</span>
                    </button>
                </div>
                {{-- User Access Buying --}}
                {{-- User Access Selling --}}
                <div class="user-access-item access-selling">
                    <button type="button" class="btn btn-icon">
                        <svg class="svg_sell" viewBox="0 0 27 27">
                            <g fill="none" fill-rule="evenodd" stroke="none" stroke-width="1">
                                <g id="Mobile/icons/nav/vendre" stroke="currentColor" stroke-width="1.2">
                                    <path
                                        d="M26.4,10.9354027 L26.4,0.607724784 L16.0623369,0.600181417 L0.848555226,15.818656 L11.1859426,26.1515355 L26.4,10.9354027 Z">
                                    </path>
                                    <path
                                        d="M22.1322275,7.13066005 L22.1316845,7.13120352 C21.5063882,7.75626549 20.4936118,7.75626549 19.8677725,7.13066005 C19.2440758,6.50559857 19.2440758,5.49365171 19.8688592,4.86750398 C20.4940304,4.24416534 21.5059696,4.24416534 22.1322275,4.86859024 C22.7559242,5.49365171 22.7559242,6.50559857 22.1322275,7.13066005 Z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                        <span class="access-item-text">Sell</span>
                    </button>
                </div>
                {{-- User access Selling --}}
            </div>
            <div class="header-user-access">
                {{-- User access Selling Button --}}
                <div class="user-access-item access-selling d-none d-lg-block">
                    <button type="button" class="btn btn-brown">
                        Sell an item
                        <span class="access-item-inner">0</span>
                    </button>
                </div>
                {{-- User access Selling Button --}}
                {{-- User access buying (Only Display Mobile) --}}
                <div class="user-access-item access-buying d-block d-md-none">
                    <button type="button" class="btn btn-icon" id="btn-sidebar-mobile">
                        <svg class="svg_buy" viewBox="0 0 38 28">
                            <g fill="none" fill-rule="evenodd" stroke="none" stroke-width="1">
                                <g transform="translate(0.000000, 1.000000)">
                                    <g fill="currentColor" transform="translate(0.000000, 5.000000)">
                                        <rect height="1.20000005" rx="0.600000024" width="7.48535156" x="0.5" y="0">
                                        </rect>
                                        <rect height="1.20000005" rx="0.600000024" width="7.48535156" x="0.5" y="7">
                                        </rect>
                                        <rect height="1.20000005" rx="0.600000024" width="7.48535156" x="0.5" y="14">
                                        </rect>
                                    </g>
                                    <ellipse cx="22.1521739" cy="11.3191489" rx="11.1521739" ry="11.3191489"
                                        stroke="currentColor" stroke-width="1.2"></ellipse>
                                    <rect fill="currentColor" height="1.20000005" rx="0.600000024"
                                        transform="translate(33.304348, 23.238298) rotate(45.000000) translate(-33.304348, -23.238298)"
                                        width="10.5652174" x="28.0217391" y="22.6382979"></rect>
                                </g>
                            </g>
                        </svg>
                        <span class="access-item-text">Buy</span>
                    </button>
                </div>
                {{-- User access buying (Only Display Mobile) --}}
                {{-- User access Selling (Only Display Mobile) --}}
                <div class="user-access-item access-selling d-block d-md-none">
                    <button type="button" class="btn btn-icon">
                        <svg class="svg_sell" viewBox="0 0 27 27">
                            <g fill="none" fill-rule="evenodd" stroke="none" stroke-width="1">
                                <g id="Mobile/icons/nav/vendre" stroke="currentColor" stroke-width="1.2">
                                    <path
                                        d="M26.4,10.9354027 L26.4,0.607724784 L16.0623369,0.600181417 L0.848555226,15.818656 L11.1859426,26.1515355 L26.4,10.9354027 Z">
                                    </path>
                                    <path
                                        d="M22.1322275,7.13066005 L22.1316845,7.13120352 C21.5063882,7.75626549 20.4936118,7.75626549 19.8677725,7.13066005 C19.2440758,6.50559857 19.2440758,5.49365171 19.8688592,4.86750398 C20.4940304,4.24416534 21.5059696,4.24416534 22.1322275,4.86859024 C22.7559242,5.49365171 22.7559242,6.50559857 22.1322275,7.13066005 Z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                        <span class="access-item-text">Sell</span>
                    </button>
                </div>
                {{-- User access Selling (Only Display Mobile) --}}

                {{-- Button Notification (When Guest No Login) --}}
                
                @if (!Auth::check())
                <div class="user-access-item access-notification">
                    <button type="button" class="btn btn-icon d-block d-lg-none" data-toggle="modal"
                        data-target="#authModal">
                        <svg class="svg_alert_bell" viewBox="0 0 22 26">
                            <g fill="none" fill-rule="evenodd" id="Symbols" stroke="none" stroke-width="1">
                                <g stroke="currentColor" stroke-width="1.2" transform="translate(-3.000000, -1.000000)">
                                    <g transform="translate(3.000000, 1.000000)">
                                        <path
                                            d="M0.867065186,21.65 L21.0968016,21.65 C21.5438117,20.6554921 21.4938953,19.7829954 20.965116,18.9660299 C19.4633701,16.6458283 18.6533466,13.9430926 18.5333335,10.8693129 C18.3748528,6.80951393 15.0376058,3.6 10.9747147,3.6 C6.82159151,3.6 3.39700375,6.85466803 3.18581186,11.0024252 C3.03270072,14.0099105 2.30556078,16.6575117 1.00145854,18.9378741 C0.517660611,19.7838465 0.468938893,20.6710111 0.867065186,21.65 Z">
                                        </path>
                                        <path
                                            d="M7.62389828,25.0260444 L14.3761017,25.0260444 C14.175782,23.3393018 12.7406441,22.0312744 11,22.0312744 C9.25935593,22.0312744 7.824218,23.3393018 7.62389828,25.0260444 Z"
                                            transform="translate(11.000000, 23.461819) rotate(-180.000000) translate(-11.000000, -23.461819) ">
                                        </path>
                                        <path
                                            d="M8.6,3.59413318 C9.45803858,3.40287337 10.3120082,3.31995562 11.160935,3.34594055 C11.9504962,3.37010834 12.6973099,3.48734447 13.4,3.698099 L13.4,3 C13.4,1.6745166 12.3254834,0.6 11,0.6 C9.6745166,0.6 8.6,1.6745166 8.6,3 L8.6,3.59413318 Z"
                                            transform="translate(11.000000, 2.276794) rotate(-360.000000) translate(-11.000000, -2.276794) ">
                                        </path>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <span class="access-item-text">Notifications</span>
                        <span class="access-item-inner">0</span>
                    </button>
                </div>

                {{-- Button Notification (When Guest No Login) --}}
                
                {{-- Button Me (When Guest No Login) (Not Show On Desktop) --}}
                <div class="user-access-item access-user d-block d-lg-none">
                    <button type="button" class="btn btn-avatar" data-toggle="modal" data-target="#authModal">
                        <img src="{{ frontend('images/missing_avatar.jpg') }}" alt="Missing Avatar" />
                        <svg id="svg_user" viewBox="0 0 28 28">
                            <g fill="none" fill-rule="evenodd" stroke="none" stroke-width="1">
                                <ellipse cx="14.0666667" cy="7.09677419" id="Oval-6" rx="6.06666667" ry="6.09677419"
                                    stroke="currentColor" stroke-width="1.2"></ellipse>
                                <path
                                    d="M1.6,27.4 L26.4,27.4 L26.4,25.5333333 C26.4,20.5995896 22.4004104,16.6 17.4666667,16.6 L10.5333333,16.6 C5.59958957,16.6 1.6,20.5995896 1.6,25.5333333 L1.6,27.4 Z"
                                    stroke="currentColor" stroke-width="1.2"></path>
                            </g>
                        </svg>
                        <span class="access-item-text">Me</span>
                    </button>
                </div>
                {{-- Button Me (When Guest No Login) (Not Show On Desktop) --}}

                @endif

                {{-- Button Notification (When User Login) --}}
                @if (Auth::check())
                <div class="user-access-item access-notification">
                    <button type="button" class="btn btn-icon btn-access-dropdown" data-open="false">
                        <svg class="svg_alert_bell" viewBox="0 0 22 26">
                            <g fill="none" fill-rule="evenodd" id="Symbols" stroke="none" stroke-width="1">
                                <g stroke="currentColor" stroke-width="1.2" transform="translate(-3.000000, -1.000000)">
                                    <g transform="translate(3.000000, 1.000000)">
                                        <path
                                            d="M0.867065186,21.65 L21.0968016,21.65 C21.5438117,20.6554921 21.4938953,19.7829954 20.965116,18.9660299 C19.4633701,16.6458283 18.6533466,13.9430926 18.5333335,10.8693129 C18.3748528,6.80951393 15.0376058,3.6 10.9747147,3.6 C6.82159151,3.6 3.39700375,6.85466803 3.18581186,11.0024252 C3.03270072,14.0099105 2.30556078,16.6575117 1.00145854,18.9378741 C0.517660611,19.7838465 0.468938893,20.6710111 0.867065186,21.65 Z">
                                        </path>
                                        <path
                                            d="M7.62389828,25.0260444 L14.3761017,25.0260444 C14.175782,23.3393018 12.7406441,22.0312744 11,22.0312744 C9.25935593,22.0312744 7.824218,23.3393018 7.62389828,25.0260444 Z"
                                            transform="translate(11.000000, 23.461819) rotate(-180.000000) translate(-11.000000, -23.461819) ">
                                        </path>
                                        <path
                                            d="M8.6,3.59413318 C9.45803858,3.40287337 10.3120082,3.31995562 11.160935,3.34594055 C11.9504962,3.37010834 12.6973099,3.48734447 13.4,3.698099 L13.4,3 C13.4,1.6745166 12.3254834,0.6 11,0.6 C9.6745166,0.6 8.6,1.6745166 8.6,3 L8.6,3.59413318 Z"
                                            transform="translate(11.000000, 2.276794) rotate(-360.000000) translate(-11.000000, -2.276794) ">
                                        </path>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <span class="access-item-text">Notifications</span>
                        <span class="access-item-inner active">5</span>
                    </button>
                    <div class="access-dropdown notifications p-0">
                        <span class="access-dropdown-arrow"></span>
                        <div class="access-dropdown-header">
                            <span class="access-dropdown-title">Notifications</span>
                            <button type="button" class="access-dropdown-close">
                                <span></span>
                            </button>
                        </div>
                        <ul class="access-dropdown-body notification-list">
                            <li class="notification">
                                <img class="notification-picture"
                                    src="{{ frontend('images/notification-picture.jpg') }}" alt="" />
                                <div class="notification-info">
                                    <p class="notification-text"><span class="notification-text-author">Vestiaire
                                            Collective Style</span> now follows your activity</p>
                                    <p class="notification-date">
                                        Wednesday, August 7, 2019
                                    </p>
                                </div>
                            </li>
                            <li class="notification">
                                <img class="notification-picture"
                                    src="{{ frontend('images/notification-picture.jpg') }}" alt="" />
                                <div class="notification-info">
                                    <p class="notification-text"><span class="notification-text-author">Vestiaire
                                            Collective Style</span> now follows your activity</p>
                                    <p class="notification-date">
                                        Wednesday, August 7, 2019
                                    </p>
                                </div>
                            </li>
                            <li class="notification">
                                <img class="notification-picture"
                                    src="{{ frontend('images/notification-picture.jpg') }}" alt="" />
                                <div class="notification-info">
                                    <p class="notification-text"><span class="notification-text-author">Vestiaire
                                            Collective Style</span> now follows your activity</p>
                                    <p class="notification-date">
                                        Wednesday, August 7, 2019
                                    </p>
                                </div>
                            </li>
                            <li class="notification">
                                <img class="notification-picture"
                                    src="{{ frontend('images/notification-picture.jpg') }}" alt="" />
                                <div class="notification-info">
                                    <p class="notification-text"><span class="notification-text-author">Vestiaire
                                            Collective Style</span> now follows your activity</p>
                                    <p class="notification-date">
                                        Wednesday, August 7, 2019
                                    </p>
                                </div>
                            </li>
                            <li class="notification">
                                <img class="notification-picture"
                                    src="{{ frontend('images/notification-picture.jpg') }}" alt="" />
                                <div class="notification-info">
                                    <p class="notification-text"><span class="notification-text-author">Vestiaire
                                            Collective Style</span> now follows your activity</p>
                                    <p class="notification-date">
                                        Wednesday, August 7, 2019
                                    </p>
                                </div>
                            </li>
                            <li class="notification">
                                <img class="notification-picture"
                                    src="{{ frontend('images/notification-picture.jpg') }}" alt="" />
                                <div class="notification-info">
                                    <p class="notification-text"><span class="notification-text-author">Vestiaire
                                            Collective Style</span> now follows your activity</p>
                                    <p class="notification-date">
                                        Wednesday, August 7, 2019
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                @endIf
                {{-- Button Notification (When User Login) --}}

                {{-- Button Favourite (When User Login) --}}
                @if (Auth::check())
                <div class="user-access-item access-favourite d-none d-lg-block">
                    <button type="button" class="btn btn-icon btn-access-dropdown" data-open="false">
                        <svg class="svg_star_new" viewBox="0 0 21 20">
                            <g fill="none" fill-rule="evenodd" stroke="none" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="1">
                                <g stroke="currentColor">
                                    <path
                                        d="M10.5105652,15.5140418 L3.70726448,20.3639401 L6.21745634,12.3949156 L-0.497406578,7.42329317 L7.85727799,7.34806351 L10.5105652,-0.574466451 L13.1638523,7.34806351 L21.5185369,7.42329317 L14.803674,12.3949156 L17.3138658,20.3639401 L10.5105652,15.5140418 Z"
                                        id="Star-2"></path>
                                </g>
                            </g>
                        </svg>
                        <span class="access-item-text">Notifications</span>
                        <span class="access-item-inner">0</span>
                    </button>
                    <div class="access-dropdown wishlist">
                        <span class="access-dropdown-arrow"></span>
                        <div class="access-dropdown-body">
                            <div class="wishlist-empty">
                                <svg class="svg_star--line" viewBox="0 0 103.7 99.3">
                                    <polygon class="svg_star__polygon" fill="none"
                                        points="52,2.1 63.8,38.4 102,38.4 71.1,60.9 82.9,97.2 52,74.8 21.1,97.2 32.9,60.9 2,38.4 40.2,38.4 "
                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-miterlimit="4" vector-effect="non-scaling-stroke"></polygon>
                                </svg>
                                <span>Your Wishlist is empty</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                {{-- Button Favourite (When User Login) --}}

                
                @if (Auth::check())
                {{-- Cart (When User Login) --}}
                <div class="user-access-item access-cart">
                    <button type="button" class="btn btn-icon btn-access-dropdown" data-open="false">
                        <svg class="svg_bag_new" viewBox="0 0 25 27">
                            <g fill="none" fill-rule="evenodd" stroke="none" stroke-width="1">
                                <g stroke="currentColor" stroke-width="1.0944">
                                    <path
                                        d="M1.36074368,26.4528 L24.1467489,26.4528 L22.2315653,8.01915729 C22.1446614,7.18270767 21.4397062,6.5472 20.5987542,6.5472 L4.90873838,6.5472 C4.06778639,6.5472 3.36283119,7.18270767 3.27592734,8.01915729 L1.36074368,26.4528 Z">
                                    </path>
                                    <path d="M3.36363636,12.1875 L21.9090909,12.1875" id="Line-2"
                                        stroke-linecap="square">
                                    </path>
                                    <path
                                        d="M7.72901818,6.5778 L17.5437091,6.5778 L17.5437091,5.45454545 C17.5437091,2.7442934 15.3466157,0.5472 12.6363636,0.5472 C9.92611158,0.5472 7.72901818,2.7442934 7.72901818,5.45454545 L7.72901818,6.5778 Z">
                                    </path>
                                    <path d="M7.72727273,12.1875 L7.72727273,14.8125" id="Line-3"
                                        stroke-linecap="square">
                                    </path>
                                    <path d="M17.5454545,12.1875 L17.5454545,14.8125" id="Line-3-Copy"
                                        stroke-linecap="square"></path>
                                </g>
                            </g>
                        </svg>
                        <span class="access-item-text">Basket</span>
                        <span class="access-item-inner">0</span>
                    </button>
                    <div class="access-dropdown shopping-basket">
                        <span class="access-dropdown-arrow"></span>
                        <div class="access-dropdown-header">
                            <span class="access-dropdown-title">Basket</span>
                            <button type="button" class="access-dropdown-close">
                                <span></span>
                            </button>
                        </div>
                        <div class="access-dropdown-body">
                            <div class="basket-empty">
                                <svg class="svg_bag_new" viewBox="0 0 25 27">
                                    <g fill="none" fill-rule="evenodd" stroke="none" stroke-width="1">
                                        <g stroke="currentColor" stroke-width="1.0944">
                                            <path
                                                d="M1.36074368,26.4528 L24.1467489,26.4528 L22.2315653,8.01915729 C22.1446614,7.18270767 21.4397062,6.5472 20.5987542,6.5472 L4.90873838,6.5472 C4.06778639,6.5472 3.36283119,7.18270767 3.27592734,8.01915729 L1.36074368,26.4528 Z">
                                            </path>
                                            <path d="M3.36363636,12.1875 L21.9090909,12.1875" id="Line-2"
                                                stroke-linecap="square"></path>
                                            <path
                                                d="M7.72901818,6.5778 L17.5437091,6.5778 L17.5437091,5.45454545 C17.5437091,2.7442934 15.3466157,0.5472 12.6363636,0.5472 C9.92611158,0.5472 7.72901818,2.7442934 7.72901818,5.45454545 L7.72901818,6.5778 Z">
                                            </path>
                                            <path d="M7.72727273,12.1875 L7.72727273,14.8125" id="Line-3"
                                                stroke-linecap="square"></path>
                                            <path d="M17.5454545,12.1875 L17.5454545,14.8125" id="Line-3-Copy"
                                                stroke-linecap="square"></path>
                                        </g>
                                    </g>
                                </svg>
                                <span>Your shopping basket is currently empty... but not for long!</span>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Cart (When User Login) --}}

                @else

                {{-- Cart (When Guest No Login) (Open Modal Signin) --}}
                <div class="user-access-item access-cart">
                    <button type="button" class="btn btn-icon" data-toggle="modal" data-target="#authModal">
                        <svg class="svg_bag_new" viewBox="0 0 25 27">
                            <g fill="none" fill-rule="evenodd" stroke="none" stroke-width="1">
                                <g stroke="currentColor" stroke-width="1.0944">
                                    <path
                                        d="M1.36074368,26.4528 L24.1467489,26.4528 L22.2315653,8.01915729 C22.1446614,7.18270767 21.4397062,6.5472 20.5987542,6.5472 L4.90873838,6.5472 C4.06778639,6.5472 3.36283119,7.18270767 3.27592734,8.01915729 L1.36074368,26.4528 Z">
                                    </path>
                                    <path d="M3.36363636,12.1875 L21.9090909,12.1875" id="Line-2"
                                        stroke-linecap="square">
                                    </path>
                                    <path
                                        d="M7.72901818,6.5778 L17.5437091,6.5778 L17.5437091,5.45454545 C17.5437091,2.7442934 15.3466157,0.5472 12.6363636,0.5472 C9.92611158,0.5472 7.72901818,2.7442934 7.72901818,5.45454545 L7.72901818,6.5778 Z">
                                    </path>
                                    <path d="M7.72727273,12.1875 L7.72727273,14.8125" id="Line-3"
                                        stroke-linecap="square">
                                    </path>
                                    <path d="M17.5454545,12.1875 L17.5454545,14.8125" id="Line-3-Copy"
                                        stroke-linecap="square"></path>
                                </g>
                            </g>
                        </svg>
                        <span class="access-item-text">Basket</span>
                        <span class="access-item-inner">0</span>
                    </button>
                </div>
                {{-- Cart (When Guest No Login) (Open Modal Signin) --}}

                @endif

                {{-- User Profile (When User Login) (Only Show When User Login) --}}
                @if (Auth::check())
                <div class="user-access-item access-user">
                    <button type="button" class="btn btn-avatar btn-access-dropdown" data-open="false">
                        <img src="{{ frontend('images/missing_avatar.jpg') }}" alt="Missing Avatar" />
                        <svg id="svg_user" viewBox="0 0 28 28">
                            <g fill="none" fill-rule="evenodd" stroke="none" stroke-width="1">
                                <ellipse cx="14.0666667" cy="7.09677419" id="Oval-6" rx="6.06666667" ry="6.09677419"
                                    stroke="currentColor" stroke-width="1.2"></ellipse>
                                <path
                                    d="M1.6,27.4 L26.4,27.4 L26.4,25.5333333 C26.4,20.5995896 22.4004104,16.6 17.4666667,16.6 L10.5333333,16.6 C5.59958957,16.6 1.6,20.5995896 1.6,25.5333333 L1.6,27.4 Z"
                                    stroke="currentColor" stroke-width="1.2"></path>
                            </g>
                        </svg>
                        <span class="access-item-text">Me</span>
                    </button>
                    <div class="access-dropdown user-info">
                        <span class="access-dropdown-arrow"></span>
                        <div class="access-dropdown-header">
                            <div class="user-info-avatar">
                                <img src="{{ frontend('images/missing_avatar.jpg') }}" alt="User Avatar" />
                            </div>
                            <div class="user-info-profile">
                                <p class="user-info-name">Thanh</p>
                                <a href="#" class="user-info-link">See My Profile</a>
                            </div>
                            <button type="button" class="access-dropdown-close">
                                <span></span>
                            </button>
                        </div>
                        <div class="access-dropdown-body">

                            <div class="user-info-menu">
                                <a href="#" class="user-info-menu-item">My item for sale</a>
                                <a href="#" class="user-info-menu-item">My orders</a>
                                <a href="#" class="user-info-menu-item">My Wishlist</a>
                            </div>
                            <div class="user-info-account border-bottom">
                                <a href="#" class="user-info-link">See my account</a>
                            </div>
                            <div class="user-info-help border-bottom">
                                <a href="#" class="user-info-help-link">Help Center</a>
                            </div>
                            <div class="user-info-logout">
                                <a href="#" class="user-info-logout-link">Log out</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                {{-- User Profile (When User Login) (Only Show When User Login) --}}

                {{-- Signin - Signup (When Guest No Login) --}}
                @if (!Auth::check())
                <div class="user-access-item access-signin d-none d-lg-block">
                    <button type="button" class="btn btn-icon" data-toggle="modal" id="btn-signin"
                        data-target="#authModal">
                        Sign in
                    </button>
                </div>
                <div class="user-access-item access-signup d-none d-lg-block">
                    <button type="button" class="btn btn-icon" id="btn-signup" data-toggle="modal"
                        data-target="#authModal" data-action="sign-up">
                        Sign up
                    </button>
                </div>
                @endif
                {{-- Signin - Signup (When Guest No Login) --}}
            </div>
            {{-- Header Accesses --}}
        </div>
    </div>
    <div class="header-secondline">
        <div class="container">
            <button type="button" class="header-button-close">
                <span></span>
            </button>
            <div class="header-searchbar">
                <div class="searchbar-desktop" id="searchbar-desktop-container">
                    {{-- Search Form --}}
                    <div class="searchbar-form-area">
                        <form action="">
                            <div class="searchbar-input">
                                <input type="text" id="header-search" placeholder="Search by brand, item..."
                                    spellcheck="false" name="headerSearch" />
                                <svg class="svg_magnifying_glass" viewBox="0 0 24 25">
                                    <g fill="none" fill-rule="evenodd" stroke="none" stroke-width="1">
                                        <g transform="translate(-70.000000, -182.000000)">
                                            <g transform="translate(19.000000, 110.000000)">
                                                <g transform="translate(0.000000, 71.000000)">
                                                    <g transform="translate(52.000000, 2.000000)">
                                                        <g id="Mobile/icon/search/black">
                                                            <ellipse cx="9.5" cy="9.70212766" rx="9.5" ry="9.70212766"
                                                                stroke="currentColor" stroke-width="1.5"></ellipse>
                                                            <rect fill="currentColor" fill-rule="evenodd"
                                                                height="1.53191489" rx="0.765957447"
                                                                transform="translate(19.000000, 20.170213) rotate(45.000000) translate(-19.000000, -20.170213) "
                                                                width="9" x="14.5" y="19.4042553"></rect>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </form>
                        <button type="button" class="searchbar-close-button" id="searchbar-close-btn">
                            <span class="close-icon"></span>
                        </button>
                    </div>
                    {{-- Search Form  --}}
                    {{-- Search Suggestion and Search Recent Searches --}}
                    <div class="searchbar-suggestion">
                        <div class="suggestion-recent">
                            <div class="text-uppercase suggestion-title">
                                Recent Searches
                            </div>
                            <ul class="suggestion-list">
                                <li class="suggestion-item">
                                    <a href="#">
                                        <span class="suggestion-item-text">chanel</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="suggestion-popular">
                            <div class="text-uppercase suggestion-title">
                                Popular Searches
                            </div>
                            <ul class="suggestion-list">
                                <li class="suggestion-item">
                                    <a href="#">
                                        <span class="suggestion-item-text">chanel</span>
                                        <span class="suggestion-item-num">(104639)</span>
                                    </a>
                                </li>
                                <li class="suggestion-item">
                                    <a href="#">
                                        <span class="suggestion-item-text">chanel</span>
                                        <span class="suggestion-item-num">(104639)</span>
                                    </a>
                                </li>
                                <li class="suggestion-item">
                                    <a href="#">
                                        <span class="suggestion-item-text">chanel</span>
                                        <span class="suggestion-item-num">(104639)</span>
                                    </a>
                                </li>
                                <li class="suggestion-item">
                                    <a href="#">
                                        <span class="suggestion-item-text">chanel</span>
                                        <span class="suggestion-item-num">(104639)</span>
                                    </a>
                                </li>
                                <li class="suggestion-item">
                                    <a href="#">
                                        <span class="suggestion-item-text">chanel</span>
                                        <span class="suggestion-item-num">(104639)</span>
                                    </a>
                                </li>
                                <li class="suggestion-item">
                                    <a href="#">
                                        <span class="suggestion-item-text">chanel</span>
                                        <span class="suggestion-item-num">(104639)</span>
                                    </a>
                                </li>
                                <li class="suggestion-item">
                                    <a href="#">
                                        <span class="suggestion-item-text">chanel</span>
                                        <span class="suggestion-item-num">(104639)</span>
                                    </a>
                                </li>
                                <li class="suggestion-item">
                                    <a href="#">
                                        <span class="suggestion-item-text">chanel</span>
                                        <span class="suggestion-item-num">(104639)</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    {{-- Search Suggestion and Search Recent Searches --}}
                </div>
                <div class="searchbar-mobile">
                    <button type="button" class="btn searchbar-mobile-button" id="btn-searchbar-mobile">
                        <svg class="svg_magnifying_glass" viewBox="0 0 24 25">
                            <g fill="none" fill-rule="evenodd" stroke="none" stroke-width="1">
                                <g transform="translate(-70.000000, -182.000000)">
                                    <g transform="translate(19.000000, 110.000000)">
                                        <g transform="translate(0.000000, 71.000000)">
                                            <g transform="translate(52.000000, 2.000000)">
                                                <g id="Mobile/icon/search/black">
                                                    <ellipse cx="9.5" cy="9.70212766" rx="9.5" ry="9.70212766"
                                                        stroke="currentColor" stroke-width="1.5"></ellipse>
                                                    <rect fill="currentColor" fill-rule="evenodd" height="1.53191489"
                                                        rx="0.765957447"
                                                        transform="translate(19.000000, 20.170213) rotate(45.000000) translate(-19.000000, -20.170213) "
                                                        width="9" x="14.5" y="19.4042553"></rect>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <span>Search by brand, item</span>
                    </button>
                </div>
            </div>
            {{-- Main Nav --}}
            <nav class="header-nav">
                <ul class="main-nav" id="main-nav">
                    <li class="nav-item just-in">
                        <a href="#">
                            <span>Just in</span>
                        </a>
                        <ul class="sub-nav">

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#">
                            <span>Designers</span>
                        </a>
                        <ul class="sub-nav">
                            <li class="sub-nav-item">
                                <a href="#" class="sub-nav-title">Title</a>
                                <ul class="child-nav">
                                    <li class="child-nav-item">
                                        <a href="#">
                                            See all
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 1
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 2
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 3
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 4
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 5
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 6
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sub-nav-item">
                                <a href="#" class="sub-nav-title">Title</a>
                                <ul class="child-nav">
                                    <li class="child-nav-item">
                                        <a href="#">
                                            See all
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 1
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 2
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 3
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 4
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 5
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 6
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sub-nav-item">
                                <a href="#" class="sub-nav-title">Title</a>
                                <ul class="child-nav">
                                    <li class="child-nav-item">
                                        <a href="#">
                                            See all
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 1
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 2
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 3
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 4
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 5
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 6
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#">
                            <span>Women</span>
                        </a>
                        <ul class="sub-nav">
                            <li class="sub-nav-item">
                                <a href="#" class="sub-nav-title">Title</a>
                                <ul class="child-nav">
                                    <li class="child-nav-item">
                                        <a href="#">
                                            See all
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 1
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 2
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 3
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 4
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 5
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 6
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sub-nav-item">
                                <a href="#" class="sub-nav-title">Title</a>
                                <ul class="child-nav">
                                    <li class="child-nav-item">
                                        <a href="#">
                                            See all
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 1
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 2
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 3
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 4
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 5
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 6
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sub-nav-item">
                                <a href="#" class="sub-nav-title">Title</a>
                                <ul class="child-nav">
                                    <li class="child-nav-item">
                                        <a href="#">
                                            See all
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 1
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 2
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 3
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 4
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 5
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 6
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#">
                            <span>Men</span>
                        </a>
                        <ul class="sub-nav">
                            <li class="sub-nav-item">
                                <a href="#" class="sub-nav-title">Title</a>
                                <ul class="child-nav">
                                    <li class="child-nav-item">
                                        <a href="#">
                                            See all
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 1
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 2
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 3
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 4
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 5
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 6
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sub-nav-item">
                                <a href="#" class="sub-nav-title">Title</a>
                                <ul class="child-nav">
                                    <li class="child-nav-item">
                                        <a href="#">
                                            See all
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 1
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 2
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 3
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 4
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 5
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 6
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sub-nav-item">
                                <a href="#" class="sub-nav-title">Title</a>
                                <ul class="child-nav">
                                    <li class="child-nav-item">
                                        <a href="#">
                                            See all
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 1
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 2
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 3
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 4
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 5
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 6
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#">
                            <span>We love</span>
                        </a>
                        <ul class="sub-nav">
                            <li class="sub-nav-item">
                                <a href="#" class="sub-nav-title">Title</a>
                                <ul class="child-nav">
                                    <li class="child-nav-item">
                                        <a href="#">
                                            See all
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 1
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 2
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 3
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 4
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 5
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 6
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sub-nav-item">
                                <a href="#" class="sub-nav-title">Title</a>
                                <ul class="child-nav">
                                    <li class="child-nav-item">
                                        <a href="#">
                                            See all
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 1
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 2
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 3
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 4
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 5
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 6
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sub-nav-item">
                                <a href="#" class="sub-nav-title">Title</a>
                                <ul class="child-nav">
                                    <li class="child-nav-item">
                                        <a href="#">
                                            See all
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 1
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 2
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 3
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 4
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 5
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 6
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#">
                            <span>Vintage</span>
                        </a>
                        <ul class="sub-nav">
                            <li class="sub-nav-item">
                                <a href="#" class="sub-nav-title">Title</a>
                                <ul class="child-nav">
                                    <li class="child-nav-item">
                                        <a href="#">
                                            See all
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 1
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 2
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 3
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 4
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 5
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 6
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sub-nav-item">
                                <a href="#" class="sub-nav-title">Title</a>
                                <ul class="child-nav">
                                    <li class="child-nav-item">
                                        <a href="#">
                                            See all
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 1
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 2
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 3
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 4
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 5
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 6
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sub-nav-item">
                                <a href="#" class="sub-nav-title">Title</a>
                                <ul class="child-nav">
                                    <li class="child-nav-item">
                                        <a href="#">
                                            See all
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 1
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 2
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 3
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 4
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 5
                                        </a>
                                    </li>
                                    <li class="child-nav-item">
                                        <a href="#">
                                            Link 6
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#">
                            <span>Bags</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#">
                            <span>Watches and Jewelry</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#">
                            <span>Lifestyle</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#">
                            <span>Ready To Ship</span>
                        </a>
                    </li>
                    <span class="nav-item-underline"></span>
                </ul>
            </nav>
            {{-- Main Nav --}}
        </div>
    </div>
    {{-- Search Bar Mobile --}}
    <div class="searchbar-mobile-container" id="searchbar-mobile-container">
        <div class="searchbar-form">
            <button type="button" class="searchbar-button-close">
                <span></span>
            </button>
            <input type="text" class="searchbar-input" placeholder="Search by brand, item..." />
        </div>
        <div class="searchbar-suggestion">
            <div class="suggestion-popular">
                <div class="suggestion-title">
                    Popular Search
                </div>
                <ul class="suggestion-list">
                    <li class="suggestion-item">
                        <a href="#" class="suggestion-item-link">
                            <span class="suggestion-item-text">channel</span>
                            <span class="suggestion-item-num">(104737)</span>
                        </a>
                    </li>
                    <li class="suggestion-item">
                        <a href="#" class="suggestion-item-link">
                            <span class="suggestion-item-text">channel</span>
                            <span class="suggestion-item-num">(104737)</span>
                        </a>
                    </li>
                    <li class="suggestion-item">
                        <a href="#" class="suggestion-item-link">
                            <span class="suggestion-item-text">channel</span>
                            <span class="suggestion-item-num">(104737)</span>
                        </a>
                    </li>
                    <li class="suggestion-item">
                        <a href="#" class="suggestion-item-link">
                            <span class="suggestion-item-text">channel</span>
                            <span class="suggestion-item-num">(104737)</span>
                        </a>
                    </li>
                    <li class="suggestion-item">
                        <a href="#" class="suggestion-item-link">
                            <span class="suggestion-item-text">channel</span>
                            <span class="suggestion-item-num">(104737)</span>
                        </a>
                    </li>
                    <li class="suggestion-item">
                        <a href="#" class="suggestion-item-link">
                            <span class="suggestion-item-text">channel</span>
                            <span class="suggestion-item-num">(104737)</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    {{-- Search Bar Mobile --}}
</header>
