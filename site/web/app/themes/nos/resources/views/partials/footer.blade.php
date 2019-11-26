<footer class="content-info mt-32">
  <div class="footer-up leading-normal text-2xl flex flex-col md:flex-row">
    <nav class="nav-footer1 border-b-2 md:border-r-2 border-solid border-black w-full md:w-20">
      @if (has_nav_menu('secondaryfooter1_navigation'))
      {!! wp_nav_menu(['theme_location' => 'secondaryfooter1_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
    <nav class="nav-footer2 border-b-2 md:border-r-2 border-solid border-black w-full md:w-35">
      @if (has_nav_menu('secondaryfooter2_navigation'))
      {!! wp_nav_menu(['theme_location' => 'secondaryfooter2_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
      @php dynamic_sidebar('sidebar-footerup') @endphp
  </div>

  <div class="footer-down bg-pureblack w-full py-6">
    <div class="container flex flex-col md:flex-row items-center justify-between">
      <img src="@asset('images/footer.png')" alt="image footer" class="footer-img w-1/4">
      <nav class="nav-secondary bg-pureblack">
        @if (has_nav_menu('secondary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'secondary_navigation', 'menu_class' => 'nav flex flex-col md:flex-row text-white py-5 text-2xl uppercase']) !!}
        @endif
      </nav>
      @php echo do_shortcode('[TheChamp-Sharing]') @endphp
    </div>
    @php dynamic_sidebar('sidebar-footer') @endphp
  </div>
</footer>
