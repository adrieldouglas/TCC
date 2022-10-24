@extends('admin.layouts.master')

<title>{{ $tit_dashboard }}</title>

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-12" style="margin-top: 14%;">
            <div class="card">
                <div class="card-body">
                    <img src="{{ url('assets/logotipo/logo.png') }}" class="img-fluid rounded mx-auto d-block">
                    <h1 class="text-center text-muted">Painel de Controle</h1>
                    <div class="text-center text-muted">Data de Hoje: {{ date('d/m/Y') }}</div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
