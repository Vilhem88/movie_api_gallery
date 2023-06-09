@extends('layouts/main')


@section('content')

    <div class="container mx-auto px-4 pt-16">
         {{-- POPULAR SHOWS --}}
         <div class="popular-tv py-24">
            <h2 class="uppercase tracking-wider text-orange-400 text-lg font-semibold">Popular shows</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4  gap-8">
                @foreach ($popularTv as $tvShow)
                <x-tv-card :tvShow="$tvShow"/>
                @endforeach
               
            </div>
        </div>
 {{-- Top RATED SHOWS --}}
        <div class="popular-shows">
            <h2 class="uppercase tracking-wider text-orange-400 text-lg font-semibold">Top Rated Shows</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4  gap-8">
                @foreach ($topRatedTv as $tvShow)
                <x-tv-card :tvShow="$tvShow"/>
                @endforeach
            </div>
        </div>
    </div>
@endsection
