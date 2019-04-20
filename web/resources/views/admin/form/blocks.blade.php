</div>
<?php
    $blocks = DB::table('blocks')->get();
    $block_in_page = explode(',', $item->blocks);
?>
<div class="container-fluid form-group">
  <div class="row">
    <div class="col-md">
      <ul class="sortable">
        @foreach($blocks as $block)
          @if(!in_array($block->id, $block_in_page))
            <li class="ui-state-default" value="{{ $block->id }}">
              {{ $block->name }}
              <a class="edit-link" data-id="{{ $block->id }}" data-name="{{ $block->view }}"><i class="fa fa-wrench"></i></a>
            </li>
          @endif
        @endforeach
      </ul>
    </div>
    <div class="col-md">
      <ul class="sortable sortable-page">
        @foreach($blocks as $block)
          @if(in_array($block->id, $block_in_page))
            <li class="ui-state-default" value="{{ $block->id }}">
              {{ $block->name }}
              <a class="edit-link" data-id="{{ $block->id }}" data-name="{{ $block->view }}"><i class="fa fa-wrench"></i></a>
            </li>
          @endif
        @endforeach
      </ul>
    </div>
  </div>
</div>

<div class="container-fluid form-group">
  <div class="row">
    <div class="col-md">
      <div id="edit-values">
        @foreach($blocks as $block)
          <?php
            $item_values = json_decode($item->values, true);
            $values = isset($item_values[$block->view]) ? $item_values[$block->view] : [];
          ?>
          <div class="edit-values" data-id="{{ $block->id }}" data-name="{{ $block->view }}">
          @include('admin.form.block-form', [
            'name' => 'values['.$block->view.']',
            'item' => (object)[
              'view' => $block->view,
              'values' => json_encode($values)
              ]
            ])
          </div>
        @endforeach
      </div>
    </div>
  </div>
</div>

<input type="hidden" value="" name="blocks" id="blocks-input">
{{-- <input type="hidden" value="" name="values" id="values-input"> --}}

<style>
    ul.sortable {
        min-height: 400px;
        background: #eee;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    ul.sortable li {
        padding: 10px;
    }

    ul.sortable .ui-state-highlight {
        padding: 10px;
        height: 50px;
        opacity: 0.2;
    }

    ul.sortable li .edit-link {
      float: right;
      cursor: pointer;
    }
    .edit-values {
      display: none;
    }
</style>
<script type="text/javascript">
    $(document).ready(function(){
        $('ul.sortable').sortable({
          connectWith: 'ul.sortable',
          placeholder: 'ui-state-highlight',
          update: function(event, ui){
            if($(this).hasClass('sortable-page'))
            {
              var blocks = $('.sortable-page').sortable('toArray', {attribute: 'value'});
              $('#blocks-input').val(blocks.join(','));
            }
          },
          create: function(event, ui){
            if($(this).hasClass('sortable-page'))
            {
              var blocks = $('.sortable-page').sortable('toArray', {attribute: 'value'});
              $('#blocks-input').val(blocks.join(','));
            }
          }
        });
        
        $('.sortable').disableSelection();

        $('a.edit-link').click(function(){
          var id = $(this).data('id'),
              name = $(this).data('name');
          $('#edit-values .edit-values').not('[data-id="'+id+'"][data-name="'+name+'"]').hide();
          $('#edit-values .edit-values[data-id="'+id+'"][data-name="'+name+'"]').fadeToggle();
        });
    });
</script>
<div class="col-lg-8 col-xl-8">