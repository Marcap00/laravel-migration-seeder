@extends('layouts.app')
@section('head-title', 'Laravel Train Schedule')

@section('main-content')
<main>
    <div class="container">
        <ul class="flex-align-center text-white my-3">
            <li>
                <a href="{{ route('trains') }}">
                    <h2 class="me-2">Tutti i treni</h2>
                </a>
            </li>
            <li>
                <a href="{{ route('home') }}">
                    In arrivo oggi
                </a>
            </li>
        </ul>
        <div class="row row-cols-4 row-cols-sm-1 row-cols-md-2 g-2">
            @forelse ($trains as $index => $train)
            <div class="col my-2">
                <div class="card">
                    <a href="{{route('show', $index)}}">
                        <div class="card-body">
                            <h2 class="card-title mb-2">
                                {{ $train->train_code }}
                                <i class="fas fa-train-subway"></i>
                            </h2>
                            @if ($train->deleted == true)
                                <h3 class="text-danger">
                                    Cancellato
                                </h3>
                            @elseif ($train->on_time == true)
                                <h3 class="text-success">
                                    In orario
                                </h3>
                            @endif
                            <p class="card-text">
                                Compagnia: <span>{{ $train->company }}</span>
                            </p>
                            <p class="card-text">
                                Arrivo: <span>{{ $train->arrival_time }} {{ $train->getFormattedArrivalDate() }}, {{ $train->arrival_station }}</span>
                            </p>
                            <p class="card-text">
                                Partenza: <span>{{ $train->departure_time }} {{ $train->getFormattedDepartureDate() }}, {{ $train->departure_station }}</span>
                            </p>
                        </div>
                    </a>
                </div>
            </div>
            @empty
                <p>Nessun treno in partenza...</p>
            @endforelse
        </div>
    </div>
</main>
@endsection