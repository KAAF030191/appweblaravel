<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1.0" name="viewport">
                <meta content="ie=edge" http-equiv="X-UA-Compatible">
                    <title>
                        App Laravel
                    </title>
                    <link href="{{asset('css/cssTemplate.css')}}" rel="stylesheet" type="text/css">

                    <link href="{{asset('css/normalize.min.css')}}" rel="stylesheet" type="text/css">
                    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">  

                     <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
                    <script src="{{asset('js/bootstrap.min.js')}}"></script>
                   
                    
                      
                </meta>
            </meta>
        </meta>
    </head>
    <body>
        <header>
            <h1>
                Esta seccion es la cabesera
            </h1>
        </header>
        @include('parcial/menu')
        <section>
            @yield('cuerpoGeneral')
        </section>
        <footer>
            <h2>
                Esta seecion es el cuerpo es el pie
            </h2>
        </footer>
    </body>


</html>
