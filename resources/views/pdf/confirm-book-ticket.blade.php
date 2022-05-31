<!DOCTYPE html>
<html lang="pl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <title>Confirm book ticket on event {{ $event_title }}</title>

    <style>
        * { font-family: DejaVu Sans, sans-serif; }
    </style>
</head>
<body>
    <div class="container">
        <div class="row mb-3">
            <div class="col-sm-12 float-end right">
                <span>Numer rezerwacji {{ $ticket_number }}</span>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-12">
                <h4 class="text-uppercase text-center">{{ $event_title }}</h4>
                <small>Wydarzenie rozpoczyna się {{ $event_starts_at }}</small>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-12">
                <h4>Opis wydarzenia</h4>
                <p>
                    {{ $event_description }}
                </p>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-12">
                <div class="row mb-3">
                    <div class="col-sm-12">
                        Pamiętaj! Jeżeli nie jesteś w stanie pojawić się na wydarzeniu, anuluj rezerwacje. Na Twoje miejsce może czegoś ktoś, komu bardzo zależy na tym wydarzeniu. Bądźmy dla siebie ludźmi :)
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-12">
                        <a href="{{ route('bookOffTicketForm', $ticket_number) }}" class="btn btn-primary">Anuluj rezerwację</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
