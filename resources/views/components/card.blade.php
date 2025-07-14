  <div class="card">
      <img src="{{ $card['image'] }}" class="card-img-top" alt="...">
      <div class="card-body">
          <h5 class="card-title">{{ $card['title'] }}</h5>
          @if (isset($showDescription))
              <p class="card-text">{{ $card['description'] }}</p>
          @endif
      </div>
      {{-- @if (request()->routeIs('pages.product.*')) hidden @endif --}}
      @if (isset($showButton))
          <a href="{{ route('pages.product', ['product' => $card]) }}" class="btn  btn-primary ">Vai al
              dettaglio</a>
      @endif
  </div>
