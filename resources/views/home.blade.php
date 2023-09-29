<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trains-Giuri</title>

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>
    <h1 class="text-center text-primary">Tabella Treni</h1>

    <h2 class="text-center text-warning mb-4">Treni in partenza Oggi:</h2>

    <div class="container">
        <div class="row">
            @foreach ($trains as $train)
                <div class="col-4">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h4 class="card-title">Dati Treno</h4>

                            <ul>
                                <li>
                                    <span class="card-text">Azienda: </span>
                                    <span class="card-text fs-5 fw-semibold">{{ $train->azienda }}</span>
                                </li>
                                <li>
                                    <span class="card-text">Stazione di Partenza: </span>
                                    <span class="card-text fs-5 fw-semibold">{{ $train->stazione_di_partenza }}</span>
                                </li>
                                <li>
                                    <span class="card-text">Stazione di Arrivo: </span>
                                    <span class="card-text fs-5 fw-semibold">{{ $train->stazione_di_arrivo }}</span>
                                </li>
                                <li>
                                    <span class="card-text">Giorno di partenza: </span>
                                    <span class="card-text fs-5 fw-semibold">{{ $train->giorno_partenza }}</span>
                                </li>
                                <li>
                                    <span class="card-text">Giorno di arrivo: </span>
                                    <span class="card-text fs-5 fw-semibold">{{ $train->giorno_arrivo }}</span>
                                </li>
                                <li>
                                    <span class="card-text">Orario di partenza: </span>
                                    <span class="card-text fs-5 fw-semibold">{{ $train->orario_di_partenza }}</span>
                                </li>
                                <li>
                                    <span class="card-text">Orario di partenza: </span>
                                    <span class="card-text fs-5 fw-semibold">{{ $train->orario_di_partenza }}</span>
                                </li>
                                <li>
                                    <span class="card-text">Orario di arrivo: </span>
                                    <span class="card-text fs-5 fw-semibold">{{ $train->orario_di_arrivo }}</span>
                                </li>
                                <li>
                                    <span class="card-text">Codice treno: </span>
                                    <span class="card-text fs-5 fw-semibold">{{ $train->codice_treno }}</span>
                                </li>
                                <li>
                                    <span class="card-text">In Orario: </span>
                                    <span class="card-text fs-5 fw-semibold">{{ $train->in_orario === 0 ? "no" : "si" }}</span>
                                </li>
                                <li>
                                    <span class="card-text">Cancellato: </span>
                                    <span class="card-text fs-5 fw-semibold">{{ $train->cancellato === 0 ? "no" : "si" }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>   
            @endforeach
        </div>
    </div>
</body>
</html>