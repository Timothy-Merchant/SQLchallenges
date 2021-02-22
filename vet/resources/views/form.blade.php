@extends("app");

@section('content')
    <form class="form card" method="post">
        @csrf
        <h2 class="card-header">Create New Owner</h2>

        <fieldset class="card-body">
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input id="first_name" class="form-control @error('first_name') is-invalid @enderror" value="{{ $owner->first_name ?? old('first_name') }}" name="first_name" class="form-control" />
                @error('first_name')
                    <p class="required">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input id="last_name" class="form-control @error('last_name') is-invalid @enderror" value="{{ $owner->last_name ?? old('last_name') }}" name="last_name" class="form-control" />
                @error('last_name')
                    <p class="required">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="form-group">
                <label for="telephone">Phone Number</label>
                <input id="telephone" class="form-control @error('telephone') is-invalid @enderror" value="{{ $owner->telephone ?? old('telephone') }}" name="telephone" class="form-control" />
                @error('telephone')
                    <p class="required">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" class="form-control @error('email') is-invalid @enderror" value="{{ $owner->email ?? old('email') }}" name="email" class="form-control" />
                @error('email')
                    <p class="required">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="form-group">
                <label for="address_1">Address</label>
                <input id="address_1" class="form-control @error('address_1') is-invalid @enderror" value="{{ $owner->address_1 ?? old('address_1') }}" name="address_1" class="form-control" />
                @error('address_1')
                    <p class="required">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="form-group">
                <label for="address_2">Address (cont.)</label>
                <input id="address_2" value="{{ $owner->address_2 ?? old('address_2') }}" name="address_2" class="form-control" />
                
            </div>
            <div class="form-group">
                <label for="town">Town</label>
                <input id="town" class="form-control @error('town') is-invalid @enderror" value="{{ $owner->town ?? old('town') }}" name="town" class="form-control" />
                @error('town')
                    <p class="required">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="form-group">
                <label for="postcode">Postcode</label>
                <input id="postcode" class="form-control @error('postcode') is-invalid @enderror" value="{{ $owner->postcode ?? old('postcode') }}" name="postcode" class="form-control" />
                @error('postcode')
                    <p class="required">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            {{-- <div class="form-group">
                <label for="content">Content</label>
                <textarea id="content" name="content" class="form-control">{{ old('content') }}</textarea>
            </div> --}}
        </fieldset>

        <div class="card-footer text-right">
            <button class="btn btn-success">Create</button>
        </div>
    </form>
@endsection
