@extends('admin.layouts.master')

<title>{{ $tit_create }}</title>

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card mt-2">
                <div class="card-body">
                    <h1 class="text-muted"><i class="bi bi-people"></i> Criar Conta</h1>
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
            <form action="{{ route('admin.users.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="card mt-1">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="cover">Foto</label>
                                    <input type="file" name="cover" class="form-control-file {{ $errors->has('cover') ? 'is-invalid' : '' }}">

                                    @if ($errors->has('cover'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('cover') }}
                                    </div>
                                    @endif

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="name">Nome Completo<i class="bi bi-asterisk small text-danger"></i></label>
                                    <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder="Nome Completo" value="{{ old('name') }}">

                                    @if ($errors->has('name'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('name') }}
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="email">E-mail<i class="bi bi-asterisk small text-danger"></i></label>
                                    <input type="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" placeholder="E-mail" value="{{ old('email') }}">

                                    @if ($errors->has('email'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('email') }}
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="password">Senha<i class="bi bi-asterisk small text-danger"></i></label>
                                    <input type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="Senha">

                                    @if ($errors->has('password'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('password') }}
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="level">Status<i class="bi bi-asterisk small text-danger"></i></label>
                                    <select class="form-control {{ $errors->has('level') ? 'is-invalid' : '' }}" name="level">
                                        <option disabled selected>Selecione o Nível</option>
                                        <option value="admin" {{ (old('level') == 'admin' ? 'selected' : '') }}>Administrador</option>
                                        <option value="docente" {{ (old('level') == 'docente' ? 'selected' : '') }}>Docente</option>
                                    </select>

                                    @if ($errors->has('level'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('level') }}
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <a href="" class="btn btn-success" title="Salvar" data-toggle="modal" data-target="#to_save">Salvar</a>
                                <a href="{{ route('admin.users.index') }}" class="btn btn-secondary" title="Cancelar">Cancelar</a>

                                <!-- Modal to save -->
                                <div class="modal fade" id="to_save" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Aviso</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <h4 class="text-center"><i class="bi bi-info-circle"></i> Deseja criar essa conta?</h4>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" title="Não" class="btn btn-secondary" data-dismiss="modal"><i class="bi bi-x-lg"></i> Não</button>
                                                <button type="submit" title="Sim" class="btn btn-success"><i class="bi bi-check2-circle"></i> Sim</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
