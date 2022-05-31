@extends('layouts.app')

@section('content')
    <div class="row mb-3">
        <div class="col-sm-12">
            <h4>Formularz rezygnacji z rezerwacji biletu na wydarzenie <span class="text-uppercase">{{ $event->title }}</span></h4>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-sm-12">
            <div class="row mb-3">
                <div class="col-sm-12">
                    <p>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
                    </p>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-12">
                    Wydarzenie rozpoczyna się {{ $event->start_at }}
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
        let url = '{{ url('api/book-off') }}/{{ $ticket }}'
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
                    })
                },
                error: function (response) {
                    Swal.fire({
                        icon: response.status,
                        text: response.message
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
