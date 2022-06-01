@extends('layouts.app')

@section('content')
    <div class="row mb-3">
        <div class="col-sm-12">
            <h4 class="text-uppercase text-center">Wydarzenie - {{ $event->title }}</h4>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-sm-12">
            <div class="row mb-3">
                <div class="col-sm-6">
                    {{ $event->description }}
                </div>
                <div class="col-sm-6">
                    <span>Zarezerwowano dzisiaj {{ $event->tickets()->whereDate('created_at', \Carbon\Carbon::today())->count() }} biletów</span>
                    <canvas id="chart" style="max-height: 300px;"></canvas>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-sm-6">
            <div class="row mb-3">
                <div class="col-sm-4">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#book-new-ticket">Zarezerwuj bilet</button>
                </div>
                <div class="col-sm-4">
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#change-event-date">Zmień termin</button>
                </div>
                <div class="col-sm-4">
                    <button type="button" class="btn btn-danger delete-event">Anuluj wydarzenie</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('modals')
    <div class="modal fade" id="book-new-ticket" tabindex="-1" aria-labelledby="book-new-ticketLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="book-new-ticketLabel">Zarezerwuj bilet</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <form>
                                    <div class="row mb-3">
                                        <div class="col-sm-6">
                                            <label for="name">Imię</label>
                                            <input type="text" name="name" id="name" class="form-control" required autofocus>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="last_name">Nazwisko</label>
                                            <input type="text" name="last_name" id="last_name" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <label for="email">Adres email</label>
                                            <input type="email" name="email" id="email" class="form-control" required>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Anuluj</button>
                    <button type="button" class="btn btn-primary book-new-ticket">Zarezerwuj</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="change-event-date" tabindex="-1" aria-labelledby="change-event-dateLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="change-event-dateLabel">Zmień termin</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <form>
                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <label for="start_at">Nowy termin</label>
                                            <input type="datetime-local" name="start_at" id="start_at" class="form-control">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Anuluj</button>
                    <button type="button" class="btn btn-primary change-event-date">Zmień termin</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js-files')
    <script src="{{ asset('js/bookTicket.js') }}"></script>
    <script src="{{ asset('js/events/changeEventDate.js') }}"></script>
    <script src="{{ asset('js/events/deleteEvent.js') }}"></script>
@endsection

@section('js-text')
    <script>
        let bookTicketUrl = '{{ route('api.book-ticket', $event) }}';
        let changeEventDateUrl = '{{ route('api.change-event-date', $event) }}';
        let deleteEventUrl = '{{ route('dashboard.events.destroy', $event) }}';
    </script>
    <script>
        let firstChart = document.querySelector('#chart').getContext('2d');

        let json_url = "{{ route('api.get-tickets', $event) }}";

        const myChart = new Chart(firstChart, {
            type: 'pie',
            data: {
                labels: [],
                datasets: [{
                    label: '# of Votes',
                    data: [],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                    ],
                    borderWidth: 1
                }]
            },
        });

        ajax_chart(myChart, json_url);

        function ajax_chart(chart, url, data) {
            var data = data || {};

            $.getJSON(url, data).done(function(response) {
                chart.data.labels = response.labels;
                chart.data.datasets[0].data = response.data.quantity;
                chart.update();
            });
        }
    </script>
@endsection
