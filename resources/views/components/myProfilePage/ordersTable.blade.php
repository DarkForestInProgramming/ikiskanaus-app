<div class="flex flex-col justify-center items-center py-10">
    {{-- Certain message toast --}}
    <x-shared.globalMsg />
    <h2 class="text-2xl font-bold mb-4">Mano paskyra</h2>
    <p class="text-xl mb-4">Sveiki, {{ auth()->user()->name }}!</p>
    <div class="w-full max-w-lg bg-white p-6 mt-4">
        @if ($orders->isEmpty())
        <h3 class="text-xl font-semibold mb-4 text-center">Mano užsakymų lentelė tuščia</h3>
         @else
        <h3 class="text-xl font-semibold mb-4">Mano užsakymų lentelė</h3>
            <table class="w-full border">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="py-2 px-4 border">Nr.</th>
                        <th class="py-2 px-4 border">Pavadinimas</th>
                        <th class="py-2 px-4 border">Kiekis</th>
                        <th class="py-2 px-4 border">Kaina</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $index => $order)
                        <tr class="border">
                            <td class="py-2 px-4 border">{{ $index + 1 }}</td>
                            <td class="py-2 px-4 border">{{ $order->title }}</td>
                            <td class="py-2 px-4 border">{{ $order->quantity }} vnt.</td>
                            <td class="py-2 px-4 border">{{ $order->price }} €</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</div>