@extends('layout.master')
@section('content')
<h1 class="text-center text-2xl py-3 font-semibold text-gray-950 bg-amber-500">About</h1>

@foreach ($data as $item)
    <div class="text-center text-2xl py-3 font-semibold text-gray-950 bg-amber-500">
        <h1>{{ $item['name'] }}</h1>
        <p>{{ $item['age'] }}</p>
        <p>{{ $item['address'] }}</p>
    </div>
@endforeach

@endsection