<div class="insta mb-16 h-40 flex flex-col relative">
  <form class="email-input w-1/3 absolute">
    <h3>RECEBA NOSSAS PROMOÇÕES</h3>
    <div class="flex border-pureblack border-solid border-8">
      <input class="w-full border-none text-grey-dark mr-3 py-1 pl-4 tracking-widest text-xl focus:outline-none"
        type="text" placeholder="seuemail@exemplo.com.br" aria-label="Email">
      <button class="text-xl text-white bg-pureblack p-4" type="button">
        OK
      </button>
    </div>
  </form>
  <hr class="insta-hr">
  <h2 class="title-insta text-right text-pureblack text-3xl container absolute">Siga nosso <br><img
      src="@asset('images/instalogo.png')" alt="instagram logo" class="img-insta w-56"></h2>
</div>
{!! do_shortcode('[insta-gallery id="1"]') !!}