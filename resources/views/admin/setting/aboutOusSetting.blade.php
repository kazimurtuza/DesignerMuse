@extends('admin.layout.layout')
@section('main_content')


    <form method="post" action="{{route('admin.about.ous.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="card w-100">
            <h4 class="text-center  p-3 bg-light text-bold">Top Section</h4>
            <div class="card-body">

                <div class="row">
                    <div class="mb-3 col-sm-6">
                        <label for="img" class="form-label">Top Background Image</label>
                        <input type="file" name="about_top_back_ground_img"
                               class="form-control" {{$about&&$about->about_top_back_ground_img?'':'required'}}>
                    </div>
                    <div class="mb-3 col-sm-6">
                        <label for="img" class="form-label">Top Fronted Image</label>
                        <input type="file" name="about_top_font_img"
                               class="form-control" {{$about&&$about->about_top_font_img?'':'required'}} >
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-sm-6">
                        <label for="img" class="form-label">Top Title English</label>
                        <input type="text" name="about_top_title_en" value="{{$about?$about->about_top_title_en:''}}"
                               class="form-control">
                        @error('about_top_title_en')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3 col-sm-6">
                        <label for="img" class="form-label">Top Title Arabic</label>
                        <input dir="rtl" type="text" class="form-control" name="about_top_title_ar"
                               value="{{$about?$about->about_top_title_ar:''}}">
                        @error('about_top_title_ar')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-sm-6">
                        <label for="img" class="form-label">Top Description English</label>
                        <textarea name="about_top_details_en" class="form-control" id="" cols="5"
                                  rows="3">{{$about?$about->about_top_title_ar:''}}</textarea>
                        @error('about_top_details_en')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3 col-sm-6">
                        <label for="img" class="form-label">Top Description Arabic</label>
                        <textarea dir="rtl" name="about_top_details_ar" class="form-control" id="" cols="5" rows="3"
                                  dir="rtl">{{$about?$about->about_top_details_ar:''}}</textarea>
                        @error('about_top_details_ar')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>


            </div>
        </div>

        <div class="card w-100">
            <h4 class="text-center  p-3 bg-light text-bold">About Ous</h4>
            <div class="card-body">

                <div class="row">
                    <div class="mb-3 col-sm-6">
                        <label for="img" class="form-label">About ous left Image</label>
                        <input type="file" class="form-control">
                    </div>

                </div>

                <div class="row">
                    <div class="mb-3 col-sm-6">
                        <label for="img" class="form-label">About Ous Title English</label>
                        <input type="text" name="about_title_en" value="{{$about?$about->about_title_en:''}}"
                               class="form-control">
                        @error('about_title_en')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3 col-sm-6">
                        <label for="img" class="form-label">About Ous Title Arabic</label>
                        <input dir="rtl" type="text" name="about_title_ar" value="{{$about?$about->about_title_ar:''}}"
                               class="form-control">
                        @error('about_title_ar')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-sm-6">
                        <label for="img" class="form-label">About ous description english</label>
                        <textarea name="about_ous_en" class="form-control" id="" cols="5"
                                  rows="3">{{$about?$about->about_ous_en:''}}</textarea>
                        @error('about_ous_en')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3 col-sm-6">
                        <label for="img" class="form-label">About ous description Arabic</label>
                        <textarea dir="rtl" name="about_ous_ar" class="form-control" id="" cols="5" rows="3"
                                  dir="rtl">{{$about?$about->about_ous_ar:''}}</textarea>
                        @error('about_ous_ar')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>


            </div>
        </div>

        <div class="card w-100">
            <h4 class="text-center  p-3 bg-light text-bold">Project</h4>
            <div class="card-body">
                <div class="d-flex justify-content-end">
                    <a class="btn btn-info mt-3 mb-3 float-end" onclick="bankInfoShow()">Create Project</a>
                </div>

                <table class="table">
                    <caption>List of users</caption>
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Title English</th>
                        <th scope="col">Title Arabic</th>
                        <th scope="col">Shot Info English</th>
                        <th scope="col">Shot Info Arabic</th>

                    </tr>
                    </thead>
                    <tbody>

                    @foreach($project as $projectData)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td><img src="{{asset($projectData->image)}}" alt="" height="50" width="50"></td>
                            <td>{{$projectData->title_en}}</td>
                            <td>{{$projectData->title_ar}}</td>
                            <td>{{$projectData->about_en}}</td>
                            <td>{{$projectData->about_ar}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$project->links()}}

            </div>
        </div>
        <div class="card w-100">
            <h4 class="text-center  p-3 bg-light text-bold ">Tem Member</h4>
            <div class="card-body">
                <div class="d-flex justify-content-end">
                    <a class="btn btn-info mt-3 mb-3 float-end" onclick="memberShow()">Add Member</a>
                </div>

                <table class="table">
                    <caption>List of users</caption>
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Name English</th>
                        <th scope="col">Name Arabic</th>
                        <th scope="col">Info English</th>
                        <th scope="col">Info Arabic</th>
                        <th scope="col">Facebook</th>
                        <th scope="col">Twitter</th>
                        <th scope="col">Instagram</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($member as $memberData)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td><img src="{{asset($memberData->image)}}" alt="" height="50" width="50"></td>
                            <td>{{$memberData->name_en}}</td>
                            <td>{{$memberData->name_ar}}</td>
                            <td>{{$memberData->about_en}}</td>
                            <td>{{$memberData->about_ar}}</td>
                            <td>{{$memberData->face_book}}</td>
                            <td>{{$memberData->twitter}}</td>
                            <td>{{$memberData->instagram}}</td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>

                {{$member->links()}}
            </div>
        </div>

        <div class="card w-100">
            <h4 class="text-center p-3 bg-light text-bold">Our Approach section</h4>
            <div class="card-body">

                <div class="row">
                    <div class="mb-3 col-sm-6">
                        <label for="img" class="form-label">Approach left Image</label>
                        <input type="file" name="our_approach_left_img" class="form-control">
                    </div>

                </div>

                <div class="row">
                    <div class="mb-3 col-sm-6">
                        <label for="img" class="form-label">Approach Head Title English</label>
                        <input type="text" name="our_approach_head_txt_en"
                               value="{{$about?$about->our_approach_head_txt_en:''}}" class="form-control">
                        @error('our_approach_head_txt_en')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3 col-sm-6">
                        <label for="img" class="form-label">Approach Head Title Arabic</label>
                        <input dir="rtl" type="text" name="our_approach_head_txt_ar"
                               value="{{$about?$about->our_approach_head_txt_ar:''}}" class="form-control">
                        @error('our_approach_head_txt_ar')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row p-3 bg-light text-bold "
                     style="box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;">
                    <div class="mb-3 col-sm-12">
                        <h5 class="text-center bg-light p-2">Approach One</h5>
                    </div>
                    <div class="mb-3 col-sm-2">
                        <label for="img" class="form-label">Approach One Icon</label>
                        <input type="file" name="our_approach_one_img" class="form-control">
                    </div>
                    <div class="mb-3 col-sm-4">
                        <label for="img" class="form-label">Approach One Title English</label>
                        <input dir="rtl" type="text" value="{{$about?$about->our_approach_one_title_en:''}}"
                               name="our_approach_one_title_en" class="form-control">
                    </div>
                    <div class="mb-3 col-sm-6">
                        <label for="img" class="form-label">Approach One Title Arabic</label>
                        <input dir="rtl" type="text" value="{{$about?$about->our_approach_one_title_ar:''}}"
                               name="our_approach_one_title_ar" class="form-control">
                    </div>


                    <div class="mb-3 col-sm-6">
                        <label for="img" class="form-label">Approach One description english</label>
                        <textarea name="our_approach_one_details_en" class="form-control" id="" cols="5"
                                  rows="3">{{$about?$about->our_approach_one_details_en:''}}</textarea>
                    </div>
                    <div class="mb-3 col-sm-6">
                        <label for="img" class="form-label">Approach One description Arabic</label>
                        <textarea dir="rtl" name="our_approach_one_details_ar" class="form-control" id="" cols="5"
                                  rows="3" dir="rtl">{{$about?$about->our_approach_one_details_ar:''}}</textarea>
                    </div>

                    <div class="mb-3 col-sm-12">
                        <h5 class="text-center bg-light p-2">Approach two</h5>
                    </div>
                    <div class="mb-3 col-sm-2">
                        <label for="img" class="form-label">Approach two Icon</label>
                        <input type="file" name="our_approach_two_img" class="form-control">
                    </div>
                    <div class="mb-3 col-sm-4">
                        <label for="img" class="form-label">Approach two Title English</label>
                        <input dir="rtl" type="text" value="{{$about?$about->our_approach_two_title_en:''}}"
                               name="our_approach_two_title_en" class="form-control">
                    </div>
                    <div class="mb-3 col-sm-6">
                        <label for="img" class="form-label">Approach One Title Arabic</label>
                        <input dir="rtl" type="text" value="{{$about?$about->our_approach_two_title_ar:''}}"
                               name="our_approach_two_title_ar" class="form-control">
                    </div>


                    <div class="mb-3 col-sm-6">
                        <label for="img" class="form-label">Approach two description english</label>
                        <textarea name="our_approach_two_details_en" class="form-control" id="" cols="5"
                                  rows="3">{{$about?$about->our_approach_two_details_en:''}}</textarea>
                    </div>
                    <div class="mb-3 col-sm-6">
                        <label for="img" class="form-label">Approach two description Arabic</label>
                        <textarea dir="rtl" name="our_approach_two_details_ar" class="form-control" id="" cols="5"
                                  rows="3" dir="rtl">{{$about?$about->our_approach_two_details_ar:''}}</textarea>
                    </div>

                    <div class="mb-3 col-sm-12">
                        <h5 class="text-center bg-light p-2">Approach Three</h5>
                    </div>
                    <div class="mb-3 col-sm-2">
                        <label for="img" class="form-label">Approach three Icon</label>
                        <input type="file" name="our_approach_three_img" class="form-control">
                    </div>
                    <div class="mb-3 col-sm-4">
                        <label for="img" class="form-label">Approach three Title English</label>
                        <input dir="rtl" type="text" value="{{$about?$about->our_approach_three_title_en:''}}"
                               name="our_approach_one_title_en" class="form-control">
                    </div>
                    <div class="mb-3 col-sm-6">
                        <label for="img" class="form-label">Approach three Title Arabic</label>
                        <input dir="rtl" type="text" value="{{$about?$about->our_approach_three_title_ar:''}}"
                               name="our_approach_one_title_ar" class="form-control">
                    </div>


                    <div class="mb-3 col-sm-6">
                        <label for="img" class="form-label">Approach three description english</label>
                        <textarea name="our_approach_three_details_en" class="form-control" id="" cols="5"
                                  rows="3">{{$about?$about->our_approach_three_details_en:''}}</textarea>
                    </div>
                    <div class="mb-3 col-sm-6">
                        <label for="img" class="form-label">Approach three description Arabic</label>
                        <textarea dir="rtl" name="our_approach_three_details_ar" class="form-control" id="" cols="5"
                                  rows="3" dir="rtl">{{$about?$about->our_approach_three_details_ar:''}}</textarea>
                    </div>

                    <div class="mb-3 col-sm-12">
                        <h5 class="text-center bg-light p-2">Approach Four</h5>
                    </div>
                    <div class="mb-3 col-sm-2">
                        <label for="img" class="form-label">Approach four Icon</label>
                        <input type="file" name="our_approach_four_img" class="form-control">
                    </div>
                    <div class="mb-3 col-sm-4">
                        <label for="img" class="form-label">Approach four Title English</label>
                        <input dir="rtl" type="text" value="{{$about?$about->our_approach_four_title_en:''}}"
                               name="our_approach_four_title_en" class="form-control">
                    </div>
                    <div class="mb-3 col-sm-6">
                        <label for="img" class="form-label">Approach four Title Arabic</label>
                        <input dir="rtl" type="text" value="{{$about?$about->our_approach_four_title_ar:''}}"
                               name="our_approach_four_title_ar" class="form-control">
                    </div>


                    <div class="mb-3 col-sm-6">
                        <label for="img" class="form-label">Approach four description english</label>
                        <textarea name="our_approach_four_details_en" class="form-control" id="" cols="5"
                                  rows="3">{{$about?$about->our_approach_four_details_en:''}}</textarea>
                    </div>
                    <div class="mb-3 col-sm-6">
                        <label for="img" class="form-label">Approach four description Arabic</label>
                        <textarea dir="rtl" name="our_approach_four_details_ar" class="form-control" id="" cols="5"
                                  rows="3" dir="rtl">{{$about?$about->our_approach_four_details_ar:''}}</textarea>
                    </div>

                    {{--<div class="mb-3 col-sm-12">--}}
                    {{--<h5 class="text-center bg-light p-2">Approach Five</h5>--}}
                    {{--</div>--}}
                    {{--<div class="mb-3 col-sm-2">--}}
                    {{--<label for="img" class="form-label">Approach five Icon</label>--}}
                    {{--<input  type="file" name="our_approach_five_img" class="form-control">--}}
                    {{--</div>--}}
                    {{--<div class="mb-3 col-sm-4">--}}
                    {{--<label for="img" class="form-label">Approach five Title English</label>--}}
                    {{--<input dir="rtl" type="text" value="{{$about?$about->our_approach_five_title_en:''}}" name="our_approach_five_title_en" class="form-control">--}}
                    {{--</div>--}}
                    {{--<div class="mb-3 col-sm-6">--}}
                    {{--<label for="img" class="form-label">Approach five Title Arabic</label>--}}
                    {{--<input dir="rtl" type="text" value="{{$about?$about->our_approach_five_title_ar:''}}" name="our_approach_five_title_ar" class="form-control">--}}
                    {{--</div>--}}


                    {{--<div class="mb-3 col-sm-6">--}}
                    {{--<label for="img" class="form-label">Approach five description english</label>--}}
                    {{--<textarea  name="our_approach_five_details_en" class="form-control" id="" cols="5" rows="3" >{{$about?$about->our_approach_five_details_en:''}}</textarea>--}}
                    {{--</div>--}}
                    {{--<div class="mb-3 col-sm-6">--}}
                    {{--<label for="img" class="form-label">Approach five description Arabic</label>--}}
                    {{--<textarea dir="rtl" name="our_approach_five_details_ar" class="form-control" id="" cols="5" rows="3" dir="rtl" >{{$about?$about->our_approach_five_details_ar:''}}</textarea>--}}
                    {{--</div>--}}


                </div>
                <div class="row justify-content-end mt-3">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>


            </div>

        </div>
    </form>

    <div class="modal fade" id="bankInfo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Project Add</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('admin.project.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-sm-6">
                                <label for="img" class="form-label">Top Image</label>
                                <input type="file" class="form-control" name="image" id="img"
                                       aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-sm-6">
                                <label for="exampleInputEmail1" class="form-label">Title English</label>
                                <input type="text" class="form-control" name="title_en" id="exampleInputEmail1" value=""
                                       aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3 col-sm-6">
                                <label for="exampleInputEmail1" class="form-label">Title Arabic</label>
                                <input dir="rtl" type="text" class="form-control" name="title_ar"
                                       id="exampleInputEmail1" value="" aria-describedby="emailHelp">
                            </div>

                            <div class="mb-3 col-sm-6">
                                <label for="exampleInputEmail1" class="form-label">Short Info English</label>
                                <textarea name="about_en" class="form-control" id="" cols="5" rows="3"
                                          dir="rtl"></textarea>
                            </div>
                            <div class="mb-3 col-sm-6">
                                <label for="exampleInputEmail1" class="form-label">Short Info English</label>
                                <textarea dir="rtl" name="about_ar" class="form-control" id="" cols="5" rows="3"
                                          dir="rtl"></textarea>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class=" w-25 btn btn-primary">Save</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="member" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Member</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('admin.member.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-sm-6">
                                <label for="img" class="form-label">Top Image</label>
                                <input type="file" class="form-control" name="image" id="img"
                                       aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-sm-6">
                                <label for="exampleInputEmail1" class="form-label">Name English</label>
                                <input type="text" class="form-control" name="name_en" id="exampleInputEmail1" value=""
                                       aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3 col-sm-6">
                                <label for="exampleInputEmail1" class="form-label">Name Arabic</label>
                                <input type="text" class="form-control" name="name_ar" id="exampleInputEmail1" value=""
                                       aria-describedby="emailHelp">
                            </div>

                            <div class="mb-3 col-sm-6">
                                <label for="exampleInputEmail1" class="form-label">Short Info English</label>
                                <textarea name="about_en" class="form-control" id="" cols="5" rows="3"
                                          dir="rtl"></textarea>
                            </div>
                            <div class="mb-3 col-sm-6">
                                <label for="exampleInputEmail1" class="form-label">Short Info Arabic</label>
                                <textarea dir="rtl" name="about_ar" class="form-control" id="" cols="5" rows="3"
                                          dir="rtl"></textarea>
                            </div>

                            <div class="mb-3 col-sm-4">
                                <label for="exampleInputEmail1" class="form-label">Facebook Link</label>
                                <input type="text" class="form-control" name="face_book" id="exampleInputEmail1"
                                       value="" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3 col-sm-4">
                                <label for="exampleInputEmail1" class="form-label">Twitter Link</label>
                                <input type="text" class="form-control" name="twitter" id="exampleInputEmail1" value=""
                                       aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3 col-sm-4">
                                <label for="exampleInputEmail1" class="form-label">Instagram Link</label>
                                <input type="text" class="form-control" name="instagram" id="exampleInputEmail1"
                                       value="" aria-describedby="emailHelp">
                            </div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class=" w-25 btn btn-primary">Save</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>



@endsection

@section('css_plugins')
    <link rel="stylesheet"
          href="{{asset('assets/adminPanel')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
          href="{{asset('assets/adminPanel')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet"
          href="{{asset('assets/adminPanel')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endsection
@section('js_plugins')
    <!-- DataTables  & Plugins -->
    <script src="{{asset('assets/adminPanel')}}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{asset('assets/adminPanel')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{asset('assets/adminPanel')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{asset('assets/adminPanel')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="{{asset('assets/adminPanel')}}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{asset('assets/adminPanel')}}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="{{asset('assets/adminPanel')}}/plugins/jszip/jszip.min.js"></script>
    <script src="{{asset('assets/adminPanel')}}/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="{{asset('assets/adminPanel')}}/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="{{asset('assets/adminPanel')}}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="{{asset('assets/adminPanel')}}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="{{asset('assets/adminPanel')}}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
@endsection
@section('js')

    <script>
        function addNewColor() {
            $('#coloradd').append($('#colorinput').html())
        }

        function editColor(colorList) {
            $('#editModal').modal('show');
            $("#colorid").val(colorList.id);
            $("#colorName").val(colorList.name);
            $("#colorCode").val(colorList.color_code);
        }

        function bankInfoShow() {

            $('#bankInfo').modal('show');

        }
    </script>


    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });

        function bankInfoShow() {

            $('#bankInfo').modal('show');

        }

        function memberShow() {

            $('#member').modal('show');

        }
    </script>
@endsection
