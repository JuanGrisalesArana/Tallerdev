<div class="modal fade" id="modal-delete-{{$per->id}}" tabindex="-1" arialabelledby="ModalLabel" aria-hidden="true">
{{Form::Open(array('action'=>array('App\Http\Controllers\PersonaController@destroy',$per->id),'method'=>'delete'))}}
<div class="modal-dialog">
 <div class="modal-content">
 <div class="modal-header">
 <h5 class="modal-title" id="exampleModalLabel">Eliminar Persona</h5>
 <button type="button" class="btn-close" data-bs-dismiss="modal" arialabel="Close"></button>
 </div>
 <div class="modal-body">
 <p>Desea Eliminar la persona seleccionada</p>
 </div>
 <div class="modal-footer">
 <button type="submit" class="btn btn-primary">Confirmar</button>
 </div>
 </div>
 </div>
</div>
{{Form::Close()}}
