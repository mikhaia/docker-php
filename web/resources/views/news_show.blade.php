@extends('layouts.main')

@section('blocks')
        <section class="blog-single" itemscope itemtype="http://schema.org/BlogPosting">
            <meta itemprop="datePublished" content="2019-02-13T11:58">
            <div class="container">
                <div class="header">
                    <div class="breadcrumbs">
                        <ul class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="/" itemprop="item"><span itemprop="name">Главная</span><meta itemprop="position" content="1"></a></li>
                            <li class="active"><span>Новости</span></li>
                        </ul>
                    </div>
                    <h1 class="title page-name"><span itemprop="name">{{ $item->title }}</span></h1></div>
                <div class="inner">
                    @include('catalog_sidebar')
                    <div class="main">
                        <div class="date">{{ substr($item->date, 0, 10) }}</div>
                        <div class="text">
                            {!! $item->content !!}
                            <figure><img src="{{ $item->image }}" alt="{{ $item->title }}" title="{{ $item->title }}"></figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection