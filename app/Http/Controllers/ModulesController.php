<?php

namespace App\Http\Controllers;

use App\Module;
use Illuminate\Http\Request;

class ModulesController extends Controller
{
    protected $request;
    private $module = 'modules';

    public function __construct(Request $request) {
        $this->request = $request;
    }

    public function index()
    {
        $title = 'Configurations';
        $modulo = $this->module;
        $models = Module::all();
        $total = Module::all()->count();
        $fields = [
            'id',
            'name',
            'route',
            'status'
        ];
        return view('list', compact('title', 'models', 'total', 'fields', 'modulo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Modules';
        $module = $this->module;
        $route = route($this->module . '.store');
        $formulario = 'modules.'.$this->module.'.form';

        return view('create', compact('title', 'module', 'route', 'formulario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validation = Module::validate($this->request->all());

        if($validation->fails()) {
            return redirect()->route('modules.create')->withErrors($validation)->withInput();
        }
        $config = new Module($request->all());
        $config->save();
        return redirect('adm/' . $this->module . '/' . $config->id . '/edit')->with('msg', 'Módulo cadastrado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Modules';
        $route = route($this->module . '.update', $id);
        $formulario = 'modules.'.$this->module.'.form';
        $modulo = Module::find($id);
        $module = $this->module;

        return view('create', compact('title', 'route', 'formulario', 'module', 'modulo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $patient = Module::find($id);
        $patient->update($request->all());
        return back()->with('msg', 'Módulo editado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Module::destroy($id);
        return back()->with('msg', 'Módulo removido com sucesso');
    }
}
