@extends('layouts.main')

@section('title', 'Cadastro de propriedade')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Cadastrar nova propriedade</h1>
    <form action="/farms" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Proprietário:</label>
            <input type="text" class="form-control" id="proprietario" name="proprietario" placeholder="nome do proprietário">
        </div>
        <div class="form-group">
            <label for="title">Propriedade:</label>
            <input type="text" class="form-control" id="propriedade" name="propriedade" placeholder="nome da propriedade">
        </div>
        <div class="form-group">
            <label for="title">Área Total:</label>
            <input type="text" class="form-control" id="area_total" name="area_total" placeholder="hectares">
        </div>
        <div class="form-group">
            <label for="title">Área Útil:</label>
            <input type="text" class="form-control" id="area_util" name="area_util" placeholder="hectares">
        </div>
        <div class="form-group">
            <label for="title">Quantidade de gado:</label>
            <input type="number" class="form-control" id="qtd_gado" name="qtd_gado" placeholder="cabeças de gado">
        </div>
        <div class="form-group">
            <label for="title">Quantidade de machos:</label>
            <input type="number" class="form-control" id="qtd_machos" name="qtd_machos" placeholder="cabeças de gado">
        </div>
        <div class="form-group">
            <label for="title">Quantidade de fêmeas:</label>
            <input type="number" class="form-control" id="qtd_femeas" name="qtd_femeas" placeholder="cabeças de gado">
        </div>
        <input type="submit" class="btn btn-primary" value="Cadastrar propriedade">
    </form>
</div>

@endsection