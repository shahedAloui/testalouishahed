<div>
    @foreach ($properties as $property)
        @include('components.property-card', ['property' => $property])
    @endforeach

    @if ($selectedPropertyId)
        <div class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
            <div class="bg-white p-6 rounded-lg">
                <h3 class="text-lg font-bold">Confirmer la réservation ?</h3>
                <div class="mt-4">
                    <button wire:click="confirmBooking" class="bg-primary text-white px-4 py-2 rounded">
                        Confirmer
                    </button>
                    <button wire:click="resetSelectedProperty" class="ml-2 px-4 py-2 rounded">
                        Annuler
                    </button>
                </div>
            </div>
        </div>
    @endif
</div>