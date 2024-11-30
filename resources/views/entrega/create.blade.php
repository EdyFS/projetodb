<x-app-layout>

    <h5>Nova Entrega</h5>

    <form action="/entrega" method="POST">
        @CSRF
        <div class="row">
            <div class="col">
                <label for="cliente_id" class="form-label">Cliente:</label>
                <select name="cliente_id" class="form-select">
                    @foreach ($cliente as $cl)
                        <option value="{{$cl->id}}">{{$cl->nome_cliente}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="motorista_id" class="form-label">Motorista:</label>
                <select name="motorista_id" class="form-select">
                    @foreach ($motorista as $mo)
                        <option value="{{$mo->id}}">{{$mo->nome_motorista}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="carga_id" class="form-label">Carga:</label>
                <select name="carga_id" class="form-select">
                    @foreach ($carga as $ca)
                        <option value="{{$ca->id}}">{{$ca->nomeCarga}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="data_entrega" class="form-label">Data de Entrega:</label>
                <input type="date" name="data_entrega" class="form-control"/>
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