<nav id="navigation" class="nav-primary text-center bg-pureblack md:w-4/5 md:flex md:justify-between">
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
  {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav flex flex-col md:flex-row uppercase text-white py-5 text-2xl']) !!}
  @include('partials/components.socialshare')
  @endif
</nav>
