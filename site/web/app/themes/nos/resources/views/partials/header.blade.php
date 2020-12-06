<header class="banner bg-pureblack pt-4 pb-1">
  <div class="container flex flex-row justify-around lg:justify-between">
    <div class="md:flex md:flex-row md:w-full xl:hidden">
      @include('partials.home-block2')
    </div>
    <h1>
      @include('partials/components.logo')
    </h1>
    <div class="hidden xl:flex xl:flex-row xl:w-full items-center">
      @include('partials.home-block2')
      {{-- <div class="whatsapp">
        {!! do_shortcode('[ht-ctc-chat]') !!}
      </div> --}}
    </div>
    @include('partials/components.logoimprima')
    {{-- <div class="whatsapp xl:hidden">
      {!! do_shortcode('[ht-ctc-chat]') !!}
    </div> --}}
    {{-- @include('partials/components.socialshare') --}}
  </div>
</header>
