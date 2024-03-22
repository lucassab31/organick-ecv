<x-guest-layout>
    <x-slot name="slot">
        <x-hero-banner :content="$content" />
        <x-aboutus :content="$content" />
        <x-offer-banner :content="$content" />
        <x-news :content="$content" />
        <x-shop />
        <x-eco-friendly :content="$content" />
        <x-footer />
    </x-slot>
</x-guest-layout>
