@if (is_front_page())
    <header class="banner header-home absolute bg-transparent">
  @else
    <header class="banner header-pages relative bg-grey-darkest">
@endif
  <div class="container h-16 lg:h-32 pt-4 max-w-4xl lg:max-w-3xl lg:px-0 flex flex-row headerlg:justify-between items-center">
    <h1 class="w-1/4 overflow-hidden lg:w-auto lg:ml-12 xl:ml-0 logoimprima">
      @include('partials/components.logo')
    </h1>
    <div class="w-2/4 overflow-hidden pb-4 md:flex md:flex-row lg:hidden text-center class1">
      @include('partials.home-block2')
    </div>
    <div class="w-1/4 hidden lg:flex lg:flex-row lg:w-full h-full items-center menu-desktop relative">
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
  @include('partials/components.search')
</header>

