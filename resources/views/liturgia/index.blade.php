<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liturgia Diária</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Liturgia Diária</h1>

        @if ($liturgia)
            <div class="card mt-4">
                <div class="card-body">
                    <h2>{{ $liturgia['liturgia'] }}</h2>
                    <p><strong>Data:</strong> {{ $liturgia['data'] }}</p>
                    <p><strong>Cor Litúrgica:</strong> {{ $liturgia['cor'] }}</p>
                </div>
            </div>

            <div class="mt-4">
                <h3>Leituras</h3>
                <h4>Primeira Leitura</h4>
                <p><strong>{{ $liturgia['primeiraLeitura']['referencia'] }}</strong></p>
                <p>{{ $liturgia['primeiraLeitura']['texto'] }}</p>


                @if(!empty($liturgia['segundaLeitura']['referencia']) && $liturgia['segundaLeitura']['texto'] !== "Não há segunda leitura hoje!")
                <h4>Segunda Leitura</h4>
                <p><strong>{{ $liturgia['segundaLeitura']['referencia'] }}</strong></p>
                <p>{{ $liturgia['segundaLeitura']['texto'] }}</p>
            @endif


                <h4>Salmo</h4>
                <p><strong>{{ $liturgia['salmo']['referencia'] }}</strong></p>
                <p>{{ $liturgia['salmo']['texto'] }}</p>

                <h4>Evangelho</h4>
                <p><strong>{{ $liturgia['evangelho']['referencia'] }}</strong></p>
                <p>{{ $liturgia['evangelho']['texto'] }}</p>
            </div>
        @else
            <div class="alert alert-danger mt-4">
                Não foi possível carregar a liturgia. Tente novamente mais tarde.
            </div>
        @endif
    </div>
</body>

</html>
