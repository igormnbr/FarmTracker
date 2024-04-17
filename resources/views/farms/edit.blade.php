@extends('layouts.main')

@section('title', 'Editando' . $farm->propriedade)

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Editando {{$farm->propriedade}}</h1>
    <form action="/farms/update/{{$farm->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Proprietário:</label>
            <input type="text" class="form-control" id="proprietario" name="proprietario" placeholder="Nome do Proprietário" value="{{$farm->proprietario}}">
        </div>
        <div class="form-group">
            <label for="title">Propriedade:</label>
            <input type="text" class="form-control" id="propriedade" name="propriedade" placeholder="Nome da Propriedade" value="{{$farm->propriedade}}">
        </div>
        <div class="form-group">
            <label for="title">Área Total:</label>
            <input type="text" class="form-control" id="area_total" name="area_total" placeholder="Área Total" value="{{$farm->area_total}}">
        </div>
        <div class="form-group">
            <label for="title">Área Útil:</label>
            <input type="text" class="form-control" id="area_util" name="area_util" placeholder="Área Útil" value="{{$farm->area_util}}">
        </div>
        <div class="form-group">
            <label for="title">Quantidade de gado:</label>
            <input type="number" class="form-control" id="qtd_gado" name="qtd_gado" placeholder="Quantidade de gado" value="{{$farm->qtd_gado}}">
        </div>
        <div class="form-group">
            <label for="title">Quantidade de machos:</label>
            <input type="number" class="form-control" id="qtd_machos" name="qtd_machos" placeholder="Quantidade de machos" value="{{$farm->qtd_machos}}">
        </div>
        <div class="form-group">
            <label for="title">Quantidade de fêmeas:</label>
            <input type="number" class="form-control" id="qtd_femeas" name="qtd_femeas" placeholder="Quantidade de fêmeas" value="{{$farm->qtd_femeas}}">
        </div>
        <input type="submit" class="btn btn-primary" value="Salvar edição">
    </form>
</div>


@endsection