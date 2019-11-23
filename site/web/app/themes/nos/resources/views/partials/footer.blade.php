<footer class="content-info bg-pureblack w-full py-6">
  <div class="container">
    <img src="@asset('images/footer.png')" alt="image footer" class="footer-img">
    <nav class="nav-secondary bg-pureblack">
      @if (has_nav_menu('secondary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'secondary_navigation', 'menu_class' => 'nav flex flex-row flex-wrap content-between justify-between container text-white py-5 text-2xl uppercase']) !!}
    @endif
    </nav>
    @php dynamic_sidebar('sidebar-footer') @endphp
  </div>
</footer>
