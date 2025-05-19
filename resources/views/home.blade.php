<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trains</title>
    {{-- CSS --}}
    @vite(['resources/js/app.js'])
</head>
<body>
    <nav>
        <h1>Treni</h1>
    </nav>

    <main>
        <table>
            <thead>
                <tr>
                    <th>Codice Treno</th>
                    <th>Azienda</th>
                    <th>Stazione di Partenza</th>
                    <th>Stazione di Arrivo</th>
                    <th>Partenza</th>
                    <th>Arrivo</th>
                    <th>Totale Carrozze</th>
                    <th>Cancellato</th>
                    <th>In Orario</th>
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($trains as $train)
                    <tr>
                        <td>{{ $train->codice_treno }}</td>
                        <td>{{ $train->azienda }}</td>
                        <td>{{ $train->stazione_di_partenza }}</td>
                        <td>{{ $train->stazione_di_arrivo }}</td>
                        <td>{{ $train->orario_di_partenza }}</td>
                        <td>{{ $train->orario_di_arrivo }}</td>
                        <td>{{ $train->totale_carrozze }}</td>
                        <td>{{ $train->cancellato ? 'Cancellato' : 'Attivo' }}</td>
                        <td>{{ $train->in_orario ? 'In orario' : 'In ritardo' }}</td>
                    </tr>
                    @endforeach
                </tr>
            </tbody>
        </table>
    </main>
</body>
</html>