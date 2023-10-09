@extends('designer.layout.layout')
@section('main_content')
<section class="project-details-tabs">
    <div class="tabs-inner">
        <ul class="default-tab">
            <li class="active" data-target="process-tab">
                <a href="#">Project Process</a>
            </li>
            <li data-target="agreements-tab"><a href="#">Agreements</a></li>
            <li data-target="file-tab"><a href="#">Files</a></li>
            <li data-target="review-tab"><a href="#">Review</a></li>
            <li data-target="payment-info">
                <a href="#">Payment Information</a>
            </li>
        </ul>
    </div>
    <div class="projects-process-wrap active" id="process-tab">
        <div class="projects-process">
            <div class="container">
                <h2 class="title">Project Process</h2>

                <div class="project-status">
                    <p>Consultation</p>
                    <p>Status: Consultation Done</p>
                </div>
                <div class="project-status">
                    <p>Agreement</p>
                    @if($projectinfo->project_status==0||$projectinfo->project_status==3)
                        <p>Status: Not Signed</p>
                        @else
                        <p>Status: Signed</p>
                        @endif

                </div>
                <div class="project-status m-0">
                    <p>Project Process</p>

                    @if($projectinfo->project_status==0)
                        <span class="badge bg-warning text-dark">Pending</span>
                    @endif
                    @if($projectinfo->project_status==1)
                        <span class="badge bg-primary">On Going</span>
                    @endif
                    @if($projectinfo->project_status==3)
                        <span class="badge bg-danger">Rejected</span>
                    @endif



{{--                    <p>Status: On Going</p>--}}
                </div>
            </div>
        </div>
        @if($projectinfo->milestone)
        <div class="projects-table">
            <div class="table-wrapper">
                <table>
                    <thead>
                    <tr>
                        <th class="center">Milestone</th>
                        <th class="center">Release Date</th>
                        <th class="center">Amount</th>
                        <th class="center">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($projectinfo->milestone as $milestone)
                    <tr>
                        <td class="center">{{$milestone->title}}</td>
                        <td class="center">
                            @if($milestone->status==0)
                                -
                            @else
                                {{ date('d-M-y',strtotime($milestone->paid_date))}}
                            @endif

                        </td>
                        <td class="center">${{$milestone->amount}}</td>
                        <td class="center">
                            @if($milestone->status==0)
                                <span>Not Released</span>
                            @else
                                <span>Released</span>
                            @endif


                        </td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
            @endif
    </div>

    <div class="agreements" id="agreements-tab">
        <div class="container">
            <h2 class="title">Agreements</h2>
            <div class="stap-1">
                <div class="mt-4">
                    @if($projectinfo->agreement_file)
{{--                        <a href="{{asset($projectinfo->agreement_file)}}" download>--}}
{{--                            <i class="fa-solid fa-file-arrow-down"></i> Download Agreement File--}}
{{--                        </a>--}}
                        <a class="btn btn-info" href="{{asset($projectinfo->agreement_file)}}" download="">
                            <i class="fa-solid fa-file-arrow-down"></i> Download Project Agreement
                        </a>
                    @else
                        <span>No File uploaded</span>
                    @endif

                </div>
                <h2 class="title">Project Comment</h2>
                <div class="mb-5">
                    <p>
                      {!! $projectinfo->designer_project_comment !!}
                    </p>

                </div>
            </div>

        </div>
    </div>

    <div class="file" id="file-tab">
        <div class="container">
            <h2 class="title">File</h2>
            <div class="d-flex justify-content-end">  <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Add File</button></div>
            <div class="projects-table">
                <div class="projects-container container">
                    <div class="table-wrapper">
                        <table>
                            <thead>
                            <tr>
                                <th>Date</th>
                                <th>File Name</th>
                                <th>Uploaded By</th>
                                <th class="center">File</th>
                                <th class="end">Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($projectinfo->fileList as $projectFile)

                            <tr>
                                <td>{{date("F j, Y, g:i a",strtotime($projectFile->created_at))  }}</td>
                                <td class="center">{{$projectFile->file_name}}</td>
                                <td class="center">
                                    @if($projectFile->is_client_upload==1)
                                        {{$projectinfo->client->name}}
                                    @else
                                        {{$projectinfo->designer->name}}
                                    @endif
                                </td>
                                <td class="center">
                                    <a href="{{asset($projectFile->file)}}" download>
                                        <i class="fa-solid fa-file-arrow-down"></i>
                                    </a>


                                </td>
                                <td class="end action-btn">
                                    <a class="jeojaf" href="#"
                                    >File
                                        <span>
                            <svg
                                fill="#000000"
                                height="24px"
                                width="24px"
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
                          </span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Delete</a></li>
{{--                                        <li><a href="#">Sign</a></li>--}}
{{--                                        <li><a href="#">Accept</a></li>--}}
{{--                                        <li><a href="#">Reject</a></li>--}}
                                    </ul>

                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="reviews" id="review-tab">
        <div class="container">
            <h2 class="title">Reviews</h2>
            <div class="portfolio-blog">

                <div class="no-review">
                    <p>No review found!</p>
                    <button class="add-review-btn modal-open" data-target=".add-review-popup">
                        Add Review
                    </button>
                </div>

                <div class="review-item">
                    <h4 class="title">Review from (Client Name)</h4>
                    <div class="ratting-wrapper review-ratting">
                        <div class="ratting active-ratting" style="width: 50%">
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
                      ></path>
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
                      ></path>
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
                      ></path>
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
                      ></path>
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
                      ></path>
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
                      ></path>
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
                      ></path>
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
                      ></path>
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
                      ></path>
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
                      ></path>
                    </svg>
                  </span>
                        </div>
                    </div>
                    <span class="ratting-point"> 5.0</span>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima
                        quisquam, ex reprehenderit explicabo sint eos nam temporibus
                        quas porro est?
                    </p>
                    <p class="name">Client name</p>
                    <p class="name">@Username<span>5 days ago</span></p>
                </div>
                <div class="review-item">
                    <h4 class="title">Review from (Client Name)</h4>
                    <div class="ratting-wrapper review-ratting">
                        <div class="ratting active-ratting" style="width: 50%">
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
                      ></path>
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
                      ></path>
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
                      ></path>
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
                      ></path>
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
                      ></path>
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
                      ></path>
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
                      ></path>
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
                      ></path>
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
                      ></path>
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
                      ></path>
                    </svg>
                  </span>
                        </div>
                    </div>
                    <span class="ratting-point"> 5.0</span>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima
                        quisquam, ex reprehenderit explicabo sint eos nam temporibus
                        quas porro est?
                    </p>
                    <p class="name">Client name</p>
                    <p class="name">@Username<span>5 days ago</span></p>
                </div>
            </div>
        </div>
    </div>

    <div class="payment-info" id="payment-info">
        <div class="container">
{{--            @foreach($projectinfo->milestone as $milestone)--}}
{{--                <tr>--}}
{{--                    <td class="center">{{$milestone->title}}</td>--}}
{{--                    <td class="center">00/00/2023</td>--}}
{{--                    <td class="center">${{$milestone->amount}}</td>--}}
{{--                    <td class="center">--}}
{{--                        @if($milestone->status==0)--}}
{{--                            <a href="{{route('release.milestone',['milestone_id'=>$milestone->id])}}" class="btn btn-success">Release Now</a>--}}
{{--                        @else--}}
{{--                            <span>Released</span>--}}
{{--                        @endif--}}


{{--                    </td>--}}
{{--                </tr>--}}
{{--            @endforeach--}}





            <ul class="ds-block">
                <li>
                    <h3>Project Value</h3>
                    <p>${{$projectinfo->project_rate}}</p>
                </li>
                <li>
                    <h3>Payment Release</h3>
                    <p>${{$totalPayed}}</p>
                </li>
            </ul>

            <div class="mls-block">
                <h2>Milestones</h2>
                @foreach($projectinfo->milestone as $milestone)
                <div class="mls-item">
                    <h3>{{$milestone->title}}</h3>
                    <div class="meta">
                        <p>${{$milestone->amount}}</p>
                      @if($milestone->status==1)
                            <a href="#">Released</a>
                          @else
                                <a href="#">Not Release</a>
                        @endif

                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>



    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{route('add.project.file')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                    <input type="hidden" name="project_id" value="{{$projectinfo->id}}" id="projectId">
                    <input type="hidden" name="user_type" value="2" id="projectId">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add  File</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">File</label>
                            <input type="file" class="form-control" name="project_file" id="exampleInputPassword1">
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







{{--    <div class="payment-info" id="payment-info">--}}
{{--        <div class="container">--}}
{{--            <ul class="ds-block">--}}
{{--                <li>--}}
{{--                    <h3>Project Value</h3>--}}
{{--                    <p>$6000</p>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <h3>Payment Release</h3>--}}
{{--                    <p>$2000</p>--}}
{{--                </li>--}}
{{--            </ul>--}}

{{--            <div class="mls-block">--}}
{{--                <h2>Milestones</h2>--}}

{{--                <div class="mls-item">--}}
{{--                    <h3>Development custom company website backend.</h3>--}}
{{--                    <div class="meta">--}}
{{--                        <p>$2000</p> <a href="#">Release</a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="mls-item">--}}
{{--                    <h3>Development custom company website backend.</h3>--}}
{{--                    <div class="meta">--}}
{{--                        <p>$2000</p> <a href="#">Release</a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="mls-item">--}}
{{--                    <h3>Development custom company website backend.</h3>--}}
{{--                    <div class="meta">--}}
{{--                        <p>$2000</p> <a href="#">Release</a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="mls-item">--}}
{{--                    <h3>Development custom company website backend.</h3>--}}
{{--                    <div class="meta">--}}
{{--                        <p>$2000</p> <a href="#">Release</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="btn-crm">--}}
{{--                    <button class="btn-crm-el modal-open" data-target=".create-milestone-popup">--}}
{{--                        Create Milestone--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
</section>
@endsection
@section('js_plugins')
@endsection
@section('js')
@endsection

