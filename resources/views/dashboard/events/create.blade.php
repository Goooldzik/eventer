@extends('layouts.app')

@section('content')
    <div class="row mb-3">
        <div class="col-sm-12">
            <form>
                <div class="row mb-3">
                    <div class="col-sm-4">
                        <label for="title">Nazwa wydarzenia</label>
                        <input type="text" name="title" id="title" class="form-control" required autofocus>
                    </div>
                    <div class="col-sm-4">
                        <label for="places">Liczba biletów</label>
                        <input type="number" name="places" id="places" class="form-control" required>
                    </div>
                    <div class="col-sm-4">
                        <label for="start_at">Start wydarzenia</label>
                        <input type="datetime-local" name="start_at" id="start_at" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-12">
                        <label for="description">Opis wydarzenia</label>
                        <textarea name="description" id="description" class="form-control" rows="5"></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-12">
                        <button type="button" class="btn btn-primary create-new-event">Zarejestruj wydarzenie</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('js-text')
    <script>
        let createEventUrl = '{{ route('dashboard.events.store') }}'
    </script>
@endsection

@section('js-files')
    <script src="{{ asset('js/events/createEvent.js') }}"></script>
@endsection
