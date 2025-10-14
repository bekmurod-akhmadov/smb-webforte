<!-- Header Navigation -->
<header class="header">
  <div class="container">
    <nav class="navbar">
      <!-- Mobile Menu Toggle -->
      <button class="mobile-menu-toggle d-lg-none" type="button" onclick="toggleMobileMenu()">
        <div class="opening active">
          <img src="/images/hamburger_icon.svg" alt="close">
        </div>
        <div class="closing">
          <img src="/images/close.svg" alt="close">
        </div>
      </button>

      @if(!empty($menus))

        <!-- Left Navigation -->
        <div class="navbar-left d-none d-lg-flex">
          @foreach($menus as $menu)

            <a href="{{$menu->url}}" class="nav-link" target="{{$menu->target}}">
              {{$menu->title}}
            </a>

          @endforeach
        </div>

      @endif
      <!-- Center Logo -->
      <div class="navbar-brand p-0 m-0">
        <a href="{{route('home')}}" class="logo">
          <img src="/images/logo.svg" alt="logo">
        </a>
      </div>
      <!-- Right Actions -->
      <div class="navbar-actions">
        <a href="{{route('search')}}" class="action-btn search-btn d-none d-lg-block">
          <img src="/images/search_icon.svg" alt="search">
        </a>
        <a href="favorites.html" class="action-btn wishlist-btn d-none d-lg-block">
          <img src="/images/favourite_icon.svg" alt="search">
        </a>
        <a href="#" onclick="buyerModal()" class="action-btn cart-btn d-none d-lg-block">
          <img src="/images/cart_icon.svg" alt="search">
        </a>
        <a href="#!" class="action-btn profile-btn d-none d-lg-block">
          <img src="/images/user_icon.svg" alt="search">
        </a>
        <!-- Mobile Actions -->
        <a href="{{route('search')}}" class="action-btn search-btn d-lg-none">
          <img src="/images/search_icon.svg" alt="search">
        </a>
        <a href="{{route('favourites')}}" class="action-btn wishlist-btn d-lg-none">
          <img src="/images/favourite_icon.svg" alt="search">
        </a>
        <a onclick="buyerModal()" class="action-btn cart-btn d-lg-none">
          <img src="/images/cart_icon.svg" alt="search">
        </a>
        <a href="#!" class="action-btn profile-btn d-lg-none">
          <img src="/images/user_icon.svg" alt="search">
        </a>
      </div>
    </nav>
  </div>
</header>
<!-- Mobile Menu -->
<div class="mobile-menu header-top_active" id="mobileMenu">
  <div class="mobile-menu-content">
    <!-- Main Categories -->
    <div class="item1">
      <div class="nav-section">
        <button class="nav-dropdown-btn" onclick="toggleDropdown('woman-menu')">
          WOMAN <i class="fas fa-chevron-right"></i>
        </button>
        <div class="nav-dropdown" id="woman-menu">
          <a href="#" class="dropdown-link">Сумки</a>
          <a href="#" class="dropdown-link">Рюкзаки</a>
          <a href="#" class="dropdown-link">Клатчи</a>
        </div>
      </div>
      <div class="nav-section">
        <button class="nav-dropdown-btn" onclick="toggleDropdown('man-menu')">
          MAN <i class="fas fa-chevron-right"></i>
        </button>
        <div class="nav-dropdown" id="man-menu">
          <a href="#" class="dropdown-link">Портфели</a>
          <a href="#" class="dropdown-link">Рюкзаки</a>
          <a href="#" class="dropdown-link">Сумки</a>
        </div>
      </div>
    </div>
    <div class="mobile-about">
      <!-- Additional Links -->
      <a href="catalog.html" class="mobile-nav-link">STORE</a>
      <a href="#" class="mobile-nav-link">О БРЕНДЕ</a>
      <a href="#" class="mobile-nav-link">BAG STUFF</a>
      <a href="#" class="mobile-nav-link">ПОКУПОЧНЫЕ КАРТЫ</a>
    </div>
    <div class="mobile-end-about">
      <!-- Additional Links -->
      <li>
        <a href="tel:88000000000">8(800)000-00-00</a>
      </li>
      <li>
        <a href="https://t.me/" target="_blank">TELEGRAM</a>
      </li>
      <li>
        <a href="https://wa.me/" target="_blank">WHATSAPP</a>
      </li>
      <li>
        <a href="mailto:info@smb.ru">INFO@SMB.RU</a>
      </li>
    </div>
  </div>
</div>
<!-- Mobile Menu Overlay -->
<div class="mobile-menu-overlay" id="mobileMenuOverlay" onclick="toggleMobileMenu()"></div>
