@extends('admin.layouts.master')

<title>{{ $tit_teacher }}</title>

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card mt-2">
                <div class="card-body">
                    <h1 class="text-muted"><i class="bi bi-archive"></i> Docentes</h1>
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
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card mt-1">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <a href="{{ route('admin.teachers.create') }}" class="btn btn-success btn-sm float-right mt-3"><i class="bi bi-plus-lg"></i> Adicionar</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="input-group">
                                    <input type="search" name="search_user" class="form-control" placeholder="Pesquisar docente">
                                    <button type="submit" class="btn btn-primary"><i class="bi bi-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <table class="table table-hover mt-2">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Docente</th>
                                <th scope="col">Forma????o</th>
                                <th scope="col">Descri????o</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td><a href="" class="text-danger">Adriel Douglas Miranda das Neves</a></td>
                                <td>Ci??ncia da Computa????o</td>
                                <td>Possui gradua????o em Matem??tica pela...</td>
                                <td>
                                    <a href="" class="btn btn-sm btn-primary"><i class="bi bi-facebook"></i></a>

                                    <a href="" class="btn btn-sm btn-success"><i class="bi bi-whatsapp"></i></a>

                                    <a href="" class="btn btn-sm btn-secondary"><i class="bi bi-envelope"></i></a>

                                    <a href="" class="btn btn-sm btn-primary" title="Editar"><i class="bi bi-pencil-square"></i></a>

                                    <a href="" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete"><i class="bi bi-trash3"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
