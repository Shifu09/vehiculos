<div>
    @if ($paginator->hasPages())
        <nav>
            <ul class="pagination">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <span class="text-muted">« Anterior</span>
                @else
                    <a wire:click="previousPage" wire:loading.attr="disabled" rel="prev">« Anterior</a>
                @endif

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <a wire:click="nextPage" wire:loading.attr="disabled" rel="next">Siguiente »</a>
                @else
                    <span class="text-muted">Siguiente »</span>
                @endif
            </ul>
        </nav>
    @endif
</div>
