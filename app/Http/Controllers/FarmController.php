<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Farm;
use App\Models\User;

class FarmController extends Controller
{

    public function index()
    {
        return view ('index');
    }

    public function create() {
        return view ('farms.create');
    }

    public function store(Request $request)
    {
        $farm = new Farm;

        $farm->proprietario = $request->proprietario;
        $farm->propriedade = $request->propriedade;
        $farm->area_total = $request->area_total;
        $farm->area_util = $request->area_util;
        $farm->qtd_gado = $request->qtd_gado;
        $farm->qtd_machos = $request->qtd_machos;
        $farm->qtd_femeas = $request->qtd_femeas;
        
        $user = auth()->user();
        $farm->user_id = $user->id;

        $farm->save();
    
        return redirect('/dashboard')->with('msg', 'Propriedade cadastrada com sucesso!');
    }

    public function show()
    {
        return view('farms.show');
    }

    public function dashboard(){
        $user = auth()->user();

        $farms = $user->farms;

        return view('farms.dashboard', ['farms'=>$farms]);
    }

    public function edit($id){

        $farm = Farm::findOrFail($id);

        return view('farms.edit', ['farm'=>$farm]);
    }
  
    public function update(Request $request, string $id)
    {
        Farm::findOrFail($request->id)->update($request->all());

        return redirect('/dashboard')->with('msg', 'Propriedade editada com sucesso!');
    }

    public function destroy(string $id)
    {
        Farm::findOrFail($id)->delete();

        return redirect('/dashboard')->with('msg', 'Propriedade excluída com sucesso!');
    }
}
