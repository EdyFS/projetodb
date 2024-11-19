<x-app-layout>

    <h5>Excluir Produto</h5>

    <form action="/produto/{{$produto->id}}" method="POST">
        @CSRF
        @method('DELETE')
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Nome do Produto:</label>
                <input type="text" name="nome" class="form-control" value="{{$produto->nome}}" disabled/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="descricao" class="form-label">Descrição:</label>
                <input type="text" name="descricao" class="form-control" value="{{$produto->descricao}}" disabled/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="valor" class="form-label">Valor:</label>
                <input type="text" name="valor" class="form-control" value="{{$produto->valor}}" disabled/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="cliente" class="form-label">Cliente:</label>
                <input type="text" name="cliente" class="form-control" value="{{$produto->cliente->nome}}" disabled/>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <button type="submit" class="btn btn-danger">
                    Excluir
                </button>
            </div>
        </div>
    </form>

</x-app-layout>