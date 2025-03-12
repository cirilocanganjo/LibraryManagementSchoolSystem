

<!-- Modal -->
<div class="modal fade" id="delete-{{$id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Aviso </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Tens a certeza que desejas apagar?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
        <form id="form_modal" action="{{ $route }}" method="POST">
            @csrf
            @method('DELETE')
            {{$elements}}
        <button type="submit" class="btn btn-primary">Sim</button></form>
      </div>
    </div>
  </div>
</div>


