<section class="hero-slider">
  <div class="swiper heroSwiper"
       data-autoplay="{{ setting('blocks.home.hero_autoplay') ? 'true' : 'false' }}"
       data-delay="{{ setting('blocks.home.hero_autoplay_delay') }}">

    <div class="swiper-wrapper">
      @foreach($hero_slider as $slider)
        <div class="swiper-slide"
             style="background: url('{{ $slider->getFirstMediaUrl('desktop') }}') center center / cover no-repeat;">
          <div class="container">
            <div class="row align-items-center min-vh-100">
              <div class="col-12">
                <div class="slide-content">
                  {{-- контент слайда --}}
                </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>

    @if($hero_slider->count() > 1)
      <div class="swiper-button-next"><i class="fas fa-chevron-right"></i></div>
      <div class="swiper-button-prev"><i class="fas fa-chevron-left"></i></div>
      <div class="swiper-pagination"></div>
    @endif
  </div>

</section>
