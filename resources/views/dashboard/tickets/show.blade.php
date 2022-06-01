@extends('layouts.app')

@section('content')
    <div class="row mb-3">
        <div class="col-sm-12">
            <h4>Bilet na wydarzenie - {{ $ticket->event->title }}</h4>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-sm-12">
            <div class="row mb-3">
                <div class="col-sm-6">
                    <div class="d-block">
                        <span>Zarejestrowano: {{ $ticket->created_at }}</span>
                    </div>
                    <div class="d-block">
                        <span>Wydarzenie rozpoczyna się: {{ $ticket->event->start_at }}</span>
                    </div>
                </div>

                <div class="col-sm-6">
                    <h4>Opis wydarzenia</h4>
                    <p>
                        {{ $ticket->event->description }}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
