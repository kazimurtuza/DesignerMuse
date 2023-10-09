@extends('frontend.layout.layout')
@section('main_content')

    <nav class="category-nav">
        <div class="container">
            <h3 class="title">Shopping Cart</h3>
        </div>
    </nav>

    <!-- Cart Table -->
    <div class="cart-table">
        <div class="container">
            <table>
                <tbody>
                @foreach($cartList as $list)
                    <tr>
                        <td class="cart-product-img">
                            <img src="{{asset($list->options->img)}}" alt=""/>
                        </td>
                        <td class="about-product">
                            <span class="product-category">{{$list->name}}</span>
                            <div class="quantity">
                                <div class="quantity-wrapper">
                                    <a href="{{route('card.item.inc.dec',['type'=>'inc','product_id'=>$list->rowId])}}" class="quantity-increase quantitye-btn" type="button">
                                        +
                                    </a>
                                    <input type="text" name="quantity" value="{{$list->qty}}" class="quantity-value" id="quantity-no"/>

                                    <a href="{{route('card.item.inc.dec',['type'=>'dec','product_id'=>$list->rowId])}}" class="quantity-decrease quantitye-btn bottom-spacing" type="button">
                                        -
                                    </a>
                                </div>
                            </div>
                            <span>${{$list->subtotal+($list->options->shipping_cost*$list->qty)}}</span>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Shopping form area  -->
    <form action="{{route('user.cart.customer')}}" method="post">
        @csrf
        <section class="shopping-form-area">
            <div class="container">
                <div class="inner">
                    <div class="shopping-form__left">
                        <h2 class="title">Personal Information</h2>
                        {{--                    <form action="#">--}}
                        <div>
                            <label for="first-name">First name</label>
                            <input type="text" name="" id="first-name" required/>
                        </div>

                        <div>
                            <label for="last-name">Last name</label>
                            <input type="text" name="" id="last-name" required/>
                        </div>
                        {{--                    </form>--}}
                    </div>
                    <div class="shopping-form__right">
                        <h2 class="title">Personal Information</h2>
                        {{--                    <form action="#">--}}
                        <div class="form-row">
                            <div>
                                <label for="zip-code">Zip Code</label>
                                <input type="text" name="zip_code" id="zip-code" required/>
                            </div>

                            <div>
                                <label for="state">State</label>
                                <select name="state" id="state" required>
                                    <option value="" disabled selected hidden></option>
                                    @foreach(stateList() as $key=>$list)
                                        <option value="{{$key}}">{{$list}}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <div>
                            <label for="city">City</label>
                            <input type="text" name="city" id="city" required/>
                        </div>

                        <div>
                            <label for="address">Address</label>
                            <input type="text" name="address" id="address" required/>
                        </div>
                        {{--                    </form>--}}
                    </div>
                </div>
                <input type="submit" class="submit-btn" value="Pay Now"/>
            </div>
        </section>

        {{--    <section class="payment-info">--}}
        {{--        <div class="container">--}}
        {{--            <div class="inner">--}}
        {{--                <h2 class="title">Payment Information</h2>--}}
        {{--                <form action="#" class="form">--}}
        {{--                    <div class="form__row">--}}
        {{--                        <div class="form__col">--}}
        {{--                            <div class="card">--}}
        {{--                                <label for="card">--}}
        {{--                    <span>--}}
        {{--                      <svg--}}
        {{--                          xmlns="http://www.w3.org/2000/svg"--}}
        {{--                          viewBox="0 0 10.88 7.81"--}}
        {{--                      >--}}
        {{--                        <defs>--}}
        {{--                          <style>--}}
        {{--                            .cls-1 {--}}
        {{--                                fill: #1a2e35;--}}
        {{--                            }--}}
        {{--                          </style>--}}
        {{--                        </defs>--}}
        {{--                        <g id="Layer_2" data-name="Layer 2">--}}
        {{--                          <g id="Layer_1-2" data-name="Layer 1">--}}
        {{--                            <path--}}
        {{--                                class="cls-1"--}}
        {{--                                d="M0,2.65V7.22a.58.58,0,0,0,.58.59H10.3a.58.58,0,0,0,.58-.59V2.65"--}}
        {{--                            />--}}
        {{--                            <path--}}
        {{--                                class="cls-1"--}}
        {{--                                d="M0,1.28H10.73S10.79,0,9.82,0h-9S-.08.08,0,1.28Z"--}}
        {{--                            />--}}
        {{--                            <path--}}
        {{--                                class="cls-1"--}}
        {{--                                d="M4.33,6.4c0,.43-.53.78-1.18.78S2,6.83,2,6.4s.53-.79,1.18-.79S4.33,6,4.33,6.4Z"--}}
        {{--                            />--}}
        {{--                          </g>--}}
        {{--                        </g>--}}
        {{--                      </svg>--}}
        {{--                    </span>--}}
        {{--                                    <span> Card</span></label--}}
        {{--                                >--}}
        {{--                                <input--}}
        {{--                                    type="text"--}}
        {{--                                    name="card-no"--}}
        {{--                                    id="card"--}}
        {{--                                    placeholder="4555 0000 7777 6666"--}}
        {{--                                />--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                        <div class="form__col form__col-2">--}}
        {{--                            <div class="expiration-day">--}}
        {{--                                <label for="expiration-day">Expiration Day</label>--}}
        {{--                                <input--}}
        {{--                                    type="number"--}}
        {{--                                    name="expiration-day"--}}
        {{--                                    id="expiration-day"--}}
        {{--                                    placeholder="12/30"--}}
        {{--                                />--}}
        {{--                            </div>--}}
        {{--                            <div class="cvv">--}}
        {{--                                <label for="cvv">cvv</label>--}}
        {{--                                <input type="number" name="cvv" id="cvv" placeholder="000" />--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                    <input type="submit" class="submit-btn" value="Pay Now" />--}}
        {{--                </form>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        {{--    </section>--}}
    </form>


@endsection
@section('js_plugins')
@endsection
@section('js')
@endsection
