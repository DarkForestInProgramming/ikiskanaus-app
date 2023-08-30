    <div class="md:hidden bg-white text-grey mt-2 mobile-menu hidden">
        <div class="container mx-auto p-4 space-y-2 text-center">
            {{-- Small header routes --}}
            <x-header.smRoutes />
            @if (session('cart') && count(session('cart')) > 0)
            {{-- Small header shopping cart --}}
            <x-header.smCartMenu />
            @endif
        </div>
    </div>