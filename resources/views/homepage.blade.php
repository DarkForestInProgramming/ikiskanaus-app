<x-layout>
    <div>
        {{-- Our Best Section --}}
        <x-homepage.first-section /> 
        {{-- Kebabs Section --}}
        <x-homepage.kebabs-section :kebabs="$kebabs"/>
        {{-- Find us section --}}
        <x-homepage.findus-section />
        </div>
    </x-layout>