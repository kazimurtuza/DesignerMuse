<div class="col-sm-6">
    <input type="hidden" name="id" value="{{$info->id}}" class="form-control" id="exampleFormControlInput1" placeholder="">
    <label for="exampleFormControlInput1" class="form-label">Job Title</label>
    <input type="text" name="job_title" value="{{$info->title}}" class="form-control" id="exampleFormControlInput1" placeholder="">
</div>
<div class="col-sm-6">
    <label for="exampleFormControlInput1" class="form-label">Company Name</label>
    <input type="text" name="company_name" value="{{$info->company_name}}" class="form-control" id="exampleFormControlInput1" placeholder="">
</div>
<div class="col-sm-6">
    <label for="exampleFormControlInput1" class="form-label">Start Date</label>
    <input type="date" name="start_date" class="form-control" value="{{$info->start_date}}" id="exampleFormControlInput1" placeholder="">
</div>
<div class="col-sm-6">
    <label for="exampleFormControlInput1" class="form-label">End Date</label>
    <input type="date" name="end_date" class="form-control" value="{{$info->end_date}}" id="exampleFormControlInput1" placeholder="">
</div>
<div class="col-sm-12">
    <label for="exampleFormControlTextarea1"  class="form-label">Job Responsibility</label>
    <textarea class="form-control" name="responsibility" id="exampleFormControlTextarea1" rows="3">{{$info->responsibility}}</textarea>
</div>
