<section class="blockhome blockhome-3 container flex flex-col overflow-hidden mt-8">
  <div class="blockhome-3-left px-2 w-full overflow-hidden md:w-1/2 text-md m-auto text-center leading-none">
      <h2 class="md:text-4xl text-pureblack">Crie e Customize</h2>
      <p class="md:text-2xl mb-6">todos os produtos</p>
      <figure class="order-2 items-end">
        <div class="imprima-button text-center">
          <a href="/design-editor">
            <button class="btn-estudio">CRIE OUTROS PRODUTOS</button>
          </a>
        </div>
      </figure>
  </div>
    <div class="blockhome3-right flex flex-wrap -mx-2 overflow-hidden">
      {{-- @foreach ($sub_categories as $sub)
        @php
          $destaques_produtos = wc_get_products(array(
            'limit' => 1,
            'status'=> 'publish',
            'orderby' => 'rand',
            'category' => $sub->slug
          ));
        @endphp --}}
        @foreach ($home_products as $img)
          {{-- @php $img_prod = wp_get_attachment_url($img->get_image_id(), $size = 'homeblock3' ) @endphp --}}
              <a class="linkimgprod my-2 px-2 w-full overflow-hidden sm:w-1/3" href="{!! $img->get_permalink() !!}">
                @php
                  $imgprod = $img->get_image($size = 'produtos', array('class'=>'imgprod w-full'));
                @endphp
                {!! $imgprod !!}
                <h2 class="text-sm mt-3 h-12 text-center">
                  {!! $img->get_title() !!}
                </h2>
              </a>
        @endforeach
      {{-- @endforeach --}}
      {{-- <img src="@asset('images/home/produtos.png')" alt="imagens produtos"> --}}
      </div>
</section>
