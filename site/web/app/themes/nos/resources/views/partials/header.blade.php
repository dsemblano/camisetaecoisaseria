@if (is_front_page())
    <header class="banner absolute bg-transparent">
  @else
    <header class="banner relative bg-grey-darkest">
@endif
  <div class="container max-w-4xl px-8 lg:px-0 flex flex-row justify-around lg:justify-between items-center">
    <div class="md:flex md:flex-row md:w-full lg:hidden class1">
      @include('partials.home-block2')
    </div>
    <h1 class="ml-12 xl:ml-0 logoimprima">
      @include('partials/components.logo')
    </h1>
    <div class="hidden lg:flex lg:flex-row lg:w-full items-center class2 relative">
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
