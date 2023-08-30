<div class="flex flex-col justify-center items-center py-10">
    <div class="w-full md:w-1/3 bg-white p-6">
        <h2 class="text-2xl font-bold mb-4">Registracija</h2>
        <form action="{{route('post.register')}}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Vartotojo vardas</label>
                <input type="text" id="name" name="name" value="{{old('name')}}" class="mt-1 p-2 w-full border rounded-md">
                @error('name')
                <p class="text-red-500 text-md mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">El. paštas</label>
                <input type="email" id="email" name="email" value="{{old('email')}}" class="mt-1 p-2 w-full border rounded-md">
                @error('email')
                <p class="text-red-500 text-md mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Slaptažodis</label>
                <input type="password" id="password" name="password" class="mt-1 p-2 w-full border rounded-md">
                @error('password')
                <p class="text-red-500 text-md mt-1">{{$message}}</p>
                @enderror
            </div>
            <button type="submit" class="text-red-100 border bg-red-500 hover:bg-white hover:text-red-500 hover:border-red-500 transition duration-300 shadow-md rounded-lg px-4 py-2 w-full">Registruotis</button>
        </form>
        {{-- Info section --}}
        <div class="py-3">
            <x-shared.infoFormSection />
        </div>
    </div>
    <div class="py-5 md:py-10">
        Jau turite paskyrą? 
        <a href="/login" class="text-red-500">Prisijungti</a>
    </div>
</div>