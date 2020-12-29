{{--
  Template Name: CamisetaCoLAB Template
--}}

@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  <div class="content products container">
    <section class="category-products flex flex-col lg:my-12 border-solid border-gray border-b-1 pb-6">
      {{-- <ul class="nos_products flex flex-wrap -mx-4 p-0 text-center">
        @foreach ($bandejas_imp as $img)
        <li class="my-4 px-4 w-1/2 overflow-hidden sm:w-1/4 md:w-1/4">
          <a class="linkimgprod my-2 px-2 w-1/2 overflow-hidden sm:w-1/3" href="{!! $img->get_permalink() !!}">
            @php
              $imgprod = $img->get_image($size = 'produtos', array('class'=>'imgprod p-6'));
            @endphp
            {!! $imgprod !!}
            <h2>
              {!! $img->get_title() !!}
            </h2>
            <span class="price">{!! $img->get_price_html() !!}</span>
          </a>
        </li>
        @endforeach

      </ul> --}}
      @php
      // The product category taxonomy
      $taxonomy = 'product_cat';

      // Get the parent categories IDs
      $parent_cat_ids = get_terms( $taxonomy, array(
      'parent' => 0,
      'hide_empty' => false,
      'fields' => 'ids'
      ) );

      // Get only "child" WP_Term Product categories
      $subcategories = get_terms( $taxonomy, array(
      'exclude' => $parent_cat_ids,
      'orderby' => 'name',
      'order' => 'asc',
      'hide_empty' => false,
      ) );

      if( ! empty( $subcategories ) ){
      echo '<ul>';
        foreach ($subcategories as $subcategory) {
        echo '<li>
          <a href="'. get_term_link($subcategory) .'">' . $subcategory->name.'</a>
        </li>';
        }
        echo '</ul>';
      }
      @endphp
    </section>
  </div>

</section>

@endsection
