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
      <h1 class="titulo">Inicio2</h1><br><br>
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm">
            <h1>Código</h1>
            <h2>@{{order.subcategory.codigo}}</h2><br>
            <h1>Terminado</h1>
            <h2>@{{order.subcategory.category.nombre}}</h2><br>
            <h1>Descripción</h1>
            <h2>@{{order.subcategory.descripcion}}</h2><br>
            <h1>Restante de piezas: </h1>
            <h2>@{{order.restante}}</h2>
          </div>
          <div class="col-sm">
            <h1>Trabajador 1</h1>
            <form @submit="addWork">
              <select class="custom-select" name="worker" id="Select1" v-model="form.worker_id">
                <option selected="">Trabajador</option>
                @foreach($workers as $worker)
                <option value="{{$worker->id}}" v-if="form.worker2_id!={{$worker->id}}">{{$worker->nombre}} {{$worker->apellido}}</option>
                @endforeach
              </select><br><br>
              <h1>Trabajador 2</h1>
              <select class="custom-select" name="worker2" id="Select2" v-model="form.worker2_id">
                <option selected="">Trabajador</option>
                @foreach($workers as $worker)
                <option value="{{$worker->id}}" v-if="form.worker_id!={{$worker->id}}">{{$worker->nombre}} {{$worker->apellido}}</option>
                @endforeach
              </select><br><br>
              <div class="form-group">
                <h1>Cantidad</h1>
                <input class="form-control" type="number" v-model="form.cantidad" name="cantidad" placeholder="Ingrese una cantidad">
              </div><br><br>
              <button class="btn btn-primary" type="submit">Enviar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script src="{{ asset('js/app.js')}}"> </script>
    <script src="{{ asset('js/general.min.js') }}"> </script>
  </body>
</html>