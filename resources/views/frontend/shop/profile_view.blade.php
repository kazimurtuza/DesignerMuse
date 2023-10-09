@extends('frontend.layout.layout')
@section('main_content')
    <!-- Offcanvas -->
{{--    <div class="mobile-offcanvas">--}}
{{--        <div class="mobile-offcanvas__close">&times;</div>--}}
{{--        --}}{{--        <div class="mobile-offcanvas-inner">--}}
{{--        --}}{{--            <div class="offcanvas-logo">--}}
{{--        --}}{{--                <a href="#"><img src="{{asset($shopInfo->top_img)}}" alt="" /></a>--}}
{{--        --}}{{--            </div>--}}
{{--        --}}{{--            <nav class="offcanvas-nav">--}}
{{--        --}}{{--                <ul class="offcanvas-nav-parent">--}}
{{--        --}}{{--                    <li class="active"><a href="#">My projects</a></li>--}}
{{--        --}}{{--                    <li><a href="#">My projects</a></li>--}}
{{--        --}}{{--                    <li><a href="#">Sign Out</a></li>--}}
{{--        --}}{{--                </ul>--}}
{{--        --}}{{--            </nav>--}}
{{--        --}}{{--        </div>--}}
{{--    </div>--}}


    <!-- Hero -->
    <section class="hero portfolio-hero">
        <div class="hero__thumb">
            @if($shopInfo->top_img)
                <img class="topcoverimg" src="{{asset($shopInfo->top_img)}}" alt="portfolio_hero_thumb"/>
                @else
                <img class="topcoverimg" src="{{asset('img/designertop.jpg')}}" alt="portfolio_hero_thumb"/>
            @endif
        </div>
    </section>

    <!-- User portfolio -->
    <section class="user-portfolio">
        <div class="container">
            <div class="row">
                <div class="portfolio-blogs col-lg-9">
                    <div class="portfolio-blog profile-blog">
                        <div class="portfolio-img">
                            @if($shopInfo->profile_img)
                                <img src="{{asset($shopInfo->profile_img)}}" alt="user_img"/>
                            @else
                                <img src="{{asset('img/no_img.jpg')}}" alt="user_img"/>
                            @endif

                        </div>
                        <div class="about-user">
                            <div class="portfolio-header">
                                <div class="portfolio-header__right">
                                    <div class="user-name">
                                        <span>{{$shopInfo->name}}</span>
                                        <span class="icon">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 1.52 1.77"
                        >
                          <g id="Layer_2" data-name="Layer 2">
                            <g id="Layer_1-2" data-name="Layer 1">
                              <path
                                  d="M.76,1.77h0a.9.9,0,0,1-.38-.2A1.19,1.19,0,0,1,0,.62V.3H.07A.94.94,0,0,0,.71.05L.76,0,.81.05A1,1,0,0,0,1.45.3h.07V.62a1.57,1.57,0,0,1-.11.6,1,1,0,0,1-.26.35.85.85,0,0,1-.38.2ZM.13.42v.2a1.1,1.1,0,0,0,.32.85.73.73,0,0,0,.31.17.73.73,0,0,0,.31-.17A1.1,1.1,0,0,0,1.39.62V.42A1,1,0,0,1,.76.18,1,1,0,0,1,.13.42Z"
                                  style="fill: #e28c71"
                              />
                              <path
                                  d="M.63,1.29a.07.07,0,0,1-.06,0L.39,1.09A.1.1,0,1,1,.53,1l.09.1L1,.58a.1.1,0,0,1,.14,0,.09.09,0,0,1,0,.13l-.43.55a.08.08,0,0,1-.07,0Z"
                                  style="fill: #e28c71"
                              />
                            </g>
                          </g>
                        </svg>
                      </span>
                                    </div>
                                    <div class="row">
                                        <div class="ratting-wrapper">
                                            <div class="ratting">
                          <span>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                              <path
                                  d="M12,1.5l3.09,6.3,6.91,1,-5,4.87,1.18,6.88,-6.18,-3.25,-6.18,3.25,1.18,-6.88,-5-4.87,6.91,-1Z"
                              />
                            </svg>
                          </span>
                                                <span>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                              <path
                                  d="M12,1.5l3.09,6.3,6.91,1,-5,4.87,1.18,6.88,-6.18,-3.25,-6.18,3.25,1.18,-6.88,-5-4.87,6.91,-1Z"
                              />
                            </svg>
                          </span>
                                                <span>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                              <path
                                  d="M12,1.5l3.09,6.3,6.91,1,-5,4.87,1.18,6.88,-6.18,-3.25,-6.18,3.25,1.18,-6.88,-5-4.87,6.91,-1Z"
                              />
                            </svg>
                          </span>
                                                <span>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                              <path
                                  d="M12,1.5l3.09,6.3,6.91,1,-5,4.87,1.18,6.88,-6.18,-3.25,-6.18,3.25,1.18,-6.88,-5-4.87,6.91,-1Z"
                              />
                            </svg>
                          </span>
                                                <span>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                              <path
                                  d="M12,1.5l3.09,6.3,6.91,1,-5,4.87,1.18,6.88,-6.18,-3.25,-6.18,3.25,1.18,-6.88,-5-4.87,6.91,-1Z"
                              />
                            </svg>
                          </span>
                                            </div>
                                            @php $retPrc=($shop->avg_rating*100)/5; @endphp
                                            <div class="ratting active-ratting"
                                                 style="width:{{$retPrc}}%">
                          <span>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                              <path
                                  d="M12,1.5l3.09,6.3,6.91,1,-5,4.87,1.18,6.88,-6.18,-3.25,-6.18,3.25,1.18,-6.88,-5-4.87,6.91,-1Z"
                              />
                            </svg>
                          </span>
                                                <span>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                              <path
                                  d="M12,1.5l3.09,6.3,6.91,1,-5,4.87,1.18,6.88,-6.18,-3.25,-6.18,3.25,1.18,-6.88,-5-4.87,6.91,-1Z"
                              />
                            </svg>
                          </span>
                                                <span>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                              <path
                                  d="M12,1.5l3.09,6.3,6.91,1,-5,4.87,1.18,6.88,-6.18,-3.25,-6.18,3.25,1.18,-6.88,-5-4.87,6.91,-1Z"
                              />
                            </svg>
                          </span>
                                                <span>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                              <path
                                  d="M12,1.5l3.09,6.3,6.91,1,-5,4.87,1.18,6.88,-6.18,-3.25,-6.18,3.25,1.18,-6.88,-5-4.87,6.91,-1Z"
                              />
                            </svg>
                          </span>
                                                <span>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                              <path
                                  d="M12,1.5l3.09,6.3,6.91,1,-5,4.87,1.18,6.88,-6.18,-3.25,-6.18,3.25,1.18,-6.88,-5-4.87,6.91,-1Z"
                              />
                            </svg>
                          </span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="edit-btn">

                                    <a href="{{route('shop.product.list',['shop_id'=>$shopInfo->user_id])}}"
                                       class="portfolio-btn"> Product List </a>
                                </div>
                            </div>
                            <div class="user-dsc">
                                {!! $shopInfo->portfolio !!}
                            </div>
                        </div>
                    </div>

                    <div class="portfolio-blog">
                        <div class="container about-user">
                            <div class="portfolio-header">
                                <h3 class="title">Reviews</h3>
                            </div>


                            @foreach($shopRating as $review)
                            <div class="review-item">
                                <h4 class="title">{{$review->productInfo->name}}</h4>
                                <div class="portfolio-header__right">
                                    <div class="row">
                                        <div class="ratting-wrapper">
                                            <div class="ratting">
                          <span>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                              <path
                                  d="M12,1.5l3.09,6.3,6.91,1,-5,4.87,1.18,6.88,-6.18,-3.25,-6.18,3.25,1.18,-6.88,-5-4.87,6.91,-1Z"
                              />
                            </svg>
                          </span>
                                                <span>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                              <path
                                  d="M12,1.5l3.09,6.3,6.91,1,-5,4.87,1.18,6.88,-6.18,-3.25,-6.18,3.25,1.18,-6.88,-5-4.87,6.91,-1Z"
                              />
                            </svg>
                          </span>
                                                <span>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                              <path
                                  d="M12,1.5l3.09,6.3,6.91,1,-5,4.87,1.18,6.88,-6.18,-3.25,-6.18,3.25,1.18,-6.88,-5-4.87,6.91,-1Z"
                              />
                            </svg>
                          </span>
                                                <span>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                              <path
                                  d="M12,1.5l3.09,6.3,6.91,1,-5,4.87,1.18,6.88,-6.18,-3.25,-6.18,3.25,1.18,-6.88,-5-4.87,6.91,-1Z"
                              />
                            </svg>
                          </span>
                                                <span>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                              <path
                                  d="M12,1.5l3.09,6.3,6.91,1,-5,4.87,1.18,6.88,-6.18,-3.25,-6.18,3.25,1.18,-6.88,-5-4.87,6.91,-1Z"
                              />
                            </svg>
                          </span>
                                            </div>
                                            @php $retPrc=($review->rating*100)/5; @endphp
                                            <div class="ratting active-ratting"
                                                 style="width:{{$retPrc}}%">
                          <span>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                              <path
                                  d="M12,1.5l3.09,6.3,6.91,1,-5,4.87,1.18,6.88,-6.18,-3.25,-6.18,3.25,1.18,-6.88,-5-4.87,6.91,-1Z"
                              />
                            </svg>
                          </span>
                                                <span>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                              <path
                                  d="M12,1.5l3.09,6.3,6.91,1,-5,4.87,1.18,6.88,-6.18,-3.25,-6.18,3.25,1.18,-6.88,-5-4.87,6.91,-1Z"
                              />
                            </svg>
                          </span>
                                                <span>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                              <path
                                  d="M12,1.5l3.09,6.3,6.91,1,-5,4.87,1.18,6.88,-6.18,-3.25,-6.18,3.25,1.18,-6.88,-5-4.87,6.91,-1Z"
                              />
                            </svg>
                          </span>
                                                <span>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                              <path
                                  d="M12,1.5l3.09,6.3,6.91,1,-5,4.87,1.18,6.88,-6.18,-3.25,-6.18,3.25,1.18,-6.88,-5-4.87,6.91,-1Z"
                              />
                            </svg>
                          </span>
                                                <span>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                              <path
                                  d="M12,1.5l3.09,6.3,6.91,1,-5,4.87,1.18,6.88,-6.18,-3.25,-6.18,3.25,1.18,-6.88,-5-4.87,6.91,-1Z"
                              />
                            </svg>
                          </span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <p>{{$review->review}}</p>
                                <p>{{$review->clientInfo->name}}<span>{{ date('d-m-Y',strtotime($review->created_at))}}</span></p>
                            </div>
                            @endforeach

                            {{ $shopRating->links() }}
                        </div>
                    </div>

                </div>
                <div class="sidebar col-lg-3">
                    <div class="sidebar-content">
                        <h3 class="title">Portfolio Items</h3>
                        <ul>
                            <li>
                                Identity Verified<span class="icon">
                    <svg
                        fill="#000000"
                        height="800px"
                        width="800px"
                        version="1.1"
                        id="Capa_1"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        viewBox="0 0 490 490"
                        xml:space="preserve"
                    >
                      <polygon
                          points="452.253,28.326 197.831,394.674 29.044,256.875 0,292.469 207.253,461.674 490,54.528 "
                      />
                    </svg>
                  </span>
                            </li>
                            <li>
                                Payment Verified<span class="icon">
                    <svg
                        fill="#000000"
                        height="800px"
                        width="800px"
                        version="1.1"
                        id="Capa_1"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        viewBox="0 0 490 490"
                        xml:space="preserve"
                    >
                      <polygon
                          points="452.253,28.326 197.831,394.674 29.044,256.875 0,292.469 207.253,461.674 490,54.528 "
                      />
                    </svg>
                  </span>
                            </li>
                            <li>
                                Phone Verified<span class="icon">
                    <svg
                        fill="#000000"
                        height="800px"
                        width="800px"
                        version="1.1"
                        id="Capa_1"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        viewBox="0 0 490 490"
                        xml:space="preserve"
                    >
                      <polygon
                          points="452.253,28.326 197.831,394.674 29.044,256.875 0,292.469 207.253,461.674 490,54.528 "
                      />
                    </svg>
                  </span>
                            </li>
                            <li>
                                Email Verified<span class="icon">
                    <svg
                        fill="#000000"
                        height="800px"
                        width="800px"
                        version="1.1"
                        id="Capa_1"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        viewBox="0 0 490 490"
                        xml:space="preserve"
                    >
                      <polygon
                          points="452.253,28.326 197.831,394.674 29.044,256.875 0,292.469 207.253,461.674 490,54.528 "
                      />
                    </svg>
                  </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
@section('js_plugins')
@endsection
@section('js')
@endsection
