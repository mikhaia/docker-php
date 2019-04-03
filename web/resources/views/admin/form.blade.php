@extends('admin.layout')

@section('content')
    <div class="content">
        <div class="block">
            <div class="block-header">
                <h3 class="block-title">{{ $module }} <small>Form</small></h3>
            </div>
            <div class="block-content block-content-full">
                <form action="be_forms_elements.html" method="POST" enctype="multipart/form-data" onsubmit="return false;">
                    <div class="row push">
                        <div class="col-lg-8 col-xl-5">
                            @foreach($config['form'] as $name => $input)
                                @include('admin.form.'.$input['type'])
                            @endforeach
                        </div>
                    </div>
                    {{-- 
                    <div class="row push">
                        <div class="col-lg-4">
                            <p class="font-size-sm text-muted">
                                Browser’s default select boxes, showcasing both simple and multiple selections
                            </p>
                        </div>
                        <div class="col-lg-8 col-xl-5">
                            <div class="form-group">
                                <label for="example-select">Select</label>
                                <select class="form-control" id="example-select" name="example-select">
                                    <option value="0">Please select</option>
                                    <option value="1">Option #1</option>
                                    <option value="2">Option #2</option>
                                    <option value="3">Option #3</option>
                                    <option value="4">Option #4</option>
                                    <option value="5">Option #5</option>
                                    <option value="6">Option #6</option>
                                    <option value="7">Option #7</option>
                                    <option value="8">Option #8</option>
                                    <option value="9">Option #9</option>
                                    <option value="10">Option #10</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="example-select-multiple">Multiple Select</label>
                                <select class="form-control" id="example-select-multiple" name="example-select-multiple" size="5" multiple>
                                    <option value="1">Option #1</option>
                                    <option value="2">Option #2</option>
                                    <option value="3">Option #3</option>
                                    <option value="4">Option #4</option>
                                    <option value="5">Option #5</option>
                                    <option value="6">Option #6</option>
                                    <option value="7">Option #7</option>
                                    <option value="8">Option #8</option>
                                    <option value="9">Option #9</option>
                                    <option value="10">Option #10</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row push">
                        <div class="col-lg-4">
                            <p class="font-size-sm text-muted">
                                Browser’s default checkboxes and radios in various layouts
                            </p>
                        </div>
                        <div class="col-lg-8 col-xl-5">
                            <div class="form-group">
                                <label>Checkboxes</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="example-checkbox-default1" name="example-checkbox-default1">
                                    <label class="form-check-label" for="example-checkbox-default1">Option 1</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="example-checkbox-default2" name="example-checkbox-default2">
                                    <label class="form-check-label" for="example-checkbox-default2">Option 2</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="example-checkbox-default3" name="example-checkbox-default3" disabled>
                                    <label class="form-check-label" for="example-checkbox-default3">Option 3</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="d-block">Inline Checkboxes</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="" id="example-checkbox-inline1" name="example-checkbox-inline1">
                                    <label class="form-check-label" for="example-checkbox-inline1">Option 1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="" id="example-checkbox-inline2" name="example-checkbox-inline2">
                                    <label class="form-check-label" for="example-checkbox-inline2">Option 2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="" id="example-checkbox-inline3" name="example-checkbox-inline3" disabled>
                                    <label class="form-check-label" for="example-checkbox-inline3">Option 3</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Radios</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="example-radios-default1" name="example-radios-default" value="option1" checked>
                                    <label class="form-check-label" for="example-radios-default1">Option 1</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="example-radios-default2" name="example-radios-default" value="option2">
                                    <label class="form-check-label" for="example-radios-default2">Option 2</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="example-radios-default3" name="example-radios-default" value="option2" disabled>
                                    <label class="form-check-label" for="example-radios-default3">Option 3</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="d-block">Inline Radios</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="example-radios-inline1" name="example-radios-inline" value="option1" checked>
                                    <label class="form-check-label" for="example-radios-inline1">Option 1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="example-radios-inline2" name="example-radios-inline" value="option2">
                                    <label class="form-check-label" for="example-radios-inline2">Option 2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="example-radios-inline3" name="example-radios-inline" value="option2" disabled>
                                    <label class="form-check-label" for="example-radios-inline3">Option 3</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row push">
                        <div class="col-lg-4">
                            <p class="font-size-sm text-muted">
                                Browser’s default file inputs, showcasing both single and multiple files
                            </p>
                        </div>
                        <div class="col-lg-8 col-xl-5 overflow-hidden">
                            <div class="form-group">
                                <label class="d-block" for="example-file-input">File Input</label>
                                <input type="file" id="example-file-input" name="example-file-input">
                            </div>
                            <div class="form-group">
                                <label class="d-block" for="example-file-input-multiple">File Input (Multiple)</label>
                                <input type="file" id="example-file-input-multiple" name="example-file-input-multiple" multiple>
                            </div>
                        </div>
                    </div>
                    --}}
                </form>
            </div>
        </div>
    </div>
@endsection