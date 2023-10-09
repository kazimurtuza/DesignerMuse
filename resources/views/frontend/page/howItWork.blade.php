@extends('frontend.layout.layout')
@section('main_content')

    <!-- Hero -->
    <section class="hero how-it-works-hero">
        <div class="container">
            <div class="hero__text">
                <h1 class="hero__title">How it works</h1>
                <p class="hero__para">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                    ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.
                </p>
            </div>
        </div>
    </section>

    <!-- Tab  -->
    <section class="how-to-work-tab tab">
        <nav class="tab__menu">
            <ul class="tab__menu-list">
                <li>
                    <a href="#designer" class="tab__menu-link active">Designer</a>
                </li>
                <li><a href="#company" class="tab__menu-link">Company</a></li>
                <li><a href="#customer" class="tab__menu-link">Customer</a></li>
                <li><a href="#shop" class="tab__menu-link">Shop</a></li>
                <li><a href="#designer2" class="tab__menu-link">Designer</a></li>
            </ul>
        </nav>

        <section class="tab__body active-tab" id="designer">
            <!-- Feature Area -->
            <section class="feature">
                <div class="container">
                    <div class="feature__title">
                        <h4 class="feature__title-sub slice">Designer</h4>
                        <h2 class="feature__title-main">
                            On the other hand, we denounce with righteous
                        </h2>
                    </div>
                    <ul class="feature__list">
                        <li class="feature__list-item flex-wrap">
                            <div class="feature__list-item__icon">
                                <img src="{{asset('img')}}/img/feature-icon.png" alt="" />
                            </div>
                            <div class="feature__list-item__text">
                                <h3 class="feature__list-item__title">Schedule manage</h3>
                                <p class="feature__list-item__para">
                                    But I must explain to you how all this mistaken idea of
                                    denouncing pleasure and praising pain. Sed ut perspiciatis
                                    unde omnis iste natus error sit voluptatem accusantium
                                    doloremque laudantium, totam rem aperiam, eaque ipsa quae ab
                                    illo inventore veritatis et quasi architecto beatae vitae
                                    dicta sunt explicabo.
                                </p>
                            </div>
                        </li>
                        <li class="feature__list-item flex-wrap">
                            <div class="feature__list-item__icon">
                                <img src="{{asset('img')}}/img/feature-icon2.png" alt="" />
                            </div>
                            <div class="feature__list-item__text">
                                <h3 class="feature__list-item__title">Meeting with client</h3>
                                <p class="feature__list-item__para">
                                    Was born and I will give you a complete account of the
                                    system, and expound the actual teachings. Nemo enim ipsam
                                    voluptatem quia voluptas sit aspernatur aut odit aut fugit,
                                    sed quia consequuntur magni dolores eos qui ratione
                                    voluptatem sequi nesciunt. Neque porro quisquam est, qui
                                    dolorem ipsum quia dolor sit amet.
                                </p>
                            </div>
                        </li>
                        <li class="feature__list-item flex-wrap">
                            <div class="feature__list-item__icon">
                                <img src="{{asset('img')}}/img/feature-icon3.png" alt="" />
                            </div>
                            <div class="feature__list-item__text">
                                <h3 class="feature__list-item__title">Booking</h3>
                                <p class="feature__list-item__para">
                                    The great explorer of the truth, the master-builder of human
                                    happiness. No one rejects, dislikes, or avoids pleasure
                                    itself Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni
                                    dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                    porro quisquam est.
                                </p>
                            </div>
                        </li>
                        <li class="feature__list-item flex-wrap">
                            <div class="feature__list-item__icon">
                                <img src="{{asset('img')}}/img/feature-icon.png" alt="" />
                            </div>
                            <div class="feature__list-item__text">
                                <h3 class="feature__list-item__title">Create Project</h3>
                                <p class="feature__list-item__para">
                                    The great explorer of the truth, the master-builder of human
                                    happiness. No one rejects, dislikes, or avoids pleasure
                                    itself Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni
                                    dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                    porro quisquam est.
                                </p>
                            </div>
                        </li>
                        <li class="feature__list-item flex-wrap">
                            <div class="feature__list-item__icon">
                                <img src="{{asset('img')}}/img/feature-icon2.png" alt="" />
                            </div>
                            <div class="feature__list-item__text">
                                <h3 class="feature__list-item__title">Delivery Project</h3>
                                <p class="feature__list-item__para">
                                    The great explorer of the truth, the master-builder of human
                                    happiness. No one rejects, dislikes, or avoids pleasure
                                    itself Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni
                                    dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                    porro quisquam est.
                                </p>
                            </div>
                        </li>
                        <li class="feature__list-item flex-wrap">
                            <div class="feature__list-item__icon">
                                <img src="{{asset('img')}}/img/feature-icon3.png" alt="" />
                            </div>
                            <div class="feature__list-item__text">
                                <h3 class="feature__list-item__title">Reviews</h3>
                                <p class="feature__list-item__para">
                                    The great explorer of the truth, the master-builder of human
                                    happiness. No one rejects, dislikes, or avoids pleasure
                                    itself Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni
                                    dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                    porro quisquam est.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>

            <!-- User Companies -->
            <section class="user-companies">
                <div class="container">
                    <div class="user-companies__figure">
                        <img src="{{asset('img')}}/img/companies.png" alt="" />
                    </div>
                </div>
            </section>

            <!-- How Payments Work -->
            <section class="fig-content how-pmnts-work">
                <div class="container flex-wrap">
                    <figure class="fig-content__figure">
                        <img src="{{asset('img')}}/img/fig-content-img1.webp" alt="" />
                    </figure>
                    <div class="fig-content__text">
                        <h2 class="fig-content__title">How payments work</h2>
                        <ul class="fig-content__list">
                            <li class="fig-content__list-item flex-wrap">
                                <div class="fig-content__list-item__icon">
                                    <svg
                                        width="30"
                                        height="30"
                                        viewBox="0 0 30 30"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M13.25 17.25L10.5312 14.5312C10.3021 14.3021 10.0208 14.1875 9.6875 14.1875C9.35417 14.1875 9.0625 14.3125 8.8125 14.5625C8.58333 14.7917 8.46875 15.0833 8.46875 15.4375C8.46875 15.7917 8.58333 16.0833 8.8125 16.3125L12.375 19.875C12.6042 20.1042 12.8958 20.2188 13.25 20.2188C13.6042 20.2188 13.8958 20.1042 14.125 19.875L21.2188 12.7812C21.4479 12.5521 21.5625 12.2708 21.5625 11.9375C21.5625 11.6042 21.4375 11.3125 21.1875 11.0625C20.9583 10.8333 20.6667 10.7188 20.3125 10.7188C19.9583 10.7188 19.6667 10.8333 19.4375 11.0625L13.25 17.25ZM15 27.5C13.2708 27.5 11.6458 27.1717 10.125 26.515C8.60417 25.8592 7.28125 24.9688 6.15625 23.8438C5.03125 22.7188 4.14083 21.3958 3.485 19.875C2.82833 18.3542 2.5 16.7292 2.5 15C2.5 13.2708 2.82833 11.6458 3.485 10.125C4.14083 8.60417 5.03125 7.28125 6.15625 6.15625C7.28125 5.03125 8.60417 4.14042 10.125 3.48375C11.6458 2.82792 13.2708 2.5 15 2.5C16.7292 2.5 18.3542 2.82792 19.875 3.48375C21.3958 4.14042 22.7188 5.03125 23.8438 6.15625C24.9688 7.28125 25.8592 8.60417 26.515 10.125C27.1717 11.6458 27.5 13.2708 27.5 15C27.5 16.7292 27.1717 18.3542 26.515 19.875C25.8592 21.3958 24.9688 22.7188 23.8438 23.8438C22.7188 24.9688 21.3958 25.8592 19.875 26.515C18.3542 27.1717 16.7292 27.5 15 27.5Z"
                                            fill="#E39178"
                                        />
                                    </svg>
                                </div>

                                <p class="fig-content__list-item__para">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing. sed do
                                    eiusmod tempor incididunt ut labore.
                                </p>
                            </li>
                            <li class="fig-content__list-item flex-wrap">
                                <div class="fig-content__list-item__icon">
                                    <svg
                                        width="30"
                                        height="30"
                                        viewBox="0 0 30 30"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M13.25 17.25L10.5312 14.5312C10.3021 14.3021 10.0208 14.1875 9.6875 14.1875C9.35417 14.1875 9.0625 14.3125 8.8125 14.5625C8.58333 14.7917 8.46875 15.0833 8.46875 15.4375C8.46875 15.7917 8.58333 16.0833 8.8125 16.3125L12.375 19.875C12.6042 20.1042 12.8958 20.2188 13.25 20.2188C13.6042 20.2188 13.8958 20.1042 14.125 19.875L21.2188 12.7812C21.4479 12.5521 21.5625 12.2708 21.5625 11.9375C21.5625 11.6042 21.4375 11.3125 21.1875 11.0625C20.9583 10.8333 20.6667 10.7188 20.3125 10.7188C19.9583 10.7188 19.6667 10.8333 19.4375 11.0625L13.25 17.25ZM15 27.5C13.2708 27.5 11.6458 27.1717 10.125 26.515C8.60417 25.8592 7.28125 24.9688 6.15625 23.8438C5.03125 22.7188 4.14083 21.3958 3.485 19.875C2.82833 18.3542 2.5 16.7292 2.5 15C2.5 13.2708 2.82833 11.6458 3.485 10.125C4.14083 8.60417 5.03125 7.28125 6.15625 6.15625C7.28125 5.03125 8.60417 4.14042 10.125 3.48375C11.6458 2.82792 13.2708 2.5 15 2.5C16.7292 2.5 18.3542 2.82792 19.875 3.48375C21.3958 4.14042 22.7188 5.03125 23.8438 6.15625C24.9688 7.28125 25.8592 8.60417 26.515 10.125C27.1717 11.6458 27.5 13.2708 27.5 15C27.5 16.7292 27.1717 18.3542 26.515 19.875C25.8592 21.3958 24.9688 22.7188 23.8438 23.8438C22.7188 24.9688 21.3958 25.8592 19.875 26.515C18.3542 27.1717 16.7292 27.5 15 27.5Z"
                                            fill="#E39178"
                                        />
                                    </svg>
                                </div>

                                <p class="fig-content__list-item__para">
                                    Lorem ipsum dolor sit amet, sed do eiusmod tempor incididunt
                                    ut labore. consectetur adipiscing.
                                </p>
                            </li>
                            <li class="fig-content__list-item flex-wrap">
                                <div class="fig-content__list-item__icon">
                                    <svg
                                        width="30"
                                        height="30"
                                        viewBox="0 0 30 30"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M13.25 17.25L10.5312 14.5312C10.3021 14.3021 10.0208 14.1875 9.6875 14.1875C9.35417 14.1875 9.0625 14.3125 8.8125 14.5625C8.58333 14.7917 8.46875 15.0833 8.46875 15.4375C8.46875 15.7917 8.58333 16.0833 8.8125 16.3125L12.375 19.875C12.6042 20.1042 12.8958 20.2188 13.25 20.2188C13.6042 20.2188 13.8958 20.1042 14.125 19.875L21.2188 12.7812C21.4479 12.5521 21.5625 12.2708 21.5625 11.9375C21.5625 11.6042 21.4375 11.3125 21.1875 11.0625C20.9583 10.8333 20.6667 10.7188 20.3125 10.7188C19.9583 10.7188 19.6667 10.8333 19.4375 11.0625L13.25 17.25ZM15 27.5C13.2708 27.5 11.6458 27.1717 10.125 26.515C8.60417 25.8592 7.28125 24.9688 6.15625 23.8438C5.03125 22.7188 4.14083 21.3958 3.485 19.875C2.82833 18.3542 2.5 16.7292 2.5 15C2.5 13.2708 2.82833 11.6458 3.485 10.125C4.14083 8.60417 5.03125 7.28125 6.15625 6.15625C7.28125 5.03125 8.60417 4.14042 10.125 3.48375C11.6458 2.82792 13.2708 2.5 15 2.5C16.7292 2.5 18.3542 2.82792 19.875 3.48375C21.3958 4.14042 22.7188 5.03125 23.8438 6.15625C24.9688 7.28125 25.8592 8.60417 26.515 10.125C27.1717 11.6458 27.5 13.2708 27.5 15C27.5 16.7292 27.1717 18.3542 26.515 19.875C25.8592 21.3958 24.9688 22.7188 23.8438 23.8438C22.7188 24.9688 21.3958 25.8592 19.875 26.515C18.3542 27.1717 16.7292 27.5 15 27.5Z"
                                            fill="#E39178"
                                        />
                                    </svg>
                                </div>

                                <p class="fig-content__list-item__para">
                                    Lorem ipsum dolor sit amet, consectetur sed do eiusmod
                                    tempor incididunt ut labore. adipiscing.
                                </p>
                            </li>
                        </ul>
                        <a href="#" class="contact-link btn-solid">Contact Us</a>
                    </div>
                </div>
            </section>

            <!-- FAQ Section -->
            <section class="faq how-it-works-faq">
                <div class="container flex-wrap">
                    <div class="faq__text-area">
                        <h2 class="faq__title">Frequency aks questions</h2>
                        <p class="faq__para">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                            quae ab illo inventore veritatis et quasi architecto beatae
                            vitae dicta sunt explicabo.
                        </p>
                    </div>
                    <div class="accordion">
                        <div class="accordion-item">
                            <button id="accordion-button-1" aria-expanded="false">
                                <span class="accordion-title">What subject can I teach?</span>
                                <span class="icon" aria-hidden="true"></span>
                            </button>
                            <div class="accordion-content">
                                <p>
                                    The great explorer of the truth, the master-builder of human
                                    happiness. No one rejects, dislikes, or avoids pleasure
                                    itself Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni
                                    dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                    porro quisquam est.
                                </p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-2" aria-expanded="false">
                  <span class="accordion-title"
                  >What kind of tutors does look for?</span
                  >
                                <span class="icon" aria-hidden="true"></span>
                            </button>
                            <div class="accordion-content">
                                <p>
                                    The great explorer of the truth, the master-builder of human
                                    happiness. No one rejects, dislikes, or avoids pleasure
                                    itself Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni
                                    dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                    porro quisquam est.
                                </p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-3" aria-expanded="false">
                  <span class="accordion-title"
                  >How do I become an online?</span
                  >
                                <span class="icon" aria-hidden="true"></span>
                            </button>
                            <div class="accordion-content">
                                <p>
                                    The great explorer of the truth, the master-builder of human
                                    happiness. No one rejects, dislikes, or avoids pleasure
                                    itself Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni
                                    dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                    porro quisquam est.
                                </p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-4" aria-expanded="false">
                  <span class="accordion-title"
                  >How can I get my profile approved quickly?</span
                  >
                                <span class="icon" aria-hidden="true"></span>
                            </button>
                            <div class="accordion-content">
                                <p>
                                    The great explorer of the truth, the master-builder of human
                                    happiness. No one rejects, dislikes, or avoids pleasure
                                    itself Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni
                                    dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                    porro quisquam est.
                                </p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-5" aria-expanded="false">
                  <span class="accordion-title"
                  >Why should I teach on this website?</span
                  >
                                <span class="icon" aria-hidden="true"></span>
                            </button>
                            <div class="accordion-content">
                                <p>
                                    The great explorer of the truth, the master-builder of human
                                    happiness. No one rejects, dislikes, or avoids pleasure
                                    itself Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni
                                    dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                    porro quisquam est.
                                </p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-5" aria-expanded="false">
                  <span class="accordion-title"
                  >What computer equipment do I need?</span
                  >
                                <span class="icon" aria-hidden="true"></span>
                            </button>
                            <div class="accordion-content">
                                <p>
                                    The great explorer of the truth, the master-builder of human
                                    happiness. No one rejects, dislikes, or avoids pleasure
                                    itself Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni
                                    dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                    porro quisquam est.
                                </p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-5" aria-expanded="false">
                  <span class="accordion-title"
                  >Is it free to create a tutor profile?</span
                  >
                                <span class="icon" aria-hidden="true"></span>
                            </button>
                            <div class="accordion-content">
                                <p>
                                    The great explorer of the truth, the master-builder of human
                                    happiness. No one rejects, dislikes, or avoids pleasure
                                    itself Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni
                                    dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                    porro quisquam est.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>

        <section class="tab__body" id="company">
            <!-- Feature Area -->
            <section class="feature">
                <div class="container">
                    <div class="feature__title">
                        <h4 class="feature__title-sub slice">company</h4>
                        <h2 class="feature__title-main">
                            On the other hand, we denounce with righteous
                        </h2>
                    </div>
                    <ul class="feature__list">
                        <li class="feature__list-item flex-wrap">
                            <div class="feature__list-item__icon">
                                <img src="{{asset('img')}}/img/feature-icon.png" alt="" />
                            </div>
                            <div class="feature__list-item__text">
                                <h3 class="feature__list-item__title">Schedule manage</h3>
                                <p class="feature__list-item__para">
                                    But I must explain to you how all this mistaken idea of
                                    denouncing pleasure and praising pain. Sed ut perspiciatis
                                    unde omnis iste natus error sit voluptatem accusantium
                                    doloremque laudantium, totam rem aperiam, eaque ipsa quae ab
                                    illo inventore veritatis et quasi architecto beatae vitae
                                    dicta sunt explicabo.
                                </p>
                            </div>
                        </li>
                        <li class="feature__list-item flex-wrap">
                            <div class="feature__list-item__icon">
                                <img src="{{asset('img')}}/img/feature-icon2.png" alt="" />
                            </div>
                            <div class="feature__list-item__text">
                                <h3 class="feature__list-item__title">Meeting with client</h3>
                                <p class="feature__list-item__para">
                                    Was born and I will give you a complete account of the
                                    system, and expound the actual teachings. Nemo enim ipsam
                                    voluptatem quia voluptas sit aspernatur aut odit aut fugit,
                                    sed quia consequuntur magni dolores eos qui ratione
                                    voluptatem sequi nesciunt. Neque porro quisquam est, qui
                                    dolorem ipsum quia dolor sit amet.
                                </p>
                            </div>
                        </li>
                        <li class="feature__list-item flex-wrap">
                            <div class="feature__list-item__icon">
                                <img src="{{asset('img')}}/img/feature-icon3.png" alt="" />
                            </div>
                            <div class="feature__list-item__text">
                                <h3 class="feature__list-item__title">Booking</h3>
                                <p class="feature__list-item__para">
                                    The great explorer of the truth, the master-builder of human
                                    happiness. No one rejects, dislikes, or avoids pleasure
                                    itself Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni
                                    dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                    porro quisquam est.
                                </p>
                            </div>
                        </li>
                        <li class="feature__list-item flex-wrap">
                            <div class="feature__list-item__icon">
                                <img src="{{asset('img')}}/img/feature-icon.png" alt="" />
                            </div>
                            <div class="feature__list-item__text">
                                <h3 class="feature__list-item__title">Create Project</h3>
                                <p class="feature__list-item__para">
                                    The great explorer of the truth, the master-builder of human
                                    happiness. No one rejects, dislikes, or avoids pleasure
                                    itself Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni
                                    dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                    porro quisquam est.
                                </p>
                            </div>
                        </li>
                        <li class="feature__list-item flex-wrap">
                            <div class="feature__list-item__icon">
                                <img src="{{asset('img')}}/img/feature-icon2.png" alt="" />
                            </div>
                            <div class="feature__list-item__text">
                                <h3 class="feature__list-item__title">Delivery Project</h3>
                                <p class="feature__list-item__para">
                                    The great explorer of the truth, the master-builder of human
                                    happiness. No one rejects, dislikes, or avoids pleasure
                                    itself Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni
                                    dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                    porro quisquam est.
                                </p>
                            </div>
                        </li>
                        <li class="feature__list-item flex-wrap">
                            <div class="feature__list-item__icon">
                                <img src="{{asset('img')}}/img/feature-icon3.png" alt="" />
                            </div>
                            <div class="feature__list-item__text">
                                <h3 class="feature__list-item__title">Reviews</h3>
                                <p class="feature__list-item__para">
                                    The great explorer of the truth, the master-builder of human
                                    happiness. No one rejects, dislikes, or avoids pleasure
                                    itself Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni
                                    dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                    porro quisquam est.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>

            <!-- User Companies -->
            <section class="user-companies">
                <div class="container">
                    <div class="user-companies__figure">
                        <img src="{{asset('img')}}/img/companies.png" alt="" />
                    </div>
                </div>
            </section>

            <!-- How Payments Work -->
            <section class="fig-content how-pmnts-work">
                <div class="container flex-wrap">
                    <figure class="fig-content__figure">
                        <img src="{{asset('img')}}/img/hero-img.webp" alt="" />
                    </figure>
                    <div class="fig-content__text">
                        <h2 class="fig-content__title">How payments work</h2>
                        <ul class="fig-content__list">
                            <li class="fig-content__list-item flex-wrap">
                                <div class="fig-content__list-item__icon">
                                    <svg
                                        width="30"
                                        height="30"
                                        viewBox="0 0 30 30"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M13.25 17.25L10.5312 14.5312C10.3021 14.3021 10.0208 14.1875 9.6875 14.1875C9.35417 14.1875 9.0625 14.3125 8.8125 14.5625C8.58333 14.7917 8.46875 15.0833 8.46875 15.4375C8.46875 15.7917 8.58333 16.0833 8.8125 16.3125L12.375 19.875C12.6042 20.1042 12.8958 20.2188 13.25 20.2188C13.6042 20.2188 13.8958 20.1042 14.125 19.875L21.2188 12.7812C21.4479 12.5521 21.5625 12.2708 21.5625 11.9375C21.5625 11.6042 21.4375 11.3125 21.1875 11.0625C20.9583 10.8333 20.6667 10.7188 20.3125 10.7188C19.9583 10.7188 19.6667 10.8333 19.4375 11.0625L13.25 17.25ZM15 27.5C13.2708 27.5 11.6458 27.1717 10.125 26.515C8.60417 25.8592 7.28125 24.9688 6.15625 23.8438C5.03125 22.7188 4.14083 21.3958 3.485 19.875C2.82833 18.3542 2.5 16.7292 2.5 15C2.5 13.2708 2.82833 11.6458 3.485 10.125C4.14083 8.60417 5.03125 7.28125 6.15625 6.15625C7.28125 5.03125 8.60417 4.14042 10.125 3.48375C11.6458 2.82792 13.2708 2.5 15 2.5C16.7292 2.5 18.3542 2.82792 19.875 3.48375C21.3958 4.14042 22.7188 5.03125 23.8438 6.15625C24.9688 7.28125 25.8592 8.60417 26.515 10.125C27.1717 11.6458 27.5 13.2708 27.5 15C27.5 16.7292 27.1717 18.3542 26.515 19.875C25.8592 21.3958 24.9688 22.7188 23.8438 23.8438C22.7188 24.9688 21.3958 25.8592 19.875 26.515C18.3542 27.1717 16.7292 27.5 15 27.5Z"
                                            fill="#E39178"
                                        />
                                    </svg>
                                </div>

                                <p class="fig-content__list-item__para">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing. sed do
                                    eiusmod tempor incididunt ut labore.
                                </p>
                            </li>
                            <li class="fig-content__list-item flex-wrap">
                                <div class="fig-content__list-item__icon">
                                    <svg
                                        width="30"
                                        height="30"
                                        viewBox="0 0 30 30"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M13.25 17.25L10.5312 14.5312C10.3021 14.3021 10.0208 14.1875 9.6875 14.1875C9.35417 14.1875 9.0625 14.3125 8.8125 14.5625C8.58333 14.7917 8.46875 15.0833 8.46875 15.4375C8.46875 15.7917 8.58333 16.0833 8.8125 16.3125L12.375 19.875C12.6042 20.1042 12.8958 20.2188 13.25 20.2188C13.6042 20.2188 13.8958 20.1042 14.125 19.875L21.2188 12.7812C21.4479 12.5521 21.5625 12.2708 21.5625 11.9375C21.5625 11.6042 21.4375 11.3125 21.1875 11.0625C20.9583 10.8333 20.6667 10.7188 20.3125 10.7188C19.9583 10.7188 19.6667 10.8333 19.4375 11.0625L13.25 17.25ZM15 27.5C13.2708 27.5 11.6458 27.1717 10.125 26.515C8.60417 25.8592 7.28125 24.9688 6.15625 23.8438C5.03125 22.7188 4.14083 21.3958 3.485 19.875C2.82833 18.3542 2.5 16.7292 2.5 15C2.5 13.2708 2.82833 11.6458 3.485 10.125C4.14083 8.60417 5.03125 7.28125 6.15625 6.15625C7.28125 5.03125 8.60417 4.14042 10.125 3.48375C11.6458 2.82792 13.2708 2.5 15 2.5C16.7292 2.5 18.3542 2.82792 19.875 3.48375C21.3958 4.14042 22.7188 5.03125 23.8438 6.15625C24.9688 7.28125 25.8592 8.60417 26.515 10.125C27.1717 11.6458 27.5 13.2708 27.5 15C27.5 16.7292 27.1717 18.3542 26.515 19.875C25.8592 21.3958 24.9688 22.7188 23.8438 23.8438C22.7188 24.9688 21.3958 25.8592 19.875 26.515C18.3542 27.1717 16.7292 27.5 15 27.5Z"
                                            fill="#E39178"
                                        />
                                    </svg>
                                </div>

                                <p class="fig-content__list-item__para">
                                    Lorem ipsum dolor sit amet, sed do eiusmod tempor incididunt
                                    ut labore. consectetur adipiscing.
                                </p>
                            </li>
                            <li class="fig-content__list-item flex-wrap">
                                <div class="fig-content__list-item__icon">
                                    <svg
                                        width="30"
                                        height="30"
                                        viewBox="0 0 30 30"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M13.25 17.25L10.5312 14.5312C10.3021 14.3021 10.0208 14.1875 9.6875 14.1875C9.35417 14.1875 9.0625 14.3125 8.8125 14.5625C8.58333 14.7917 8.46875 15.0833 8.46875 15.4375C8.46875 15.7917 8.58333 16.0833 8.8125 16.3125L12.375 19.875C12.6042 20.1042 12.8958 20.2188 13.25 20.2188C13.6042 20.2188 13.8958 20.1042 14.125 19.875L21.2188 12.7812C21.4479 12.5521 21.5625 12.2708 21.5625 11.9375C21.5625 11.6042 21.4375 11.3125 21.1875 11.0625C20.9583 10.8333 20.6667 10.7188 20.3125 10.7188C19.9583 10.7188 19.6667 10.8333 19.4375 11.0625L13.25 17.25ZM15 27.5C13.2708 27.5 11.6458 27.1717 10.125 26.515C8.60417 25.8592 7.28125 24.9688 6.15625 23.8438C5.03125 22.7188 4.14083 21.3958 3.485 19.875C2.82833 18.3542 2.5 16.7292 2.5 15C2.5 13.2708 2.82833 11.6458 3.485 10.125C4.14083 8.60417 5.03125 7.28125 6.15625 6.15625C7.28125 5.03125 8.60417 4.14042 10.125 3.48375C11.6458 2.82792 13.2708 2.5 15 2.5C16.7292 2.5 18.3542 2.82792 19.875 3.48375C21.3958 4.14042 22.7188 5.03125 23.8438 6.15625C24.9688 7.28125 25.8592 8.60417 26.515 10.125C27.1717 11.6458 27.5 13.2708 27.5 15C27.5 16.7292 27.1717 18.3542 26.515 19.875C25.8592 21.3958 24.9688 22.7188 23.8438 23.8438C22.7188 24.9688 21.3958 25.8592 19.875 26.515C18.3542 27.1717 16.7292 27.5 15 27.5Z"
                                            fill="#E39178"
                                        />
                                    </svg>
                                </div>

                                <p class="fig-content__list-item__para">
                                    Lorem ipsum dolor sit amet, consectetur sed do eiusmod
                                    tempor incididunt ut labore. adipiscing.
                                </p>
                            </li>
                        </ul>
                        <a href="#" class="contact-link btn-solid">Contact Us</a>
                    </div>
                </div>
            </section>

            <!-- FAQ Section -->
            <section class="faq how-it-works-faq">
                <div class="container flex-wrap">
                    <div class="faq__text-area">
                        <h2 class="faq__title">Frequency aks questions</h2>
                        <p class="faq__para">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                            quae ab illo inventore veritatis et quasi architecto beatae
                            vitae dicta sunt explicabo.
                        </p>
                    </div>
                    <div class="accordion">
                        <div class="accordion-item">
                            <button id="accordion-button-1" aria-expanded="false">
                                <span class="accordion-title">What subject can I teach?</span>
                                <span class="icon" aria-hidden="true"></span>
                            </button>
                            <div class="accordion-content">
                                <p>
                                    The great explorer of the truth, the master-builder of human
                                    happiness. No one rejects, dislikes, or avoids pleasure
                                    itself Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni
                                    dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                    porro quisquam est.
                                </p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-2" aria-expanded="false">
                  <span class="accordion-title"
                  >What kind of tutors does look for?</span
                  >
                                <span class="icon" aria-hidden="true"></span>
                            </button>
                            <div class="accordion-content">
                                <p>
                                    The great explorer of the truth, the master-builder of human
                                    happiness. No one rejects, dislikes, or avoids pleasure
                                    itself Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni
                                    dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                    porro quisquam est.
                                </p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-3" aria-expanded="false">
                  <span class="accordion-title"
                  >How do I become an online?</span
                  >
                                <span class="icon" aria-hidden="true"></span>
                            </button>
                            <div class="accordion-content">
                                <p>
                                    The great explorer of the truth, the master-builder of human
                                    happiness. No one rejects, dislikes, or avoids pleasure
                                    itself Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni
                                    dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                    porro quisquam est.
                                </p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-4" aria-expanded="false">
                  <span class="accordion-title"
                  >How can I get my profile approved quickly?</span
                  >
                                <span class="icon" aria-hidden="true"></span>
                            </button>
                            <div class="accordion-content">
                                <p>
                                    The great explorer of the truth, the master-builder of human
                                    happiness. No one rejects, dislikes, or avoids pleasure
                                    itself Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni
                                    dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                    porro quisquam est.
                                </p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-5" aria-expanded="false">
                  <span class="accordion-title"
                  >Why should I teach on this website?</span
                  >
                                <span class="icon" aria-hidden="true"></span>
                            </button>
                            <div class="accordion-content">
                                <p>
                                    The great explorer of the truth, the master-builder of human
                                    happiness. No one rejects, dislikes, or avoids pleasure
                                    itself Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni
                                    dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                    porro quisquam est.
                                </p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-5" aria-expanded="false">
                  <span class="accordion-title"
                  >What computer equipment do I need?</span
                  >
                                <span class="icon" aria-hidden="true"></span>
                            </button>
                            <div class="accordion-content">
                                <p>
                                    The great explorer of the truth, the master-builder of human
                                    happiness. No one rejects, dislikes, or avoids pleasure
                                    itself Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni
                                    dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                    porro quisquam est.
                                </p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-5" aria-expanded="false">
                  <span class="accordion-title"
                  >Is it free to create a tutor profile?</span
                  >
                                <span class="icon" aria-hidden="true"></span>
                            </button>
                            <div class="accordion-content">
                                <p>
                                    The great explorer of the truth, the master-builder of human
                                    happiness. No one rejects, dislikes, or avoids pleasure
                                    itself Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni
                                    dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                    porro quisquam est.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>

        <section class="tab__body" id="customer">
            <!-- Feature Area -->
            <section class="feature">
                <div class="container">
                    <div class="feature__title">
                        <h4 class="feature__title-sub slice">customer</h4>
                        <h2 class="feature__title-main">
                            On the other hand, we denounce with righteous
                        </h2>
                    </div>
                    <ul class="feature__list">
                        <li class="feature__list-item flex-wrap">
                            <div class="feature__list-item__icon">
                                <img src="{{asset('img')}}/img/feature-icon.png" alt="" />
                            </div>
                            <div class="feature__list-item__text">
                                <h3 class="feature__list-item__title">Schedule manage</h3>
                                <p class="feature__list-item__para">
                                    But I must explain to you how all this mistaken idea of
                                    denouncing pleasure and praising pain. Sed ut perspiciatis
                                    unde omnis iste natus error sit voluptatem accusantium
                                    doloremque laudantium, totam rem aperiam, eaque ipsa quae ab
                                    illo inventore veritatis et quasi architecto beatae vitae
                                    dicta sunt explicabo.
                                </p>
                            </div>
                        </li>
                        <li class="feature__list-item flex-wrap">
                            <div class="feature__list-item__icon">
                                <img src="{{asset('img')}}/img/feature-icon2.png" alt="" />
                            </div>
                            <div class="feature__list-item__text">
                                <h3 class="feature__list-item__title">Meeting with client</h3>
                                <p class="feature__list-item__para">
                                    Was born and I will give you a complete account of the
                                    system, and expound the actual teachings. Nemo enim ipsam
                                    voluptatem quia voluptas sit aspernatur aut odit aut fugit,
                                    sed quia consequuntur magni dolores eos qui ratione
                                    voluptatem sequi nesciunt. Neque porro quisquam est, qui
                                    dolorem ipsum quia dolor sit amet.
                                </p>
                            </div>
                        </li>
                        <li class="feature__list-item flex-wrap">
                            <div class="feature__list-item__icon">
                                <img src="{{asset('img')}}/img/feature-icon3.png" alt="" />
                            </div>
                            <div class="feature__list-item__text">
                                <h3 class="feature__list-item__title">Booking</h3>
                                <p class="feature__list-item__para">
                                    The great explorer of the truth, the master-builder of human
                                    happiness. No one rejects, dislikes, or avoids pleasure
                                    itself Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni
                                    dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                    porro quisquam est.
                                </p>
                            </div>
                        </li>
                        <li class="feature__list-item flex-wrap">
                            <div class="feature__list-item__icon">
                                <img src="{{asset('img')}}/img/feature-icon.png" alt="" />
                            </div>
                            <div class="feature__list-item__text">
                                <h3 class="feature__list-item__title">Create Project</h3>
                                <p class="feature__list-item__para">
                                    The great explorer of the truth, the master-builder of human
                                    happiness. No one rejects, dislikes, or avoids pleasure
                                    itself Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni
                                    dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                    porro quisquam est.
                                </p>
                            </div>
                        </li>
                        <li class="feature__list-item flex-wrap">
                            <div class="feature__list-item__icon">
                                <img src="{{asset('img')}}/img/feature-icon2.png" alt="" />
                            </div>
                            <div class="feature__list-item__text">
                                <h3 class="feature__list-item__title">Delivery Project</h3>
                                <p class="feature__list-item__para">
                                    The great explorer of the truth, the master-builder of human
                                    happiness. No one rejects, dislikes, or avoids pleasure
                                    itself Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni
                                    dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                    porro quisquam est.
                                </p>
                            </div>
                        </li>
                        <li class="feature__list-item flex-wrap">
                            <div class="feature__list-item__icon">
                                <img src="{{asset('img')}}/img/feature-icon3.png" alt="" />
                            </div>
                            <div class="feature__list-item__text">
                                <h3 class="feature__list-item__title">Reviews</h3>
                                <p class="feature__list-item__para">
                                    The great explorer of the truth, the master-builder of human
                                    happiness. No one rejects, dislikes, or avoids pleasure
                                    itself Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni
                                    dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                    porro quisquam est.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>

            <!-- User Companies -->
            <section class="user-companies">
                <div class="container">
                    <div class="user-companies__figure">
                        <img src="{{asset('img')}}/img/companies.png" alt="" />
                    </div>
                </div>
            </section>

            <!-- How Payments Work -->
            <section class="fig-content how-pmnts-work">
                <div class="container flex-wrap">
                    <figure class="fig-content__figure">
                        <img src="{{asset('img')}}/img/hero-img.webp" alt="" />
                    </figure>
                    <div class="fig-content__text">
                        <h2 class="fig-content__title">How payments work</h2>
                        <ul class="fig-content__list">
                            <li class="fig-content__list-item flex-wrap">
                                <div class="fig-content__list-item__icon">
                                    <svg
                                        width="30"
                                        height="30"
                                        viewBox="0 0 30 30"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M13.25 17.25L10.5312 14.5312C10.3021 14.3021 10.0208 14.1875 9.6875 14.1875C9.35417 14.1875 9.0625 14.3125 8.8125 14.5625C8.58333 14.7917 8.46875 15.0833 8.46875 15.4375C8.46875 15.7917 8.58333 16.0833 8.8125 16.3125L12.375 19.875C12.6042 20.1042 12.8958 20.2188 13.25 20.2188C13.6042 20.2188 13.8958 20.1042 14.125 19.875L21.2188 12.7812C21.4479 12.5521 21.5625 12.2708 21.5625 11.9375C21.5625 11.6042 21.4375 11.3125 21.1875 11.0625C20.9583 10.8333 20.6667 10.7188 20.3125 10.7188C19.9583 10.7188 19.6667 10.8333 19.4375 11.0625L13.25 17.25ZM15 27.5C13.2708 27.5 11.6458 27.1717 10.125 26.515C8.60417 25.8592 7.28125 24.9688 6.15625 23.8438C5.03125 22.7188 4.14083 21.3958 3.485 19.875C2.82833 18.3542 2.5 16.7292 2.5 15C2.5 13.2708 2.82833 11.6458 3.485 10.125C4.14083 8.60417 5.03125 7.28125 6.15625 6.15625C7.28125 5.03125 8.60417 4.14042 10.125 3.48375C11.6458 2.82792 13.2708 2.5 15 2.5C16.7292 2.5 18.3542 2.82792 19.875 3.48375C21.3958 4.14042 22.7188 5.03125 23.8438 6.15625C24.9688 7.28125 25.8592 8.60417 26.515 10.125C27.1717 11.6458 27.5 13.2708 27.5 15C27.5 16.7292 27.1717 18.3542 26.515 19.875C25.8592 21.3958 24.9688 22.7188 23.8438 23.8438C22.7188 24.9688 21.3958 25.8592 19.875 26.515C18.3542 27.1717 16.7292 27.5 15 27.5Z"
                                            fill="#E39178"
                                        />
                                    </svg>
                                </div>

                                <p class="fig-content__list-item__para">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing. sed do
                                    eiusmod tempor incididunt ut labore.
                                </p>
                            </li>
                            <li class="fig-content__list-item flex-wrap">
                                <div class="fig-content__list-item__icon">
                                    <svg
                                        width="30"
                                        height="30"
                                        viewBox="0 0 30 30"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M13.25 17.25L10.5312 14.5312C10.3021 14.3021 10.0208 14.1875 9.6875 14.1875C9.35417 14.1875 9.0625 14.3125 8.8125 14.5625C8.58333 14.7917 8.46875 15.0833 8.46875 15.4375C8.46875 15.7917 8.58333 16.0833 8.8125 16.3125L12.375 19.875C12.6042 20.1042 12.8958 20.2188 13.25 20.2188C13.6042 20.2188 13.8958 20.1042 14.125 19.875L21.2188 12.7812C21.4479 12.5521 21.5625 12.2708 21.5625 11.9375C21.5625 11.6042 21.4375 11.3125 21.1875 11.0625C20.9583 10.8333 20.6667 10.7188 20.3125 10.7188C19.9583 10.7188 19.6667 10.8333 19.4375 11.0625L13.25 17.25ZM15 27.5C13.2708 27.5 11.6458 27.1717 10.125 26.515C8.60417 25.8592 7.28125 24.9688 6.15625 23.8438C5.03125 22.7188 4.14083 21.3958 3.485 19.875C2.82833 18.3542 2.5 16.7292 2.5 15C2.5 13.2708 2.82833 11.6458 3.485 10.125C4.14083 8.60417 5.03125 7.28125 6.15625 6.15625C7.28125 5.03125 8.60417 4.14042 10.125 3.48375C11.6458 2.82792 13.2708 2.5 15 2.5C16.7292 2.5 18.3542 2.82792 19.875 3.48375C21.3958 4.14042 22.7188 5.03125 23.8438 6.15625C24.9688 7.28125 25.8592 8.60417 26.515 10.125C27.1717 11.6458 27.5 13.2708 27.5 15C27.5 16.7292 27.1717 18.3542 26.515 19.875C25.8592 21.3958 24.9688 22.7188 23.8438 23.8438C22.7188 24.9688 21.3958 25.8592 19.875 26.515C18.3542 27.1717 16.7292 27.5 15 27.5Z"
                                            fill="#E39178"
                                        />
                                    </svg>
                                </div>

                                <p class="fig-content__list-item__para">
                                    Lorem ipsum dolor sit amet, sed do eiusmod tempor incididunt
                                    ut labore. consectetur adipiscing.
                                </p>
                            </li>
                            <li class="fig-content__list-item flex-wrap">
                                <div class="fig-content__list-item__icon">
                                    <svg
                                        width="30"
                                        height="30"
                                        viewBox="0 0 30 30"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M13.25 17.25L10.5312 14.5312C10.3021 14.3021 10.0208 14.1875 9.6875 14.1875C9.35417 14.1875 9.0625 14.3125 8.8125 14.5625C8.58333 14.7917 8.46875 15.0833 8.46875 15.4375C8.46875 15.7917 8.58333 16.0833 8.8125 16.3125L12.375 19.875C12.6042 20.1042 12.8958 20.2188 13.25 20.2188C13.6042 20.2188 13.8958 20.1042 14.125 19.875L21.2188 12.7812C21.4479 12.5521 21.5625 12.2708 21.5625 11.9375C21.5625 11.6042 21.4375 11.3125 21.1875 11.0625C20.9583 10.8333 20.6667 10.7188 20.3125 10.7188C19.9583 10.7188 19.6667 10.8333 19.4375 11.0625L13.25 17.25ZM15 27.5C13.2708 27.5 11.6458 27.1717 10.125 26.515C8.60417 25.8592 7.28125 24.9688 6.15625 23.8438C5.03125 22.7188 4.14083 21.3958 3.485 19.875C2.82833 18.3542 2.5 16.7292 2.5 15C2.5 13.2708 2.82833 11.6458 3.485 10.125C4.14083 8.60417 5.03125 7.28125 6.15625 6.15625C7.28125 5.03125 8.60417 4.14042 10.125 3.48375C11.6458 2.82792 13.2708 2.5 15 2.5C16.7292 2.5 18.3542 2.82792 19.875 3.48375C21.3958 4.14042 22.7188 5.03125 23.8438 6.15625C24.9688 7.28125 25.8592 8.60417 26.515 10.125C27.1717 11.6458 27.5 13.2708 27.5 15C27.5 16.7292 27.1717 18.3542 26.515 19.875C25.8592 21.3958 24.9688 22.7188 23.8438 23.8438C22.7188 24.9688 21.3958 25.8592 19.875 26.515C18.3542 27.1717 16.7292 27.5 15 27.5Z"
                                            fill="#E39178"
                                        />
                                    </svg>
                                </div>

                                <p class="fig-content__list-item__para">
                                    Lorem ipsum dolor sit amet, consectetur sed do eiusmod
                                    tempor incididunt ut labore. adipiscing.
                                </p>
                            </li>
                        </ul>
                        <a href="#" class="contact-link btn-solid">Contact Us</a>
                    </div>
                </div>
            </section>

            <!-- FAQ Section -->
            <section class="faq how-it-works-faq">
                <div class="container flex-wrap">
                    <div class="faq__text-area">
                        <h2 class="faq__title">Frequency aks questions</h2>
                        <p class="faq__para">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                            quae ab illo inventore veritatis et quasi architecto beatae
                            vitae dicta sunt explicabo.
                        </p>
                    </div>
                    <div class="accordion">
                        <div class="accordion-item">
                            <button id="accordion-button-1" aria-expanded="false">
                                <span class="accordion-title">What subject can I teach?</span>
                                <span class="icon" aria-hidden="true"></span>
                            </button>
                            <div class="accordion-content">
                                <p>
                                    The great explorer of the truth, the master-builder of human
                                    happiness. No one rejects, dislikes, or avoids pleasure
                                    itself Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni
                                    dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                    porro quisquam est.
                                </p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-2" aria-expanded="false">
                  <span class="accordion-title"
                  >What kind of tutors does look for?</span
                  >
                                <span class="icon" aria-hidden="true"></span>
                            </button>
                            <div class="accordion-content">
                                <p>
                                    The great explorer of the truth, the master-builder of human
                                    happiness. No one rejects, dislikes, or avoids pleasure
                                    itself Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni
                                    dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                    porro quisquam est.
                                </p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-3" aria-expanded="false">
                  <span class="accordion-title"
                  >How do I become an online?</span
                  >
                                <span class="icon" aria-hidden="true"></span>
                            </button>
                            <div class="accordion-content">
                                <p>
                                    The great explorer of the truth, the master-builder of human
                                    happiness. No one rejects, dislikes, or avoids pleasure
                                    itself Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni
                                    dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                    porro quisquam est.
                                </p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-4" aria-expanded="false">
                  <span class="accordion-title"
                  >How can I get my profile approved quickly?</span
                  >
                                <span class="icon" aria-hidden="true"></span>
                            </button>
                            <div class="accordion-content">
                                <p>
                                    The great explorer of the truth, the master-builder of human
                                    happiness. No one rejects, dislikes, or avoids pleasure
                                    itself Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni
                                    dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                    porro quisquam est.
                                </p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-5" aria-expanded="false">
                  <span class="accordion-title"
                  >Why should I teach on this website?</span
                  >
                                <span class="icon" aria-hidden="true"></span>
                            </button>
                            <div class="accordion-content">
                                <p>
                                    The great explorer of the truth, the master-builder of human
                                    happiness. No one rejects, dislikes, or avoids pleasure
                                    itself Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni
                                    dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                    porro quisquam est.
                                </p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-5" aria-expanded="false">
                  <span class="accordion-title"
                  >What computer equipment do I need?</span
                  >
                                <span class="icon" aria-hidden="true"></span>
                            </button>
                            <div class="accordion-content">
                                <p>
                                    The great explorer of the truth, the master-builder of human
                                    happiness. No one rejects, dislikes, or avoids pleasure
                                    itself Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni
                                    dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                    porro quisquam est.
                                </p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-5" aria-expanded="false">
                  <span class="accordion-title"
                  >Is it free to create a tutor profile?</span
                  >
                                <span class="icon" aria-hidden="true"></span>
                            </button>
                            <div class="accordion-content">
                                <p>
                                    The great explorer of the truth, the master-builder of human
                                    happiness. No one rejects, dislikes, or avoids pleasure
                                    itself Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni
                                    dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                    porro quisquam est.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>

        <section class="tab__body" id="shop">
            <!-- Feature Area -->
            <section class="feature">
                <div class="container">
                    <div class="feature__title">
                        <h4 class="feature__title-sub slice">Shop</h4>
                        <h2 class="feature__title-main">
                            On the other hand, we denounce with righteous
                        </h2>
                    </div>
                    <ul class="feature__list">
                        <li class="feature__list-item flex-wrap">
                            <div class="feature__list-item__icon">
                                <img src="{{asset('img')}}/img/feature-icon.png" alt="" />
                            </div>
                            <div class="feature__list-item__text">
                                <h3 class="feature__list-item__title">Schedule manage</h3>
                                <p class="feature__list-item__para">
                                    But I must explain to you how all this mistaken idea of
                                    denouncing pleasure and praising pain. Sed ut perspiciatis
                                    unde omnis iste natus error sit voluptatem accusantium
                                    doloremque laudantium, totam rem aperiam, eaque ipsa quae ab
                                    illo inventore veritatis et quasi architecto beatae vitae
                                    dicta sunt explicabo.
                                </p>
                            </div>
                        </li>
                        <li class="feature__list-item flex-wrap">
                            <div class="feature__list-item__icon">
                                <img src="{{asset('img')}}/img/feature-icon2.png" alt="" />
                            </div>
                            <div class="feature__list-item__text">
                                <h3 class="feature__list-item__title">Meeting with client</h3>
                                <p class="feature__list-item__para">
                                    Was born and I will give you a complete account of the
                                    system, and expound the actual teachings. Nemo enim ipsam
                                    voluptatem quia voluptas sit aspernatur aut odit aut fugit,
                                    sed quia consequuntur magni dolores eos qui ratione
                                    voluptatem sequi nesciunt. Neque porro quisquam est, qui
                                    dolorem ipsum quia dolor sit amet.
                                </p>
                            </div>
                        </li>
                        <li class="feature__list-item flex-wrap">
                            <div class="feature__list-item__icon">
                                <img src="{{asset('img')}}/img/feature-icon3.png" alt="" />
                            </div>
                            <div class="feature__list-item__text">
                                <h3 class="feature__list-item__title">Booking</h3>
                                <p class="feature__list-item__para">
                                    The great explorer of the truth, the master-builder of human
                                    happiness. No one rejects, dislikes, or avoids pleasure
                                    itself Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni
                                    dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                    porro quisquam est.
                                </p>
                            </div>
                        </li>
                        <li class="feature__list-item flex-wrap">
                            <div class="feature__list-item__icon">
                                <img src="{{asset('img')}}/img/feature-icon.png" alt="" />
                            </div>
                            <div class="feature__list-item__text">
                                <h3 class="feature__list-item__title">Create Project</h3>
                                <p class="feature__list-item__para">
                                    The great explorer of the truth, the master-builder of human
                                    happiness. No one rejects, dislikes, or avoids pleasure
                                    itself Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni
                                    dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                    porro quisquam est.
                                </p>
                            </div>
                        </li>
                        <li class="feature__list-item flex-wrap">
                            <div class="feature__list-item__icon">
                                <img src="{{asset('img')}}/img/feature-icon2.png" alt="" />
                            </div>
                            <div class="feature__list-item__text">
                                <h3 class="feature__list-item__title">Delivery Project</h3>
                                <p class="feature__list-item__para">
                                    The great explorer of the truth, the master-builder of human
                                    happiness. No one rejects, dislikes, or avoids pleasure
                                    itself Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni
                                    dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                    porro quisquam est.
                                </p>
                            </div>
                        </li>
                        <li class="feature__list-item flex-wrap">
                            <div class="feature__list-item__icon">
                                <img src="{{asset('img')}}/img/feature-icon3.png" alt="" />
                            </div>
                            <div class="feature__list-item__text">
                                <h3 class="feature__list-item__title">Reviews</h3>
                                <p class="feature__list-item__para">
                                    The great explorer of the truth, the master-builder of human
                                    happiness. No one rejects, dislikes, or avoids pleasure
                                    itself Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni
                                    dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                    porro quisquam est.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>

            <!-- User Companies -->
            <section class="user-companies">
                <div class="container">
                    <div class="user-companies__figure">
                        <img src="{{asset('img')}}/img/companies.png" alt="" />
                    </div>
                </div>
            </section>

            <!-- How Payments Work -->
            <section class="fig-content how-pmnts-work">
                <div class="container flex-wrap">
                    <figure class="fig-content__figure">
                        <img src="{{asset('img')}}/img/hero-img.webp" alt="" />
                    </figure>
                    <div class="fig-content__text">
                        <h2 class="fig-content__title">How payments work</h2>
                        <ul class="fig-content__list">
                            <li class="fig-content__list-item flex-wrap">
                                <div class="fig-content__list-item__icon">
                                    <svg
                                        width="30"
                                        height="30"
                                        viewBox="0 0 30 30"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M13.25 17.25L10.5312 14.5312C10.3021 14.3021 10.0208 14.1875 9.6875 14.1875C9.35417 14.1875 9.0625 14.3125 8.8125 14.5625C8.58333 14.7917 8.46875 15.0833 8.46875 15.4375C8.46875 15.7917 8.58333 16.0833 8.8125 16.3125L12.375 19.875C12.6042 20.1042 12.8958 20.2188 13.25 20.2188C13.6042 20.2188 13.8958 20.1042 14.125 19.875L21.2188 12.7812C21.4479 12.5521 21.5625 12.2708 21.5625 11.9375C21.5625 11.6042 21.4375 11.3125 21.1875 11.0625C20.9583 10.8333 20.6667 10.7188 20.3125 10.7188C19.9583 10.7188 19.6667 10.8333 19.4375 11.0625L13.25 17.25ZM15 27.5C13.2708 27.5 11.6458 27.1717 10.125 26.515C8.60417 25.8592 7.28125 24.9688 6.15625 23.8438C5.03125 22.7188 4.14083 21.3958 3.485 19.875C2.82833 18.3542 2.5 16.7292 2.5 15C2.5 13.2708 2.82833 11.6458 3.485 10.125C4.14083 8.60417 5.03125 7.28125 6.15625 6.15625C7.28125 5.03125 8.60417 4.14042 10.125 3.48375C11.6458 2.82792 13.2708 2.5 15 2.5C16.7292 2.5 18.3542 2.82792 19.875 3.48375C21.3958 4.14042 22.7188 5.03125 23.8438 6.15625C24.9688 7.28125 25.8592 8.60417 26.515 10.125C27.1717 11.6458 27.5 13.2708 27.5 15C27.5 16.7292 27.1717 18.3542 26.515 19.875C25.8592 21.3958 24.9688 22.7188 23.8438 23.8438C22.7188 24.9688 21.3958 25.8592 19.875 26.515C18.3542 27.1717 16.7292 27.5 15 27.5Z"
                                            fill="#E39178"
                                        />
                                    </svg>
                                </div>

                                <p class="fig-content__list-item__para">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing. sed do
                                    eiusmod tempor incididunt ut labore.
                                </p>
                            </li>
                            <li class="fig-content__list-item flex-wrap">
                                <div class="fig-content__list-item__icon">
                                    <svg
                                        width="30"
                                        height="30"
                                        viewBox="0 0 30 30"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M13.25 17.25L10.5312 14.5312C10.3021 14.3021 10.0208 14.1875 9.6875 14.1875C9.35417 14.1875 9.0625 14.3125 8.8125 14.5625C8.58333 14.7917 8.46875 15.0833 8.46875 15.4375C8.46875 15.7917 8.58333 16.0833 8.8125 16.3125L12.375 19.875C12.6042 20.1042 12.8958 20.2188 13.25 20.2188C13.6042 20.2188 13.8958 20.1042 14.125 19.875L21.2188 12.7812C21.4479 12.5521 21.5625 12.2708 21.5625 11.9375C21.5625 11.6042 21.4375 11.3125 21.1875 11.0625C20.9583 10.8333 20.6667 10.7188 20.3125 10.7188C19.9583 10.7188 19.6667 10.8333 19.4375 11.0625L13.25 17.25ZM15 27.5C13.2708 27.5 11.6458 27.1717 10.125 26.515C8.60417 25.8592 7.28125 24.9688 6.15625 23.8438C5.03125 22.7188 4.14083 21.3958 3.485 19.875C2.82833 18.3542 2.5 16.7292 2.5 15C2.5 13.2708 2.82833 11.6458 3.485 10.125C4.14083 8.60417 5.03125 7.28125 6.15625 6.15625C7.28125 5.03125 8.60417 4.14042 10.125 3.48375C11.6458 2.82792 13.2708 2.5 15 2.5C16.7292 2.5 18.3542 2.82792 19.875 3.48375C21.3958 4.14042 22.7188 5.03125 23.8438 6.15625C24.9688 7.28125 25.8592 8.60417 26.515 10.125C27.1717 11.6458 27.5 13.2708 27.5 15C27.5 16.7292 27.1717 18.3542 26.515 19.875C25.8592 21.3958 24.9688 22.7188 23.8438 23.8438C22.7188 24.9688 21.3958 25.8592 19.875 26.515C18.3542 27.1717 16.7292 27.5 15 27.5Z"
                                            fill="#E39178"
                                        />
                                    </svg>
                                </div>

                                <p class="fig-content__list-item__para">
                                    Lorem ipsum dolor sit amet, sed do eiusmod tempor incididunt
                                    ut labore. consectetur adipiscing.
                                </p>
                            </li>
                            <li class="fig-content__list-item flex-wrap">
                                <div class="fig-content__list-item__icon">
                                    <svg
                                        width="30"
                                        height="30"
                                        viewBox="0 0 30 30"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M13.25 17.25L10.5312 14.5312C10.3021 14.3021 10.0208 14.1875 9.6875 14.1875C9.35417 14.1875 9.0625 14.3125 8.8125 14.5625C8.58333 14.7917 8.46875 15.0833 8.46875 15.4375C8.46875 15.7917 8.58333 16.0833 8.8125 16.3125L12.375 19.875C12.6042 20.1042 12.8958 20.2188 13.25 20.2188C13.6042 20.2188 13.8958 20.1042 14.125 19.875L21.2188 12.7812C21.4479 12.5521 21.5625 12.2708 21.5625 11.9375C21.5625 11.6042 21.4375 11.3125 21.1875 11.0625C20.9583 10.8333 20.6667 10.7188 20.3125 10.7188C19.9583 10.7188 19.6667 10.8333 19.4375 11.0625L13.25 17.25ZM15 27.5C13.2708 27.5 11.6458 27.1717 10.125 26.515C8.60417 25.8592 7.28125 24.9688 6.15625 23.8438C5.03125 22.7188 4.14083 21.3958 3.485 19.875C2.82833 18.3542 2.5 16.7292 2.5 15C2.5 13.2708 2.82833 11.6458 3.485 10.125C4.14083 8.60417 5.03125 7.28125 6.15625 6.15625C7.28125 5.03125 8.60417 4.14042 10.125 3.48375C11.6458 2.82792 13.2708 2.5 15 2.5C16.7292 2.5 18.3542 2.82792 19.875 3.48375C21.3958 4.14042 22.7188 5.03125 23.8438 6.15625C24.9688 7.28125 25.8592 8.60417 26.515 10.125C27.1717 11.6458 27.5 13.2708 27.5 15C27.5 16.7292 27.1717 18.3542 26.515 19.875C25.8592 21.3958 24.9688 22.7188 23.8438 23.8438C22.7188 24.9688 21.3958 25.8592 19.875 26.515C18.3542 27.1717 16.7292 27.5 15 27.5Z"
                                            fill="#E39178"
                                        />
                                    </svg>
                                </div>

                                <p class="fig-content__list-item__para">
                                    Lorem ipsum dolor sit amet, consectetur sed do eiusmod
                                    tempor incididunt ut labore. adipiscing.
                                </p>
                            </li>
                        </ul>
                        <a href="#" class="contact-link btn-solid">Contact Us</a>
                    </div>
                </div>
            </section>

            <!-- FAQ Section -->
            <section class="faq how-it-works-faq">
                <div class="container flex-wrap">
                    <div class="faq__text-area">
                        <h2 class="faq__title">Frequency aks questions</h2>
                        <p class="faq__para">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                            quae ab illo inventore veritatis et quasi architecto beatae
                            vitae dicta sunt explicabo.
                        </p>
                    </div>
                    <div class="accordion">
                        <div class="accordion-item">
                            <button id="accordion-button-1" aria-expanded="false">
                                <span class="accordion-title">What subject can I teach?</span>
                                <span class="icon" aria-hidden="true"></span>
                            </button>
                            <div class="accordion-content">
                                <p>
                                    The great explorer of the truth, the master-builder of human
                                    happiness. No one rejects, dislikes, or avoids pleasure
                                    itself Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni
                                    dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                    porro quisquam est.
                                </p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-2" aria-expanded="false">
                  <span class="accordion-title"
                  >What kind of tutors does look for?</span
                  >
                                <span class="icon" aria-hidden="true"></span>
                            </button>
                            <div class="accordion-content">
                                <p>
                                    The great explorer of the truth, the master-builder of human
                                    happiness. No one rejects, dislikes, or avoids pleasure
                                    itself Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni
                                    dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                    porro quisquam est.
                                </p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-3" aria-expanded="false">
                  <span class="accordion-title"
                  >How do I become an online?</span
                  >
                                <span class="icon" aria-hidden="true"></span>
                            </button>
                            <div class="accordion-content">
                                <p>
                                    The great explorer of the truth, the master-builder of human
                                    happiness. No one rejects, dislikes, or avoids pleasure
                                    itself Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni
                                    dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                    porro quisquam est.
                                </p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-4" aria-expanded="false">
                  <span class="accordion-title"
                  >How can I get my profile approved quickly?</span
                  >
                                <span class="icon" aria-hidden="true"></span>
                            </button>
                            <div class="accordion-content">
                                <p>
                                    The great explorer of the truth, the master-builder of human
                                    happiness. No one rejects, dislikes, or avoids pleasure
                                    itself Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni
                                    dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                    porro quisquam est.
                                </p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-5" aria-expanded="false">
                  <span class="accordion-title"
                  >Why should I teach on this website?</span
                  >
                                <span class="icon" aria-hidden="true"></span>
                            </button>
                            <div class="accordion-content">
                                <p>
                                    The great explorer of the truth, the master-builder of human
                                    happiness. No one rejects, dislikes, or avoids pleasure
                                    itself Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni
                                    dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                    porro quisquam est.
                                </p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-5" aria-expanded="false">
                  <span class="accordion-title"
                  >What computer equipment do I need?</span
                  >
                                <span class="icon" aria-hidden="true"></span>
                            </button>
                            <div class="accordion-content">
                                <p>
                                    The great explorer of the truth, the master-builder of human
                                    happiness. No one rejects, dislikes, or avoids pleasure
                                    itself Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni
                                    dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                    porro quisquam est.
                                </p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-5" aria-expanded="false">
                  <span class="accordion-title"
                  >Is it free to create a tutor profile?</span
                  >
                                <span class="icon" aria-hidden="true"></span>
                            </button>
                            <div class="accordion-content">
                                <p>
                                    The great explorer of the truth, the master-builder of human
                                    happiness. No one rejects, dislikes, or avoids pleasure
                                    itself Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni
                                    dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                    porro quisquam est.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>

        <section class="tab__body" id="designer2">
            <!-- Feature Area -->
            <section class="feature">
                <div class="container">
                    <div class="feature__title">
                        <h4 class="feature__title-sub slice">Designer</h4>
                        <h2 class="feature__title-main">
                            On the other hand, we denounce with righteous
                        </h2>
                    </div>
                    <ul class="feature__list">
                        <li class="feature__list-item flex-wrap">
                            <div class="feature__list-item__icon">
                                <img src="{{asset('img')}}/img/feature-icon.png" alt="" />
                            </div>
                            <div class="feature__list-item__text">
                                <h3 class="feature__list-item__title">Schedule manage</h3>
                                <p class="feature__list-item__para">
                                    But I must explain to you how all this mistaken idea of
                                    denouncing pleasure and praising pain. Sed ut perspiciatis
                                    unde omnis iste natus error sit voluptatem accusantium
                                    doloremque laudantium, totam rem aperiam, eaque ipsa quae ab
                                    illo inventore veritatis et quasi architecto beatae vitae
                                    dicta sunt explicabo.
                                </p>
                            </div>
                        </li>
                        <li class="feature__list-item flex-wrap">
                            <div class="feature__list-item__icon">
                                <img src="{{asset('img')}}/img/feature-icon2.png" alt="" />
                            </div>
                            <div class="feature__list-item__text">
                                <h3 class="feature__list-item__title">Meeting with client</h3>
                                <p class="feature__list-item__para">
                                    Was born and I will give you a complete account of the
                                    system, and expound the actual teachings. Nemo enim ipsam
                                    voluptatem quia voluptas sit aspernatur aut odit aut fugit,
                                    sed quia consequuntur magni dolores eos qui ratione
                                    voluptatem sequi nesciunt. Neque porro quisquam est, qui
                                    dolorem ipsum quia dolor sit amet.
                                </p>
                            </div>
                        </li>
                        <li class="feature__list-item flex-wrap">
                            <div class="feature__list-item__icon">
                                <img src="{{asset('img')}}/img/feature-icon3.png" alt="" />
                            </div>
                            <div class="feature__list-item__text">
                                <h3 class="feature__list-item__title">Booking</h3>
                                <p class="feature__list-item__para">
                                    The great explorer of the truth, the master-builder of human
                                    happiness. No one rejects, dislikes, or avoids pleasure
                                    itself Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni
                                    dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                    porro quisquam est.
                                </p>
                            </div>
                        </li>
                        <li class="feature__list-item flex-wrap">
                            <div class="feature__list-item__icon">
                                <img src="{{asset('img')}}/img/feature-icon.png" alt="" />
                            </div>
                            <div class="feature__list-item__text">
                                <h3 class="feature__list-item__title">Create Project</h3>
                                <p class="feature__list-item__para">
                                    The great explorer of the truth, the master-builder of human
                                    happiness. No one rejects, dislikes, or avoids pleasure
                                    itself Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni
                                    dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                    porro quisquam est.
                                </p>
                            </div>
                        </li>
                        <li class="feature__list-item flex-wrap">
                            <div class="feature__list-item__icon">
                                <img src="{{asset('img')}}/img/feature-icon2.png" alt="" />
                            </div>
                            <div class="feature__list-item__text">
                                <h3 class="feature__list-item__title">Delivery Project</h3>
                                <p class="feature__list-item__para">
                                    The great explorer of the truth, the master-builder of human
                                    happiness. No one rejects, dislikes, or avoids pleasure
                                    itself Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni
                                    dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                    porro quisquam est.
                                </p>
                            </div>
                        </li>
                        <li class="feature__list-item flex-wrap">
                            <div class="feature__list-item__icon">
                                <img src="{{asset('img')}}/img/feature-icon3.png" alt="" />
                            </div>
                            <div class="feature__list-item__text">
                                <h3 class="feature__list-item__title">Reviews</h3>
                                <p class="feature__list-item__para">
                                    The great explorer of the truth, the master-builder of human
                                    happiness. No one rejects, dislikes, or avoids pleasure
                                    itself Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni
                                    dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                    porro quisquam est.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>

            <!-- User Companies -->
            <section class="user-companies">
                <div class="container">
                    <div class="user-companies__figure">
                        <img src="{{asset('img')}}/img/companies.png" alt="" />
                    </div>
                </div>
            </section>

            <!-- How Payments Work -->
            <section class="fig-content how-pmnts-work">
                <div class="container flex-wrap">
                    <figure class="fig-content__figure">
                        <img src="{{asset('img')}}/img/hero-img.webp" alt="" />
                    </figure>
                    <div class="fig-content__text">
                        <h2 class="fig-content__title">How payments work</h2>
                        <ul class="fig-content__list">
                            <li class="fig-content__list-item flex-wrap">
                                <div class="fig-content__list-item__icon">
                                    <svg
                                        width="30"
                                        height="30"
                                        viewBox="0 0 30 30"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M13.25 17.25L10.5312 14.5312C10.3021 14.3021 10.0208 14.1875 9.6875 14.1875C9.35417 14.1875 9.0625 14.3125 8.8125 14.5625C8.58333 14.7917 8.46875 15.0833 8.46875 15.4375C8.46875 15.7917 8.58333 16.0833 8.8125 16.3125L12.375 19.875C12.6042 20.1042 12.8958 20.2188 13.25 20.2188C13.6042 20.2188 13.8958 20.1042 14.125 19.875L21.2188 12.7812C21.4479 12.5521 21.5625 12.2708 21.5625 11.9375C21.5625 11.6042 21.4375 11.3125 21.1875 11.0625C20.9583 10.8333 20.6667 10.7188 20.3125 10.7188C19.9583 10.7188 19.6667 10.8333 19.4375 11.0625L13.25 17.25ZM15 27.5C13.2708 27.5 11.6458 27.1717 10.125 26.515C8.60417 25.8592 7.28125 24.9688 6.15625 23.8438C5.03125 22.7188 4.14083 21.3958 3.485 19.875C2.82833 18.3542 2.5 16.7292 2.5 15C2.5 13.2708 2.82833 11.6458 3.485 10.125C4.14083 8.60417 5.03125 7.28125 6.15625 6.15625C7.28125 5.03125 8.60417 4.14042 10.125 3.48375C11.6458 2.82792 13.2708 2.5 15 2.5C16.7292 2.5 18.3542 2.82792 19.875 3.48375C21.3958 4.14042 22.7188 5.03125 23.8438 6.15625C24.9688 7.28125 25.8592 8.60417 26.515 10.125C27.1717 11.6458 27.5 13.2708 27.5 15C27.5 16.7292 27.1717 18.3542 26.515 19.875C25.8592 21.3958 24.9688 22.7188 23.8438 23.8438C22.7188 24.9688 21.3958 25.8592 19.875 26.515C18.3542 27.1717 16.7292 27.5 15 27.5Z"
                                            fill="#E39178"
                                        />
                                    </svg>
                                </div>

                                <p class="fig-content__list-item__para">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing. sed do
                                    eiusmod tempor incididunt ut labore.
                                </p>
                            </li>
                            <li class="fig-content__list-item flex-wrap">
                                <div class="fig-content__list-item__icon">
                                    <svg
                                        width="30"
                                        height="30"
                                        viewBox="0 0 30 30"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M13.25 17.25L10.5312 14.5312C10.3021 14.3021 10.0208 14.1875 9.6875 14.1875C9.35417 14.1875 9.0625 14.3125 8.8125 14.5625C8.58333 14.7917 8.46875 15.0833 8.46875 15.4375C8.46875 15.7917 8.58333 16.0833 8.8125 16.3125L12.375 19.875C12.6042 20.1042 12.8958 20.2188 13.25 20.2188C13.6042 20.2188 13.8958 20.1042 14.125 19.875L21.2188 12.7812C21.4479 12.5521 21.5625 12.2708 21.5625 11.9375C21.5625 11.6042 21.4375 11.3125 21.1875 11.0625C20.9583 10.8333 20.6667 10.7188 20.3125 10.7188C19.9583 10.7188 19.6667 10.8333 19.4375 11.0625L13.25 17.25ZM15 27.5C13.2708 27.5 11.6458 27.1717 10.125 26.515C8.60417 25.8592 7.28125 24.9688 6.15625 23.8438C5.03125 22.7188 4.14083 21.3958 3.485 19.875C2.82833 18.3542 2.5 16.7292 2.5 15C2.5 13.2708 2.82833 11.6458 3.485 10.125C4.14083 8.60417 5.03125 7.28125 6.15625 6.15625C7.28125 5.03125 8.60417 4.14042 10.125 3.48375C11.6458 2.82792 13.2708 2.5 15 2.5C16.7292 2.5 18.3542 2.82792 19.875 3.48375C21.3958 4.14042 22.7188 5.03125 23.8438 6.15625C24.9688 7.28125 25.8592 8.60417 26.515 10.125C27.1717 11.6458 27.5 13.2708 27.5 15C27.5 16.7292 27.1717 18.3542 26.515 19.875C25.8592 21.3958 24.9688 22.7188 23.8438 23.8438C22.7188 24.9688 21.3958 25.8592 19.875 26.515C18.3542 27.1717 16.7292 27.5 15 27.5Z"
                                            fill="#E39178"
                                        />
                                    </svg>
                                </div>

                                <p class="fig-content__list-item__para">
                                    Lorem ipsum dolor sit amet, sed do eiusmod tempor incididunt
                                    ut labore. consectetur adipiscing.
                                </p>
                            </li>
                            <li class="fig-content__list-item flex-wrap">
                                <div class="fig-content__list-item__icon">
                                    <svg
                                        width="30"
                                        height="30"
                                        viewBox="0 0 30 30"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M13.25 17.25L10.5312 14.5312C10.3021 14.3021 10.0208 14.1875 9.6875 14.1875C9.35417 14.1875 9.0625 14.3125 8.8125 14.5625C8.58333 14.7917 8.46875 15.0833 8.46875 15.4375C8.46875 15.7917 8.58333 16.0833 8.8125 16.3125L12.375 19.875C12.6042 20.1042 12.8958 20.2188 13.25 20.2188C13.6042 20.2188 13.8958 20.1042 14.125 19.875L21.2188 12.7812C21.4479 12.5521 21.5625 12.2708 21.5625 11.9375C21.5625 11.6042 21.4375 11.3125 21.1875 11.0625C20.9583 10.8333 20.6667 10.7188 20.3125 10.7188C19.9583 10.7188 19.6667 10.8333 19.4375 11.0625L13.25 17.25ZM15 27.5C13.2708 27.5 11.6458 27.1717 10.125 26.515C8.60417 25.8592 7.28125 24.9688 6.15625 23.8438C5.03125 22.7188 4.14083 21.3958 3.485 19.875C2.82833 18.3542 2.5 16.7292 2.5 15C2.5 13.2708 2.82833 11.6458 3.485 10.125C4.14083 8.60417 5.03125 7.28125 6.15625 6.15625C7.28125 5.03125 8.60417 4.14042 10.125 3.48375C11.6458 2.82792 13.2708 2.5 15 2.5C16.7292 2.5 18.3542 2.82792 19.875 3.48375C21.3958 4.14042 22.7188 5.03125 23.8438 6.15625C24.9688 7.28125 25.8592 8.60417 26.515 10.125C27.1717 11.6458 27.5 13.2708 27.5 15C27.5 16.7292 27.1717 18.3542 26.515 19.875C25.8592 21.3958 24.9688 22.7188 23.8438 23.8438C22.7188 24.9688 21.3958 25.8592 19.875 26.515C18.3542 27.1717 16.7292 27.5 15 27.5Z"
                                            fill="#E39178"
                                        />
                                    </svg>
                                </div>

                                <p class="fig-content__list-item__para">
                                    Lorem ipsum dolor sit amet, consectetur sed do eiusmod
                                    tempor incididunt ut labore. adipiscing.
                                </p>
                            </li>
                        </ul>
                        <a href="#" class="contact-link btn-solid">Contact Us</a>
                    </div>
                </div>
            </section>

            <!-- FAQ Section -->
            <section class="faq how-it-works-faq">
                <div class="container flex-wrap">
                    <div class="faq__text-area">
                        <h2 class="faq__title">Frequency aks questions</h2>
                        <p class="faq__para">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                            quae ab illo inventore veritatis et quasi architecto beatae
                            vitae dicta sunt explicabo.
                        </p>
                    </div>
                    <div class="accordion">
                        <div class="accordion-item">
                            <button id="accordion-button-1" aria-expanded="false">
                                <span class="accordion-title">What subject can I teach?</span>
                                <span class="icon" aria-hidden="true"></span>
                            </button>
                            <div class="accordion-content">
                                <p>
                                    The great explorer of the truth, the master-builder of human
                                    happiness. No one rejects, dislikes, or avoids pleasure
                                    itself Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni
                                    dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                    porro quisquam est.
                                </p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-2" aria-expanded="false">
                  <span class="accordion-title"
                  >What kind of tutors does look for?</span
                  >
                                <span class="icon" aria-hidden="true"></span>
                            </button>
                            <div class="accordion-content">
                                <p>
                                    The great explorer of the truth, the master-builder of human
                                    happiness. No one rejects, dislikes, or avoids pleasure
                                    itself Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni
                                    dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                    porro quisquam est.
                                </p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-3" aria-expanded="false">
                  <span class="accordion-title"
                  >How do I become an online?</span
                  >
                                <span class="icon" aria-hidden="true"></span>
                            </button>
                            <div class="accordion-content">
                                <p>
                                    The great explorer of the truth, the master-builder of human
                                    happiness. No one rejects, dislikes, or avoids pleasure
                                    itself Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni
                                    dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                    porro quisquam est.
                                </p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-4" aria-expanded="false">
                  <span class="accordion-title"
                  >How can I get my profile approved quickly?</span
                  >
                                <span class="icon" aria-hidden="true"></span>
                            </button>
                            <div class="accordion-content">
                                <p>
                                    The great explorer of the truth, the master-builder of human
                                    happiness. No one rejects, dislikes, or avoids pleasure
                                    itself Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni
                                    dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                    porro quisquam est.
                                </p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-5" aria-expanded="false">
                  <span class="accordion-title"
                  >Why should I teach on this website?</span
                  >
                                <span class="icon" aria-hidden="true"></span>
                            </button>
                            <div class="accordion-content">
                                <p>
                                    The great explorer of the truth, the master-builder of human
                                    happiness. No one rejects, dislikes, or avoids pleasure
                                    itself Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni
                                    dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                    porro quisquam est.
                                </p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-5" aria-expanded="false">
                  <span class="accordion-title"
                  >What computer equipment do I need?</span
                  >
                                <span class="icon" aria-hidden="true"></span>
                            </button>
                            <div class="accordion-content">
                                <p>
                                    The great explorer of the truth, the master-builder of human
                                    happiness. No one rejects, dislikes, or avoids pleasure
                                    itself Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni
                                    dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                    porro quisquam est.
                                </p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-5" aria-expanded="false">
                  <span class="accordion-title"
                  >Is it free to create a tutor profile?</span
                  >
                                <span class="icon" aria-hidden="true"></span>
                            </button>
                            <div class="accordion-content">
                                <p>
                                    The great explorer of the truth, the master-builder of human
                                    happiness. No one rejects, dislikes, or avoids pleasure
                                    itself Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni
                                    dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                    porro quisquam est.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
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
        const items = document.querySelectorAll(".accordion button");

        function toggleAccordion() {
            const itemToggle = this.getAttribute("aria-expanded");

            for (i = 0; i < items.length; i++) {
                items[i].setAttribute("aria-expanded", "false");
            }

            if (itemToggle == "false") {
                this.setAttribute("aria-expanded", "true");
            }
        }

        items.forEach((item) => item.addEventListener("click", toggleAccordion));
    </script>
@endsection
