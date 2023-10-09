
    <div class="row d-flex justify-content-center">

        <div class="col-sm-6">
            <input type="hidden" name="project_id" value="{{$info->id}}">
            <div class="d-flex justify-content-center" data-img="img">
                <label for="profileImg911" class="form-label addimgbtn"> <h1><i class="fa-solid fa-plus"></i></h1> </label>
                <input type="file"  idinfo="911"  onchange="editprojectimg()"  style="display: none" class="form-control profileImg"  id="profileImg911" aria-describedby="emailHelp">
                <input type="hidden" id="imginput911" name="project_img">
                <div class="img-section editimgdiv" id="img911">

                    @if($info)
                        @if($info->img)
                            <img class="upload_img_style" src="{{asset($info->img)}}" alt="project img" />
                        @endif

                    @endif

                </div>
            </div>
            <h5 class="text-center mt-2">PROJECT IMAGE</h5>

        </div>
    </div>

    <div class="col-sm-12">
        <label for="edittitle" class="form-label">Title</label>
        <input type="text" name="title" class="form-control" value="{{$info->title}}" id="edittitle" placeholder="">
    </div>
    <div class="col-sm-12">
        <label for="editdetails"  class="form-label">Details</label>
        <textarea class="form-control" name="details" id="editdetails" rows="3">{{$info->description}}</textarea>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
    </div>

