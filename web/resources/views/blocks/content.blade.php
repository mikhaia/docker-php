<?php
    $fields = [
        'name' => [
            'type' => 'wysiwyg'
        ]
    ];
?>
<div class="inner" role="main">
    
</div>

<section class="page-page">
    <div class="container">
        <div class="header">
            <div class="breadcrumbs">
                <ul class="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a href="/" itemprop="item"><span itemprop="name">Главная</span><meta itemprop="position" content="1"></a>
                    </li>
                    <li class="active">
                        <span>{{ $page->title }}</span>
                    </li>
                </ul>
            </div>
            <h1 class="title page-name">{{ $page->title }}</h1>
        </div>
        <div class="" role="main">
            {!! $value['name'] !!}
        </div>
    </div>
</section>