@extends('designer.layout.layout')
@section('main_content')
    <!-- Small boxes (Stat box) -->
    <section class="hero designers-hero">
        <div class="hero__thumb">
            @if($profile)
                @if($profile->cover_img)
                    <img src="{{asset($profile->cover_img)}}" alt="designers_hero_thumb"/>
                @else
                    <img src="{{asset('assets/frontend')}}/img/head-banner.jpg" alt="designers_hero_thumb"/>
                @endif
            @else
                <img src="{{asset('assets/frontend')}}/img/head-banner.jpg" alt="designers_hero_thumb"/>
            @endif
        </div>
    </section>

    <!-- /.row -->

    <section class="user-portfolio">
        <div class="container">
            <div class="row">
                <div class="portfolio-blogs col-lg-9">
                    <div class="portfolio-blog profile-blog">
                        <div class="portfolio-img">
                            @if($profile)

                                @if($profile->designer_img)
                                    <img src="{{asset($profile->designer_img)}}" alt="user_img"/>
                                @else
                                    <img src="{{asset('assets/frontend')}}/img/profile.jpg" alt="user_img"/>
                                @endif
                            @else
                                <img src="{{asset('assets/frontend')}}/img/profile.jpg" alt="user_img"/>
                            @endif
                        </div>
                        <div class="about-user">
                            <div class="portfolio-header">
                                <div class="portfolio-header__right">
                                    <div class="user-name">
                                        <span>{{Auth::guard('designer')->user()->name}}</span>
                                        {{--                                        <span class="light">@UserName</span>--}}
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

                                </div>
                                <div class="edit-btn">
                                    @if(Auth::user())
                                        <span
                                            class="portfolio-btn">{{languageGet()=='en'?'Add Profile':'إضافة الملف الشخصي'}} </span>
                                    @else
                                        <span class="portfolio-btn" data-bs-toggle="modal"
                                              data-bs-target="#profileModal"> {{languageGet()=='en'?'Update Profile':'تحديث الملف'}}</span>

                                    @endif


                                </div>
                            </div>
                            <div class="user-dsc">
                                <p>
                                    {!! $profile?$profile->about_me:'' !!}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-blog">
                        <div class="container">
                            <div class="portfolio-header">
                                <h3 class="title"> {{languageGet()=='en'?'Portfolio Items':'عناصر المحفظة'}}</h3>
                                <div>
                                    <span class="portfolio-btn" data-bs-toggle="modal"
                                          data-bs-target="#protfolioItemModal"> {{languageGet()=='en'?'Add Portfolio Item':'إضافة عنصر المحفظة'}}   </span>
                                </div>
                            </div>
                            <div class="portfolio-grid">


                                @foreach($projects as $projectData)
                                    <a href="#" class="grid-item">
                                        <span class="img-edit-btn" onclick="editProject({{$projectData->id}})"><i
                                                class="fa-regular fa-pen-to-square"></i></span>
                                        <img src="{{asset($projectData->img)}}" alt=""/>
                                    </a>
                                @endforeach
                            </div>
                            {!! $projects->links() !!}
                            {{--                            <div class="more-link">--}}
                            {{--                                <a href="#" class="portfolio-btn">Load More</a>--}}
                            {{--                            </div>--}}
                        </div>
                    </div>
                    <div class="portfolio-blog experiance">
                        <div class="container">
                            <div class="portfolio-header">
                                <h3 class="title">  {{languageGet()=='en'?'Education & Experience':'التعليم و الخبرة'}}</h3>
                            </div>

                            <div class="experiance-item">
                                <p>
                                    {!! $profile?$profile->education_exprience:'' !!}
                                </p>
                            </div>

                        </div>

                    </div>
                    <div class="portfolio-blog">
                        <div class="container">
                            <div class="portfolio-header">
                                <h3 class="title"> {{languageGet()=='en'?'Reviews':'التعليقات'}}</h3>
                            </div>
                            @if(count($rateReview)>0)
                                @foreach($rateReview as $review)
                                    <div class="review-item">
                                        <div class="ratting-wrapper">
                                            <div class="ratting active-ratting"
                                                 style="width: {{($review->rating*100)/5}}%">
                            <span>
                  <svg
                      height="24px"
                      width="24px"
                      version="1.1"
                      id="Capa_1"
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      viewBox="0 0 47.94 47.94"
                      xml:space="preserve"
                  >
                    <path
                        style="fill: #ed8a19"
                        d="M26.285,2.486l5.407,10.956c0.376,0.762,1.103,1.29,1.944,1.412l12.091,1.757 c2.118,0.308,2.963,2.91,1.431,4.403l-8.749,8.528c-0.608,0.593-0.886,1.448-0.742,2.285l2.065,12.042 c0.362,2.109-1.852,3.717-3.746,2.722l-10.814-5.685c-0.752-0.395-1.651-0.395-2.403,0l-10.814,5.685 c-1.894,0.996-4.108-0.613-3.746-2.722l2.065-12.042c0.144-0.837-0.134-1.692-0.742-2.285l-8.749-8.528 c-1.532-1.494-0.687-4.096,1.431-4.403l12.091-1.757c0.841-0.122,1.568-0.65,1.944-1.412l5.407-10.956 C22.602,0.567,25.338,0.567,26.285,2.486z"
                    />
                  </svg>
                </span>
                                                <span>
                  <svg
                      height="24px"
                      width="24px"
                      version="1.1"
                      id="Capa_1"
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      viewBox="0 0 47.94 47.94"
                      xml:space="preserve"
                  >
                    <path
                        style="fill: #ed8a19"
                        d="M26.285,2.486l5.407,10.956c0.376,0.762,1.103,1.29,1.944,1.412l12.091,1.757 c2.118,0.308,2.963,2.91,1.431,4.403l-8.749,8.528c-0.608,0.593-0.886,1.448-0.742,2.285l2.065,12.042 c0.362,2.109-1.852,3.717-3.746,2.722l-10.814-5.685c-0.752-0.395-1.651-0.395-2.403,0l-10.814,5.685 c-1.894,0.996-4.108-0.613-3.746-2.722l2.065-12.042c0.144-0.837-0.134-1.692-0.742-2.285l-8.749-8.528 c-1.532-1.494-0.687-4.096,1.431-4.403l12.091-1.757c0.841-0.122,1.568-0.65,1.944-1.412l5.407-10.956 C22.602,0.567,25.338,0.567,26.285,2.486z"
                    />
                  </svg>
                </span>
                                                <span>
                  <svg
                      height="24px"
                      width="24px"
                      version="1.1"
                      id="Capa_1"
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      viewBox="0 0 47.94 47.94"
                      xml:space="preserve"
                  >
                    <path
                        style="fill: #ed8a19"
                        d="M26.285,2.486l5.407,10.956c0.376,0.762,1.103,1.29,1.944,1.412l12.091,1.757 c2.118,0.308,2.963,2.91,1.431,4.403l-8.749,8.528c-0.608,0.593-0.886,1.448-0.742,2.285l2.065,12.042 c0.362,2.109-1.852,3.717-3.746,2.722l-10.814-5.685c-0.752-0.395-1.651-0.395-2.403,0l-10.814,5.685 c-1.894,0.996-4.108-0.613-3.746-2.722l2.065-12.042c0.144-0.837-0.134-1.692-0.742-2.285l-8.749-8.528 c-1.532-1.494-0.687-4.096,1.431-4.403l12.091-1.757c0.841-0.122,1.568-0.65,1.944-1.412l5.407-10.956 C22.602,0.567,25.338,0.567,26.285,2.486z"
                    />
                  </svg>
                </span>
                                                <span>
                  <svg
                      height="24px"
                      width="24px"
                      version="1.1"
                      id="Capa_1"
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      viewBox="0 0 47.94 47.94"
                      xml:space="preserve"
                  >
                    <path
                        style="fill: #ed8a19"
                        d="M26.285,2.486l5.407,10.956c0.376,0.762,1.103,1.29,1.944,1.412l12.091,1.757 c2.118,0.308,2.963,2.91,1.431,4.403l-8.749,8.528c-0.608,0.593-0.886,1.448-0.742,2.285l2.065,12.042 c0.362,2.109-1.852,3.717-3.746,2.722l-10.814-5.685c-0.752-0.395-1.651-0.395-2.403,0l-10.814,5.685 c-1.894,0.996-4.108-0.613-3.746-2.722l2.065-12.042c0.144-0.837-0.134-1.692-0.742-2.285l-8.749-8.528 c-1.532-1.494-0.687-4.096,1.431-4.403l12.091-1.757c0.841-0.122,1.568-0.65,1.944-1.412l5.407-10.956 C22.602,0.567,25.338,0.567,26.285,2.486z"
                    />
                  </svg>
                </span>
                                                <span>
                  <svg
                      height="24px"
                      width="24px"
                      version="1.1"
                      id="Capa_1"
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      viewBox="0 0 47.94 47.94"
                      xml:space="preserve"
                  >
                    <path
                        style="fill: #ed8a19"
                        d="M26.285,2.486l5.407,10.956c0.376,0.762,1.103,1.29,1.944,1.412l12.091,1.757 c2.118,0.308,2.963,2.91,1.431,4.403l-8.749,8.528c-0.608,0.593-0.886,1.448-0.742,2.285l2.065,12.042 c0.362,2.109-1.852,3.717-3.746,2.722l-10.814-5.685c-0.752-0.395-1.651-0.395-2.403,0l-10.814,5.685 c-1.894,0.996-4.108-0.613-3.746-2.722l2.065-12.042c0.144-0.837-0.134-1.692-0.742-2.285l-8.749-8.528 c-1.532-1.494-0.687-4.096,1.431-4.403l12.091-1.757c0.841-0.122,1.568-0.65,1.944-1.412l5.407-10.956 C22.602,0.567,25.338,0.567,26.285,2.486z"
                    />
                  </svg>
                </span>
                                            </div>
                                            <div class="ratting">
                <span>
                  <svg
                      height="24px"
                      width="24px"
                      version="1.1"
                      id="Capa_1"
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      viewBox="0 0 47.94 47.94"
                      xml:space="preserve"
                  >
                    <path
                        style="fill: #ed8a19"
                        d="M26.285,2.486l5.407,10.956c0.376,0.762,1.103,1.29,1.944,1.412l12.091,1.757 c2.118,0.308,2.963,2.91,1.431,4.403l-8.749,8.528c-0.608,0.593-0.886,1.448-0.742,2.285l2.065,12.042 c0.362,2.109-1.852,3.717-3.746,2.722l-10.814-5.685c-0.752-0.395-1.651-0.395-2.403,0l-10.814,5.685 c-1.894,0.996-4.108-0.613-3.746-2.722l2.065-12.042c0.144-0.837-0.134-1.692-0.742-2.285l-8.749-8.528 c-1.532-1.494-0.687-4.096,1.431-4.403l12.091-1.757c0.841-0.122,1.568-0.65,1.944-1.412l5.407-10.956 C22.602,0.567,25.338,0.567,26.285,2.486z"
                    />
                  </svg>
                </span>
                                                <span>
                  <svg
                      height="24px"
                      width="24px"
                      version="1.1"
                      id="Capa_1"
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      viewBox="0 0 47.94 47.94"
                      xml:space="preserve"
                  >
                    <path
                        style="fill: #ed8a19"
                        d="M26.285,2.486l5.407,10.956c0.376,0.762,1.103,1.29,1.944,1.412l12.091,1.757 c2.118,0.308,2.963,2.91,1.431,4.403l-8.749,8.528c-0.608,0.593-0.886,1.448-0.742,2.285l2.065,12.042 c0.362,2.109-1.852,3.717-3.746,2.722l-10.814-5.685c-0.752-0.395-1.651-0.395-2.403,0l-10.814,5.685 c-1.894,0.996-4.108-0.613-3.746-2.722l2.065-12.042c0.144-0.837-0.134-1.692-0.742-2.285l-8.749-8.528 c-1.532-1.494-0.687-4.096,1.431-4.403l12.091-1.757c0.841-0.122,1.568-0.65,1.944-1.412l5.407-10.956 C22.602,0.567,25.338,0.567,26.285,2.486z"
                    />
                  </svg>
                </span>
                                                <span>
                  <svg
                      height="24px"
                      width="24px"
                      version="1.1"
                      id="Capa_1"
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      viewBox="0 0 47.94 47.94"
                      xml:space="preserve"
                  >
                    <path
                        style="fill: #ed8a19"
                        d="M26.285,2.486l5.407,10.956c0.376,0.762,1.103,1.29,1.944,1.412l12.091,1.757 c2.118,0.308,2.963,2.91,1.431,4.403l-8.749,8.528c-0.608,0.593-0.886,1.448-0.742,2.285l2.065,12.042 c0.362,2.109-1.852,3.717-3.746,2.722l-10.814-5.685c-0.752-0.395-1.651-0.395-2.403,0l-10.814,5.685 c-1.894,0.996-4.108-0.613-3.746-2.722l2.065-12.042c0.144-0.837-0.134-1.692-0.742-2.285l-8.749-8.528 c-1.532-1.494-0.687-4.096,1.431-4.403l12.091-1.757c0.841-0.122,1.568-0.65,1.944-1.412l5.407-10.956 C22.602,0.567,25.338,0.567,26.285,2.486z"
                    />
                  </svg>
                </span>
                                                <span>
                  <svg
                      height="24px"
                      width="24px"
                      version="1.1"
                      id="Capa_1"
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      viewBox="0 0 47.94 47.94"
                      xml:space="preserve"
                  >
                    <path
                        style="fill: #ed8a19"
                        d="M26.285,2.486l5.407,10.956c0.376,0.762,1.103,1.29,1.944,1.412l12.091,1.757 c2.118,0.308,2.963,2.91,1.431,4.403l-8.749,8.528c-0.608,0.593-0.886,1.448-0.742,2.285l2.065,12.042 c0.362,2.109-1.852,3.717-3.746,2.722l-10.814-5.685c-0.752-0.395-1.651-0.395-2.403,0l-10.814,5.685 c-1.894,0.996-4.108-0.613-3.746-2.722l2.065-12.042c0.144-0.837-0.134-1.692-0.742-2.285l-8.749-8.528 c-1.532-1.494-0.687-4.096,1.431-4.403l12.091-1.757c0.841-0.122,1.568-0.65,1.944-1.412l5.407-10.956 C22.602,0.567,25.338,0.567,26.285,2.486z"
                    />
                  </svg>
                </span>
                                                <span>
                  <svg
                      height="24px"
                      width="24px"
                      version="1.1"
                      id="Capa_1"
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      viewBox="0 0 47.94 47.94"
                      xml:space="preserve"
                  >
                    <path
                        style="fill: #ed8a19"
                        d="M26.285,2.486l5.407,10.956c0.376,0.762,1.103,1.29,1.944,1.412l12.091,1.757 c2.118,0.308,2.963,2.91,1.431,4.403l-8.749,8.528c-0.608,0.593-0.886,1.448-0.742,2.285l2.065,12.042 c0.362,2.109-1.852,3.717-3.746,2.722l-10.814-5.685c-0.752-0.395-1.651-0.395-2.403,0l-10.814,5.685 c-1.894,0.996-4.108-0.613-3.746-2.722l2.065-12.042c0.144-0.837-0.134-1.692-0.742-2.285l-8.749-8.528 c-1.532-1.494-0.687-4.096,1.431-4.403l12.091-1.757c0.841-0.122,1.568-0.65,1.944-1.412l5.407-10.956 C22.602,0.567,25.338,0.567,26.285,2.486z"
                    />
                  </svg>
                </span>
                                            </div>
                                        </div>
                                        <h4 class="title">{{$review->project_name}}</h4>
                                        <p>{!! $review->review !!}</p>
                                        <p>{{$review->customerInfo->name}}
                                            <span>{{$review->created_at->diffForHumans()}}</span></p>
                                    </div>
                                @endforeach
                            @endif
                            {!! $rateReview->links() !!}


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



    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Profile Info </h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('profile.data.store')}}" method="post">
                    <style>.note-toolbar.card-header {
                            display: none;
                        }</style>
                    @csrf
                    <input type="hidden" name="designer_id" value="{{$profile?$profile->id :''}}">
                    <div class="modal-body" style="padding: 30px">
                        <div class="row" style="margin-bottom: 20px">

                            <div class="col-sm-4">
                                <div class="d-flex justify-content-center">
                                    <label for="profileImg10" class="form-label addimgbtn"><h1><i
                                                class="fa-solid fa-plus"></i></h1></label>
                                    <input type="file" idinfo="10" onchange="baseImg(this)" style="display: none"
                                           class="form-control profileImg" id="profileImg10"
                                           aria-describedby="emailHelp">

                                    <input type="hidden" id="imginput10" name="designer_img">
                                    <div class="img-section" id="img10">
                                        @if($profile)
                                            @if($profile->designer_img)
                                                <img class="upload_img_style" src="{{asset($profile->designer_img)}}"
                                                     alt="user_img"/>
                                            @endif
                                        @endif
                                    </div>

                                </div>
                                <h5 class="text-center mt-2">USER IMG</h5>

                            </div>
                            <div class="col-sm-4">
                                <div class="d-flex justify-content-center">
                                    <label for="profileImg11" class="form-label addimgbtn"><h1><i
                                                class="fa-solid fa-plus"></i></h1></label>
                                    <input type="file" style="display: none" idinfo="11" onchange="baseImg(this)"
                                           class="form-control profileImg" id="profileImg11"
                                           aria-describedby="emailHelp">
                                    <input type="hidden" id="imginput11" name="profile64_img">
                                    <div class="img-section" id="img11">
                                        @if($profile)
                                            @if($profile->profile_img)
                                                <img class="upload_img_style" src="{{asset($profile->profile_img)}}"
                                                     alt="user_img"/>
                                            @endif
                                        @endif

                                    </div>
                                </div>
                                <h5 class="text-center mt-2">PROFILE IMG</h5>

                            </div>
                            <div class="col-sm-4">
                                <div class="d-flex justify-content-center" data-img="img">
                                    <label for="profileImg12" class="form-label addimgbtn"><h1><i
                                                class="fa-solid fa-plus"></i></h1></label>
                                    <input type="file" idinfo="12" onchange="baseImg(this)" style="display: none"
                                           class="form-control profileImg" id="profileImg12"
                                           aria-describedby="emailHelp">
                                    <input type="hidden" id="imginput12" name="cover64_img">
                                    <div class="img-section" id="img12">
                                        @if($profile)
                                            @if($profile->cover_img)
                                                <img class="upload_img_style" src="{{asset($profile->cover_img)}}"
                                                     alt="user_img"/>
                                            @endif

                                        @endif

                                    </div>
                                </div>
                                <h5 class="text-center mt-2">COVER IMG</h5>

                            </div>

                        </div>

                        <div class="col-sm-12">
                            <label for="exampleFormControlInput1" class="form-label">Job Title</label>
                            <input type="text" name="job_title" class="form-control"
                                   value="{{$profile?$profile->job_title :''}}" id="exampleFormControlInput1"
                                   placeholder="">
                        </div>
                        <div class="col-sm-12 mb-4">
                            <label for="exampleFormControlTextarea1" class="form-label">Details</label>
                            <textarea class="form-control" name="about_profile" id="summernote2"
                                      rows="3">{{$profile?$profile->about_me :''}}</textarea>
                        </div>

                        <div class="col-sm-12">
                            <label for="exampleFormControlTextarea1" class="form-label">Education & Experience</label>
                            <textarea class="form-control" name="education_experience" id="summernote"
                                      rows="3">{{$profile?$profile->education_exprience :''}}</textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="protfolioItemModal" tabindex="-1" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Portfolio Item </h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('designer.profile.project.store')}}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="row d-flex justify-content-center">
                            {{--                       <input type="text" id="projectid">--}}

                            <div class="col-sm-6">
                                <div class="d-flex justify-content-center" data-img="img">
                                    <label for="profileImg151" class="form-label addimgbtn"><h1><i
                                                class="fa-solid fa-plus"></i></h1></label>
                                    <input type="file" idinfo="151" onchange="baseImg(this)" style="display: none"
                                           class="form-control profileImg" name="profile_img" id="profileImg151"
                                           aria-describedby="emailHelp">
                                    <input type="hidden" id="imginput151" name="project_img">
                                    <div class="img-section" id="img151">

                                    </div>
                                </div>
                                <h5 class="text-center mt-2">PROJECT IMAGE</h5>

                            </div>
                        </div>

                        <div class="col-sm-12">
                            <label for="exampleFormControlInput1" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" id="exampleFormControlInput1"
                                   placeholder="" required>
                        </div>
                        <div class="col-sm-12">
                            <label for="exampleFormControlTextarea1" class="form-label">Details</label>
                            <textarea class="form-control" name="details" id="exampleFormControlTextarea1"
                                      rows="3"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editprotfolioItemModal" tabindex="-1" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Edit Project </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('designer.profile.project.edit')}}" method="post">
                    @csrf
                    <div class="modal-body" id="projectEdit">

                    </div>
                </form>
            </div>
        </div>

        <div class="modal fade" id="exprienceModal" tabindex="-1" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Experience </h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{route('experience.data.store')}}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="exampleFormControlInput1" class="form-label">Job Title</label>
                                    <input type="text" name="job_title" class="form-control"
                                           id="exampleFormControlInput1" placeholder="">
                                </div>
                                <div class="col-sm-6">
                                    <label for="exampleFormControlInput1" class="form-label">Company Name</label>
                                    <input type="text" name="company_name" class="form-control"
                                           id="exampleFormControlInput1" placeholder="">
                                </div>
                                <div class="col-sm-6">
                                    <label for="exampleFormControlInput1" class="form-label">Start Date</label>
                                    <input type="date" name="start_date" class="form-control"
                                           id="exampleFormControlInput1" placeholder="">
                                </div>
                                <div class="col-sm-6">
                                    <label for="exampleFormControlInput1" class="form-label">End Date</label>
                                    <input type="date" name="end_date" class="form-control"
                                           id="exampleFormControlInput1" placeholder="">
                                </div>
                                <div class="col-sm-12">
                                    <label for="exampleFormControlTextarea1" class="form-label">Job
                                        Responsibility</label>
                                    <textarea class="form-control" name="responsibility"
                                              id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>

                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="editExperienceModal" tabindex="-1" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Experience Info </h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{route('experience.data.edit')}}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="row" id="editExperiencedata">


                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="educationModal" tabindex="-1" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Education Info </h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{route('education.data.store')}}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="exampleFormControlInput1" class="form-label">Degree</label>
                                    <input type="text" name="degree" class="form-control" id="exampleFormControlInput1"
                                           placeholder="">
                                </div>
                                <div class="col-sm-6">
                                    <label for="exampleFormControlInput1" class="form-label">Pass Date</label>
                                    <input type="date" name="pass_date" class="form-control"
                                           id="exampleFormControlInput1" placeholder="">
                                </div>
                                <div class="col-sm-12">
                                    <label for="exampleFormControlInput1" class="form-label">Institution Name</label>
                                    <input type="text" name="institution" class="form-control"
                                           id="exampleFormControlInput1" placeholder="">
                                </div>
                                <div class="col-sm-12">
                                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1"
                                              rows="3"></textarea>
                                </div>

                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="editeducationModal" tabindex="-1" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Education Info </h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{route('education.data.update')}}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="row" id="educationData">


                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- /.row (main row) -->
        @endsection

        @section('css_plugins')
            <!-- summernote -->
            <link rel="stylesheet" href="{{asset('assets/adminPanel')}}/plugins/summernote/summernote-bs4.min.css">
            {{--    select2--}}
            <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.18/dist/sweetalert2.min.css" rel="stylesheet">
        @endsection
        @section('js_plugins')
            <!-- Summernote -->
            <script src="{{asset('assets/adminPanel')}}/plugins/summernote/summernote-bs4.min.js"></script>
            {{--select 2--}}
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.18/dist/sweetalert2.all.min.js"></script>
        @endsection
        @section('js')
            <script>

                $(function () {
                    // Summernote
                    $('#summernote').summernote()
                    $('#summernote2').summernote()

                    // CodeMirror
                    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                        mode: "htmlmixed",
                        theme: "monokai"
                    });
                })


                function checkLoginUser(event) {
                    Swal.fire(`<h6 style="font-size: 28px;">Login first to make an appointment</h6>`);
                }


                File.prototype.convertToBase64 = function (callback) {
                    var reader = new FileReader();
                    reader.onloadend = function (e) {
                        callback(e.target.result, e.target.error);
                    };
                    reader.readAsDataURL(this);
                };

                $(".profileImg").on('change', function (data) {
                    var idcode = $(this).attr('idinfo');
                    var selectedFile = this.files[0];
                    selectedFile.convertToBase64(function (base64) {
                        $('#img' + idcode).html(` <img class="upload_img_style" src="${base64}" alt="">`)
                        $('#imginput' + idcode).val(base64);
                    })
                });

                function editProject(id) {
                    $.ajax({
                        url: "{{route('get.project.data')}}",
                        type: "get",
                        data: {
                            id: id,
                        },
                        success: function (response) {

                            $('#projectEdit').html(response);

                        },
                        error: function (xhr) {
                            //Do Something to handle error
                        }
                    });
                    $('#editprotfolioItemModal').modal('show')

                }

                function editExperience(id) {
                    $.ajax({
                        url: "{{route('get.experience.data')}}",
                        type: "get",
                        data: {
                            id: id,
                        },
                        success: function (response) {

                            $('#editExperiencedata').html(response);
                            $('#editExperienceModal').modal('show')

                        },
                        error: function (xhr) {
                            //Do Something to handle error
                        }
                    });
                }

                function editEducation(id) {
                    $.ajax({
                        url: "{{route('get.education.data')}}",
                        type: "get",
                        data: {
                            id: id,
                        },
                        success: function (response) {
                            $('#educationData').html(response);
                            $('#editeducationModal').modal('show')
                        },
                        error: function (xhr) {
                            //Do Something to handle error
                        }
                    });


                }

                function editprojectimg(data) {
                    var idcode = $(data).attr('idinfo');
                    var selectedFile = this.files[0];
                    selectedFile.convertToBase64(function (base64) {
                        $('#img' + idcode).html(` <img class="upload_img_style" src="${base64}" alt="">`)
                        $('#imginput' + idcode).val(base64);
                    })
                }

                // function baseImg(data){
                //     alert('sdfs')
                //     var selectedFile = $(data).files[0];
                //     selectedFile.convertToBase64(function(base64){
                //         alert(base64)
                //     })
                // }


                // function getImgData(data) {
                //     var selectedfile = $(data).files;
                //     if (selectedfile.length > 0) {
                //         var imageFile = selectedfile[0];
                //         var fileReader = new FileReader();
                //         fileReader.onload = function(fileLoadedEvent) {
                //             var srcData = fileLoadedEvent.target.result;
                //             var newImage = document.createElement('img');
                //             newImage.src = srcData;
                //
                //             $('#projectImg').html(newImage.outerHTML)
                //         }
                //         fileReader.readAsDataURL(imageFile);
                //     }
                // }


            </script>
@endsection
