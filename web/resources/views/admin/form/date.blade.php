<div class="form-group">
    <label for="text-input-{{ $name }}">{{ $name }}</label>
    <input type="text"
        name="{{ $name }}" 
        value="{{ @substr($item->$name, 0, 10) }}"
        id="text-input-{{ $name }}"
        class="js-datepicker form-control"
        data-week-start="1"
        data-autoclose="true"
        data-today-highlight="true"
        data-date-format="yyyy-mm-dd"
        placeholder="{{ $name }}" >
</div>
