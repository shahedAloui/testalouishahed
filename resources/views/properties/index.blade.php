@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Properties</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        @foreach($properties as $property)
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold">{{ $property->name }}</h2>
                <p class="text-gray-600">{{ $property->description }}</p>
                <p class="text-primary font-bold">${{ $property->price_per_night }} / night</p>
                <a href="{{ route('properties.show', $property) }}" class="mt-4 inline-block bg-primary text-white px-4 py-2 rounded">View Details</a>
            </div>
        @endforeach
    </div>
@endsection