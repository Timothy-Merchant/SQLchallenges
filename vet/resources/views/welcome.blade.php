@extends("app")

{{-- @section('title'){{ $greeting }}@endsection --}}

{{-- @section('header'){{ $greeting }}@endsection     --}}

@section('content')

    @if (count($owners) === 0)
        No owners found!!
    @elseif (count($owners) > 1)
        @foreach ($owners as $owner)
            @include("_partials/userInfo", ["owner", $owner])
        @endforeach
    @endif

@endsection
