@extends('layouts.main')

@section('title', 'Поиск')

@section('content')

  <div class="wrapper search">

    <x-marquee />

    <x-header/>

    <section class="collection-section">
      <!-- Search komponenti -->
      <div class="search-box" id="searchBox">
        <div class="container">
          <div class="search-header">
            <span class="search-title"></span>
            <button class="close-btn" id="closeBtn">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                   xmlns="http://www.w3.org/2000/svg">
                <mask id="mask0_687_55829" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                      y="0" width="24" height="24">
                  <rect width="24" height="24" fill="#D9D9D9" />
                </mask>
                <g mask="url(#mask0_687_55829)">
                  <path
                    d="M6.4 18.3069L5.69225 17.5992L11.2922 11.9992L5.69225 6.39916L6.4 5.69141L12 11.2914L17.6 5.69141L18.3077 6.39916L12.7077 11.9992L18.3077 17.5992L17.6 18.3069L12 12.7069L6.4 18.3069Z"
                    fill="#1C1B1F" />
                </g>
              </svg>
            </button>
          </div>

          <div class="search-row">
            <input type="text" class="search-input" placeholder="Например «Rosa»">
            <button class="clear-btn" id="clearBtn">Очистить</button>
          </div>
        </div>
      </div>
      <div class="container">
        <!--  -->
        <h2 class="section-title">ТЕБЕ может понравиться</h2>

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

    <x-footer/>
  </div>
@endsection
