<section class="instagram relative border-solid border-gray border-b-1 pb-4">
  <div class="insta container md:h-40 flex flex-col relative">
    <form class="email-input md:w-1/3 absolute">
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
  <div class="sigainsta absolute">
    <hr class="insta-hr">
    <h2 class="title-insta text-right text-pureblack md:w-1/4 text-3xl container absolute">
      <img src="@asset('images/s1.svg')" alt="instagram logo" class="img-insta">
    </h2>
  </div>
  @include('partials.slideinsta')

</section>
