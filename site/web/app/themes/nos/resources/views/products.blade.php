{{--
  Template Name: Products Template
--}}

@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  <div class="content products container">
    <section class="category-products flex flex-col lg:my-12 border-solid border-gray border-b-1 pb-6">
      <ul class="flex flex-wrap -mx-4 p-0 text-center">
      @foreach ($sub_categories as $sub)
          {{-- <h2 class="page-header-allcategories text-center">
            <a class="header-link" href={{ esc_url(get_category_link($sub->cat_ID)) }}>{{ $sub->name }}</a>
          </h2> --}}
          @php
            $destaques_produtos = wc_get_products(array(
                'limit' => -1,
                'status'=> 'publish',
                'category' => $sub->slug
            ));
          @endphp
            @foreach ($destaques_produtos as $product)
              <li class="my-4 px-4 w-1/2 overflow-hidden sm:w-1/4 md:w-1/4">
                <a href="{!! $product->get_permalink() !!}">
                  @php
                      $imgprod = $product->get_image($size = 'produtos', array('class'=>'imgprod w-full bg-white'));
                  @endphp
                  {{-- {!! $product->get_image() !!} --}}
                  {!! $imgprod !!}
                  <h2 class="text-sm my-3 h-8 md:h-6">
                    {!! $product->get_title() !!}
                  </h2>

                  @if ($product->get_price())
                    @php
                      $product_base = get_post_meta($product->get_id(), 'lumise_product_base', true);
                    @endphp
                    <div>R$ {!! $product->get_price() !!}</div>
                    <div class="text-xs text-center w-40 mt-4 lumise-button-customize btn-estudio-products uppercase">
                      <a href="/design-editor/?product_cms={!! $product->get_id() !!}&product_base={{ $product_base }}">
                        Crie a sua aqui
                      </a>
                    </div>
                  @endif
                  </a>

                  @php do_action( 'woocommerce_after_shop_loop_item' ); @endphp
              </li>
            @endforeach
      @endforeach
      </ul>
    </section>
  </div>

</section>

@endsection
