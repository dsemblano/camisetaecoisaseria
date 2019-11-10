{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    {{-- @include('partials.page-header') --}}
    <div class="text-center flex flex-wrap mt-10">
      @include('partials.main-menu')
    </div>
    <hr class="block h-1 border-0 border-t-2 border-green-nos my-4 p-0">
    <ul class="flex flex-wrap mt-10 p-0">
      @include('partials.last-products')
    </ul>
    @include('partials.content-page')
  @endwhile
@endsection
