@extends('layouts.app')
@section('head-title', 'Laravel Train Schedule')

@section('main-content')
<main>
    <div class="container">
        <div class="row row-cols-4 row-cols-sm-1 row-cols-md-2 g-2">
            @forelse ($trains as $train)
            <div class="col my-2">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title mb-2">
                            {{ $train->train_code }}
                            <i class="fas fa-train-subway"></i>
                        </h2>
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
                </div>
            </div>
            @empty
                <p>Nessun treno in partenza...</p>
            @endforelse
        </div>
    </div>
</main>
@endsection
