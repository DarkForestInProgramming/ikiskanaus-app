<div class="container mx-auto text-center py-1">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        @foreach($kebabs as $kebab)
        <div class="bg-white p-4 shadow-lg">
            <img src="{{$kebab->picture}}" alt="Produkto paveikslėlis" class="w-[300px] h-auto mx-auto mb-4 rounded-xl">
            <h3 class="text-xl font-semibold mb-2">{{$kebab->title}}</h3>
            <p class="text-gray-600 mb-2 text-lg">{{$kebab->description}}</p>
            <p class="text-red-600 font-semibold mb-2 text-lg">{{$kebab->price}} €</p>
            <button class="px-4 py-2 text-red-500 border border-red-500 rounded-full hover:bg-red-500 hover:text-white transition duration-300">Pridėti Į Krepšelį</button>
        </div> 
        @endforeach
    </div>
</div>