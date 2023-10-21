<div class="row">
   <div class="col-12">
      <h4 class="text-center">TAREAS 1ER. BIMESTRE</h4>
   </div>
   @foreach ($tareas as $t)
   @if ($t->bimestre === 1)
   <div class="col-md-2">
      <div class="card">
         <div class="card-body">
            <h4 class="card-title">{{$t->nombre}}</h4>
            <p class="card-text">VALOR:
               <span class="badge badge-info">{{$t->valor}}</span>
            </p>
            <p class="card-text">FECHA DE ENTREGA: {{$t->fecha_de_entrega}}</p>
            <p class="card-text">FECHA DE REGISTRO{{$t->created_at}}</p>
            <form action="{{route('cur.delete_tarea', $t->id)}}" method="post">
               @method('DELETE')
               @csrf
               <button type="submit" class="btn btn-danger" onclick="return confirm('Esta Seguro de Eliminar')"><i class="fa fa-trash" aria-hidden="true"></i></button>
            </form>
         </div>
      </div>
   </div>
   @endif
   @endforeach
</div>


<div class="row">
   <div class="col-12">
      <h4 class="text-center">TAREAS 2DO. BIMESTRE</h4>
   </div>
   @foreach ($tareas as $t)
   @if ($t->bimestre === 2)
   <div class="col-md-2">
      <div class="card">
         <div class="card-body">
            <h4 class="card-title">{{$t->nombre}}</h4>
            <p class="card-text">VALOR: {{$t->valor}}</p>
            <p class="card-text">FECHA DE ENTREGA: {{$t->fecha_de_entrega}}</p>
            <p class="card-text">FECHA DE REGISTRO{{$t->created_at}}</p>
            <form action="{{route('cur.delete_tarea', $t->id)}}" method="post">
               @method('DELETE')
               @csrf
               <button type="submit" class="btn btn-danger" onclick="return confirm('Esta Seguro de Eliminar')"><i class="fa fa-trash" aria-hidden="true"></i></button>
            </form>

         </div>
      </div>
   </div>
   @endif
   @endforeach
</div>


<div class="row">
   <div class="col-12">
      <h4 class="text-center">TAREAS 3ER. BIMESTRE</h4>
   </div>
   @foreach ($tareas as $t)
   @if ($t->bimestre === 3)
   <div class="col-md-2">
      <div class="card">
         <div class="card-body">
            <h4 class="card-title">{{$t->nombre}}</h4>
            <p class="card-text">VALOR: {{$t->valor}}</p>
            <p class="card-text">FECHA DE ENTREGA: {{$t->fecha_de_entrega}}</p>
            <p class="card-text">FECHA DE REGISTRO{{$t->created_at}}</p>
            <form action="{{route('cur.delete_tarea', $t->id)}}" method="post">
               @method('DELETE')
               @csrf
               <button type="submit" class="btn btn-danger" onclick="return confirm('Esta Seguro de Eliminar')"><i class="fa fa-trash" aria-hidden="true"></i></button>
            </form>

         </div>
      </div>
   </div>
   @endif
   @endforeach
</div>


<div class="row">
   <div class="col-12">
      <h4 class="text-center">TAREAS 4TO. BIMESTRE</h4>
   </div>
   @foreach ($tareas as $t)
   @if ($t->bimestre === 4)
   <div class="col-md-2">
      <div class="card">
         <div class="card-body">
            <h4 class="card-title">{{$t->nombre}}</h4>
            <p class="card-text">VALOR: {{$t->valor}}</p>
            <p class="card-text">FECHA DE ENTREGA: {{$t->fecha_de_entrega}}</p>
            <p class="card-text">FECHA DE REGISTRO{{$t->created_at}}</p>
            <form action="{{route('cur.delete_tarea', $t->id)}}" method="post">
               @method('DELETE')
               @csrf
               <button type="submit" class="btn btn-danger" onclick="return confirm('Esta Seguro de Eliminar')"><i class="fa fa-trash" aria-hidden="true"></i></button>
            </form>

         </div>
      </div>
   </div>
   @endif
   @endforeach
</div>