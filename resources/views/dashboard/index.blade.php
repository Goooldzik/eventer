@extends('layouts.app')

@section('content')
    <div class="row mb-3">
        <div class="col-sm-12">
            <h4 class="text-uppercase text-center">
                Witaj {{ $user->name }}!
            </h4>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-sm-12">
            <div class="row mb-3">
                <div class="col-sm-12">
                    <h4>Codzienne statystyki</h4>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-12">
                    Dzisiejsze rezerwacje {{ $ticketsBought }}
                </div>
            </div>
        </div>
    </div>
@endsection
