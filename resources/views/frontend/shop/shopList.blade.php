@extends('frontend.layout.layout')
@section('main_content')
    <section class="shop">
        <div class="container">
            <div class="cards">
                @foreach($shopList as $shop)
                    <div class="card">
                        <figure>
                            @if($shop->details)
                                @if($shop->details->top_img)
                                    <a href="{{route('shop.profile.view',$shop->id)}}">
                                        <img class="shopimg"
                                             src="{{asset($shop->details->top_img)}}"
                                             alt=""/></a>
                                @else
                                    <a href="{{route('shop.profile.view',$shop->id)}}">
                                        <img class="shopimg"
                                             src="{{asset('img/no_img.jpg')}}"
                                             alt=""/></a>
                                @endif
                            @else
                                <a href="{{route('shop.profile.view',$shop->id)}}">
                                    <img class="shopimg"
                                         src="{{asset('img/no_img.jpg')}}"
                                         alt=""/></a>
                            @endif
                        </figure>
                        <div class="content">
                            <div class="card__title-icons">
                                @if($shop->details)
                                    <h3>
                                        <a href="{{route('shop.profile.view',$shop->id)}}">{{$shop->details->name}}</a>
                                    </h3>
                                @endif
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
                                    <div class="ratting active-ratting" style="width:{{(100*$shop->avg_rating)/5}}%">
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
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        {{ $shopList->links() }}
    </section>

@endsection
@section('js_plugins')
@endsection
@section('js')
@endsection
