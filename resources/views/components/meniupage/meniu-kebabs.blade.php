<div class="container mx-auto text-center py-1">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        @foreach($kebabs as $kebab)
        <div class="bg-white p-4 shadow-lg border-dashed border-2 border-red-300">
            <img src="{{$kebab->picture}}" alt="{{$kebab->title}}" class="w-[300px] h-auto mx-auto mb-4 rounded-xl">
            <img class="w-48 h-38 mx-auto" src="{{$kebab->kebab_logo}}" alt="{{$kebab->title}}">
            <h3 class="card__title text-3xl mb-2">"{{$kebab->title}}"</h3>
            <p class="text-gray-600 mb-2 text-lg">{{$kebab->description}}</p>
            <p class="text-red-600 font-semibold mb-2 text-xl">{{$kebab->price}} €</p>
            <button class="px-4 py-2 text-red-100 border bg-red-500 rounded-full hover:bg-white hover:text-red-500 hover:border-red-500 transition duration-300">+ Pridėti Į Krepšelį</button>
        </div> 
        @endforeach
    </div>
</div>