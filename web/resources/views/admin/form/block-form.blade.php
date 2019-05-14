<?php
    /* Expectation:
    *   $item->values   | json      | values 
    *   $item->view     | string    | block name 
    *   $name           | string    | name field 
    */
?>
<div class="d-sm-none" id="block-content-{{ $item->view }}">
    <?php
        ob_start();
        include('../resources/views/blocks/'.$item->view.'.blade.php');
        ob_end_clean();
        $values = [];
        foreach ((array)json_decode($item->values) as $key => $val)
            $values[$name.'['.$key.']'] = $val;
    ?>
</div>
<script>$('#block-content-{{ $item->view }}').remove()</script>
@if(isset($fields))
    <div class="form-group">
        <div class="block block-themed block-bordered">
            <div class="block-header bg-city">
                <h3 class="block-title">Block Field Values</h3>
            </div>
            <div class="block-content">
                @foreach($fields as $block_name => $input)
                    <?php
                        $block_name = "${name}[${block_name}]";
                    ?>
                    @include('admin.form.'.$input['type'], ['item' => (object)$values, 'name' => $block_name])
                @endforeach
                <p></p>
            </div>
        </div>
    </div>
@endif