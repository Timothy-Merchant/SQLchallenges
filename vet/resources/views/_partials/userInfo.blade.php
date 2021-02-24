<div class="list-group">
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
    <a href="{{ $owner->id . "/animals"}}" class="list-group-item list-group-item-action">View Animals</a>
    <a href="{{ $owner->id . "/animals/create"}}" class="list-group-item list-group-item-action">Add Animal</a>
    <a href="{{ $owner->id . "/update"}}" class="list-group-item list-group-item-action">Edit Profile</a>
    <a href="{{ $owner->id . "/destroy"}}" class="list-group-item list-group-item-action">Remove Owner</a>
</div>
