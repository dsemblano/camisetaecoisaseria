<section id="carousel" class="main-carousel container h-32 my-20 sm:h-40 md:h-57 lg:h-slidexl" data-flickity='{ "cellAlign": "left", "contain": true, "wrapAround": true, "lazyLoad": true, "setGallerySize": false, "autoPlay": false, "dragThreshold": 20 }'>
  {{-- @if ($slideshow->have_posts())
    @while ($slideshow->have_posts()) @php $slideshow->the_post() @endphp
        <div class="carousel-cell w-full">
            <a href={{ the_permalink() }}>
              {{ the_post_thumbnail('slideshow') }} --}}
              {{-- <header>
                <h2>{{ the_title() }}</h2>
                <p>{{ FrontPage::slideshowExcerpt() }}</p>
              </header> --}}
            {{-- </a>
        </div>
    @endwhile
  @else
    <div class="alert alert-warning">
      {{ __('Desculpe, nenhum resultado encontrado.', 'sage') }}
    </div>
  @endif --}}
  {{-- <div class="carousel-cell w-full">
    <video src="@asset('images/camisanos.mp4')" autoplay loop muted class="slideshow-item w-full lg:h-slidelg"></video>
  </div> --}}
  <div class="carousel-cell flex w-full">
    <video src="@asset('images/home/personalize.mp4')" autoplay loop muted class="slideshow-item m-auto"></video>
  </div>
  <div class="carousel-cell w-full">
    <img src="@asset('images/home/block1-hdbg.jpg')" alt="slideshow" class="slideshow-item w-full">
  </div>
  <div class="carousel-cell w-full">
    <img src="@asset('images/home/customise.jpeg')" alt="slideshow" class="slideshow-item w-full">
  </div>
</section>
