<div class="form-group">
    <label for="select-{{ $name }}">{{ $name }}</label>
    <select class="form-control" id="select-{{ $name }}" name="{{ $name }}">\
        @foreach($input['values'] as $value => $text)
            <option value="{{ $value }}" {{ ($value == $item->$name ? 'selected' : '') }}>{{ $text }}</option>
        @endforeach
    </select>
</div>