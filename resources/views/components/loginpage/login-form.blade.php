<div class="flex flex-col justify-center items-center py-10">
    <div class="w-full md:w-1/3 bg-white p-6">
        <x-loginpage.message />
        <h2 class="text-2xl font-bold mb-4">Prisijungimas</h2>
        <form action="{{route('post.login')}}" method="POST">
            @csrf
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
            <button type="submit" class="text-red-100 border bg-red-500 hover:bg-white hover:text-red-500 hover:border-red-500 transition duration-300 shadow-md rounded-lg px-4 py-2 w-full">Prisijungti</button>
        </form>
        <div class="py-6 text-center">Neturite paskyros?
            <a href="/register">
                <button class="text-gray-100 border bg-gray-500 hover:text-red-500 transition duration-300 shadow-md rounded-lg px-4 py-2 mt-1 w-full">Registruotis</button>
            </a>
        </div>
     <x-registerpage.info-section />
    </div>
</div>