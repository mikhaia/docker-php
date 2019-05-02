<?php
    $links = DB::table('categories')->get();
    $cats = [];
    foreach($links as $cat)
    {
        $cats[$cat->parent][$cat->id] =  $cat;
    }

    function sidebar($cats, $id, $depth = 1) {
        if(isset($cats[$id]))
        {
            echo '<span class="clicker-arrow"></span><ul class="submenu level-'.$depth.'">';
            foreach($cats[$id] as $li)
            {
                echo '<li><a href="'.$li->url.'">'.$li->title.'</a>'.sidebar($cats, $li->id, $depth+1).'</li>';
            }
            echo '</ul>';
        }
    }
?>

<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="metismenu" id="sidebar-cats">
            @foreach($cats[0] as $li)
                <li class="{{ isset($cats[$li->id])?'has-childs':'' }} first-level"><a href="{{ $li->url }}">{{ $li->title }}</a>
                    {{ sidebar($cats, $li->id) }}
                </li>
            @endforeach
            {{--
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
            <li class="has-childs first-level"><a href="/category/mebel-dlya-vannoj/">Мебель для ванной</a><span class="clicker-arrow"></span>
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
            --}}
        </ul>
    </nav>
</div>