<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddSerieRequest;
use App\Models\Series;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = Series::query()->orderBy('nome')->get();
        $mensagem = $request->session()->get('mensagem');
        return view("series.index", ["series" => $series, "mensagem" => $mensagem]);
    }

    public function show(string $name) {
        $series = Series::where('nome', $name)->get();
        return view("series.index", ["series" => $series]);
    }

    public function create()
    {
        return view("series.create");
    }

    public function store(AddSerieRequest $request)
    {

        var_dump($request->validated());

        $nome = filter_var($request->nome, FILTER_SANITIZE_STRING);
        $serie = Series::create([
            "nome" => $nome
        ]);
        $request->session()->flash('mensagem', "A série com o id: {$serie->id}, de nome {$serie->nome} foi adicionada com sucesso!");
        return redirect()->route("series.index");
    }

    public function destroy(Request $request)
    {
       Series::destroy($request->id);
       $request->session()->flash('mensagem', "A série foi removida com sucesso!");
       return redirect()->route("series.index");
    }
}
