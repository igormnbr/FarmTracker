@extends('layouts.main')

@section('title', 'Minhas propriedades')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h2>Minhas propriedades</h2>
</div>
<div class="col-md-10 offset-md-1 dashboard-farms-container">
    @if(count($farms)>0)
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Proprietário</th>
                <th scope="col">Propriedade</th>
                <th scope="col">Área Total (ha)</th>
                <th scope="col">Área Útil (ha)</th>
                <th scope="col">Quantidade de Gado</th>
                <th scope="col">Quantidade de Machos</th>
                <th scope="col">Quantidade de Fêmeas</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($farms as $farm)
                <tr>
                    <td scropt="row">{{$loop->index+1}}</td>
                    <td>{{$farm->proprietario}}</td>
                    <td>{{$farm->propriedade}}</td>
                    <td>{{$farm->area_total}}</td>
                    <td>{{$farm->area_util}}</td>
                    <td>{{$farm->qtd_gado}}</td>
                    <td>{{$farm->qtd_machos}}</td>
                    <td>{{$farm->qtd_femeas}}</td>
                    <td>
                        <a href="/farms/edit/{{$farm->id}}" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon> Editar</a> 
                        <form action="/farms/{{$farm->id}}" method="POST">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline"></ion-icon> Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>Você não possui nenhuma propriedade cadastrada ainda.</p>
    @endif
</div>


@endsection