<div class="py-10">
    {{-- Hottest Banner  --}}
    <a href="#kebabs">
        <img src="https://res.cloudinary.com/dp0m5mp1s/image/upload/v1674554368/IkiSkanaus/hottest_offers_qrnbnd.png" alt="Karščiausi" class="mx-auto mb-10 lg:w-auto md:w-[450px] sm:w-[400px] animate-pulse">
    </a>
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 text-center"> 
    @foreach($kebabs as $kebab)
    <!-- Products -->
    <div class="p-4 rounded-lg" id="kebabs">
        <img src="{{ $kebab->picture }}" alt="{{ $kebab->title }}" class="mb-4 w-[300px] h-auto mx-auto rounded-xl transition duration-300 ease-in-out hover:shadow-lg dark:hover:shadow-black/30">
        <img class="w-48 h-38 mx-auto hover:scale-110 transition duration-500" src="{{$kebab->kebab_logo}}" alt="{{$kebab->title}}">
        <h3 class="card__title text-2xl mb-2">"{{ $kebab->title }}"</h3>
        <p class="text-xl font-semibold mb-2 text-red-500">{{ $kebab->price }} €</p>
    {{-- Add to card button --}}
        <a href="{{route('add_to_cart', $kebab->id)}}" class="mt-2 px-4 py-2 text-lg mb-3 font-bold text-red-100 border bg-red-500 rounded-full hover:bg-white hover:text-red-500 hover:border-red-500 transition duration-300 shadow-md">+ Pridėti Į Krepšelį</a>
    </div>
    @endforeach
        </div>
    </div>
