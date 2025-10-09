@extends('layouts.main')

@section('title', 'Главная')

@section('content')

  <x-marquee />

  <x-header/>

  <!-- =================================================================buyer  modal -->
  <div class="buyer_modal">
    <!-- Cart Modal -->
    <div class="cart-modal-overlay" id="cartModal">
      <div class="cart-modal">
        <!-- Header -->
        <div class="cart-header">
          <div class="cart-title">
            МОЯ КОРЗИНА <span class="cart-count">(3)</span>
          </div>
          <button class="close-cart" onclick="closeCartModal()">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                 xmlns="http://www.w3.org/2000/svg">
              <mask id="mask0_687_58555" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                    y="0" width="24" height="24">
                <rect width="24" height="24" fill="#D9D9D9" />
              </mask>
              <g mask="url(#mask0_687_58555)">
                <path
                  d="M6.39916 18.3108L5.69141 17.6031L11.2914 12.0031L5.69141 6.40306L6.39916 5.69531L11.9992 11.2953L17.5992 5.69531L18.3069 6.40306L12.7069 12.0031L18.3069 17.6031L17.5992 18.3108L11.9992 12.7108L6.39916 18.3108Z"
                  fill="#1C1B1F" />
              </g>
            </svg>

          </button>
        </div>

        <!-- Content with items -->
        <div class="cart-content" id="cartContent">
          <!-- Cart Item 1 -->
          <div class="cart-item">
            <div class="item-favorite">
              <svg viewBox="0 0 24 24" onclick="heart_icon(this)">
                <path
                  d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                </path>
              </svg>
            </div>
            <div class="item-image">
              <img src="/images/karzinka-modal_img.png" alt="Кожаная сумка">
            </div>
            <div class="item-details">
              <div class="item-name">НАЗВАНИЕ ТОВАРА</div>
              <div class="item-specs">
                <div class="item-spec">Цвет: Коричневый</div>
                <div class="item-spec">Материал: Кожа</div>
                <div class="item-spec">Размер: 36x25x18 (М)</div>
                <div class="item-price">
                  <div class="item-price-old">29 900 ₽</div>
                  <div class="item-price-current">20 400 ₽</div>
                </div>
              </div>
              <div class="item-bottom">
                <button class="item-remove">УДАЛИТЬ</button>

              </div>
            </div>
          </div>
          <!--  -->
          <div class="cart-item">
            <div class="item-favorite">
              <svg viewBox="0 0 24 24" onclick="heart_icon(this)">
                <path
                  d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                </path>
              </svg>
            </div>
            <div class="item-image">
              <img src="/images/karzinka-modal_img.png" alt="Кожаная сумка">
            </div>
            <div class="item-details">
              <div class="item-name">НАЗВАНИЕ ТОВАРА</div>
              <div class="item-specs">
                <div class="item-spec">Цвет: Коричневый</div>
                <div class="item-spec">Материал: Кожа</div>
                <div class="item-spec">Размер: 36x25x18 (М)</div>
                <div class="item-price">
                  <div class="item-price-old">29 900 ₽</div>
                  <div class="item-price-current">20 400 ₽</div>
                </div>
              </div>
              <div class="item-bottom">
                <button class="item-remove">УДАЛИТЬ</button>

              </div>
            </div>
          </div>

          <!-- Cart Item  -->
          <div class="cart-item">
            <div class="item-favorite">
              <svg viewBox="0 0 24 24" onclick="heart_icon(this)">
                <path
                  d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                </path>
              </svg>
            </div>
            <div class="item-image">
              <img src="/images/karzinka-modal_img.png" alt="Кожаная сумка">
            </div>
            <div class="item-details">
              <div class="item-name">НАЗВАНИЕ ТОВАРА</div>
              <div class="item-specs">
                <div class="item-spec">Цвет: Коричневый</div>
                <div class="item-spec">Материал: Кожа</div>
                <div class="item-spec">Размер: 36x25x18 (М)</div>
                <div class="item-price">
                  <div class="item-price-old">29 900 ₽</div>
                  <div class="item-price-current">20 400 ₽</div>
                </div>
              </div>
              <div class="item-bottom">
                <button class="item-remove">УДАЛИТЬ</button>

              </div>
            </div>
          </div>

          <!-- Cart Item  -->
          <div class="cart-item">
            <div class="item-favorite">
              <svg onclick="heart_icon(this)" viewBox="0 0 24 24">
                <path
                  d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                </path>
              </svg>
            </div>
            <div class="item-image">
              <img src="/images/karzinka-modal_img.png" alt="Кожаная сумка">
            </div>
            <div class="item-details">
              <div class="item-name">НАЗВАНИЕ ТОВАРА</div>
              <div class="item-specs">
                <div class="item-spec">Цвет: Коричневый</div>
                <div class="item-spec">Материал: Кожа</div>
                <div class="item-spec">Размер: 36x25x18 (М)</div>
                <div class="item-price">
                  <div class="item-price-old">29 900 ₽</div>
                  <div class="item-price-current">20 400 ₽</div>
                </div>
              </div>
              <div class="item-bottom">
                <button class="item-remove">УДАЛИТЬ</button>

              </div>
            </div>
          </div>
          <!-- Cart Item  -->
          <div class="cart-item">
            <div class="item-favorite">
              <svg onclick="heart_icon(this)" viewBox="0 0 24 24">
                <path
                  d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                </path>
              </svg>
            </div>
            <div class="item-image">
              <img src="/images/karzinka-modal_img.png" alt="Кожаная сумка">
            </div>
            <div class="item-details">
              <div class="item-name">НАЗВАНИЕ ТОВАРА</div>
              <div class="item-specs">
                <div class="item-spec">Цвет: Коричневый</div>
                <div class="item-spec">Материал: Кожа</div>
                <div class="item-spec">Размер: 36x25x18 (М)</div>
                <div class="item-price">
                  <div class="item-price-old">29 900 ₽</div>
                  <div class="item-price-current">20 400 ₽</div>
                </div>
              </div>
              <div class="item-bottom">
                <button class="item-remove">УДАЛИТЬ</button>

              </div>
            </div>
          </div>
        </div>

        <!-- Footer -->
        <div class="cart-footer">
          <div class="cart-total">
            <div class="cart-total-label">ИТОГО</div>
            <div class="cart-total-price">40 800 ₽</div>
          </div>
          <div class="cart-actions">
            <button class="cart-btn cart-btn-secondary">ПРОДОЛЖИТЬ ПОКУПКИ</button>
            <button class="cart-btn cart-btn-primary">КУПИТЬ</button>
          </div>
        </div>

        <!-- Empty cart state (hidden by default) -->
        <div class="empty-cart" id="emptyCart" style="display: none;">
          <div class="empty-cart-title">КОРЗИНА ПУСТА</div>
          <div class="empty-cart-text">
            Пора добавить немного стиля.<br>
            Подберем классную сумку?
          </div>
          <button class="empty-cart-btn">В КАТАЛОГ</button>
        </div>
      </div>
    </div>
  </div>
  <!-- =================================================================buyer  modal -->

  <!-- Hero Slider -->
  <section class="hero-slider">
    <div class="swiper heroSwiper">
      <div class="swiper-wrapper">
        <!-- Slide 1 - Brown Bag -->
        <div class="swiper-slide brown-slide" style="background: url(/images/header_hero-bg1.png);background-repeat: no-repeat;
            background-position: center;
            background-size: cover;">
          <div class="container">
            <div class="row align-items-center min-vh-100">
              <div class="col-12">
                <div class="slide-content">
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 2 - Pink Bag -->
        <div class="swiper-slide pink-slide" style="background: url(/images/header_hero-bg2.jpg);background-repeat: no-repeat;
            background-position: center;
            background-size: cover;">
          <div class="container">
            <div class="row align-items-center min-vh-100">
              <div class="col-12">
                <div class="slide-content">
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 3 - Lifestyle -->
        <div class="swiper-slide lifestyle-slide" style="background: url(/images/header_hero-bg1.png);background-repeat: no-repeat;
            background-position: center;
            background-size: cover;">
          <div class="container">
            <div class="row align-items-center min-vh-100">
              <div class="col-12">
                <div class="slide-content">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Navigation -->
      <div class="swiper-button-next">
        <i class="fas fa-chevron-right"></i>
      </div>
      <div class="swiper-button-prev">
        <i class="fas fa-chevron-left"></i>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </section>

  <!-- =================================================header end========================================== -->
  <section class="collection-section">
    <div class="container">
      <h2 class="section-title">НОВОЕ КОЛЛЕКЦИЯ</h2>

      <div class="products-grid">
        <!-- Product 1 -->
        <div class="product-card">
          <a href="product.html" class="product-image">
            <img src="/images/section_bg-bag1.png" alt="Mini Rosa Handbag">
          </a>
          <div class="heart-icon" onclick="toggleHeart(this)">
            <svg viewBox="0 0 24 24">
              <path
                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
            </svg>
          </div>
          <div class="product-info">
            <div class="product-brand">MINI ROSA</div>
            <div class="product-price">29 000 ₽</div>
            <div class="color-options">
              <span class="color-option" style="background-color: #5E4F37;"></span>
              <span class="color-option" style="background-color: #A86738;"></span>
              <span class="color-option" style="background-color: #000000;"></span>
              <span class="color-option" style="background-color: #DEDEDE;"></span>
              <span class="color-option" style="background-color: #FF5733;"></span>
              <span class="color-option" style="background-color: #33FF57;"></span>
              <span class="color-option" style="background-color: #3357FF;"></span>
              <span class="color-option" style="background-color: #F3FF33;"></span>
              <span class="color-option" style="background-color: #FF33F3;"></span>
              <span class="color-option" style="background-color: #33FFF3;"></span>
              <span class="color-option" style="background-color: #FF9933;"></span>
              <span class="color-option" style="background-color: #9933FF;"></span>
              <span class="color-option" style="background-color: #33FF99;"></span>
              <span class="color-option" style="background-color: #FF3399;"></span>
              <span class="color-option" style="background-color: #99FF33;"></span>
            </div>
          </div>
        </div>

        <!-- Product 2 -->
        <div class="product-card">
          <a href="product.html" class="product-image">

            <img src="/images/section_bg-bag2.png" alt="Mini Rosa Handbag Black">
          </a>
          <div class="heart-icon" onclick="toggleHeart(this)">
            <svg viewBox="0 0 24 24">
              <path
                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
            </svg>
          </div>
          <div class="product-info">
            <div class="product-brand">MINI ROSA</div>
            <div class="product-price">29 000 ₽</div>
            <div class="color-options">
              <span class="color-option" style="background-color: #5E4F37;"></span>
              <span class="color-option" style="background-color: #A86738;"></span>
              <span class="color-option" style="background-color: #000000;"></span>
              <span class="color-option" style="background-color: #DEDEDE;"></span>
              <span class="color-option" style="background-color: #FF5733;"></span>
              <span class="color-option" style="background-color: #33FF57;"></span>
              <span class="color-option" style="background-color: #3357FF;"></span>
              <span class="color-option" style="background-color: #F3FF33;"></span>
              <span class="color-option" style="background-color: #FF33F3;"></span>
              <span class="color-option" style="background-color: #33FFF3;"></span>
              <span class="color-option" style="background-color: #FF9933;"></span>
              <span class="color-option" style="background-color: #9933FF;"></span>
              <span class="color-option" style="background-color: #33FF99;"></span>
              <span class="color-option" style="background-color: #FF3399;"></span>
              <span class="color-option" style="background-color: #99FF33;"></span>
            </div>
          </div>
        </div>

        <!-- Product 3 -->
        <div class="product-card">
          <a href="product.html" class="product-image">

            <img src="/images/section_bg-bag3.png" alt="Moss Handbag">
          </a>
          <div class="heart-icon" onclick="toggleHeart(this)">
            <svg viewBox="0 0 24 24">
              <path
                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
            </svg>
          </div>
          <div class="product-info">
            <div class="product-brand">MOSS</div>
            <div class="product-price">29 000 ₽</div>
            <div class="color-options">
              <span class="color-option" style="background-color: #5E4F37;"></span>
              <span class="color-option" style="background-color: #A86738;"></span>
              <span class="color-option" style="background-color: #000000;"></span>
              <span class="color-option" style="background-color: #DEDEDE;"></span>
              <span class="color-option" style="background-color: #FF5733;"></span>
              <span class="color-option" style="background-color: #33FF57;"></span>
              <span class="color-option" style="background-color: #3357FF;"></span>
              <span class="color-option" style="background-color: #F3FF33;"></span>
              <span class="color-option" style="background-color: #FF33F3;"></span>
              <span class="color-option" style="background-color: #33FFF3;"></span>
              <span class="color-option" style="background-color: #FF9933;"></span>
              <span class="color-option" style="background-color: #9933FF;"></span>
              <span class="color-option" style="background-color: #33FF99;"></span>
              <span class="color-option" style="background-color: #FF3399;"></span>
              <span class="color-option" style="background-color: #99FF33;"></span>
            </div>
          </div>
        </div>

        <!-- Product 4 -->
        <div class="product-card">
          <a href="product.html" class="product-image">

            <img src="/images/section_bg-bag4.png" alt="Mini Rosa Blue Handbag">
          </a>
          <div class="heart-icon" onclick="toggleHeart(this)">
            <svg viewBox="0 0 24 24">
              <path
                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
            </svg>
          </div>
          <div class="product-info">
            <div class="product-brand">MINI ROSA</div>
            <div class="product-price">29 000 ₽</div>
            <div class="color-options">
              <span class="color-option" style="background-color: #5E4F37;"></span>
              <span class="color-option" style="background-color: #A86738;"></span>
              <span class="color-option" style="background-color: #000000;"></span>
              <span class="color-option" style="background-color: #DEDEDE;"></span>
              <span class="color-option" style="background-color: #FF5733;"></span>
              <span class="color-option" style="background-color: #33FF57;"></span>
              <span class="color-option" style="background-color: #3357FF;"></span>
              <span class="color-option" style="background-color: #F3FF33;"></span>
              <span class="color-option" style="background-color: #FF33F3;"></span>
              <span class="color-option" style="background-color: #33FFF3;"></span>
              <span class="color-option" style="background-color: #FF9933;"></span>
              <span class="color-option" style="background-color: #9933FF;"></span>
              <span class="color-option" style="background-color: #33FF99;"></span>
              <span class="color-option" style="background-color: #FF3399;"></span>
              <span class="color-option" style="background-color: #99FF33;"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================================== collection-section end-->
  <section class="WOMAN-MAN">
    <div class="container">
      <div class="block">
        <a href="#" class="img" style="background-image: url('/images/WOMAN-MAN_section1.jpg')">
          <h2>женщина</h2>
        </a>
        <a href="#" class="img" style="background-image: url('/images/WOMAN-MAN_section2.png')">
          <h2>МУЖЧИНА</h2>
        </a>
      </div>
    </div>
  </section>
  <!-- woМУЖЧИНА-МУЖЧИНА end -->
  <a href="#" class="moni-moss" style="background-image: url('/images/mini-moss.png');">
    <div class="container">
      <div class="block">
        <h2>MINI MOSS</h2>
      </div>
    </div>
  </a>
  <!-- women-МУЖЧИНА end -->

  <section class="handbag-gallery">
    <div class="handbag-gallery__container container">
      <div class="handbag-gallery__slider swiper">
        <div class="handbag-gallery__wrapper swiper-wrapper">
          <div class="handbag-gallery__slide swiper-slide">
            <div class="handbag-gallery__card">
              <div class="handbag-gallery__image">
                <img src="/images/handbag1.png" alt="">
              </div>
              <div class="handbag-gallery__username">@nikname_inst</div>
            </div>
          </div>

          <div class="handbag-gallery__slide swiper-slide">
            <div class="handbag-gallery__card">
              <div class="handbag-gallery__image">
                <img src="/images/handbag2.png" alt="">
              </div>
              <div class="handbag-gallery__username">@nikname_inst</div>
            </div>
          </div>

          <div class="handbag-gallery__slide swiper-slide">
            <div class="handbag-gallery__card">
              <div class="handbag-gallery__text">
                СЛИШКОМ СМЕЛО ДЛЯ ВСЕХ,<br>
                ИДЕАЛЬНО ДЛЯ ТЕБЯ
              </div>
              <div class="handbag-gallery__image">
                <img src="/images/handbag3.png" alt="">
              </div>
              <div class="handbag-gallery__username">@nikname_inst</div>
            </div>
          </div>

          <div class="handbag-gallery__slide swiper-slide">
            <div class="handbag-gallery__card">
              <div class="handbag-gallery__image">
                <img src="/images/handbag4.png" alt="">
              </div>
              <div class="handbag-gallery__username">@nikname_inst</div>
            </div>
          </div>
        </div>
      </div>

      <!-- Mobile Grid -->
      <!-- <div class="handbag-gallery__grid">
          <div class="handbag-gallery__item">
              <div class="handbag-gallery__card">
                  <div class="handbag-gallery__image">
                      <img src="/images/handbag1.png" alt="">
                  </div>
                  <div class="handbag-gallery__username">@nikname_inst</div>
              </div>
          </div>

          <div class="handbag-gallery__item">
              <div class="handbag-gallery__card">
                  <div class="handbag-gallery__image">
                      <img src="/images/handbag2.png" alt="">
                  </div>
                  <div class="handbag-gallery__username">@nikname_inst</div>
              </div>
          </div>

          <div class="handbag-gallery__item">
              <div class="handbag-gallery__card">
                  <div class="handbag-gallery__image">
                      <img src="/images/handbag3.png" alt="">
                  </div>
                  <div class="handbag-gallery__text">
                      СЛИШКОМ СМЕЛО ДЛЯ ВСЕХ,<br>
                      ИДЕАЛЬНО ДЛЯ ТЕБЯ
                  </div>
                  <div class="handbag-gallery__username">@nikname_inst</div>
              </div>
          </div>

          <div class="handbag-gallery__item">
              <div class="handbag-gallery__card">
                  <div class="handbag-gallery__image">
                      <img src="/images/handbag4.png" alt="">
                  </div>
                  <div class="handbag-gallery__username">@nikname_inst</div>
              </div>
          </div>
      </div> -->
    </div>
  </section>
  <!--====================== handbag-gallery end -->
  <section class="deliver" style=" background-image: url('/images/deliver-bg.jpg');">
    <div class="block">
      <div class="box">
        <h1>Сумка SMB - твой лучший <br> друг в большом городе</h1>
        <a href="#">О бренде</a>
      </div>
    </div>
  </section>
  <!-- =========deliver end======= -->
  <section class="collection-section">
    <div class="container">
      <h2 class="section-title2">НОВОЕ</h2>

      <div class="products-grid">
        <!-- Product 1 -->
        <div class="product-card">
          <a href="product.html" class="product-image">

            <img src="/images/section_bg-bag5.png" alt="Mini Rosa Handbag">
          </a>
          <div class="heart-icon" onclick="toggleHeart(this)">
            <svg viewBox="0 0 24 24">
              <path
                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
            </svg>
          </div>
          <!-- isНОВОЕ icon -->
          <div class="isnew-icon">
            <svg width="39" height="102" viewBox="0 0 39 102" fill="none"
                 xmlns="http://www.w3.org/2000/svg">
              <rect x="0.5" y="0.5" width="38" height="101" stroke="#91BE17" />
              <text x="15" y="110" font-size="16" fill="#91BE17"
                    transform="rotate(-90 5,90)">НОВОЕ</text>
            </svg>

          </div>
          <div class="product-info">
            <div class="product-brand">MINI ROSA</div>
            <div class="product-price_item">
              <div class="old-product-price">29 000 ₽</div>
              <div class="product-price">21 000 ₽</div>
            </div>

            <div class="color-options">
              <span class="color-option" style="background-color: #5E4F37;"></span>
              <span class="color-option" style="background-color: #A86738;"></span>
              <span class="color-option" style="background-color: #000000;"></span>
              <span class="color-option" style="background-color: #DEDEDE;"></span>
              <span class="color-option" style="background-color: #FF5733;"></span>
              <span class="color-option" style="background-color: #33FF57;"></span>
              <span class="color-option" style="background-color: #3357FF;"></span>
              <span class="color-option" style="background-color: #F3FF33;"></span>
              <span class="color-option" style="background-color: #FF33F3;"></span>
              <span class="color-option" style="background-color: #33FFF3;"></span>
              <span class="color-option" style="background-color: #FF9933;"></span>
              <span class="color-option" style="background-color: #9933FF;"></span>
              <span class="color-option" style="background-color: #33FF99;"></span>
              <span class="color-option" style="background-color: #FF3399;"></span>
              <span class="color-option" style="background-color: #99FF33;"></span>
            </div>
          </div>
        </div>

        <!-- Product 2 -->
        <div class="product-card">
          <a href="product.html" class="product-image">

            <img src="/images/section_bg-bag2.png" alt="Mini Rosa Handbag Black">
          </a>
          <div class="heart-icon" onclick="toggleHeart(this)">
            <svg viewBox="0 0 24 24">
              <path
                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
            </svg>

          </div>
          <!-- isnew icon -->
          <div class="isnew-icon">
            <svg width="39" height="102" viewBox="0 0 39 102" fill="none"
                 xmlns="http://www.w3.org/2000/svg">
              <rect x="0.5" y="0.5" width="38" height="101" stroke="#91BE17" />
              <text x="15" y="110" font-size="16" fill="#91BE17"
                    transform="rotate(-90 5,90)">НОВОЕ</text>
            </svg>

          </div>
          <div class="product-info">
            <div class="product-brand">MINI ROSA</div>
            <div class="product-price_item">
              <div class="old-product-price">29 000 ₽</div>
              <div class="product-price">21 000 ₽</div>
            </div>
            <div class="color-options">
              <span class="color-option" style="background-color: #5E4F37;"></span>
              <span class="color-option" style="background-color: #A86738;"></span>
              <span class="color-option" style="background-color: #000000;"></span>
              <span class="color-option" style="background-color: #DEDEDE;"></span>
              <span class="color-option" style="background-color: #FF5733;"></span>
              <span class="color-option" style="background-color: #33FF57;"></span>
              <span class="color-option" style="background-color: #3357FF;"></span>
              <span class="color-option" style="background-color: #F3FF33;"></span>
              <span class="color-option" style="background-color: #FF33F3;"></span>
              <span class="color-option" style="background-color: #33FFF3;"></span>
              <span class="color-option" style="background-color: #FF9933;"></span>
              <span class="color-option" style="background-color: #9933FF;"></span>
              <span class="color-option" style="background-color: #33FF99;"></span>
              <span class="color-option" style="background-color: #FF3399;"></span>
              <span class="color-option" style="background-color: #99FF33;"></span>
            </div>
          </div>
        </div>

        <!-- Product 3 -->
        <div class="product-card">
          <a href="product.html" class="product-image">

            <img src="/images/section_bg-bag6.png" alt="Moss Handbag">
          </a>
          <div class="heart-icon" onclick="toggleHeart(this)">
            <svg viewBox="0 0 24 24">
              <path
                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
            </svg>
          </div>
          <!-- isnew icon -->
          <div class="isnew-icon">
            <svg width="39" height="102" viewBox="0 0 39 102" fill="none"
                 xmlns="http://www.w3.org/2000/svg">
              <rect x="0.5" y="0.5" width="38" height="101" stroke="#91BE17" />
              <text x="15" y="110" font-size="16" fill="#91BE17"
                    transform="rotate(-90 5,90)">НОВОЕ</text>
            </svg>

          </div>
          <div class="product-info">
            <div class="product-brand">MINI ROSA</div>
            <div class="product-price_item">
              <div class="old-product-price">29 000 ₽</div>
              <div class="product-price">21 000 ₽</div>
            </div>
            <div class="color-options">
              <span class="color-option" style="background-color: #5E4F37;"></span>
              <span class="color-option" style="background-color: #A86738;"></span>
              <span class="color-option" style="background-color: #000000;"></span>
              <span class="color-option" style="background-color: #DEDEDE;"></span>
              <span class="color-option" style="background-color: #FF5733;"></span>
              <span class="color-option" style="background-color: #33FF57;"></span>
              <span class="color-option" style="background-color: #3357FF;"></span>
              <span class="color-option" style="background-color: #F3FF33;"></span>
              <span class="color-option" style="background-color: #FF33F3;"></span>
              <span class="color-option" style="background-color: #33FFF3;"></span>
              <span class="color-option" style="background-color: #FF9933;"></span>
              <span class="color-option" style="background-color: #9933FF;"></span>
              <span class="color-option" style="background-color: #33FF99;"></span>
              <span class="color-option" style="background-color: #FF3399;"></span>
              <span class="color-option" style="background-color: #99FF33;"></span>
            </div>
          </div>
        </div>

        <!-- Product 4 -->
        <div class="product-card">
          <a href="product.html" class="product-image">

            <img src="/images/section_bg-bag7.png" alt="Mini Rosa Blue Handbag">
          </a>
          <div class="heart-icon" onclick="toggleHeart(this)">
            <svg viewBox="0 0 24 24">
              <path
                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
            </svg>
          </div>
          <!-- isnew icon -->
          <div class="isnew-icon">
            <svg width="39" height="102" viewBox="0 0 39 102" fill="none"
                 xmlns="http://www.w3.org/2000/svg">
              <rect x="0.5" y="0.5" width="38" height="101" stroke="#91BE17" />
              <text x="15" y="110" font-size="16" fill="#91BE17"
                    transform="rotate(-90 5,90)">НОВОЕ</text>
            </svg>

          </div>
          <div class="product-info">
            <div class="product-brand">MINI ROSA</div>
            <div class="product-price_item">
              <div class="old-product-price">29 000 ₽</div>
              <div class="product-price">21 000 ₽</div>
            </div>
            <div class="color-options">
              <span class="color-option" style="background-color: #5E4F37;"></span>
              <span class="color-option" style="background-color: #A86738;"></span>
              <span class="color-option" style="background-color: #000000;"></span>
              <span class="color-option" style="background-color: #DEDEDE;"></span>
              <span class="color-option" style="background-color: #FF5733;"></span>
              <span class="color-option" style="background-color: #33FF57;"></span>
              <span class="color-option" style="background-color: #3357FF;"></span>
              <span class="color-option" style="background-color: #F3FF33;"></span>
              <span class="color-option" style="background-color: #FF33F3;"></span>
              <span class="color-option" style="background-color: #33FFF3;"></span>
              <span class="color-option" style="background-color: #FF9933;"></span>
              <span class="color-option" style="background-color: #9933FF;"></span>
              <span class="color-option" style="background-color: #33FF99;"></span>
              <span class="color-option" style="background-color: #FF3399;"></span>
              <span class="color-option" style="background-color: #99FF33;"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ==============collection section end -->
  <section class="deliver2" style="background-image: url('/images/deliver2-bg.png');">
    <div class="block">
      <div class="box">
        <h1>Подбери подарочную <br> карту для себя <br>
          или друга</h1>
        <a href="#">Подарить карту</a>
      </div>
    </div>
  </section>
  <!-- deliver2 end -->
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
