@extends('shopkeeper.layout.layout')
@section('main_content')

    <div class="row d-flex justify-content-center">
        <div class="col-sm-8 card-boxshadow mt-4 p-4 profile-cardstyle" >
            <form action="{{route('user.profile.store')}}" method="post">
                @csrf
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" name="name" value="{{$shopDetails->name}}" aria-describedby="emailHelp" placeholder="User Name">
                    </div>
                </div>
                <div class="col-sm-8">
                    <label for="exampleInputEmail1">Top bar Image</label>
                    <div class="mb-2 mt-2 row" style="position: relative">
                        <div class="d-flex w-100">
                                     <span class="add-img-icon" onclick="coverphoto()">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit text-primary"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                </span>
                            <img id="updateimg2" style=" height: 200px;width:100%;border: 1px solid #e5e2e2;border-radius: 20px;padding: 0px;" src="{{asset($shopDetails->top_img)}}" alt="">
                        </div>
                    </div>

                    <div class="row d-flex justify-content-center" >
                        <input style="display: none" id="inp3"  type="file">
                        <input style="display: none" id="inp23" name="topbar_img" type="text">
                    </div>
                </div>
                <div class="col-sm-4">
                    <label for="exampleInputEmail1">Profile Photo</label>

                    <div class="mb-2 mt-2 row d-flex justify-content-center" style="position: relative">
                        <div class="d-flex justify-content-center">

                                     <span class="add-img-icon" onclick="changeBrand()">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit text-primary"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                </span>

                            @if($shopDetails->profile_img)
                            <img id="updateimg" style=" height: 140px;width: 140px;border: 1px solid #e5e2e2;border-radius: 50%;padding: 0px;" src="{{asset($shopDetails->profile_img)}}" alt="">
                                @else
                                <img id="updateimg" style=" height: 140px;width: 140px;border: 1px solid #e5e2e2;border-radius: 50%;padding: 0px;" src="{{asset('img/user2.jpg')}}" alt="">
                                @endif
                        </div>
                    </div>

                    <div class="row d-flex justify-content-center" id="productImglist">
                        <input style="display: none" id="inp"  type="file">
                        <input style="display: none" id="inp2" name="profile_img" type="text">
                    </div>
                </div>
                <div class="col-sm-12">
                    <label for="inputProductDescription" class="form-label"> Portfolio  </label>
                    <textarea class="form-control" name="description" style="min-height: 100px" id="summernote"
                              rows="3">{{$shopDetails->portfolio}}</textarea>
                </div>

                <div class="col-sm-12 d-flex justify-content-end">
                        <button type="submit" class="btn btn-info w-25">Save</button>
                </div>
            </div>
            </form>
        </div>
    </div>

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
