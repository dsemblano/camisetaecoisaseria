<footer class="content-info">
  <div class="footer-up flex flex-row content-between justify-between">
    <nav class="nav-footer1 border-r-2 border-solid border-black">
      @if (has_nav_menu('secondaryfooter1_navigation'))
      {!! wp_nav_menu(['theme_location' => 'secondaryfooter1_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
    <nav class="nav-footer2 border-r-2 border-solid border-black">
      @if (has_nav_menu('secondaryfooter2_navigation'))
      {!! wp_nav_menu(['theme_location' => 'secondaryfooter2_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
      @php dynamic_sidebar('sidebar-footerup') @endphp
  </div>
  <div class="footer-down bg-pureblack w-full py-6">
    <div class="container">
      <img src="@asset('images/footer.png')" alt="image footer" class="footer-img">
      <nav class="nav-secondary bg-pureblack">
        @if (has_nav_menu('secondary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'secondary_navigation', 'menu_class' => 'nav flex flex-row flex-wrap
        content-between justify-between container text-white py-5 text-2xl uppercase']) !!}
        @endif
      </nav>
      @php dynamic_sidebar('sidebar-footer') @endphp
    </div>
  </div>
</footer>
