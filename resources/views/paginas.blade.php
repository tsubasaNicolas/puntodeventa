@if (count($productos))
@foreach ($productos as $item)
<p>{{$item->descripcion}}</p>
    
@endforeach

@endif