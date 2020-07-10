<!doctype html>

<html lang="cs">

<head>
    <meta charset="utf-8">
    <title>Rezervace ubytování</title>
    <meta name="description" content="Rezervační email">
    <meta name="author" content="penzion.betlem">
    <style>
        body {
            font-family: Tahoma, Arial, Helvetica, sans-serif;
        }

        h2 {
            color: #222222;
        }

        h3 {
            color: #3f3f3f;
        }
    </style>
</head>

<body>
    <h2>Rezervace ubytování - {{ $details['variant'] }}</h2>
    <h3>Informace o zákazníkovi</h3>
    <div style="padding: 0.4rem;">
        <p>email: <strong>{{ $details['email'] }}</strong></p>
    </div>
    <div style="padding: 0.4rem;">
        <p>jméno a příjmení: <strong>{{ $details['firstname'] }} {{ $details['lastname'] }}</strong></p>
    </div>
    <div style="padding: 0.4rem;">
        <p>telefon: <strong>{{ $details['telephone'] }}</strong></p>
    </div>
    <div style="padding: 0.4rem;">
        <p>datum příjezdu a odjezdu: <strong>{{ $details['datefilter'] }}</strong></p>
    </div>
    <div style="padding: 0.4rem;">
        <p>poznámky k rezervaci:
            <strong>{{ empty($details['reservationNotes']) ? 'žádné' : $details['reservationNotes'] }}</strong></p>
    </div>
    <div style="padding: 0.4rem;">
        <p>souhlas o zpracování dat:
            <strong>{{ $details['agreement'] === 'on' ? 'souhlas udělen' : 'souhlas neudělen' }}</strong></p>
    </div>
</body>

</html>