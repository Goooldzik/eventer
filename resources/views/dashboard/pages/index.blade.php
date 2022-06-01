@extends('layouts.app')

@section('content')
    <div class="row mb-3">
        <div class="col-sm-12">
            <div class="row mb-3">
                <div class="col-sm-12">
                    <a href="{{ route('dashboard.pages.create') }}" class="btn btn-primary">Dodaj podstrone</a>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-12">
                    <table class="table table-responsive-sm">
                        <thead>
                        <tr>
                            <th scope="col">Tytuł podstrony</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Akcje</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($pages as $page)
                            <tr>
                                <td>{{ $page->title }}</td>
                                <td>{{ $page->slug }}</td>
                                <td>
                                    <a href="#">Przejdź na podstronę</a>
                                    <a href="{{ route('dashboard.pages.edit', $page) }}">Edytuj</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-12">
                    {{ $pages->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
