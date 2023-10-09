@extends('shopkeeper.layout.layout')
@section('main_content')
    <!-- Offcanvas -->
    <div class="mobile-offcanvas">
        <div class="mobile-offcanvas__close">&times;</div>
        <div class="mobile-offcanvas-inner">
            <div class="offcanvas-logo">
                <a href="#"><img src="img/logo.png" alt="" /></a>
            </div>
            <nav class="offcanvas-nav">
                <ul class="offcanvas-nav-parent">
                    <li class="active"><a href="#">My projects</a></li>
                    <li><a href="#">My projects</a></li>
                    <li><a href="#">Sign Out</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- Offcanvas End -->
    <!-- Header -->
    <header class="header portfolio-header">
        <div class="header__container container">
            <a href="#" class="brand-logo header__logo">
                <img src="img/logo.png" alt="logo" />
            </a>
            <nav class="header__nav">
                <ul>
                    <li>
                        <a href="#">My projects</a>
                    </li>
                    <li>
                        <a href="#">My projects</a>
                    </li>
                    <li>
                        <a href="#">Sign Out</a>
                    </li>
                </ul>
            </nav>
            <div class="hamburger" id="hamburger-1">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
        </div>
    </header>

    <!-- Hero -->
    <section class="hero portfolio-hero">
        <div class="hero__thumb">
            <img src="img/head-banner.jpg" alt="portfolio_hero_thumb" />
        </div>
    </section>

    <!-- User portfolio -->
    <section class="user-portfolio">
        <div class="container">
            <div class="row">
                <div class="portfolio-blogs col-lg-9">
                    <div class="portfolio-blog profile-blog">
                        <div class="portfolio-img">
                            <img src="img/profile.jpg" alt="user_img" />
                        </div>
                        <div class="about-user">
                            <div class="portfolio-header">
                                <div class="portfolio-header__right">
                                    <div class="user-name">
                                        <span>Firstname Lastname</span>
                                        <span class="light">@UserName</span>
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
                                            <div class="ratting active-ratting" style="width: 40%">
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
                                        <span> 4.5(102 reviews)</span>
                                        <span class="icon">
                        <span>
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
                                d="M10.719 9.577v0l-0.010-0.010c-0.013-0.011-0.022-0.024-0.036-0.034l-0.003 0.004-1.67-1.282v-5.707c1.14 0.218 2 1.164 2 2.296l0.499 0.060 0.501-0.060c0-1.68-1.309-3.062-3-3.296v-1.548h-1v1.548c-1.691 0.234-3 1.616-3 3.296 0 0.942 0.421 1.838 1.151 2.473l-0.005 0.005 0.040 0.031c0 0 0 0 0 0v0l1.814 1.394v5.705c-1.14-0.218-2-1.164-2-2.296h-1c0 1.68 1.309 3.062 3 3.296v1.549h1v-1.549c1.691-0.234 3-1.616 3-3.296 0-1.006-0.469-1.939-1.281-2.579zM6.822 6.581c-0.522-0.446-0.822-1.077-0.822-1.737 0-1.132 0.86-2.078 2-2.296v4.938l-1.178-0.905zM9 14.452v-4.936l1.104 0.849c0.567 0.447 0.896 1.096 0.896 1.791 0 1.132-0.86 2.078-2 2.296z"
                                fill="#000000"
                            />
                          </svg>
                        </span>
                        <div class="pipe-ratting">
                          <div
                              class="ratting active-ratting"
                              style="width: 48%"
                          >
                            <span class="line">|</span>
                            <span class="line">|</span>
                            <span class="line">|</span>
                            <span class="line">|</span>
                            <span class="line">|</span>
                            <span class="line">|</span>
                            <span class="line">|</span>
                            <span class="line">|</span>
                            <span class="line">|</span>
                            <span class="line">|</span>
                          </div>
                          <div class="ratting">
                            <span class="line">|</span>
                            <span class="line">|</span>
                            <span class="line">|</span>
                            <span class="line">|</span>
                            <span class="line">|</span>
                            <span class="line">|</span>
                            <span class="line">|</span>
                            <span class="line">|</span>
                            <span class="line">|</span>
                            <span class="line">|</span>
                          </div>
                        </div>
                      </span>
                                        6.5
                                    </div>
                                </div>
                                <div class="edit-btn">
                                    <button class="portfolio-btn">Edit Portfolio</button>
                                </div>
                            </div>
                            <div class="user-dsc">
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing.</p>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Ipsum, alias consectetur sequi quidem cum sit?
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Ipsam odit explicabo ipsa cupiditate beatae, sapiente
                                    delectus. Voluptates praesentium officiis cupiditate neque
                                    odit.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Tempora, qui? Dolor corporis ex suscipit?
                                </p>
                                <ul class="location">
                                    <li>Lorem, ipsum.</li>
                                    <li>7/24 Customer Support</li>
                                    <li>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </li>
                                    <li>Lorem ipsum dolor sit amet.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-blog">
                        <div class="container">
                            <div class="portfolio-header">
                                <h3 class="title">Portfolio Items</h3>
                                <div>
                                    <button class="portfolio-btn">Manage</button>
                                </div>
                            </div>
                            <div class="portfolio-grid">
                                <a href="#" class="grid-item">
                                    <img src="img/modern-luxury-aesthetics.jpg" alt="" />
                                </a>
                                <a href="#" class="grid-item">
                                    <img src="img/modern-luxury-aesthetics.jpg" alt="" />
                                </a>
                                <a href="#" class="grid-item">
                                    <img src="img/modern-luxury-aesthetics.jpg" alt="" />
                                </a>
                                <a href="#" class="grid-item">
                                    <img src="img/modern-luxury-aesthetics.jpg" alt="" />
                                </a>
                                <a href="#" class="grid-item">
                                    <img src="img/modern-luxury-aesthetics.jpg" alt="" />
                                </a>
                                <a href="#" class="grid-item">
                                    <img src="img/modern-luxury-aesthetics.jpg" alt="" />
                                </a>
                            </div>
                            <div class="more-link">
                                <a href="#" class="portfolio-btn">Load More</a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-blog">
                        <div class="container">
                            <div class="portfolio-header">
                                <h3 class="title">Reviews</h3>
                            </div>
                            <div class="review-item">
                                <ul class="ratting-icon">
                                    <li>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24"
                                            fill="currentColor"
                                        >
                                            <path
                                                d="M12,1.5l3.09,6.3,6.91,1,-5,4.87,1.18,6.88,-6.18,-3.25,-6.18,3.25,1.18,-6.88,-5-4.87,6.91,-1Z"
                                            />
                                        </svg>
                                    </li>
                                    <li>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24"
                                            fill="currentColor"
                                        >
                                            <path
                                                d="M12,1.5l3.09,6.3,6.91,1,-5,4.87,1.18,6.88,-6.18,-3.25,-6.18,3.25,1.18,-6.88,-5-4.87,6.91,-1Z"
                                            />
                                        </svg>
                                    </li>
                                    <li>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24"
                                            fill="currentColor"
                                        >
                                            <path
                                                d="M12,1.5l3.09,6.3,6.91,1,-5,4.87,1.18,6.88,-6.18,-3.25,-6.18,3.25,1.18,-6.88,-5-4.87,6.91,-1Z"
                                            />
                                        </svg>
                                    </li>
                                    <li>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24"
                                            fill="currentColor"
                                        >
                                            <path
                                                d="M12,1.5l3.09,6.3,6.91,1,-5,4.87,1.18,6.88,-6.18,-3.25,-6.18,3.25,1.18,-6.88,-5-4.87,6.91,-1Z"
                                            />
                                        </svg>
                                    </li>
                                    <li>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24"
                                            fill="currentColor"
                                        >
                                            <path
                                                d="M12,1.5l3.09,6.3,6.91,1,-5,4.87,1.18,6.88,-6.18,-3.25,-6.18,3.25,1.18,-6.88,-5-4.87,6.91,-1Z"
                                            />
                                        </svg>
                                    </li>
                                </ul>
                                <h4 class="title">Preject Name</h4>
                                <p>Feedback text</p>
                                <p>Client Name<span>2023/01/01</span></p>
                            </div>
                            <div class="review-item">
                                <ul class="ratting-icon">
                                    <li>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24"
                                            fill="currentColor"
                                        >
                                            <path
                                                d="M12,1.5l3.09,6.3,6.91,1,-5,4.87,1.18,6.88,-6.18,-3.25,-6.18,3.25,1.18,-6.88,-5-4.87,6.91,-1Z"
                                            />
                                        </svg>
                                    </li>
                                    <li>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24"
                                            fill="currentColor"
                                        >
                                            <path
                                                d="M12,1.5l3.09,6.3,6.91,1,-5,4.87,1.18,6.88,-6.18,-3.25,-6.18,3.25,1.18,-6.88,-5-4.87,6.91,-1Z"
                                            />
                                        </svg>
                                    </li>
                                    <li>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24"
                                            fill="currentColor"
                                        >
                                            <path
                                                d="M12,1.5l3.09,6.3,6.91,1,-5,4.87,1.18,6.88,-6.18,-3.25,-6.18,3.25,1.18,-6.88,-5-4.87,6.91,-1Z"
                                            />
                                        </svg>
                                    </li>
                                    <li>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24"
                                            fill="currentColor"
                                        >
                                            <path
                                                d="M12,1.5l3.09,6.3,6.91,1,-5,4.87,1.18,6.88,-6.18,-3.25,-6.18,3.25,1.18,-6.88,-5-4.87,6.91,-1Z"
                                            />
                                        </svg>
                                    </li>
                                    <li>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24"
                                            fill="currentColor"
                                        >
                                            <path
                                                d="M12,1.5l3.09,6.3,6.91,1,-5,4.87,1.18,6.88,-6.18,-3.25,-6.18,3.25,1.18,-6.88,-5-4.87,6.91,-1Z"
                                            />
                                        </svg>
                                    </li>
                                </ul>
                                <h4 class="title">Preject Name</h4>
                                <p>Feedback text</p>
                                <p>Client Name<span>2023/01/01</span></p>
                            </div>
                            <div class="review-item">
                                <ul class="ratting-icon">
                                    <li>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24"
                                            fill="currentColor"
                                        >
                                            <path
                                                d="M12,1.5l3.09,6.3,6.91,1,-5,4.87,1.18,6.88,-6.18,-3.25,-6.18,3.25,1.18,-6.88,-5-4.87,6.91,-1Z"
                                            />
                                        </svg>
                                    </li>
                                    <li>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24"
                                            fill="currentColor"
                                        >
                                            <path
                                                d="M12,1.5l3.09,6.3,6.91,1,-5,4.87,1.18,6.88,-6.18,-3.25,-6.18,3.25,1.18,-6.88,-5-4.87,6.91,-1Z"
                                            />
                                        </svg>
                                    </li>
                                    <li>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24"
                                            fill="currentColor"
                                        >
                                            <path
                                                d="M12,1.5l3.09,6.3,6.91,1,-5,4.87,1.18,6.88,-6.18,-3.25,-6.18,3.25,1.18,-6.88,-5-4.87,6.91,-1Z"
                                            />
                                        </svg>
                                    </li>
                                    <li>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24"
                                            fill="currentColor"
                                        >
                                            <path
                                                d="M12,1.5l3.09,6.3,6.91,1,-5,4.87,1.18,6.88,-6.18,-3.25,-6.18,3.25,1.18,-6.88,-5-4.87,6.91,-1Z"
                                            />
                                        </svg>
                                    </li>
                                    <li>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24"
                                            fill="currentColor"
                                        >
                                            <path
                                                d="M12,1.5l3.09,6.3,6.91,1,-5,4.87,1.18,6.88,-6.18,-3.25,-6.18,3.25,1.18,-6.88,-5-4.87,6.91,-1Z"
                                            />
                                        </svg>
                                    </li>
                                </ul>
                                <h4 class="title">Preject Name</h4>
                                <p>Feedback text</p>
                                <p>Client Name<span>2023/01/01</span></p>
                            </div>
                            <ul class="pagination">
                                <li class="pagination-link">
                                    <a href="#">
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
                                                d="M16 8.972h-12.793l6.146 6.146-0.707 0.707-7.353-7.353 7.354-7.354 0.707 0.707-6.147 6.147h12.793v1z"
                                                fill="#000000"
                                            />
                                        </svg>
                                    </a>
                                </li>
                                <li class="pagination-link">
                                    <a href="#" class="active">1</a>
                                </li>
                                <li class="pagination-link"><a href="#">2</a></li>
                                <li class="pagination-link"><a href="#">3</a></li>
                                <li class="pagination-link"><a href="#">4</a></li>
                                <li class="pagination-link">
                                    <a href="#">
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
                                                d="M15.707 8.472l-7.354 7.354-0.707-0.707 6.146-6.146h-12.792v-1h12.793l-6.147-6.148 0.707-0.707 7.354 7.354z"
                                                fill="#000000"
                                            />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="portfolio-blog experiance">
                        <div class="container">
                            <div class="portfolio-header">
                                <h3 class="title">Experiance</h3>
                                <div>
                                    <button class="portfolio-btn">Add Education</button>
                                </div>
                            </div>
                            <div class="experiance-item">
                                <div class="flex">
                                    <h4>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing.
                                    </h4>
                                    <a href="#">...</a>
                                </div>
                                <p class="m0">Lorem ipsum dolor sit amet consectetur.</p>
                                <h4 class="m0">Company Name 2023/00/00</h4>
                                <p>2021/00/00 - 2023/00/00</p>
                                <p>
                                    -Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                    Distinctio, praesentium?
                                </p>
                                <p>
                                    -Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                </p>
                                <p>
                                    -Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Illum, iste.
                                </p>
                                <p class="m0">
                                    -Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                    Architecto, illum.
                                </p>
                                <p>-Lorem ipsum dolor sit amet consectetur.</p>
                                <p>
                                    -Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Inventore.
                                </p>
                            </div>
                            <div class="experiance-item">
                                <div class="flex">
                                    <h4>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing.
                                    </h4>
                                    <a href="#">...</a>
                                </div>
                                <p class="m0">Lorem ipsum dolor sit amet consectetur.</p>
                                <h4 class="m0">Company Name 2023/00/00</h4>
                                <p>2021/00/00 - 2023/00/00</p>
                                <p>
                                    -Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                    Distinctio, praesentium?
                                </p>
                                <p>
                                    -Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                </p>
                                <p>
                                    -Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Illum, iste.
                                </p>
                                <p class="m0">
                                    -Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                    Architecto, illum.
                                </p>
                                <p>-Lorem ipsum dolor sit amet consectetur.</p>
                                <p>
                                    -Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Inventore.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-blog experiance">
                        <div class="container">
                            <div class="portfolio-header">
                                <h3 class="title">Experiance</h3>
                                <div>
                                    <button class="portfolio-btn">Add Education</button>
                                </div>
                            </div>
                            <div class="experiance-item">
                                <div class="flex">
                                    <h4>Lorem ipsum dolor sit amet.</h4>
                                    <a href="#">...</a>
                                </div>
                                <p class="m0">Lorem ipsum dolor sit amet consectetur.</p>
                                <p class="m0">
                                    Lore adipisicing elit. Distinctio, praesentium?
                                </p>
                                <p class="m0">Lorem ipsum dolor iste.</p>
                            </div>
                            <div class="experiance-item">
                                <div class="flex">
                                    <h4>Lorem ipsum dolor sit amet.</h4>
                                    <a href="#">...</a>
                                </div>
                                <p class="m0">Lorem ipsum dolor sit amet consectetur.</p>
                                <p class="m0">
                                    Lore adipisicing elit. Distinctio, praesentium?
                                </p>
                                <p class="m0">Lorem ipsum dolor iste.</p>
                            </div>
                            <div class="experiance-item">
                                <div class="flex">
                                    <h4>Lorem ipsum dolor sit amet.</h4>
                                    <a href="#">...</a>
                                </div>
                                <p class="m0">Lorem ipsum dolor sit amet consectetur.</p>
                                <p class="m0">
                                    Lore adipisicing elit. Distinctio, praesentium?
                                </p>
                                <p class="m0">Lorem ipsum dolor iste.</p>
                            </div>
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

@section('css_plugins')
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('assets/adminPanel')}}/plugins/summernote/summernote-bs4.min.css">
@endsection
@section('js_plugins')
    <!-- Summernote -->
    <script src="{{asset('assets/adminPanel')}}/plugins/summernote/summernote-bs4.min.js"></script>
@endsection
@section('js')

    <script>
        function addNewColor(){
            $('#coloradd').append($('#colorinput').html())
        }

        function readFile() {

            if (!this.files || !this.files[0]) return;

            const FR = new FileReader();

            FR.addEventListener("load", function(evt) {
                document.querySelector("#updateimg").src= evt.target.result;
                // document.querySelector("#inp2").val = evt.target.result;
                $('#inp2').val(evt.target.result);
            });

            FR.readAsDataURL(this.files[0]);

        }

        document.querySelector("#inp").addEventListener("change", readFile);


        function readFile2() {
            if (!this.files || !this.files[0]) return;

            const FR = new FileReader();
            FR.addEventListener("load", function(evt) {
                document.querySelector("#updateimg2").src= evt.target.result;
                console.log(evt.target.result)
                // document.querySelector("#inp2").val = evt.target.result;
                $('#inp23').val(evt.target.result);
            });
            FR.readAsDataURL(this.files[0]);
        }

        document.querySelector("#inp3").addEventListener("change", readFile2);

        function  changeBrand(){
            $('#inp').click();
        }
        function coverphoto(){

            $('#inp3').click();
        }

        $(function () {
            // Summernote
            $('#summernote').summernote()

            // CodeMirror
            CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                mode: "htmlmixed",
                theme: "monokai"
            });
        })
    </script>
@endsection
