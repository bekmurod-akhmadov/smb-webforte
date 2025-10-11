@extends('layouts.main', ['wrapperClass' => 'catalog'])

@section('title', 'Каталог')

@section('content')

    <x-marquee/>

    <x-header/>

    <div class="main-content">
      <div class="container">
        <!-- Filter Section -->
        <div class="filter-section">
          <div class="product-categories">
            <a href="#" class="category-item active">ВСЕ <span class="category-count">(16)</span></a>
            <a href="#" class="category-item">MOSS</a>
            <a href="#" class="category-item">ROSA</a>
            <a href="#" class="category-item">ROSA</a>
          </div>

          <div class="filter-controls">
            <button class="filter-btn" onclick="toggleFilterModal()">
              ФИЛЬТРЫ

              <svg class="filter-icon" width="24" height="24" viewBox="0 0 24 24" fill="none"
                   xmlns="http://www.w3.org/2000/svg">
                <mask id="mask0_3199_822" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                      width="24" height="24">
                  <rect width="24" height="24" fill="#D9D9D9" />
                </mask>
                <g mask="url(#mask0_3199_822)">
                  <path
                    d="M17.5577 19.0608C16.7339 19.0608 16.0376 18.7764 15.4688 18.2076C14.8999 17.6387 14.6155 16.9424 14.6155 16.1186C14.6155 15.2946 14.8999 14.5981 15.4688 14.0293C16.0376 13.4605 16.7339 13.1761 17.5577 13.1761C18.3816 13.1761 19.0779 13.4605 19.6467 14.0293C20.2156 14.5981 20.5 15.2946 20.5 16.1186C20.5 16.9424 20.2156 17.6387 19.6467 18.2076C19.0779 18.7764 18.3816 19.0608 17.5577 19.0608ZM17.5557 18.0608C18.0916 18.0608 18.5496 17.8714 18.9298 17.4926C19.3099 17.1137 19.5 16.6563 19.5 16.1203C19.5 15.5845 19.3106 15.1265 18.9318 14.7463C18.5529 14.3661 18.0956 14.1761 17.5598 14.1761C17.0238 14.1761 16.5657 14.3655 16.1855 14.7443C15.8055 15.1231 15.6155 15.5806 15.6155 16.1166C15.6155 16.6524 15.8049 17.1104 16.1837 17.4906C16.5626 17.8707 17.0199 18.0608 17.5557 18.0608ZM5 16.6186V15.6186H12.2308V16.6186H5ZM6.44225 10.8301C5.61842 10.8301 4.92208 10.5456 4.35325 9.97681C3.78442 9.40798 3.5 8.71156 3.5 7.88756C3.5 7.06373 3.78442 6.3674 4.35325 5.79856C4.92208 5.22973 5.61842 4.94531 6.44225 4.94531C7.26608 4.94531 7.96242 5.22973 8.53125 5.79856C9.10008 6.3674 9.3845 7.06373 9.3845 7.88756C9.3845 8.71156 9.10008 9.40798 8.53125 9.97681C7.96242 10.5456 7.26608 10.8301 6.44225 10.8301ZM6.44025 9.83006C6.97625 9.83006 7.43433 9.64065 7.8145 9.26181C8.1945 8.88298 8.3845 8.42556 8.3845 7.88956C8.3845 7.35373 8.19508 6.89573 7.81625 6.51556C7.43742 6.1354 6.98008 5.94531 6.44425 5.94531C5.90842 5.94531 5.45042 6.13473 5.07025 6.51356C4.69008 6.8924 4.5 7.34981 4.5 7.88581C4.5 8.42165 4.68942 8.87965 5.06825 9.25981C5.44708 9.63998 5.90442 9.83006 6.44025 9.83006ZM11.7692 8.38756V7.38756H19V8.38756H11.7692Z"
                    fill="#272727" />
                </g>
              </svg>

            </button>
          </div>
        </div>
      </div>
    </div>

    @include('partials.filter')

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
      </div>
    </section>

    <section class="collection-section">
      <div class="container">

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
                <span class="color-option" style="background-color: #DEDEDE;"></span>
                <span class="color-option" style="background-color: #DEDEDE;"></span>
                <span class="color-option" style="background-color: #DEDEDE;"></span>
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
                <span class="color-option" style="background-color: #DEDEDE;"></span>
                <span class="color-option" style="background-color: #DEDEDE;"></span>
                <span class="color-option" style="background-color: #DEDEDE;"></span>
                <span class="color-option" style="background-color: #DEDEDE;"></span>
                <span class="color-option" style="background-color: #DEDEDE;"></span>
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
              <div class="product-brand">MINIasdasda ROSA</div>
              <div class="product-price">29 000 ₽</div>
              <div class="color-options">
                <span class="color-option" style="background-color: #5E4F37;"></span>
                <span class="color-option" style="background-color: #A86738;"></span>
                <span class="color-option" style="background-color: #000000;"></span>
                <span class="color-option" style="background-color: #DEDEDE;"></span>
                <span class="color-option" style="background-color: #DEDEDE;"></span>
                <span class="color-option" style="background-color: #DEDEDE;"></span>
                <span class="color-option" style="background-color: #DEDEDE;"></span>
                <span class="color-option" style="background-color: #DEDEDE;"></span>
                <span class="color-option" style="background-color: #DEDEDE;"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="collection-section">
      <div class="container">

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

    <section class="deliver">
      <div class="block">
        <div class="box">
          <h1>Дели заказ на 4 части <br>
            Носи сейчас, плати потом</h1>
          <p>Теперь доступна покупка в сплит для всех заказов. <br> Раздели платёж на 4 части Долями</p>
          <a href="#" style="background-color: transparent !important;" >
            <svg width="127" height="38" viewBox="0 0 127 38" fill="none"
                 xmlns="http://www.w3.org/2000/svg">
              <path
                d="M119.529 0H7.47059C3.3447 0 0 3.40264 0 7.6V30.4C0 34.5974 3.3447 38 7.47059 38H119.529C123.655 38 127 34.5974 127 30.4V7.6C127 3.40264 123.655 0 119.529 0Z"
                fill="white" />
              <mask id="mask0_3_3" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="11" y="11"
                    width="105" height="16">
                <path d="M115.795 11.3984H11.207V26.5984H115.795V11.3984Z" fill="white" />
              </mask>
              <g mask="url(#mask0_3_3)">
                <path d="M29.7703 11.3984H27.2773V24.2593H29.7703V11.3984Z" fill="black" />
                <path d="M24.4148 12.1172H21.9219V24.9778H24.4148V12.1172Z" fill="black" />
                <path d="M19.0555 12.9219H16.5625V25.7848H19.0555V12.9219Z" fill="black" />
                <path d="M13.7 13.7344H11.207L11.207 26.599H13.7V13.7344Z" fill="black" />
                <path
                  d="M95.6146 18.2512L91.6006 13.7109H89.2539V24.2232H91.7041V17.5162L95.3688 21.4899H95.8215L99.4232 17.5162V24.2232H101.873V13.7109H99.5267L95.6146 18.2512Z"
                  fill="black" />
                <path
                  d="M113.546 13.7109L107.473 20.5435V13.7109H105.023V24.2232H107.268L113.341 17.3906V24.2232H115.791V13.7109H113.546Z"
                  fill="black" />
                <path
                  d="M76.0589 17.5575C76.0589 19.2311 76.9586 20.5496 78.3395 21.1025L75.75 24.2232H78.7489L81.1045 21.3842H83.6535V24.2232H86.1037V13.7109H79.8659C77.5403 13.7109 76.0589 15.3295 76.0589 17.5575ZM83.655 16.0262V19.1348H80.3203C79.2078 19.1348 78.6109 18.5038 78.6109 17.579C78.6109 16.6541 79.2287 16.0232 80.3203 16.0232L83.655 16.0262Z"
                  fill="black" />
                <path
                  d="M64.6725 15.8134C64.5225 19.4287 63.7728 21.7625 62.3049 21.7625H61.9375V24.2859L62.3288 24.3074C65.2722 24.4744 66.8991 21.8467 67.166 16.1074H71.0376V24.2232H73.4833V13.7109H64.7548L64.6725 15.8134Z"
                  fill="black" />
                <path
                  d="M55.4519 13.5625C52.1381 13.5625 49.7539 15.8962 49.7539 18.9649C49.7539 22.1393 52.3481 24.3902 55.4519 24.3902C58.6846 24.3902 61.1962 22.0137 61.1962 18.9649C61.1962 15.9161 58.6846 13.5625 55.4519 13.5625ZM55.4519 21.8666C53.579 21.8666 52.3031 20.6263 52.3031 18.9649C52.3031 17.2621 53.5805 16.0554 55.4519 16.0554C57.3233 16.0554 58.6428 17.3172 58.6428 18.9649C58.6428 20.6126 57.3052 21.8666 55.4519 21.8666Z"
                  fill="black" />
                <path
                  d="M47.1555 13.7344H38.5083L38.4258 15.8368C38.3029 18.8657 37.5261 21.746 36.0582 21.7874L35.3789 21.8089V26.6028L37.85 26.5978V24.2283H46.4344V26.5978H48.9264V21.7874H47.1555V13.7344ZM44.7056 21.7874H39.4769C40.3616 20.4215 40.8354 18.4446 40.918 16.1324H44.7056V21.7874Z"
                  fill="black" />
              </g>
            </svg>

          </a>
        </div>
      </div>
    </section>

    <section class="collection-section">
      <div class="container">

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

    <section class="collection-section catalog">
      <div class="container">

        <div class="products-grid">
          <!-- Product 2 -->
          <div class="product-card">
            <img src="/images/catalog_collection-section-img.png" alt="">
            <p>SMB - для тех, кто носит себя громко</p>
          </div>

          <!-- Product 3 -->
          <div class="product-card">
            <a href="product.html" class="product-image">

              <img src="/images/catalog_collection-section-brown-bag.png" alt="Moss Handbag">
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

              <img src="/images/catalog_collection-section-yellow-bag.png"
                   alt="Mini Rosa Blue Handbag">
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

    <a href="#" class="moni-moss">
      <div class="container">
        <div class="block">
          <h2>MINI MOSS</h2>
        </div>
      </div>
    </a>

    <section class="collection-section">
      <div class="container">

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

    <section class="collection-section">
      <div class="container">

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
        <!--  -->
        <div class="catalog_pagination">
          <div class="navigation">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect width="24" height="24" fill="white" />
              <mask id="mask0_3199_5841" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="3" y="3"
                    width="18" height="18">
                <rect x="3" y="3" width="18" height="18" fill="#D9D9D9" />
              </mask>
              <g mask="url(#mask0_3199_5841)">
                <path
                  d="M15.0003 18.9772L8.01953 11.9964L15.0003 5.01562L15.798 5.81325L9.61478 11.9964L15.798 18.1796L15.0003 18.9772Z"
                  fill="#272727" />
              </g>
            </svg>
          </div>
          <div class="pagination">
            <a href="#" class="item active">
              <span>1</span>
            </a>
            <a href="#" class="item">
              <span>2</span>
            </a>
            <a href="#" class="item">
              <span>3</span>
            </a>
            <div class="item hover-none">
              <span>…</span>
            </div>
            <a href="#" class="item">
              <span>6</span>
            </a>
          </div>
          <div class="navigation">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect width="24" height="24" fill="white" />
              <mask id="mask0_3199_5852" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="3" y="3"
                    width="18" height="18">
                <rect x="21" y="21" width="18" height="18" transform="rotate(-180 21 21)"
                      fill="#D9D9D9" />
              </mask>
              <g mask="url(#mask0_3199_5852)">
                <path
                  d="M8.99966 5.02275L15.9805 12.0036L8.99966 18.9844L8.20203 18.1868L14.3852 12.0036L8.20203 5.82038L8.99966 5.02275Z"
                  fill="#272727" />
              </g>
            </svg>

          </div>
        </div>
      </div>
    </section>

    <section class="smb-newsletter-section">
      <div class="smb-newsletter-container">
        <h1 class="smb-newsletter-title">СЕКРЕТ SMB Магазин</h1>
        <p class="smb-newsletter-description">Секретные скидки, еженедельные новости,</p>
        <p class="smb-newsletter-description">письма от основателя бренда</p>
        <button class="smb-subscribe-btn" id="smbSubscribeBtn">ПОДПИСАТЬСЯ</button>
      </div>
    </section>

    <x-footer/>

@endsection
