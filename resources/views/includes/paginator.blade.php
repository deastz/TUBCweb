@if ($paginator->hasPages())
    <div class="row">
        {{-- Previous Page Link --}}
      <div class="col-md-3 col-md-offset-2">
        @if ($paginator->onFirstPage())
            <button class="btn btn-success btn-block disabled" style="background-color:#79c392;border-color:#75b88c;opacity:1;"><span>&laquo;</span></button>
        @else
            <a class="btn btn-success btn-block" href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a></button>
        @endif
      </div>

        {{-- Next Page Link --}}
      <div class="col-md-3 col-md-offset-2">
        @if ($paginator->hasMorePages())
            <a class="btn btn-success btn-block" href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a>
        @else
            <button class="btn btn-success disabled btn-block" style="background-color:#79c392;border-color:#75b88c;opacity:1;"><span>&raquo;</span></button>
        @endif
      </div>
@endif
