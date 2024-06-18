@extends('adminlte::page')
@section('content')
    <div class="container-fluid pt-4">
        <div class="card card-outline card-info">
            <div class="card-header">
                <h3 class="card-title">Usuários</h3>
                <div class="card-tools">
                    <button class="btn btn-sm btn-primary" title="Pesquisar/Filtrar">
                        <i class="fas fa-filter"></i>
                    </button>
                    <a href="#" class="btn btn-sm btn-primary" title="Adicionar/Cadastrar">
                        <i class="fas fa-plus"></i>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-sm table-hover table-striped table-bordered align-middle">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Observação</th>
                            <th scope="col" width=1>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 1; $i <= 15; $i++)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>Fernando</td>
                                <td>fernando@email.com</td>
                                <td>Observação qualquer</td>
                                <td style="white-space: nowrap;">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-primary dropdown-toggle"
                                            data-toggle="dropdown" title="Mais Opções">
                                            <i class="fas fa-bars"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fas fa-eye text-info"></i>
                                                    Visualizar
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fas fa-edit text-primary"></i>
                                                    Editar
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fas fa-trash text-danger"></i>
                                                    Excluir
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
