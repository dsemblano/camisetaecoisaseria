<nav class="nav-primary bg-pureblack mb-8">
  <div class="container flex flex-col md:flex-row items-center justify-between">
    @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav flex flex-col content-center
      items-center md:flex-row md:flex-wrap
      md:content-between md:justify-between container text-white py-5 text-2xl']) !!}
      @include('partials.socialshare')
    @endif
  </div>
</nav>
