<header class="banner bg-black">
  <div class="container text-center flex flex-wrap">
    <div
      class="w-full overflow-hidden sm:w-full md:w-full lg:w-full xl:w-1/2">
      <h1>
        <a class="brand" href="{{ home_url('/') }}">
          {{-- <span>NÓS</span>
              <span>CAMISETA É COISA SÉRIA</span> --}}
          {{-- {{ get_bloginfo('name', 'display') }} --}}
          <img src="@asset('images/logo.png')" alt="Nós camisetas" />
        </a>
      </h1>
    </div>
    <nav
      class="nav-primary w-full overflow-hidden sm:w-full md:w-full lg:w-full xl:w-1/2">
      @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</header>
