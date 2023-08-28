<x-layout doctitle="Pagrindinis">
    <div>
        {{-- Our best section --}}
        <x-homepage.first-section /> 
        {{-- Kebabs section --}}
        <x-homepage.kebabs-section :kebabs="$kebabs"/>
        {{-- Find us section --}}
        <x-homepage.findus-section />
        </div>
    </x-layout>