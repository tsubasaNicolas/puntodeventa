

<select  class="selector" id="country" name="departamento" >
    <label for="">Departamento</label>
           <option value="australia">Seleccione</option>
    @foreach($departamentos as $departamento)
           <option value="{{$departamento->id}}">
      {{$departamento->nombredepartamento}}
           </option>
    @endforeach
</select>


<div
style="display: flex;justify-content: space-between;align-items: center;">
Departamento<input value="{{$producto->departamento}}"  name="departamento" 
type="text" class="inputglobal"></div>

@foreach ($productos as $producto)       
<tr>

<td>1</td>
<td>{{$producto->descripcion}}</td>
<td>$ {{$producto->precioventa}}</td>

<td>
-
</td>
<td>
+
  </td>
</tr>
@endforeach


fetch(`/ventas/buscador?inputBuscar=${document.getElementById("inputBuscar").value}`,{
       method:'get'
     })
     .then(response => response.text())
     .then(html => {
       document.getElementById("resultados").innerHTML += html
     })
     .catch(error => console.log(error))
      })