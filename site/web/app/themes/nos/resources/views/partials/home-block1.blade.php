<section class="blockhome-1 md:h-slide1-xl flex flex-col justify-between">

  <div class="blockhome-1-container h-64 container flex items-end pt-8 md:pt-16 md:pb-2">
    @include('partials/components.btn-customize')
    {{-- @include('partials/components.dtg') --}}
  </div>

  <div class="block1-down-container">
    <div class="block1-down border-solid border-pureblack border-t-1 w-full">
      <div class="container text-sm md:ml-auto md:text-xl text-left text-white font-bold w-full">
        <div class="container-up">
          <div class="flex items-center py-2 md:py-0 leading-tight w-full">
            <img src="@asset('images/home/block1/cores.png')" alt="ícone sem limite cores" />
            <span class="ml-4 text-xs md:text-lg"><p>SEM</p><p>limite de cores</p></span>
          </div>
          <div class="flex items-center py-2 md:py-0 leading-tight w-full">
            <img src="@asset('images/home/block1/sempedido.png')" alt="ícone sem pedido" />
            <span class="ml-4 text-xs md:text-lg"><p>SEM</p><p>pedido mínimo</p></span>
          </div>
        </div>
        <div class="container-up">
          <div class="flex items-center py-2 md:py-0 leading-tight w-full">
            <img src="@asset('images/home/block1/algodao.png')" alt=" ícone 100% algodão certificado" />
            <span class="ml-4 text-xs md:text-lg"><p>100% algodão</p><p>orgânico certificado</p></span>
          </div>
          <div class="flex items-center py-2 md:py-0 leading-tight w-full">
            <img src="@asset('images/home/block1/produtosprontaentrega.png')" alt="ícone produtos pronta entrega.png" />
            <span class="ml-4 text-xs md:text-lg"><p>Produtos à</p><p>pronta entrega</p></span>
          </div>
        </div>
      </div>
    </div>

    <div class="citacao text-center tracking-sm md:tracking-xl py-4 text-sm md:text-1xl text-white bg-pureblack">
      <span>IMAGINE - INVENTE - IMPRIMA </span>
    </div>
  </div>

</section>
