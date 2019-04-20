@extends('layouts.main')

@section('blocks')
    @foreach($block_ids as $block_id)
        @if(isset($blocks[$block_id]))
            <?php $value = $values[$blocks[$block_id]->view]; ?>
            @include('blocks.'.$blocks[$block_id]->view)
        @endif
    @endforeach
@endsection