{{--
  Template Name: Products Template
--}}

@extends('layouts.app')

@section('content')
<section class="products container">
  @include('partials.page-header')
  @while(have_posts()) @php the_post() @endphp
    <ul class="flex flex-wrap p-0 overflow-hidden xl:-mx-1">
      {{-- {!! do_shortcode('[product_categories]') !!} --}}
      {{-- {!! do_shortcode('[products limit="4" columns="4" orderby="id" order="DESC" visibility="visible"]') !!} --}}
      {{-- @php
        // The product category taxonomy
        $taxonomy = 'product_cat';

        // Get the parent categories IDs
        $parent_cat_ids = get_terms( $taxonomy, array(
            'parent'     => 0,
            'hide_empty' => false,
            'category' => 'faca-sua-nos',
            'fields'     => 'ids'
        ) );

        // Get only "child" WP_Term Product categories
        $subcategories = get_terms( $taxonomy, array(
            'exclude'     => $parent_cat_ids,
            'orderby'    => 'name',
            'order'      => 'asc',
            'hide_empty' => false,
        ) );

        if( ! empty( $subcategories ) ){
            echo '<ul>';
            foreach ($subcategories as $subcategory) {
                echo '<li>
                    <a href="'. get_term_link($subcategory) .'" >' . $subcategory->name.'</a>
                </li>';
            }
            echo '</ul>';
        }
      @endphp --}}
      @php
        $parent_cat_NAME = 'faca-sua-nos';
        $IDbyNAME = get_term_by('slug', $parent_cat_NAME, 'product_cat');
        // print_r ($IDbyNAME);
        $product_cat_ID = $IDbyNAME->term_id;

          $args = array(
            'hierarchical' => 1,
            'show_option_none' => '',
            'hide_empty' => 0,
            'parent' => $product_cat_ID,
            'taxonomy' => 'product_cat'
          );
        $subcats = get_categories($args);
          echo '<ul class="wooc_sclist">';
            foreach ($subcats as $sc) {
              $link = get_term_link( $sc->slug, $sc->taxonomy );
                echo '<li><a href="'. $link .'">'.$sc->name.'</a></li>';
            }
          echo '</ul>';
      @endphp
      @foreach ($destaques_produtos as $product)
        <li class="last-products my-2 px-2 w-1/2 overflow-hidden sm:w-1/4 xl:mt-1 xl:mb-8 xl:px-5 xl:w-1/4">
          {!!$product->get_image()!!}
          <h2 class="text-base mt-3">
              <a href={{$product->get_permalink( )}}>{{$product->get_title()}}</a>
          </h2>
            @if ($product->get_price())
            @php
                $product_base = get_post_meta($product->get_id(), 'lumise_product_base', true);
                // echo $product_base;
            @endphp
              <span>R${{$product->get_price()}}</span>
              {{-- &product_base=$product->cms_id --}}
              {{-- @php
                $html = '<form action="' . esc_url( $product->add_to_cart_url() ) . '" class="cart" method="post" enctype="multipart/form-data">';
                // $html .= woocommerce_quantity_input( array(), $product, false );
                $html .= '<button type="submit" class="bg-green-nos hover:bg-green-nos-light text-grey-darkest font-bold py-2 px-4 mt-3 rounded">' . '<i class="fas fa-cart-plus mr-2"></i>' . esc_html( $product->add_to_cart_text() ) . '</button>';
                // $html .= '<i class="fas fa-cart-plus"></i>';
                $html .= '</form>';
                echo $html;
              @endphp --}}
              @php
                $html ='<a class="lumise-button-customize btn-estudio-products uppercase" href="/design-editor/?product_cms='. $product->get_id() .'&product_base=' . $product_base .'" type="button">Crie a sua aqui</a>';
                // $html ='<a class="lumise-button-customize btn-estudio button" href="/design-editor/?product_cms='. $product->get_id() .'&product_base=' . '" type="button">Customize</a>';
                echo $html;
              @endphp
            @endif
          @php do_action( 'woocommerce_after_shop_loop_item' ) @endphp
        </li>
      @endforeach
      </ul>
  @endwhile
</section>

@endsection
