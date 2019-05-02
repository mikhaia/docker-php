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
                                        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">Название</button>
                                        <div class="dropdown-menu">
                                            <a href="/category/mebel-dlya-vannoj/">Новые и популярные</a>
                                            <a href="?sort=name&amp;order=desc">Название <i class="sort-asc"></i></a>
                                            <a href="?sort=price&amp;order=asc">Цена</a>
                                            <a href="?sort=total_sales&amp;order=desc">Хиты продаж</a>
                                            <a href="?sort=rating&amp;order=desc">Оценка покупателей</a>
                                            <a href="?sort=create_datetime&amp;order=desc">Дата добавления</a>
                                            <a href="?sort=stock&amp;order=desc">В наличии</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="products-views">
                                    <ul>
                                        <li class="thumbs-view active" data-view="thumbs"><i class="fas fa-th"></i></li>
                                        <li class="thumbs-list" data-view="list"><i class="fas fa-th-list"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
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

                                    <div class="products-options">
                                        <ul>
                                            @foreach(json_decode($item->options) as $option)
                                                <li><span class="name">{{ $option->name }}</span><span class="value">{{ $option->value }}</span></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                        {{ $products->links() }}
{{--                         <div class="block lazyloading-paging" data-times="2" data-link-text="Загрузить еще" data-loading-str="Загрузка...">
                            <ul class="menu-h">
                                <li class="selected"><a href="/category/mebel-dlya-vannoj/">1</a></li>
                                <li><a href="/category/mebel-dlya-vannoj/?page=2">2</a></li>
                                <li><span>...</span></li>
                                <li><a href="/category/mebel-dlya-vannoj/?page=14">14</a></li>
                                <li><a class="inline-link" href="/category/mebel-dlya-vannoj/?page=2">→</a></li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="info">
            <h2>Купить {{ $category->title }}</h2>
            <p>Интернет-магазин «Сантехникс.ру» представляет своим покупателям стильные и функциональные модели мебели для ванных комнат по низким ценам. Вы можете выбрать изделие в соответствии с Вашими пожеланиями и возможностями. Широкий ассортимент позволит Вам легко подобрать и купить идеальный вариант для интерьера Вашей комнаты. </p>
            <p>
                <a id="__captchaReAnother"></a>
                <a id="__captchaReActive"></a>
            </p>
            <p>
                <a id="__captchaReAnother"></a>
                <a id="__captchaReActive"></a>
            </p>
            <p>
                <a id="__captchaReAnother"></a>
                <a id="__captchaReActive"></a>
            </p>
            <p>Мы предлагаем продукцию ведущих отечественных и зарубежных брендов, занимающихся производством сантехники и сопутствующих аксессуаров. Высокое качество моделей гарантирует их долгий срок эксплуатации. Подробнее с наименованиями фирм-партнеров Вы можете ознакомиться в нашем каталоге. </p>
            <p>В коллекции сайта представлены только актуальные модели, созданные в соответствии с ведущими дизайнерскими тенденциями. У нас можно выбрать как классические, традиционные модели, так и современные, оригинальные по форме, цветовому решению:</p>
            <ul>
                <li> «мойдодыр» &mdash; стандартная тумба, снабженная зеркалом и умывальником;</li>
                <li> шкаф-пенал. Небольшая ширина и значительная высота делают такое изделие незаменимым для хранения большого количества различных нужных предметов. При этом экономится свободное пространство комнаты;</li>
                <li> разнообразные типы полок. На них удобно размещать средства по уходу за телом, полотенца, текстиль и т. п.;</li>
                <li> образцы напольных и подвесных шкафов. Для Вашего интерьера Вы можете подобрать модель нужного размера и формы. </li>
            </ul>
            <p>Ярким и оригинальным аксессуаром в ванной комнате станет большое зеркало с подсветкой (в данной модели предусмотрены небольшие шкафчики по правой и левой стороне зеркала, в которых можно хранить мелкие предметы). Для того чтобы не акцентировать внимание на трубах коммуникаций, мы предлагаем приобрести экраны под ванну. </p>
        </div>
    </div>
</section>