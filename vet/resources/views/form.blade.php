@extends("app");

@section("content")
    <form class="form card" method="post">
    @csrf
        <h2 class="card-header">Create New Owner</h2>

        <fieldset class="card-body">
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input id="first_name" name="first_name" class="form-control" />
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input id="last_name" name="last_name" class="form-control" />
            </div>
            <div class="form-group">
                <label for="telephone">Phone Number</label>
                <input id="telephone" name="telephone" class="form-control" />
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" name="email" class="form-control" />
            </div>
            <div class="form-group">
                <label for="address_1">Address</label>
                <input id="address_1" name="address_1" class="form-control" />
            </div>
            <div class="form-group">
                <label for="address_2">Address (cont.)</label>
                <input id="address_2" name="address_2" class="form-control" />
            </div>
            <div class="form-group">
                <label for="town">Town</label>
                <input id="town" name="town" class="form-control" />
            </div>
            <div class="form-group">
                <label for="postcode">Postcode</label>
                <input id="postcode" name="postcode" class="form-control" />
            </div>
            {{-- <div class="form-group">
                <label for="content">Content</label>
                <textarea id="content" name="content" class="form-control"></textarea>
            </div> --}}
        </fieldset>

        <div class="card-footer text-right">
            <button class="btn btn-success">Create</button>
        </div>
    </form>
@endsection