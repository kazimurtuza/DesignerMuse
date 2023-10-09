@foreach($slotList as $slot)
    <div class="col-sm-2">
        <div class="form-check">
            <input class="form-check-input" name="selected_slot[]" type="checkbox" value="{{$slot->id}}" id="flexCheckDefault{{$slot->id}}">
            <label class="form-check-label" for="flexCheckDefault{{$slot->id}}">
                <span>{{$slot->start_time}}</span>-<span>{{$slot->end_time}}</span>
            </label>
        </div>
    </div>
@endforeach
