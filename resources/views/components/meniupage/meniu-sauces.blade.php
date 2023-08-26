<div class="container mx-auto text-center py-10">
    <h2 class="text-2xl font-semibold mb-4">Padažų pasirinkimas</h2>
    <div class="flex justify-center space-x-8 py-1">
        @foreach($sauces as $sauce)
        <div class="flex flex-col items-center">
            <img src="{{$sauce->picture}}" alt="{{$sauce->title}}" class="w-24 h-24 object-contain mb-2 hover:scale-110 transition duration-500 cursor-pointer">
            <p class="card__title text-xl">{{$sauce->title}}</p>
        </div>
        @endforeach
    </div>
</div>