@extends('layouts.app')

@section('content')
    <div class="row mb-3">
        <div class="col-sm-12">
            <form>
                <div class="row mb-3">
                    <div class="col-sm-6">
                        <label for="name">Imię</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                    <div class="col-sm-6">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-6">
                        <label for="password">Hasło</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>
                    <div class="col-sm-6">
                        <label for="password-confirm">Potwiedź hasło</label>
                        <input type="password" name="password_confirmation" id="password-confirm" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-12">
                        <button type="button" class="btn btn-primary create-new-user">Dodaj użytkownika</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('js-text')
    <script>
        let createNewUserUrl = '{{ route('dashboard.users.store') }}'
    </script>
@endsection

@section('js-files')
    <script src="{{ asset('js/users/createNewUser.js') }}"></script>
@endsection
