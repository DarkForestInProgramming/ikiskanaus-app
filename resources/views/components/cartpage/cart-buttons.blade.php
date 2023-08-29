<div class="mt-4 text-center md:text-right">
    <form action="/session" method="POST">
        <p class="font-bold text-lg">Iš viso: {{ $total }} €</p>
        <a href="{{ url('/') }}" class="mt-4 mr-2 inline-flex items-center bg-red-600 hover:bg-red-700 text-white px-2 py-1 rounded-md">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd"></path>
            </svg>
            Tęsti Apsipirkimą
        </a>
        @if (!Auth::check())  
        <div class="mt-4 items-center">
            <p>Norint tęsti apmokėjimą, turite <a href="/login" class="text-red-500 hover:underline">prisijungti.</a></p>
        </div>
        @else
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <button class="mt-4 inline-flex items-center bg-green-600 hover:bg-green-700 text-white px-2 py-1 rounded-md" type="submit" id="checkout-live-button">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
            </svg>
            Apmokėti
        </button>
        @endif
       
    </form>
</div>