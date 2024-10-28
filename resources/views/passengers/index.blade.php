@extends('layouts.app')
@section('head-title', 'Laravel Train Schedule')

@section('main-content')
<main>
    <div class="container">
        <ul class="flex-align-center text-white my-3">
            <li>
                <a href="{{ route('passengers') }}">
                    <h2 class="me-2">Tutti i passeggeri</h2>
                </a>
            </li>
            <li>
                <a href="{{ route('home') }}">
                    In arrivo oggi
                </a>
            </li>
            <li>
                <a href="{{ route('trains') }}">
                    Tutti i treni
                </a>
            </li>
        </ul>
        <div class="row row-cols-4 row-cols-sm-1 row-cols-md-2 g-2">
            @forelse ($passengers as $index => $passenger)
            <div class="col my-2">
                <div class="card">
                    {{-- <a href="{{route('show', $index)}}"> --}}
                        <div class="card-body">
                            <h2 class="card-title mb-2">
                                <i class="fas fa-user"></i>
                                {{ $passenger->name }}
                            </h2>

                            <p class="card-text">
                                Numero posto: <span>{{ $passenger->number_seat }}</span>
                            </p>
                            <p class="card-text">
                                Numero vagone: <span>{{ $passenger->number_carriage }}</span>
                            </p>
                        </div>
                    {{-- </a> --}}
                </div>
            </div>
            @empty
                <p>Nessun passeggero disponibile...</p>
            @endforelse
        </div>
    </div>
</main>
@endsection
