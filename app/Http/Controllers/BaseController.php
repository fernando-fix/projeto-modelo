<?php

class BaseController
{
    protected $model = User::class;
    protected $request = Request::class;
    protected $table = 'users';
    protected $singular = 'user';
    protected $view_path = 'users';
    protected $pagination = 15;
    protected $permission = 'usuarios';

    // Verificar permissão
    private function hasPermission($action)
    {
        return Gate::allows($action . '_' . $this->permission);
    }

    // Método index para exibir a lista de "alguma coisa"
    public function index($filter = [])
    {
        if ($this->hasPermission('visualizar')) {
            $data = [];
            $data[$this->table] = $this->model::search($filter)->paginate($this->pagination);
            return view($this->view_path . '.index', $data);
        }

        LogAndFlash::error('Sem permissão de acesso');
        return redirect()->back();
    }

    // Método create para exibir o formulário de criação
    public function create()
    {
        if ($this->hasPermission('cadastrar')) {
            return view($this->view_path . '.create');
        }

        LogAndFlash::error('Sem permissão de acesso');
        return redirect()->back();
    }

    // Método store para salvar os dados após o envio do formulário
    public function store(Request $request)
    {
        if ($this->hasPermission('cadastrar')) {
            $request->validate((new $this->request())->rules());
            $this->model::create($request->all());
            LogAndFlash::success($this->singular . ' cadastrado com sucesso');
            return redirect()->route($this->view_path . '.index');
        }

        LogAndFlash::error('Sem permissão de acesso');
        return redirect()->back();
    }

    // Método edit para exibir o formulário de edição
    public function edit($id)
    {
        if ($this->hasPermission('editar')) {
            $data = [];
            $data[$this->singular] = $this->model::findOrFail($id);
            return view($this->view_path . '.edit', $data);
        }

        LogAndFlash::error('Sem permissão de acesso');
        return redirect()->back();
    }

    // Método update para salvar as alterações após o envio do formulário
    public function update(Request $request, $id)
    {
        if ($this->hasPermission('editar')) {
            $request->validate((new $this->request())->rules());
            $item = $this->model::findOrFail($id);
            $item->update($request->all());
            LogAndFlash::success($this->singular . ' alterado com sucesso');
            return redirect()->route($this->view_path . '.index');
        }

        LogAndFlash::error('Sem permissão de acesso');
        return redirect()->back();
    }

    // Método destroy para excluir um item
    public function destroy($id)
    {
        if ($this->hasPermission('excluir')) {
            $item = $this->model::findOrFail($id);
            $item->delete();
            LogAndFlash::success($this->singular . ' excluído com sucesso');
            return redirect()->route($this->view_path . '.index');
        }

        LogAndFlash::error('Sem permissão de acesso');
        return redirect()->back();
    }
}
