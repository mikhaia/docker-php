@extends('layouts.main')

@section('blocks')
<section class="blog-main">
    <div class="container">
        <div class="header">
            <div class="breadcrumbs">
                <ul class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="/" itemprop="item"><span itemprop="name">Главная</span><meta itemprop="position" content="1"></a></li>
                    <li class="active"><span>Статьи</span></li>
                </ul>
            </div>
            <h1 class="title page-name">Статьи</h1></div>
        <div class="inner" itemscope itemtype="http://schema.org/WebPage">
            @include('catalog_sidebar')
            <div class="main">
                <div class="posts-inner">
                    @foreach($items as $item)
                        <div class="posts-item" itemprop="blogPosts" itemscope itemtype="http://schema.org/BlogPosting">
                            <div class="posts-image">
                                <a href="{{ route('articles.show', $item->url) }}"><img src="{{ $item->image }}" alt="{{ $item->title }}"></a>
                            </div>
                            <div class="posts-info">
                                <div class="date">{{ $item->date }}</div>
                                <div class="name"><a href="{{ route('articles.show', $item->url) }}" itemprop="url">{{ $item->title }}</a></div>
                                <div class="info">{!! str_limit(strip_tags($item->content), 200) !!}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection