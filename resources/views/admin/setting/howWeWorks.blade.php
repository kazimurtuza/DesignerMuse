@extends('admin.layout.layout')
@section('main_content')

    <div>
        @php $type=request()->get('type'); @endphp
        <div class="btn-group btn-group-toggle d-flex justify-content-center pt-4" data-toggle="buttons">
            <a href="{{route('admin.we.work',['type'=>2])}}">
                <label class="btn  {{$type==2?'btn-info':'btn-secondary'}}">
                    How Designer Work
                </label>
            </a>
            <a class="ml-2 mr-2" href="{{route('admin.we.work',['type'=>1])}}">
                <label class="btn {{$type==1?'btn-info':'btn-secondary'}}">
                    How Shop Work
                </label>
            </a>
            <a href="{{route('admin.we.work',['type'=>3])}}">
                <label class="btn {{$type==3?'btn-info':'btn-secondary'}}">
                    How Company Work
                </label>
            </a>
        </div>
    </div>

    <h3 class="text-center text-bold mt-3">
        @if($type==2)
            How Designer Work
        @elseif($type==1)
            How Shop Work
        @elseif($type==3)
            How Company Work
        @endif
    </h3>
    <form action="{{route('how.it.work.store')}}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="card-body m-2 mt-4 bg-white"
         style="box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;">
        <div class="row">
            <input type="hidden" name="type" value="{{request()->get('type')}}" >
            <div class="mb-3 col-sm-6">
                <label for="exampleInputEmail1" class="form-label">How It Works Title English</label>
                <input type="text" class="form-control" value="{{$howWork?$howWork->how_it_work_head_title_en:''}}" name="how_it_work_head_title_en" id="exampleInputEmail1"
                        aria-describedby="emailHelp" >
                @error('how_it_work_head_title_en')
                <div class="text-danger">{{ $message }}</div>
                @enderror

            </div>
            <div class="mb-3 col-sm-6">
                <label for="exampleInputEmail1" class="form-label">How It Works Title Arabic</label>
                <input dir="rtl" type="text" value="{{$howWork?$howWork->how_it_work_head_title_ar:''}}" class="form-control" name="how_it_work_head_title_ar"
                       id="exampleInputEmail1" dir="rtl" aria-describedby="emailHelp" >
                @error('how_it_work_head_title_ar')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3 col-sm-6">
                <label for="exampleInputEmail1" class="form-label">How It Works Short description English</label>
                <textarea  name="how_it_work_short_description_en" class="form-control" id="" cols="5" rows="5"
                          >{{$howWork?$howWork->how_it_work_short_description_en:''}}</textarea>
                @error('how_it_work_short_description_en')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3 col-sm-6">
                <label for="exampleInputEmail1" class="form-label">How It Works Short description Arabic</label>
                <textarea dir="rtl" name="how_it_work_short_description_ar" class="form-control" id="" cols="5" rows="5"
                          >{{$howWork?$howWork->how_it_work_short_description_ar:''}}</textarea>
                @error('how_it_work_short_description_ar')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
    <div class="card-body bg-white m-2"
         style="box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;">
        <div class="row">
            <div class="col-sm-12"><h4 class="text-bold p-1 text-center bg-light">Steps on how it works</h4></div>

            <div class="mb-3 col-sm-2">
                <label for="exampleInputEmail1" class="form-label">Icon One</label>
                <input type="file" class="form-control" name="work_process_one_img" id="exampleInputEmail1"
                       aria-describedby="emailHelp" >
                @error('work_process_one_img')
                <div class="text-danger">{{ $message }}</div>
                @enderror

            </div>
            <div class="mb-3 col-sm-4">
                <label for="exampleInputEmail1" class="form-label">How It Works One Title English</label>
                <input type="text" class="form-control" name="work_process_one_title_en" id="exampleInputEmail1"
                       value="{{$howWork?$howWork->work_process_one_title_en:''}}" aria-describedby="emailHelp" >

            </div>
            <div class="mb-3 col-sm-6">
                <label for="exampleInputEmail1" class="form-label">How It Works One Title Arabic</label>
                <input type="text" value="{{$howWork?$howWork->work_process_one_title_ar:''}}" class="form-control" name="work_process_one_title_ar" id="exampleInputEmail1"
                       dir="rtl" aria-describedby="emailHelp" >
            </div>
            <div class="mb-3 col-sm-6">
                <label for="exampleInputEmail1" class="form-label">How It Works One description English</label>
                <textarea name="work_process_two_details_en" class="form-control" id="" cols="1" rows="1"
                          >{{$howWork?$howWork->work_process_two_details_en:''}}</textarea>
            </div>
            <div class="mb-3 col-sm-6">
                <label for="exampleInputEmail1" class="form-label">How It Works One description Arabic</label>
                <textarea dir="rtl" name="work_process_two_details_ar" class="form-control" id="" cols="1" rows="1"
                          >{{$howWork?$howWork->work_process_two_details_ar:''}}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12"><h5 class="text-bold p-1 text-center bg-light">Step Two</h5></div>
            <div class="mb-3 col-sm-2">
                <label for="exampleInputEmail1" class="form-label">Icon two</label>
                <input type="file" class="form-control" name="work_process_two_img" id="exampleInputEmail1"
                       aria-describedby="emailHelp" >
            </div>
            <div class="mb-3 col-sm-4">
                <label for="exampleInputEmail1" class="form-label">How It Works two Title English</label>
                <input type="text" class="form-control" name="work_process_two_title_en" id="exampleInputEmail1"
                       value="{{$howWork?$howWork->work_process_two_title_en:''}}" aria-describedby="emailHelp" >
            </div>
            <div class="mb-3 col-sm-6">
                <label for="exampleInputEmail1" class="form-label">How It Works two Title Arabic</label>
                <input type="text" value="{{$howWork?$howWork->work_process_two_title_ar:''}}" class="form-control" name="work_process_three_title_ar" id="exampleInputEmail1"
                       dir="rtl" aria-describedby="emailHelp" >
            </div>
            <div class="mb-3 col-sm-6">
                <label for="exampleInputEmail1" class="form-label">How It Works two description English</label>
                <textarea name="work_process_two_details_en" class="form-control" id="" cols="1" rows="1"
                          >{{$howWork?$howWork->work_process_two_details_en:''}}</textarea>
            </div>
            <div class="mb-3 col-sm-6">
                <label for="exampleInputEmail1" class="form-label">How It Works two description Arabic</label>
                <textarea dir="rtl" name="work_process_two_details_ar" class="form-control" id="" cols="1" rows="1"
                          >{{$howWork?$howWork->work_process_two_details_ar:''}}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12"><h5 class="text-bold p-1 text-center bg-light">Step Three</h5></div>
            <div class="mb-3 col-sm-2">
                <label for="exampleInputEmail1" class="form-label">Icon three</label>
                <input type="file" class="form-control" name="work_process_three_img" id="exampleInputEmail1"
                       aria-describedby="emailHelp" >
            </div>
            <div class="mb-3 col-sm-4">
                <label for="exampleInputEmail1" class="form-label">How It Works three Title English</label>
                <input type="text" class="form-control" name="work_process_three_title_en" id="exampleInputEmail1"
                       value="{{$howWork?$howWork->work_process_three_title_en:''}}" aria-describedby="emailHelp" >
            </div>
            <div class="mb-3 col-sm-6">
                <label for="exampleInputEmail1" class="form-label">How It Works three Title Arabic</label>
                <input type="text" value="{{$howWork?$howWork->work_process_three_title_ar:''}}" class="form-control" name="work_process_three_title_ar" id="exampleInputEmail1"
                       dir="rtl" aria-describedby="emailHelp" >
            </div>
            <div class="mb-3 col-sm-6">
                <label for="exampleInputEmail1" class="form-label">How It Works three description English</label>
                <textarea name="work_process_three_details_en" class="form-control" id="" cols="1" rows="1"
                          >{{$howWork?$howWork->work_process_three_details_en:''}}</textarea>
            </div>
            <div class="mb-3 col-sm-6">
                <label for="exampleInputEmail1" class="form-label">How It Works three description Arabic</label>
                <textarea dir="rtl" name="work_process_three_details_ar" class="form-control" id="" cols="1" rows="1"
                          >{{$howWork?$howWork->work_process_three_details_ar:''}}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12"><h5 class="text-bold p-1 text-center bg-light">Step Four</h5></div>

            <div class="mb-3 col-sm-2">
                <label for="exampleInputEmail1" class="form-label">Icon four</label>
                <input type="file" class="form-control" name="work_process_four_img" id="exampleInputEmail1"
                       aria-describedby="emailHelp" >
            </div>
            <div class="mb-3 col-sm-4">
                <label for="exampleInputEmail1" class="form-label">How It Works four Title English</label>
                <input type="text" class="form-control" name="work_process_four_title_en" id="exampleInputEmail1"
                       value="{{$howWork?$howWork->work_process_four_title_en:''}}" aria-describedby="emailHelp" >
            </div>
            <div class="mb-3 col-sm-6">
                <label for="exampleInputEmail1" class="form-label">How It Works four Title Arabic</label>
                <input type="text"  value="{{$howWork?$howWork->work_process_four_title_ar:''}}" class="form-control" name="work_process_four_title_ar" id="exampleInputEmail1"
                       dir="rtl" aria-describedby="emailHelp" >
            </div>
            <div class="mb-3 col-sm-6">
                <label for="exampleInputEmail1" class="form-label">How It Works four description English</label>
                <textarea name="work_process_four_details_en" class="form-control" id="" cols="1" rows="1"
                          >{{$howWork?$howWork->work_process_four_details_en:''}}</textarea>
            </div>
            <div class="mb-3 col-sm-6">
                <label for="exampleInputEmail1" class="form-label">How It Works four description Arabic</label>
                <textarea dir="rtl" name="work_process_four_details_ar" class="form-control" id="" cols="1" rows="1"
                          >{{$howWork?$howWork->work_process_four_details_ar:''}}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12"><h5 class="text-bold p-1 text-center bg-light">Step Five</h5></div>

            <div class="mb-3 col-sm-2">
                <label for="exampleInputEmail1" class="form-label">Icon five</label>
                <input type="file" class="form-control" name="work_process_five_img" id="exampleInputEmail1"
                       aria-describedby="emailHelp" >
            </div>
            <div class="mb-3 col-sm-4">
                <label for="exampleInputEmail1" class="form-label">How It Works five Title English</label>
                <input type="text" class="form-control" name="work_process_five_title_en" id="exampleInputEmail1"
                       value="{{$howWork?$howWork->work_process_five_title_en:''}}" aria-describedby="emailHelp" >
            </div>
            <div class="mb-3 col-sm-6">
                <label for="exampleInputEmail1" class="form-label">How It Works five Title Arabic</label>
                <input type="text" class="form-control" name="work_process_five_title_ar" id="exampleInputEmail1"
                       value="{{$howWork?$howWork->work_process_five_title_ar:''}}" dir="rtl" aria-describedby="emailHelp" >
            </div>
            <div class="mb-3 col-sm-6">
                <label for="exampleInputEmail1" class="form-label">How It Works five description English</label>
                <textarea name="work_process_five_details_en" class="form-control" id="" cols="1" rows="1"
                          >{{$howWork?$howWork->work_process_five_details_en:''}}</textarea>
            </div>
            <div class="mb-3 col-sm-6">
                <label for="exampleInputEmail1" class="form-label">How It Works five description Arabic</label>
                <textarea dir="rtl" name="work_process_five_details_ar" class="form-control" id="" cols="1" rows="1"
                          >{{$howWork?$howWork->work_process_five_details_ar:''}}</textarea>
            </div>
        </div>

    </div>

    <div class="card-body bg-white m-2"
         style="box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;">
        <div class="row">
            <div class="mb-3 col-sm-12">
                <label for="exampleInputEmail1" class="form-label"></label>
                <h4 class="text-bold text-center"> Payment Process Step </h4>
            </div>

            <div class="mb-3 col-sm-6">
                <label for="imgss" class="form-label">Payment section left image</label>
                <input type="file" class="form-control" name="payment_left_img" id="imgss"
                       aria-describedby="emailHelp">
            </div>
            <div class="mb-3 col-sm-6">
            </div>

            <div class="mb-3 col-sm-6">
                <label for="exampleInputEmail1" class="form-label">Payment process One English</label>
                <input type="text" class="form-control" name="how_payment_work_one_en" id="exampleInputEmail1" value="{{$howWork?$howWork->how_payment_work_one_en:''}}"
                       aria-describedby="emailHelp" >
            </div>
            <div class="mb-3 col-sm-6">
                <label for="exampleInputEmail1" class="form-label">Payment process One Arabic</label>
                <input dir="rtl" type="text" class="form-control" name="how_payment_work_one_ar" id="exampleInputEmail1"
                       value="{{$howWork?$howWork->how_payment_work_one_ar:''}}" aria-describedby="emailHelp" >
            </div>

        </div>
        <div class="row">
            <div class="mb-3 col-sm-6">
                <label for="exampleInputEmail1" class="form-label">Payment process Two English</label>
                <input type="text" class="form-control" name="how_payment_work_two_en" id="exampleInputEmail1" value="{{$howWork?$howWork->how_payment_work_two_en:''}}"
                       aria-describedby="emailHelp" >
            </div>
            <div class="mb-3 col-sm-6">
                <label for="exampleInputEmail1" class="form-label">Payment process two Arabic</label>
                <input dir="rtl" type="text" class="form-control" name="how_payment_work_two_ar" id="exampleInputEmail1"
                       value="{{$howWork?$howWork->how_payment_work_two_ar:''}}" aria-describedby="emailHelp" >
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-sm-6">
                <label for="exampleInputEmail1" class="form-label">Payment process Three English</label>
                <input type="text" class="form-control" name="how_payment_work_three_en" id="exampleInputEmail1" value="{{$howWork?$howWork->how_payment_work_three_en:''}}"
                       aria-describedby="emailHelp" >
            </div>
            <div class="mb-3 col-sm-6">
                <label for="exampleInputEmail1" class="form-label">Payment process Three Arabic</label>
                <input dir="rtl" type="text" class="form-control" name="how_payment_work_three_ar" id="exampleInputEmail1"
                       value="{{$howWork?$howWork->how_payment_work_three_ar:''}}" aria-describedby="emailHelp" >
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-sm-6">
                <label for="exampleInputEmail1" class="form-label">Payment process Four English</label>
                <input type="text" class="form-control" name="how_payment_work_four_en" id="exampleInputEmail1" value="{{$howWork?$howWork->how_payment_work_four_en:''}}"
                       aria-describedby="emailHelp" >
            </div>
            <div class="mb-3 col-sm-6">
                <label for="exampleInputEmail1" class="form-label">Payment process Four Arabic</label>
                <input dir="rtl" type="text" class="form-control" name="how_payment_work_four_ar" id="exampleInputEmail1"
                       value="{{$howWork?$howWork->how_payment_work_four_ar:''}}" aria-describedby="emailHelp" >
            </div>
        </div>
        <div class="card-body bg-white m-2">
            <div class="row">
                <div class="col-sm-12"><h5 class="text-bold p-1 text-center bg-light">FAQ</h5></div>

                <div class="mb-3 col-sm-6">
                    <label for="exampleInputEmail1" class="form-label">FAQ short description english</label>
                    <textarea  name="faq_short_description_en" class="form-control" id="" cols="1" rows="1"
                    >{{$howWork?$howWork->faq_short_description_en:''}}</textarea>
                </div>
                <div class="mb-3 col-sm-6">
                    <label for="exampleInputEmail1" class="form-label">FAQ short description arabic</label>
                    <textarea dir="rtl" name="faq_short_description_ar" class="form-control" id="" cols="1" rows="1"
                    >{{$howWork?$howWork->faq_short_description_ar:''}}</textarea>
                </div>
            </div>
        </div>

    </div>

    <div class="d-flex justify-content-end">
        <button class="btn btn-info mt-3 mb-3 float-end" onclick="bankInfoShow()">Save</button>
    </div>
    </form>


@endsection

