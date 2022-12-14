@extends('admin.layouts.master')

<title>{{ $user->name }}</title>

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card mt-2">
                <div class="card-body">
                    <h1 class="text-muted"><i class="bi bi-pencil-square"></i> Editar Conta</h1>
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
            <form action="{{ route('admin.users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="card mt-1">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="cover">Foto</label>
                                    <input type="file" name="cover" class="form-control-file {{ $errors->has('cover') ? 'is-invalid' : '' }}">

                                    @if($user->cover != null)
                                    <img src="{{ url('storage/'. $user->cover) }}" width="60" class="rounded img-fluid mt-1">

                                    @else

                                    <img src="{{ url('assets/background/avatar.png') }}" width="60" class="rounded img-fluid mt-1">
                                    @endif

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
                                    <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder="Nome Completo" value="{{ old('name') ?? $user->name }}">

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
                                    <input type="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" placeholder="E-mail" value="{{ old('email') ?? $user->email }}">

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
                                        <option disabled selected>Selecione o N??vel</option>
                                        <option value="administrador" {{ (old('level')=='administrador' ? 'selected' : ($user->level == 'administrador' ? 'selected' : '') ) }}>Administrador</option>
                                        <option value="docente" {{ (old('level')=='docente' ? 'selected' : ($user->level == 'docente' ? 'selected' : '') ) }}>Docente</option>
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
                                <button type="submit" class="btn btn-success" title="Editar {{ $user->name }}" >Editar</button>
                                <a href="{{ route('admin.users.index') }}" class="btn btn-secondary" title="Cancelar">Cancelar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
