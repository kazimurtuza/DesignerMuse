@extends('frontend.layout.layout')
@section('main_content')
    <!-- Hero -->
    <section class="hero">
        <div class="hero__slider">
            <div class="hero__slider__item">
                <div class="hero__slider__figure">
                    <img data-lazy="{{asset('assets/frontend')}}/img/main-slider.webp" alt="" />
                </div>
                <div class="hero__slider__content">
                    <div class="container">
                        <div class="hero__slider__content__wrap">
                            <h1>Beautiful Landing Page</h1>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint
                                repudiandae aut ipsam vitae debitis distinctio porro molestiae
                                quia autem harum? ipsum dolor sit amet consectetur adipisicing
                                elit. Tenetur ad in nam, suscipit velit aspernatur cupiditate.
                                Natus, rerum.
                            </p>
                            <div class="hero__slider__buttons">

                                <a class="button-light" href="#">Learn More</a>
                                <a class="button-primary" href="#">Get it now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- item end -->
            <div class="hero__slider__item">
                <div class="hero__slider__figure">
                    <img data-lazy="{{asset('assets/frontend')}}/img/main-slider.webp" alt="" />
                </div>
                <div class="hero__slider__content">
                    <div class="container">
                        <div class="hero__slider__content__wrap">
                            <h1>Beautiful Landing Page</h1>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint
                                repudiandae aut ipsam vitae debitis distinctio porro molestiae
                                quia autem harum? ipsum dolor sit amet consectetur adipisicing
                                elit. Tenetur ad in nam, suscipit velit aspernatur cupiditate.
                                Natus, rerum.
                            </p>
                            <div class="hero__slider__buttons">
                                <a class="button-light" href="#">Learn More</a>
                                <a class="button-primary" href="#">Get it now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- item end -->
        </div>
    </section>

    <!-- Steps -->
    <section class="steps">
        <div class="container">
            <div class="title">
                <h2>How it's Work</h2>
            </div>

            <div class="steps-wrap">
                <div class="step">
                    <div class="figure">1</div>
                    <div class="text">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae
                            alias dolores laboriosam quo voluptas maiores. ipsum, dolor sit
                            amet consectetur adipisicing elit. Ea facilis expedita
                            inventore.
                        </p>
                    </div>
                </div>
                <div class="step">
                    <div class="figure">2</div>
                    <div class="text">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae
                            alias dolores laboriosam quo voluptas maiores. ipsum, dolor sit
                            amet consectetur adipisicing elit. Ea facilis expedita
                            inventore.
                        </p>
                    </div>
                </div>
                <div class="step">
                    <div class="figure">3</div>
                    <div class="text">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae
                            alias dolores laboriosam quo voluptas maiores. ipsum, dolor sit
                            amet consectetur adipisicing elit. Ea facilis expedita
                            inventore.
                        </p>
                    </div>
                </div>
            </div>

            <div class="steps-button">
                <a href="#">Get it now</a>
            </div>
        </div>
    </section>

    <!-- Counter Area -->
    <section class="Counter">
        <div class="container-alt">
            <div class="counter__row row">
                <div class="counter__text counter__col col-lg-9 col-md-8">
                    <h3 class="title">Headline Goes Here</h3>
                    <p class="dsc">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae
                        alias dolores laboriosam quo voluptas maiores. ipsum dolor sit
                        amet consectetur adipisicing elit.
                    </p>
                </div>

                <div class="counter__image counter__col col-lg-3 col-md-4 large-img">
                    <img src="{{asset('assets/frontend')}}/img/mobile.png" alt="phone" />
                </div>
            </div>
            <div class="counter__row row">
                <div class="counter__image counter__col col-lg-6 col-md-6">
                    <img src="{{asset('assets/frontend')}}/img/laptop.png" alt="laptop" />
                </div>
                <div class="counter__text counter__col col-lg-6 col-md-6">
                    <h3 class="title">Headline Goes Here</h3>
                    <p class="dsc">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae
                        alias dolores laboriosam quo voluptas maiores., ipsum dolor sit
                        amet consectetur adipisicing elit. Numquam, quas. Voluptatibus
                        voluptatum laborum, dignissimos at porro perferendis tempora,
                        labore architecto unde similique cumque maxime consequatur.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Features -->
    <section class="features">
        <div class="container">
            <div class="title">
                <h2>Features</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae
                    alias dolores laboriosam quo voluptas maiores. ipsum dolor sit amet
                    consectetur, adipisicing elit. Autem iure cupiditate fuga tenetur
                    pariatur perferendis accusantium esse quos harum doloribus rerum
                    ducimus est quasi illo delectus. perferendis accusantium esse quos
                    harum doloribus rerum ducimus est quasi illo delectus
                </p>
            </div>

            <ul class="features__block">
                <li>
                    <div class="icon">
                        <svg
                            version="1.1"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="17"
                            height="17"
                            viewBox="0 0 17 17"
                        >
                            <g></g>
                            <path
                                d="M8.5 5.972c-1.378 0-2.5 1.122-2.5 2.5s1.122 2.5 2.5 2.5 2.5-1.122 2.5-2.5-1.122-2.5-2.5-2.5zM8.5 9.972c-0.827 0-1.5-0.673-1.5-1.5s0.673-1.5 1.5-1.5 1.5 0.673 1.5 1.5-0.673 1.5-1.5 1.5zM16.94 9.446c0.037-0.321 0.060-0.645 0.060-0.974s-0.023-0.653-0.060-0.974l-2.588-0.778c-0.119-0.402-0.278-0.787-0.474-1.149l1.279-2.377c-0.406-0.51-0.869-0.973-1.38-1.38l-2.377 1.28c-0.363-0.196-0.748-0.354-1.15-0.474l-0.776-2.588c-0.32-0.037-0.644-0.060-0.974-0.060s-0.654 0.023-0.974 0.060l-0.776 2.588c-0.403 0.119-0.789 0.278-1.15 0.475l-2.377-1.28c-0.511 0.406-0.974 0.869-1.379 1.38l1.279 2.375c-0.196 0.362-0.354 0.748-0.474 1.15l-2.589 0.778c-0.037 0.32-0.060 0.644-0.060 0.974s0.023 0.654 0.060 0.974l2.588 0.776c0.12 0.403 0.278 0.789 0.474 1.151l-1.279 2.376c0.406 0.511 0.869 0.974 1.38 1.38l2.377-1.279c0.362 0.196 0.748 0.354 1.15 0.474l0.776 2.588c0.321 0.037 0.645 0.060 0.974 0.060s0.654-0.023 0.974-0.060l0.776-2.588c0.402-0.12 0.788-0.278 1.15-0.474l2.376 1.279c0.511-0.407 0.974-0.87 1.38-1.381l-1.278-2.376c0.196-0.362 0.354-0.748 0.474-1.15l2.588-0.776zM13.548 9.419l-0.154 0.518c-0.1 0.337-0.233 0.66-0.396 0.959l-0.256 0.475 0.255 0.475 0.952 1.77c-0.099 0.105-0.201 0.207-0.306 0.306l-2.243-1.209-0.475 0.256c-0.301 0.163-0.624 0.295-0.96 0.396l-0.518 0.154-0.155 0.518-0.579 1.932c-0.072 0.002-0.143 0.003-0.213 0.003s-0.141-0.001-0.213-0.003l-0.579-1.932-0.155-0.518-0.518-0.154c-0.336-0.1-0.659-0.233-0.959-0.396l-0.475-0.256-2.245 1.207c-0.104-0.099-0.207-0.201-0.306-0.306l1.208-2.244-0.256-0.475c-0.162-0.3-0.295-0.623-0.396-0.96l-0.153-0.517-2.449-0.734c-0.003-0.072-0.004-0.143-0.004-0.212 0-0.070 0.001-0.141 0.004-0.213l2.448-0.734 0.154-0.518c0.1-0.337 0.233-0.66 0.396-0.959l0.256-0.475-1.208-2.245c0.099-0.104 0.201-0.207 0.305-0.306l2.247 1.21 0.476-0.259c0.297-0.162 0.619-0.295 0.956-0.395l0.518-0.154 0.155-0.518 0.579-1.932c0.073-0.001 0.144-0.002 0.214-0.002s0.141 0.001 0.213 0.003l0.579 1.932 0.155 0.518 0.518 0.154c0.335 0.1 0.659 0.233 0.96 0.396l0.475 0.255 2.244-1.208c0.104 0.099 0.207 0.201 0.306 0.306l-0.953 1.77-0.255 0.475 0.257 0.475c0.163 0.3 0.295 0.622 0.395 0.957l0.154 0.518 0.518 0.155 1.932 0.581c0.001 0.072 0.002 0.143 0.002 0.213s-0.001 0.141-0.004 0.213l-2.448 0.734z"
                                fill="#000000"
                            />
                        </svg>
                    </div>
                    <div class="texts">
                        <h4>Customization</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae
                            alias dolores laboriosam quo voluptas maiores. ipsum dolor sit
                            amet consectetur, adipisicing elit. Quas illo assumenda sequi
                            quam tenetur est officiis aspernatur.
                        </p>
                    </div>
                </li>
                <li>
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9.24 7.76">
                            <g id="Layer_2" data-name="Layer 2">
                                <g id="Layer_1-2" data-name="Layer 1">
                                    <path
                                        d="M3.2,4.74A2.67,2.67,0,0,1,2.09,2.66a2.43,2.43,0,0,1,.38-1.29A2.85,2.85,0,0,0,0,3.91,2.37,2.37,0,0,0,1,5.76l-.28,2L2.6,6.49a4.6,4.6,0,0,0,.84.08,3.9,3.9,0,0,0,2.72-1l-.37,0A4.31,4.31,0,0,1,3.2,4.74Z"
                                        style="fill: #e28c71; fill-rule: evenodd"
                                    />
                                    <path
                                        d="M9.24,2.66C9.24,1.19,7.7,0,5.79,0S2.35,1.19,2.35,2.66,3.89,5.31,5.79,5.31a4.71,4.71,0,0,0,.85-.08L8.55,6.5l-.29-2A2.38,2.38,0,0,0,9.24,2.66Z"
                                        style="fill: #e28c71; fill-rule: evenodd"
                                    />
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="texts">
                        <h4>Conversation</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae
                            alias dolores laboriosam quo voluptas maiores. ipsum dolor sit
                            amet consectetur, adipisicing elit. Quas illo assumenda sequi
                            quam tenetur est officiis aspernatur.
                        </p>
                    </div>
                </li>
                <li>
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9.24 7.75">
                            <g id="Layer_2" data-name="Layer 2">
                                <g id="Layer_1-2" data-name="Layer 1">
                                    <path
                                        d="M6.64,2.93,6.31,2.6,5.15,3.77a1,1,0,0,0-1.24.14,1,1,0,0,0,0,1.42A1,1,0,0,0,5.47,4.09ZM5,5a.54.54,0,0,1-.76-.76.53.53,0,0,1,.76,0,.53.53,0,0,1,.16.38A.55.55,0,0,1,5,5Z"
                                        style="fill: #e28c71"
                                    />
                                    <path
                                        d="M4.62,4.39a.2.2,0,0,0-.16.07.22.22,0,0,0,0,.32.22.22,0,0,0,.32,0,.22.22,0,0,0,0-.32A.2.2,0,0,0,4.62,4.39Z"
                                        style="fill: #e28c71"
                                    />
                                    <path
                                        d="M4.81,0V1.16A3.48,3.48,0,0,1,6.93,2l.82-.81A4.63,4.63,0,0,0,4.81,0Z"
                                        style="fill: #e28c71; fill-rule: evenodd"
                                    />
                                    <path
                                        d="M8.08,4.81A3.44,3.44,0,0,1,7.2,6.93L8,7.75A4.63,4.63,0,0,0,9.24,4.81Z"
                                        style="fill: #e28c71; fill-rule: evenodd"
                                    />
                                    <path
                                        d="M1.16,4.81H0A4.63,4.63,0,0,0,1.22,7.75L2,6.93A3.48,3.48,0,0,1,1.16,4.81Z"
                                        style="fill: #e28c71; fill-rule: evenodd"
                                    />
                                    <path
                                        d="M2.31,2a3.46,3.46,0,0,1,2.12-.87V0A4.63,4.63,0,0,0,1.49,1.22Z"
                                        style="fill: #e28c71; fill-rule: evenodd"
                                    />
                                    <path
                                        d="M1.16,4.43A3.46,3.46,0,0,1,2,2.31l-.81-.82A4.6,4.6,0,0,0,0,4.43Z"
                                        style="fill: #e28c71; fill-rule: evenodd"
                                    />
                                    <path
                                        d="M7.2,2.31a3.41,3.41,0,0,1,.88,2.12H9.24A4.6,4.6,0,0,0,8,1.49Z"
                                        style="fill: #e28c71; fill-rule: evenodd"
                                    />
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="texts">
                        <h4>Performance</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae
                            alias dolores laboriosam quo voluptas maiores. ipsum dolor sit
                            amet consectetur, adipisicing elit. Quas illo assumenda sequi
                            quam tenetur est officiis aspernatur.
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <!-- Category-area -->
    <section class="Category-area">
        <div class="container">
            <h2 class="title">Looking For</h2>
            <div class="grid-wrapper">
                <a href="{{route('designer.list')}}" class="grid-item">
                    <div class="grid-item__title">
                        <h3 class="title-main">Interior Designer</h3>
                        <h4 class="title-sub">{{$totalDesigner}} Designer</h4>
                    </div>
                    <div class="grid-item__thumb">
                        <img src="{{asset('assets/frontend')}}/img/modern-luxury-aesthetics.jpg" alt="designer" />
                    </div>
                </a>

                <a href="{{route('shop.list')}}" class="grid-item">
                    <div class="grid-item__title">
                        <h3 class="title-main">Furniture</h3>
                        <h4 class="title-sub">{{$productItem}} item</h4>
                    </div>
                    <div class="grid-item__thumb">
                        <img src="{{asset('assets/frontend')}}/img/modern-luxury-aesthetics.jpg" alt="furniture" />
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Register area -->
    <section class="register-area">
        <div class="container-alt">
            <h2 class="register-title">Explaining Video</h2>
            <div class="register-row row">
                <div class="register-video col-lg-7 col-md-6">
                    <a
                        href="https://www.youtube.com/watch?v=xRMPKQweySE"
                        class="video-block"
                    >
                        <figure>
                            <img src="{{asset('assets/frontend')}}/img/modern-luxury-aesthetics.jpg" alt="" />
                        </figure>
                        <div class="icon">
                            <svg
                                width="132"
                                height="132"
                                viewBox="0 0 132 132"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <ellipse
                                    opacity="0.78"
                                    cx="65.9729"
                                    cy="66.051"
                                    rx="65.428"
                                    ry="65.2375"
                                    fill="#e28c71"
                                ></ellipse>
                                <ellipse
                                    cx="65.973"
                                    cy="66.0509"
                                    rx="37.724"
                                    ry="37.6142"
                                    fill="white"
                                ></ellipse>
                                <path
                                    d="M83.0376 67.581L58.0522 51.2764V83.8857L83.0376 67.581Z"
                                    fill="black"
                                ></path>
                            </svg>
                        </div>
                    </a>
                    <h2 class="video-title">Register Now</h2>
                </div>


                <div class="register-form col-lg-5 col-md-6">
                    <form action="{{route('support.message.send')}}" method="post">
                        @csrf
                        <label for="first-name">Name</label>
                        <input type="text" name="sender_name" id="rtr-first-name"  required/>
                        <label for="last-name">Email</label>
                        <input type="email" name="sender_email" id="rtr-last-name"  required/>
                        <label for="rtr-email">Message</label>
                        <textarea name="sender_message" class="form-control" id="" cols="3" rows="2" required></textarea>
                        <input type="submit" value="Send" />
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Items slider -->
    <section class="products-slider">
        <h2 class="products-slider__title">New Items</h2>
        <div class="slider-wrapper">
            @foreach($shopProductList as $product)
            <a href="{{route('shop.product.details',['product_id'=>$product->id])}}" class="slider-item">
                <div class="slider-image">
                    @if(count($product->productImage)>0)
                        <img  src="{{asset($product->productImage[0]->image)}}" alt="" />
                        @else
                        <img src="{{asset('assets/frontend')}}/img/sl-alt1.webp" alt="" />
                    @endif

                </div>
                <div class="slider-item__text">
                    <h3 class="title">{{$product->name}}</h3>
                    <div class="ratting">
                      {{$product->avg_rating}}
                        <span class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6.19 5.93">
                  <g id="Layer_2" data-name="Layer 2">
                    <g id="Layer_1-2" data-name="Layer 1">
                      <path
                          d="M2.7.29a.41.41,0,0,1,.79,0l.45,1.37A.41.41,0,0,0,4.33,2H5.78A.41.41,0,0,1,6,2.7l-1.17.85A.42.42,0,0,0,4.7,4l.45,1.37a.42.42,0,0,1-.64.47L3.34,5a.44.44,0,0,0-.49,0l-1.16.85A.42.42,0,0,1,1,5.38L1.49,4a.41.41,0,0,0-.15-.46L.17,2.7A.42.42,0,0,1,.42,2H1.86a.43.43,0,0,0,.4-.29Z"
                          style="fill: #e28c71"
                      />
                    </g>
                  </g>
                </svg>
              </span>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </section>




{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-md-8">--}}
{{--                    <button onclick="startFCM()"--}}
{{--                            class="btn btn-danger btn-flat">Allow notification--}}
{{--                    </button>--}}
{{--                    <div class="card mt-3">--}}
{{--                        <div class="card-body">--}}
{{--                            @if (session('status'))--}}
{{--                                <div class="alert alert-success" role="alert">--}}
{{--                                    {{ session('status') }}--}}
{{--                                </div>--}}
{{--                            @endif--}}
{{--                            <form action="{{ route('send.web-notification') }}" method="POST">--}}
{{--                                @csrf--}}
{{--                                <div class="form-group">--}}
{{--                                    <label>Message Title</label>--}}
{{--                                    <input type="text" class="form-control" name="title">--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label>Message Body</label>--}}
{{--                                    <textarea class="form-control" name="body"></textarea>--}}
{{--                                </div>--}}
{{--                                <button type="submit" class="btn btn-success btn-block">Send Notification</button>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </section>

@endsection
@section('js_plugins')
@endsection
@section('js')
{{--    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>--}}

@endsection
