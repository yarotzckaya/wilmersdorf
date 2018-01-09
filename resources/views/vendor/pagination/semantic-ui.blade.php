@if ($paginator->hasPages())
    <div class="ui pagination menu">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <a class="icon item disabled"> <i class="left chevron icon"></i> </a>
        @else
            <a class="icon item" href="{{ $paginator->previousPageUrl() }}" rel="prev"> <i class="left chevron icon"></i> </a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($posts as $post)
            {{-- "Three Dots" Separator --}}
            @if (is_string($post))
                <a class="icon item disabled">{{ $post }}</a>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($post))
                @foreach ($post as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a class="item active" href="{{ $url }}">{{ $page }}</a>
                    @else
                        <a class="item" href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a class="icon item" href="{{ $paginator->nextPageUrl() }}" rel="next"> <i class="right chevron icon"></i> </a>
        @else
            <a class="icon item disabled"> <i class="right chevron icon"></i> </a>
        @endif
    </div>
@endif
