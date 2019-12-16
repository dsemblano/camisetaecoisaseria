<section class="blockhome-1 h-screen flex flex-col flex-no-wrap justify-between">

  <div class="blockhome-1-container container flex justify-between items-center pt-8 md:pt-16 pb-16 md:pb-2">
    @include('partials/components.btn-customize')
    @include('partials/components.dtg')
  </div>

  <div class="block1-down-container">
    <div class="block1-down border-solid border-pureblack border-t-1 w-full">
      <div class="container flex flex-col text-center md:text-left md:flex-row justify-between text-1xl md:text-2xl text-white">
        <span>SEM limite de cores</span>
        <span>SEM pedido mínimo</span>
        <span>100% algodão certificado</span>
        <span>Produtos à pronta entrega</span>
      </div>
    </div>

    <div class="citacao text-1xl text-base md:text-1xl text-white bg-pureblack text-xl">
      <div class="container flex flex-col md:flex-row justify-between items-center">
        <span class="text-center mb-4 md:mb-0 leading-relaxed">IMAGINE | CRIE | INVENTE | IMPRIMA</span>
        <div class="block1-down-logos">
          <a href="/design-editor/">
            <img src="@asset('images/home/dtgimprima.png')" alt="DTG imprima imagem" class="btn-dtgimprima">
          </a>
        </div>
      </div>
    </div>
  </div>

</section>
