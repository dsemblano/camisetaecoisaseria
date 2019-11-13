<header class="banner bg-black">
  <div class="container text-center flex flex-wrap">
    <div
      class="overflow-hidden overflow-hidden sm:px-1 sm:w-1/3 md:px-1 md:w-1/3 lg:px-1 lg:w-1/3 xl:px-1 xl:w-1/3">
      <h1 class="mt-2 mb-0">
        <a class="brand" href="{{ home_url('/') }}">
          {{-- <span>NÓS</span>
              <span>CAMISETA É COISA SÉRIA</span> --}}
          {{-- {{ get_bloginfo('name', 'display') }} --}}
          <img class="w-2/5" src="@asset('images/brand2.png')" alt="Nós camisetas" />
        </a>
      </h1>
    </div>
    <nav
      class="nav-primary overflow-hidden overflow-hidden sm:px-1 sm:w-1/3 md:px-1 md:w-2/3 lg:px-1 lg:w-2/3 xl:px-1 xl:w-2/3">
      @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</header>
