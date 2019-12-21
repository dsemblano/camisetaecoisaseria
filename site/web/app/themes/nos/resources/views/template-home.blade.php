{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    {{-- @include('partials.page-header') --}}
    @include('partials.home-block1')
    {{-- @include('partials.home-block2') --}}
    @include('partials.home-block3')
    @include('partials.home-block4')
    {{-- @include('partials.home-slideshow') --}}
    @include('partials.slideshow')
    @include('partials.home-insta')
  @endwhile
@endsection
