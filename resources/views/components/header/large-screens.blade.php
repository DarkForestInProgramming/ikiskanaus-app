<div class="container mx-auto px-4 md:px-0 flex justify-between items-center">
    <div class="flex items-center">
        <a href="/">
        <img src="https://res.cloudinary.com/dp0m5mp1s/image/upload/v1674554370/IkiSkanaus/kursinis_logo_yfv2zl.png" alt="Logo" class="mr-4" />
    </a>
    </div>
    <div class="flex md:hidden space-x-4">
        <a href="#" class="hover:text-gray-300 mobile-menu-button">☰</a>
    </div>
    <div class="hidden md:flex space-x-6 ml-auto">
        <a href="{{route('home.page')}}" class="hover:text-gray-300">Pagrindinis</a>
        <a href="{{route('meniu.page')}}" class="hover:text-gray-300">Meniu</a>
    </div>    
    <div class="md:flex hidden space-x-6 ml-auto">
        @if(!Auth::check())
        <a href="{{route('show.register')}}" class="hover:text-gray-300">Registracija</a>
        <a href="{{route('login')}}" class="hover:text-gray-300">Prisijungimas</a>
        @endif
        @if(Auth::check())
        <a href="{{route('myprofile')}}" class="hover:text-gray-300">Mano paskyra</a>
        <form action="{{route('logout')}}" method="POST">
            @csrf
            <button class="hover:text-gray-300">Atsijungti</button>
          </form>
        @endif
    </div>
</div>