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
    <div style="padding: 0.4rem;">
        <h2>Rezervace ubytování - <span style="text-transform: uppercase;">{{ $details['variant'] }}</span> BETLÉM</h2>
    </div>
    <div style="padding: 0.5rem;">
        <h3>Informace o zákazníkovi</h3>
    </div>
    <div style="padding: 0.6rem;">
        <p>email: <strong>{{ $details['email'] }}</strong></p>
    </div>
    <div style="padding: 0.6rem;">
        <p>jméno a příjmení: <strong>{{ $details['firstname'] }} {{ $details['lastname'] }}</strong></p>
    </div>
    <div style="padding: 0.6rem;">
        <p>telefon: <strong>{{ $details['telephone'] }}</strong></p>
    </div>
    <div style="padding: 0.6rem;">
        <p>počet osob: <strong>{{ $details['numberOfPersons'] }}</strong></p>
    </div>
    <div style="padding: 0.6rem;">
        <p>typ pokoje: <strong>{{ $details['roomType'] }}</strong></p>
    </div>
    <div style="padding: 0.6rem;">
        <p>datum příjezdu a odjezdu: <strong>{{ $details['datefilter'] }}</strong></p>
    </div>
    <div style="padding: 0.6rem;">
        <p>poznámky k rezervaci:
            <strong>{{ empty($details['reservationNotes']) ? 'žádné' : $details['reservationNotes'] }}</strong></p>
    </div>
    <div style="padding: 0.6rem;">
        <p>souhlas o zpracování dat:
            <strong>{{ $details['agreement'] === 'on' ? 'souhlas udělen' : 'souhlas neudělen' }}</strong></p>
    </div>
    <div style="padding: 0.6rem;">
        <strong>Nyní je potřeba kontaktovat zákazníka.</strong>
    </div>
</body>

</html>