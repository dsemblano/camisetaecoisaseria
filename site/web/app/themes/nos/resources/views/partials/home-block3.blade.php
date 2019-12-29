<section class="blockhome-3 container flex flex-wrap items-center -mx-1 overflow-hidden mt-0 md:mt-12 mb-12">
  <div class="blockhome-3-left m-auto mt-8 md:mt-0 mb-8 my-1 px-1 w-1/2 overflow-hidden text-center leading-none">
      <h2 class="text-4xl text-pureblack">Crie e Customize</h2>
      <p class="text-2xl mb-6">todos os produtos</p>
      <figure class="order-2 items-end">
        <div class="imprima-button text-center">
          <a href="/design-editor">
            <button class="btn-estudio">CRIE OUTROS PRODUTOS</button>
          </a>
        </div>
      </figure>
  </div>
  <div class="my-1 px-1 w-1/2 overflow-hidden">
    <div class="blockhome3-right flex flex-wrap -mx-1 overflow-hidden">
      @foreach ($sub_categories as $sub)
        @php
          $destaques_produtos = wc_get_products(array(
            'limit' => 1,
            'status'=> 'publish',
            'orderby' => 'rand',
            'category' => $sub->slug
          ));
        @endphp
        @foreach ($destaques_produtos as $img)
          {{-- @php $img_prod = wp_get_attachment_url($img->get_image_id(), $size = 'homeblock3' ) @endphp --}}
              <a class="linkimgprod my-1 px-1 w-1/2 overflow-hidden" href="{!! $img->get_permalink() !!}">
                @php
                  $imgprod = $img->get_image($size = 'homeblock3', array('class'=>'imgprod w-full'));
                @endphp
                {!! $imgprod !!}
              </a>
        @endforeach
      @endforeach
      {{-- <img src="@asset('images/home/produtos.png')" alt="imagens produtos"> --}}
        </div>
  </div>
</section>
