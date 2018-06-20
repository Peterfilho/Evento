<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Deseja realmente excluir o Evento {{$evento['name']}}?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Esta ação não pode ser desfeita.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary"  type="button" href="{{ route('events.show',$evento['id']) }}" data-dismiss="modal">Cancel</button>
                {!! Form::open(array('route' => array('events.destroy', $evento['id']),  'method' => 'delete')) !!}
                <button type="submit" class="btn btn-danger">Deletar</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>