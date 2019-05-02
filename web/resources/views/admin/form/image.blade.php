<div class="form-group">
    <label for="text-input-{{ $name }}">{{ $name }}</label>
    <input type="text"
        name="{{ $name }}" 
        value="{{ @$item->$name}}"
        id="text-input-{{ $name }}"
        class="form-control"
        placeholder="{{ $name }}" >
</div>
