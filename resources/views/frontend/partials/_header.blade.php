<!-- Offcanvas -->
<div class="mobile-offcanvas">
    <div class="mobile-offcanvas__close">&times;</div>
    <div class="mobile-offcanvas-inner">
        <div class="offcanvas-logo">
            <a href="{{route('home')}}"><img src="{{asset('assets/frontend')}}/img/logo.png" alt=""/></a>
        </div>
        <nav class="offcanvas-nav">
            <ul class="offcanvas-nav-parent">
                <li class="active"><a href="#">How it Work</a></li>
                <li><a href="#">Shop</a></li>
                <li><a href="#">About</a></li>
                <li><a href="{{route('frontend.user.login')}}">Log in</a></li>
                <li><a href="{{route('frontend.user.registration')}}">Sign Up </a></li>
            </ul>
        </nav>
    </div>
</div>
<!-- Offcanvas End -->

<!-- Header -->
<header class="header">
    <div class="header__container container">
        <div class="header__logo">
            <a href="{{route('home')}}"><img src="{{asset('assets/frontend')}}/img/logo.png" alt=""/></a>
        </div>
        <div class="hamburger" id="hamburger-1">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </div>

        <div class="header__nav u-flex u-flex--item-center">
            <ul class="header__nav__main u-flex u-flex--items-center">

                <li>
                    <a href="{{route('frontend.how.we.work',['type'=>2])}}"> {{languageGet()=='en'?'How it Work':'تسجيل الدخول'}}</a>
                </li>

                <li><a href="{{route('shop.list')}}"> {{languageGet()=='en'?'Shop':'محل'}}</a></li>
                <li><a href="{{route('frontend.about.ous')}}"> {{languageGet()=='en'?'About us':'معلومات عنا'}}</a></li>
                @if(Auth::user())
                <li>
                    <a href="{{route('shop.product.wishlist')}}"> {{languageGet()=='en'?'Wish List':'قائمة الرغبات'}}</a>
                </li>
                @endif


                @if(\Illuminate\Support\Facades\Auth::user() ||Auth::guard('designer')->user())
                    <li><a href="{{route('all.chat.list')}}"> {{languageGet()=='en'?'Chat':'محادثة'}}</a>
                        <span class="cat-item">0</span>
                    </li>
                @endif
                <li>
                    <a @if(Auth::check()) href="{{route('user.cart.details')}}" @else onclick="firstLogin()"
                       @endif class="cart-icon">
        <span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11.64 12.5">
                <defs>
                    <style>
                        .cls-1 {
                            fill: #e28c71;
                        }

                        .cls-2,
                        .cls-3 {
                            isolation: isolate;
                        }

                        .cls-3 {
                            font-size: 5.18px;
                            fill: #fff;
                            font-family: Poppins-Bold, Poppins;
                            font-weight: 700;
                        }
                    </style>
                </defs>
                <g id="Layer_2" data-name="Layer 2">
                    <g id="Layer_1-2" data-name="Layer 1">
                        <g id="Buy">
                            <g id="_004-paper-bag" data-name=" 004-paper-bag">
                                <g id="Bag">
                                    <g id="Group_97" data-name="Group 97">
                                        <path id="Path_261" data-name="Path 261" class="cls-1"
                                              d="M7.69,2.63a.3.3,0,0,0-.3-.27H5.91V1.77a1.77,1.77,0,0,0-3.54,0v.59H.89a.31.31,0,0,0-.3.27L0,9.14a.31.31,0,0,0,.27.32H8a.3.3,0,0,0,.3-.3v0ZM3,1.77a1.18,1.18,0,0,1,2.36,0v.59H3ZM.62,8.87,1.16,3H2.37v.68a.58.58,0,0,0-.22.8.59.59,0,1,0,1-.59A.53.53,0,0,0,3,3.63V3H5.32v.68a.59.59,0,1,0,.59,1,.6.6,0,0,0,.22-.81.56.56,0,0,0-.22-.21V3H7.12l.53,5.92Z"/>
                                    </g>
                                </g>
                            </g>
                            <circle id="Ellipse_23" data-name="Ellipse 23" class="cls-1" cx="7.96" cy="7.5" r="3.68"/>
                            <g id="_10" data-name=" 10" class="cls-2">
                                <text class="cls-3" transform="translate(6.52 9.35)">
                                    {{Cart::count()}}
                                </text>
                            </g>
                        </g>
                    </g>
                </g>
            </svg>
        </span>
                    </a>
                </li>
                @if(\Illuminate\Support\Facades\Auth::user() ||Auth::guard('designer')->user())
                    @if(\Illuminate\Support\Facades\Auth::user() )

                        <li>
                            <label class="custom-dropdown profile-header">

                                <div class="dd-button">
                                    <!-- {{\Illuminate\Support\Facades\Auth::user()->name}} -->
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink" width="17" height="17"
                                         viewBox="0 0 17 17">
                                        <g></g>
                                        <path
                                            d="M17 16.488c-0.063-2.687-2.778-4.999-6.521-5.609v-1.374c0.492-0.473 0.842-1.207 1.071-1.833 0.332-0.166 0.624-0.536 0.794-1.033 0.238-0.688 0.146-1.323-0.206-1.629 0.028-0.238 0.046-0.481 0.015-0.723-0.079-0.663 0.065-1.038 0.194-1.368 0.106-0.277 0.229-0.591 0.106-0.945-0.442-1.273-1.727-1.974-3.618-1.974l-0.264 0.005c-1.313 0.047-1.707 0.6-1.971 1.115-0.033 0.062-0.077 0.146-0.077 0.151-1.712 0.153-1.697 1.569-1.684 2.707l0.003 0.369c0 0.205 0.009 0.419 0.026 0.639-0.425 0.3-0.504 1.005-0.179 1.737 0.185 0.415 0.452 0.729 0.749 0.892 0.243 0.674 0.625 1.47 1.179 1.965v1.283c-3.798 0.589-6.554 2.907-6.617 5.625l-0.012 0.512h17.023l-0.011-0.512zM1.054 16c0.392-2.094 2.859-3.821 6.122-4.204l0.441-0.052v-2.666l-0.216-0.15c-0.393-0.272-0.791-0.947-1.090-1.851l-0.083-0.281-0.294-0.051c-0.053-0.019-0.208-0.153-0.33-0.428-0.075-0.168-0.104-0.312-0.112-0.415l0.51 0.143-0.096-0.749c-0.042-0.33-0.064-0.651-0.064-0.95l-0.003-0.38c-0.015-1.341 0.051-1.634 0.773-1.699 0.545-0.048 0.752-0.449 0.876-0.689 0.15-0.292 0.28-0.543 1.12-0.574l0.227-0.004c0.829 0 2.279 0.169 2.669 1.282 0 0.043-0.052 0.177-0.090 0.275-0.145 0.374-0.364 0.939-0.254 1.853 0.024 0.188-0.007 0.424-0.040 0.675l-0.089 0.805 0.441-0.048c0.008 0.104-0.004 0.269-0.075 0.472-0.097 0.289-0.242 0.438-0.237 0.454h-0.36l-0.114 0.342c-0.283 0.853-0.65 1.497-1.009 1.768l-0.198 0.15v2.726l0.438 0.055c3.211 0.401 5.641 2.123 6.030 4.192h-14.893z"
                                            fill="#000000"></path>
                                    </svg>
                                </div>

                                <input type="checkbox" class="dd-input" id="test">

                                <ul class="dd-menu">
                                    <li>
                                        <a href="{{route('user.my.order.list')}}"> {{languageGet()=='en'?'My Order':'تسجيل الدخول'}}</a>
                                    </li>
                                    <li>
                                        <a href="{{route('user.my.old.meeting.list')}}"> {{languageGet()=='en'?'Old Meeting':'لقاء قديم'}}</a>
                                    </li>
                                    <li>
                                        <a href="{{route('user.my.meeting.list')}}"> {{languageGet()=='en'?'New Meeting':'اجتماع جديد'}}</a>
                                    </li>
                                    <li>
                                        <a href="{{route('user.project.list')}}"> {{languageGet()=='en'?'Project List':'قائمة المشروع'}}</a>
                                    </li>
                                    <li>
                                        <a href="{{route('frontend.user.logout')}}"> {{languageGet()=='en'?'Sign Out' : 'خروج'}}</a>
                                    </li>
                                </ul>

                            </label>
                            &nbsp;<span class="user-name">{{Auth::user()->name}}</span>
                        </li>
                    @else

                        <!-- <li class="header-alt">
            <a href="{{route('frontend.user.logout')}}">Sign Out</a>

            <nav class="header__nav__right">
                <a href="#" class="profile-icon">
                       <span>
                         <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                              width="17" height="17" viewBox="0 0 17 17">
                           <g></g>
                           <path
                               d="M17 16.488c-0.063-2.687-2.778-4.999-6.521-5.609v-1.374c0.492-0.473 0.842-1.207 1.071-1.833 0.332-0.166 0.624-0.536 0.794-1.033 0.238-0.688 0.146-1.323-0.206-1.629 0.028-0.238 0.046-0.481 0.015-0.723-0.079-0.663 0.065-1.038 0.194-1.368 0.106-0.277 0.229-0.591 0.106-0.945-0.442-1.273-1.727-1.974-3.618-1.974l-0.264 0.005c-1.313 0.047-1.707 0.6-1.971 1.115-0.033 0.062-0.077 0.146-0.077 0.151-1.712 0.153-1.697 1.569-1.684 2.707l0.003 0.369c0 0.205 0.009 0.419 0.026 0.639-0.425 0.3-0.504 1.005-0.179 1.737 0.185 0.415 0.452 0.729 0.749 0.892 0.243 0.674 0.625 1.47 1.179 1.965v1.283c-3.798 0.589-6.554 2.907-6.617 5.625l-0.012 0.512h17.023l-0.011-0.512zM1.054 16c0.392-2.094 2.859-3.821 6.122-4.204l0.441-0.052v-2.666l-0.216-0.15c-0.393-0.272-0.791-0.947-1.090-1.851l-0.083-0.281-0.294-0.051c-0.053-0.019-0.208-0.153-0.33-0.428-0.075-0.168-0.104-0.312-0.112-0.415l0.51 0.143-0.096-0.749c-0.042-0.33-0.064-0.651-0.064-0.95l-0.003-0.38c-0.015-1.341 0.051-1.634 0.773-1.699 0.545-0.048 0.752-0.449 0.876-0.689 0.15-0.292 0.28-0.543 1.12-0.574l0.227-0.004c0.829 0 2.279 0.169 2.669 1.282 0 0.043-0.052 0.177-0.090 0.275-0.145 0.374-0.364 0.939-0.254 1.853 0.024 0.188-0.007 0.424-0.040 0.675l-0.089 0.805 0.441-0.048c0.008 0.104-0.004 0.269-0.075 0.472-0.097 0.289-0.242 0.438-0.237 0.454h-0.36l-0.114 0.342c-0.283 0.853-0.65 1.497-1.009 1.768l-0.198 0.15v2.726l0.438 0.055c3.211 0.401 5.641 2.123 6.030 4.192h-14.893z"
                               fill="#000000"></path>
                         </svg>
                       </span>
                </a>
            </nav>

        </li> -->


                        <li class="d-flex align-items-center">
                            <label class="custom-dropdown profile-header d-flex align-items-center">

                                <div class="dd-button">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink" width="17" height="17"
                                         viewBox="0 0 17 17">
                                        <g></g>
                                        <path
                                            d="M17 16.488c-0.063-2.687-2.778-4.999-6.521-5.609v-1.374c0.492-0.473 0.842-1.207 1.071-1.833 0.332-0.166 0.624-0.536 0.794-1.033 0.238-0.688 0.146-1.323-0.206-1.629 0.028-0.238 0.046-0.481 0.015-0.723-0.079-0.663 0.065-1.038 0.194-1.368 0.106-0.277 0.229-0.591 0.106-0.945-0.442-1.273-1.727-1.974-3.618-1.974l-0.264 0.005c-1.313 0.047-1.707 0.6-1.971 1.115-0.033 0.062-0.077 0.146-0.077 0.151-1.712 0.153-1.697 1.569-1.684 2.707l0.003 0.369c0 0.205 0.009 0.419 0.026 0.639-0.425 0.3-0.504 1.005-0.179 1.737 0.185 0.415 0.452 0.729 0.749 0.892 0.243 0.674 0.625 1.47 1.179 1.965v1.283c-3.798 0.589-6.554 2.907-6.617 5.625l-0.012 0.512h17.023l-0.011-0.512zM1.054 16c0.392-2.094 2.859-3.821 6.122-4.204l0.441-0.052v-2.666l-0.216-0.15c-0.393-0.272-0.791-0.947-1.090-1.851l-0.083-0.281-0.294-0.051c-0.053-0.019-0.208-0.153-0.33-0.428-0.075-0.168-0.104-0.312-0.112-0.415l0.51 0.143-0.096-0.749c-0.042-0.33-0.064-0.651-0.064-0.95l-0.003-0.38c-0.015-1.341 0.051-1.634 0.773-1.699 0.545-0.048 0.752-0.449 0.876-0.689 0.15-0.292 0.28-0.543 1.12-0.574l0.227-0.004c0.829 0 2.279 0.169 2.669 1.282 0 0.043-0.052 0.177-0.090 0.275-0.145 0.374-0.364 0.939-0.254 1.853 0.024 0.188-0.007 0.424-0.040 0.675l-0.089 0.805 0.441-0.048c0.008 0.104-0.004 0.269-0.075 0.472-0.097 0.289-0.242 0.438-0.237 0.454h-0.36l-0.114 0.342c-0.283 0.853-0.65 1.497-1.009 1.768l-0.198 0.15v2.726l0.438 0.055c3.211 0.401 5.641 2.123 6.030 4.192h-14.893z"
                                            fill="#000000"></path>
                                    </svg>
                                </div>

                                <input type="checkbox" class="dd-input" id="test">

                                <ul class="dd-menu">
                                    <li>
                                        <a href="{{route('designer.profile.setting')}}">Profile</a>
                                    </li>
                                    <li>
                                        <a href="{{route('designer.bank.list')}}">Bank Account</a>
                                    </li>
                                    <li>
                                        <a href="{{route('designer.payment.list')}}">Payment</a>
                                    </li>
                                    <li>
                                        <a href="{{route('designer.pending.withdrawal.list')}}">Pending Withdrawal
                                            Request</a>
                                    </li>
                                    <li>
                                        <a href="{{route('designer.completed.withdrawal.list')}}">Completed
                                            Withdrawal</a>
                                    </li>
                                    <li>
                                        <a href="{{route('designer.financial.report')}}">Financial Report</a>
                                    </li>
                                    <li>
                                        <a href="{{route('frontend.designer.logout')}}">Log Out</a>
                                    </li>


                                </ul>

                            </label>
                            &nbsp;&nbsp;<span class="user-name">{{Auth::guard('designer')->user()->name}}</span>

                        </li>

                    @endif
                @else
                    <li><a href="{{route('frontend.user.login')}}">{{languageGet()=='en'?'Log in':'تسجيل الدخول'}}</a>
                    </li>
                    <li>
                        <a href="{{route('frontend.user.registration')}}"> {{languageGet()=='en'?'Sign Up':'اشتراك'}}</a>
                    </li>
                @endif
            </ul>

            <div class="switch">
                <input id="language-toggle" class="check-toggle check-toggle-round-flat" onclick="language()"
                       type="checkbox">
                <label for="language-toggle"></label>
                <span
                    class="{{\Illuminate\Support\Facades\Session::get('language')=='ar'||\Illuminate\Support\Facades\Session::get('language')==''?'on':'off'}}">AR</span>
                <span class="{{\Illuminate\Support\Facades\Session::get('language')=='en'?'on':'off'}}">EN</span>
            </div>

            <form action="{{route('language.set')}}" method="get">
                <button type="submit" style="display: none" id="language"></button>
            </form>


        </div>
    </div>
</header>

<!-- Hero -->
