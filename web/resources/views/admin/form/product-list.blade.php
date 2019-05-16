<div class="form-group">
    <label>{{ $name }}</label>
    <table class="table table-bordered">
        <tr>
            <td>Product</td>
            <td>Price</td>
            <td>Quantity</td>
        </tr>
    @foreach(@json_decode($item->$name) as $product_id => $quantity)
        <?php
            $product = DB::table('products')->find($product_id);
        ?>
        <tr>
            <td><a href="{{ $product->url }}">{{ $product->title }}</a></td>
            <td>{{ $product->price }}</td>
            <td>{{ $quantity }}</td>
        </tr>
    @endforeach
    </table>
</div>
