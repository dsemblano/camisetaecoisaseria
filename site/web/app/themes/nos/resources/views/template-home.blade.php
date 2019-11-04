{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    {{-- @include('partials.page-header') --}}
    <div class="text-center flex flex-wrap">
      @include('partials.main-menu')
    </div>
    <ul class="flex flex-wrap">
      @include('partials.last-products')
    </ul>
    @include('partials.content-page')
  @endwhile
@endsection
