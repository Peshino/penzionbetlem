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
    <div style="padding: 0.5rem;">
        <h3>Dobrý den, děkujeme za Vaši objednávku. Vaše rezervace byla úspěšně zaevidována a v co nejkratší době Vás
            budeme kontaktovat ohledně dostupnosti pokojů, případně potvrzením rezervace.</h3>
    </div>
    <div style="padding: 0.5rem;">
        <h3>Objednávka byla vystavena na následující údaje:</h3>
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
    <div style="padding: 1rem 0.6rem;">
        <p><strong>Tento email je pouze informativní, prosíme, neodpovídejte na něj. Děkujeme.</strong></p>
    </div>
    <div style="padding: 1rem 0.6rem;">
        <p><strong><span style="text-transform: uppercase;">{{ $details['variant'] }}</span> BETLÉM</strong></p>
    </div>
</body>

</html>