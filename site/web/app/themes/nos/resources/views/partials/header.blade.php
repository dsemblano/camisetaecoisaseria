<header class="banner bg-pureblack h-32">
  <div class="container flex flex-col md:flex-row md:justify-between md:items-center">
    <h1 class="mb-0">
      <a class="brand" href="{{ home_url('/') }}">
        <img class="text-center" src="@asset('images/logov3.png')" alt="NÓS camisetas" />
      </a>
    </h1>
    @include('partials.home-block2')
    {{-- @include('partials/components.socialshare') --}}
  </div>
</header>
