<?php

namespace App\Http\Controllers;

use App\Models\Example;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function __construct()
    {
        if (!auth()->check()) {
            return redirect('/login');
        }
    }

    /**
     * Display a listing of the resource.
     */
    public function blade()
    {
        $users = [
            [
                "id" => 1,
                "name" => 'Fernando',
                "email" => 'fernando@email',
                "funcao" => 'Desenvolvedor',
            ],
            [
                "id" => 2,
                "name" => 'Joaquim',
                "email" => 'joaquim@email',
                "funcao" => 'Analista de sistemas',
            ],
            [
                "id" => 3,
                "name" => 'Maria',
                "email" => 'maria@email',
                "funcao" => 'Gerente de projetos',
            ],
            [
                "id" => 4,
                "name" => 'Carlos',
                "email" => 'carlos@email',
                "funcao" => 'Product Owner',
            ],
            [
                "id" => 5,
                "name" => 'Joana',
                "email" => 'joana@email',
                "funcao" => 'Scrum Master',
            ],
        ];

        flash()->success('Mensagem de sucesso!');
        flash()->info('Mensagem de informação!');
        flash()->warning('Mensagem de aviso!');
        flash()->error('Mensagem de erro!');

        return view('examples.blade.index', ['users' => $users]);
    }

    /**
     * Display a listing of the resource.
     */
    public function vue()
    {
        toastr()->success('Mensagem de sucesso!');
        toastr()->info('Mensagem de informação!');
        toastr()->warning('Mensagem de aviso!');
        toastr()->error('Mensagem de erro!');

        return view('examples.vue.index');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Example $example)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Example $example)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Example $example)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Example $example)
    {
        //
    }
}
