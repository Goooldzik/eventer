@extends('layouts.app')

@section('content')
    <div class="row mb-3">
        <div class="col-sm-12">
            <div class="row mb-3">
                <div class="col-sm-12">
                    <h4 class="text-uppercase text-center">{{ $page->title }}</h4>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-12">
                    {!! $page->content !!}
                </div>
            </div>
        </div>
    </div>
@endsection
