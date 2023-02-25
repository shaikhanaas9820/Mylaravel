<div class="form-group">
    <label for=""> {{$label}} </label>
    <input type="{{$type}}" name="{{$name}}" id="" class="form-control" >
    <span class="text-danger">
        {{-- @error('name')
            {{$message}}
        @enderror --}}
    </span>
    {{-- <small id="helpId" class="text-muted">Help text</small> --}}
</div>