@extends('layouts.admin')
@section('styles')
<link rel="stylesheet" href="{{asset('plugins/slim-select/slimselect.min.css') }}">
@endsection

@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col">
         <div class="card">
            <div class="card-body">
               <h4 class="card-title text-uppercase">CURSO: {{$curso->nombre}}</h4>
               <ul class="nav nav-pills mb-3 justify-content-end">
                  <li class="nav-item"><a href="#navpills2-1" class="nav-link active show" data-toggle="tab" aria-expanded="false">ACTUALIZAR</a>
                  </li>
                  <li class="nav-item"><a href="#navpills2-2" class="nav-link  " data-toggle="tab" aria-expanded="false">NUEVA TAREA</a>
                  </li>
                  <li class="nav-item"><a href="#navpills2-3" class="nav-link  " data-toggle="tab" aria-expanded="false">TAREAS</a>
                  </li>

               </ul>
               <div class="tab-content br-n pn">

                  <div id="navpills2-1" class="tab-pane active show">
                     <div class="row align-items-center">
                        <div class="col-sm-6 col-md-8 col-xl-10">
                           <form action="{{route('cur.update',$curso->id)}}" method="post">
                              @csrf
                              @method('PUT')
                              <div class="modal-body">

                                 <div class="form-group">
                                    <label for="">NOMBRE DE CURSO</label>
                                    <input type="text" class="form-control" name="nombre" value="{{$curso->nombre}}">
                                 </div>

                                 <select name="grado_id" id="grado">
                                    <option value="{{$curso->grado_id}}">{{$curso->grado->nombre}}</option>
                                    @foreach ($grado as $g)
                                    <option value="{{$g->id}}">{{$g->nombre}}, Seccion: {{$g->seccion}}</option>
                                    @endforeach
                                 </select>

                              </div>
                              <div class="modal-footer">
                                 <button type="submit" class="btn btn-primary"><i class="fas fa-save    "></i> GUARDAR</button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>

                  <div id="navpills2-2" class="tab-pane  ">
                     <p>
                        <a class="btn btn-primary" data-toggle="collapse" href="#contentId" aria-expanded="false" aria-controls="contentId">
                           NUEVA TAREA
                        </a>
                     </p>
                     <div class="collapse" id="contentId">
                        <form action="{{route('cur.save_tarea')}}" method="POST">
                           @csrf
                           @include('admin.cursos.tarea.form')

                           <input type="hidden" name="curso_id" value="{{$curso->id}}">
                           <input type="hidden" name="grado_id" value="{{$curso->grado_id}}">

                           <button type="submit" class="btn btn-success float-right"><i class="fa fa-save"></i> GARDAR</button>
                        </form>
                     </div>
                  </div>

                  <div id="navpills2-3" class="tab-pane  ">
                     <h3>TAREAS REGISTRADAS</h3>
                     <hr>

                     @include('admin.cursos.tarea.tareas')


                  </div>

               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection



@section('scripts')

<script src="{{asset('plugins/slim-select/slimselect.min.js') }}">
</script>

<script>
   setTimeout(function() {
      new SlimSelect({
         select: '#grado',
         placeholder: 'Select Permissions',
         deselectLabel: '<span>&times;</span>',
         hideSelectedOption: true,
      })
   }, 300);
</script>
@endsection