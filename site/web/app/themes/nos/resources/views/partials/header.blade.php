<header class="banner bg-pureblack py-4">
  <div class="container flex flex-row">
    @include('partials.home-block2')
    <h1 class="mb-0">
      <a class="brand" href="{{ home_url('/') }}">
        <img src="@asset('images/logov3.png')" alt="NÓS camisetas" />
      </a>
    </h1>
    {{-- @include('partials/components.socialshare') --}}
  </div>
</header>
