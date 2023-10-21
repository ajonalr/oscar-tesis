<div class="row align-items-center">
   <div class="col-md-4 col-lg-3">
      <div class="nav flex-column nav-pills">
         <a href="#v-pills-home" data-toggle="pill" class="nav-link active show">ENCARGADO PRINCIPAL</a>
        
      </div>
   </div>
   <div class="col-md-8 col-lg-9">
      <div class="tab-content">

         <div id="v-pills-home" class="tab-pane fade active show">
            <h4>ENCARGADO PRIMARIO</h4>
            <div class="form-group">
               <label for="">NOMBRE</label>
               <input type="text" class="form-control" value="{{$data->nombre1}}" name="nombre1" placeholder="NOMBRE ENCARGADO">
            </div>

            <div class="row">
               <div class="col-md-4">
                  <div class="form-group">
                     <label for="">DPI</label>
                     <input type="text" class="form-control" value="{{$data->dpi1}}" name="dpi1" placeholder="NUMERO DE DPI" required>
                  </div>
               </div>
               <div class="col-md-8">
                  <div class="form-group">
                     <label for="">DIRECCION</label>
                     <input type="text" class="form-control" value="{{$data->direccion1}}" name="direccion1" placeholder="DIRECCION DOMICILIAR" required>
                  </div>
               </div>
            </div>

            <div class="row">
               <div class="col-md-4">
                  <div class="form-group">
                     <label for="">ESTADO CIVIL</label>
                     <select class="form-control" value="{{$data->civil1}}" name="civil1" id="">
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
                     <input type="text" class="form-control" value="{{$data->nacionalidad1}}" name="nacionalidad1" placeholder="NACIONALIDAD" required value="GUATEMALTEC">
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                     <label for="">EDAD</label>
                     <input type="number" class="form-control" value="{{$data->edad1}}" name="edad1" placeholder="EDAD DE ENCARGADO" required>
                  </div>
               </div>
            </div>

            <div class="row">
               <div class="col-md-6">
                  <div class="form-group">
                     <label for="">TELEFONO PRIMARIO</label>
                     <input type="text" class="form-control" value="{{$data->telefono1}}" name="telefono1" placeholder="NUMERO DE TELEFONO PRIMARIO" required>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label for="">TELEFONO SECUNDARIO</label>
                     <input type="text" class="form-control" value="{{$data->telefono2}}" name="telefono2" placeholder="NUMERO DE TELEFONO SECUNDARIO">
                  </div>
               </div>
            </div>

            <div class="row">
               <div class="col-md-4">
                  <div class="form-group">
                     <label for="">EMPRESA DONDE LABORA</label>
                     <input type="text" class="form-control" value="{{$data->empresa1}}" name="empresa1" placeholder="NOMBRE DE EMPRESA DONDE LABORA">
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                     <label for="lugart1">DIRECCION DE EMPRESA</label>
                     <input type="text" class="form-control" value="{{$data->lugart1}}" name="lugart1" placeholder="DIRECCION DE EMPRESA DONDE LABORA">
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                     <label for="">TELEFONO DE EMPRESA</label>
                     <input type="text" class="form-control" value="{{$data->tel_empresa1}}" name="tel_empresa1" placeholder="TELEFONO DE EMPRESA DONDE LABORA">
                  </div>
               </div>
            </div>

            <div class="row">
               <div class="col-md-6">
                  <div class="form-group">
                     <label for="">PROFECION</label>
                     <input type="text" class="form-control" value="{{$data->profecion1}}" name="profecion1" placeholder="PROFECION">
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label for="">PARENTESCO</label>
                     <input type="text" class="form-control" value="{{$data->parentesco1}}" name="parentesco1" placeholder="PARENTESCO">
                  </div>
               </div>
            </div>
         </div>

      </div>
   </div>
</div>