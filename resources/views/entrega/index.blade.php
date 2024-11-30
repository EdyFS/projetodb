<x-app-layout>

    <h5 class="mt-3">Gerenciar Entregas</h5>

    <a class="btn btn-success" href="/entrega/create">
        Inserir nova entrega
    </a>

    <table class="table table-hover mt-3">
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Motorista</th>
                <th>Carga</th>
                <th>Data</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($entrega as $entrega)
                <tr>
                    <td>{{$entrega->cliente-nome}}</td>
                    <td>{{$entrega->motorista-nome}}</td>
                    <td>{{$entrega->carga-nome}}</td>
                    <td>{{$entrega->data_entrega}}</td>
                    <td>
                        <a href='/produto/{{$produto->id}}/edit' class="btn btn-warning">Alterar</a>
                        <a href='/produto/{{$produto->id}}' class='btn btn-danger'>Excluir</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</x-app-layout>