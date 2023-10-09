@extends('frontend.layout.layout')
@section('main_content')
    <section class="hero products-hero">
        <div class="hero__thumb">
            <img src="{{asset('assets/frontend')}}/img/head-banner.jpg" alt="products_hero_thumb" />
        </div>
        <a href="#" class="products-hero-caption">Wish List</a>
    </section>

    <section class="shop">
        <div class="container">
            <div class="cards">
                @if($productList)
                    @foreach($productList as $product)
                        <div class="card">
                            <figure>

                                @if( count($product->productInfo->productImage)>0)
                                    <a href="{{route('shop.product.details',['product_id'=>$product->productInfo->id])}}"><img class="productImg" src="{{asset($product->productInfo->productImage[0]->image)}}" alt="" /></a>

                                @else
                                    <a href="{{route('shop.product.details',['product_id'=>$product->productInfo->id])}}"><img class="productImg" src="{{asset('img/no_img.jpg')}}" alt="" /></a>
                                @endif
                            </figure>
                            <div class="content">
                                <div class="card__title-icons">
                                    <h3><a href="#">{{$product->productInfo->name}}</a></h3>
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
                                        <div class="ratting active-ratting" style="width:{{(100*$product->productInfo->avg_rating)/5}}%">
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
                                    <a class="btn" href="{{route('shop.product.details',['product_id'=>$product->productInfo->id])}}">Add to Cart</a>
                                    @if($product->productInfo->ar_img)
                                        <a class="btn" href="{{route('shop.product.ar.add',['product_id'=>$product->productInfo->id])}}">Ar</a>
                                    @endif
                                    <span>{{$product->productInfo->price}}</span>

                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
                <!-- Product -->
            </div>
        </div>
    </section>

@endsection
@section('js_plugins')
@endsection
@section('js')
    <script>
        function firstLogin(){
            toastr.error("please login first")
        }
    </script>
@endsection
