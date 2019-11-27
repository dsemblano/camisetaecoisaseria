<section class="tracking-widest py-5 text-1xl text-base md:text-1xl">
  <p class="container text-center">Sem limite de cores  | Sem pedido mínimo | Produtos à pronta entrega</p>
</section>

<nav
class="nav-primary bg-pureblack">
@if (has_nav_menu('primary_navigation'))
{!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav flex flex-row flex-wrap content-between justify-between container text-white py-5 text-2xl']) !!}
@endif
</nav>

