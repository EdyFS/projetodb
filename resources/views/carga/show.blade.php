<x-app-layout>

    <h5>Excluir Carga</h5>

    <form action="/carga/{{$carga->id}}" method="POST">
        @CSRF
        @method('DELETE')
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Informe a carga:</label>
                <input type="text" name="nome" class="form-control" value="{{$carga->nome}}" disabled/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="peso" class="form-label">Informe o peso:</label>
                <input type="text" name="peso" class="form-control" value="{{$carga->peso}}" disabled/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="tamanho" class="form-label">Informe o tamanho:</label>
                <input type="text" name="tamanho" class="form-control" value="{{$carga->tamanho}}" disabled/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="fragilidade" class="form-label">Informe a fragilidade:</label>
                <input type="text" name="fragilidade" class="form-control" value="{{$carga->fragoilidade}" disabled/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="cliente" class="form-label">Cliente:</label>
                <input type="text" name="cliente" class="form-control" value="{{$carga->cliente->nome}}" disabled/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="motorista" class="form-label">Motorista:</label>
                <input type="text" name="motorista" class="form-control" value="{{$carga->motorista->nome}}" disabled/>
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