<div class="col-sm-6">
    <input type="hidden" name="id" value="{{$info->id}}">
    <label for="exampleFormControlInput1" class="form-label">Degree</label>
    <input type="text" name="degree" class="form-control" value="{{$info->graduation_name}}" id="exampleFormControlInput1" placeholder="">
</div>
<div class="col-sm-6">
    <label for="exampleFormControlInput1" class="form-label">Pass Date</label>
    <input type="date" name="pass_date" class="form-control" value="{{$info->pass_date}}" id="exampleFormControlInput1" placeholder="">
</div>
<div class="col-sm-12">
    <label for="exampleFormControlInput1" class="form-label">Institution Name</label>
    <input type="text" name="institution" class="form-control" value="{{$info->institution_name}}" id="exampleFormControlInput1" placeholder="">
</div>
<div class="col-sm-12">
    <label for="exampleFormControlTextarea1"  class="form-label">Description</label>
    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"> {{$info->details}}</textarea>
</div>
