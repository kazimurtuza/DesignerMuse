@extends('frontend.layout.layout')
@section('main_content')

    <!-- Hero -->
    <section class="hero-wrap">
        <div class="hero about-hero">
            <div class="about-hero__bg-line">
                <img src="{{asset($aboutOus->about_top_back_ground_img)}}" alt=""/>
            </div>
            <div class="container flex-wrap">
                <div class="hero__text-content">
                    <h1 class="about-hero__title">{{$aboutOus->about_top_title}}</h1>
                    <p class="about-hero__para">
                        {!! $aboutOus->about_top_details !!}
                    </p>
                    <a href="#" class="about-hero__link btn-solid">{{languageGet()=='en'?'About Us':'اتصل بنا'}}   </a>
                </div>
                <figure class="hero__figure-content">
                    <img src="{{asset($aboutOus->about_top_font_img)}}" alt="hero-image"/>
                </figure>
            </div>
        </div>
    </section>

    <!-- About Us Fig-Content -->
    <section class="fig-content about-us">
        <div class="container flex-wrap">
            <figure class="fig-content__figure">
                <img src="{{asset('img')}}/img/fig-content-img.webp" alt=""/>
            </figure>

            <div class="fig-content__text">
                <h5 class="fig-content__subtitle slice">{{languageGet()=='en'?'About Us':'معلومات عنا'}}</h5>
                <h2 class="fig-content__title mw-420">{{$aboutOus->about_title}}</h2>
                <p class="fig-content__para">
                    {!! $aboutOus->about_ous !!}
                </p>

                <a href="#" class="fig-content__link btn-solid"> {{languageGet()=='en'?'CONTACT US':'اتصل بنا'}}</a>
            </div>
        </div>
    </section>

    <!-- About-Us Carousel  -->
    <section class="about-us-carousel">
        <div class="container">
            <div class="about-us__title">
                <h4 class="about-us-carousel__title-sub slice">Lorem ipsum</h4>
                <h2 class="about-us-carousel__title-main">
                    Lorem ipsum dolor sit consectetur adipiscing elit
                </h2>
            </div>
            <div class="card-carousel">
                @foreach($project as $projectInfo)
                    <div class="card-carousel__item">
                        <a href="#">
                            <figure class="card-carousel__item-figure">
                                <img src="{{asset($projectInfo->image)}}" alt=""/>
                            </figure>
                        </a>
                        <div class="card-carousel__item-text">
                            <a href="#" class="card-carousel__item-title"
                            >{{$projectInfo->title}}</a
                            >
                            <p class="card-carousel__item-bio">{{$projectInfo->about}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="view__link">
                <a href="#" class="btn-solid"> {{languageGet()=='en'?'VIEW ALL':'عرض الكل'}}</a>
            </div>
        </div>
    </section>

    <!-- Our Teams -->
    <section class="our-team">
        <div class="container">
            <div class="our-team__text">
                <h2 class="our-team__text-main">{{languageGet()=='en'?'OUR Teams':'فريقنا'}}</h2>
{{--                <p class="our-team__para">--}}
{{--                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet--}}
{{--                    laoreet turpis. In hac habitasse platea dictumst.--}}
{{--                </p>--}}
            </div>
            <div class="flex-wrap">
                @foreach($team as $teamList)
                    <div class="our-team__member">
                        <figure class="our-team__member__figure">
                            <img src="{{asset($teamList->image)}}" alt=""/>
                        </figure>
                        <div class="our-team__member__text">
                            <a href="#" class="our-team__member__name">{{$teamList->name}}</a>
                            <p class="our-team__member__bio">{{$teamList->about}}</p>
                            <ul class="our-team__member__socials">
                                <li>
                                    <a href="{{$teamList->face_book}}" class="our-team__member__social-link">
                                        <svg
                                            width="12"
                                            height="22"
                                            viewBox="0 0 12 22"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M11.2749 0.740129C10.9434 0.691022 9.80167 0.592807 8.47578 0.592807C5.70123 0.592807 3.79833 2.287 3.79833 5.39303V8.06937H0.667745V11.7033H3.79833V21.0214H7.55502V11.7033H10.6733L11.1521 8.06937H7.55502V5.74906C7.55502 4.70553 7.83739 3.9812 9.34743 3.9812H11.2749V0.740129Z"
                                                fill="#656565"
                                            />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{$teamList->twitter}}" class="our-team__member__social-link">
                                        <svg
                                            width="20"
                                            height="17"
                                            viewBox="0 0 20 17"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M19.7882 2.60174C19.0761 2.90866 18.3027 3.12964 17.5047 3.21558C18.3273 2.7245 18.9534 1.95107 19.248 1.03031C18.4869 1.48455 17.6275 1.81602 16.7313 1.9879C16.0069 1.21446 14.9757 0.735665 13.834 0.735665C11.6364 0.735665 9.86855 2.5158 9.86855 4.70107C9.86855 5.00799 9.90538 5.31491 9.96677 5.60955C6.67659 5.43767 3.74244 3.86625 1.79043 1.46C1.44668 2.04928 1.25025 2.7245 1.25025 3.46111C1.25025 4.83611 1.95003 6.05151 3.01811 6.76357C2.36744 6.73901 1.7536 6.55486 1.2257 6.26022C1.2257 6.2725 1.2257 6.29705 1.2257 6.30933C1.2257 8.23678 2.58842 9.83276 4.40538 10.2011C4.07391 10.287 3.71788 10.3361 3.36186 10.3361C3.10404 10.3361 2.85851 10.3116 2.61297 10.2747C3.11632 11.8462 4.57726 12.9879 6.32056 13.0247C4.95784 14.0928 3.25137 14.7189 1.39757 14.7189C1.0661 14.7189 0.759178 14.7066 0.439982 14.6698C2.19556 15.7993 4.28262 16.45 6.52927 16.45C13.8217 16.45 17.8116 10.4098 17.8116 5.16758C17.8116 4.99571 17.8116 4.82383 17.7994 4.65196C18.5728 4.08723 19.248 3.38745 19.7882 2.60174Z"
                                                fill="#656565"
                                            />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{$teamList->instagram}}" class="our-team__member__social-link">
                                        <svg
                                            width="20"
                                            height="20"
                                            viewBox="0 0 20 20"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M17.225 16.0995C17.225 16.5169 16.8935 16.8484 16.4761 16.8484H3.35221C2.9348 16.8484 2.60333 16.5169 2.60333 16.0995V8.14415H4.33436C4.17476 8.6475 4.08882 9.19995 4.08882 9.75241C4.08882 12.8953 6.71605 15.4366 9.94485 15.4366C13.1859 15.4366 15.8132 12.8953 15.8132 9.75241C15.8132 9.19995 15.7272 8.6475 15.5676 8.14415H17.225V16.0995ZM13.7384 9.55598C13.7384 11.5816 12.0442 13.2267 9.94485 13.2267C7.85779 13.2267 6.1636 11.5816 6.1636 9.55598C6.1636 7.53031 7.85779 5.88522 9.94485 5.88522C12.0442 5.88522 13.7384 7.53031 13.7384 9.55598ZM17.225 5.13633C17.225 5.60285 16.8444 5.98343 16.3779 5.98343H14.2417C13.7752 5.98343 13.3946 5.60285 13.3946 5.13633V3.11067C13.3946 2.64415 13.7752 2.26357 14.2417 2.26357H16.3779C16.8444 2.26357 17.225 2.64415 17.225 3.11067V5.13633ZM19.3611 2.58276C19.3611 1.25687 18.2685 0.164236 16.9426 0.164236H2.92253C1.59663 0.164236 0.503999 1.25687 0.503999 2.58276V16.6029C0.503999 17.9287 1.59663 19.0214 2.92253 19.0214H16.9426C18.2685 19.0214 19.3611 17.9287 19.3611 16.6029V2.58276Z"
                                                fill="#656565"
                                            />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- testimonial -->
    <section class="testimonial">
        <div class="container">
            <div class="flex-wrap testimonial__inner">
                <div class="testimonial__item">
                    <div class="testimonial__row flex-wrap">
                        <div class="testimonial__row-icon">
                            <svg
                                width="42"
                                height="36"
                                viewBox="0 0 42 36"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M19.3013 4.9143C19.3013 2.25247 17.1417 0.0928674 14.4799 0.0928674H4.83705C2.17522 0.0928674 0.015625 2.25247 0.015625 4.9143V14.5572C0.015625 17.219 2.17522 19.3786 4.83705 19.3786H10.4621C11.793 19.3786 12.8728 20.4584 12.8728 21.7893V22.5929C12.8728 26.1336 9.98493 29.0214 6.4442 29.0214H4.83705C3.95815 29.0214 3.22991 29.7497 3.22991 30.6286V33.8429C3.22991 34.7218 3.95815 35.45 4.83705 35.45H6.4442C13.5257 35.45 19.3013 29.6743 19.3013 22.5929V4.9143ZM41.8013 4.9143C41.8013 2.25247 39.6417 0.0928674 36.9799 0.0928674H27.3371C24.6752 0.0928674 22.5156 2.25247 22.5156 4.9143V14.5572C22.5156 17.219 24.6752 19.3786 27.3371 19.3786H32.9621C34.293 19.3786 35.3728 20.4584 35.3728 21.7893V22.5929C35.3728 26.1336 32.4849 29.0214 28.9442 29.0214H27.3371C26.4581 29.0214 25.7299 29.7497 25.7299 30.6286V33.8429C25.7299 34.7218 26.4581 35.45 27.3371 35.45H28.9442C36.0257 35.45 41.8013 29.6743 41.8013 22.5929V4.9143Z"
                                    fill="#E39178"
                                />
                            </svg>
                        </div>
                        <p class="testimonial__row-text">
                            This is Photoshop's version of Lorem Ipsum. Proin gravida nibh
                            vel velit auctor aliquet. Aenean sollicitudin bibendum auctor.
                        </p>
                    </div>
                    <div class="testimonial__row flex-wrap">
                        <figure class="testimonial__row__figure">
                            <img src="{{asset('img')}}/img/reviewer1.png" alt=""/>
                        </figure>
                        <div class="testimonial__row-text">
                            <a href="#" class="testimonial__row__title">Michel Ronaldo</a>
                            <p class="testimonial__row__bio">
                                Marketing Manager, Lorem Ipsum Inc.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="testimonial__item">
                    <div class="testimonial__row flex-wrap">
                        <div class="testimonial__row-icon">
                            <svg
                                width="42"
                                height="36"
                                viewBox="0 0 42 36"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M19.3013 4.9143C19.3013 2.25247 17.1417 0.0928674 14.4799 0.0928674H4.83705C2.17522 0.0928674 0.015625 2.25247 0.015625 4.9143V14.5572C0.015625 17.219 2.17522 19.3786 4.83705 19.3786H10.4621C11.793 19.3786 12.8728 20.4584 12.8728 21.7893V22.5929C12.8728 26.1336 9.98493 29.0214 6.4442 29.0214H4.83705C3.95815 29.0214 3.22991 29.7497 3.22991 30.6286V33.8429C3.22991 34.7218 3.95815 35.45 4.83705 35.45H6.4442C13.5257 35.45 19.3013 29.6743 19.3013 22.5929V4.9143ZM41.8013 4.9143C41.8013 2.25247 39.6417 0.0928674 36.9799 0.0928674H27.3371C24.6752 0.0928674 22.5156 2.25247 22.5156 4.9143V14.5572C22.5156 17.219 24.6752 19.3786 27.3371 19.3786H32.9621C34.293 19.3786 35.3728 20.4584 35.3728 21.7893V22.5929C35.3728 26.1336 32.4849 29.0214 28.9442 29.0214H27.3371C26.4581 29.0214 25.7299 29.7497 25.7299 30.6286V33.8429C25.7299 34.7218 26.4581 35.45 27.3371 35.45H28.9442C36.0257 35.45 41.8013 29.6743 41.8013 22.5929V4.9143Z"
                                    fill="#E39178"
                                />
                            </svg>
                        </div>
                        <p class="testimonial__row-text">
                            This is Photoshop's version of Lorem Ipsum. Proin gravida nibh
                            vel velit auctor aliquet. Aenean sollicitudin bibendum auctor.
                        </p>
                    </div>
                    <div class="testimonial__row flex-wrap">
                        <figure class="testimonial__row__figure">
                            <img src="{{asset('img')}}/img/reviewer2.png" alt=""/>
                        </figure>
                        <div class="testimonial__row-text">
                            <a href="#" class="testimonial__row__title">Michel Ronaldo</a>
                            <p class="testimonial__row__bio">
                                Marketing Manager, Lorem Ipsum Inc.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Approach section -->
    <section class="fig-content our-approach">
        <div class="container flex-wrap">
            <figure class="fig-content__figure">
                <img src="{{asset($aboutOus->our_approach_left_img)}}" alt=""/>
            </figure>

            <div class="fig-content__text">
                <h5 class="fig-content__subtitle slice mb-5">{{languageGet()=='en'?'Our approach':'نهجنا' }}</h5>
                {{--                <h2 class="fig-content__title">--}}
                {{--                    On the other hand, we denounce with righteous--}}
                {{--                </h2>--}}
                <ul class="our-approach__list">
                    @if($aboutOus->our_approach_one_title)
                        <li class="our-approach__list-item flex-wrap">
                            <div class="our-approach__list-item__icon">
                                <img src="{{asset($aboutOus->our_approach_one_img)}}" alt=""/>
                            </div>
                            <div class="our-approach__list-item__text">
                                <h3 class="our-approach__list-item__title">
                                    {{$aboutOus->our_approach_one_title}}
                                </h3>
                                <p class="our-approach__list-item__para">
                                    {!! $aboutOus->our_approach_one_details !!}
                                </p>
                            </div>
                        </li>
                    @endif
                    @if($aboutOus->our_approach_two_title)
                        <li class="our-approach__list-item flex-wrap">
                            <div class="our-approach__list-item__icon">
                                <img src="{{asset($aboutOus->our_approach_two_img)}}" alt=""/>
                            </div>
                            <div class="our-approach__list-item__text">
                                <h3 class="our-approach__list-item__title">
                                    {{$aboutOus->our_approach_two_title}}
                                </h3>
                                <p class="our-approach__list-item__para">
                                    {!! $aboutOus->our_approach_two_details !!}
                                </p>
                            </div>
                        </li>
                    @endif
                        @if($aboutOus->our_approach_three_title)
                            <li class="our-approach__list-item flex-wrap">
                                <div class="our-approach__list-item__icon">
                                    <img src="{{asset($aboutOus->our_approach_three_img)}}" alt=""/>
                                </div>
                                <div class="our-approach__list-item__text">
                                    <h3 class="our-approach__list-item__title">
                                        {{$aboutOus->our_approach_three_title}}
                                    </h3>
                                    <p class="our-approach__list-item__para">
                                        {!! $aboutOus->our_approach_three_details !!}
                                    </p>
                                </div>
                            </li>
                        @endif
                        @if($aboutOus->our_approach_four_title)
                            <li class="our-approach__list-item flex-wrap">
                                <div class="our-approach__list-item__icon">
                                    <img src="{{asset($aboutOus->our_approach_four_img)}}" alt=""/>
                                </div>
                                <div class="our-approach__list-item__text">
                                    <h3 class="our-approach__list-item__title">
                                        {{$aboutOus->our_approach_four_title}}
                                    </h3>
                                    <p class="our-approach__list-item__para">
                                        {!! $aboutOus->our_approach_four_details !!}
                                    </p>
                                </div>
                            </li>
                        @endif


                </ul>
            </div>
        </div>
    </section>

@endsection

@section('css_plugins')
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.18/dist/sweetalert2.min.css" rel="stylesheet">
@endsection
@section('js_plugins')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.18/dist/sweetalert2.all.min.js"></script>

@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.18/dist/sweetalert2.all.min.js"></script>


    <script>

    </script>
@endsection























