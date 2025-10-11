@extends('layouts.main', ['wrapperClass' => 'about'])

@section('title', 'О нас')

@section('content')

  <x-header/>

  <section class="about-hero">
    <div class="container">
      <h2 class="hero-title">Каждая модель SMB – это история,
        в которой переплелись технологии
        и ручная работа, визги восторога, слезы ошибок и бесконечная преданность своему делу
      </h2>
    </div>
  </section>

  <section class="about-blocks">
    <div class="big-container">
      <div class="blocks">
        <div class="box" style="background-image: url(/images/header_hero-bg2.jpg);" >
          <div class="top-item">
            <h4>ПРОИЗВОДСТВО в санкт-петербурге </h4>
          </div>
          <div class="bottom-item">
            <div class="box-title_item">
                                <span class="first-description">
                                    Ул. Коли Томчака 8 (2 этаж) <br> с 08:00—15:00
                                </span>
              <span class="description">
                                    Напиши нам перед визитом и приходи, чтобы влюбиться в свою SMB
                                </span>
            </div>
            <a href="#" class="btn">перейти в чат с менеджером</a>
          </div>
        </div>
        <div class="box"  style="background-image: url(/images/handbag2.png);"  >
          <div class="top-item">
            <h4>Шоурум в москве</h4>
          </div>
          <div class="bottom-item box2">
                            <span class="second-box-title">
                                Ул. Садовая-Сухаревская 15 стр. 1 (2 этаж)11:00—19:00 пн-вс
                            </span>
            <span class="second-box-title">
                                Заходи в гости, посмотреть, потрогать, влюбиться. Мы делаем это для тебя </span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="smb-newsletter-section">
    <div class="smb-newsletter-container">
      <h1 class="smb-newsletter-title">СЕКРЕТ SMB Магазин</h1>
      <p class="smb-newsletter-description">Секретные скидки, еженедельные новости,</p>
      <p class="smb-newsletter-description">письма от основателя бренда</p>
      <button class="smb-subscribe-btn follow" id="smbSubscribeBtn">ПОДПИСАТЬСЯ</button>
    </div>
  </section>

  <x-footer/>
@endsection
