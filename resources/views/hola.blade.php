@php
$estacion = "Primavera";

@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Estamos en Verano!</h1>
    @if($estacion == "Primavera")
    echo "Estamos en primavera";
    @else
    echo "Estamos en Verano";

    @endif
</body>

</html>