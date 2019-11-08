@foreach ($destaques as $product)
  <li class="last-products sm: my-12 sm:px-1 sm:w-1/4 md:my-1 md:px-1 md:w-1/2 lg:my-1 lg:px-1 lg:w-1/4 xl:my-1 xl:px-1 xl:w-1/4">
    {!!$product->get_image()!!}
    <h2 class="text-xl">
        <a href={{$product->get_permalink( )}}>{{$product->get_title()}}</a>
    </h2>
      @if ($product->get_price())
        <span>R${{$product->get_price()}}</span>
        <span>{{$product->add_to_cart_url()}}</span>
        @php
          $html = '<form action="' . esc_url( $product->add_to_cart_url() ) . '" class="cart" method="post" enctype="multipart/form-data">';
          $html .= woocommerce_quantity_input( array(), $product, false );
          $html .= '<button type="submit" class="button alt">' . esc_html( $product->add_to_cart_text() ) . '</button>';
          $html .= '</form>';
          echo $html;
        @endphp
      @endif
    @php do_action( 'woocommerce_after_shop_loop_item' ) @endphp
  </li>
@endforeach
