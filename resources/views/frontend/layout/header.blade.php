<header id="header">
    <div class="overflow-background"></div>
    <div class="fixed-topbar" id="topbar">
    </div>
    <div class="header-firstline">
        <div class="container">
            <a href="#" class="header-logo">
                <img src="{{ frontend('images/logo.svg') }}" alt="Logo" />
            </a>
            <div class="header-user-access left d-none d-md-flex d-lg-none">
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
            </div>
            <div class="header-user-access">
                <div class="user-access-item access-selling d-none d-lg-block">
                    <button type="button" class="btn btn-brown">
                        Sell an item
                        <span class="access-item-inner">0</span>
                    </button>
                </div>
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
                @if (!Auth::check())
                <div class="user-access-item access-notification">
                    <button type="button" class="btn btn-icon" data-toggle="modal" data-target="#signinModal">
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
                @endif
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
                @if (!Auth::check())
                <div class="user-access-item access-signin d-none d-lg-block">
                    <button type="button" class="btn btn-icon" data-toggle="modal" id="btn-signin"
                        data-target="#signinModal">
                        Sign in
                    </button>
                </div>
                <div class="user-access-item access-signup d-none d-lg-block">
                    <button type="button" class="btn btn-icon" id="btn-signup" data-toggle="modal"
                        data-target="#signupModal">
                        Sign up
                    </button>
                </div>
                <div class="user-access-item access-user d-block d-lg-none">
                    <button type="button" class="btn btn-avatar" data-toggle="modal" data-target="#signinModal">
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
                @endif
            </div>
        </div>
    </div>
    <div class="header-secondline">
        <div class="container">
            <button type="button" class="header-button-close">
                <span></span>
            </button>
            <div class="header-searchbar">
                <div class="searchbar-desktop" id="searchbar-desktop-container">
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
        </div>
    </div>
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
</header>
<div id="signupModal" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <div class="modal-body">
                <div class="row mx-0">
                    <div class="col-md-6 px-0">
                        <div class="modal-visual-container">
                            <div class="visual-content">
                                <img src="{{ frontend('images/logo--white.svg') }}" alt="Logo">
                                <div class="visual-content-subtitle">AUTHENTICATED PRE OWNED LUXURY FASHION</div>
                                <div class="visual-content-tagline">Give your wardrobe a second life</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 px-0">
                        <div class="modal-action-container signup-container">
                            <h3 class="signup-title">Join our community</h3>
                            <p class="signup-discount">Get $20 off your first order</p>
                            <div class="signup-form">
                                <form action="">
                                    <input type="text" class="signup-email" placeholder="Email" spellcheck="false" />
                                    <span>* Required field</span>
                                    <button type="submit" class="signin-submit">
                                        Join the community
                                    </button>
                                </form>

                            </div>
                            <div class="signup-or">ou</div>
                            <div class="signup-facebook">
                                <button type="button" id="btn-signup-facebook" class="signup-button-facebook">
                                    <span class="signup-button-icon">
                                        <svg _ngcontent-c65="" class="svg_logo_facebook" viewBox="0 0 107.5 207.1">
                                            <g _ngcontent-c65="">
                                                <path _ngcontent-c65="" d="M88,34.4l19.5,0V1.4C104.2,1,92.6,0,79.1,0C51,0,31.8,17.2,31.8,48.7v27.1H0v36.8h31.8v94.5l38,0v-94.5h31.7l4.7-36.8H69.8
                                                            V52.3C69.8,41.6,72.8,34.4,88,34.4z" fill="currentColor">
                                                </path>
                                            </g>
                                        </svg>
                                    </span>
                                    <span class="signup-button-text">
                                        Sign up with Facebook
                                    </span>
                                </button>
                            </div>
                            <div class="signup-register-offer">
                                <div class="signup-checkbox">
                                    <input type="checkbox" id="checkbox-offer" class="d-none" />
                                    <label for="checkbox-offer">Receive offers and news from Vestiaire Collective
                                    </label>
                                </div>
                            </div>
                            <div class="signup-login">
                                <button type="button" class="signup-button-login">
                                    Log in
                                </button>
                            </div>
                            <div class="signup-recommended">
                                <span>Recommended by</span>
                                <span>
                                    <svg class="svg_logo_vogue" viewBox="0 0 61.23 15.9">
                                        <title>Vogue</title>
                                        <path
                                            d="M54.2,0.68H56a4.23,4.23,0,0,1,4.21,2.61,6.11,6.11,0,0,1,.55,2.64,0.09,0.09,0,0,0,.11,0V0.52h-14a0.25,0.25,0,0,0,0,.07,0.1,0.1,0,0,0,0,.09H48.4c0.11,0,.16,0,0.16.09V11.69a3.63,3.63,0,0,1-1.31,3.05,4.19,4.19,0,0,1-2.56.87,2.84,2.84,0,0,1-2.29-.92,3.34,3.34,0,0,1-.75-2.24V0.89c0-.16.11-0.23,0.35-0.21h1.17a0.19,0.19,0,0,0,0-.16h-5.5a0.11,0.11,0,0,0,0,.07,0.08,0.08,0,0,0,0,.09h1.17a0.22,0.22,0,0,1,.28.2V11c0,3.18,1.85,4.76,5.55,4.74h0a4.29,4.29,0,0,0,2.64-.91,3.8,3.8,0,0,0,1.37-3.18V0.77c0-.07.05-0.11,0.16-0.09h2.43a0.13,0.13,0,0,1,.18.09V15.2c0,0.05-.05.09-0.18,0.09h-1.1s0,0.05,0,.09a0.4,0.4,0,0,0,0,.07h11V9.64l-0.07,0-0.07,0a6.76,6.76,0,0,1-.6,2.84,4.57,4.57,0,0,1-4.54,2.79H54.2c-0.12,0-.18-0.05-0.18-0.11V7.89c0-.07.05-0.11,0.18-0.09h0.53a2.43,2.43,0,0,1,2.4,1.47,4,4,0,0,1,.37,1.53,0,0,0,1,0,.07,0V4.69l-0.05,0a0.09,0.09,0,0,0-.07,0,3,3,0,0,1-.25,1.47,2.36,2.36,0,0,1-2.4,1.47H54.2c-0.12,0-.18,0-0.18-0.11V0.77C54,0.7,54.07.66,54.2,0.68Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M4.31,0.68h1.1a0.19,0.19,0,0,0,0-.09,0.25,0.25,0,0,0,0-.07H0A0.1,0.1,0,0,0,0,.61,0.07,0.07,0,0,0,0,.68h1.3a0.15,0.15,0,0,1,.14,0,0.37,0.37,0,0,1,.11.21c0.07,0.21.73,2,2,5.43q2.18,5.86,3.28,9.05L6.9,15.52C10,5.85,11.57,1,11.59.93a0.29,0.29,0,0,1,.07-0.2A0.53,0.53,0,0,1,11.94.68H13a0.19,0.19,0,0,0,0-.16H10.12a0.19,0.19,0,0,0,0,.16h1.21a0.12,0.12,0,0,1,.12.14L11.39,1S10.26,4.5,8,11.44a0.29,0.29,0,0,1-.12-0.21C5.36,4.32,4.1.86,4.08,0.84S4.1,0.66,4.31.68Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M0.94,1.89A0.45,0.45,0,0,0,1,1.59,0.4,0.4,0,0,0,.94,1.3a0.39,0.39,0,0,0-.3-0.12,0.35,0.35,0,0,0-.28.12,0.35,0.35,0,0,0-.12.28,0.39,0.39,0,0,0,.12.3A0.4,0.4,0,0,0,.64,2,0.45,0.45,0,0,0,.94,1.89ZM1,1.59A0.36,0.36,0,0,1,.64,2,0.39,0.39,0,0,1,.37,1.85,0.29,0.29,0,0,1,.28,1.59,0.33,0.33,0,0,1,.37,1.32,0.31,0.31,0,0,1,.64,1.23a0.29,0.29,0,0,1,.27.09A0.43,0.43,0,0,1,1,1.59Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M0.69,1.6A0.09,0.09,0,0,0,.8,1.5c0-.09,0-0.12-0.14-0.12H0.51V1.82h0V1.6H0.64L0.78,1.82h0Zm-0.07,0H0.53V1.41H0.66a0.09,0.09,0,0,1,.11.09C0.76,1.55.73,1.59,0.62,1.59Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M20.2,0.75A5.23,5.23,0,0,0,17.82.17a4.78,4.78,0,0,0-2.4.62,6.7,6.7,0,0,0-2.09,1.69,8.55,8.55,0,0,0-2,5.43,8.74,8.74,0,0,0,.53,3,8.08,8.08,0,0,0,1.4,2.47,6.57,6.57,0,0,0,2.06,1.67,5.28,5.28,0,0,0,2.45.62,5.13,5.13,0,0,0,2.36-.6,7.42,7.42,0,0,0,2.09-1.67,8.47,8.47,0,0,0,1.51-2.48,8,8,0,0,0,.59-3,7.88,7.88,0,0,0-2-5.54A6.52,6.52,0,0,0,20.2.75Zm0.69,1.81a15.63,15.63,0,0,1,.71,5.27,16.48,16.48,0,0,1-.71,5.43,3.12,3.12,0,0,1-3.05,2.31,3.11,3.11,0,0,1-3.16-2.24,16.84,16.84,0,0,1-.62-5.5c0-5,1.24-7.56,3.74-7.56A3.16,3.16,0,0,1,20.89,2.56Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M36.2,0.13s-0.05,0-.09,0A0.21,0.21,0,0,0,36,.24a2.14,2.14,0,0,1-1,.62A1.81,1.81,0,0,1,34.09.75L33,0.36A4.07,4.07,0,0,0,31.62.1a3.77,3.77,0,0,0-2.06.59A6.73,6.73,0,0,0,27.63,2.4a9.15,9.15,0,0,0-1.46,2.52A8.78,8.78,0,0,0,25.59,8a8.45,8.45,0,0,0,1.76,5.43A6.28,6.28,0,0,0,29.23,15a4.78,4.78,0,0,0,2.24.66,3.93,3.93,0,0,0,1.7-.25l0.78-.34a8.07,8.07,0,0,1,1.21-.44,1.58,1.58,0,0,1,1.4.11,1.09,1.09,0,0,1,.51.69s0.07,0,.07,0V9.38c0-.07.05-0.11,0.16-0.09h1.15a0.78,0.78,0,0,0,0-.09s0-.05,0-0.07H33.22a0.13,0.13,0,0,0,0,.07,0.09,0.09,0,0,0,0,.07h1.22c0.16,0,.23,0,0.23.09v3.53a2.37,2.37,0,0,1-1.44,2.38,4.26,4.26,0,0,1-2,.27q-2.85-.32-2.89-7.67A16.13,16.13,0,0,1,29,2.44c0.55-1.54,1.49-2.27,2.79-2.2s2.54,0.92,3.41,2.59a9.1,9.1,0,0,1,.67,1.74l0.23,0.87c0.07,0,.11,0,0.11,0Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </span>
                                <span>
                                    <svg class="svg_logo_glamour" viewBox="0 0 65.04 14.86">
                                        <title>Glamour</title>
                                        <polygon fill="currentColor"
                                            points="12.46 0 9.5 0 9.5 14.63 15.25 14.63 15.25 11.99 12.44 11.99 12.46 0">
                                        </polygon>
                                        <path
                                            d="M22.06,0H19L15.54,14.63H18.1l0.71-3.2h3l0.57,3.2h2.91ZM19.17,9.15l1.16-5.52,1.19,5.5Z"
                                            fill="currentColor"></path>
                                        <polyline fill="currentColor"
                                            points="25.14 14.63 25.14 0 29.49 0 31.14 9.67 33.12 0 37.1 0 37.1 14.63 34.2 14.63 34.2 4.16 31.83 14.63 30.03 14.63 27.66 4.13 27.66 4.13 27.66 14.63">
                                        </polyline>
                                        <path
                                            d="M46.61,7.27c0-7.32-3.83-7.5-4.56-7.47S37.49,0,37.49,7.27c0,0-.36,8.11,4.56,7.65C47,15.39,46.61,7.27,46.61,7.27Zm-3.3,3.48s-0.21,1.59-1.23,1.62H42c-1,0-1.23-1.62-1.23-1.62-0.15-.48-0.09-5.85-0.09-5.85,0.1-2.13,1-2.46,1.35-2.51h0c0.33,0,1.25.38,1.35,2.51C43.4,4.91,43.46,10.27,43.31,10.75Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M51.61,12.43A1.36,1.36,0,0,0,53,10.81V0h2.82V9.82S56.5,15.16,51.73,15H51.25c-4.77.18-4.11-5.16-4.11-5.16V0H50V10.81a1.36,1.36,0,0,0,1.41,1.62h0.24Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M62.94,8.38A4.23,4.23,0,0,0,64.89,4.1,3.79,3.79,0,0,0,60.78,0H56.53V14.63h2.85V9h1L62,14.63h3ZM59.38,6.52V2.33s2.79-.6,2.58,2.28C62,4.61,62.19,6.94,59.38,6.52Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M6.5,5.15H8.87S9.32-.46,4.79-0.22c0,0-4.47-.15-4.77,6.8,0,0-.6,8.12,4.11,8.27A3.33,3.33,0,0,0,7.4,13l0.39,1.63H9V7H4.7V9.22H6.44S6.86,12.4,4.7,12.28c0,0-1.68.6-1.77-5,0,0-.15-5,2-5.13C4.94,2.18,6.74,2.21,6.5,5.15Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </span>
                            </div>
                            <div class="signup-learnmore">
                                <a href="#">Learn more about my data </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="signinModal" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <div class="modal-body">
                <div class="row mx-0">
                    <div class="col-md-6 px-0">
                        <div class="modal-visual-container">
                            <div class="visual-content">
                                <img src="{{ frontend('images/logo--white.svg') }}" alt="Logo">
                                <div class="visual-content-subtitle">AUTHENTICATED PRE OWNED LUXURY FASHION</div>
                                <div class="visual-content-tagline">Give your wardrobe a second life</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 px-0">
                        <div class="modal-action-container signin-container">
                            <h3 class="signin-title">Login</h3>
                            <div class="signin-form">
                                <form action="">
                                    <div class="form-group">
                                        <input type="text" class="signin-input" placeholder="Email*"
                                            spellcheck="false" />
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="signin-input" placeholder="Password*"
                                            spellcheck="false" />
                                    </div>
                                    <div class="form-group signin-options">
                                        <div class="signin-checkbox">
                                            <input type="checkbox" id="signin-checkbox" class="d-none" />
                                            <label for="signin-checkbox">Remember me </label>
                                        </div>
                                        <div class="signin-button-forgot">
                                            <button type="button" class="signin-forgot-password">
                                                Forgot password
                                            </button>
                                        </div>
                                    </div>
                                    <button type="submit" class="signin-submit">
                                        Login
                                    </button>
                                </form>
                                <div class="signin-or">or</div>
                                <div class="signin-facebook">
                                    <button type="button" id="btn-signin-facebook" class="signin-button-facebook">
                                        <span class="signin-button-icon">
                                            <svg _ngcontent-c65="" class="svg_logo_facebook" viewBox="0 0 107.5 207.1">
                                                <g _ngcontent-c65="">
                                                    <path _ngcontent-c65="" d="M88,34.4l19.5,0V1.4C104.2,1,92.6,0,79.1,0C51,0,31.8,17.2,31.8,48.7v27.1H0v36.8h31.8v94.5l38,0v-94.5h31.7l4.7-36.8H69.8
                                                            V52.3C69.8,41.6,72.8,34.4,88,34.4z" fill="currentColor">
                                                    </path>
                                                </g>
                                            </svg>
                                        </span>
                                        <span class="signin-button-text">
                                            Login in with Facebook
                                        </span>
                                    </button>
                                </div>
                                <div class="signin-register">
                                    <button type="button" class="signin-button-register">
                                        Log in
                                    </button>
                                </div>
                                <div class="signin-recommended">
                                    <span>Recommended by</span>
                                    <span>
                                        <svg class="svg_logo_vogue" viewBox="0 0 61.23 15.9">
                                            <title>Vogue</title>
                                            <path
                                                d="M54.2,0.68H56a4.23,4.23,0,0,1,4.21,2.61,6.11,6.11,0,0,1,.55,2.64,0.09,0.09,0,0,0,.11,0V0.52h-14a0.25,0.25,0,0,0,0,.07,0.1,0.1,0,0,0,0,.09H48.4c0.11,0,.16,0,0.16.09V11.69a3.63,3.63,0,0,1-1.31,3.05,4.19,4.19,0,0,1-2.56.87,2.84,2.84,0,0,1-2.29-.92,3.34,3.34,0,0,1-.75-2.24V0.89c0-.16.11-0.23,0.35-0.21h1.17a0.19,0.19,0,0,0,0-.16h-5.5a0.11,0.11,0,0,0,0,.07,0.08,0.08,0,0,0,0,.09h1.17a0.22,0.22,0,0,1,.28.2V11c0,3.18,1.85,4.76,5.55,4.74h0a4.29,4.29,0,0,0,2.64-.91,3.8,3.8,0,0,0,1.37-3.18V0.77c0-.07.05-0.11,0.16-0.09h2.43a0.13,0.13,0,0,1,.18.09V15.2c0,0.05-.05.09-0.18,0.09h-1.1s0,0.05,0,.09a0.4,0.4,0,0,0,0,.07h11V9.64l-0.07,0-0.07,0a6.76,6.76,0,0,1-.6,2.84,4.57,4.57,0,0,1-4.54,2.79H54.2c-0.12,0-.18-0.05-0.18-0.11V7.89c0-.07.05-0.11,0.18-0.09h0.53a2.43,2.43,0,0,1,2.4,1.47,4,4,0,0,1,.37,1.53,0,0,0,1,0,.07,0V4.69l-0.05,0a0.09,0.09,0,0,0-.07,0,3,3,0,0,1-.25,1.47,2.36,2.36,0,0,1-2.4,1.47H54.2c-0.12,0-.18,0-0.18-0.11V0.77C54,0.7,54.07.66,54.2,0.68Z"
                                                fill="currentColor"></path>
                                            <path
                                                d="M4.31,0.68h1.1a0.19,0.19,0,0,0,0-.09,0.25,0.25,0,0,0,0-.07H0A0.1,0.1,0,0,0,0,.61,0.07,0.07,0,0,0,0,.68h1.3a0.15,0.15,0,0,1,.14,0,0.37,0.37,0,0,1,.11.21c0.07,0.21.73,2,2,5.43q2.18,5.86,3.28,9.05L6.9,15.52C10,5.85,11.57,1,11.59.93a0.29,0.29,0,0,1,.07-0.2A0.53,0.53,0,0,1,11.94.68H13a0.19,0.19,0,0,0,0-.16H10.12a0.19,0.19,0,0,0,0,.16h1.21a0.12,0.12,0,0,1,.12.14L11.39,1S10.26,4.5,8,11.44a0.29,0.29,0,0,1-.12-0.21C5.36,4.32,4.1.86,4.08,0.84S4.1,0.66,4.31.68Z"
                                                fill="currentColor"></path>
                                            <path
                                                d="M0.94,1.89A0.45,0.45,0,0,0,1,1.59,0.4,0.4,0,0,0,.94,1.3a0.39,0.39,0,0,0-.3-0.12,0.35,0.35,0,0,0-.28.12,0.35,0.35,0,0,0-.12.28,0.39,0.39,0,0,0,.12.3A0.4,0.4,0,0,0,.64,2,0.45,0.45,0,0,0,.94,1.89ZM1,1.59A0.36,0.36,0,0,1,.64,2,0.39,0.39,0,0,1,.37,1.85,0.29,0.29,0,0,1,.28,1.59,0.33,0.33,0,0,1,.37,1.32,0.31,0.31,0,0,1,.64,1.23a0.29,0.29,0,0,1,.27.09A0.43,0.43,0,0,1,1,1.59Z"
                                                fill="currentColor"></path>
                                            <path
                                                d="M0.69,1.6A0.09,0.09,0,0,0,.8,1.5c0-.09,0-0.12-0.14-0.12H0.51V1.82h0V1.6H0.64L0.78,1.82h0Zm-0.07,0H0.53V1.41H0.66a0.09,0.09,0,0,1,.11.09C0.76,1.55.73,1.59,0.62,1.59Z"
                                                fill="currentColor"></path>
                                            <path
                                                d="M20.2,0.75A5.23,5.23,0,0,0,17.82.17a4.78,4.78,0,0,0-2.4.62,6.7,6.7,0,0,0-2.09,1.69,8.55,8.55,0,0,0-2,5.43,8.74,8.74,0,0,0,.53,3,8.08,8.08,0,0,0,1.4,2.47,6.57,6.57,0,0,0,2.06,1.67,5.28,5.28,0,0,0,2.45.62,5.13,5.13,0,0,0,2.36-.6,7.42,7.42,0,0,0,2.09-1.67,8.47,8.47,0,0,0,1.51-2.48,8,8,0,0,0,.59-3,7.88,7.88,0,0,0-2-5.54A6.52,6.52,0,0,0,20.2.75Zm0.69,1.81a15.63,15.63,0,0,1,.71,5.27,16.48,16.48,0,0,1-.71,5.43,3.12,3.12,0,0,1-3.05,2.31,3.11,3.11,0,0,1-3.16-2.24,16.84,16.84,0,0,1-.62-5.5c0-5,1.24-7.56,3.74-7.56A3.16,3.16,0,0,1,20.89,2.56Z"
                                                fill="currentColor"></path>
                                            <path
                                                d="M36.2,0.13s-0.05,0-.09,0A0.21,0.21,0,0,0,36,.24a2.14,2.14,0,0,1-1,.62A1.81,1.81,0,0,1,34.09.75L33,0.36A4.07,4.07,0,0,0,31.62.1a3.77,3.77,0,0,0-2.06.59A6.73,6.73,0,0,0,27.63,2.4a9.15,9.15,0,0,0-1.46,2.52A8.78,8.78,0,0,0,25.59,8a8.45,8.45,0,0,0,1.76,5.43A6.28,6.28,0,0,0,29.23,15a4.78,4.78,0,0,0,2.24.66,3.93,3.93,0,0,0,1.7-.25l0.78-.34a8.07,8.07,0,0,1,1.21-.44,1.58,1.58,0,0,1,1.4.11,1.09,1.09,0,0,1,.51.69s0.07,0,.07,0V9.38c0-.07.05-0.11,0.16-0.09h1.15a0.78,0.78,0,0,0,0-.09s0-.05,0-0.07H33.22a0.13,0.13,0,0,0,0,.07,0.09,0.09,0,0,0,0,.07h1.22c0.16,0,.23,0,0.23.09v3.53a2.37,2.37,0,0,1-1.44,2.38,4.26,4.26,0,0,1-2,.27q-2.85-.32-2.89-7.67A16.13,16.13,0,0,1,29,2.44c0.55-1.54,1.49-2.27,2.79-2.2s2.54,0.92,3.41,2.59a9.1,9.1,0,0,1,.67,1.74l0.23,0.87c0.07,0,.11,0,0.11,0Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg class="svg_logo_glamour" viewBox="0 0 65.04 14.86">
                                            <title>Glamour</title>
                                            <polygon fill="currentColor"
                                                points="12.46 0 9.5 0 9.5 14.63 15.25 14.63 15.25 11.99 12.44 11.99 12.46 0">
                                            </polygon>
                                            <path
                                                d="M22.06,0H19L15.54,14.63H18.1l0.71-3.2h3l0.57,3.2h2.91ZM19.17,9.15l1.16-5.52,1.19,5.5Z"
                                                fill="currentColor"></path>
                                            <polyline fill="currentColor"
                                                points="25.14 14.63 25.14 0 29.49 0 31.14 9.67 33.12 0 37.1 0 37.1 14.63 34.2 14.63 34.2 4.16 31.83 14.63 30.03 14.63 27.66 4.13 27.66 4.13 27.66 14.63">
                                            </polyline>
                                            <path
                                                d="M46.61,7.27c0-7.32-3.83-7.5-4.56-7.47S37.49,0,37.49,7.27c0,0-.36,8.11,4.56,7.65C47,15.39,46.61,7.27,46.61,7.27Zm-3.3,3.48s-0.21,1.59-1.23,1.62H42c-1,0-1.23-1.62-1.23-1.62-0.15-.48-0.09-5.85-0.09-5.85,0.1-2.13,1-2.46,1.35-2.51h0c0.33,0,1.25.38,1.35,2.51C43.4,4.91,43.46,10.27,43.31,10.75Z"
                                                fill="currentColor"></path>
                                            <path
                                                d="M51.61,12.43A1.36,1.36,0,0,0,53,10.81V0h2.82V9.82S56.5,15.16,51.73,15H51.25c-4.77.18-4.11-5.16-4.11-5.16V0H50V10.81a1.36,1.36,0,0,0,1.41,1.62h0.24Z"
                                                fill="currentColor"></path>
                                            <path
                                                d="M62.94,8.38A4.23,4.23,0,0,0,64.89,4.1,3.79,3.79,0,0,0,60.78,0H56.53V14.63h2.85V9h1L62,14.63h3ZM59.38,6.52V2.33s2.79-.6,2.58,2.28C62,4.61,62.19,6.94,59.38,6.52Z"
                                                fill="currentColor"></path>
                                            <path
                                                d="M6.5,5.15H8.87S9.32-.46,4.79-0.22c0,0-4.47-.15-4.77,6.8,0,0-.6,8.12,4.11,8.27A3.33,3.33,0,0,0,7.4,13l0.39,1.63H9V7H4.7V9.22H6.44S6.86,12.4,4.7,12.28c0,0-1.68.6-1.77-5,0,0-.15-5,2-5.13C4.94,2.18,6.74,2.21,6.5,5.15Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
