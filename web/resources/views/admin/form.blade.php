@extends('admin.layout')

@section('content')
    <div class="content">
        <div class="block">
            <div class="block-header">
                <h3 class="block-title">{{ $module }} <small>Form</small></h3>
            </div>
            <div class="block-content block-content-full">
                {{ Form::open(['url' => $id ? route('admin.'.$module.'.update', $id) : route('admin.'.$module.'.store'), 'enctype' => 'multipart/form-data']) }}
                    @if($id)
                        {{ method_field('PUT') }}
                    @endif
                    <div class="row push">
                        <div class="col-lg-8 col-xl-8">
                            @foreach($config['form'] as $name => $input)
                                @include('admin.form.'.$input['type'])
                            @endforeach
                        </div>
                    </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
@endsection