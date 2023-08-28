<x-layout>
    <div class="flex justify-center items-center bg-gray-100 py-10">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <x-loginpage.message />
            <h2 class="text-2xl font-bold mb-4">Registracijos Patvirtinimas</h2>
            <p class="text-gray-600 mb-4">
                Dėkojame už registraciją! Patvirtinimo nuoroda buvo išsiųsta į Jūsų nurodytą el. paštą. Prašome patikrinti savo el. paštą ir paspausti ant patvirtinimo nuorodos, kad užbaigtumėte registracijos procesą.
            </p>
            <p class="text-gray-600">
                Jei negavote patvirtinimo laiško, patikrinkite savo el. pašto šlamšto aplanką (spam folder) arba 
                <a href="{{route('resend.email') }}" class="text-red-500">spauskite čia</a>,
                 kad vėl išsiųstumėte patvirtinimo nuorodą.
            </p>
        </div>
    </div>
</x-layout>