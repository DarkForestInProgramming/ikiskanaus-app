<x-layout doctitle="{{auth()->user()->name}} Profilis">
   {{-- My orders table --}}
   <x-myProfilePage.ordersTable :orders="$orders"/>
</x-layout>