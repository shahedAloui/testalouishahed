<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Booking;
use App\Models\Property;

class BookingManager extends Component
{
    public $property;
    public $start_date;
    public $end_date;

    public function book()
    {
        $this->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ]);

        Booking::create([
            'user_id' => auth()->id(),
            'property_id' => $this->property->id,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
        ]);

        session()->flash('message', 'Booking successful!');
    }

    public function render()
    {
        return view('livewire.booking-manager');
    }
}