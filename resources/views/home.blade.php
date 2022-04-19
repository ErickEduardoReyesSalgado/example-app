<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pruebas</title>
</head>
<body>
    <h1>Hola @php echo $nombre . " Y la hora actual es: " @endphp {{ time() }} </h1>
     <h2>{{ "Número rand: ".  rand() }}</h2>
     <h2>Mis apellidos son: {{ $apellidos }}</h2>
     <h3>Edad: {{ isset($edad) ? $edad: '24' }}</h3>
     <h2>Altura: {{ $altura ?? 1.8 }}</h2>
     <h5>{{-- Este comentario no se muestra en el HTML --}}</h5>
     <h2>Número del 1 al 10  de forma ascendente con bucle for<br>
         @for ($i = 0 ; $i<=10; $i++)
         <br>Valor de i:{{  $i }} 
         @endfor 
     </h2>

     <h2>Número del 1 al 10  de forma ascendente con bucle for <br>
        @for ($j= 10 ; $j>0; $j--)
        <br>Valor de j:{{  $j }} 
        @endfor 
    </h2>
     
</body>
</html>