<x-app-layout>

    <h5 class="mt-3">Gerenciar Cargas</h5>

    <a class="btn btn-success" href="/carga/create"> 
        Inserir Carga
    </a>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Peso</th>
                <th>Tamanho</th>
                <th>Fragilidade</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($carga as $c)
            <tr>
                <td>{{ $c->nomeCarga }}</td>
                <td>{{ $c->peso }}</td>
                <td>{{ $c->tamanho }}</td>
                <td>{{ $c->fragilidade }}</td>
                <td>
                    <a href="/categoria/1/{{ $c->id}}" class="btn btn-warning">Alterar</a>
                    <a href="/categoria/1/{{ $c->id}}" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>