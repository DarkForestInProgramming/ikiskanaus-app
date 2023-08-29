<x-layout doctitle="Prekių krepšelis">
    <div class="container mx-auto py-10">
        {{-- Certain message toast --}}
        <x-loginpage.message />
        @php $cartIsEmpty = empty(session('cart')) @endphp
        {{-- Cart header --}}
        <x-cartpage.cart-header :cartIsEmpty="$cartIsEmpty"/>
        @if (!$cartIsEmpty)
        {{-- Cart table --}}
        <x-cartpage.cart-table/>
        @endif
    </div>
</x-layout>