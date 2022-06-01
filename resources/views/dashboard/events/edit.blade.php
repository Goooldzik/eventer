@extends('layouts.app')

@section('content')
    <div class="row mb-3">
        <div class="col-sm-12">
            <form>
                <div class="row mb-3">
                    <div class="col-sm-4">
                        <label for="title">Nazwa wydarzenia</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ $event->title }}" required autofocus>
                    </div>
                    <div class="col-sm-4">
                        <label for="places">Liczba biletów</label>
                        <input type="number" name="places" id="places" class="form-control" value="{{ $event->places }}" required>
                    </div>
                    <div class="col-sm-4">
                        <label for="start_at">Start wydarzenia</label>
                        <input type="datetime-local" name="start_at" id="start_at" class="form-control" value="{{ $event->start_at }}" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-12">
                        <label for="description">Opis wydarzenia</label>
                        <textarea name="description" id="description" class="form-control" rows="5">{{ $event->description }}</textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-12">
                        <button type="button" class="btn btn-primary update-event">Zaktualizuj wydarzenie</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('js-text')
    <script>
        let updateEventUrl = '{{ route('dashboard.events.update', $event) }}'
    </script>
@endsection

@section('js-files')
    <script src="{{ asset('js/events/updateEvent.js') }}"></script>
@endsection
