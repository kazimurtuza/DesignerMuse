@extends('frontend.layout.layout')
@section('main_content')
    <!-- Hero -->
    <section class="hero products-hero">
        <div class="hero__thumb">
            <img src="{{asset('assets/frontend')}}/img/head-banner.jpg" alt="products_hero_thumb"/>
        </div>
        <a href="#" class="products-hero-caption">Order Here</a>
    </section>

    <!-- product slider -->
    <section class="product-slider-wrapper">
        <div class="container">
            <div class="product-slider">
                @foreach($productDetails->productImage as $productImg)
                    <div class="slider__item">
                        @if($productImg->image)
                        <img class="details-productImg" src="{{asset($productImg->image)}}" alt=""/>
                        @else
                            <img class="details-productImg" src="{{asset('img/no_img.jpg')}}" alt=""/>
                        @endif

                    </div>
                @endforeach
            </div>
            <div class="slider-gallery">
                @foreach($productDetails->productImage as $productImgSm)
                    <div class="slider-gallery__item">
                        <img src="{{asset($productImgSm->image)}}" alt=""/>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <!-- Product Info -->
    <section class="product-info">
        <div class="container">
            <div class="row">
                <div class="col col-lg-6">
                    <div>
                        <h3 class="product-category">{{$productDetails->name}}</h3>
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
                      ></path>
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
                      ></path>
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
                      ></path>
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
                      ></path>
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
                      ></path>
                    </svg>
                  </span>
                            </div>
                            <div class="ratting active-ratting" style="width:{{(100*$productDetails->avg_rating)/5}}%">
                  <span>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="currentColor"
                    >
                      <path
                          d="M12,1.5l3.09,6.3,6.91,1,-5,4.87,1.18,6.88,-6.18,-3.25,-6.18,3.25,1.18,-6.88,-5-4.87,6.91,-1Z"
                      ></path>
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
                      ></path>
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
                      ></path>
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
                      ></path>
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
                      ></path>
                    </svg>
                  </span>
                            </div>
                        </div>
                    </div>
                    <div>


                        @if(\Illuminate\Support\Facades\Auth::user())
                        <form action="{{route('user.cart.add')}}" method="get" id="addtocart">
                            <input type="hidden" name="product_id" value="{{$product->id}}">
                            <input type="hidden" name="shop_id" value="{{$product->user_id}}">
                            <input type="hidden" name="variant_id" class="variant_id">
                            <input type="hidden" name="qty" id="qty" value="1">
                            <button type="submit" class="btn">Add to Cart</button>
                        </form>
                        @else
                            <button  onclick="toastr.error('Login first')" class="btn">Add to Cart</button>
                        @endif
                        @if($productDetails->is_variant==0)
                            <p class="price">$<span id="productPrice">{{$productDetails->price}}</span></p>
                        @elseif($productDetails->is_variant==1)
                            @if($maxPrice==$minPrice)
                                <p class="price">$ <span id="productPrice">{{$maxPrice}}</span></p>
                            @else
                                <p class="price">$ <span id="productPrice">{{ round($minPrice) }}-${{ round($maxPrice)}}</span></p>
                            @endif
                        @endif
                    </div>
                </div>
                <div class="col col-lg-6">
                    <form action="#">
                        <p>Color</p>
                        <div class="color-area">
                            @foreach($productDetails->colorVariant as $colorList)
                                <div class="color-1">
                                    <input type="radio" checked name="color" id="color{{$colorList->id}}"/>
                                    <label for="color{{$colorList->id}}" onclick="changePrice({{$colorList->price}},{{$colorList->id}})"
                                           style="background-color: {{$colorList->colorCode->color_code}}"></label>
                                </div>
                            @endforeach

                        </div>
                    </form>
                    <div class="quantity">
                        <p>Quantity</p>
                        <div class="quantity-wrapper">
                        <button
                                class="quantity-decrease quantitye-btn bottom-spacing"
                                type="button"
                                onclick="getQty()"
                            >
                                -
                            </button>

                            <input
                                type="text"
                                name="quantity"
                                value="1"
                                class="quantity-value"
                                id="quantity-no"
                            />
                            <button class="quantity-increase quantitye-btn" onclick="getQty()" type="button">
                                +
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Accordion -->
    <div class="accordion">
        <div class="container">
            <div class="accordion__wrapper">
                <div class="accordion__item">
                    <div class="content">
                        <h3 class="title">Product details</h3>
                        {{--                        <p>--}}
                        {{--                            Product Details--}}
                        {{--                        </p>--}}
                        <div class="accordion__item__body">
                            {!! $productDetails->description !!}
                        </div>
                    </div>

                    <div class="arrow">
                        <svg
                            fill="#000000"
                            height="800px"
                            width="800px"
                            version="1.1"
                            id="Layer_1"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 330 330"
                            xml:space="preserve"
                        >
                <path
                    id="XMLID_225_"
                    d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393
	c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393
	s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z"
                />
              </svg>
                    </div>
                </div>
                <div class="accordion__item">
                    <div class="content">
                        <h3 class="title">Measurements</h3>
                        {{--                        <p>--}}
                        {{--                           Measurements Details--}}
                        {{--                        </p>--}}
                        <div class="accordion__item__body">
                            <p>
                                {!! $productDetails->measurement !!}
                            </p>
                        </div>
                    </div>
                    <div class="arrow">
                        <svg
                            fill="#000000"
                            height="800px"
                            width="800px"
                            version="1.1"
                            id="Layer_1"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 330 330"
                            xml:space="preserve"
                        >
                <path
                    id="XMLID_225_"
                    d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393
	c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393
	s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z"
                />
              </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Related Products -->
    <section class="related-products">
        <div class="container">
            <h3 class="title">Related products</h3>
            <div class="cards">
                @foreach($related_products as $product)
                    <div class="card">
                        <figure>
                            @if( count($product->productImage)>0)
                                <a href="{{route('shop.product.details',['product_id'=>$product->id])}}">
                                    <img class="productImg" src="{{asset($product->productImage[0]->image)}}" alt=""/>
                                </a>
                            @else
                                <a href="{{route('shop.product.details',['product_id'=>$product->id])}}">
                                    <img class="productImg" src="{{asset('img/no_img.jpg')}}" alt=""/>
                                </a>
                            @endif
                        </figure>
                        <div class="content">
                            <div class="card__title-icons">
                                <h3><a href="#">{{$product->name}}</a></h3>
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
                        ></path>
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
                        ></path>
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
                        ></path>
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
                        ></path>
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
                        ></path>
                      </svg>
                    </span>
                                    </div>
                                    <div class="ratting active-ratting" style="width: 50%">
                    <span>
                      <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          fill="currentColor"
                      >
                        <path
                            d="M12,1.5l3.09,6.3,6.91,1,-5,4.87,1.18,6.88,-6.18,-3.25,-6.18,3.25,1.18,-6.88,-5-4.87,6.91,-1Z"
                        ></path>
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
                        ></path>
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
                        ></path>
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
                        ></path>
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
                        ></path>
                      </svg>
                    </span>
                                    </div>
                                </div>
                            </div>
                            <div class="card_price-btn">
                                {{--<a class="btn" href="#">Add to Cart</a>--}}
                                <div class="card_price-btn">
                                    <a href="{{route('shop.product.details',['product_id'=>$product->id])}}" class="btn" @if(Auth::check()) @else onclick="firstLogin()" @endif >Add to Cart</a>


                                </div>
                                @if($product->is_variant)
                                    <p>${{round($product->colorVariant->min('price'))}}-${{round($product->colorVariant->max('price'))}}</p>
                                @else
                                    <p>$ {{$product->price}}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
@section('js_plugins')
@endsection
@section('js')
    <script>
        function changePrice(data,variantId) {
            $('#productPrice').html(data);
            $('.variant_id').val(variantId)
        }

        function getQty(){
            $qty=$('#quantity-no').val();
            $total=parseFloat($qty)+parseFloat(1);
            $('#qty').val($total);

        }



        $("#addtocart").submit(function(e){
            @if(!Auth::check())
            toastr.error("Please first login as a user");
            @endif

            @if($isVariant)
            let variant_id= $('.variant_id').val();
            if(!variant_id){
                toastr.error("Please first select a variant");
                e.preventDefault()
            }
            @endif

        });


    </script>
    <script>
        function firstLogin(event) {
            event.preventDefault()
            toastr.error("Please first login as a customer")
        }
    </script>
@endsection
