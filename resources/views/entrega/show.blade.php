<x-app-layout>

    <h5>Editar Entrega</h5>

    <form action="/entrega" method="POST">
        @CSRF
        @method('DELETE')
        <div class="row">
            <div class="col">
                <label for="cliente_id" class="form-label">Cliente:</label>
                <input type="text" name="cliente" class="form-control" value="{{$entrega->cliente->nome}}" disabled/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="motorista_id" class="form-label">Motorista:</label>
                <input type="text" name="motorista" class="form-control" value="{{$entrega->motorista->nome}}" disabled/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="carga_id" class="form-label">Carga:</label>
                <input type="text" name="carga" class="form-control" value="{{$entrega->carga->nome}}" disabled/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="data_entrega" class="form-label">Data de Entrega:</label>
                <input type="date" name="data_entrega" class="form-control" value="{{$entrega->data_entrega}}" disabled/>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <button type="submit" class="btn btn-primary">
                    Excluir
                </button>
            </div>
        </div>
    </form>

</x-app-layout>