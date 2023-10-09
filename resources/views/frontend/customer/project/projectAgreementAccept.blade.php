@extends('frontend.layout.layout')
@section('css_plugins')

    <style>

        .container2 {
            background: #fff;
            text-align: center;
            border-radius: 5px;
            padding: 50px 35px 10px 35px;
            background: #e3959545;
            max-width: 980px;
            margin: 0 auto;
        }

        .container2 header {
            font-size: 35px;
            font-weight: 600;
            margin: 0 0 30px 0;
        }

        .container2 .form-outer {
            width: 100%;
            overflow: hidden;
        }

        .container2 .form-outer form {
            display: flex;
            width: 400%;
        }

        .form-outer form .page {
            width: 25%;
            transition: margin-left 0.3s ease-in-out;
        }

        .form-outer form .page .title {
            text-align: left;
            font-size: 25px;
            font-weight: 500;
        }

        .form-outer form .page .field {
            /*width: 330px;*/
            height: 45px;
            margin: 45px 0;
            display: flex;
            position: relative;
        }

        form .page .field .label {
            position: absolute;
            top: -30px;
            font-weight: 500;
        }

        form .page .field input {
            height: 100%;
            width: 100%;
            border: 1px solid lightgrey;
            border-radius: 5px;
            padding-left: 15px;
            font-size: 18px;
            background-color: #ffffff;
        }

        form .page .field select {
            width: 100%;
            padding-left: 10px;
            font-size: 17px;
            font-weight: 500;
        }

        .buttons-group{
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        form .page .field button {
            width: 130px;
            height: calc(100% + 5px);
            border: none;
            background: var(--main-color);
            margin-top: -20px;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
            font-size: 18px;
            font-weight: 500;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: 0.5s ease;
        }

        form .page .field button:hover {
            background: #000;
        }

        form .page .btns button {
            margin-top: -20px !important;
        }

        form .page .btns button.prev {
            margin-right: 3px;
            font-size: 17px;
        }

        form .page .btns button.next {
            margin-left: 3px;
        }

        .container2 .progress-bar {
            display: flex !important;
            margin: 40px 0;
            user-select: none;
            position: relative;
            background: none;
        }

        .container2 .progress-bar .step {
            text-align: center;
            width: 100%;
            position: relative;
        }

        .container2 .progress-bar .step p {
            font-weight: 500;
            font-size: 18px;
            color: #333333;
            margin-bottom: 8px;
        }

        .progress-bar .step .bullet {
            height: 50px;
            width: 50px;
            border: 2px solid #333333;
            display: inline-flex;
            border-radius: 50%;
            position: relative;
            transition: 0.2s;
            font-weight: 500;
            font-size: 17px;
            line-height: 25px;
            align-items: center;
            z-index: 9999;
            background: var(--main-color);
        }

        .progress-bar .step .bullet.active {
            border-color: #333333;
            background: #333333;
        }

        .progress-bar .step .bullet span {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }

        .progress-bar .step .bullet:before,
        .progress-bar .step .bullet:after {
            position: absolute;
            content: "";
            bottom: 21px;
            left: 48px;
            height: 2px;
            width: 49px;
            background: #333333;
            z-index: -1;
        }

        .progress-bar .step .bullet.active:after {
            background: #333333;
            transform: scaleX(0);
            transform-origin: left;
            animation: animate 0.3s linear forwards;
        }

        @keyframes animate {
            100% {
                transform: scaleX(1);
            }
        }

        .progress-bar .step:last-child .bullet:before,
        .progress-bar .step:last-child .bullet:after {
            display: none;
        }

        .progress-bar .step p.active {
            color: var(--main-color);
            transition: 0.2s linear;
        }

        .progress-bar .step .check {
            position: absolute;
            left: 50%;
            top: 70%;
            font-size: 15px;
            transform: translate(-50%, -50%);
            display: none;
        }

        .progress-bar .step .check.active {
            display: block;
            color: #fff;
        }
        .form-outer form  .page #milestoneList .field{
    margin: 30px 0;
        }
    </style>

@endsection
@section('main_content')
    <div class="d-flex justify-content-center project-spets">
        <div class="container2">
            <header>Create Project</header>
            <div class="progress-bar">
                <div class="step" style="position: absolute;left: -126px;">
                    <p>
                        Name
                    </p>
                    <div class="bullet">
                        <span>1</span>
                    </div>
                    <div class="check fas fa-check" aria-hidden="true"></div>
                </div>
                <div class="step" style="position: absolute;left: -32px;">
                    <p>
                        Contact
                    </p>
                    <div class="bullet">
                        <span>2</span>
                    </div>
                    <div class="check fas fa-check" aria-hidden="true"></div>
                </div>
                <div class="step" style="position: absolute;left: 55px;">
                    <p>
                        Birth
                    </p>
                    <div class="bullet">
                        <span>3</span>
                    </div>
                    <div class="check fas fa-check" aria-hidden="true"></div>
                </div>
                <div class="step" style="margin-left: 138px;">
                    <p>
                        Submit
                    </p>
                    <div class="bullet">
                        <span>4</span>
                    </div>
                    <div class="check fas fa-check" aria-hidden="true"></div>
                </div>
            </div>
            <div class="form-outer">
                <form action="{{route('designer.project.agreement.accept.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="page slide-page">
                        <input type="hidden" name="project_id" value="{{$projectInfo->id}}">
                        <div class="row">
                            <div class="col-sm-6 field">
                                <div class="label">
                                    Project Title
                                </div>
                                <h6 class="w-100 p-title" >{{$projectInfo->title}}</h6>
                            </div>
                            <div class="col-sm-3 field">
                                <label for="fileupload" class="form-label label">Project Date Line</label>
                                <h6 class="w-100"
                                    style="background: white;border-radius: 5px;padding: 10px; text-align: left;">{{$projectInfo->dateline}}</h6>
                            </div>
                            <div class="col-sm-3 field">
                                <label for="fileupload" class="form-label label">Project File</label>
                                <a href="{{asset($projectFile->file)}}" class="downloadbtn" download>Download Project
                                    File</a>
                            </div>
                        </div>

                        <div>
                            <h6 class="label" style="text-align: left;">
                                Description
                            </h6>
                            <p  style="background: white;border-radius: 5px;padding: 10px;text-align: left">{{$projectInfo->description}}</p>
                        </div>

                        <div class="field buttons-group">
                            <button class="firstNext next">Next</button>
                        </div>
                    </div>
                    <div class="page">
                        <div class="row">
                            <div class="col-sm-6">
                                <h6 class="label" style="text-align: left;">
                                    Agreement Details
                                </h6>
                                <a href="{{asset($projectInfo->agreement_file)}}" class="downloadbtn" download="">Download
                                    Agreement File</a>
                            </div>
                            <div class="col-sm-6">
                                <h6 class="label" style="text-align: left;">
                                    Project Rate
                                </h6>
                                <h4 class="bg-white"
                                    style="padding:5px; border-radius: 5px">{{$projectInfo->project_rate}}</h4>
                            </div>
                        </div>

                        <div class="acc-terms" style="margin-top: 10px;margin-bottom: 40px;">
                                <div class="form-check" style="text-align:center; padding-left: 0;">
                                    <label><input type="checkbox" id="ischeck" name="agreement_accept" value="1"> I Accept  this agreement</label>
                                </div>
                            </div>

                        <div class="field btns buttons-group">
                            <button class="prev-1 prev">Previous</button>
                            <sapn onclick="checkAgreement()" class="nextbntst">Next</sapn>
                            <button style="display: none"  class="next-1 next" id="mailestone">Next</button>
                        </div>
                    </div>
                    <div class="page">
                        <div class="title" style="text-align: center; margin-bottom: 40px;">
                            Project Price and Milestone:
                        </div>
                        <div id="milestoneList">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="field">
                                        <div class="label">
                                            Title
                                        </div>
                                        <input type="text" name="milestone_title[]" placeholder="Title" >
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="field">
                                        <div class="label">
                                            Amount
                                        </div>
                                        <input type="number" name="milestone_amount[]" placeholder="Amount">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div>
                            <apan class="btn btn-info" onclick="miltestoneAdd()">Add Milestone</apan>
                        </div>
                        <div class="field btns buttons-group">
                            <button class="prev-2 prev">Previous</button>
                            <button class="next-2 next">Next</button>
                        </div>
                    </div>
                    <div class="page">
                        <div class="title text-center">
                            Make sure to submit:
                        </div>
                        <div class="field btns buttons-group">
                            <button class="prev-3 prev">Previous</button>
                            <button class="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div id="milestoneItem" style="display:none">
        <div class="row">
            <div class="col-sm-6">
                <div class="field">
                    <div class="label">
                        Title
                    </div>
                    <input type="text" name="milestone_title[]" placeholder="Title" required>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="field">
                    <div class="label">
                        Amount
                    </div>
                    <input type="number" name="milestone_amount[]" placeholder="Amount" required>
                </div>
            </div>

        </div>
    </div>

@endsection
@section('js_plugins')
@endsection


@section('js')
    <script>
        function checkAgreement(){
            let isCheck= $('#ischeck').is(":checked");
           if(isCheck){
               $('#mailestone').click();

           }else{
               toastr.error('Accept the contract first')
               return false;
           }
        }
        function miltestoneAdd() {

            var item = $('#milestoneItem').html();
            $('#milestoneList').append(item)

        }

        const slidePage = document.querySelector(".slide-page");
        const nextBtnFirst = document.querySelector(".firstNext");
        const prevBtnSec = document.querySelector(".prev-1");
        const nextBtnSec = document.querySelector(".next-1");
        const prevBtnThird = document.querySelector(".prev-2");
        const nextBtnThird = document.querySelector(".next-2");
        const prevBtnFourth = document.querySelector(".prev-3");
        const submitBtn = document.querySelector(".submit");
        const progressText = document.querySelectorAll(".step p");
        const progressCheck = document.querySelectorAll(".step .check");
        const bullet = document.querySelectorAll(".step .bullet");
        let current = 1;

        nextBtnFirst.addEventListener("click", function (event) {
            event.preventDefault();
            slidePage.style.marginLeft = "-25%";
            bullet[current - 1].classList.add("active");
            progressCheck[current - 1].classList.add("active");
            progressText[current - 1].classList.add("active");
            current += 1;
        });
        nextBtnSec.addEventListener("click", function (event) {
            event.preventDefault();
            slidePage.style.marginLeft = "-50%";
            bullet[current - 1].classList.add("active");
            progressCheck[current - 1].classList.add("active");
            progressText[current - 1].classList.add("active");
            current += 1;
        });
        nextBtnThird.addEventListener("click", function (event) {
            event.preventDefault();
            slidePage.style.marginLeft = "-75%";
            bullet[current - 1].classList.add("active");
            progressCheck[current - 1].classList.add("active");
            progressText[current - 1].classList.add("active");
            current += 1;
        });
        // submitBtn.addEventListener("click", function() {
        //     bullet[current - 1].classList.add("active");
        //     progressCheck[current - 1].classList.add("active");
        //     progressText[current - 1].classList.add("active");
        //     current += 1;
        //     setTimeout(function() {
        //         alert("Your Form Successfully Signed up");
        //         location.reload();
        //     }, 800);
        // });

        prevBtnSec.addEventListener("click", function (event) {
            event.preventDefault();
            slidePage.style.marginLeft = "0%";
            bullet[current - 2].classList.remove("active");
            progressCheck[current - 2].classList.remove("active");
            progressText[current - 2].classList.remove("active");
            current -= 1;
        });
        prevBtnThird.addEventListener("click", function (event) {
            event.preventDefault();
            slidePage.style.marginLeft = "-25%";
            bullet[current - 2].classList.remove("active");
            progressCheck[current - 2].classList.remove("active");
            progressText[current - 2].classList.remove("active");
            current -= 1;
        });
        prevBtnFourth.addEventListener("click", function (event) {
            event.preventDefault();
            slidePage.style.marginLeft = "-50%";
            bullet[current - 2].classList.remove("active");
            progressCheck[current - 2].classList.remove("active");
            progressText[current - 2].classList.remove("active");
            current -= 1;
        });
    </script>
@endsection
