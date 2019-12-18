<section class="blockhome-1 md:h-slide1-xl flex flex-col justify-between">

  <div class="blockhome-1-container container flex justify-between items-center pt-8 md:pt-16 pb-16 md:pb-2">
    @include('partials/components.btn-customize')
    {{-- @include('partials/components.dtg') --}}
  </div>

  <div class="block1-down-container">
    <div class="block1-down border-solid border-pureblack border-t-1 w-full">
      <ul class="container flex flex-col items-end md:flex-row justify-between text-sm md:text-xl text-left text-white font-bold">
        <li class="flex items-center py-2 md:py-0 leading-tight w-85">
          <img src="@asset('images/home/block1/cores.png')" alt="ícone sem limite cores" />
          <span class="ml-4"><p>SEM</p><p>limite de cores</p></span>
        </li>
        <li class="flex items-center py-2 md:py-0 leading-tight w-85">
          <img src="@asset('images/home/block1/sempedido.png')" alt="ícone sem pedido" />
          <span class="ml-4"><p>SEM</p><p>pedido mínimo</p></span>
        </li>
        <li class="flex items-center py-2 md:py-0 leading-tight w-85">
          <img src="@asset('images/home/block1/algodao.png')" alt=" ícone 100% algodão certificado" />
          <span class="ml-4"><p>100% algodão</p><p>orgânico certificado</p></span>
        </li>
        <li class="flex items-center py-2 md:py-0 leading-tight w-85">
          <img src="@asset('images/home/block1/produtosprontaentrega.png')" alt="ícone produtos pronta entrega.png" />
          <span class="ml-4"><p>Produtos à</p><p>pronta entrega</p></span>
        </li>
      </ul>
    </div>

    <div class="citacao text-1xl text-base md:text-1xl text-white bg-pureblack text-xl">
      <div class="container flex flex-col md:flex-row justify-between items-center">
        <div class="citacao-container text-base text-center flex flex-col md:flex-row mb-4 md:mb-0 leading-relaxed">
          <span>IMAGINE<span class="hidden md:inline-block"> | </span></span>
          <span>INVENTE<span class="hidden md:inline-block"> | </span></span>
          <span>IMPRIMA</span>
        </div>
      </div>
    </div>
  </div>

</section>
