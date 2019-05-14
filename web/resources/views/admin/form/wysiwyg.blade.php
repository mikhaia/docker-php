</div>

<div class="col-12">
    <div class="form-group">
        <label for="text-input-{{ $name }}">{{ ucwords($name) }}</label>
        <textarea name="{{ $name }}" id="wysiwyg-{{ $name }}" class="js-summernote">{{ @$item->$name }}</textarea>
    </div>
</div>

{{ Html::style('admin_assets/assets/js/plugins/summernote/summernote-bs4.css') }}
{{ Html::style('admin_assets/assets/js/plugins/simplemde/simplemde.min.css') }}

{{ Html::script('admin_assets/assets/js/plugins/summernote/summernote-bs4.min.js') }}
{{ Html::script('admin_assets/assets/js/plugins/ckeditor/ckeditor.js') }}
{{ Html::script('admin_assets/assets/js/plugins/simplemde/simplemde.min.js') }}
<script>jQuery(function(){ One.helpers(['summernote', 'ckeditor', 'simplemde']); });</script>

<div class="col-lg-8 col-xl-8">