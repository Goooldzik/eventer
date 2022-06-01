@extends('layouts.app')

@section('content')
    <div class="row mb-3">
        <div class="col-sm-12">
            <h4 class="text-uppercase text-center">{{ $event->title }}</h4>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-sm-12">
            <div class="row mb-3">
                <div class="col-sm-6">
                    <p>
                        {{ $event->description }}
                    </p>
                </div>
                <div class="col-sm-6">
                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <h4>Zapisz się na wydarzenie</h4>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <label for="name">Imię</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <label for="last_name">Nazwisko</label>
                            <input type="text" name="last_name" id="last_name" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <label for="email">Adres email</label>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <button type="button" class="btn btn-primary book-new-ticket">Zapisz się</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js-text')
    <script>
        let bookTicketUrl = '{{ route('api.book-ticket', $event) }}'
    </script>
@endsection

@section('js-files')
    <script src="{{ asset('js/tickets/bookTicket.js') }}"></script>
@endsection
