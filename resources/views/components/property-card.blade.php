<div class="rounded-lg shadow-md bg-white p-4 mb-4">
    <h2 class="text-xl font-bold">{{ $property->name }}</h2>
    <p class="text-gray-600">{{ Str::limit($property->description, 100) }}</p>
    <p class="text-primary font-bold">Prix par nuit : {{ $property->price_per_night }} €</p>
    <button wire:click="book({{ $property->id }})" class="bg-secondary text-white px-4 py-2 rounded">
        Réserver
    </button>
</div>