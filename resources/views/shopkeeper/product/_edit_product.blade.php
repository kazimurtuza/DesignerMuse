@extends('shopkeeper.layout.layout')
@section('css')
    <style>
        img {
            display: block;
            max-width: 100%;
        }

        .preview {
            overflow: hidden;
            width: 160px;
            height: 160px;
            margin: 10px;
            border: 1px solid red;
        }
    </style>
@endsection

@section('main_content')
    <div class="page-content">
        <div class="card">
            <input type="hidden" id="selectimgdiv">
            <div class="card-body p-4">
                <div class="form-body mt-4">
                    <form action="{{route('shop.product.update')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="border border-3 p-4 rounded">
                                    <div class="row">
                                        <input type="hidden" name="product_id" value="{{$productInfo->id}}">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="inputProductTitle" class="form-label">Product Name<strong
                                                        class="text-danger">*</strong> </label>
                                                <input type="text" class="form-control" name="name"
                                                       id="inputProductTitle"
                                                       placeholder="Enter product Name" value="{{$productInfo->name}}"
                                                       required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Category <strong class="text-danger">*</strong></label>

                                                <select class="js-example-basic-single w-100" name="category">
                                                    <option selected="selected">Choose Category</option>
                                                    --}}
                                                    @foreach($category as $categoryList)
                                                        <option
                                                            value="{{$categoryList->id}}" {{$productInfo->category_id==$categoryList->id?'selected':''}}>{{$categoryList->name}}</option>
                                                    @endforeach
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Color variant
                                                    <input type="checkbox" name="is_variant" value="1"
                                                           class="form-check-input ml-2 mt-2 "
                                                           id="is_variant" onclick="isVariant(this)"> </label> &nbsp;
                                                <strong
                                                    class="text-danger">*</strong>
                                                <div id="colorset">
                                                    <div id="color_varient" style="display: none">
                                                        <select class="js-example-basic-single w-100"
                                                                style="width: 100%" name="color[]"
                                                                onchange="newcolorItem(this)">
                                                            <option selected="selected">Choose Color</option>
                                                            @foreach($color as $colorlist2)
                                                                <option value="{{$colorlist2->id}}"
                                                                        colorname="{{$colorlist2->name}}"
                                                                        colorcode="{{$colorlist2->color_code}}">{{$colorlist2->name}}</option>
                                                            @endforeach
                                                        </select>


                                                        <div id="color_item">
                                                            @if($productInfo->is_variant==1)
                                                                @foreach($productInfo->colorVariant as $colorData)
                                                                    <div
                                                                        class="input-group mb-3 mt-2 position-relative">
                                                                        <input type="text" name="variant_id[]"
                                                                               style="display: none"
                                                                               value="{{$colorData->id}}">
                                                                        <div class="input-group-prepend"
                                                                             style="width: 50%">
                                                                        <span class="input-group-text w-100"
                                                                              id="basic-addon3"
                                                                              style="background:{{$colorData->colorCode->color_code}};color:white">
                                                                           {{$colorData->colorCode->name}}
                                                                        </span>
                                                                        </div>
                                                                        <input type="text" class="form-control"
                                                                               name="variant_price[]"
                                                                               id="basic-url"
                                                                               aria-describedby="basic-addon3"
                                                                               placeholder="Price"
                                                                               value="{{$colorData->price}}" required>
                                                                        <span
                                                                            class="add-btn position-absolute delete-postionset"
                                                                            onclick="deleteitem(this)">&#x2715</span>
                                                                    </div>
                                                                @endforeach
                                                            @endif

                                                        </div>
                                                    </div>

                                                    <div id="no_variant">
                                                        <div class="form-group">
                                                            <div class="select2-purple">

                                                                <select class="js-example-basic-multiple w-100"
                                                                        name="color_no_variant[]" value="[1]"
                                                                        multiple="multiple"
                                                                        placeholder="color">
                                                                    @foreach($color as $colorlist)
                                                                        <option
                                                                            value="{{$colorlist->id}}">{{$colorlist->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>


                                            </div>
                                        </div>

                                    </div>

                                    <div class="mb-3">
                                        <label for="inputProductDescription" class="form-label">Description</label>
                                        <textarea class="form-control" name="description" id="summernote"
                                                  rows="3">{!! $productInfo->description !!}</textarea>

                                    </div>
                                    <div class="mb-3">
                                        <label for="inputProductDescription" class="form-label">Measurements</label>
                                        <textarea class="form-control" name="measurement" id="summernote2"
                                                  rows="3">{!! $productInfo->measurement !!}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputProductDescription" class="form-label">Product Photo</label>

                                        <div class="row" >
                                            @foreach($productInfo->productImage as $img)
                                                <div class="col-sm-3 mb-2" style="position:relative" id="p{{$img->id}}">
                                                    <span style="cursor: pointer"><i class="fa-regular fa-circle-xmark"
                                                                                     onclick="deleteImg({{$img->id}})"></i></span>
                                                    &nbsp; &nbsp;

                                                    <div
                                                        class="imgaddcard d-flex justify-content-center align-items-center"
                                                        style="overflow: hidden">
                                                        <img src="{{asset($img->image)}}" alt="" width="100%">
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="mb-3">
                                            <label for="inputProductDescription" class="form-label">Add New Product</label>
                                            <input style="display:none" type="file" name="image" class="image">
                                            <div class="row" id="productImglist">
                                                <div class="col-sm-3 mb-2" style="position:relative" id="222"
                                                     onclick="selectImage('222')">
                                                    <span class="text-center mainphototxt">Main Photo</span>
                                                    <input type="hidden" name="product_img[]" class="222input">
                                                    <div
                                                        class="imgaddcard d-flex justify-content-center align-items-center 222view ">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70"
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                             class="feather feather-camera text-primary imgsvg">
                                                            <path
                                                                d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path>
                                                            <circle cx="12" cy="13" r="4"></circle>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal fade modalimage" id="modal" tabindex="-1" role="dialog"
                                                 aria-labelledby="modalLabel" aria-hidden="true">
                                                <style>
                                                    .cropper-container.cropper-bg{
                                                        width: 100%!important;
                                                        height: 77vh!important;
                                                    }
                                                </style>
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="modalLabel">Crop image</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="img-container">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <!--  default image where we will set the src via jquery-->
                                                                        <img id="image">
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="preview"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Cancel
                                                            </button>
                                                            <button type="button" class="btn btn-primary" id="crop">Crop
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal fade modalimage" id="modal" tabindex="-1" role="dialog"
                                             aria-labelledby="modalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="modalLabel">Crop image</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                            <span aria-hidden="true">�</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="img-container">
                                                            <div class="row">
                                                                <div class="col-md-8">
                                                                    <!--  default image where we will set the src via jquery-->
                                                                    <img id="image">
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="preview"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Cancel
                                                        </button>
                                                        <button type="button" class="btn btn-primary" id="crop">Crop
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="border border-3 p-4 rounded">
                                    <div class="row g-3">
{{--                                        <div class="col-md-6">--}}
{{--                                            <label for="inputCostPerPrice" class="form-label">Purchase Cost</label>--}}
{{--                                            <input type="number" name="current_purchase_cost"--}}
{{--                                                   value="{{$productInfo->cost}}"--}}
{{--                                                   class="form-control" id="inputCostPerPrice" placeholder="00.00">--}}
{{--                                        </div>--}}
                                        <div class="col-md-6" id="sellprice">
                                            <label for="inputPrice" class="form-label">Sell Price <strong
                                                    class="text-danger">*</strong> </label>
                                            <input type="number" name="current_sale_price"
                                                   value="{{$productInfo->price}}" class="form-control"
                                                   id="inputPrice" placeholder="00.00" required>
                                        </div>

                                        <div class="col-md-6  mb-3">
                                            <label for="inputStarPoints" class="form-label">Discount Type </label>
                                            <select name="discount_type" class="form-control" id=""
                                                    onchange="discountType(this)">
                                                <option value="0" {{$productInfo->discount_type==0?'selected':''}}>
                                                    Fixed
                                                </option>
                                                <option value="1" {{$productInfo->discount_type==1?'selected':''}}>
                                                    Percentage (%)
                                                </option>
                                            </select>
                                        </div>
                                        <div class="col-md-6  mb-3" id="discount">
                                            <label for="inputStarPoints" class="form-label">Discount Amount</label>
                                            <input type="number" name="discount" class="form-control"
                                                   placeholder="Amount" value="{{$productInfo->discount}}">
                                        </div>
                                        <div class="col-md-6  mb-3" id="discount">
                                            <label for="inputStarPoints" class="form-label">Shipping Cost</label>
                                            <input type="number" name="shipping_cost" class="form-control"
                                                   placeholder="Amount" value="{{$productInfo->shipping_cost}}">
                                        </div>

                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-primary">Save Product</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end row-->
                    </form>
                </div>
            </div>
        </div>


    </div>

@endsection

@section('css_plugins')
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('assets/adminPanel')}}/plugins/summernote/summernote-bs4.min.css">
    {{--    select2--}}
    <link rel="stylesheet" href="{{asset('assets/adminPanel')}}/plugins/select2/css/select2.min.css">
    <link rel="stylesheet"
          href="{{asset('assets/adminPanel')}}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    {{--    select2--}}
    {{--    crop--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css"/>
    {{--    crop--}}
@endsection
@section('js_plugins')
    <!-- Summernote -->
    <script src="{{asset('assets/adminPanel')}}/plugins/summernote/summernote-bs4.min.js"></script>
    {{--select 2--}}
    {{--    <script src="{{asset('assets/adminPanel')}}/plugins/select2/js/select2.full.min.js"></script>--}}

    {{--    link--}}
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    {{--select 2--}}
    {{--    crop--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>
    {{--    crop--}}
@endsection
@section('js')

    <script>
        $('.select2').select2({
            theme: "bootstrap-5",
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
        });

        function getSubcategory(data) {
            var category_id = $(data).val();
            // alert(category_id)

            {{--var url_link = "{{route('subcategory.list.get')}}"--}}
            var url_link = ""
            $.ajax({
                url: url_link,
                type: "get",
                data: {
                    category_id: category_id,
                },
                success: function (response) {
                    $('#subcategory_id').html(response)
                },
                error: function (xhr) {
                    //Do Something to handle error
                }
            });
        }

    </script>

    <script>

        var bs_modal = $('#modal');
        var image = document.getElementById('image');
        var cropper, reader, file;


        $("body").on("change", ".image", function (e) {
            var files = e.target.files;
            var done = function (url) {
                image.src = url;
                bs_modal.modal('show');
            };

            if (files && files.length > 0) {
                file = files[0];

                if (URL) {
                    done(URL.createObjectURL(file));
                } else if (FileReader) {
                    reader = new FileReader();
                    reader.onload = function (e) {
                        done(reader.result);
                    };
                    reader.readAsDataURL(file);
                }
            }
        });
        bs_modal.on('shown.bs.modal', function () {
            cropper = new Cropper(image, {
                aspectRatio: 0,
                viewMode: 0,
                preview: '.preview'
            });
        }).on('hidden.bs.modal', function () {
            cropper.destroy();
            cropper = null;
        });

        $("#crop").click(function () {
            canvas = cropper.getCroppedCanvas({
                width: 0,
                height: 0,
            });

            canvas.toBlob(function (blob) {
                var reader = new FileReader();
                reader.readAsDataURL(blob);
                reader.onloadend = function () {
                    var base64data = reader.result;

                    let inputvaluocation = $('#selectimgdiv').val() + 'input';
                    let viewlocation = $('#selectimgdiv').val() + 'view';
                    var uniqnumber = new Date().valueOf();

                    $('.' + inputvaluocation).val(base64data)
                    $('.' + viewlocation).html(`  <img class="imgaddborder" src="${base64data}" height="100%" width="100%" alt="">`);
                    $('#productImglist').append(`
                      <div class="col-sm-3 mb-2" style="position:relative" id="${uniqnumber}" >
                       <div class="remocespen" onclick="removeImage(${uniqnumber})" ><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"  stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle imgsvg removebtn"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></div>
                       <div onclick="selectImage(${uniqnumber})">
                       <input type="hidden" name="product_img[]" class="${uniqnumber}input">
                           <div class="imgaddcard d-flex justify-content-center align-items-center ${uniqnumber}view " >
                               <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color:#171e243d" class="feather feather-camera imgsvg"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
                           </div>
                        </div>
                        </div>
                    `)
                    $(".modalimage").modal('hide');


                };
            });
        });


        function selectImage(data) {
            $('#selectimgdiv').val(data);
            $('.image').click();
        }

        function removeImage(id) {

            $('#' + id).html(`<div class="remocespen" onclick="removeImage(${id})" ><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"  stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle imgsvg removebtn"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></div>
                       <div onclick="selectImage(${id})">
                       <input type="hidden" name="product_img[]" class="${id}input">
                           <div class="imgaddcard d-flex justify-content-center align-items-center ${id}view " >
                               <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color:#171e243d" class="feather feather-camera imgsvg"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
                           </div>
                        </div>`);
            $('#'+id).remove()
        }

        function discountType(data) {

            if ($(data).val() == 0) {
                $('#discount').html(`<label for="inputStarPoints" class="form-label">Discount Amount</label><input type="number" name="discount" class="form-control" placeholder="Amount">`)
            }
            if ($(data).val() == 1) {
                $('#discount').html(`  <label for="inputStarPoints" class="form-label">Discount (%)</label>
                                            <input type="number" name="discount" class="form-control" placeholder="Percentage (%)" required>`)
            }
        }

        function addnewcolor() {
            // alert('sdfs')
            const color =`<span><input type="color" name="product_color[]" class="form-control form-control-color" id="exampleColorInput" value="#563d7c" title="Choose your color"></span>`;
            $('#color').append(color)
        }

        function newcolorItem(info) {
            let colorName = $('option:selected', info).attr('colorname');
            let colorcoode = $('option:selected', info).attr('colorcode');

            let item = `<div class="input-group mb-3 mt-2 position-relative">
                            <input type="text" name="color_id[]" style="display: none" value="${$(info).val()}">
                             <div class="input-group-prepend" style="width: 50%">
                             <span class="input-group-text w-100" id="basic-addon3" style="background: ${colorcoode};color:white">
                                ${colorName}
                             </span>
                             </div>
                             <input type="text" class="form-control" name="price[]" id="basic-url" aria-describedby="basic-addon3" placeholder="Price" required>
                             <span class="add-btn position-absolute delete-postionset" onclick="deleteitem(this)">&#x2715</span>
                         </div>  `

            $('#color_item').append(item);
        }

        function deleteitem(data) {
            $(data).parent().remove();
        }

        // function isVariant(data) {
        //     $data = $(data).is(':checked');
        //
        //     if ($data) {
        //         $('#color_varient').show(500)
        //         $('#no_variant').hide(500)
        //
        //     } else {
        //         $('#color_varient').hide(500)
        //         $('#no_variant').show(500)
        //     }
        //
        // }


        function isVariant(data) {
            $data = $(data).is(':checked');

            if ($data) {
                $('#color_varient').show(500)
                $('#no_variant').hide(500)
                $('#sellprice').hide(500);

                $('#sellprice').hide(500);

                $('#colorList').attr("required", false);
                $('#inputPrice').attr("required", false);
                $('#colorvariant').attr("required", true);
                $('#inputPrice').val(0);

            } else {
                $('#colorvariant').attr("required", false);
                $('#color_varient').hide(500)
                $('#no_variant').show(500)
                $('#sellprice').show(500);
                $('#colorList').attr("required", true);
                $('#inputPrice').attr("required", true);
                $('#inputPrice').val({{$productInfo->price}});
            }

        }


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

        $(document).ready(function () {
            $('.js-example-basic-multiple').select2();
        });

        $(document).ready(function () {
            $('.js-example-basic-single').select2();
        });

        function deleteImg(id) {
            $.ajax({
                url: "{{route('delete.product.image')}}",
                type: "get",
                data: {
                    id: id,
                },
                success: function (response) {
                    $('#p' + id).remove();
                },
                error: function (xhr) {
                    //Do Something to handle error
                }
            });
        }


            @if($productInfo->is_variant==1)
            $('#is_variant').prop("checked", true);
            $('#color_varient').show(500);
            $('#no_variant').hide(500);
            @endif

            @if($productInfo->is_variant==1){
            $('#color_varient').show(500)
            $('#no_variant').hide(500)
            $('#sellprice').hide(500);

            $('#sellprice').hide(500);

            $('#colorList').attr("required", false);
            $('#inputPrice').attr("required", false);
            $('#colorvariant').attr("required", true);
            $('#inputPrice').val(0);

            }
            @else{
            $('#colorvariant').attr("required", false);
            $('#color_varient').hide(500)
            $('#no_variant').show(500)
            $('#sellprice').show(500);
            $('#colorList').attr("required", true);
            $('#inputPrice').attr("required", true);
            $('#inputPrice').val({{$productInfo->price}});

           }
            @endif


    </script>
@endsection
