<x-app-layout>

    <h5 class="mt-3">Gerenciar Motoristas</h5>

    <a class="btn btn-success" href="/motorista/create"> 
        Inserir Motorista
    </a>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Cidade</th>
                <th>CNH</th>
                <th>Categoria</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($motorista as $c)
            <tr>
                <td>{{ $c->nome_motorista }}</td>
                <td>{{ $c->cpf }}</td>
                <td>{{ $c->telefone }}</td>
                <td>{{ $c->email }}</td>
                <td>{{ $c->cidade }}</td>
                <td>{{ $c->cnh }}</td>
                <td>{{ $c->categoria }}</td>
                <td>
                    <a href="/motorista/{{ $c->id}}/edit" class="btn btn-warning">Alterar</a>
                    <a href="/motorista/{{ $c->id}}" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>