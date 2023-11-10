@extends('layouts.admin')
@section('styles')
<link rel="stylesheet" href="{{asset('plugins/slim-select/slimselect.min.css') }}">
@endsection
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col">
      <p class="text-center">REPORTE DE TAREAS</p>

      </div>
   </div>
   <div class="row">



      <div class="col-md-4">
         <div class="card">
            <div class="card-body">
               <h4 class="card-title">CURSOS</h4>
               <p class="card-text">RETORNA EL REPORTE DE TODOS LOS CURSOS REGISTRADOS</p>
               <a class="btn btn-primary" href="{{route('cur.reports')}}"><i class="fa fa-print" aria-hidden="true"></i></a>
            </div>
         </div>
      </div>


      <div class="col-md-4">
         <div class="card">
            <div class="card-body">
               <h4 class="card-title">TAREAS</h4>
               <p class="card-text">RETORNA EL REPORTE DE TODAS LAS TAREAS REGISTRADAS EN UN CURSO EN ESPECIFICO</p>
             <form action="{{route('cur.tareasa_to_curso')}}" method="get">

             <select name="curso_id" id="curso_id">
               @foreach ($cursos as $f)
               <option value="{{$f->id}}">{{$f->nombre}}, <span>Grado: {{$f->grado->nombre}}, Seccion: {{$f->grado->seccion}}</span></option>
               @endforeach
             </select>

             <button type="submit" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i> BUSCAR</button>
             

             </form>
            </div>
         </div>
      </div>


   </div>
</div>

@endsection

@section('scripts')

<script src="{{asset('plugins/slim-select/slimselect.min.js') }}"></script>

<script>

   new SlimSelect({
      select: '#curso_id',
      placeholder: 'Select Permissions',
      deselectLabel: '<span>&times;</span>',
      hideSelectedOption: true,
   });
</script>
@endsection