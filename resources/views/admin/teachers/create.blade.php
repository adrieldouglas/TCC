@extends('admin.layouts.master')

<title>{{ $tit_create }}</title>

@section('content')


<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card mt-2">
                <div class="card-body">
                    <h1 class="text-muted"><i class="bi bi-archive"></i> Adicionar Docente</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 mt-2">
            @if(session('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle"></i> {{session('message')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            @if ($errors->all())
            @foreach ($errors->all() as $error)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ $error }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endforeach
            @endif

        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card mt-1">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="name">Nome Completo</label>
                                <input type="text" name="name" placeholder="Nome Completo" class="form-control" />
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="formation">Formação Acadêmica</label>
                                <input type="text" name="formation" placeholder="Nome Completo" class="form-control" />
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" name="email" placeholder="E-mail" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="description">Descreva a formação do docente</label>
                                <textarea class="form-control" name="description" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="facebook">Link do Facebook</label>
                                <input type="text" name="facebook" class="form-control" placeholder="Endereço do facebook" />
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="telephone">Celular</label>
                                <input type="text" name="telephone" class="form-control" placeholder="DDD(00) 0 0000-0000" data-mask="00(00) 0 0000-0000" />
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="photo_teacher">Foto</label>
                                <input type="file" name="photo_teacher" class="form-control-file"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <button type="submit" class="btn btn-success" title="Salvar">Salvar</button>
                            <a href="{{ route('admin.teachers.index') }}" class="btn btn-secondary" title="Cancelar">Cancelar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')

 <script>
     $(function () {
        $("textarea").jqte();
    });
</script>

@endsection





