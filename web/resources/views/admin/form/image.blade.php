<div class="form-group">
{{--     <label for="file-input-{{ $name }}">{{ $name }}</label>
    <input type="file"
        name="{{ $name }}" 
        value="{{ @$item->$name}}"
        id="file-input-{{ $name }}"
        class="form-control"
        placeholder="{{ $name }}" > --}}
    <div class="custom-file">
        <input type="file"
        	class="custom-file-input"
        	data-toggle="custom-file-input"
        	id="file-input-{{ $name }}"
        	name="{{ $name }}">
        <label class="custom-file-label" for="file-input-{{ $name }}">Choose file</label>
    </div>
</div>
