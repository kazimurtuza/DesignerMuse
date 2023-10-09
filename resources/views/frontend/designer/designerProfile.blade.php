@extends('frontend.layout.layout')
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
                            <div class="portfolio-header" style="padding-bottom: 0px;">
                                <div class="portfolio-header__right">
                                    <div class="user-name">
                                        <span class="light">{{$designerInfo->name}}</span>
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
                                        <a href="{{route('designer.appointment',['designer_id'=>$designerInfo->id])}}"
                                           class="portfolio-btn">Appointment Create</a>
                                    @else
                                        <span onclick="checkLoginUser()" class="portfolio-btn">Book Appointment</span>
                                    @endif


                                </div>
                            </div>
                            <div class="user-dsc" style="padding-top: 0px">
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
                                        @php $retPrc=($designerInfo->rating*100)/5; @endphp
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
                                <p>
                                    {!! $profile?$profile->about_me:'' !!}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-blog">
                        <div class="container">
                            <div class="portfolio-header">
                                <h3 class="title">Portfolio Items</h3>

                            </div>
                            <div class="portfolio-grid">


                                @foreach($projects as $projectData)
                                    <a href="{{asset($projectData->img)}}" class="grid-item image-popup">

                                        <img src="{{asset($projectData->img)}}" alt=""/>
                                    </a>
                                @endforeach
                            </div>
                            {{ $projects->links('pagination::simple-bootstrap-4') }}

                        </div>
                    </div>

                    <div class="portfolio-blog experiance">
                        <div class="container">
                            <div class="portfolio-header">
                                <h3 class="title">Education & Experience</h3>

                            </div>
                            <p>
                                {!! $profile?$profile->education_exprience:'' !!}
                            </p>
                        </div>

                    </div>
                    <div class="portfolio-blog">
                        <div class="container">
                            <div class="portfolio-header">
                                <h3 class="title">Reviews</h3>
                            </div>
                            @foreach($ratingList as $review)
                                <div class="review-item">
                                    <h4 class="title">{{$review->project_name}}</h4>
                                    <ul class="ratting-icon">
                                            <?php $i=$review->rating ?>
                                        @while($i>0)
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
                                                <?php $i-- ?>
                                        @endwhile

                                    </ul>
                                    <p> {!! $review->review !!}</p>
                                    <p>{{$review->customerInfo->name}}<span>{{$review->created_at->diffForHumans()}}</span></p>
                                </div>

                            @endforeach

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
                    <h1 class="modal-title" id="exampleModalLabel">Profile Info </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('profile.data.store')}}" method="post">
                    @csrf
                    <input type="hidden" name="designer_id" value="{{$profile?$profile->id :''}}">
                    <div class="modal-body">
                        <div class="row">

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
                        <div class="col-sm-12">
                            <label for="exampleFormControlTextarea1" class="form-label">Details</label>
                            <textarea class="form-control" name="about_profile" id="exampleFormControlTextarea1"
                                      rows="3">{{$profile?$profile->about_me :''}}</textarea>
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
                    <h1 class="modal-title" id="exampleModalLabel">Portfolio item </h1>
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
                                   placeholder="">
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


    <!-- /.row (main row) -->
@endsection

@section('css_plugins')
    <link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.18/dist/sweetalert2.min.css
" rel="stylesheet">
@endsection
@section('js_plugins')
    <script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.18/dist/sweetalert2.all.min.js
"></script>

@endsection
@section('js')

    <script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.18/dist/sweetalert2.all.min.js
"></script>


    <script>

        function checkLoginUser(event) {
            Swal.fire(`<h6 style="font-size: 28px;">Login first to make an appointment</h6>`);
        }

    </script>
@endsection


