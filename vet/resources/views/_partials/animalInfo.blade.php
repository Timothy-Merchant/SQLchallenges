<div class="list-group">
    <a href="#" class="list-group-item list-group-item-action">
        <div class="d-flex w-100 flex-column justify-content-between">
            <strong>Name:</strong>
            <p class="mb-1">{{ $animal->name }}</p>
            <strong>Type:</strong>
            <p class="mb-1">{{ $animal->type }}</p>
            <strong>Date of birth:</strong>
            <p class="mb-1">{{ $animal->date_of_birth }}</p>
            <strong>Weight:</strong>
            <p class="mb-1">{{ $animal->Weight }}kg</p>
            <strong>Height:</strong>
            <p class="mb-1">{{ $animal->Height }}m</p>
            <strong>Dangerous?</strong>
            @if ($animal->dangerous())
                <p class="mb-1">Yes</p>
            @else
                <p class="mb-1">No</p>
            @endif
            <strong>Belongs to:</strong>
            <p class="mb-1">{{ $animal->owner->fullName() }}</p>
            <hr>
        </div>
    </a>
</div>

{{-- "id" => $this->id,            
            "name" => $this->name,
            "type" => $this->type,
            "dob" => $this->date_of_birth,
            "weight" => $this->Weight,
            "height" => $this->Height,
            "biteyness" => $this->Biteyness,
            "owner_name" => $this->animal->fullName() --}}
