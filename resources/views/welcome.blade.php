<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('../css/welcome.css') }}" rel="stylesheet">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

  
    </head>
    <body>
        <div class="fotoandh">


    <div class="container">
    <img src="{{ asset('image/broodjes1.png') }}" alt="Broodje Gezond Afbeelding" width="150" height="75" class="broodimg" />
        <h2>Bestel je broodjes <br> maar dan...</h2>
        
        <h1 class="rompies-font">fast</h1>


        <div class="buttons">
            <a class="btn" href="{{ route('login') }}">Login</a>
            <br>
            <a class="btn" href="{{ route('register') }}">Maak een account</a>
        </div> 
     </div>
    </div>


</body>
</html>