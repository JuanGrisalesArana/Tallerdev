@extends('layout.plantilla')

@section('titulo') AppDev-Persona-Actualizar
@endsection

@section('contenidoPrincipal')
<div class="row">
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
 <h4>Editar Asignatura</h4>
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
{{Form::open(array('action'=>array('App\Http\Controllers\AsignaturaController@update', $asignatura->id),'method'=>'patch'))}}
<div class="row g-3">
 <div class="col-md-4">
 <label for="codigo" class="form-label">Codigo</label>
 <input type="number" name="codigo" id="codigo"
class="form-control"
 value="{{$asignatura->codigo}}">
 </div>
 <div class="col-md-4">
 <label for="nombre" class="form-label">Nombre</label>
 <input type="text" name="nombre" id="nombre" class="form-control"
value="{{$asignatura->nombre}}">
 </div>
 <div class="col-4">
 <label for="creditos" class="form-label">Creditos</label>
 <input type="number" name="creditos" id="creditos" class="form-control"
value="{{$asignatura->creditos}}">
 </div> 

 <div class="col-12">
 <button class="btn btn-primary" type="submit"><span class="glyphicon glyphiconrefresh"></span> Actualizar
 </button>
<a class="btn btn-info" type="reset" href="{{url('asignatura')}}">
 <span class="glyphicon glyphicon-home"></span> Regresar </a>
 </div>
 </div>
{!!Form::close()!!}
@endsection