<x-app-layout>

    <h5>Alterar Categoria</h5>

    <form action="/categoria/" method="POST">
        @CSRF
        @method('PUT')
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Informe o motorista:</label>
                <input type="text" name="nome" class="form-control" value="{{$motorista->nome}}"/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="cpf" class="form-label">Informe o CPF:</label>
                <input type="number" name="cpf" class="form-control" value="{{$motorista->cpf}}"/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="telefone" class="form-label">Informe o telefone:</label>
                <input type="text" name="telefone" class="form-control" value="{{$motorista->telefone}}"/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="email" class="form-label">Informe o email:</label>
                <input type="text" name="email" class="form-control" value="{{$motorista->email}}"/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="cidade" class="form-label">Informe a cidade:</label>
                <input type="text" name="cidade" class="form-control" value="{{$motorista->cidade}}"/>
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