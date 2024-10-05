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
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($motorista as $c)
            <tr>
                <td>{{ $c->nome }}</td>
                <td>{{ $c->cpf }}</td>
                <td>{{ $c->telefone }}</td>
                <td>{{ $c->email }}</td>
                <td>{{ $c->cidade }}</td>
                <td>
                    <a href="/categoria/1/{{ $c->id}}" class="btn btn-warning">Alterar</a>
                    <a href="/categoria/1/{{ $c->id}}" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>