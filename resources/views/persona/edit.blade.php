@extends('layout.plantilla')

@section('titulo') AppDev-Persona-Actualizar
@endsection

@section('contenidoPrincipal')
<div class="row">
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
 <h4>Editar Persona</h4>
 @if (count($errors)>0)
 <div class="alert alert-danger">
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{$error}}</li>
 @endforeach
 </ul>
 </div>
 @endif
 </div>
</div>
{{Form::open(array('action'=>array('App\Http\Controllers\PersonaController@update', $persona->id),'method'=>'patch'))}}
<div class="row g-3">
 <div class="col-md-4">
 <label for="documento_identidad" class="form-label">Documento
Identidad</label>
 <input type="number" name="documento_identidad" id="documento_identidad"
class="form-control"
 value="{{$persona->documento_identidad}}">
 </div>
 <div class="col-md-4">
 <label for="nombre" class="form-label">Nombre</label>
 <input type="text" name="nombre" id="nombre" class="form-control"
value="{{$persona->nombre}}">
 </div>
 <div class="col-4">
 <label for="Apellido" class="form-label">Apellido</label>
 <input type="text" name="apellido" id="apellido" class="form-control"
value="{{$persona->apellido}}">
 </div>
 <div class="col-6">
 <label for="email" class="form-label">Email</label>
 <input type="text" name="email" id="email" class="form-control"
value="{{$persona->email}}">
 </div>
 <div class="col-md-6">
 <label for="telefono" class="form-label">Telefono</label>
 <input type="text" name="telefono" id="telefono" class="form-control"
value="{{$persona->telefono}}">
 </div>

 <div class="col-12">
 <button class="btn btn-primary" type="submit"><span class="glyphicon glyphiconrefresh"></span> Actualizar
 </button>
<a class="btn btn-info" type="reset" href="{{url('persona')}}">
 <span class="glyphicon glyphicon-home"></span> Regresar </a>
 </div>
 </div>
{!!Form::close()!!}
@endsection