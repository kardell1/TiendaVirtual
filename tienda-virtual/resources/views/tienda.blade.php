<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- esto es para generar los estilos , por alguna razon no me jala los estilos desde la carpeta css , y los busca dentro de la carpeta public , entonces es mejor dejarlo declarado desde ahi o meterlo en alguna carpeta quizas  -->
    <link rel="stylesheet" href="{{ asset('estilos.css') }}">
    <title>Tienda_Virtual</title>
</head>
<body>
    
    <section class="screem ">
        <div class="widthFull heightFull justifyCenter cardPrincipal bg_image">
            <div class="cardPrincipal_Titulo textAzure bold">titulo empresa</div>
            <div class="cardPrincipal_Descripcion textAzure bold" >Disfruta con tu <span class ="textOrange">familia</span></div>
            <!-- esto tendria que ser un componente reutilizable  -->
            <x-button>
               <p class="semiBold">Revisa la carta</p>
            </x-button>
        </div>
    </section>
</body>
</html>