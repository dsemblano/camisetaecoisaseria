<section class="slideshow border-b-1 border-solid border-black">
  <div class="container">
    {!! do_shortcode('[smartslider3 slider=4]') !!}
    <div class="newsletter mb-20 md:mb-1 mt-20 md:h-40 flex flex-col justify-center items-baseline md:flex-row relative">
      <h3 class="mb-4 md:mr-12">UM EMAIL POR MÊS E NADA MAIS</h3>
      <form class="email-input w-full md:w-2/5">
        {{-- <h3>Receba nossas promoções</h3> --}}
        {{-- {!! do_shortcode('[wd_hustle id="Newsletter" type="embedded"/]') !!} --}}
        <div class="flex border-pureblack border-solid border-8">
          <input class="w-full border-none text-grey-dark mr-3 py-1 pl-4 tracking-widest text-xl focus:outline-none"
            type="text" placeholder="seuemail@exemplo.com.br" aria-label="Email">
          <button class="text-xl text-white bg-pureblack p-4" type="button">
            OK
          </button>
        </div>
      </form>
    </div>
  </div>
</section>

