<div class="overflow-x-auto">
    <table class="w-full bg-gray-100 mx-auto">
        <thead>
            <tr class="bg-white">
                <th class="py-2 px-4">Kebabas</th>
                <th class="py-2 px-4">Kaina</th>
                <th class="py-2 px-4">Vnt.</th>
                <th class="px-4">Bendrai</th>
                <th class="px-4">Veiksmai</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @php $total = 0 @endphp
            @if(session('cart'))
            @foreach(session('cart') as $id => $details)
                @php
                    $subtotal = $details['price'] * $details['quantity'];
                    $total += $subtotal;
                @endphp
                <tr data-id="{{ $id }}" class="0">
                    <td class="py-2 px-4">     
                        <div class="font-semibold">
                            <img src="{{ $details['picture'] }}" alt="{{ $details['title'] }}" class="w-16 h-16 rounded-md mx-auto">
                         {{ $details['title'] }}
                        </div>
                    </td>
                    <td class="py-2 px-4">{{ $details['price'] }} €</td>
                    <td data-th="Quantity" class=" py-2 px-4">
                        <input type="number" class="quantity cart_update text-center" value="{{$details['quantity']}}" min="1">
                    </td>
                    <td class="py-2 px-4">{{ $subtotal }} €</td>
                    <td class="py-2 px-4">
                        <button class="cart_remove text-red-600 hover:text-red-800 font-semibold" onclick="removeCartItem(this)" data-id="{{ $id }}">Pašalinti</button>
                    </td>
                </tr>
            @endforeach
            @endif
        </tbody>
    </table>
</div>
{{-- Pay, back buttons --}}
<x-cartpage.cartBtns :total="$total"/>
