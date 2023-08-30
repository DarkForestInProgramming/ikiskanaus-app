<x-layout doctitle="Meniu">
 {{-- News section --}}
 <x-meniuPage.newsSection />
    {{-- Meniu header --}}
     <x-meniuPage.meniuHeader />
    {{-- Kebabs --}}
    <x-meniuPage.meniuKebabs :kebabs="$kebabs" />
    {{-- Sauces --}}
    <x-meniuPage.meniuSauces :sauces="$sauces" />
</x-layout>