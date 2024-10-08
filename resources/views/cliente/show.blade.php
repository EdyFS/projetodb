<x-app-layout>

    <h5>Excluir Categoria</h5>

    <form action="/cliente/{{$cliente->id}}" method="POST">
        @CSRF
        @method('DELETE')
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Informe a categoria:</label>
                <input type="text" name="nome" class="form-control" value="{{$cliente->nome}}"/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary">
                    Salvar
                </button>
            </div>
        </div>
    </form>

</x-app-layout>