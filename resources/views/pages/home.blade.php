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
            {{-- <li>
                <a href="{{ route('trains') }}">
                    Tutti i treni
                </a>
            </li>
            <li>
                <a href="{{ route('passengers') }}">
                    Tutti i passeggeri
                </a>
            </li> --}}
        </ul>
        <div class="row row-cols-4 row-cols-sm-1 row-cols-md-2 g-2">
            @forelse ($trainsTodayDeparting as $index => $train)
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
                                Arrivo: <span>{{ $train->getFormattedArrivalTime() }} {{ $train->getFormattedArrivalDate() }}, {{ $train->arrival_station }}</span>
                            </p>
                            <p class="card-text">
                                Partenza: <span>{{ $train->getFormattedDepartureTime() }} {{ $train->getFormattedDepartureDate() }}, {{ $train->departure_station }}</span>
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
