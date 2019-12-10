<nav id="navigation" class="nav-primary">
  <button class="hamburger hamburger--vortex" type="button" aria-label="Menu" aria-controls="navigation">
    <span class="hamburger-box">
      <span class="hamburger-inner"></span>
    </span>
  </button>
  @if (has_nav_menu('primary_navigation'))
  {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav bg-pureblack uppercase text-white py-5 text-2xl']) !!}
  @include('partials/components.socialshare')
  @endif
</nav>
