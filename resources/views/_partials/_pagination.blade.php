{{-- Pagination --}}
@if ($paginator->hasPages())
    <ul class="pagination border border-secondary">

        @if ($paginator->onFirstPage())
            <li class="page-item disable">
                <span class="page-link">
                    <i class="fa-solid fa-chevron-left" style="color: #000000;"></i>
                     Préc.
                </span>
            </li>
        @else
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">
                    <i class="fa-solid fa-chevron-left" style="color: #000000;"></i>
                    Préc.
                </a>
            </li>
        @endif

        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="page-item disable">
                    <span class="page-link">{{ $element }}</span>
                </li>
            @endif

            @if (is_array($element))
                @foreach ($element as $pageNumber => $url)
                    @if ($pageNumber == $paginator->currentPage())
                    <li class="page-item active my-active">
                        <span class="page-link">{{ $pageNumber }}</span>
                    </li>
                    @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $url }}">{{ $pageNumber }}</a>
                    </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        @if ($paginator->onLastPage())
            <li class="page-item disable">
            <span class="page-link">
                  Suiv.
                <i class="fa-solid fa-chevron-right" style="color: #000000;"></i>
            </span>
            </li>
        @else
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">
                    Suiv.
                    <i class="fa-solid fa-chevron-right" style="color: #000000;"></i>
                </a>
            </li>
        @endif
    </ul>
@endif
