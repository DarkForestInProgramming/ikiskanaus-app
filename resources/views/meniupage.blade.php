<x-layout>
 {{-- News section --}}
 <x-meniupage.news-section />
    {{-- Meniu header --}}
     <x-meniupage.meniu-header />
    {{-- Kebabs --}}
    <x-meniupage.meniu-kebabs :kebabs="$kebabs" />
    {{-- Sauces --}}
    <x-meniupage.meniu-sauces />
</x-layout>