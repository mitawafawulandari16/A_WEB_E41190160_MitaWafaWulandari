<DOCTYPE html>
<html lang="{{ str_replace('_','_', app()->getLocale())}}">
<head>
    <meta chanset="UTE-8">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <tittle>{{ config('app.name')}}</tittle>
    </head>
    <body>
        <div class="jumbotron jumbotron-fluide">
            <div class="container">
                @yield('content')
        </div>
        </div>
     </body>           
</html>