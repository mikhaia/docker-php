<section class="home-slider">
    <div class="container">
        <div class="home-slider-inner">
            <?php
                $sliders = DB::table('sliders')->get();
            ?>
            @foreach($sliders as $slider)
            <div class="home-slider-item">
                <a href="{{ $slider->url }}"><img src="{{ asset($slider->image) }}" alt="{{ $slider->title }}"></a>
            </div>
            @endforeach
        </div>
    </div>
</section>