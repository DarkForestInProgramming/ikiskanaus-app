<x-layout doctitle="Pagrindinis">
    <div>
        {{-- Our best section --}}
        <x-homePage.openSection /> 
        {{-- Kebabs section --}}
        <x-homePage.kebabsSection :kebabs="$kebabs"/>
        {{-- Find us section --}}
        <x-homePage.locationSection />
        </div>
    </x-layout>