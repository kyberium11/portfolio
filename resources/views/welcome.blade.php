<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Jerome Altarejos</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
       
    </head>
    <body>
        <div class="container jumbotron">
            <h1 class="display-4">Hello, world!</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <p class="lead">
              <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </p>
          </div>
        
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>    
    </body>
</html>
