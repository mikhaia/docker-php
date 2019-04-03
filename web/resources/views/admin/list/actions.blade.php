<div class="text-right">
    @foreach($input['btns'] as $btn)
        @if ($btn == 'edit')
            <a class="btn btn-warning" href="{{ route('admin.users.edit', $item->id) }}"><i class="fa fa-pen"></i></a>
        @endif
        @if ($btn == 'delete')
            <a class="btn btn-danger" href=""><i class="fa fa-trash"></i></a>
        @endif
    @endforeach
</div>