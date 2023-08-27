@if(Session::has('successMessage'))
<div class="bg-green-500 text-white px-4 py-2 mb-3 rounded-md shadow-md">
    <p class="text-sm">{{Session::get('successMessage')}}</p>
</div>
@endif

@if(Session::has('errorMessage'))
<div class="bg-red-500 text-white px-4 py-2 mb-3 rounded-md shadow-md">
    <p class="text-sm">{{Session::get('errorMessage')}}</p>
</div>
@endif