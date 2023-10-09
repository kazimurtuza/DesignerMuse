@extends('admin.layout.layout')
@section('main_content')
    <div class="d-flex justify-content-end">
        <button class="btn btn-info mt-3 mb-3 float-end" onclick="bankInfoShow()">Create Top Bar</button>
    </div>

    <div class="row ">
        <h4 class="text-center p-3">Top Bar</h4>
        <table class="table table-bordered bg-white">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Title English</th>
                <th scope="col">Title Arabic</th>
                <th scope="col">Details English</th>
                <th scope="col">Details Arabic</th>
                <th scope="col">Get it Now</th>
                <th scope="col">Get it now Arabic</th>
                <th scope="col">Learn More Link</th>
                <th scope="col">Get it Now Link</th>
            </tr>
            </thead>
            <tbody>
            @foreach($topBarList as $key=>$list)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td><img src="{{asset($list->img)}}" alt="" width="30" height="30"></td>
                <td>{{$list->top_bar_title_en}}</td>
                <td>{{$list->top_bar_title_ar}}</td>
                <td>{{$list->top_bar_body_en}}</td>
                <td>{{$list->top_bar_body_ar}}</td>
                <td>{{$list->get_it_now_en}}</td>
                <td>{{$list->get_it_now_ar}}</td>
                <td>{{$list->learn_more_link}}</td>
                <td>{{$list->get_it_now_link}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center"> {!! $topBarList->links() !!}</div>


        <div class="card w-100">
            <h4 class="text-center p-3">How it's Work</h4>
            <div class="card-body">
                <form method="post" action="{{route('admin.home.setting.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="mb-3 col-sm-6">
                            <label for="img" class="form-label">How it's Work Step One English</label>
                            <textarea  name="how_work_step_one_en" class="form-control" id="" cols="5" rows="3" required>{{$settings?$settings->how_work_step_one_en:''}}</textarea>
                        </div>
                        <div class="mb-3 col-sm-6">
                            <label for="exampleInputEmail1" class="form-label">How it's Work Step One Arabic</label>
                            <textarea dir="rtl" name="how_work_step_one_ar" class="form-control" id="" cols="5" rows="3" dir="rtl" required>{{$settings?$settings->how_work_step_one_ar:''}}</textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-sm-6">
                            <label for="img" class="form-label">How it's Work Step Two English</label>
                            <textarea  name="how_work_step_two_en" class="form-control" id="" cols="5" rows="3" required>{{$settings?$settings->how_work_step_two_en:''}}</textarea>
                        </div>
                        <div class="mb-3 col-sm-6">
                            <label for="exampleInputEmail1" class="form-label">How it's Work Step Two Arabic</label>
                            <textarea dir="rtl" name="how_work_step_two_ar" class="form-control" id="" cols="5" rows="3" dir="rtl" required>{{$settings?$settings->how_work_step_two_ar:''}}</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-sm-6">
                            <label for="img" class="form-label">How it's Work Step Three English</label>
                            <textarea  name="how_work_step_three_en" class="form-control" id="" cols="5" rows="3" required>{{$settings?$settings->how_work_step_three_en:''}}</textarea>
                        </div>
                        <div class="mb-3 col-sm-6">
                            <label for="exampleInputEmail1" class="form-label">How it's Work Step Three Arabic</label>
                            <textarea dir="rtl" name="how_work_step_three_ar" class="form-control" id="" cols="5" rows="3" dir="rtl" required>{{$settings?$settings->how_work_step_three_ar:''}}</textarea>
                        </div>
                        <div class="col-sm-12 d-flex justify-content-end">
                            <button class="btn btn-success">Save</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>

        <div class="card w-100">
            <h4 class="text-center p-3">About Phone And Web</h4>
            <div class="card-body">
                <div>
                    <h5 > About Phone</h5>
                </div>
                <form method="post" action="{{route('admin.home.about-phone-web.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="mb-3 col-sm-6">
                            <label for="img" class="form-label">About Phone Title English</label>
                            <input type="text" name="headline_phone_tab_en" value="{{$settings?$settings->headline_phone_tab_en:''}}" class="form-control">
                        </div>
                        <div class="mb-3 col-sm-6">
                            <label for="exampleInputEmail1" class="form-label">About Phone Details English</label>
                            <textarea dir="rtl" name="phone_tab_details_en"  class="form-control" id="" cols="2" rows="1"  required>{{$settings?$settings->phone_tab_details_en:''}}</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-sm-6">
                            <label for="img" class="form-label">About Phone Title Arabic</label>
                            <input type="text" name="headline_phone_tab_ar" value="{{$settings?$settings->headline_phone_tab_ar:''}}" class="form-control">
                        </div>
                        <div class="mb-3 col-sm-6">
                            <label for="exampleInputEmail1" class="form-label">About Phone Details Arabic</label>
                            <textarea dir="rtl" name="phone_tab_details_ar" class="form-control" id="" cols="2" rows="1"  required>{{$settings?$settings->phone_tab_details_ar:''}}</textarea>
                        </div>
                    </div>
                    <div class="mt-3">
                        <h5 > About Web</h5>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-sm-6">
                            <label for="img" class="form-label">About Web Title English</label>
                            <input type="text" name="headline_web_tab_en" class="form-control" value="{{$settings?$settings->headline_web_tab_en:''}}">
                        </div>
                        <div class="mb-3 col-sm-6">
                            <label for="exampleInputEmail1" class="form-label">About Web Details English</label>
                            <textarea dir="rtl"  name="web_tab_details_en" class="form-control" id="" cols="2" rows="1"  required>{{$settings?$settings->web_tab_details_en:''}}</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-sm-6">
                            <label for="img" class="form-label">About Web Title Arabic</label>
                            <input  type="text" name="headline_web_tab_ar" value="{{$settings?$settings->headline_web_tab_ar:''}}" class="form-control">
                        </div>
                        <div class="mb-3 col-sm-6">
                            <label for="exampleInputEmail1" class="form-label">About Web Details Arabic</label>
                            <textarea dir="rtl" name="web_tab_details_ar" class="form-control" id="" cols="2" rows="1" required>{{$settings?$settings->web_tab_details_ar:''}}</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 d-flex justify-content-end">
                            <button class="btn btn-success">Save</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
        <div class="card w-100">
            <h4 class="text-center p-3">Feature Setting</h4>
            <div class="card-body">
                <div>
                    <h5 > About Phone</h5>
                </div>
                <form method="post" action="{{route('admin.home.feature-setting.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="mb-3 col-sm-6">
                            <label for="exampleInputEmail1" class="form-label">About Feature English</label>
                            <textarea  name="features_details_en" class="form-control" id="" cols="5" rows="5" required>{{$settings?$settings->features_details_en:''}}</textarea>
                        </div>
                        <div class="mb-3 col-sm-6">
                            <label for="exampleInputEmail1" class="form-label">About Feature Arabic</label>
                            <textarea dir="rtl" name="features_details_ar" class="form-control" id="" cols="5"  rows="5" required>{{$settings?$settings->features_details_ar:''}}</textarea>
                        </div>


                    </div>

                    <div>
                        <h5 >Feature One</h5>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-sm-6">
                            <label for="top_bar_body_en" class="form-label">Feature One Title English</label>
                            <input type="text" value="{{$settings?$settings->feature_one_title_en:''}}" name="feature_one_title_en" class="form-control">
                        </div>
                        <div class="mb-3 col-sm-6">
                            <label for="exampleInputEmail1" class="form-label">Feature One Details English</label>
                            <textarea   name="feature_one_details_en" class="form-control" id="" cols="2" rows="1" required>{{$settings?$settings->feature_one_details_en:''}}</textarea>
                        </div>
                        <div class="mb-3 col-sm-6">
                            <label for="top_bar_body_en" class="form-label">Feature One Title Arabic</label>
                            <input dir="rtl" type="text" name="feature_one_title_ar" class="form-control" value="{{$settings?$settings->feature_one_title_ar:''}}">
                        </div>
                        <div class="mb-3 col-sm-6">
                            <label for="exampleInputEmail1" class="form-label">Feature One Details Arabic</label>
                            <textarea dir="rtl" name="feature_one_details_ar" class="form-control" id="" cols="2" rows="1" required>{{$settings?$settings->feature_one_details_ar:''}}</textarea>
                        </div>
                    </div>
                    <div>
                        <h5 >Feature Two</h5>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-sm-6">
                            <label for="top_bar_body_en" class="form-label">Feature Two Title English</label>
                            <input  type="text" name="feature_two_title_en" value="{{$settings?$settings->feature_two_title_en:''}}" class="form-control">
                        </div>
                        <div class="mb-3 col-sm-6">
                            <label for="exampleInputEmail1" class="form-label">Feature Two Details English</label>
                            <textarea  name="feature_two_details_en" class="form-control" id="" cols="2" rows="1" required>{{$settings?$settings->feature_two_details_en:''}}</textarea>
                        </div>
                        <div class="mb-3 col-sm-6">
                            <label for="top_bar_body_en" class="form-label">Feature Two Title Arabic</label>
                            <input dir="rtl" type="text" name="feature_two_title_ar" value="{{$settings?$settings->feature_two_title_ar:''}}" class="form-control">
                        </div>
                        <div class="mb-3 col-sm-6">
                            <label for="exampleInputEmail1" class="form-label">Feature Two Details Arabic</label>
                            <textarea dir="rtl" name="feature_two_details_ar" class="form-control" id="" cols="2" rows="1" required>{{$settings?$settings->feature_two_details_ar:''}}</textarea>
                        </div>
                    </div>

                    <div>
                        <h5 >Feature Three</h5>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-sm-6">
                            <label for="top_bar_body_en" class="form-label">Feature Three Title English</label>
                            <input  type="text" name="feature_three_title_en" value="{{$settings?$settings->feature_three_title_en:''}}" class="form-control">
                        </div>
                        <div class="mb-3 col-sm-6">
                            <label for="exampleInputEmail1" class="form-label">Feature Three Details English</label>
                            <textarea  name="feature_three_details_en" class="form-control" id="" cols="2" rows="1" required>{{$settings?$settings->feature_three_details_en:''}}</textarea>
                        </div>
                        <div class="mb-3 col-sm-6">
                            <label for="top_bar_body_en" class="form-label">Feature Three Title Arabic</label>
                            <input dir="rtl" type="text" name="feature_three_title_ar" value="{{$settings?$settings->feature_three_title_ar:''}}" class="form-control">
                        </div>
                        <div class="mb-3 col-sm-6">
                            <label for="exampleInputEmail1" class="form-label">Feature Two Details Arabic</label>
                            <textarea dir="rtl" name="feature_two_details_ar" class="form-control" id="" cols="2" rows="1" required>{{$settings?$settings->feature_two_details_ar:''}}</textarea>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-sm-12 d-flex justify-content-end">
                            <button class="btn btn-success">Save</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>


    <div class="card w-100">
        <h4 class="text-center p-3">Looking For</h4>
        <div class="card-body">
            <form method="post" action="{{route('admin.looking-for.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="mb-3 col-sm-4">
                        <label for="img" class="form-label"> Designer Title English</label>
                        <input  type="text" name="designer_card_title_en" class="form-control" value="{{$settings?$settings->designer_card_title_en:''}}">
                    </div>
                    <div class="mb-3 col-sm-4">
                        <label for="img" class="form-label"> Designer Title Arabic</label>
                        <input dir="rtl" type="text" name="designer_card_title_ar" value="{{$settings?$settings->designer_card_title_ar:''}}" class="form-control">
                    </div>
                    <div class="mb-3 col-sm-4">
                        <label for="img" class="form-label">Designer Card Image</label>
                        <input type="file" name="designer_card_img" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-sm-4">
                        <label for="img" class="form-label"> Shop Title English</label>
                        <input type="text" name="shop_card_title_en" value="{{$settings?$settings->shop_card_title_en:''}}" class="form-control">
                    </div>
                    <div class="mb-3 col-sm-4">
                        <label for="img" class="form-label"> Shop Title Arabic</label>
                        <input dir="rtl" type="text" name="shop_card_title_ar" value="{{$settings?$settings->shop_card_title_ar:''}}" class="form-control">
                    </div>
                    <div class="mb-3 col-sm-4">
                        <label for="img" class="form-label">Shop Card Image</label>
                        <input type="file" name="shop_card_img" class="form-control">
                    </div>
                </div>


                <div class="row">
                    <div class="mb-3 col-sm-4">
                        <label for="img" class="form-label"> Explaining Video Cover Image</label>
                        <input type="file" name="explaining_video_cover_img" class="form-control">
                    </div>
                    <div class="mb-3 col-sm-4">
                        <label for="img" class="form-label">Explaining Video Link</label>
                        <input type="text" name="explaining_video_link" value="{{$settings?$settings->explaining_video_link:''}}" class="form-control">
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-12 d-flex justify-content-end">
                        <button class="btn btn-success">Save</button>
                    </div>
                </div>

            </form>

        </div>
    </div>

    {{--    designer_card_title_en	designer_card_title_ar	designer_card_img	shop_card_title_en	shop_card_title_ar	shop_card_img	explaining_video_title_en	explaining_video_title_ar	explaining_video_cover_img	explaining_video_link--}}



    <div class="modal fade" id="bankInfo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Top Slider</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('admin.home.top-bar.setting.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-sm-6">
                                <label for="img" class="form-label">Top Image</label>
                                <input type="file" class="form-control" name="image" id="img" aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3 col-sm-6">
                                <label for="exampleInputEmail1" class="form-label">Title English</label>
                                <input type="text" class="form-control" name="top_bar_title_en" id="exampleInputEmail1" value="" aria-describedby="emailHelp" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="top_bar_body_en" class="form-label">Details English</label>
                            <textarea  name="top_bar_body_en" class="form-control" id="top_bar_body_en"  cols="5" rows="5" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Title Arabic</label>
                            <input type="text" dir="rtl" class="form-control" name="top_bar_title_ar"  id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Details Arabic</label>
                            <textarea dir="rtl" name="top_bar_body_ar" class="form-control" id="" cols="5" rows="5" required></textarea>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-sm-4">
                                <label for="exampleInputEmail1" class="form-label">Learn More English</label>
                                <input type="text" class="form-control" name="learn_more_en" id="exampleInputEmail1" value="" aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3 col-sm-4">
                                <label for="exampleInputEmail1" class="form-label">Learn More Arabic</label>
                                <input type="text" class="form-control" name="learn_more_ar" id="exampleInputEmail1" dir="rtl" aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3 col-sm-4">
                                <label for="exampleInputEmail1" class="form-label">Learn More Link</label>
                                <input type="text" class="form-control" name="learn_more_link" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-sm-4">
                                <label for="exampleInputEmail1" class="form-label">Get it Now English</label>
                                <input type="text" class="form-control" name="get_it_now_en" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3 col-sm-4">
                                <label for="exampleInputEmail1" class="form-label">Get it Now Arabic</label>
                                <input type="text" class="form-control" name="get_it_now_ar" id="exampleInputEmail1" dir="rtl" aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3 col-sm-4">
                                <label for="exampleInputEmail1" class="form-label">Learn More Link</label>
                                <input type="text" class="form-control" name="get_it_now_link" id="exampleInputEmail1" aria-describedby="emailHelp" required>
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
    <link rel="stylesheet" href="{{asset('assets/adminPanel')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('assets/adminPanel')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('assets/adminPanel')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
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
        function addNewColor(){
            $('#coloradd').append($('#colorinput').html())
        }
        function editColor(colorList){
            $('#editModal').modal('show');
            $("#colorid").val(colorList.id);``
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
    </script>
@endsection
