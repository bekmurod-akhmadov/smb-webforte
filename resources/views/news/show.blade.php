@extends('layouts.main', ['wrapperClass' => 'blog'])
@section('title', 'Название публикации')

@section('content')

<x-marquee />

<x-header />

<section class="blog_about">
            <div class="container">
                <!-- Breadcrumbs -->
                <div class="breadcrumb">
                    <a href="{{ route('home') }}">Главная</a>
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="mask0_758_40483" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="12" height="12">
                            <rect width="12" height="12" fill="#D9D9D9"></rect>
                        </mask>
                        <g mask="url(#mask0_758_40483)">
                            <path d="M4.00845 10.8256L3.29883 10.116L7.41608 5.99875L3.29883 1.8815L4.00845 1.17188L8.83533 5.99875L4.00845 10.8256Z" fill="#858585"></path>
                        </g>
                    </svg>
                    <a href="{{ route('news.index') }}">Блог</a>
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="mask0_758_40483" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="12" height="12">
                            <rect width="12" height="12" fill="#D9D9D9"></rect>
                        </mask>
                        <g mask="url(#mask0_758_40483)">
                            <path d="M4.00845 10.8256L3.29883 10.116L7.41608 5.99875L3.29883 1.8815L4.00845 1.17188L8.83533 5.99875L4.00845 10.8256Z" fill="#858585"></path>
                        </g>
                    </svg>

                    <a class="active">Название публикации</a>


                </div>

                <div class="blog-layout">
                    <!-- Sidebar -->
                    <aside class="sidebar article">
                        <h1 class="sidebar-title">Название публикации</h1>
                        <!-- Main Content -->
                        <ul class="mobile-sidebar-menu">
                            <li>09.09.2025</li>
                        </ul>
                        <ul class="sidebar-menu">
                            <li>09.09.2025</li>
                        </ul>
                    </aside>


                    <div class="main-content article">
                        <!-- Blog Grid -->
                        <div class="blog-contend-card article_text-block">
                            <h1>Заголовок абзаца</h1>
                            <p class="article_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus venenatis varius
                                sodales. Fusce scelerisque faucibus ante, et malesuada metus malesuada a. Maecenas id
                                quam sed mi scelerisque commodo quis in justo. Cras ornare, neque eget eleifend
                                suscipit, massa tellus consequat ante, in volutpat ex metus consequat mi. </p>
                        </div>
                        <div class="blog-grid article">
                            <a href="#" class="blog-card">
                                <div class="blog-image"></div>
                            </a>

                            <a href="#" class="blog-card">
                                <div class="blog-image"></div>
                            </a>

                        </div>
                        <div class="blog-contend2-card">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus venenatis varius
                                sodales. Fusce scelerisque faucibus ante, et malesuada metus malesuada a. Maecenas id
                                quam sed mi scelerisque commodo quis in justo. Cras ornare, neque eget eleifend
                                suscipit, massa tellus consequat ante, in volutpat ex metus consequat mi.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus venenatis varius
                                sodales. Fusce scelerisque faucibus ante, et malesuada metus malesuada a. Maecenas id
                                quam sed mi scelerisque commodo quis in justo. Cras ornare, neque eget eleifend
                                suscipit, massa tellus consequat ante, in volutpat ex metus consequat mi. <br> Lorem
                                ipsum
                                dolor sit amet, consectetur adipiscing elit. Phasellus venenatis varius sodales. Fusce
                                scelerisque faucibus ante, et malesuada metus malesuada a. Maecenas id quam sed mi
                                scelerisque commodo quis in justo. Cras ornare, neque eget eleifend suscipit, massa
                                tellus consequat ante, in volutpat ex metus consequat mi. </p>
                        </div>
                        <div class="blog-grid article">
                            <div class="blog-grid_content-card">
                                <h1>Заголовок абзаца</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus venenatis varius
                                    sodales. Fusce scelerisque faucibus ante, et malesuada metus malesuada a. Maecenas
                                    id
                                    quam sed mi scelerisque commodo quis in justo. Cras ornare, neque eget eleifend
                                    suscipit, massa tellus consequat ante, in volutpat ex metus consequat mi. </p>
                            </div>

                            <a href="#" class="blog-card end_blog">
                                <div class="blog-image"></div>
                            </a>

                        </div>
                        <div class="swiper article_slider swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                            <!-- Wrapper -->
                            <div class="swiper-wrapper" id="swiper-wrapper-a1848143c50af9fc" aria-live="off">
                                <!-- Slaydlar -->
                                <div class="swiper-slide" data-swiper-slide-index="0">
                                    <img src="{{ asset('images/handbag1.png') }}" alt="img">
                                </div>
                                <div class="swiper-slide" data-swiper-slide-index="1">
                                    <img src="{{ asset('images/handbag2.png') }}" alt="img">
                                </div>
                                <div class="swiper-slide" data-swiper-slide-index="2">
                                    <img src="{{ asset('images/handbag3.png') }}" alt="img">
                                </div>
                            </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                        <!--  -->
                        <h3 class="end_blog-title">Еще</h3>
                        <div class="blog-grid article-end-grid">
                            <a href="{{ route('news.show', ['id' => 1]) }}" class="blog-card">
                                <div class="blog-image"></div>
                                <h3 class="blog-title">НАЗВАНИЕ ПУБЛИКАЦИИ</h3>
                                <div class="blog-date">09.09.2025</div>
                            </a>

                            <a href="{{ route('news.show', ['id' => 2]) }}" class="blog-card">
                                <div class="blog-image"></div>
                                <h3 class="blog-title">НАЗВАНИЕ ПУБЛИКАЦИИ</h3>
                                <div class="blog-date">09.09.2025</div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </section>

<x-footer />
@endsection
