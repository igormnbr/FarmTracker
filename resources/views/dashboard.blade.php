@extends('layouts.main')

@section('title', 'Minhas propriedades')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h2>Minhas propriedades</h2>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if(count($farms)>0)
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Proprietário</th>
                <th scope="col">Propriedade</th>
                <th scope="col">Área Total</th>
                <th scope="col">Área Útil</th>
                <th scope="col">Quantidade de Gado</th>
                <th scope="col">Quantidade de Machos</th>
                <th scope="col">Quantidade de Fêmeas</th>
            </tr>
        </thead>
        <tbody>
            @foreach($farms as $farm)
                <tr>
                    <td scropt="row">{{$loop->index+1}}</td>
                    <td><a href="/farms/{{$farm->id}}">{{$farm->propriedade}}</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>Você não possui nenhuma propriedade cadastrada ainda.</p>
    @endif
</div>


@endsection