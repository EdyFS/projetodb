<x-app-layout>

    <h5>Editar Entrega</h5>

    <form action="/entrega/{{$entrega->id}}" method="POST">
        @CSRF
        @method('PUT')
        
        <div class="row">
            <div class="col">
                <label for="cliente_id" class="form-label">Cliente:</label>
                <select name="cliente_id" class="form-select">
                    @foreach ($cliente as $cl)
                        <option value="{{$cl->id}}"
                            {{ $entrega->cliente->id == $cl->id ? 'selected' : '' }}>
                            {{$cl->nome_cliente}}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="motorista_id" class="form-label">Motorista:</label>
                <select name="motorista_id" class="form-select">
                    @foreach ($motorista as $mo)
                        <option value="{{$mo->id}}"
                            {{ $entrega->motorista->id == $mo->id ? 'selected' : '' }}>
                            {{$mo->nome_motorista}}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="carga_id" class="form-label">Carga:</label>
                <select name="carga_id" class="form-select">
                    @foreach ($carga as $ca)
                        <option value="{{$ca->id}}"
                            {{ $entrega->carga->id == $ca->id ? 'selected' : '' }}>
                            {{$ca->nomeCarga}}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="data_entrega" class="form-label">Data de Entrega:</label>
                <input type="date" name="data_entrega" class="form-control" value="{{$entrega->data_entrega}}"/>
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