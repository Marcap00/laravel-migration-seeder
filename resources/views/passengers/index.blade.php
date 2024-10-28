@extends('layouts.app')
@section('head-title', 'Laravel Train Schedule')

@section('main-content')
<main>
    <div class="container">
        <ul class="flex-align-center text-white my-3">
            @foreach ($links_pages as $route=>$text)
            <li>
                <a href="{{ route($route) }}">
                    <h2 class="me-2">{{$text}}</h2>
                </a>
            </li>
            @endforeach
        </ul>
        <div class="row row-cols-4 row-cols-sm-1 row-cols-md-2 g-2">
            @forelse ($passengers as $index => $passenger)
            <div class="col my-2">
                <div class="card">
                    {{-- <a href="{{route('show', $index)}}"> --}}
                        <div class="card-body">
                            <h2 class="card-title mb-2">
                                <i class="fas fa-user me-1"></i>
                                {{ $passenger->name }} {{ $passenger->surname }}
                            </h2>

                            <p class="card-text">
                                Cod. Biglietto: <span>{{ $passenger->getUpperCaseTicketCode() }}</span>
                            </p>
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
