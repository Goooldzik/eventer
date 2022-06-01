@extends('layouts.app')

@section('content')
    <div class="row mb-3">
        <div class="col-sm-12">
            <form>
                <div class="row mb-3">
                    <div class="col-sm-12">
                        <label for="title">Tytuł podstrony</label>
                        <input type="text" name="title" id="title" class="form-control" required autofocus>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-12">
                        <label for="content">Treść podstrony</label>
                        <textarea name="content" id="content" class="form-control" required></textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-12">
                        <button type="button" class="btn btn-primary create-new-page">Dodaj podstrone</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('js-text')
    <script>
        let createNewPageUrl = '{{ route('dashboard.pages.store') }}';
    </script>
@endsection

@section('js-files')
    <script src="{{ asset('js/pages/createPage.js') }}"></script>
@endsection
