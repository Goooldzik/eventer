@extends('layouts.app')

@section('content')
    <div class="row mb-3">
        <div class="col-sm-12">
            <div class="row mb-3">
                <div class="col-sm-12">
                    Lista ticketów
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-12">
                    <table class="table table-responsive-sm">
                        <thead>
                        <tr>
                            <th scope="col">Imię</th>
                            <th scope="col">Nazwisko</th>
                            <th scope="col">Numer biletu</th>
                            <th scope="col">Nazwa wydarzenia</th>
                            <th scope="col">Akcje</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tickets as $ticket)
                            <tr>
                                <td>{{ $ticket->name }}</td>
                                <td>{{ $ticket->last_name }}</td>
                                <td>{{ $ticket->ticket_number }}</td>
                                <td>{{ $ticket->event->title }}</td>
                                <td>
                                    <a href="{{ route('events.show', $ticket->event) }}">Podgląd wydarzenia</a>
                                    <a href="{{ route('dashboard.tickets.show', $ticket) }}">Podgląd biletu</a>
                                    <button type="button" class="btn btn-outline-danger book-off" data-id="{{ $ticket->ticket_number }}">Anuluj bilet</button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-12">
                    {{ $tickets->links() }}
                </div>
            </div>
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
