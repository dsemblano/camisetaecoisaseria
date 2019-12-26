{{--
  Template Name: Products Template
--}}

@extends('layouts.app')

@section('content')
<section class="products container">
  @include('partials.page-header')

{{-- Categorias filho --}}
@foreach ($subcats_produtos as $sub)
  <div class="page-header-allcategories">
    <h2>
      <a class="header-link" href={{ esc_url(get_category_link($sub->cat_ID)) }}>
        {{ $sub->name }}
      </a>
    </h2>
  </div>
  <section id="{{ $sub->slug }}-page" class="category-parent row">
    <ul class="flex flex-row">
    @php
      $destaques_produtos = wc_get_products(array(
          'limit' => -1,
          'status'=> 'publish',
          'category' => $sub->slug
      ));
    @endphp
      @foreach ($destaques_produtos as $product)
        <li>
          {!! $product->get_image() !!}
          <h2 class="text-base mt-3">
            <a href="{!! $product->get_permalink() !!}">{!! $product->get_title() !!}</a>
          </h2>

          @if ($product->get_price())
            @php
              $product_base = get_post_meta($product->get_id(), 'lumise_product_base', true);
            @endphp
            <span>R$ {!! $product->get_price() !!}</span>
            <a class="lumise-button-customize btn-estudio-products uppercase" href="/design-editor/?product_cms={!! $product->get_id() !!}&product_base={{ $product_base }}" type="button">
              Crie a sua aqui
            </a>
          @endif

            @php do_action( 'woocommerce_after_shop_loop_item' ); @endphp
        </li>
      @endforeach
    </ul>
  </section>
@endforeach

</section>

@endsection
