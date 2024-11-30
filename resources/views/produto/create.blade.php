<x-app-layout>

    <h5>Novo Produto</h5>

    <form action="/produto" method="POST">
        @CSRF
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Nome do Produto:</label>
                <input type="text" name="nome" class="form-control"/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="descricao" class="form-label">Descrição:</label>
                <input type="text" name="descricao" class="form-control"/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="valor" class="form-label">Valor:</label>
                <input type="text" name="valor" class="form-control"/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="cliente_id" class="form-label">Cliente:</label>
                <select name="cliente_id" class="form-select">
                    @foreach ($cliente as $cl)
                        <option value="{{$cl->id}}">{{$cl->nome}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <button type="submit" class="btn btn-primary">
                    Salvar
                </button>
            </div>
        </div>
    </form>

</x-app-layout>