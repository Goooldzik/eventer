@extends('layouts.app')

@section('content')
    <div class="row mb-3">
        <div class="col-sm-12">
            <div class="row mb-3">
                <div class="col-sm-12">
                    <a href="{{ route('dashboard.users.create') }}" class="btn btn-primary">Dodaj użytkownika</a>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-12">
                    <table class="table table-responsive-sm">
                        <thead>
                        <tr>
                            <th scope="col">Imie</th>
                            <th scope="col">Email</th>
                            <th scope="col">Akcje</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <a href="{{ route('dashboard.users.show', $user) }}">Podgląd</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-12">
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
