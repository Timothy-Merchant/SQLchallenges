@extends("app");

@section('content')
    <h1>Owner</h1>
    <a href="{{ $owner->id }}" class="list-group-item list-group-item-action">
        <div class="d-flex w-100 flex-column justify-content-between">
            <strong>Name:</strong>
            <p class="mb-1">{{ $owner->first_name }} {{ $owner->last_name }}</p>
            <strong>Address:</strong>
            <p class="mb-1">{{ $owner->address_1 }}, {{ $owner->address_2 }}</p>
            <p class="mb-1">{{ $owner->town }}</p>
            <strong>Contact:</strong>
            <p class="mb-1">Email: {{ $owner->email }}</p>
            <p class="mb-1">Phone: {{ $owner->telephone }}</p>
            <hr>
        </div>
    </a>
    <h1>Animals</h1>
    @if (count($owner->animals) === 0)
        No animals found!!
    @elseif (count($owner->animals) > 1)
        @foreach ($owner->animals as $animal)
            @include("_partials/animalInfo", ["animal", $animal])
        @endforeach
    @endif
    <a href="./" class="list-group-item list-group-item-action">Back</a>
@endsection
