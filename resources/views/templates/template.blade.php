<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>App Laravel</title>
<style media="screen">
  header{
    background-color: green;
  }
  footer{
    background-color: yellow;
    display:block;
    
  }
  h1{
    margin-left: inherit;

  }
</style>
</head>
<body>
<header>
  <h1>Esta seccion es la cabesera</h1>
</header>
  <section>
@yield('cuerpoGeneral')
  </section>
  <footer>
    <h2>Esta seecion es el cuerpo es el pie</h2>
  </footer>
</body>
</html>
