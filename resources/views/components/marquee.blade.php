@if($marquees->isNotEmpty())
  <!-- Top Marquee Banner -->
  <div class="top-banner">
    <div class="marquee-container">
      <div class="marquee-content" id="marquee-content">
        @foreach($marquees as $item)
          <span>{{ $item->text }}</span>
        @endforeach
      </div>
    </div>
  </div>
@endif
