</div>
<?php
    $blocks = DB::table('blocks')->get();
?>
<div class="container-fluid form-group">
  <div class="row">
    <div class="col-md">
      <ul class="sortable">
        @foreach($blocks as $block)
            <li class="ui-state-default" id="{{ $block->id }}">{{ $block->name }}</li>
        @endforeach
      </ul>
    </div>
    <div class="col-md">
      <ul class="sortable sortable-page">

      </ul>
    </div>
  </div>
</div>
{{-- <input type="text" name="block" value=""> --}}
<style>
    ul.sortable{
        min-height: 400px;
        background: #eee;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    ul.sortable li{
        padding: 10px;
    }

    ul.sortable .ui-state-highlight{
        padding: 10px;
        height: 50px;
        opacity: 0.2;
    }
</style>
<script type="text/javascript">
    $(document).ready(function(){
        $("ul.sortable").sortable({
          connectWith: "ul.sortable",
          placeholder: "ui-state-highlight",
          update: function(event, ui){
            // var data = $('.sortable-page').sortable('toArray', {attribute: 'value'});
            // $('input[name=blocks]').val(data);
            // console.warn($('input[name=blocks]').val());
            console.warn($('.sortable-page').sortable('serialize', { key: "block", attribute: "id" }));
          }
        });
        
        $(".sortable").disableSelection();
    });
</script>
<div class="col-lg-8 col-xl-5">