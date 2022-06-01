@extends('layouts.app')

@section('content')
    <div class="row mb-3">
        <div class="col-sm-12">
            <div class="row mb-3">
                <div class="col-sm-12">
                    <a href="{{ route('dashboard.events.create') }}" class="btn btn-primary">Zarejestruj wydarzenie</a>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-12">
                    <table class="table table-responsive-sm">
                        <thead>
                        <tr>
                            <th scope="col">Nazwa wydarzenia</th>
                            <th scope="col">Rozpoczęcie</th>
                            <th scope="col">Akcje</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($events as $event)
                            <tr>
                                <td>{{ $event->title }}</td>
                                <td>{{ $event->start_at }}</td>
                                <td>
                                    <a href="{{ route('dashboard.events.adminShow', $event) }}">Podgląd szczegółowy</a>
                                    <a href="{{ route('dashboard.events.edit', $event) }}">Edytuj</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-12">
                    {{ $events->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
