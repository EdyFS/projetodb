<x-app-layout>

    <h5>Nova Entrega</h5>

    <form action="/entrega" method="POST">
        @CSRF
        <div class="row">
            <div class="col">
                <label for="nome_cliente" class="form-label">Informe o Cliente:</label>
                <input type="text" name="nome_cliente" class="form-control"/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="cpf" class="form-label">Informe o Motorias:</label>
                <input type="number" name="cpf" class="form-control"/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="telefone" class="form-label">Informe a Carga:</label>
                <input type="text" name="telefone" class="form-control"/>
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