<div class="container mx-auto py-10">
    <div class="text-center">
        <h2 class="text-2xl font-bold mb-4">Ačiū, kad pirkote!</h2>
        <p>Jūsų užsakymas bus paruoštas 10-15 min. bėgyje ir galėsite atsiimti mūsų restorane adresu: Kriponio g. 33, Panevėžys</p>
        <p>Nepamirškite nurodyti savo atsiėmimo vardo, kuris yra: <span class="text-red-500">{{auth()->user()->name}}</span></p>
        <p>Daugiau informacijos galite rasti savo <a href="{{ route('my_profile') }}" class="text-red-500 hover:underline">profilio puslapyje</a>.</p>
    </div>
</div>