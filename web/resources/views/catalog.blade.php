@extends('layouts.main')

@section('blocks')
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
            <div class="subcats">
                <ul class="sub-links">
                    <li class="subcats-title">Разделы:</li>
                    @foreach($subcategories as $subcategory)
                        <li><a href="{{ $subcategory->url }}">{{ $subcategory->title }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="inner">
            <div class="sidebar">
                {{-- 
                <div class="filters-wrapper">
                    <div class="header"><a href="javascript:;"><i class="fas fa-sliders-h"></i><span class="name">Подбор по параметрам</span></a></div>
                    <div class="filters  ajax" id="filters">
                        <form class="filters-form-wrapper" method="get" action="/category/mebel-dlya-vannoj/" data-loading="/wa-data/public/site/themes/santehniks/img/loading16.gif">
                            <div class="card filter-param">
                                <div class="card-header"><a class="card-link" data-toggle="collapse" href="#filter-price">Цена<span class="click-arrow"></span></a></div>
                                <div id="filter-price" class="collapse show">
                                    <div class="card-body">
                                        <div class="slider">от
                                            <input type="text" class="min" name="price_min" placeholder="1600">до
                                            <input type="text" class="max" name="price_max" placeholder="128300"> руб.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card filter-param ">
                                <div class="card-header"><a class="card-link collapsed" data-toggle="collapse" href="#filter-izdelie">Изделие<span class="click-arrow"></span></a></div>
                                <div id="filter-izdelie" class="collapse">
                                    <div class="card-body">
                                        <label class="label-checkbox" for="izdelie-119">комплект мебели
                                            <input type="checkbox" id="izdelie-119" name="izdelie[]" value="119"><span class="checkmark-checkbox"></span></label>
                                        <label class="label-checkbox" for="izdelie-122">пенал
                                            <input type="checkbox" id="izdelie-122" name="izdelie[]" value="122"><span class="checkmark-checkbox"></span></label>
                                        <label class="label-checkbox" for="izdelie-124">тумба с раковиной
                                            <input type="checkbox" id="izdelie-124" name="izdelie[]" value="124"><span class="checkmark-checkbox"></span></label>
                                        <label class="label-checkbox" for="izdelie-125">зеркало
                                            <input type="checkbox" id="izdelie-125" name="izdelie[]" value="125"><span class="checkmark-checkbox"></span></label>
                                    </div>
                                </div>
                            </div>
                            <div class="card filter-param ">
                                <div class="card-header"><a class="card-link collapsed" data-toggle="collapse" href="#filter-tip_po_ustanovke">Тип по установке<span class="click-arrow"></span></a></div>
                                <div id="filter-tip_po_ustanovke" class="collapse">
                                    <div class="card-body">
                                        <label class="label-checkbox" for="tip_po_ustanovke-6">напольный
                                            <input type="checkbox" id="tip_po_ustanovke-6" name="tip_po_ustanovke[]" value="6"><span class="checkmark-checkbox"></span></label>
                                        <label class="label-checkbox" for="tip_po_ustanovke-7">подвесной
                                            <input type="checkbox" id="tip_po_ustanovke-7" name="tip_po_ustanovke[]" value="7"><span class="checkmark-checkbox"></span></label>
                                        <label class="label-checkbox" for="tip_po_ustanovke-15">угловой
                                            <input type="checkbox" id="tip_po_ustanovke-15" name="tip_po_ustanovke[]" value="15"><span class="checkmark-checkbox"></span></label>
                                    </div>
                                </div>
                            </div>
                            <div class="card filter-param ">
                                <div class="card-header"><a class="card-link collapsed" data-toggle="collapse" href="#filter-shirina_sm">Ширина<span class="click-arrow"></span></a></div>
                                <div id="filter-shirina_sm" class="collapse">
                                    <div class="card-body">
                                        <label class="label-checkbox" for="shirina_sm-75">30 см
                                            <input type="checkbox" id="shirina_sm-75" name="shirina_sm[]" value="75"><span class="checkmark-checkbox"></span></label>
                                        <label class="label-checkbox" for="shirina_sm-119">35 см
                                            <input type="checkbox" id="shirina_sm-119" name="shirina_sm[]" value="119"><span class="checkmark-checkbox"></span></label>
                                        <label class="label-checkbox" for="shirina_sm-60">40 см
                                            <input type="checkbox" id="shirina_sm-60" name="shirina_sm[]" value="60"><span class="checkmark-checkbox"></span></label>
                                        <label class="label-checkbox" for="shirina_sm-120">45 см
                                            <input type="checkbox" id="shirina_sm-120" name="shirina_sm[]" value="120"><span class="checkmark-checkbox"></span></label>
                                        <label class="label-checkbox" for="shirina_sm-76">50 см
                                            <input type="checkbox" id="shirina_sm-76" name="shirina_sm[]" value="76"><span class="checkmark-checkbox"></span></label>
                                        <label class="label-checkbox" for="shirina_sm-129">55 см
                                            <input type="checkbox" id="shirina_sm-129" name="shirina_sm[]" value="129"><span class="checkmark-checkbox"></span></label>
                                        <label class="label-checkbox" for="shirina_sm-77">60 см
                                            <input type="checkbox" id="shirina_sm-77" name="shirina_sm[]" value="77"><span class="checkmark-checkbox"></span></label>
                                        <label class="label-checkbox" for="shirina_sm-130">65 см
                                            <input type="checkbox" id="shirina_sm-130" name="shirina_sm[]" value="130"><span class="checkmark-checkbox"></span></label>
                                        <label class="label-checkbox" for="shirina_sm-61">70 см
                                            <input type="checkbox" id="shirina_sm-61" name="shirina_sm[]" value="61"><span class="checkmark-checkbox"></span></label>
                                        <label class="label-checkbox" for="shirina_sm-62">75 см
                                            <input type="checkbox" id="shirina_sm-62" name="shirina_sm[]" value="62"><span class="checkmark-checkbox"></span></label>
                                        <label class="label-checkbox" for="shirina_sm-63">80 см
                                            <input type="checkbox" id="shirina_sm-63" name="shirina_sm[]" value="63"><span class="checkmark-checkbox"></span></label>
                                        <label class="label-checkbox" for="shirina_sm-64">85 см
                                            <input type="checkbox" id="shirina_sm-64" name="shirina_sm[]" value="64"><span class="checkmark-checkbox"></span></label>
                                        <label class="label-checkbox" for="shirina_sm-65">90 см
                                            <input type="checkbox" id="shirina_sm-65" name="shirina_sm[]" value="65"><span class="checkmark-checkbox"></span></label>
                                        <label class="label-checkbox" for="shirina_sm-66">95 см
                                            <input type="checkbox" id="shirina_sm-66" name="shirina_sm[]" value="66"><span class="checkmark-checkbox"></span></label>
                                        <label class="label-checkbox" for="shirina_sm-67">100 см
                                            <input type="checkbox" id="shirina_sm-67" name="shirina_sm[]" value="67"><span class="checkmark-checkbox"></span></label>
                                        <label class="label-checkbox" for="shirina_sm-68">105 см
                                            <input type="checkbox" id="shirina_sm-68" name="shirina_sm[]" value="68"><span class="checkmark-checkbox"></span></label>
                                        <label class="label-checkbox" for="shirina_sm-69">110 см
                                            <input type="checkbox" id="shirina_sm-69" name="shirina_sm[]" value="69"><span class="checkmark-checkbox"></span></label>
                                        <label class="label-checkbox" for="shirina_sm-70">120 см
                                            <input type="checkbox" id="shirina_sm-70" name="shirina_sm[]" value="70"><span class="checkmark-checkbox"></span></label>
                                    </div>
                                </div>
                            </div>
                            <div class="card filter-param ">
                                <div class="card-header"><a class="card-link collapsed" data-toggle="collapse" href="#filter-tsvet">Цвет<span class="click-arrow"></span></a></div>
                                <div id="filter-tsvet" class="collapse">
                                    <div class="card-body">
                                        <label class="label-color" for="tsvet-1">
                                            <input type="checkbox" id="tsvet-1" name="tsvet[]" value="1"><span class="checkmark-checkbox-color" style="color:#000000;background-color:#FFFFFF;"></span></label>
                                        <label class="label-color" for="tsvet-2">
                                            <input type="checkbox" id="tsvet-2" name="tsvet[]" value="2"><span class="checkmark-checkbox-color" style="color:#000000;background-color:#F5F3C4;"></span></label>
                                        <label class="label-color" for="tsvet-3">
                                            <input type="checkbox" id="tsvet-3" name="tsvet[]" value="3"><span class="checkmark-checkbox-color" style="color:#000000;background-color:#722F37;"></span></label>
                                        <label class="label-color" for="tsvet-4">
                                            <input type="checkbox" id="tsvet-4" name="tsvet[]" value="4"><span class="checkmark-checkbox-color" style="color:#000000;background-color:#B00000;"></span></label>
                                        <label class="label-color" for="tsvet-5">
                                            <input type="checkbox" id="tsvet-5" name="tsvet[]" value="5"><span class="checkmark-checkbox-color" style="color:#000000;background-color:#FF0000;"></span></label>
                                        <label class="label-color" for="tsvet-6">
                                            <input type="checkbox" id="tsvet-6" name="tsvet[]" value="6"><span class="checkmark-checkbox-color" style="color:#000000;background-color:#FFFF00;"></span></label>
                                        <label class="label-color" for="tsvet-7">
                                            <input type="checkbox" id="tsvet-7" name="tsvet[]" value="7"><span class="checkmark-checkbox-color" style="color:#000000;background-color:#964B00;"></span></label>
                                        <label class="label-color" for="tsvet-8">
                                            <input type="checkbox" id="tsvet-8" name="tsvet[]" value="8"><span class="checkmark-checkbox-color" style="color:#000000;background-color:#DA70D6;"></span></label>
                                        <label class="label-color" for="tsvet-9">
                                            <input type="checkbox" id="tsvet-9" name="tsvet[]" value="9"><span class="checkmark-checkbox-color" style="color:#FFFFFF;background-color:#000000;"></span></label>
                                    </div>
                                </div>
                            </div>
                            <div class="card filter-param  last">
                                <div class="card-header"><a class="card-link collapsed" data-toggle="collapse" href="#filter-proizvoditel">Производитель<span class="click-arrow"></span></a></div>
                                <div id="filter-proizvoditel" class="collapse">
                                    <div class="card-body">
                                        <label class="label-checkbox" for="proizvoditel-27">Aqwella
                                            <input type="checkbox" id="proizvoditel-27" name="proizvoditel[]" value="27"><span class="checkmark-checkbox"></span></label>
                                        <label class="label-checkbox" for="proizvoditel-28">Aqwella 5 stars
                                            <input type="checkbox" id="proizvoditel-28" name="proizvoditel[]" value="28"><span class="checkmark-checkbox"></span></label>
                                        <label class="label-checkbox" for="proizvoditel-76">Vod-ok Elite
                                            <input type="checkbox" id="proizvoditel-76" name="proizvoditel[]" value="76"><span class="checkmark-checkbox"></span></label>
                                        <label class="label-checkbox" for="proizvoditel-78">Акватон
                                            <input type="checkbox" id="proizvoditel-78" name="proizvoditel[]" value="78"><span class="checkmark-checkbox"></span></label>
                                        <label class="label-checkbox" for="proizvoditel-79">АСБ-Мебель
                                            <input type="checkbox" id="proizvoditel-79" name="proizvoditel[]" value="79"><span class="checkmark-checkbox"></span></label>
                                        <label class="label-checkbox" for="proizvoditel-80">Водолей (Vod-ok)
                                            <input type="checkbox" id="proizvoditel-80" name="proizvoditel[]" value="80"><span class="checkmark-checkbox"></span></label>
                                    </div>
                                </div>
                            </div>
                            <input type="submit" class="gray" value="Показать">
                        </form>
                    </div>
                </div>
                --}}
                <nav class="sidebar-nav">
                    <ul class="metismenu" id="sidebar-cats">
                        <li class=" first-level"><a href="/category/rasprodazha/">РАСПРОДАЖА</a></li>
                        <li class="has-childs first-level"><a href="/category/unitazy/">Унитазы</a><span class="clicker-arrow"></span>
                            <ul class="submenu level-1">
                                <li class=""><a href="/category/unitazy/santek-1/">Santek</a></li>
                                <li class=""><a href="/category/unitazy/jika-2/">Jika</a></li>
                                <li class=""><a href="/category/unitazy/cersanit-1/">Cersanit</a></li>
                                <li class=""><a href="/category/unitazy/ideal-standard-1/">Ideal Standard</a></li>
                                <li class=""><a href="/category/unitazy/roca-1/">Roca</a></li>
                                <li class=""><a href="/category/unitazy/gustavsberg-1/">Gustavsberg</a></li>
                                <li class=""><a href="/category/unitazy/vitra-1/">Vitra</a></li>
                                <li class=""><a href="/category/unitazy/laguraty/">Laguraty</a></li>
                                <li class=""><a href="/category/unitazy/duravit-1/">Duravit</a></li>
                                <li class=""><a href="/category/unitazy/rihard-knauff/">Rihard Knauff</a></li>
                                <li class=""><a href="/category/unitazy/laufen-1/">Laufen</a></li>
                                <li class=""><a href="/category/unitazy/jacob-delafon/">Jacob Delafon</a></li>
                                <li class=""><a href="/category/unitazy/ifo-1/">Ifo</a></li>
                                <li class=""><a href="/category/unitazy/ido-1/">Ido</a></li>
                            </ul>
                        </li>
                        <li class="has-childs mm-active first-level"><a href="/category/mebel-dlya-vannoj/">Мебель для ванной</a><span class="clicker-arrow"></span>
                            <ul class="submenu level-1">
                                <li class=""><a href="/category/mebel-dlya-vannoj/vodolej-vod-ok/">Водолей (Vod-ok)</a></li>
                                <li class=""><a href="/category/mebel-dlya-vannoj/akvaton/">Акватон</a></li>
                                <li class=""><a href="/category/mebel-dlya-vannoj/asb-mebel/">АСБ-Мебель</a></li>
                                <li class=""><a href="/category/mebel-dlya-vannoj/aqwella/">Aqwella</a></li>
                                <li class=""><a href="/category/mebel-dlya-vannoj/vod-0k-elite/">Vod-0k Elite</a></li>
                                <li class=""><a href="/category/mebel-dlya-vannoj/aqwella-5-stars/">Aqwella 5 stars</a></li>
                            </ul>
                        </li>
                        <li class="has-childs first-level"><a href="/category/rakoviny/">Раковины</a><span class="clicker-arrow"></span>
                            <ul class="submenu level-1">
                                <li class=""><a href="/category/rakoviny/gustavsberg-2/">Gustavsberg</a></li>
                                <li class=""><a href="/category/rakoviny/roca/">Roca</a></li>
                                <li class=""><a href="/category/rakoviny/ideal-standard/">Ideal Standard</a></li>
                                <li class=""><a href="/category/rakoviny/laufen/">Laufen</a></li>
                                <li class=""><a href="/category/rakoviny/duravit/">Duravit</a></li>
                                <li class=""><a href="/category/rakoviny/vitra/">Vitra</a></li>
                                <li class=""><a href="/category/rakoviny/cersanit/">Cersanit</a></li>
                                <li class=""><a href="/category/rakoviny/santek/">Santek</a></li>
                                <li class=""><a href="/category/rakoviny/jika/">Jika</a></li>
                                <li class=""><a href="/category/rakoviny/ido-2/">Ido</a></li>
                                <li class=""><a href="/category/rakoviny/nad-stiralnoj-mashinoj/">Над стиральной машиной</a></li>
                            </ul>
                        </li>
                        <li class="has-childs first-level"><a href="/category/smesiteli/">Смесители</a><span class="clicker-arrow"></span>
                            <ul class="submenu level-1">
                                <li class=""><a href="/category/smesiteli/grohe/">Grohe</a></li>
                                <li class=""><a href="/category/smesiteli/raiber/">Raiber</a></li>
                                <li class=""><a href="/category/smesiteli/hansgrohe/">Hansgrohe</a></li>
                                <li class=""><a href="/category/smesiteli/ideal-standard-4/">Ideal Standard</a></li>
                                <li class=""><a href="/category/smesiteli/oras/">Oras</a></li>
                                <li class=""><a href="/category/smesiteli/gro-welle/">Gro Welle</a></li>
                                <li class=""><a href="/category/smesiteli/besser/">Besser</a></li>
                                <li class=""><a href="/category/smesiteli/enbe/">Enbe</a></li>
                            </ul>
                        </li>
                        <li class="has-childs first-level"><a href="/category/vanny/">Ванны</a><span class="clicker-arrow"></span>
                            <ul class="submenu level-1">
                                <li class="has-childs"><a href="/category/vanny/chugunnye/">Чугунные</a><span class="clicker-arrow"></span>
                                    <ul class="submenu level-2">
                                        <li class=""><a href="/category/vanny/chugunnye/roca-2/">Roca</a></li>
                                        <li class=""><a href="/category/vanny/chugunnye/jacob-delafon-1/">Jacob Delafon</a></li>
                                    </ul>
                                </li>
                                <li class="has-childs"><a href="/category/vanny/stalnye/">Стальные</a><span class="clicker-arrow"></span>
                                    <ul class="submenu level-2">
                                        <li class=""><a href="/category/vanny/stalnye/roca-3/">Roca</a></li>
                                        <li class=""><a href="/category/vanny/stalnye/kaldewei/">Kaldewei</a></li>
                                    </ul>
                                </li>
                                <li class="has-childs"><a href="/category/vanny/akrilovye/">Акриловые</a><span class="clicker-arrow"></span>
                                    <ul class="submenu level-2">
                                        <li class=""><a href="/category/vanny/akrilovye/cersanit-3/">Cersanit</a></li>
                                        <li class=""><a href="/category/vanny/akrilovye/bach/">Bach</a></li>
                                        <li class=""><a href="/category/vanny/akrilovye/massimo-1/">Massimo</a></li>
                                        <li class=""><a href="/category/vanny/akrilovye/appollo/">Appollo</a></li>
                                        <li class="has-childs"><a href="/category/vanny/akrilovye/ravak-1/">Ravak</a><span class="clicker-arrow"></span>
                                            <ul class="submenu level-3">
                                                <li class=""><a href="/category/vanny/akrilovye/ravak-1/komplektuyushchie-1/">Комплектующие</a></li>
                                                <li class=""><a href="/category/vanny/akrilovye/ravak-1/vanny-1/">Ванны</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-childs"><a href="/category/vanny/litevoj-mramor/">Литьевой мрамор</a><span class="clicker-arrow"></span>
                                    <ul class="submenu level-2">
                                        <li class=""><a href="/category/vanny/litevoj-mramor/estet/">Эстет</a></li>
                                        <li class=""><a href="/category/vanny/litevoj-mramor/massimo-2/">Massimo</a></li>
                                        <li class=""><a href="/category/vanny/litevoj-mramor/agape/">Agape</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="has-childs first-level"><a href="/category/installyacii/">Инсталляции</a><span class="clicker-arrow"></span>
                            <ul class="submenu level-1">
                                <li class=""><a href="/category/installyacii/grohe-1/">Grohe</a></li>
                                <li class=""><a href="/category/installyacii/geberit/">Geberit</a></li>
                                <li class=""><a href="/category/installyacii/vitra-4/">Vitra</a></li>
                                <li class=""><a href="/category/installyacii/sanit/">Sanit</a></li>
                                <li class=""><a href="/category/installyacii/roca-5/">Roca</a></li>
                                <li class=""><a href="/category/installyacii/tece/">Tece</a></li>
                                <li class=""><a href="/category/installyacii/cersanit-2/">Cersanit</a></li>
                                <li class=""><a href="/category/installyacii/ideal-standard-2/">Ideal Standard</a></li>
                                <li class=""><a href="/category/installyacii/alcaplast/">Alcaplast</a></li>
                            </ul>
                        </li>
                        <li class="has-childs first-level"><a href="/category/dushevye-kabiny/">Душевые кабины</a><span class="clicker-arrow"></span>
                            <ul class="submenu level-1">
                                <li class=""><a href="/category/dushevye-kabiny/aquamarine/">Aquamarine</a></li>
                                <li class=""><a href="/category/dushevye-kabiny/wasserfalle/">Wasserfalle</a></li>
                                <li class=""><a href="/category/dushevye-kabiny/svedbergs/">Svedbergs</a></li>
                                <li class=""><a href="/category/dushevye-kabiny/gustavsberg-4/">Gustavsberg</a></li>
                                <li class=""><a href="/category/dushevye-kabiny/massimo/">Massimo</a></li>
                                <li class=""><a href="/category/dushevye-kabiny/appollo-1/">Appollo</a></li>
                                <li class=""><a href="/category/dushevye-kabiny/ido/">Ido</a></li>
                                <li class=""><a href="/category/dushevye-kabiny/ideal-standard-5/">Ideal Standard</a></li>
                            </ul>
                        </li>
                        <li class=" first-level"><a href="/category/detskaya-santekhnika/">Детская сантехника</a></li>
                        <li class="has-childs first-level"><a href="/category/shtorki-ehkrany/">Шторки | Экраны</a><span class="clicker-arrow"></span>
                            <ul class="submenu level-1">
                                <li class="has-childs"><a href="/category/shtorki-ehkrany/shtorki-dlya-vannoj/">Шторки для ванной</a><span class="clicker-arrow"></span>
                                    <ul class="submenu level-2">
                                        <li class=""><a href="/category/shtorki-ehkrany/shtorki-dlya-vannoj/sanrif/">Sanrif</a></li>
                                        <li class=""><a href="/category/shtorki-ehkrany/shtorki-dlya-vannoj/lanmeng/">Lanmeng</a></li>
                                        <li class=""><a href="/category/shtorki-ehkrany/shtorki-dlya-vannoj/alpen/">Alpen</a></li>
                                        <li class=""><a href="/category/shtorki-ehkrany/shtorki-dlya-vannoj/metakam/">Метакам</a></li>
                                        <li class=""><a href="/category/shtorki-ehkrany/shtorki-dlya-vannoj/ravak/">Ravak</a></li>
                                    </ul>
                                </li>
                                <li class="has-childs"><a href="/category/shtorki-ehkrany/ehkrany-pod-vannu/">Экраны под ванну</a><span class="clicker-arrow"></span>
                                    <ul class="submenu level-2">
                                        <li class=""><a href="/category/shtorki-ehkrany/ehkrany-pod-vannu/vodolej-vod-ok-1/">Водолей (Vod-ок)</a></li>
                                        <li class=""><a href="/category/shtorki-ehkrany/ehkrany-pod-vannu/emmy/">Emmy</a></li>
                                        <li class=""><a href="/category/shtorki-ehkrany/ehkrany-pod-vannu/metakam/">Метакам</a></li>
                                        <li class=""><a href="/category/shtorki-ehkrany/ehkrany-pod-vannu/sergig/">Sergig</a></li>
                                        <li class=""><a href="/category/shtorki-ehkrany/ehkrany-pod-vannu/sandi/">Санди</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="has-childs first-level"><a href="/category/aksessuary-dlya-vannoj/">Аксессуары для ванной</a><span class="clicker-arrow"></span>
                            <ul class="submenu level-1">
                                <li class=""><a href="/category/aksessuary-dlya-vannoj/raiber-1/">Raiber</a></li>
                                <li class="has-childs"><a href="/category/aksessuary-dlya-vannoj/gro-welle/">Gro Welle</a><span class="clicker-arrow"></span>
                                    <ul class="submenu level-2">
                                        <li class=""><a href="/category/aksessuary-dlya-vannoj/gro-welle/mandarin/">Mandarin</a></li>
                                        <li class=""><a href="/category/aksessuary-dlya-vannoj/gro-welle/rube/">Rube</a></li>
                                        <li class=""><a href="/category/aksessuary-dlya-vannoj/gro-welle/wassermelon/">Wassermelon</a></li>
                                        <li class=""><a href="/category/aksessuary-dlya-vannoj/gro-welle/muskat/">Muskat</a></li>
                                    </ul>
                                </li>
                                <li class=""><a href="/category/aksessuary-dlya-vannoj/sanartec/">Sanartec</a></li>
                                <li class=""><a href="/category/aksessuary-dlya-vannoj/vita/">Vita</a></li>
                            </ul>
                        </li>
                        <li class="has-childs first-level"><a href="/category/polotencesushiteli/">Полотенцесушители</a><span class="clicker-arrow"></span>
                            <ul class="submenu level-1">
                                <li class="has-childs"><a href="/category/polotencesushiteli/vodyanye/">Водяные</a><span class="clicker-arrow"></span>
                                    <ul class="submenu level-2">
                                        <li class=""><a href="/category/polotencesushiteli/vodyanye/terminus/">Terminus</a></li>
                                        <li class=""><a href="/category/polotencesushiteli/vodyanye/energy-1/">Energy</a></li>
                                    </ul>
                                </li>
                                <li class="has-childs"><a href="/category/polotencesushiteli/ehlektricheskie/">Электрические</a><span class="clicker-arrow"></span>
                                    <ul class="submenu level-2">
                                        <li class=""><a href="/category/polotencesushiteli/ehlektricheskie/terminus-1/">Terminus</a></li>
                                        <li class=""><a href="/category/polotencesushiteli/ehlektricheskie/domoterm/">Domoterm</a></li>
                                        <li class=""><a href="/category/polotencesushiteli/ehlektricheskie/pax/">Pax</a></li>
                                        <li class=""><a href="/category/polotencesushiteli/ehlektricheskie/energy/">Energy</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="has-childs first-level"><a href="/category/komplektuyushchie/">Комплектующие</a><span class="clicker-arrow"></span>
                            <ul class="submenu level-1">
                                <li class=""><a href="/category/komplektuyushchie/sidenya-dlya-unitazov/">Сиденья для унитазов</a></li>
                                <li class=""><a href="/category/komplektuyushchie/sifony/">Сифоны</a></li>
                                <li class=""><a href="/category/komplektuyushchie/dushevye-lotki/">Душевые лотки</a></li>
                                <li class=""><a href="/category/komplektuyushchie/bachki-armatura/">Бачки | Арматура</a></li>
                                <li class=""><a href="/category/komplektuyushchie/krepezh/">Крепеж</a></li>
                            </ul>
                        </li>
                        <li class="has-childs first-level"><a href="/category/bide/">Биде</a><span class="clicker-arrow"></span>
                            <ul class="submenu level-1">
                                <li class=""><a href="/category/bide/roca-4/">Roca</a></li>
                                <li class=""><a href="/category/bide/gustavsberg-3/">Gustavsberg</a></li>
                                <li class=""><a href="/category/bide/ideal-standard-3/">Ideal Standard</a></li>
                                <li class=""><a href="/category/bide/duravit-2/">Duravit</a></li>
                                <li class=""><a href="/category/bide/vitra-3/">Vitra</a></li>
                                <li class=""><a href="/category/bide/laufen-2/">Laufen</a></li>
                                <li class=""><a href="/category/bide/ifo/">Ifo</a></li>
                                <li class=""><a href="/category/bide/sanindusa/">Sanindusa</a></li>
                            </ul>
                        </li>
                        <li class="has-childs first-level"><a href="/category/radiatory/">Радиаторы</a><span class="clicker-arrow"></span>
                            <ul class="submenu level-1">
                                <li class="has-childs"><a href="/category/radiatory/bimetallicheskie/">Биметаллические</a><span class="clicker-arrow"></span>
                                    <ul class="submenu level-2">
                                        <li class=""><a href="/category/radiatory/bimetallicheskie/sira/">Sira</a></li>
                                        <li class=""><a href="/category/radiatory/bimetallicheskie/global-1/">Global</a></li>
                                    </ul>
                                </li>
                                <li class="has-childs"><a href="/category/radiatory/alyuminievye/">Алюминиевые</a><span class="clicker-arrow"></span>
                                    <ul class="submenu level-2">
                                        <li class=""><a href="/category/radiatory/alyuminievye/global/">Global</a></li>
                                    </ul>
                                </li>
                                <li class=""><a href="/category/radiatory/komplektuyushchie-/">Комплектующие </a></li>
                            </ul>
                        </li>
                        <li class="has-childs first-level"><a href="/category/pissuary/">Писсуары</a><span class="clicker-arrow"></span>
                            <ul class="submenu level-1">
                                <li class=""><a href="/category/pissuary/duravit-3/">Duravit</a></li>
                                <li class=""><a href="/category/pissuary/vitra-2/">Vitra</a></li>
                                <li class=""><a href="/category/pissuary/santek-2/">Santek</a></li>
                                <li class=""><a href="/category/pissuary/gustavsberg/">Gustavsberg</a></li>
                                <li class=""><a href="/category/pissuary/jika-1/">Jika</a></li>
                                <li class=""><a href="/category/pissuary/laguraty-1/">Laguraty</a></li>
                            </ul>
                        </li>
                        <li class="has-childs first-level"><a href="/category/teplyj-pol/">Теплый пол</a><span class="clicker-arrow"></span>
                            <ul class="submenu level-1">
                                <li class=""><a href="/category/teplyj-pol/energy-2/">Energy</a></li>
                                <li class="has-childs"><a href="/category/teplyj-pol/nacionalnyj-komfort/">Национальный комфорт</a><span class="clicker-arrow"></span>
                                    <ul class="submenu level-2">
                                        <li class=""><a href="/category/teplyj-pol/nacionalnyj-komfort/odnozhilnye-maty-/">Одножильные маты </a></li>
                                        <li class=""><a href="/category/teplyj-pol/nacionalnyj-komfort/dvuhzhilnye-maty-/">Двухжильные маты </a></li>
                                    </ul>
                                </li>
                                <li class=""><a href="/category/teplyj-pol/termoregulyatory/">Терморегуляторы</a></li>
                            </ul>
                        </li>
                        <li class="has-childs first-level"><a href="/category/konvektory/">Конвекторы</a><span class="clicker-arrow"></span>
                            <ul class="submenu level-1">
                                <li class=""><a href="/category/konvektory/thermor/">Thermor</a></li>
                            </ul>
                        </li>
                        <li class="has-childs first-level"><a href="/category/sushilki-dlya-ruk/">Сушилки для рук</a><span class="clicker-arrow"></span>
                            <ul class="submenu level-1">
                                <li class=""><a href="/category/sushilki-dlya-ruk/stiebel-eltron/">Stiebel Eltron</a></li>
                                <li class=""><a href="/category/sushilki-dlya-ruk/aeg/">AEG</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="main">
                <div class="catalog-mobile-toolbar">
                    <div class="category-toolbar-wrapper">
                        <div class="toobar-buttons">
                            <ul>
                                <li class="cats"><a href="#" data-id="#js-section">Каталог</a></li>
                                <li class="filt"><a href="#" data-id="#js-filter">Фильтр</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="category-toolbar-dropdown">
                        <div id="js-section">
                            <ul class="metismenu" id="metismenu-mobile">
                                <li class=" first-level"> <a href="/category/rasprodazha/">
            РАСПРОДАЖА
        </a> </li>
                                <li class="has-childs first-level"> <a href="/category/unitazy/">
            Унитазы
        </a> <span class="clicker-arrow"></span>
                                    <ul class="submenu level-1">
                                        <li class=""> <a href="/category/unitazy/santek-1/">
            Santek
        </a> </li>
                                        <li class=""> <a href="/category/unitazy/jika-2/">
            Jika
        </a> </li>
                                        <li class=""> <a href="/category/unitazy/cersanit-1/">
            Cersanit
        </a> </li>
                                        <li class=""> <a href="/category/unitazy/ideal-standard-1/">
            Ideal Standard
        </a> </li>
                                        <li class=""> <a href="/category/unitazy/roca-1/">
            Roca
        </a> </li>
                                        <li class=""> <a href="/category/unitazy/gustavsberg-1/">
            Gustavsberg
        </a> </li>
                                        <li class=""> <a href="/category/unitazy/vitra-1/">
            Vitra
        </a> </li>
                                        <li class=""> <a href="/category/unitazy/laguraty/">
            Laguraty
        </a> </li>
                                        <li class=""> <a href="/category/unitazy/duravit-1/">
            Duravit
        </a> </li>
                                        <li class=""> <a href="/category/unitazy/rihard-knauff/">
            Rihard Knauff
        </a> </li>
                                        <li class=""> <a href="/category/unitazy/laufen-1/">
            Laufen
        </a> </li>
                                        <li class=""> <a href="/category/unitazy/jacob-delafon/">
            Jacob Delafon
        </a> </li>
                                        <li class=""> <a href="/category/unitazy/ifo-1/">
            Ifo
        </a> </li>
                                        <li class=""> <a href="/category/unitazy/ido-1/">
            Ido
        </a> </li>
                                    </ul>
                                </li>
                                <li class="has-childs mm-active first-level"> <a href="/category/mebel-dlya-vannoj/">
            Мебель для ванной
        </a> <span class="clicker-arrow"></span>
                                    <ul class="submenu level-1">
                                        <li class=""> <a href="/category/mebel-dlya-vannoj/vodolej-vod-ok/">
            Водолей (Vod-ok)
        </a> </li>
                                        <li class=""> <a href="/category/mebel-dlya-vannoj/akvaton/">
            Акватон
        </a> </li>
                                        <li class=""> <a href="/category/mebel-dlya-vannoj/asb-mebel/">
            АСБ-Мебель
        </a> </li>
                                        <li class=""> <a href="/category/mebel-dlya-vannoj/aqwella/">
            Aqwella
        </a> </li>
                                        <li class=""> <a href="/category/mebel-dlya-vannoj/vod-0k-elite/">
            Vod-0k Elite
        </a> </li>
                                        <li class=""> <a href="/category/mebel-dlya-vannoj/aqwella-5-stars/">
            Aqwella 5 stars
        </a> </li>
                                    </ul>
                                </li>
                                <li class="has-childs first-level"> <a href="/category/rakoviny/">
            Раковины
        </a> <span class="clicker-arrow"></span>
                                    <ul class="submenu level-1">
                                        <li class=""> <a href="/category/rakoviny/gustavsberg-2/">
            Gustavsberg
        </a> </li>
                                        <li class=""> <a href="/category/rakoviny/roca/">
            Roca
        </a> </li>
                                        <li class=""> <a href="/category/rakoviny/ideal-standard/">
            Ideal Standard
        </a> </li>
                                        <li class=""> <a href="/category/rakoviny/laufen/">
            Laufen
        </a> </li>
                                        <li class=""> <a href="/category/rakoviny/duravit/">
            Duravit
        </a> </li>
                                        <li class=""> <a href="/category/rakoviny/vitra/">
            Vitra
        </a> </li>
                                        <li class=""> <a href="/category/rakoviny/cersanit/">
            Cersanit
        </a> </li>
                                        <li class=""> <a href="/category/rakoviny/santek/">
            Santek
        </a> </li>
                                        <li class=""> <a href="/category/rakoviny/jika/">
            Jika
        </a> </li>
                                        <li class=""> <a href="/category/rakoviny/ido-2/">
            Ido
        </a> </li>
                                        <li class=""> <a href="/category/rakoviny/nad-stiralnoj-mashinoj/">
            Над стиральной машиной
        </a> </li>
                                    </ul>
                                </li>
                                <li class="has-childs first-level"> <a href="/category/smesiteli/">
            Смесители
        </a> <span class="clicker-arrow"></span>
                                    <ul class="submenu level-1">
                                        <li class=""> <a href="/category/smesiteli/grohe/">
            Grohe
        </a> </li>
                                        <li class=""> <a href="/category/smesiteli/raiber/">
            Raiber
        </a> </li>
                                        <li class=""> <a href="/category/smesiteli/hansgrohe/">
            Hansgrohe
        </a> </li>
                                        <li class=""> <a href="/category/smesiteli/ideal-standard-4/">
            Ideal Standard
        </a> </li>
                                        <li class=""> <a href="/category/smesiteli/oras/">
            Oras
        </a> </li>
                                        <li class=""> <a href="/category/smesiteli/gro-welle/">
            Gro Welle
        </a> </li>
                                        <li class=""> <a href="/category/smesiteli/besser/">
            Besser
        </a> </li>
                                        <li class=""> <a href="/category/smesiteli/enbe/">
            Enbe
        </a> </li>
                                    </ul>
                                </li>
                                <li class="has-childs first-level"> <a href="/category/vanny/">
            Ванны
        </a> <span class="clicker-arrow"></span>
                                    <ul class="submenu level-1">
                                        <li class="has-childs"> <a href="/category/vanny/chugunnye/">
            Чугунные
        </a> <span class="clicker-arrow"></span>
                                            <ul class="submenu level-2">
                                                <li class=""> <a href="/category/vanny/chugunnye/roca-2/">
            Roca
        </a> </li>
                                                <li class=""> <a href="/category/vanny/chugunnye/jacob-delafon-1/">
            Jacob Delafon
        </a> </li>
                                            </ul>
                                        </li>
                                        <li class="has-childs"> <a href="/category/vanny/stalnye/">
            Стальные
        </a> <span class="clicker-arrow"></span>
                                            <ul class="submenu level-2">
                                                <li class=""> <a href="/category/vanny/stalnye/roca-3/">
            Roca
        </a> </li>
                                                <li class=""> <a href="/category/vanny/stalnye/kaldewei/">
            Kaldewei
        </a> </li>
                                            </ul>
                                        </li>
                                        <li class="has-childs"> <a href="/category/vanny/akrilovye/">
            Акриловые
        </a> <span class="clicker-arrow"></span>
                                            <ul class="submenu level-2">
                                                <li class=""> <a href="/category/vanny/akrilovye/cersanit-3/">
            Cersanit
        </a> </li>
                                                <li class=""> <a href="/category/vanny/akrilovye/bach/">
            Bach
        </a> </li>
                                                <li class=""> <a href="/category/vanny/akrilovye/massimo-1/">
            Massimo
        </a> </li>
                                                <li class=""> <a href="/category/vanny/akrilovye/appollo/">
            Appollo
        </a> </li>
                                                <li class="has-childs"> <a href="/category/vanny/akrilovye/ravak-1/">
            Ravak
        </a> <span class="clicker-arrow"></span>
                                                    <ul class="submenu level-3">
                                                        <li class=""> <a href="/category/vanny/akrilovye/ravak-1/komplektuyushchie-1/">
            Комплектующие
        </a> </li>
                                                        <li class=""> <a href="/category/vanny/akrilovye/ravak-1/vanny-1/">
            Ванны
        </a> </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="has-childs"> <a href="/category/vanny/litevoj-mramor/">
            Литьевой мрамор
        </a> <span class="clicker-arrow"></span>
                                            <ul class="submenu level-2">
                                                <li class=""> <a href="/category/vanny/litevoj-mramor/estet/">
            Эстет
        </a> </li>
                                                <li class=""> <a href="/category/vanny/litevoj-mramor/massimo-2/">
            Massimo
        </a> </li>
                                                <li class=""> <a href="/category/vanny/litevoj-mramor/agape/">
            Agape
        </a> </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-childs first-level"> <a href="/category/installyacii/">
            Инсталляции
        </a> <span class="clicker-arrow"></span>
                                    <ul class="submenu level-1">
                                        <li class=""> <a href="/category/installyacii/grohe-1/">
            Grohe
        </a> </li>
                                        <li class=""> <a href="/category/installyacii/geberit/">
            Geberit
        </a> </li>
                                        <li class=""> <a href="/category/installyacii/vitra-4/">
            Vitra
        </a> </li>
                                        <li class=""> <a href="/category/installyacii/sanit/">
            Sanit
        </a> </li>
                                        <li class=""> <a href="/category/installyacii/roca-5/">
            Roca
        </a> </li>
                                        <li class=""> <a href="/category/installyacii/tece/">
            Tece
        </a> </li>
                                        <li class=""> <a href="/category/installyacii/cersanit-2/">
            Cersanit
        </a> </li>
                                        <li class=""> <a href="/category/installyacii/ideal-standard-2/">
            Ideal Standard
        </a> </li>
                                        <li class=""> <a href="/category/installyacii/alcaplast/">
            Alcaplast
        </a> </li>
                                    </ul>
                                </li>
                                <li class="has-childs first-level"> <a href="/category/dushevye-kabiny/">
            Душевые кабины
        </a> <span class="clicker-arrow"></span>
                                    <ul class="submenu level-1">
                                        <li class=""> <a href="/category/dushevye-kabiny/aquamarine/">
            Aquamarine
        </a> </li>
                                        <li class=""> <a href="/category/dushevye-kabiny/wasserfalle/">
            Wasserfalle
        </a> </li>
                                        <li class=""> <a href="/category/dushevye-kabiny/svedbergs/">
            Svedbergs
        </a> </li>
                                        <li class=""> <a href="/category/dushevye-kabiny/gustavsberg-4/">
            Gustavsberg
        </a> </li>
                                        <li class=""> <a href="/category/dushevye-kabiny/massimo/">
            Massimo
        </a> </li>
                                        <li class=""> <a href="/category/dushevye-kabiny/appollo-1/">
            Appollo
        </a> </li>
                                        <li class=""> <a href="/category/dushevye-kabiny/ido/">
            Ido
        </a> </li>
                                        <li class=""> <a href="/category/dushevye-kabiny/ideal-standard-5/">
            Ideal Standard
        </a> </li>
                                    </ul>
                                </li>
                                <li class=" first-level"> <a href="/category/detskaya-santekhnika/">
            Детская сантехника
        </a> </li>
                                <li class="has-childs first-level"> <a href="/category/shtorki-ehkrany/">
            Шторки | Экраны
        </a> <span class="clicker-arrow"></span>
                                    <ul class="submenu level-1">
                                        <li class="has-childs"> <a href="/category/shtorki-ehkrany/shtorki-dlya-vannoj/">
            Шторки для ванной
        </a> <span class="clicker-arrow"></span>
                                            <ul class="submenu level-2">
                                                <li class=""> <a href="/category/shtorki-ehkrany/shtorki-dlya-vannoj/sanrif/">
            Sanrif
        </a> </li>
                                                <li class=""> <a href="/category/shtorki-ehkrany/shtorki-dlya-vannoj/lanmeng/">
            Lanmeng
        </a> </li>
                                                <li class=""> <a href="/category/shtorki-ehkrany/shtorki-dlya-vannoj/alpen/">
            Alpen
        </a> </li>
                                                <li class=""> <a href="/category/shtorki-ehkrany/shtorki-dlya-vannoj/metakam/">
            Метакам
        </a> </li>
                                                <li class=""> <a href="/category/shtorki-ehkrany/shtorki-dlya-vannoj/ravak/">
            Ravak
        </a> </li>
                                            </ul>
                                        </li>
                                        <li class="has-childs"> <a href="/category/shtorki-ehkrany/ehkrany-pod-vannu/">
            Экраны под ванну
        </a> <span class="clicker-arrow"></span>
                                            <ul class="submenu level-2">
                                                <li class=""> <a href="/category/shtorki-ehkrany/ehkrany-pod-vannu/vodolej-vod-ok-1/">
            Водолей (Vod-ок)
        </a> </li>
                                                <li class=""> <a href="/category/shtorki-ehkrany/ehkrany-pod-vannu/emmy/">
            Emmy
        </a> </li>
                                                <li class=""> <a href="/category/shtorki-ehkrany/ehkrany-pod-vannu/metakam/">
            Метакам
        </a> </li>
                                                <li class=""> <a href="/category/shtorki-ehkrany/ehkrany-pod-vannu/sergig/">
            Sergig
        </a> </li>
                                                <li class=""> <a href="/category/shtorki-ehkrany/ehkrany-pod-vannu/sandi/">
            Санди
        </a> </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-childs first-level"> <a href="/category/aksessuary-dlya-vannoj/">
            Аксессуары для ванной
        </a> <span class="clicker-arrow"></span>
                                    <ul class="submenu level-1">
                                        <li class=""> <a href="/category/aksessuary-dlya-vannoj/raiber-1/">
            Raiber
        </a> </li>
                                        <li class="has-childs"> <a href="/category/aksessuary-dlya-vannoj/gro-welle/">
            Gro Welle
        </a> <span class="clicker-arrow"></span>
                                            <ul class="submenu level-2">
                                                <li class=""> <a href="/category/aksessuary-dlya-vannoj/gro-welle/mandarin/">
            Mandarin
        </a> </li>
                                                <li class=""> <a href="/category/aksessuary-dlya-vannoj/gro-welle/rube/">
            Rube
        </a> </li>
                                                <li class=""> <a href="/category/aksessuary-dlya-vannoj/gro-welle/wassermelon/">
            Wassermelon
        </a> </li>
                                                <li class=""> <a href="/category/aksessuary-dlya-vannoj/gro-welle/muskat/">
            Muskat
        </a> </li>
                                            </ul>
                                        </li>
                                        <li class=""> <a href="/category/aksessuary-dlya-vannoj/sanartec/">
            Sanartec
        </a> </li>
                                        <li class=""> <a href="/category/aksessuary-dlya-vannoj/vita/">
            Vita
        </a> </li>
                                    </ul>
                                </li>
                                <li class="has-childs first-level"> <a href="/category/polotencesushiteli/">
            Полотенцесушители
        </a> <span class="clicker-arrow"></span>
                                    <ul class="submenu level-1">
                                        <li class="has-childs"> <a href="/category/polotencesushiteli/vodyanye/">
            Водяные
        </a> <span class="clicker-arrow"></span>
                                            <ul class="submenu level-2">
                                                <li class=""> <a href="/category/polotencesushiteli/vodyanye/terminus/">
            Terminus
        </a> </li>
                                                <li class=""> <a href="/category/polotencesushiteli/vodyanye/energy-1/">
            Energy
        </a> </li>
                                            </ul>
                                        </li>
                                        <li class="has-childs"> <a href="/category/polotencesushiteli/ehlektricheskie/">
            Электрические
        </a> <span class="clicker-arrow"></span>
                                            <ul class="submenu level-2">
                                                <li class=""> <a href="/category/polotencesushiteli/ehlektricheskie/terminus-1/">
            Terminus
        </a> </li>
                                                <li class=""> <a href="/category/polotencesushiteli/ehlektricheskie/domoterm/">
            Domoterm
        </a> </li>
                                                <li class=""> <a href="/category/polotencesushiteli/ehlektricheskie/pax/">
            Pax
        </a> </li>
                                                <li class=""> <a href="/category/polotencesushiteli/ehlektricheskie/energy/">
            Energy
        </a> </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-childs first-level"> <a href="/category/komplektuyushchie/">
            Комплектующие
        </a> <span class="clicker-arrow"></span>
                                    <ul class="submenu level-1">
                                        <li class=""> <a href="/category/komplektuyushchie/sidenya-dlya-unitazov/">
            Сиденья для унитазов
        </a> </li>
                                        <li class=""> <a href="/category/komplektuyushchie/sifony/">
            Сифоны
        </a> </li>
                                        <li class=""> <a href="/category/komplektuyushchie/dushevye-lotki/">
            Душевые лотки
        </a> </li>
                                        <li class=""> <a href="/category/komplektuyushchie/bachki-armatura/">
            Бачки | Арматура
        </a> </li>
                                        <li class=""> <a href="/category/komplektuyushchie/krepezh/">
            Крепеж
        </a> </li>
                                    </ul>
                                </li>
                                <li class="has-childs first-level"> <a href="/category/bide/">
            Биде
        </a> <span class="clicker-arrow"></span>
                                    <ul class="submenu level-1">
                                        <li class=""> <a href="/category/bide/roca-4/">
            Roca
        </a> </li>
                                        <li class=""> <a href="/category/bide/gustavsberg-3/">
            Gustavsberg
        </a> </li>
                                        <li class=""> <a href="/category/bide/ideal-standard-3/">
            Ideal Standard
        </a> </li>
                                        <li class=""> <a href="/category/bide/duravit-2/">
            Duravit
        </a> </li>
                                        <li class=""> <a href="/category/bide/vitra-3/">
            Vitra
        </a> </li>
                                        <li class=""> <a href="/category/bide/laufen-2/">
            Laufen
        </a> </li>
                                        <li class=""> <a href="/category/bide/ifo/">
            Ifo
        </a> </li>
                                        <li class=""> <a href="/category/bide/sanindusa/">
            Sanindusa
        </a> </li>
                                    </ul>
                                </li>
                                <li class="has-childs first-level"> <a href="/category/radiatory/">
            Радиаторы
        </a> <span class="clicker-arrow"></span>
                                    <ul class="submenu level-1">
                                        <li class="has-childs"> <a href="/category/radiatory/bimetallicheskie/">
            Биметаллические
        </a> <span class="clicker-arrow"></span>
                                            <ul class="submenu level-2">
                                                <li class=""> <a href="/category/radiatory/bimetallicheskie/sira/">
            Sira
        </a> </li>
                                                <li class=""> <a href="/category/radiatory/bimetallicheskie/global-1/">
            Global
        </a> </li>
                                            </ul>
                                        </li>
                                        <li class="has-childs"> <a href="/category/radiatory/alyuminievye/">
            Алюминиевые
        </a> <span class="clicker-arrow"></span>
                                            <ul class="submenu level-2">
                                                <li class=""> <a href="/category/radiatory/alyuminievye/global/">
            Global
        </a> </li>
                                            </ul>
                                        </li>
                                        <li class=""> <a href="/category/radiatory/komplektuyushchie-/">
            Комплектующие 
        </a> </li>
                                    </ul>
                                </li>
                                <li class="has-childs first-level"> <a href="/category/pissuary/">
            Писсуары
        </a> <span class="clicker-arrow"></span>
                                    <ul class="submenu level-1">
                                        <li class=""> <a href="/category/pissuary/duravit-3/">
            Duravit
        </a> </li>
                                        <li class=""> <a href="/category/pissuary/vitra-2/">
            Vitra
        </a> </li>
                                        <li class=""> <a href="/category/pissuary/santek-2/">
            Santek
        </a> </li>
                                        <li class=""> <a href="/category/pissuary/gustavsberg/">
            Gustavsberg
        </a> </li>
                                        <li class=""> <a href="/category/pissuary/jika-1/">
            Jika
        </a> </li>
                                        <li class=""> <a href="/category/pissuary/laguraty-1/">
            Laguraty
        </a> </li>
                                    </ul>
                                </li>
                                <li class="has-childs first-level"> <a href="/category/teplyj-pol/">
            Теплый пол
        </a> <span class="clicker-arrow"></span>
                                    <ul class="submenu level-1">
                                        <li class=""> <a href="/category/teplyj-pol/energy-2/">
            Energy
        </a> </li>
                                        <li class="has-childs"> <a href="/category/teplyj-pol/nacionalnyj-komfort/">
            Национальный комфорт
        </a> <span class="clicker-arrow"></span>
                                            <ul class="submenu level-2">
                                                <li class=""> <a href="/category/teplyj-pol/nacionalnyj-komfort/odnozhilnye-maty-/">
            Одножильные маты 
        </a> </li>
                                                <li class=""> <a href="/category/teplyj-pol/nacionalnyj-komfort/dvuhzhilnye-maty-/">
            Двухжильные маты 
        </a> </li>
                                            </ul>
                                        </li>
                                        <li class=""> <a href="/category/teplyj-pol/termoregulyatory/">
            Терморегуляторы
        </a> </li>
                                    </ul>
                                </li>
                                <li class="has-childs first-level"> <a href="/category/konvektory/">
            Конвекторы
        </a> <span class="clicker-arrow"></span>
                                    <ul class="submenu level-1">
                                        <li class=""> <a href="/category/konvektory/thermor/">
            Thermor
        </a> </li>
                                    </ul>
                                </li>
                                <li class="has-childs first-level"> <a href="/category/sushilki-dlya-ruk/">
            Сушилки для рук
        </a> <span class="clicker-arrow"></span>
                                    <ul class="submenu level-1">
                                        <li class=""> <a href="/category/sushilki-dlya-ruk/stiebel-eltron/">
            Stiebel Eltron
        </a> </li>
                                        <li class=""> <a href="/category/sushilki-dlya-ruk/aeg/">
            AEG
        </a> </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div id="js-filter">
                            <div class="filters-wrapper">
                                <div class="filters-mobile  ajax" id="filter-mobile">
                                    <form class="filters-form-wrapper" method="get" action="/category/mebel-dlya-vannoj/" data-loading="/wa-data/public/site/themes/santehniks/img/loading16.gif">
                                        <div class="card filter-param">
                                            <div class="card-header"> <a class="card-link collapsed" data-toggle="collapse" href="#filter-price">Цена<span class="click-arrow"></span></a> </div>
                                            <div id="filter-price" class="collapse">
                                                <div class="card-body">
                                                    <div class="slider"> от
                                                        <input type="text" class="min" name="price_min" placeholder="1600"> до
                                                        <input type="text" class="max" name="price_max" placeholder="128300"> руб. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card filter-param ">
                                            <div class="card-header"> <a class="card-link collapsed" data-toggle="collapse" href="#filter-izdelie-m">Изделие<span class="click-arrow"></span></a> </div>
                                            <div id="filter-izdelie-m" class="collapse">
                                                <div class="card-body">
                                                    <div class="label-box-wrapper filter-izdelie">
                                                        <label class="label-checkbox" for="izdelie-119-m"> комплект мебели
                                                            <input type="checkbox" id="izdelie-119-m" name="izdelie[]" value="119"> <span class="checkmark-checkbox"></span> </label>
                                                        <label class="label-checkbox" for="izdelie-122-m"> пенал
                                                            <input type="checkbox" id="izdelie-122-m" name="izdelie[]" value="122"> <span class="checkmark-checkbox"></span> </label>
                                                        <label class="label-checkbox" for="izdelie-124-m"> тумба с раковиной
                                                            <input type="checkbox" id="izdelie-124-m" name="izdelie[]" value="124"> <span class="checkmark-checkbox"></span> </label>
                                                        <label class="label-checkbox" for="izdelie-125-m"> зеркало
                                                            <input type="checkbox" id="izdelie-125-m" name="izdelie[]" value="125"> <span class="checkmark-checkbox"></span> </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card filter-param ">
                                            <div class="card-header"> <a class="card-link collapsed" data-toggle="collapse" href="#filter-tip_po_ustanovke-m">Тип по установке<span class="click-arrow"></span></a> </div>
                                            <div id="filter-tip_po_ustanovke-m" class="collapse">
                                                <div class="card-body">
                                                    <div class="label-box-wrapper filter-tip_po_ustanovke">
                                                        <label class="label-checkbox" for="tip_po_ustanovke-6-m"> напольный
                                                            <input type="checkbox" id="tip_po_ustanovke-6-m" name="tip_po_ustanovke[]" value="6"> <span class="checkmark-checkbox"></span> </label>
                                                        <label class="label-checkbox" for="tip_po_ustanovke-7-m"> подвесной
                                                            <input type="checkbox" id="tip_po_ustanovke-7-m" name="tip_po_ustanovke[]" value="7"> <span class="checkmark-checkbox"></span> </label>
                                                        <label class="label-checkbox" for="tip_po_ustanovke-15-m"> угловой
                                                            <input type="checkbox" id="tip_po_ustanovke-15-m" name="tip_po_ustanovke[]" value="15"> <span class="checkmark-checkbox"></span> </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card filter-param ">
                                            <div class="card-header"> <a class="card-link collapsed" data-toggle="collapse" href="#filter-shirina_sm-m">Ширина<span class="click-arrow"></span></a> </div>
                                            <div id="filter-shirina_sm-m" class="collapse">
                                                <div class="card-body">
                                                    <div class="label-box-wrapper filter-shirina_sm">
                                                        <label class="label-checkbox" for="shirina_sm-75-m"> 30 см
                                                            <input type="checkbox" id="shirina_sm-75-m" name="shirina_sm[]" value="75"> <span class="checkmark-checkbox"></span> </label>
                                                        <label class="label-checkbox" for="shirina_sm-119-m"> 35 см
                                                            <input type="checkbox" id="shirina_sm-119-m" name="shirina_sm[]" value="119"> <span class="checkmark-checkbox"></span> </label>
                                                        <label class="label-checkbox" for="shirina_sm-60-m"> 40 см
                                                            <input type="checkbox" id="shirina_sm-60-m" name="shirina_sm[]" value="60"> <span class="checkmark-checkbox"></span> </label>
                                                        <label class="label-checkbox" for="shirina_sm-120-m"> 45 см
                                                            <input type="checkbox" id="shirina_sm-120-m" name="shirina_sm[]" value="120"> <span class="checkmark-checkbox"></span> </label>
                                                        <label class="label-checkbox" for="shirina_sm-76-m"> 50 см
                                                            <input type="checkbox" id="shirina_sm-76-m" name="shirina_sm[]" value="76"> <span class="checkmark-checkbox"></span> </label>
                                                        <label class="label-checkbox" for="shirina_sm-129-m"> 55 см
                                                            <input type="checkbox" id="shirina_sm-129-m" name="shirina_sm[]" value="129"> <span class="checkmark-checkbox"></span> </label>
                                                        <label class="label-checkbox" for="shirina_sm-77-m"> 60 см
                                                            <input type="checkbox" id="shirina_sm-77-m" name="shirina_sm[]" value="77"> <span class="checkmark-checkbox"></span> </label>
                                                        <label class="label-checkbox" for="shirina_sm-130-m"> 65 см
                                                            <input type="checkbox" id="shirina_sm-130-m" name="shirina_sm[]" value="130"> <span class="checkmark-checkbox"></span> </label>
                                                        <label class="label-checkbox" for="shirina_sm-61-m"> 70 см
                                                            <input type="checkbox" id="shirina_sm-61-m" name="shirina_sm[]" value="61"> <span class="checkmark-checkbox"></span> </label>
                                                        <label class="label-checkbox" for="shirina_sm-62-m"> 75 см
                                                            <input type="checkbox" id="shirina_sm-62-m" name="shirina_sm[]" value="62"> <span class="checkmark-checkbox"></span> </label>
                                                        <label class="label-checkbox" for="shirina_sm-63-m"> 80 см
                                                            <input type="checkbox" id="shirina_sm-63-m" name="shirina_sm[]" value="63"> <span class="checkmark-checkbox"></span> </label>
                                                        <label class="label-checkbox" for="shirina_sm-64-m"> 85 см
                                                            <input type="checkbox" id="shirina_sm-64-m" name="shirina_sm[]" value="64"> <span class="checkmark-checkbox"></span> </label>
                                                        <label class="label-checkbox" for="shirina_sm-65-m"> 90 см
                                                            <input type="checkbox" id="shirina_sm-65-m" name="shirina_sm[]" value="65"> <span class="checkmark-checkbox"></span> </label>
                                                        <label class="label-checkbox" for="shirina_sm-66-m"> 95 см
                                                            <input type="checkbox" id="shirina_sm-66-m" name="shirina_sm[]" value="66"> <span class="checkmark-checkbox"></span> </label>
                                                        <label class="label-checkbox" for="shirina_sm-67-m"> 100 см
                                                            <input type="checkbox" id="shirina_sm-67-m" name="shirina_sm[]" value="67"> <span class="checkmark-checkbox"></span> </label>
                                                        <label class="label-checkbox" for="shirina_sm-68-m"> 105 см
                                                            <input type="checkbox" id="shirina_sm-68-m" name="shirina_sm[]" value="68"> <span class="checkmark-checkbox"></span> </label>
                                                        <label class="label-checkbox" for="shirina_sm-69-m"> 110 см
                                                            <input type="checkbox" id="shirina_sm-69-m" name="shirina_sm[]" value="69"> <span class="checkmark-checkbox"></span> </label>
                                                        <label class="label-checkbox" for="shirina_sm-70-m"> 120 см
                                                            <input type="checkbox" id="shirina_sm-70-m" name="shirina_sm[]" value="70"> <span class="checkmark-checkbox"></span> </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card filter-param ">
                                            <div class="card-header"> <a class="card-link collapsed" data-toggle="collapse" href="#filter-tsvet-m">Цвет<span class="click-arrow"></span></a> </div>
                                            <div id="filter-tsvet-m" class="collapse">
                                                <div class="card-body">
                                                    <div class="label-box-wrapper filter-tsvet">
                                                        <label class="label-color" for="tsvet-1-m">
                                                            <input type="checkbox" id="tsvet-1-m" name="tsvet[]" value="1"> <span class="checkmark-checkbox-color" style="color:#000000;background-color:#FFFFFF;"></span> </label>
                                                        <label class="label-color" for="tsvet-2-m">
                                                            <input type="checkbox" id="tsvet-2-m" name="tsvet[]" value="2"> <span class="checkmark-checkbox-color" style="color:#000000;background-color:#F5F3C4;"></span> </label>
                                                        <label class="label-color" for="tsvet-3-m">
                                                            <input type="checkbox" id="tsvet-3-m" name="tsvet[]" value="3"> <span class="checkmark-checkbox-color" style="color:#000000;background-color:#722F37;"></span> </label>
                                                        <label class="label-color" for="tsvet-4-m">
                                                            <input type="checkbox" id="tsvet-4-m" name="tsvet[]" value="4"> <span class="checkmark-checkbox-color" style="color:#000000;background-color:#B00000;"></span> </label>
                                                        <label class="label-color" for="tsvet-5-m">
                                                            <input type="checkbox" id="tsvet-5-m" name="tsvet[]" value="5"> <span class="checkmark-checkbox-color" style="color:#000000;background-color:#FF0000;"></span> </label>
                                                        <label class="label-color" for="tsvet-6-m">
                                                            <input type="checkbox" id="tsvet-6-m" name="tsvet[]" value="6"> <span class="checkmark-checkbox-color" style="color:#000000;background-color:#FFFF00;"></span> </label>
                                                        <label class="label-color" for="tsvet-7-m">
                                                            <input type="checkbox" id="tsvet-7-m" name="tsvet[]" value="7"> <span class="checkmark-checkbox-color" style="color:#000000;background-color:#964B00;"></span> </label>
                                                        <label class="label-color" for="tsvet-8-m">
                                                            <input type="checkbox" id="tsvet-8-m" name="tsvet[]" value="8"> <span class="checkmark-checkbox-color" style="color:#000000;background-color:#DA70D6;"></span> </label>
                                                        <label class="label-color" for="tsvet-9-m">
                                                            <input type="checkbox" id="tsvet-9-m" name="tsvet[]" value="9"> <span class="checkmark-checkbox-color" style="color:#FFFFFF;background-color:#000000;"></span> </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card filter-param  last">
                                            <div class="card-header"> <a class="card-link collapsed" data-toggle="collapse" href="#filter-proizvoditel-m">Производитель<span class="click-arrow"></span></a> </div>
                                            <div id="filter-proizvoditel-m" class="collapse">
                                                <div class="card-body">
                                                    <div class="label-box-wrapper filter-proizvoditel">
                                                        <label class="label-checkbox" for="proizvoditel-27-m"> Aqwella
                                                            <input type="checkbox" id="proizvoditel-27-m" name="proizvoditel[]" value="27"> <span class="checkmark-checkbox"></span> </label>
                                                        <label class="label-checkbox" for="proizvoditel-28-m"> Aqwella 5 stars
                                                            <input type="checkbox" id="proizvoditel-28-m" name="proizvoditel[]" value="28"> <span class="checkmark-checkbox"></span> </label>
                                                        <label class="label-checkbox" for="proizvoditel-76-m"> Vod-ok Elite
                                                            <input type="checkbox" id="proizvoditel-76-m" name="proizvoditel[]" value="76"> <span class="checkmark-checkbox"></span> </label>
                                                        <label class="label-checkbox" for="proizvoditel-78-m"> Акватон
                                                            <input type="checkbox" id="proizvoditel-78-m" name="proizvoditel[]" value="78"> <span class="checkmark-checkbox"></span> </label>
                                                        <label class="label-checkbox" for="proizvoditel-79-m"> АСБ-Мебель
                                                            <input type="checkbox" id="proizvoditel-79-m" name="proizvoditel[]" value="79"> <span class="checkmark-checkbox"></span> </label>
                                                        <label class="label-checkbox" for="proizvoditel-80-m"> Водолей (Vod-ok)
                                                            <input type="checkbox" id="proizvoditel-80-m" name="proizvoditel[]" value="80"> <span class="checkmark-checkbox"></span> </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="product-list">
                    <div class="products">
                        <div class="category-toolbar">
                            <div class="products-tools full">
                                <div class="products-sorting">
                                    <div class="dropdown">
                                        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">Название</button>
                                        <div class="dropdown-menu"><a href="/category/mebel-dlya-vannoj/">Новые и популярные</a><a href="?sort=name&amp;order=desc">Название <i class="sort-asc"></i></a><a href="?sort=price&amp;order=asc">Цена</a><a href="?sort=total_sales&amp;order=desc">Хиты продаж</a><a href="?sort=rating&amp;order=desc">Оценка покупателей</a><a href="?sort=create_datetime&amp;order=desc">Дата добавления</a><a href="?sort=stock&amp;order=desc">В наличии</a></div>
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
                                        <a href="{{ $item->url }}" title="{{ $item->title }}"><img itemprop="image" alt="{{ $item->title }}" title="{{ $item->title }}" src="https://santehniks.ru{{ $item->image }}"></a>
                                    </div>
                                    <div class="products-name"><a href="{{ $item->url }}" title="Зеркало Квадро 60 белое  ">{{ $item->title }}</a></div>
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
                        <div class="block lazyloading-paging" data-times="2" data-link-text="Загрузить еще" data-loading-str="Загрузка...">
                            <ul class="menu-h">
                                <li class="selected"><a href="/category/mebel-dlya-vannoj/">1</a></li>
                                <li><a href="/category/mebel-dlya-vannoj/?page=2">2</a></li>
                                <li><span>...</span></li>
                                <li><a href="/category/mebel-dlya-vannoj/?page=14">14</a></li>
                                <li><a class="inline-link" href="/category/mebel-dlya-vannoj/?page=2">→</a></li>
                            </ul>
                        </div>
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
@endsection