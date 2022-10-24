@extends('admin.layouts.master')

<title>{{ $tit_user }}</title>

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card mt-2">
                <div class="card-body">
                    <h1 class="text-muted"><i class="bi bi-people"></i> Conta de Acesso</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card mt-1">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <a href="{{ route('admin.users.create') }}" class="btn btn-success btn-sm float-right mt-3"><i class="bi bi-plus-lg"></i> Criar Conta</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="input-group">
                                <input type="search" name="search" class="form-control" placeholder="Pesquisar nome">
                                <button type="submit" class="btn btn-primary"><i class="bi bi-search"></i></button>
                            </div>
                        </div>
                    </div>
                    <table class="table table-hover mt-2">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">E-mail</th>
                                <th scope="col">Nivel da Conta</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <th scope="row">{{ $user->id }}</th>
                                <td>
                                    @if($user->cover != null)
                                    <a href="" class="text-muted"><img src="{{ url('storage/'. $user->cover) }}" class="circle-image"> {{ $user->name }}</a>

                                    @else

                                    <a href="" class="text-muted"><img src="{{ url('assets/background/avatar.png') }}" class="rounded" width="40"> {{ $user->name }}</a>
                                    @endif
                                </td>
                                <td><a href="" class="text-muted">{{ $user->email }}</a></td>
                                <td class="text-uppercase">{{ $user->level }}</td>
                                <td>
                                    <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-sm btn-primary" title="Editar {{ $user->name }}"><i class="bi bi-pencil-square"></i></a>

                                    <a href="" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete{{ $user->id }}"><i class="bi bi-trash3"></i></a>

                                    @include('admin.users.delete')
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
