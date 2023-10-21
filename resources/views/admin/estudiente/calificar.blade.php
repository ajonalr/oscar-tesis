@extends('layouts.admin')


@section('styles')
<link rel="stylesheet" href="{{asset('plugins/slim-select/slimselect.min.css') }}">
<link rel="stylesheet" href="{{asset('plugins/toastr/toastr.min.css')}}">
@endsection


@section('content')

<div class="container-fluid">
   @if ($v_grado )
   <div class="row">
      <div class="col">
         <form action="" method="get">
            <div class="form-group">
               <label for="">GRADO</label>
               <select class="form-control" name="grado_id" id="tarea" required>
                  @foreach ($grados as $g)
                  <option value="{{$g->id}}">{{$g->nombre}}, SECCION: {{$g->seccion}}</option>
                  @endforeach
               </select>
            </div>
            <button type="submit" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i></button>
         </form>
      </div>
   </div>
   @endif



   @if ($v_cursos)
   <div class="row">
      <div class="col">
         <form action="">

            <p>CURSOS</p>
            <select name="curso_id" id="tarea">
               @foreach ($cursos as $c)
               <option value="{{$c->id}}">{{$c->nombre}}</option>
               @endforeach
            </select>

            <button type="submit" class="btn btn-success"><i class="fa fa-search-plus" aria-hidden="true"></i></button>
         </form>
      </div>
   </div>
   @endif

   @if ($v_tareas)
   <div class="row">
      <div class="col">
         <form action="">
            <p>TAREAS</p>
            <select name="tarea_id" id="tarea">
               @foreach ($tareas as $t)
               <option value="{{$t->id}}">TAREA: {{$t->nombre}}. VALOR: {{$t->valor}}. FECHA ENTREGA: {{$t->fecha_de_entrega}}. BIMESTRE: {{$t->bimestre}}</option>
               @endforeach
            </select>

            <button type="submit" class="btn btn-success"><i class="fa fa-search-plus" aria-hidden="true"></i></button>
         </form>
      </div>
   </div>

   @endif


   @if ($v_esu)
   <div class="row">
      <div class="col">
         <div class="card">
            <img class="card-img-top" src="holder.js/100x180/" alt="">
            <div class="card-body">
               <h4 class="card-title">CALIFICAR</h4>

               <table class="table">
                  <thead>
                     <tr>
                        <th>ESTUDIANTE</th>
                        <th>CALIFICACION</th>
                        <th></th>
                     </tr>
                  </thead>
                  <tbody>

                     @foreach ($estu as $e)

                     <tr>
                        <td>{{$e->estudiante->nombre}}</td>
                        <td>{{$e->calificacion}} / {{$e->tarea->avlor}}</td>
                        <td>

                           <form action="" class="form-inline" method="get">

                              <input type="hidden" name="tarea_estudiente_id" value="{{$e->id}}">

                              <div class="form-group">
                                 <label for="">CALIFICACION</label>
                                 <input type="number" id="calificacion<?php echo $e->id; ?>" step="any" class="form-control" name="calificacion" value="{{$e->calificacion}}">
                              </div>

                              <button type="submit" onclick="calificar(<?php echo $e->estudiante_id ?>, <?php echo $e->id ?>, <?php echo 'calificacion' . $e->id; ?>)" class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i></button>

                           </form>

                        </td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
   @endif


</div>

@endsection


@section('scripts')


<script src="{{asset('plugins/slim-select/slimselect.min.js') }}"></script>


<script>
   new SlimSelect({
      select: '#tarea',
      placeholder: 'SELECCIONES PROFESOR',
      deselectLabel: '<span>&times;</span>',
      hideSelectedOption: true,
   });
</script>
<!-- <script src="{{asset('plugins/bootstrap/jquery.min.js')}}"></script> -->
<script src="{{asset('plugins/toastr/toastr.min.js')}}"></script>

<script>
   function calificar(estudiente, tarea, calificacionid) {

      event.preventDefault();
      let calificacion = calificacionid.value;

      let route = "{{route('estu.save_calificacion')}}"


      $.ajax({
         type: "GET",
         url: route,
         data: {
            estudiante_id: estudiente,
            tarea_id: tarea,
            calificacion: parseFloat(calificacionid.value)
         },
         dataType: "JSON",
         success: function(resp) {
            console.log(resp);

            toastr["success"]("CALIFICACIÓN ASIGNADA", "GENIAL")
            toastr.options = {
               "closeButton": true,
               "debug": false,
               "newestOnTop": false,
               "progressBar": true,
               "positionClass": "toast-bottom-center",
               "preventDuplicates": false,
               "onclick": null,
               "showDuration": "300",
               "hideDuration": "1000",
               "timeOut": "5000",
               "extendedTimeOut": "1000",
               "showEasing": "swing",
               "hideEasing": "linear",
               "showMethod": "fadeIn",
               "hideMethod": "fadeOut"
            }
         }
      });

   }
</script>

@endsection