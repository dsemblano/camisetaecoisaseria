<!doctype html>
<html {!! get_language_attributes() !!}>
@include('partials.head')

<body @php body_class() @endphp>
  @include('partials.facebook')
  @php do_action('get_header') @endphp
  @include('partials.header')

  @if (is_front_page())
  <div class="wrap" role="document">
    <main class="main">
      {{-- @include('partials.home-block1') --}}
      @else
      <div class="wrap" role="document">
        <main class="main container">
          @endif

          @yield('content')
        </main>
        @if (App\display_sidebar())
        <aside class="sidebar">
          @include('partials.sidebar')
        </aside>
        @endif
      </div>
      @php do_action('get_footer') @endphp
      @include('partials.footer')
      @php wp_footer() @endphp
      @include('partials/components.arrowhome')
</body>

</html>
