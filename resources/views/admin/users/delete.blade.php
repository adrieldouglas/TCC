<!-- Modal delete -->
<div class="modal fade" id="delete{{ $user->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Aviso</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @if($user->cover != null)
                <img src="{{ url('storage/'. $user->cover) }}" class="circle-image img-fluid mx-auto d-block">
                <h4 class="text-muted text-center">{{ $user->name }}</h4>
                @else

                <img src="{{ url('assets/background/avatar.png') }}" class="rounded img-fluid mx-auto d-block" width="40">
                <h4 class="text-muted text-center">{{ $user->name }}</h4>
                @endif
                <h4 class="text-center"><i class="bi bi-info-circle"></i> Deseja enviar essa conta para lixeira?</h4>
            </div>
            <div class="modal-footer">
                <form action="{{ route('admin.users.destroy', $user->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('DELETE')

                    <button type="button" title="Não" class="btn btn-secondary" data-dismiss="modal"><i class="bi bi-x-lg"></i> Não</button>
                    <button type="submit" title="Sim" class="btn btn-success"><i class="bi bi-check2-circle"></i> Sim</button>
                </form>
            </div>
        </div>
    </div>
</div>
