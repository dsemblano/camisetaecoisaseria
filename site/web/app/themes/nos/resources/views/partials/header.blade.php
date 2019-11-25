<header class="banner bg-pureblack">
  <div class="container text-center">
      <h1 class="pt-5 mb-0 flex items-center justify-between">
        <a class="brand" href="{{ home_url('/') }}">
          {{-- <span>NÓS</span>
              <span>CAMISETA É COISA SÉRIA</span> --}}
          {{-- {{ get_bloginfo('name', 'display') }} --}}
          <img class="text-center" src="@asset('images/imprimanos.png')" alt="Nós camisetas" />
          @php echo do_shortcode('[TheChamp-Sharing]') @endphp
        </a>
      </h1>
    </div>
</header>
