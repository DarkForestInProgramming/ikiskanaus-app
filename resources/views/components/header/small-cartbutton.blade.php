<button id="cart-button" class="flex items-center w-full px-2 py-1 text-white bg-blue-600 hover:text-gray-300 group-hover:text-gray-300 relative rounded-md">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">
        <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"></path>
    </svg>
    <span class="flex-grow text-sm">Krepšelis</span>
    <span class="bg-red-500 text-white text-xs px-1 ml-1 rounded-full">
        <p class="mr-0.5">{{count((array) session('cart'))}}</p>
    </span>
</button>