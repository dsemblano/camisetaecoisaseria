{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.home-block1')
    <div class="container">
      @include('partials.home-block3')
      @include('partials.home-block4')
      @include('partials.slideshow')
    </div>
  @endwhile
@endsection
