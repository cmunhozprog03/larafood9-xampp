@extends('adminlte::page')

@section('title', 'Planos')

{{-- @section('content_header')
    <h1>Planos <a href="{{ route('plans.create') }}" class="btn btn-dark">
        <i class="fas fa-plus-circle fa-lg"></i></a></h1>
@stop --}}

@section('content')
    <div class="card">

        <div class="card-header">
          <div class="row justify-content-between">
            <div class="col-4">
                <h3>Listagem de Planos</h3>
            </div>
            <div class="col-2">
               
                <a href="{{ route('plans.create') }}" class="btn btn-dark mt-2">
                    <i class="fas fa-plus-circle fa-lg"></i></a>
            </div>
            
            <div class="COL-6">
                <form action="{{ route('plans.search') }}" class="form form-inline mt-2" method="POST">
                    @csrf
                    <input type="text" class="form-control " name="filter" placeholder="Nome..."
                        value="{{ $filters['filter'] ?? '' }}">
                    <button type="submit" class="btn btn-dark"><i class="fas fa-search fa-lg"></i></button>
                </form>
            </div>
        </div>
    
        <div class="card-body">
            <div class="responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr class="bg-indigo">
                            <th>Nome</th>
                            <th>Valor</th>
                            <th width="100">Ações</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($plans as $plan)
                        <tr>
                            <td>{{ $plan->name }}</td>
                            <td>R$ {{ number_format($plan->price, 2, ',', '.') }}</td>
                            <td>
                                <a href="{{ route('plans.show', $plan->url) }}"
                                    class="btn btn-info btn-flat btn-sm"><i class="fas fa-eye fa-lg"></i></a>
                            </td>
                        @empty
                            <div class="alert alert-secondary">
                                Nenhum registro encontrado.
                            </div>
                        @endforelse
                        </tr>
                    </tbody>

                </table>

            </div>
        </div>
        <div class="card-footer">
            @if (isset($filters))
                {!! $plans->appends($filters)->links() !!}
            @else
                {!! $plans->links() !!}
            @endif

        </div>
    </div>
@stop

@section('css')

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
