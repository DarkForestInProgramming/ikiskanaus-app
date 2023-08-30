<div class="relative group">
    <!-- Shopping cart button -->
    <x-header.small-cartbutton />
    <!-- Dropdown menu -->
    <div id="cart-dropdown" class="small__cartmenu hidden lg:hidden group-hover:block absolute right-0 mt-2 py-2 w-80 bg-white border border-gray-300 text-xl rounded-lg shadow-md">
        @php $total = 0 @endphp
        @foreach((array) session('cart') as $id => $details)
            @php $total += $details['price'] * $details['quantity'] @endphp
        @endforeach
        <div class="px-4 py-2 mb-1 font-semibold text-start">
            Prekių krepšelis
        </div>
        <!-- Products listing -->
        <div class="px-5 py-2 text-start">
            <!-- Products information -->
            @if(session('cart'))
                @foreach(session('cart') as $id => $details)
                    <div class="flex items-center space-x-2">
                        <img src="{{$details['picture']}}" alt="{{$details['title']}}" class="w-8 h-8 rounded-md">
                        <div class="flex-grow">
                            <div class="font-semibold">"{{$details['title']}}"</div>
                            <div class="text-gray-500">Vnt. kaina: 
                                <span class="text-red-500 font-semibold"> {{$details['price']}} €</span>
                            </div>
                            <div class="flex-shrink mb-5">
                                <div>Kiekis: {{$details['quantity']}}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
        <div class="text-end">
             <!-- Total price -->
             <div class="px-4 py-2 font-semibold">
                Iš viso:
                <span class="text-red-500">{{$total}} €</span>
            </div>
        <!-- Continue button -->
        <div class="px-4 py-1">
            <a href="{{route('cart')}}" class="w-full bg-red-500 text-white px-4 py-1 rounded-md hover:bg-red-600">Tęsti pirkimą</a>
        </div>
    </div>
    </div>
</div>