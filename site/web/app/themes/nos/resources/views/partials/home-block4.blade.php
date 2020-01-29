<section class="blockhome-4 md:my-16">
  <h2 class="text-4xl mb-8 pt-8 md:text-5xl text-center text-pureblack border-solid border-black border-t-2">
    <a href="/servicos">
      Serviços
    </a>
  </h2>
  <ul class="inline-flex container flex-col md:flex-row items-center justify-between items-center text-center p-0 mb-0">
    <li class="w-full mb-8 md:w-1/25">
      <a href="/servicos/impressao-digital-avulsa-em-algodao">
        <div class="img-container" role="button">
          <img src="@asset('images/home/block4/impressaodigital.png')" alt="blusa 1" class="blockhome4-img">
          <div class="text-over">
            {{-- <h3>Impressão Digital</h3> --}}
            <p class="text">Saiba mais</p>
          </div>
        </div>
      </a>
    </li>

    <li class="w-full mb-8 md:w-1/25">
      <a href="/servicos/outsourcing">
        <div class="img-container" role="button">
          <img src="@asset('images/home/block4/outsourcing.png')" alt="blusa 1" class="blockhome4-img">
          <div class="text-over">
            {{-- <h3>Outsourcing</h3> --}}
            <p>Saiba mais</p>
          </div>
        </div>
      </a>
    </li>

    <li class="w-full mb-8 md:w-1/25">
      <a href="/servicos/dropshipping">
        <div class="img-container" role="button">
          <img src="@asset('images/home/block4/dropshipping.png')" alt="blusa 1" class="blockhome4-img">
          <div class="text-over">
            {{-- <h3>Dropshipping</h3> --}}
            <p>Saiba mais</p>
          </div>
        </div>
      </a>
    </li>

  </ul>
  @include('partials/components.ribbon-algodao')
</section>
