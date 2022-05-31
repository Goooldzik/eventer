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
<h1>{{ $event_title }}</h1>
<p>Wydarzenie rozpoczyna się {{ $event_starts_at }}</p>
<p>{{ $event_description }}</p>
<hr />
Aby anulować rezerwację wejdź na {{ route('bookOffTicketForm', $ticket_number) }}
</body>
</html>
