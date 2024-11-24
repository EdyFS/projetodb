<x-app-layout>

    <h5>Novo Motorista</h5>

    <form action="/motorista" method="POST">
        @CSRF
        <div class="row">
            <div class="col">
                <label for="nome_motorista" class="form-label">Informe o nome:</label>
                <input type="text" name="nome_motorista" class="form-control"/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="cpf" class="form-label">Informe o CPF:</label>
                <input type="number" name="cpf" class="form-control"/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="telefone" class="form-label">Informe o telefone:</label>
                <input type="text" name="telefone" class="form-control"/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="email" class="form-label">Informe o email:</label>
                <input type="text" name="email" class="form-control"/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="cidade" class="form-label">Informe a cidade:</label>
                <input type="text" name="cidade" class="form-control"/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="cnh" class="form-label">Informe o número da CNH:</label>
                <input type="text" name="cnh" class="form-control"/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="categoria" class="form-label">Informe a categoria:</label>
                <input type="text" name="categoria" class="form-control"/>
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