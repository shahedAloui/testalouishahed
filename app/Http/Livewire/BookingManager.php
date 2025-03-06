<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Property;
use App\Models\Booking;

class BookingManager extends Component
{
    public $properties;
    public $selectedPropertyId;

    public function mount()
    {
        $this->properties = Property::all();
    }

    public function book($propertyId)
    {
        $this->selectedPropertyId = $propertyId;
    }

    public function confirmBooking()
    {
        if ($this->selectedPropertyId) {
            Booking::create([
                'user_id' => auth()->id(),
                'property_id' => $this->selectedPropertyId,
                'start_date' => now(),
                'end_date' => now()->addDays(3),
            ]);
            $this->reset('selectedPropertyId');
        }
    }

    public function render()
    {
        return view('livewire.booking-manager');
    }
}