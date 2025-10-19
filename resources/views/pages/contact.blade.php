@extends('layouts.main', ['wrapperClass' => 'contact'])

@section('title', 'Контакты')

@section('content')

<x-marquee />

<x-header />

<section class="contact-about">
            <div class="container">
                <div class="breadcrumb">
                    <a href="{{route('home')}}">Главная</a>
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

                    <a href="{{route('contact')}}" class="active">контакты</a>

                </div>

                <h1 class="section-title">СВЯЗЬ С SMB</h1>
                <div class="main-content">

                    <div class="right-section">
                        <div class="hero-image">
                            <img src="/images/contact_about.png" alt="Woman with handbag">

                            <!-- <div class="image-overlay">
                                <div class="find-us-title">ВЫ МОЖЕТЕ НАС НАЙТИ</div>
                                <div class="social-links">
                                    <a href="#" class="social-link telegram" onclick="openTelegram()">TELEGRAM</a>
                                    <a href="#" class="social-link instagram" onclick="openInstagram()">INSTAGRAM*</a>
                                </div>
                                <div class="disclaimer">
                                    *<span class="extremist-note">Компания мета является экстремисткой<br>на территории
                                        Российской Федерации</span>
                                </div>
                            </div> -->
                        </div>
                    </div>

                    <div class="left-section">

                        <div class="contact-cards">
                            <div class="contact-card">
                                <div class="contact-card-main_item">
                                    <div class="card-icon">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect width="32" height="32" rx="16" fill="#C2E028" />
                                            <path
                                                d="M13.333 16.0013V13.3346C13.333 12.6274 13.614 11.9491 14.1141 11.449C14.6142 10.9489 15.2924 10.668 15.9997 10.668C16.7069 10.668 17.3852 10.9489 17.8853 11.449C18.3854 11.9491 18.6663 12.6274 18.6663 13.3346V16.0013"
                                                stroke="#272727" stroke-width="2" stroke-linecap="round" />
                                            <path
                                                d="M10.4627 16.4453C10.5594 15.2847 10.6081 14.7047 10.9907 14.352C11.3734 13.9993 11.9561 14 13.1207 14H18.8801C20.0441 14 20.6267 14 21.0094 14.352C21.3921 14.704 21.4407 15.2847 21.5374 16.4453L21.8801 20.556C21.9361 21.2313 21.9641 21.5693 21.7667 21.7847C21.5681 22 21.2294 22 20.5507 22H11.4494C10.7714 22 10.4321 22 10.2341 21.7847C10.0361 21.5693 10.0641 21.2313 10.1207 20.556L10.4627 16.4453Z"
                                                fill="#272727" />
                                        </svg>
                                    </div>
                                    <div class="card-title">МЕНЕДЖЕР<br>ИНТЕРНЕТ-МАГАЗИНА</div>
                                </div>
                                <div class="card-phone">
                                    <a href="tel:+79810436190">+7 (981) 043-61-90</a>
                                </div>
                                <div class="card-schedule">Пн-Пт 10:00 до 22:00</div>
                                <div class="card-email">
                                    <a href="mailto:smb.russia@gmail.com">smb.russia@gmail.com</a>
                                </div>
                            </div>

                            <div class="contact-card">
                                <div class="contact-card-main_item">
                                    <div class="card-icon"><svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect width="32" height="32" rx="16" fill="#C2E028" />
                                            <path
                                                d="M13.333 16.0013V13.3346C13.333 12.6274 13.614 11.9491 14.1141 11.449C14.6142 10.9489 15.2924 10.668 15.9997 10.668C16.7069 10.668 17.3852 10.9489 17.8853 11.449C18.3854 11.9491 18.6663 12.6274 18.6663 13.3346V16.0013"
                                                stroke="#272727" stroke-width="2" stroke-linecap="round" />
                                            <path
                                                d="M10.4627 16.4453C10.5594 15.2847 10.6081 14.7047 10.9907 14.352C11.3734 13.9993 11.9561 14 13.1207 14H18.8801C20.0441 14 20.6267 14 21.0094 14.352C21.3921 14.704 21.4407 15.2847 21.5374 16.4453L21.8801 20.556C21.9361 21.2313 21.9641 21.5693 21.7667 21.7847C21.5681 22 21.2294 22 20.5507 22H11.4494C10.7714 22 10.4321 22 10.2341 21.7847C10.0361 21.5693 10.0641 21.2313 10.1207 20.556L10.4627 16.4453Z"
                                                fill="#272727" />
                                        </svg>
                                    </div>
                                    <div class="card-title">WA <br> МЕНЕДЖЕРЫ</div>
                                </div>
                                <div class="card-phone">
                                    <a href="tel:+79291555198">+7 (929) 155 51 98</a>
                                </div>
                                <div class="card-schedule">Ежедневно 10:00 до 22:00</div>
                                <div class="card-email">
                                    <a href="mailto:smb.russia@gmail.com">smb.russia@gmail.com</a>
                                </div>
                            </div>

                            <div class="contact-card">
                                <div class="contact-card-main_item">
                                    <div class="card-icon"><svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect width="32" height="32" rx="16" fill="#C2E028" />
                                            <path
                                                d="M13.333 16.0013V13.3346C13.333 12.6274 13.614 11.9491 14.1141 11.449C14.6142 10.9489 15.2924 10.668 15.9997 10.668C16.7069 10.668 17.3852 10.9489 17.8853 11.449C18.3854 11.9491 18.6663 12.6274 18.6663 13.3346V16.0013"
                                                stroke="#272727" stroke-width="2" stroke-linecap="round" />
                                            <path
                                                d="M10.4627 16.4453C10.5594 15.2847 10.6081 14.7047 10.9907 14.352C11.3734 13.9993 11.9561 14 13.1207 14H18.8801C20.0441 14 20.6267 14 21.0094 14.352C21.3921 14.704 21.4407 15.2847 21.5374 16.4453L21.8801 20.556C21.9361 21.2313 21.9641 21.5693 21.7667 21.7847C21.5681 22 21.2294 22 20.5507 22H11.4494C10.7714 22 10.4321 22 10.2341 21.7847C10.0361 21.5693 10.0641 21.2313 10.1207 20.556L10.4627 16.4453Z"
                                                fill="#272727" />
                                        </svg>
                                    </div>
                                    <div class="card-title">РЕАЛИЗАЦИЯ, СОТРУДНИЧЕСТВО,<br>ОПТОВЫЕ ЗАКУПКИ</div>
                                </div>
                                <div class="item">
                                    <div class="card-phone">
                                        <a href="tel:+79214422839">+7 (921) 442-28-39</a>
                                    </div>
                                    <div class="card-contact">Рудая Елена</div>
                                </div>
                                <div class="card-email">
                                    <a href="mailto:smb.russia@gmail.com">smb.russia@gmail.com</a>
                                </div>
                            </div>
                        </div>

                        <div class="map-section">
                            <div class="map-container">
                                <iframe class="map-mobile map-light-style"
                                    src="https://yandex.com/map-widget/v1/?ll=30.325228%2C59.891164&z=16.69&pt=30.325228,59.891164,pm2rdm"
                                    width="100%" height="450" frameborder="0" allowfullscreen="true">
                                </iframe>
                            </div>
                            <div class="map-info">
                                <div class="address-text">

                                    <div class="main-item">
                                        <div class="location-icon">
                                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="32" height="32" rx="16" fill="#C2E028" />
                                                <path
                                                    d="M15.5 15.6C14.979 15.6 14.4794 15.3893 14.111 15.0142C13.7427 14.6391 13.5357 14.1304 13.5357 13.6C13.5357 13.0696 13.7427 12.5609 14.111 12.1858C14.4794 11.8107 14.979 11.6 15.5 11.6C16.021 11.6 16.5206 11.8107 16.889 12.1858C17.2573 12.5609 17.4643 13.0696 17.4643 13.6C17.4643 13.8626 17.4135 14.1227 17.3148 14.3654C17.216 14.608 17.0714 14.8285 16.889 15.0142C16.7066 15.1999 16.49 15.3472 16.2517 15.4478C16.0134 15.5483 15.758 15.6 15.5 15.6ZM15.5 8C14.0413 8 12.6424 8.59 11.6109 9.6402C10.5795 10.6904 10 12.1148 10 13.6C10 17.8 15.5 24 15.5 24C15.5 24 21 17.8 21 13.6C21 12.1148 20.4205 10.6904 19.3891 9.6402C18.3576 8.59 16.9587 8 15.5 8Z"
                                                    fill="#272727" />
                                            </svg>
                                        </div>
                                        <div class="address-details">Место силы и любви к деталям. <br> Загляни на
                                            производство — <br> потрогать примерить, влюбиться
                                        </div>
                                    </div>
                                    <div class="address-main">г. Санкт–Петербург  ул. Коли Томчака, 8</div>
                                    <a href="#" class="btn">записаться на посещение</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

<x-footer />
@endsection