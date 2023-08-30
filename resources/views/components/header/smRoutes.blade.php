<a href="{{route('home_page')}}" class="block hover:text-gray-300">Pagrindinis</a>
<a href="{{route('meniu_page')}}" class="block hover:text-gray-300">Meniu</a>
@if(!Auth::check())
<a href="{{route('show_register')}}" class="block hover:text-gray-300">Registracija</a>
<a href="{{route('login')}}" class="block hover:text-gray-300">Prisijungimas</a>
@endif
@if(Auth::check())
<a href="{{route('my_profile')}}" id="logout" class="block hover:text-gray-300">Mano paskyra</a>
<a href="#" id="logout" class="block hover:text-gray-300">Atsijungti</a>
@endif
<form action="{{route('logout')}}" method="POST" id="form-logout">
    @csrf
</form>