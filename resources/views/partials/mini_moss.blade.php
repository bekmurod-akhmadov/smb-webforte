@if($mini_moss)
  <a href="{{ $mini_moss->button_link }}"
     @if($mini_moss->is_external) target="_blank" rel="noopener" @endif
     class="moni-moss"
     style="background-image: url('{{ $mini_moss->getFirstMediaUrl('image')}}');">

    <div class="container">
      <div class="block">
        <h2>
          {{$mini_moss->button_text}}
        </h2>
      </div>
    </div>
  </a>
@endif
