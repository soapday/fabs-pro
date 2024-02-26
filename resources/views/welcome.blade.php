<<<<<<< HEAD
<!DOCTYPE html>
{{-- dgdxcg --}}
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
=======
{{-- include ini biar nyambung sama title / head dari web  --}}
        <title>Fabulous</title>
@include('assets.base')
{{-- extend ini buat nyambungin sama navbar --}}
@extends('assets.navbar')
>>>>>>> 98271a583b58c47e65a834f77a84031ae5b12b96

@section('content')
    {{-- Nanti apip Mulai ngoding bikin halaman webnya disini --}}
    <div></div>
@endsection
