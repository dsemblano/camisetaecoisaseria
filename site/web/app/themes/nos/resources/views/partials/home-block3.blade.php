<section class="blockhome blockhome-3 flex flex-col overflow-hidden mb-8">
  <div class="blockhome-3-left my-8 w-full overflow-hidden md:w-1/2 text-md m-auto text-center leading-none">
      <h2 class="md:text-4xl text-pureblack">Crie e Customize</h2>
      <p class="md:text-2xl mb-6">todos os produtos</p>
      {{-- <figure class="order-2 items-end">
        <div class="imprima-button text-center">
          <a href="/design-editor">
            <button class="btn-estudio">CRIE A SUA AQUI</button>
          </a>
        </div>
      </figure> --}}
  </div>
  <div class="blockhome3-right flex flex-wrap -mx-2 overflow-hidden sm:-mx-4">
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
            <a class="linkimgprod my-2 px-2 w-1/2 overflow-hidden sm:my-4 sm:px-4 sm:w-1/3" href="{!! $img->get_permalink() !!}">
              @php
                $imgprod = $img->get_image($size = 'produtos', array('class'=>'imgprod w-full'));
              @endphp
              {!! $imgprod !!}
              <h2 class="text-base sm:text-xl mt-3 h-12 text-center">
                {!! $img->get_title() !!}
              </h2>
            </a>
      @endforeach
    {{-- @endforeach --}}
    {{-- <img src="@asset('images/home/produtos.png')" alt="imagens produtos"> --}}
  </div>
</section>

<section class="blockhome blockhome-3 mb-8 border-solid border-black border-t-2">
  <div class="flex flex-col overflow-hidden">
    <div
      class="blockhome-3-left my-8 w-full overflow-hidden md:w-1/2 text-md m-auto text-center leading-none">
      <h2 class="md:text-4xl text-pureblack">Camiseta É Coisa Séria</h2>
      <figure class="order-2 mt-8 items-end">
        <div class="imprima-button text-center">
          <a href="/camiseta-e-coisa-seria">
            <button class="btn-estudio">Veja todos os produtos</button>
          </a>
        </div>
      </figure>
    </div>
    <div class="blockhome3-right flex flex-wrap -mx-2 overflow-hidden sm:-mx-4">
      {{-- @foreach ($sub_categories as $sub)
      @php
        $destaques_produtos = wc_get_products(array(
          'limit' => 1,
          'status'=> 'publish',
          'orderby' => 'rand',
          'category' => $sub->slug
        ));
      @endphp --}}
      @foreach ($parent_category as $img_cat)
      {{-- @php $img_prod = wp_get_attachment_url($img->get_image_id(), $size = 'homeblock3' ) @endphp --}}
      <a class="linkimgprod my-2 px-2 w-1/2 overflow-hidden sm:my-4 sm:px-4 sm:w-1/3"
        href="{!! $img_cat->get_permalink() !!}">
        @php
        $imgprod = $img_cat->get_image($size = 'produtos', array('class'=>'imgprod w-full'));
        @endphp
        {!! $imgprod !!}
        <h2 class="text-base sm:text-xl mt-3 h-12 text-center">
          {!! $img_cat->get_title() !!}
        </h2>
      </a>
      @endforeach
      {{-- @endforeach --}}
      {{-- <img src="@asset('images/home/produtos.png')" alt="imagens produtos"> --}}
    </div>
  </div>
</section>
