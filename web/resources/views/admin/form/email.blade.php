<div class="form-group">
    <label for="email-input-{{ $name }}">{{ $name }}</label>
    <input type="email"
        name="{{ $name }}" 
        value="{{ $item->$name}}"
        id="email-input-{{ $name }}"
        class="form-control"
        placeholder="{{ $name }}" >
</div>