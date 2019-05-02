@extends('layouts.main')

@section('blocks')
<div class="content" id="page-content" itemscope itemtype="http://schema.org/WebPage">
	<section class="search-page">
		<div class="container">
			<div class="header">
				<div class="breadcrumbs">
					<ul class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
						<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="/" itemprop="item"><span itemprop="name">Главная</span><meta itemprop="position" content="1"></a></li>
						<li class="active"><span>Результаты поиска</span></li>
					</ul>
				</div>
				<h1 class="title category-name">Результаты по запросу "{{ $query }}"</h1></div>
			<div class="inner">
				<div class="main">
					<div id="product-list">
						<div class="products">
							<ul class="products-list thumbs">
								@foreach($products as $item)
									<li itemscope itemtype="http://schema.org/Product">
										<div class="products-item">
										    <div class="products-image">
										        <a href="{{ $item->url }}" title="{{ $item->title }}"><img itemprop="image" alt="{{ $item->title }}" title="{{ $item->title }}" src="{{ $item->image }}"></a>
										    </div>
										    <div class="products-name"><a href="{{ $item->url }}" title="{{ $item->title }}">{{ $item->title }}</a></div>
										    <div class="products-code">
										        <div>{!! $item->code !!}</div>
										    </div>

										    <div class="products-offers" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
										        <div class="products-price">
										            @if($item->old_price && $item->old_price != $item->price)
										                <span class="compare-at-price">{{ number_format($item->old_price, 0, ' ', ' ') }} руб.</span>
										            @endif
										            <span class="price">{{ number_format($item->price, 0, ' ', ' ') }} руб.</span></div>
										        <div class="products-buy">
										            <form class="purchase addtocart" method="post" action="/cart/add/">
										                <input type="submit" value="В корзину">
										                <input type="hidden" name="product_id" value="{{ $item->id }}">
										            </form>
										        </div>
										        <meta itemprop="price" content="{{ $item->price }}">
										        <meta itemprop="priceCurrency" content="RUB">
										        <link itemprop="availability" href="http://schema.org/InStock" />
										    </div>
										</div>
									</li>
								@endforeach
							</ul>
							{{ $products->links() }}
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection