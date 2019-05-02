<section class="category-page">
    <div class="container">
        <div class="header">
            <div class="breadcrumbs">
                <ul class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="/" itemprop="item"><span itemprop="name">Главная</span><meta itemprop="position" content="1"></a></li>
                    <li class="active"><span>{{ $category->title }}</span></li>
                </ul>
            </div>
            <h1 class="title category-name">{{ $category->title }}</h1>
            @if($subcategories)
            <div class="subcats">
                <ul class="sub-links">
                    <li class="subcats-title">Разделы:</li>
                    @foreach($subcategories as $subcategory)
                        <li><a href="{{ $subcategory->url }}">{{ $subcategory->title }}</a></li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
        <div class="inner">
            @include('catalog_sidebar')
            <div class="main">
                <div id="product-list">
                    <div class="products">
                        <div class="category-toolbar">
                            <div class="products-tools full">
                                <div class="products-sorting">
                                    <div class="dropdown">
                                        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">Цена</button>
                                        <div class="dropdown-menu"><a href="/category/mebel-dlya-vannoj/vodolej-vod-ok/">Новые и популярные</a><a href="?sort=name&amp;order=asc">Название</a><a href="?sort=price&amp;order=desc">Цена <i class="sort-asc"></i></a><a href="?sort=total_sales&amp;order=desc">Хиты продаж</a><a href="?sort=rating&amp;order=desc">Оценка покупателей</a><a href="?sort=create_datetime&amp;order=desc">Дата добавления</a><a href="?sort=stock&amp;order=desc">В наличии</a></div>
                                    </div>
                                </div>
                                <div class="products-views">
                                    <ul>
                                        <li class="thumbs-view" data-view="thumbs"><i class="fas fa-th"></i></li>
                                        <li class="thumbs-list active" data-view="list"><i class="fas fa-th-list"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <ul class="products-list list">
                            @foreach($products as $item)
                            <li itemscope itemtype="http://schema.org/Product">
                                <div class="products-item">
                                    <div class="products-image">
                                        <a href="{{ $item->url }}" title="{{ $item->title }}"><img itemprop="image" alt="{{ $item->title }}" title="{{ $item->title }}" src="{{ $item->image }}"></a>
                                    </div>
                                    <div class="products-info">
                                        <div class="products-name"><a href="{{ $item->url }}" title="{{ $item->title }}">{{ $item->title }}</a></div>
                                        <div class="products-options">
                                            <ul>
                                                @foreach(json_decode($item->options) as $option)
                                                    <li><span class="name">{{ $option->name }}</span><span class="value">{{ $option->value }}</span></li>
                                                @endforeach
                                            </ul>
                                        </div>
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
        <div class="info">
            <h2>Мебель для ванной комнаты Vod-ok</h2>
            <p>Компания ООО «ВОДОЛЕЙ А +» под торговой маркой Vod-ok является Российским производителем мебели для ванных комнат. Цель компании – производство высококачественной мебели для ванной по доступной цене. Вся продукция маркирована и полностью сертифицирована в соответствии с Российским законодательством. Ассортимент позиций разных групп (тумбы, шкафы, пеналы, зеркала, экраны под ванну). Вся мебель комплектуется фурнитурой известных производителей из Италии, Испании, Словении. Все электроосветительное оборудование предназначено для использования во влажных помещениях и защищено от внешних воздействий специальными коробами.</p>
            <p></p>
            <p>Каркас - изготавливается из влагостойкого ламинированного ДСП. Края обработаны высококачественной меламиновой кромкой. Каркас окрашен специальными водостойкими лакокрасочными материалами. Двери – изготавливаются из высококачественной ламинированной ПСП (МДФ), с дальнейшей обработкой специальными водостойкими лакокрасочными материалами. Вся продукция проходит обязательный контроль качества на каждом этапе производства. Качественная упаковка продукции позволяет сократить до минимума количество рекламаций при транспортировке. На мебель для ванной Vod-ok действует гарантия производителя – 2 года.</p>
            <p></p>
        </div>
    </div>
</section>