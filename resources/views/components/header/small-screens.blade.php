    <div class="md:hidden bg-white text-grey mt-2 mobile-menu hidden">
        <div class="container mx-auto p-4 space-y-2 text-center">
            <x-header.small-routes />
            @if (session('cart') && count(session('cart')) > 0)
            <x-header.small-cartmenu />
            @endif
        </div>
    </div>