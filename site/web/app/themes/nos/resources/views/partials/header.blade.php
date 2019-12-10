<header class="banner bg-pureblack py-4">
  <div class="container flex flex-row justify-between">
    <h1 class="mb-0 w-2/4 md:w-1/5">
      <a class="brand" href="{{ home_url('/') }}">
        <img src="@asset('images/logov3.png')" alt="NÓS camisetas" />
      </a>
    </h1>
    @include('partials.home-block2')
    {{-- @include('partials/components.socialshare') --}}
  </div>
</header>
