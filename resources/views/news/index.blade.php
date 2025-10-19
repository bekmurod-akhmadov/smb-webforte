@extends('layouts.main', ['wrapperClass' => 'blog'])


@section('title', 'Блог')

@section('content')

<x-marquee />

<x-header />

<!-- =============================== -->
<section class="blog_about">
    <div class="container">
        <!-- Breadcrumbs -->
        <div class="breadcrumb">
            <a href="{{ route('home') }}">Главная</a>
            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <mask id="mask0_758_40483" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                    width="12" height="12">
                    <rect width="12" height="12" fill="#D9D9D9" />
                </mask>
                <g mask="url(#mask0_758_40483)">
                    <path
                        d="M4.00845 10.8256L3.29883 10.116L7.41608 5.99875L3.29883 1.8815L4.00845 1.17188L8.83533 5.99875L4.00845 10.8256Z"
                        fill="#858585" />
                </g>
            </svg>

            <a href="{{ route('news.index') }}" class="active">Блог</a>
        </div>

        <div class="blog-layout">
            <!-- Sidebar -->
            <aside class="sidebar">
                <h1 class="sidebar-title">BAG STAGE</h1>
                <ul class="sidebar-menu">
                    <li>
                        <a href="{{ route('news.index') }}" class="blog-menu_active">
                            ВСЕ ПУБЛИКАЦИИ <span class="count">(12)</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('news.index', ['category' => 'founder']) }}">
                            ВЫБОР ФАУНДЕРА И ДРУЗЕЙ <span class="count">(4)</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('news.index', ['category' => 'lifestyle']) }}">
                            ЛАЙФ-СТАЙЛ <span class="count">(8)</span>
                        </a>
                    </li>
                </ul>
            </aside>

            <!-- Main Content -->
            <ul class="mobile-sidebar-menu">
                <li>
                    <a href="{{ route('news.index') }}" class="blog-menu_active">
                        ВСЕ ПУБЛИКАЦИИ <span class="count">(12)</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('news.index', ['category' => 'founder']) }}">
                        ВЫБОР ФАУНДЕРА И ДРУЗЕЙ <span class="count">(4)</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('news.index', ['category' => 'lifestyle']) }}">
                        ЛАЙФ-СТАЙЛ <span class="count">(8)</span>
                    </a>
                </li>
            </ul>

            <main class="main-content">
                <!-- Blog Grid -->
                <div class="blog-grid">
                    @for ($i = 1; $i <= 6; $i++)
                    <a href="{{ route('news.show', ['id' => $i]) }}" class="blog-card">
                        <div class="blog-image"></div>
                        <h3 class="blog-title">НАЗВАНИЕ ПУБЛИКАЦИИ</h3>
                        <div class="blog-date">09.09.2025</div>
                    </a>
                    @endfor
                </div>

                <div class="end_item">
                    <!-- CTA Banner -->
                    <div class="cta-banner" style="background-image: url('/images/blog-img.png')">
                        <div class="cta-content">
                            <h2 class="cta-title">Еще больше стильного контента смотри в Telegram</h2>
                            <a href="#" class="cta-button">Перейти на канал</a>
                        </div>
                        <div class="cta-image"></div>
                    </div>

                    <!-- Pagination -->
                    <div class="pagination">
                        <div class="item">
                            <a href="#" class="pagination-item active">1</a>
                            <a href="#" class="pagination-item">2</a>
                            <a href="#" class="pagination-item">3</a>
                            <a href="#" class="pagination-dots">...</a>
                            <a href="#" class="pagination-item">6</a>
                        </div>
                        <a href="#" class="pagination-arrow">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="24" height="24" fill="white" />
                                <mask id="mask0_3245_1410" style="mask-type:alpha" maskUnits="userSpaceOnUse"
                                    x="3" y="3" width="18" height="18">
                                    <rect x="21" y="21" width="18" height="18" transform="rotate(-180 21 21)"
                                        fill="#D9D9D9" />
                                </mask>
                                <g mask="url(#mask0_3245_1410)">
                                    <path
                                        d="M9.00015 5.01884L15.981 11.9997L9.00015 18.9805L8.20252 18.1828L14.3857 11.9997L8.20252 5.81647L9.00015 5.01884Z"
                                        fill="#272727" />
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
            </main>
        </div>
    </div>
</section>
<!-- Blog About Section -->

<x-footer />
@endsection