@extends('layouts.app')

@section('content')
    <div class="row mb-3">
        <div class="col-sm-12">
            <h4>Formularz rezygnacji z rezerwacji biletu na wydarzenie <span class="text-uppercase">{{ $ticket->event->title }}</span></h4>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-sm-12">
            <div class="row mb-3">
                <div class="col-sm-12">
                    <p>
                        {{ $ticket->event->description }}
                    </p>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-12">
                    Wydarzenie rozpoczyna się {{ $ticket->event->start_at }}
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-sm-12">
            <button type="button" class="btn btn-danger book-off" data-id="{{ $ticket->ticket_number }}">Usuń rezerwacje</button>
        </div>
    </div>
@endsection

@section('js-text')
    <script>
        let bookOffUrl = '{{ url('api/book-off') }}/'
    </script>
@endsection

@section('js-files')
    <script src="{{ asset('js/tickets/book-off.js') }}"></script>
@endsection
