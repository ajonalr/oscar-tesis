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
               <h4 class="card-title text-uppercase"> DATOS DE ENCARGADO</h4>
               <ul class="nav nav-pills mb-3 justify-content-end">
                  <li class="nav-item"><a href="#navpills2-1" class="nav-link active show" data-toggle="tab" aria-expanded="false">DATOS</a>
                  </li>
                  <li class="nav-item"><a href="#navpills2-2" class="nav-link" data-toggle="tab" aria-expanded="false">ACTUALIZAR</a>
                  </li>
               </ul>
               <div class="tab-content br-n pn">

                  <div id="navpills2-1" class="tab-pane active show">
                     <div class="row align-items-center">
                        <div class="col-sm-6 col-md-8 col-xl-10">

                           <div class="row">
                              <div class="col-md-6">
                                 <h3>ENCARGADO PRINCIPAL</h3>
                                 <p class="card-text">NOMBRE: <b>{{$data->nombre1}}</b> </p>
                                 <p class="card-text">DPI: <b>{{$data->dpi1}}</b> </p>
                                 <p class="card-text">DIRECCION: <b>{{$data->direccion1}}</b> </p>
                                 <p class="card-text">ESTADO CIVIL: <b>{{$data->civil1}}</b> </p>
                                 <p class="card-text">NACIONALIDAD: <b>{{$data->nacionalidad1}}</b> </p>
                                 <p class="card-text">EDAD: <b>{{$data->edad1}} AÑOS</b> </p>
                                 <p class="card-text">TELEFONO PRIMARIO: <b>{{$data->telefono1}}</b> </p>
                                 <p class="card-text">TELEFONO SECUNDARIO: <b>{{$data->telefono2}}</b> </p>
                                 <p class="card-text">EMPRESA DONDE LABORA: <b>{{$data->empresa1}}</b> </p>
                                 <p class="card-text">DIRECCION DE EMPRESA: <b>{{$data->lugart1}}</b> </p>
                                 <p class="card-text">TELEFONO DE EMPRESA: <b>{{$data->tel_empresa1}}</b> </p>
                                 <p class="card-text">PROFECION: <b>{{$data->profecion1}}</b> </p>
                                 <p class="card-text">PARENTESCO CON ESTUDIANTE: <b>{{$data->parentesco1}}</b> </p>
                              </div>
                           </div>

                           <hr>



                           <p class="card-text">ULTIMA FECHA DE ACTULIZACION: <b>{{$data->updated_at}}</b> </p>
                        </div>
                     </div>
                  </div>

                  <div id="navpills2-2" class="tab-pane ">
                     <div class="row align-items-center ">
                        <div class="col">
                           <form action="{{route('encargado.update', ['id' => $data->id])}}" method="post">
                              @csrf
                              @method('put')
                              @include('admin.encargados.forms.formupdate')

                              <button type="submit" class="btn btn-warning"><i class="fa fa-refresh" aria-hidden="true"></i> ACTUALIZAR</button>
                           </form>
                        </div>
                     </div>
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
         select: '#select',
         placeholder: 'Select Permissions',
         deselectLabel: '<span>&times;</span>',
         hideSelectedOption: true,
      })
   }, 300);
</script>

@endsection