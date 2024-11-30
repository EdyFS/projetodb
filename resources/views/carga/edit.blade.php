<x-app-layout>

    <h5>Alterar Categoria</h5>

    <form action="/carga/{{$carga->id}}" method="POST">
        @CSRF
        @method('PUT')
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Informe a carga:</label>
                <input type="text" name="nome" class="form-control" value="{{$carga->nome}}"/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="peso" class="form-label">Informe o peso:</label>
                <input type="text" name="peso" class="form-control" value="{{$carga->peso}}"/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="tamanho" class="form-label">Informe o tamanho:</label>
                <input type="text" name="tamanho" class="form-control" value="{{$carga->tamanho}}"/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="fragilidade" class="form-label">Informe a fragilidade:</label>
                <input type="text" name="fragilidade" class="form-control" value="{{$carga->fragilidade}}"/>
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