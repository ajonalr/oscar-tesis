@extends('layouts.app')



@section('content')
<div class="container-fluid">

   <p class="text-center h3">INSCRIPCION</p>

   <form action="{{route('inscripcion.inscribir')}}" method="post">
      @csrf

      <div class="row justify-content-center">

         <div class="text-center h3">DATOS DE ESTUDIANTE</div>
         <div class="w-100"></div>

         <div class="form-group col-md-6">
            <label for="">NOMBRE</label>
            <input type="text" class="form-control" name="nombre" required>
         </div>
         <div class="col-md-2">
            <div class="form-group">
               <label for="">FECHA DE NACIMIENTO</label>
               <input type="date" class="form-control" name="fecha_nacimiento" required>
            </div>
         </div>
         <div class="w-100"></div>
         <div class="col-md-3">
            <div class="form-group">
               <label for="">CUI</label>
               <input type="text" class="form-control" name="cui" required>
            </div>
         </div>
         <div class="col-md-2">
            <div class="form-group">
               <label for="">TELEFONO</label>
               <input type="text" class="form-control" name="telefono" required>
            </div>
         </div>
      </div>

      <div class="row justify-content-center">
         <div class="col-md-9">
            <div class="w-100">
               <p class="text-center mt-3 h3">DATOS DE ENCARGADO</p>
            </div>

            <div class="row">
               <div class="form-group col-md-12">
                  <label for="">NOMBRE</label>
                  <input type="text" class="form-control" name="nombre1" value="">
               </div>
            </div>

            <div class="row">
               <div class="col-md-4">
                  <div class="form-group">
                     <label for="">DPI</label>
                     <input type="text" class="form-control" name="dpi1" required value="">
                  </div>
               </div>
               <div class="col-md-8">
                  <div class="form-group">
                     <label for="">DIRECCION</label>
                     <input type="text" class="form-control" name="direccion1" required value="">
                  </div>
               </div>
            </div>

            <div class="row">
               <div class="col-md-4">
                  <div class="form-group">
                     <label for="">ESTADO CIVIL</label>
                     <select class="form-control" name="civil1" id="">
                        <option value="Soltero(a)">Soltero(a)</option>
                        <option value="Casado(a)">Casado(a)</option>
                        <option value="Union De Hecho">Union De Hecho</option>
                        <option value="Viudo(a)">Viudo(a)</option>
                        <option value="Divorciado (a)">Divorciado (a)</option>
                     </select>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                     <label for="">NACIONALIDAD</label>
                     <input type="text" class="form-control" name="nacionalidad1" required value="">
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                     <label for="">EDAD</label>
                     <input type="number" class="form-control" name="edad1" required value="">
                  </div>
               </div>
            </div>

            <div class="row">
               <div class="col-md-6">
                  <div class="form-group">
                     <label for="">TELEFONO PRIMARIO</label>
                     <input type="text" class="form-control" name="telefono1" required value="">
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label for="">TELEFONO SECUNDARIO</label>
                     <input type="text" class="form-control" name="telefono2">
                  </div>
               </div>
            </div>

            <div class="row">
               <div class="col-md-4">
                  <div class="form-group">
                     <label for="">EMPRESA DONDE LABORA</label>
                     <input type="text" class="form-control" name="empresa1">
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                     <label for="lugart1">DIRECCION DE EMPRESA</label>
                     <input type="text" class="form-control" name="lugart1">
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                     <label for="">TELEFONO DE EMPRESA</label>
                     <input type="text" class="form-control" name="tel_empresa1">
                  </div>
               </div>
            </div>

            <div class="row">
               <div class="col-md-4">
                  <div class="form-group">
                     <label for="">PROFECION</label>
                     <input type="text" class="form-control" name="profecion1">
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                     <label for="">PARENTESCO</label>
                     <input type="text" class="form-control" name="parentesco1">
                  </div>
               </div>
               <div class="col-md-4">
                  <!-- Button trigger modal -->
               
               </div>

            </div>
            <!-- Modal -->
            <div class="modal fade" id="encargado" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
               <div class="modal-dialog modal-lg" role="document" style="color: black;">
                  <div class="modal-content">
                     <div class="modal-header">
                        <h5 class="modal-title">ENCARGADO SECUNDARIO</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                        </button>
                     </div>
                     <div class="modal-body">
                        <div class="form-group">
                           <label for="">NOMBRE</label>
                           <input type="text" class="form-control" name="nombre2">
                        </div>
                        <div class="row">
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="">DPI</label>
                                 <input type="text" class="form-control" name="dpi2">
                              </div>
                           </div>
                           <div class="col-md-8">
                              <div class="form-group">
                                 <label for="">DIRECCION</label>
                                 <input type="text" class="form-control" name="direccion2">
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="">ESTADO CIVIL</label>
                                 <select class="form-control" name="civil2" id="">
                                    <option value="Soltero(a)">Soltero(a)</option>
                                    <option value="Casado(a)">Casado(a)</option>
                                    <option value="Union De Hecho">Union De Hecho</option>
                                    <option value="Viudo(a)">Viudo(a)</option>
                                    <option value="Divorciado (a)">Divorciado (a)</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="">NACIONALIDAD</label>
                                 <input type="text" class="form-control" name="nacionalidad2">
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="">EDAD</label>
                                 <input type="number" class="form-control" name="edad2">
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="">TELEFONO PRIMARIO</label>
                                 <input type="text" class="form-control" name="telefono3">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="">TELEFONO SECUNDARIO</label>
                                 <input type="text" class="form-control" name="telefono4">
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="">EMPRESA DONDE LABORA</label>
                                 <input type="text" class="form-control" name="empresa2">
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="lugart2">DIRECCION DE EMPRESA</label>
                                 <input type="text" class="form-control" name="lugar2">
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="">TELEFONO DE EMPRESA</label>
                                 <input type="text" class="form-control" name="tel_empresa2">
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="">PROFECION</label>
                                 <input type="text" class="form-control" name="profecion2">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="">PARENTESCO</label>
                                 <input type="text" class="form-control" name="parentesco2">
                              </div>
                           </div>
                        </div>


                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>

                     </div>
                  </div>
               </div>
            </div>


         </div>
      </div>

      <div class="row mt-4 justify-content-center">
         <div class="col-md-9">
            <div class="row">
               <div class="col-md-6">
                  <div class="form-group">
                     <label for="">SELECCIONE GRADO A INSCRIBIR</label>
                     <select id="grado_id" name="grado_id" onchange="cambiar()" class="form-control" required>
                        <option value="">SELECCIONE UN GRADO</option>
                        @foreach ($grados as $grado)
                        <option value="{{$grado->id}}">{{$grado->nombre}} - Seccion: {{$grado->seccion}} </option>
                        @endforeach
                     </select>
                  </div>
               </div>
            </div>

            <div class="row d-none">
               <div class="col-md-6">
                  <div class="form-group">
                     <label for="">TIPO DE INSCRIPCION</label>
                     <select class="form-control" name="estado" required>
                        <option value="NUEVO INGRESO">NUEVO INGRESO</option>
                        <option value="REINSCRIPCION">REINSCRIPCION</option>
                     </select>
                  </div>
               </div>
            </div>
         </div>
      </div>


      <div class="row justify-content-center">
         <div class="col-md-2">

            <div class="step-footer">
               <button type="submit" class="btn btn-info"> <i class="fa fa-save "></i> GUARDAR </button>
            </div>

         </div>
      </div>

   </form>


</div>
@endsection




@section('scripts')

<script src="{{asset('plugins/common/common.min.js')}}"></script>
<script src="{{asset('js/custom.min.js')}}"></script>
<script src="{{asset('js/settings.js')}}"></script>
<script src="{{asset('js/gleek.js')}}"></script>
<script src="{{asset('js/styleSwitcher.js')}}"></script>

<script>
   function cambiar() {
      grado = document.getElementById('grado_id').value.split('___');
      let colegiatura = document.getElementById('colegiatura');
      let inscripcion = document.getElementById('inscripcion');
      colegiatura.value = grado[1]
      inscripcion.value = grado[2]
   }
</script>
@endsection