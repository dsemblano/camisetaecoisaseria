<nav id="navigation" class="blockhome nav-primary w-full">
  <button class="hamburger hamburger--vortex" type="button" aria-label="Menu" aria-controls="navigation">
    <span class="hamburger-box">
      <span class="hamburger-inner"></span>
    </span>
  </button>

  {{-- <a href="#main-menu" id="main-menu-toggle" class="menu-toggle hamburger hamburger--vortex" aria-label="Abri menu">
    <span class="sr-only hamburger-box">Abri menu</span>
    <span class="hamburger-inner" aria-hidden="true"></span>
  </a> --}}

  @if (has_nav_menu('primary_navigation'))
  {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav teste flex uppercase pt-4 pl-4 flex-col md:flex-row bg-black bg-opacity-20 md:bg-transparent text-white font-bold justify-around text-left relative -top-4']) !!}
  @endif
</nav>
