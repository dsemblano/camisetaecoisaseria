{{--
  Template Name: Products Template
--}}

@extends('layouts.app')

@section('content')
<section class="products container">
  @while(have_posts()) @php the_post() @endphp
    <ul class="flex flex-wrap -mx-2 overflow-hidden xl:-mx-1">
      @foreach ($destaques_produtos as $product)
        <li class="last-products my-2 px-2 w-1/2 overflow-hidden sm:w-1/4 xl:my-1 xl:px-1 xl:w-1/4">
          {!!$product->get_image()!!}
          <h2 class="text-xl mt-3">
              <a href={{$product->get_permalink( )}}>{{$product->get_title()}}</a>
          </h2>
            @if ($product->get_price())
              <span>R${{$product->get_price()}}</span>
              @php
                $html = '<form action="' . esc_url( $product->add_to_cart_url() ) . '" class="cart" method="post" enctype="multipart/form-data">';
                // $html .= woocommerce_quantity_input( array(), $product, false );
                $html .= '<button type="submit" class="bg-green-nos hover:bg-green-nos-light text-grey-darkest font-bold py-2 px-4 mt-3 rounded">' . '<i class="fas fa-cart-plus mr-2"></i>' . esc_html( $product->add_to_cart_text() ) . '</button>';
                // $html .= '<i class="fas fa-cart-plus"></i>';
                $html .= '</form>';
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
