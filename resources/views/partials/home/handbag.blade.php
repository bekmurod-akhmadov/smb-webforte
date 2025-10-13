@php
  use App\Models\HandbagGallery;
@endphp

@if($handbag_gallery->isNotEmpty())
  <section class="handbag-gallery">
    <div class="handbag-gallery__container container">
      <div class="handbag-gallery__slider swiper">
        <div class="handbag-gallery__wrapper swiper-wrapper">

          @foreach($handbag_gallery as $item)
            <div class="handbag-gallery__slide swiper-slide">
              <div class="handbag-gallery__card card-style-{{ $item->style }}">

                {{-- Текст (для стилей ALT1 и ALT2) --}}
                @if(!empty($item->text) && $item->style !== HandbagGallery::STYLE_DEFAULT)
                  <div class="handbag-gallery__text">
                    {!! nl2br(e($item->text)) !!}
                  </div>
                @endif

                {{-- Картинка --}}
                <div class="handbag-gallery__image">
                  <img src="{{ $item->getFirstMediaUrl('image') ?: '/images/no-image.png' }}"
                       alt="{{ $item->username ?? 'handbag' }}">
                </div>

                {{-- Username --}}
                @if(!empty($item->username))
                  <div class="handbag-gallery__username">{{ $item->username }}</div>
                @endif

              </div>
            </div>
          @endforeach

        </div>
      </div>

      {{-- Mobile Grid --}}
      <div class="handbag-gallery__grid">
        @foreach($handbag_gallery as $item)
          <div class="handbag-gallery__item">
            <div class="handbag-gallery__card style-{{ $item->style }}">

              {{-- Картинка --}}
              <div class="handbag-gallery__image">
                <img src="{{ $item->getFirstMediaUrl('image') ?: '/images/no-image.png' }}"
                     alt="{{ $item->username ?? 'handbag' }}">
              </div>

              {{-- Текст (если есть) --}}
              @if(!empty($item->text) && $item->style !== HandbagGallery::STYLE_DEFAULT)
                <div class="handbag-gallery__text">
                  {!! nl2br(e($item->text)) !!}
                </div>
              @endif

              {{-- Username --}}
              @if(!empty($item->username))
                <div class="handbag-gallery__username">{{ $item->username }}</div>
              @endif

            </div>
          </div>
        @endforeach
      </div>

    </div>
  </section>
@endif
