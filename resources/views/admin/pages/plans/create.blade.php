@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
    <h1>Cadastrar Novo Plano</h1>
@stop

@section('content')
    <div class="w3-row">
        <div class="col-sm-12 col-md-8 col-lg-8">
            <div class="card shadow">
                <div class="card-body">
                    <form action="{{ route('plans.store') }}" method="POST">
                        @include('admin.pages.plans._partials.form')

                        <div class="row justify-content-between">

                                <a href="{{ route('plans.index') }}" class="btn btn-secondary">Cancelar</a>
                                <button type="submit" class="btn w3-indigo w3-hover-blue">Salvar</button>

                        </div>


                    </form>
                </div>
                {{-- <div class="card-footer">

                </div> --}}
            </div>
        </div>
    </div>

@stop

@section('css')

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
