@extends('layouts.admin')

@section('content')

<div class="container-fluid">
   <div class="row">
      <div class="col-md-3">
         <div class="card">
            <div class="card-body text-center">

               <img width="150" src="https://ui-avatars.com/api/?name={{ $estu->estudiante->nombre }}" class="img-fluid rounded-circle" alt="{{config('app.name')}}" srcset="">

               <h4 class="card-title">{{$estu->estudiante->nombre}}</h4>
               <p class="card-text">{{$estu->grado->nombre}} <br> Seccion: {{$estu->grado->seccion}}</p>
            </div>
         </div>
      </div>

      <div class="col-md-9">
         <div class="card">
            <div class="card-body">
               <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                     <button class="nav-link btn btn-info active" id="pills-home-tab" data-toggle="pill" data-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">CURSOS</button>
                  </li>
                  <li class="nav-item" role="presentation">
                     <button class="nav-link btn btn-info" id="pills-profile-tab" data-toggle="pill" data-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">ACTUALIZAR</button>
                  </li>
                  <a class="btn btn-primary" target="_blanck" href="{{route('estu.boletin', $estu->id)}}" role="button">BOLETIN</a>
                  <a class="btn btn-primary" href="{{route('encargado.show', $estu->padre_id)}}" role="button">PADRE</a>

               </ul>
               <div class="tab-content" id="pills-tabContent">

                  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                  <div class="list-group">
                     @foreach ($cursos as $cur )
                     <button type="button" class="list-group-item list-group-item-action active">{{$cur->nombre}}</button>
                     @endforeach
                  </div>

                  </div>

                  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">


                     <form action="{{route('estu.update', $estu->estudiante->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group col-md-6">
                           <label for="">NOMBRE</label>
                           <input type="text" class="form-control" value="{{$estu->estudiante->nombre}}" name="nombre" required>
                        </div>
                        <div class="col-md-2">
                           <div class="form-group">
                              <label for="">FECHA DE NACIMIENTO</label>
                              <input type="date" class="form-control" value="{{$estu->estudiante->fecha_nacimiento}}" name="fecha_nacimiento" required>
                           </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-3">
                           <div class="form-group">
                              <label for="">CUI</label>
                              <input type="text" class="form-control" value="{{$estu->estudiante->cui}}" name="cui" required>
                           </div>
                        </div>
                        <div class="col-md-2">
                           <div class="form-group">
                              <label for="">TELEFONO</label>
                              <input type="text" class="form-control" value="{{$estu->estudiante->telefono}}" name="telefono" required>
                           </div>
                        </div>
                        <button type="submit" class="btn btn-primary">ACTUALIZAR</button>
                     </form>

                  </div>

                 
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

@endsection