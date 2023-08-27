<x-layout>
    <div class="flex flex-col justify-center items-center py-10">
        <h2 class="text-2xl font-bold mb-4">Mano paskyra</h2>
        <p class="text-xl mb-4">Sveiki, {{auth()->user()->name}}!</p>
        
        <div class="w-full max-w-lg bg-white p-6 mt-4">
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
                    <tr class="border">
                        <td class="py-2 px-4 border">1</td>
                        <td class="py-2 px-4 border">Produktas 1</td>
                        <td class="py-2 px-4 border">2 vnt.</td>
                        <td class="py-2 px-4 border">10 €</td>
                    </tr>
                    <tr class="border">
                        <td class="py-2 px-4 border">2</td>
                        <td class="py-2 px-4 border">Produktas 2</td>
                        <td class="py-2 px-4 border">1 vnt.</td>
                        <td class="py-2 px-4 border">5 €</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layout>