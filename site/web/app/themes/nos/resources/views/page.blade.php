@extends('layouts.app')

@section('content')
@include('partials.home-block1')
@include('partials.home-block2')
<div class="content container">
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile
</div>
@include('partials.ribbon-algodao')
@include('partials.slideinsta')
@endsection
