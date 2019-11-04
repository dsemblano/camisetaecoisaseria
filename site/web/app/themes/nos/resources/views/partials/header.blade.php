<header class="banner bg-black">
  <h1 class="container mx-auto">
    <a class="brand" href="{{ home_url('/') }}">
      {{-- {{ get_bloginfo('name', 'display') }} --}}
      <img src="@asset('images/logo.png')" alt="Nós camisetas" />
    </a>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </h1>
</header>
