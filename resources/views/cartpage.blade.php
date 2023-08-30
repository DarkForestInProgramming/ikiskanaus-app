<x-layout doctitle="Prekių krepšelis">
    <div class="container mx-auto py-10">
        {{-- Certain message toast --}}
        <x-shared.globalMsg />
        @php $cartIsEmpty = empty(session('cart')) @endphp
        {{-- Cart header --}}
        <x-cartPage.cartHeader :cartIsEmpty="$cartIsEmpty"/>
        @if (!$cartIsEmpty)
        {{-- Cart table --}}
        <x-cartPage.cartTable/>
        @endif
    </div>
</x-layout>