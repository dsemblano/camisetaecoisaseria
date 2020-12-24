<header class="banner">
  <div class="container flex flex-row justify-around lg:justify-between items-center">
    <div class="md:flex md:flex-row md:w-full lg:hidden class1">
      @include('partials.home-block2')
    </div>
    <h1 class="ml-12 xl:ml-0">
      @include('partials/components.logo')
    </h1>
    <div class="hidden px-4 lg:flex lg:flex-row lg:w-full items-center class2 relative bottom-8">
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
