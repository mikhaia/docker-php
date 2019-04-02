@extends('admin.layout')

@section('content')
    <div class="content">
        <div class="block">
            <div class="block-header">
                <h3 class="block-title">{{ $module }} <small>List</small></h3>
            </div>
            <div class="block-content block-content-full">
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                    <thead>
                        <tr>
                            @foreach($config['list'] as $th => $vals)
                                <th>{{ $th }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($items as $item)
                            <tr>
                                @foreach($config['list'] as $td => $input)
                                <td>
                                    @if(!isset($input['type']))
                                        @include('admin.list.text')
                                    @else
                                        @include('admin.list.'.$input['type'])
                                    @endif
                                </td>
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection