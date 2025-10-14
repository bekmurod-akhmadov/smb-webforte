@if($block)
  <section class="deliver" style="background-image: url('{{ $block->getFirstMediaUrl('image')}}');">
    <div class="block">
      <div class="box">
        <h1>{!! $block->title !!}</h1>

        {!! $block->text !!}

        @if(!empty($block->button_link))
          <a href="{{ $block->button_link }}" class="delivery__button">
            {{ $block->button_text }}
          </a>
        @endif
      </div>
    </div>
  </section>
@endif
