{{--
  Template Name: Products Template
--}}

@extends('layouts.app')

@section('content')
<section class="products container">
  @include('partials.page-header')
  @php
    // $IDbyNAME = get_term_by('slug', 'faca-sua-nos', 'product_cat');
    $product_cat_ID = get_term_by('slug', 'faca-sua-nos', 'product_cat')->term_id;
    // var_dump($product_cat_ID);
    $args = array(
      'hierarchical' => 1,
      'show_option_none' => '',
      'hide_empty' => 0,
      'parent' => $product_cat_ID,
      'taxonomy' => 'product_cat'
    );
    $subcats = get_categories($args);
    // var_dump($subcats);
      // echo '<ul class="wooc_sclist">';
      //   foreach ($subcats as $sc) {
      //     $link = get_term_link( $sc->slug, $sc->taxonomy );
      //       echo '<li><a href="'. $link .'">'.$sc->name.'</a></li>';
      //   }
      // echo '</ul>';
      // End category parent and subs
  @endphp

  @php
  //   $args = array(
  //     'limit' => -1,
  //     'status'=> 'publish',
  //     'category' => 'customize-babylook',
  // );

      // $destaques_produtos = wc_get_products(array(
      //   'limit' => -1,
      //   'status'=> 'publish',
      //   'category' => 'customize-babylook'
      // ));
      // var_dump($destaques_produtos);
      // $destaques_produtos = get_term($args);
  @endphp

  {{-- @php
    $query = new WC_Product_Query( array(
      'limit' => 10,
      'orderby' => 'date',
      'order' => 'DESC',
      'category' => 'faca-sua-nos',
    ) );
    $products = $query->get_products();
  @endphp --}}


{{-- Categorias filho --}}
@foreach ($subcats as $category)
  <div class="page-header-allcategories">
    <h2>
      <a class="header-link" href={{ esc_url(get_category_link($category->cat_ID)) }}>
        {{ $category->name }}
      </a>
    </h2>
  </div>
  <section id="{{ $category->slug }}-page" class="category-parent row">
        {{-- Sub categorias --}}
    <ul class="flex flex-row">
    @php
    $destaques_produtos = wc_get_products(array(
        'limit' => -1,
        'status'=> 'publish',
        'category' => $category->slug
      ));
      foreach ($destaques_produtos as $product) {
        // echo 'Pai de ' . $product->category . '<br>';
        // echo $product->name;
        echo '<li>';
        echo $product->get_image();
        echo '<h2 class="text-base mt-3">';
        echo '<a href=' . $product->get_permalink( ) . '>' . $product->get_title() . '</a>';
        echo '</h2>';
            if ($product->get_price()) {
                $product_base = get_post_meta($product->get_id(), 'lumise_product_base', true);
                // echo $product_base;
                echo '<span>R$' . $product->get_price() . '</span>';
                $html ='<a class="lumise-button-customize btn-estudio-products uppercase" href="/design-editor/?product_cms='. $product->get_id() .'&product_base=' . $product_base .'" type="button">Crie a sua aqui</a>';
                echo $html;
            }

        do_action( 'woocommerce_after_shop_loop_item' );
        echo '</li>';
        }
    @endphp
    </ul>
  </section>
@endforeach
</section>

@endsection
