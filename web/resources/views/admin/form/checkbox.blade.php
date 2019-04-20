<div class="form-group">
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="1" id="checkbox-{{ $name }}" name="{{ $name }}" @if($item->$name) checked @endif>
        <label class="form-check-label" for="checkbox-{{ $name }}">{{ $name }}</label>
    </div>
</div>