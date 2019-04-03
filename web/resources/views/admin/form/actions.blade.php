<div class="form-group">
@foreach($input['btns'] as $btn)
    @if ($btn == 'save')
        <button type="submit" class="btn btn-primary">Save</button>
    @endif
    @if ($btn == 'back')
        <a href="{{ route('admin.'.$module.'.index') }}" class="btn btn-default">Back</a>
    @endif
@endforeach
</div>