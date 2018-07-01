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
      <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
      <!-- Styles -->
      <link href="{{ asset('css/app.css')}}" rel="stylesheet" type="text/css">
    </head>
  </head>
  <body class="index">
    <div id="app">
      <div class="commonContainer">
        <div class="logo"><img src="img/logo_thp.png"></div>
        <h1 class="titulo">Molino Laminador</h1>
        <div class="container">
          <div class="row">
            <div class="col-sm blanco">
              <div class="contenedor">
                <h1>Código</h1>
                <h2>@{{order.subcategory.codigo}}</h2><br>
                <h1>Terminado</h1>
                <h2>@{{order.subcategory.category.nombre}}</h2><br>
                <h1>Descripción</h1>
                <h2>@{{order.subcategory.descripcion}}</h2><br>
                <h1>Restante de piezas: </h1>
                <h2>@{{order.restante}}</h2>
              </div>
            </div>
            <div class="col-sm tinto">
              <div class="contenedor">
                <h1>Operador 1</h1>
                <form @submit="addWork">
                  <select class="custom-select" name="worker" id="Select1" v-model="form.worker_id">
                    @foreach($workers as $worker)
                    <option value="{{$worker->id}}" v-if="form.worker2_id!={{$worker->id}}">{{$worker->nombre}} {{$worker->apellido}}</option>
                    @endforeach
                  </select><br><br>
                  <h1>Operador 2</h1>
                  <select class="custom-select" name="worker2" id="Select2" v-model="form.worker2_id">
                    @foreach($workers as $worker)
                    <option value="{{$worker->id}}" v-if="form.worker_id!={{$worker->id}}">{{$worker->nombre}} {{$worker->apellido}}</option>
                    @endforeach
                  </select><br>
                  <div class="form-group">
                    <h1>Cantidad</h1>
                    <input class="form-control" type="number" v-model="form.cantidad" name="cantidad" placeholder="Ingrese una cantidad">
                  </div><br>
                  <button class="btn btn-primary" type="submit">Enviar</button>
                  <button class="btn btn-primary" v-on:click="onReset">Cambio de Trabajadores</button>
                  <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                      <!-- Modal content -->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button class="close" type="button" data-dismiss="modal">×</button>
                          <h4 class="modal-title">Modal Header</h4>
                        </div>
                        <div class="modal-body">
                          <p>Some text in the modal.</p>
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
                <div class="clear"></div>
              </div>
              <div class="clear"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="{{ asset('js/app.js')}}"> </script>
    <script src="{{ asset('js/general.min.js') }}"> </script>
  </body>
</html>