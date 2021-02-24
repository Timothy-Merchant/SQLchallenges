@extends("app")

{{-- @section('title'){{ $greeting }}@endsection --}}

{{-- @section('header'){{ $greeting }}@endsection     --}}

@section('content')

    @if (count($animals) === 0)
        No animals found!!
    @elseif (count($animals) > 1)
        @foreach ($animals as $animal)
            @include("_partials/animalInfo", ["animal", $animal])
        @endforeach
    @endif

@endsection
