<!DOCTYPE html>
<html lang="es">
  <head>
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="{{ csrf_token()}}">
      <title>Laravel</title>
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
      <!-- Styles -->
      <link href="{{ asset('css/app.css')}}" rel="stylesheet" type="text/css">
    </head>
  </head>
  <body class="index">
    <div id="app">
      <h1>Inicio2</h1><br><br>
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm">
            <h1>Código</h1>
            <h2>CNR04</h2><br>
            <h1>Descripción</h1>
            <h2>Lorem ipsum dolor </h2><br>
            <h1>Cantidad de piezas: </h1>
            <h2>20</h2>
          </div>
          <div class="col-sm">
            <h1>Trabajador 1</h1>
            <select class="custom-select">
              <option selected="">Trabajador</option>
              <option value="1">Ericx</option>
              <option value="2">Joe</option>
              <option value="3">Fer</option>
            </select><br><br>
            <h1>Trabajador 2</h1>
            <select class="custom-select">
              <option selected="">Trabajador</option>
              <option value="1">Ericx</option>
              <option value="2">Joe</option>
              <option value="3">Fer</option>
            </select><br><br>
            <div class="form-group">
              <h1>Cantidad</h1>
              <input class="form-control" type="number" placeholder="Ingrese una cantidad">
            </div><br><br>
            <button class="btn btn-primary" type="submit">Enviar</button>
          </div>
        </div>
      </div>
    </div>
    <script src="{{ asset('js/app.js')}}"> </script>
  </body>
</html>