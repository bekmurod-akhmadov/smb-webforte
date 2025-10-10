@if($block)
  <section class="deliver" style="background-image: url('{{ $block->getFirstMediaUrl('image')}}');">
    <div class="block">
      <div class="box">
        <h1>{!! $block->text !!}</h1>
        @if(!empty($block->button_link))
          <a href="{{ $block->button_link }}">{{ $block->button_text }}</a>
        @endif
      </div>
    </div>
  </section>
@endif
