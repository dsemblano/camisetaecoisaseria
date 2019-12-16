<footer class="content-info md:mt-20">
  <div class="footer-up container leading-relaxed text-base flex flex-col md:flex-row pt-4">
    <nav class="nav-footer1 border-b-2 md:border-r-2 md:border-b-0 border-solid border-gray w-full md:w-20">
      @if (has_nav_menu('secondaryfooter1_navigation'))
      {!! wp_nav_menu(['theme_location' => 'secondaryfooter1_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
    <nav class="nav-footer2 border-b-2 md:border-r-2 md:border-b-0 border-solid border-gray w-full md:w-35">
      @if (has_nav_menu('secondaryfooter2_navigation'))
      {!! wp_nav_menu(['theme_location' => 'secondaryfooter2_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
      @php dynamic_sidebar('sidebar-footerup') @endphp
  </div>

  <div class="footer-down bg-pureblack w-full pt-2">
    <div class="container flex flex-row md:flex-row items-center justify-between">
      @include('partials/components.logo')
      {{-- <nav class="nav-secondary bg-pureblack">
        @if (has_nav_menu('secondary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'secondary_navigation', 'menu_class' => 'nav flex flex-col md:flex-row text-white py-5 text-2xl capitalize']) !!}
        @endif
      </nav> --}}
      @include('partials/components.socialshare')
    </div>
    @php dynamic_sidebar('sidebar-footer') @endphp
  </div>
</footer>
