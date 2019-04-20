<div class="form-group">
    <label for="textarea-input-{{ $name }}">{{ $name }}</label>
    <textarea
        name="{{ $name }}" 
        id="textarea-input-{{ $name }}"
        rows="4"
        class="form-control"
        placeholder="{{ $name }}" >{{ @$item->$name}}</textarea>
</div>