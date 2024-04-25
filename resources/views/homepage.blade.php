@extends('layouts.app')

<main>
    @foreach ($trains as $train)
        <h1>{{ $train->arrival_station }}</h1>
    @endforeach
</main>
