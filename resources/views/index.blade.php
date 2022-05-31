@extends('layouts.app')

@section('content')
    <div class="row mb-3">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-12">
                    <h4>Aktualne wydarzenia ({{ $events->total() }})</h4>
                </div>
            </div>
            <div class="row mb-3">
                @foreach($events as $event)
                    <div class="col-sm-5 mb-3 me-3">
                        <h5 class="text-center text-uppercase">
                            <a href="{{ route('events.show', $event) }}">
                                {{ $event->title }}
                            </a>
                        </h5>
                        <div style="display: flex; justify-content: space-between;">
                            <span>
                                Pozostalo biletów 10
                            </span>
                            <span>
                                Start wydarzenia - {{ $event->start_at }}
                            </span>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row mb-3">
                <div class="col-sm-12">
                    {{ $events->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
