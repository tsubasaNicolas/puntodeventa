<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" />

  <title>Punto de Venta</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />

  <!--Material Design-->

  <script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>

  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
 
  <!--Materialize-->
  <!-- Compiled and minified CSSmaterialize/1.0.0 -->
  <link rel="stylesheet"  href="{{ asset('css/materialize.min.css') }}" />



    <!-- Styles -->
    <link href="{{ asset('css/modales.css') }}" rel="stylesheet">
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('css/configuracion.css') }}" rel="stylesheet">


</head>

<body>
  <div class="contenedor">
    <header class="header" style="padding-top: 0;padding-left:0px;padding-right: 0; 
        box-shadow: 1px 1px #999999;">


      <!-- Dropdown Structure -->
      <ul id="dropdown1" class="dropdown-content">
        <li><a href="#!">Perfil</a></li>
        <li><a class="modal-trigger" href="#cerrarelturno">Cerrar turno</a></li>
        <li class="divider"></li>
        <li>
        
            <a class="dropdown-item">
            Cerrar sesión
         </a>

        </li>
      </ul>
      <nav style="padding: 10px;
            box-shadow: none;
            background-color: transparent;">
        <div class="nav-wrapper">
          <a href="#!" class="brand-logo center"
            style="display:flex;text-align: center;justify-content: center;align-items: center;"><svg width="419"
              height="80" viewBox="0 0 419 80" fill="none" xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink">
              <rect width="419" height="80" fill="url(#pattern0)" />
              <defs>
                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image0" transform="scale(0.00214592 0.011236)" />
                </pattern>
                <image id="image0" width="419" height="80"
                  xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAdIAAABZCAYAAACKYKWZAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA2ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDpEN0M5NTk2REQyNERFQTExQTE1OEFGQjNENzNCQzYxMCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo1MkIwRjRGNTcyOTkxMUVBQjA3QkQxQjcxMzBBRTNCMSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo1MkIwRjRGNDcyOTkxMUVBQjA3QkQxQjcxMzBBRTNCMSIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M2IChXaW5kb3dzKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOkEwNDA5REQ3OTg3MkVBMTFCMkVERDI4NjYwREM4OTRFIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOkQ3Qzk1OTZERDI0REVBMTFBMTU4QUZCM0Q3M0JDNjEwIi8+IDwvcmRmOkRlc2NyaXB0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" />
              </defs>
            </svg></a>
          <a href="#" data-target="mobile-demo" style="display: block;" class="sidenav-trigger">

            <i class="material-icons grey-text" style="font-size: 30px;">menu</i></a>
          <ul class="right">

            <!-- Dropdown Trigger -->
            <li style="color: grey;">
              <a class="dropdown-trigger" href="#!" data-target="dropdown1"
                style="display: flex;justify-content: space-around;color:gray">
                <i style="font-size: 20px; margin-right: 0px;" class="material-icons grey--text">account_circle</i>
              
                <i class="material-icons">arrow_drop_down</i></a></li>
          </ul>
        </div>
      </nav>

      <ul class="sidenav nav-menu" id="mobile-demo">
        <li>
          <a class="sidenav-close" style="width:32%;margin-bottom:10px" id="cerrarnavegacion"><i
              class="material-icons">keyboard_backspace</i>
          </a>
        </li>
        <li>
          <a href="ventas" class="">Ventas<i class="material-icons">check</i>
          </a>
        </li>
        <li>
          <a href="clientes" class="">Clientes<i class="material-icons">people_outline</i></a>
        </li>
        <li>
          <a href="productos" class="">Productos<i class="material-icons">local_offer</i></a>
        </li>
        <li>
          <a href="inventario" class="">Inventario<i class="material-icons">assignment_turned_in</i></a>
        </li>
        <li>
          <a href="cortedeldia" class="">Corte<i class="material-icons">book_online</i></a>
        </li>
        <li>
          <a href="mantenimiento" class="">Mantenimiento<i class="material-icons">build</i></a>
        </li>
        <li>
          <a href="configuracion" class="">Configuración<i class="material-icons">miscellaneous_services</i></a>
        </li>

      </ul>

      <!-- cerrarelturno Modal Structure -->
      <div id="cerrarelturno" class="modal">

        <h5><strong>¿Seguro que desea cerrar el turno?</strong></h5>

        <div style="display: flex;justify-content: space-evenly;align-items: center;">
          <a id="" class="aceptar">SI</a>
          <a id="" class="modal-close cancelar">NO</a>

        </div>

      </div>
    </header>

    <main class="contenido">
      <!-- Fila 1-->
      <div style="display: flex;justify-content: center;align-items:center;">

      

        <!--editar Cliente-->



        <!--  editar Cliente modificarcliente Modal Structure -->
        <div id="modificarcliente" class="">

        <form action="{{ url('/clientes/'.$cliente->id) }}" method="post" enctype="multipart/form-data">

            {{ csrf_field() }}
            
            {{ method_field('PATCH') }}
            
            
          <h5 class="center" style="margin-top: 0px;display: flex;justify-content: center;align-items: center">
            <i class="material-icons orange-text" style="font-size:30px ;margin-right: 10px;">create
            </i> Modificar cliente
          </h5>

          <div style="display: flex;justify-content: space-between;align-items: center;">
            Razón Social
          <input value="{{$cliente->razonsocial}}" class="inputglobal" name="razonsocial" type="text">
          </div>

          <div style="display: flex;justify-content: space-between; align-items: center;">
            RUT<input value="{{$cliente->rut}}" name="rut" type="text" class="inputglobal">
          </div>

          <div style="display: flex;justify-content: space-between;align-items: center;">
            Dirección<input value="{{$cliente->direccion}}" name="direccion" type="text" class="inputglobal"></div>

          <div style="display: flex;justify-content: space-between;align-items: center;">
            Comuna<input value="{{$cliente->comuna}}" name="comuna"type="text" class="inputglobal"></div>

          <div style="display: flex;justify-content: space-between;align-items: center;">
            Ciudad<input value="{{$cliente->ciudad}}" name="ciudad" type="text" class="inputglobal"></div>

          <div style="display: flex;justify-content: space-between;align-items: center;">
            Giro<input value="{{$cliente->giro}}" name="giro" type="text" class="inputglobal"></div>

          <div style="display: flex;justify-content: space-between;align-items: center;">
            Teléfono<input value="{{$cliente->telefono}}" name="telefono" type="text" class="inputglobal"></div>

          <div style="display: flex;justify-content: space-between;align-items: center;">
            E-mail<input value="{{$cliente->email}}" name="email" type="text" class="inputglobal"></div>

          <div style="margin-top:10px;display: flex;justify-content: center;align-items: center;">
            <button type="submit" class="guardarcrear">
              Guardar</button>

          </div>

        </form>
        </div>

      </div>
      <!--Fila 2-->

  </main>



  </div>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

  <!-- Compiled and minified JavaScript -->
  <script src="{{ asset('js/materialize.min.js') }}"></script>
   
  <!-- Scripts -->
  <script src="{{ asset('js/index.js') }}" defer></script>




</body>

</html>