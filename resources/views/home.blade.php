@extends('layout')

@section('title', 'Home')
@section('header-title', 'hi cloud AI')
@section('header-bg', 'bg-amber-500 text-white text-4xl font-bold')

@section('navigation')
    <a class="text-center bg-gray-300 text-red-50 text-4xl font-bold" href="/about">About</a>
    <a class="text-center bg-gray-600 text-red-50 text-4xl font-bold" href="/contact">contract us</a>
    <a class="text-center col-span-2 bg-red-300 text-red-50 text-4xl font-bold my-10 py-3" href="/second">second page</a>
@endsection

{{-- php artisan make:controller HomeController  --}}