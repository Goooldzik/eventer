@extends('layouts.app')

@section('content')
    <div class="row mb-3">
        <div class="col-sm-12">
            <div class="row mb-3">
                <div class="col-sm-6">
                    <label for="name">Imię</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}" disabled>
                </div>
                <div class="col-sm-6">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}" disabled>
                </div>
            </div>
        </div>
    </div>
@endsection
