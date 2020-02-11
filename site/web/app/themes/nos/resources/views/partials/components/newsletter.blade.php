<div class="newsletter mb-20 md:mb-1 mt-20 md:h-40 flex flex-col justify-center items-baseline md:flex-row relative">
  <h3 class="mb-4 md:mr-12">UM EMAIL POR MÊS E NADA MAIS</h3>
  <form class="email-input w-full md:w-1/3">
    {{-- <h3>Receba nossas promoções</h3> --}}
    <div class="tnp tnp-widget-minimal tnp-subscription flex flex-wrap border-pureblack border-solid border-8">
      <form class="tnp-form" action="https://imprimasuacamiseta.com.br/?na=s" method="post" onsubmit="return newsletter_check(this)">
        <input type="hidden" name="nr" value="widget-minimal">
        <div class="tnp-field tnp-field-email w-5/6 overflow-hidden border-none text-grey-dark tracking-widest text-xl focus:outline-none">
          <input class="tnp-email" type="email" required="" name="ne" value="" placeholder="seuemail@exemplo.com.br">
        </div>
        <div class="tnp-field tnp-field-button w-1/6 overflow-hidden text-xl text-white bg-pureblack">
          <input class="tnp-submit" type="submit" value="OK" >
        </div>
      </form>
      {{-- <form method="post" action="http://camisetaecoisaseria.test/?na=s" onsubmit="return newsletter_check(this)">
        <input type="hidden" name="nlang" value="">
        <div class="tnp-field tnp-field-email w-5/6 overflow-hidden border-none text-grey-dark tracking-widest text-xl focus:outline-none">
          <input class="tnp-email" placeholder="seuemail@exemplo.com.br" type="email" name="ne" required>
        </div>
        <div class="tnp-field tnp-field-button w-1/6 overflow-hidden text-xl text-white bg-pureblack">
          <input class="tnp-submit" type="submit" value="OK" >
        </div>
      </form> --}}
      </div>

    {{-- <div class="flex border-pureblack border-solid border-8">
      <input class="w-full border-none text-grey-dark mr-3 py-1 pl-4 tracking-widest text-xl focus:outline-none"
        type="email" name="EMAIL" value="Inscreva-se" placeholder="seuemail@exemplo.com.br" aria-label="Email">
      <input type="submit" value="OK" class="text-xl text-white bg-pureblack p-4" />
    </div> --}}
  </form>
</div>
