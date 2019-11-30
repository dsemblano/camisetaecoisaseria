@extends('layouts.app')

@section('content')
@if (!( is_page( 'cart' ) || is_cart() || is_page('checkout') || is_checkout()))

  @include('partials.home-block1')
  @include('partials.home-block2')
  <div class="content container">
    @while(have_posts()) @php the_post() @endphp
      @include('partials.page-header')
      @include('partials.content-page')
    @endwhile
  </div>
  @include('partials/components.ribbon-algodao')
  @include('partials.slideinsta')

@else

  @include('partials.home-block2')
    <div class="content container">
      @while(have_posts()) @php the_post() @endphp
        @include('partials.page-header')
        @include('partials.content-page')
      @endwhile
    </div>

@endif

@endsection
