<template>
    <div class="container-fluid pt-4">
        <div class="card card-outline card-info">
            <div class="card-header">
                <h3 class="card-title">Usuários</h3>
                <div class="card-tools">
                    <!-- <div class="btn-group ml-1">
                        <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown"
                            title="Mais Opções">
                            <i class="fas fa-columns"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="far fa-check-square text-primary"></i>
                                    Id
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="far fa-check-square text-primary"></i>
                                    Name
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="far fa-check-square text-primary"></i>
                                    Email
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="far fa-square text-primary"></i>
                                    Senha
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="far fa-square text-primary"></i>
                                    Função
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="far fa-check-square text-primary"></i>
                                    Observação
                                </a>
                            </li>
                        </ul>
                    </div> -->
                    <!-- <div class="btn-group ml-1">
                        <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown"
                            title="Mais Opções">
                            <i class="fas fa-file-export"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-print text-primary"></i>
                                    Imprimir
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-file-csv text-primary"></i>
                                    Exportar para CSV
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-file-excel text-primary"></i>
                                    Exportar para Excel
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-file-pdf text-primary"></i>
                                    Exportar para PDF
                                </a>
                            </li>
                        </ul>
                    </div> -->
                    <button class="btn btn-sm btn-primary ml-1" title="Pesquisar/Filtrar">
                        <i class="fas fa-filter"></i>
                    </button>
                    <a href="#" class="btn btn-sm btn-primary ml-1" title="Adicionar/Cadastrar">
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
                            <th scope="col">Função</th>
                            <th scope="col" width=1>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="user in users">
                            <td>{{ user.id }}</td>
                            <td>{{ user.name }} {{ i }}</td>
                            <td>{{ user.email }}</td>
                            <td>{{ user.funcao }}</td>
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
                                            <a class="dropdown-item" href="#" onclick="preventDefault();"
                                                @click="deleteUser(user.id)">
                                                <i class="fas fa-trash text-danger"></i>
                                                Excluir
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr v-if="users.length === 0">
                            <td colspan="100%" class="text-center">Nenhum registro encontrado</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Example',
    data() {
        return {
            name: 'Fernando',
            users: [
                {
                    id: 1,
                    name: 'Fernando',
                    email: 'fernando@email',
                    funcao: 'Desenvolvedor',
                },
                {
                    id: 2,
                    name: 'Joaquim',
                    email: 'joaquim@email',
                    funcao: 'Analista de sistemas',
                },
                {
                    id: 3,
                    name: 'Maria',
                    email: 'maria@email',
                    funcao: 'Gerente de projetos',
                },
                {
                    id: 4,
                    name: 'Carlos',
                    email: 'carlos@email',
                    funcao: 'Product Owner',
                },
                {
                    id: 5,
                    name: 'Joana',
                    email: 'joana@email',
                    funcao: 'Scrum Master',
                },
            ]
        }
    },
    methods: {
        deleteUser(id) {
            this.users = this.users.filter(user => user.id !== id);
        }
    },
}
</script>
