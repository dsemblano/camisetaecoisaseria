{{--
  Template Name: Products Template
--}}

@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  <div class="content products container">
      @foreach ($sub_categories as $sub)
        <section id="{{ $sub->slug }}-page" class="category-products flex flex-col my-12 border-solid border-gray border-b-1 pb-6">
          <h2 class="page-header-allcategories text-center">
            <a class="header-link" href={{ esc_url(get_category_link($sub->cat_ID)) }}>{{ $sub->name }}</a>
          </h2>
          <ul class="flex flex-wrap p-0 text-center">
          @php
            $destaques_produtos = wc_get_products(array(
                'limit' => -1,
                'status'=> 'publish',
                'category' => $sub->slug
            ));
          @endphp
            @foreach ($destaques_produtos as $product)
              <li class="my-2 px-2 w-1/2 overflow-hidden sm:w-1/6 md:w-1/6">
                <a href="{!! $product->get_permalink() !!}">
                  {!! $product->get_image() !!}
                  <h2 class="text-sm mt-3 h-8">
                    {!! $product->get_title() !!}
                  </h2>

                  @if ($product->get_price())
                    @php
                      $product_base = get_post_meta($product->get_id(), 'lumise_product_base', true);
                    @endphp
                    <span>R$ {!! $product->get_price() !!}</span>
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
          </ul>
        </section>
      @endforeach
  </div>

</section>

@endsection
