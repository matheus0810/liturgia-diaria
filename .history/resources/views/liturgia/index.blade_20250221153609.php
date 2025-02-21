<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leccionário Dominical</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: "Times New Roman", serif;
            background-color: #f8f9fa;
        }
        .container {
            max-width: 800px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .title {
            font-size: 24px;
            font-weight: bold;
            text-transform: uppercase;
            text-align: center;
        }
        .section-title {
            font-size: 20px;
            font-weight: bold;
            margin-top: 20px;
            border-bottom: 2px solid #000;
            padding-bottom: 5px;
        }
        .reading {
            font-style: italic;
            font-size: 18px;
        }
        .reading-text {
            margin-top: 10px;
            font-size: 16px;
            text-align: justify;
        }
    </style>
</head>
<body>
    <div class="container mt-5 border border-danger">
        <div class="title">Liturgia</div>

        {{-- @dump($liturgia) --}}

        @if ($liturgia)
            <div class="text-center mt-3">
                <h2 class="text-danger title" >{{ $liturgia['liturgia'] }}</h2>
                <p><strong>Data:</strong> {{ $liturgia['data'] }}</p>
                <p><strong>Cor Litúrgica:</strong>
                    <span style="color: {{ \App\Helpers\LiturgiaHelper::traduzirCorLiturgica($liturgia['cor']) }}; font-weight: bold;">
Verde
                    </span>
                </p>

            </div>
            <br>
            <br>
            <div class="title text-danger ">Primeira Leitura</div>
            <p class="reading">{{ $liturgia['primeiraLeitura']['referencia'] }}</p>
            <p class="reading-text">{{ $liturgia['primeiraLeitura']['texto'] }}</p>

            <br>
            <br>

            @if(!empty($liturgia['segundaLeitura']['referencia']) && $liturgia['segundaLeitura']['texto'] !== "Não há segunda leitura hoje!")
                <div class="title text-danger">Segunda Leitura</div>
                <p class="reading">{{ $liturgia['segundaLeitura']['referencia'] }}</p>
                <p class="reading-text">{{ $liturgia['segundaLeitura']['texto'] }}</p>

                <br>
                <br>
            @endif



            <div class="title text-danger">Salmo</div>
            <p class="reading">{{ $liturgia['salmo']['referencia'] }}</p>
            <p class="reading-text">{{ $liturgia['salmo']['texto'] }}</p>


            <br>
            <br>
            <div class="title text-danger">Evangelho</div>
            <p class="reading">{{ $liturgia['evangelho']['referencia'] }}</p>
            <p class="reading-text">{{ $liturgia['evangelho']['texto'] }}</p>
        @else
            <div class="alert alert-danger mt-4">
                Não foi possível carregar a liturgia. Tente novamente mais tarde.
            </div>
        @endif
    </div>
</body>
</html>
