@extends("app");

@section('content')
    <form class="form card" method="post">
        @csrf
        <h2 class="card-header">{{ $formHeader }}</h2>
        <fieldset class="card-body">
            <div class="form-group">
                <label for="name">Name</label>
                <input id="name" class="form-control @error('name') is-invalid @enderror"
                    value="{{ $animal->name ?? old('name') }}" name="name" class="form-control" />
                @error('name')
                    <p class="required">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="form-group">
                <label for="type">Species</label>
                <input id="type" class="form-control @error('type') is-invalid @enderror"
                    value="{{ $animal->type ?? old('type') }}" name="type" class="form-control" />
                @error('type')
                    <p class="required">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="form-group">
                <label for="date_of_birth">Date of birth</label>
                <input id="date_of_birth" class="form-control @error('date_of_birth') is-invalid @enderror"
                    value="{{ $animal->date_of_birth ?? old('date_of_birth') }}" name="date_of_birth"
                    class="form-control" />
                @error('date_of_birth')
                    <p class="required">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="form-group">
                <label for="Weight">Weight (in kilograms)</label>
                <input id="Weight" class="form-control @error('Weight') is-invalid @enderror"
                    value="{{ $animal->Weight ?? old('Weight') }}" name="Weight" class="form-control" />
                @error('Weight')
                    <p class="required">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="form-group">
                <label for="Height">Height (in meters)</label>
                <input id="Height" class="form-control @error('Height') is-invalid @enderror"
                    value="{{ $animal->Height ?? old('Height') }}" name="Height" class="form-control" />
                @error('Height')
                    <p class="required">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="form-group">
                <label for="Biteyness">Biteyness...</label>
                <input id="Biteyness" class="form-control @error('Biteyness') is-invalid @enderror"
                    value="{{ $animal->Biteyness ?? old('Biteyness') }}" name="Biteyness" class="form-control" />
                @error('Biteyness')
                    <p class="required">
                        {{ $message }}
                    </p>
                @enderror
            </div>
        </fieldset>

        <div class="card-footer text-right">
            <button class="btn btn-success">{{ $formButton }}</button>
        </div>
    </form>
@endsection
