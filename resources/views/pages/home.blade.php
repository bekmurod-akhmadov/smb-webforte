@extends('layouts.main')

@section('title', 'Главная')

@section('content')

  <x-marquee />

  <x-header/>

  @if (setting('blocks.home.hero'))
    @include('partials.home.hero', ['hero_slider' => $hero_slider])
  @endif

  @if(setting('blocks.home.collection'))

    @include('partials.home.collection', ['products' => $products])

  @endif

  @if(setting('blocks.home.woman_man'))

    @include('partials.home.woman')

  @endif

  @if(setting('blocks.home.mini_moss'))

    @include('partials.home.mini_moss', ['mini_moss' => $mini_moss])

  @endif

  @if(setting('blocks.home.handbag_gallery'))

    @include('partials.home.handbag', ['handbag_gallery' => $handbag_gallery])

  @endif

  @if(setting('blocks.home.deliver_1'))
    @include('partials.home.deliver_1', ['block' => $home_delivery_1])
  @endif

  @if(setting('blocks.home.collection_2'))

    @include('partials.home.collection_2', ['new_products' => $new_products])

  @endif

  @if(setting('blocks.home.deliver_2'))
    @include('partials.home.deliver_2', ['block' => $home_delivery_2])
  @endif

  @if(setting('blocks.home.newsletter'))

    @include('partials.home.newsletter')

  @endif

  <x-footer/>
@endsection
