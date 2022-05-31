@extends('layouts.app')

@section('content')
    <div class="row mb-3">
        <div class="col-sm-12">
            <h4>Formularz rezygnacji z rezerwacji biletu na wydarzenie <span class="text-uppercase">{{ $ticket->event->title }}</span></h4>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-sm-12">
            <div class="row mb-3">
                <div class="col-sm-12">
                    <p>
                        {{ $ticket->event->description }}
                    </p>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-12">
                    Wydarzenie rozpoczyna się {{ $ticket->event->start_at }}
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-sm-12">
            <button type="button" class="btn btn-danger book-off">Usuń rezerwacje</button>
        </div>
    </div>
@endsection

@section('js-text')
    <script>
        let url = '{{ url('api/book-off') }}/{{ $ticket->ticket_number }}'
    </script>

    <script>
        let bookOff = () => {
            $.ajax({
                method: 'POST',
                url: url,

                success: function (response) {
                    Swal.fire({
                        icon: response.status,
                        text: response.message
                    }).then((result) => {
                        window.location.href = '/'
                    })
                },
                error: function (response) {
                    Swal.fire({
                        icon: response.status,
                        text: response.responseJSON.message
                    })
                }
            });
        }

        $(function () {
            $('.book-off').click(function () {
                Swal.fire({
                    title: 'Potwierdź',
                    text: "Czy na pewno chcesz usunąć rezerwację?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Tak, usuń!',
                    cancelButtonText: 'Nie, nie usuwaj!',
                    reverseButtons: true
                }).then((result) => {
                    if(result.isConfirmed)
                    {
                        bookOff()
                    }
                })
            })
        })
    </script>
@endsection
