<a href="{{route('home.page')}}" class="block hover:text-gray-300">Pagrindinis</a>
<a href="{{route('meniu.page')}}" class="block hover:text-gray-300">Meniu</a>
@if(!Auth::check())
<a href="{{route('show.register')}}" class="block hover:text-gray-300">Registracija</a>
<a href="{{route('login')}}" class="block hover:text-gray-300">Prisijungimas</a>
@endif
@if(Auth::check())
<a href="{{route('myprofile')}}" id="logout" class="block hover:text-gray-300">Mano paskyra</a>
<a href="#" id="logout" class="block hover:text-gray-300">Atsijungti</a>
@endif
<form action="{{route('logout')}}" method="POST" id="form-logout">
    @csrf
</form>