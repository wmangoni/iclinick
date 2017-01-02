<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Convenio;
use Gate;

class ConveniosController extends Controller
{
    private $module = 'convenios';
    private $module_id = 2;

    public function __construct()
    {
        if (Gate::denies('permission-to-show', session('user_id'), $this->module_id)) {
            abort(403, 'Você não tem permissão para realizar esta ação');
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Convenios';
        $modulo = 'convenios';
        $models = Convenio::all();
        $total = Convenio::all()->count();
        $fields = [
            'cod',
            'name',
            'description',
            'created_at',
            'updated_at'
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
        $title = 'Convenios';
        $module = 'convenios';
        $route = route($this->module . '.store');
        $formulario = 'modules.convenios.form';
        return view('create', compact('title', 'module', 'route', 'formulario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Gate::denies('permission-to-insert', session('user_id'), $this->module_id)) {
            abort(403, 'Você não tem permissão para realizar esta ação');
        }

        $convenio = new Convenio($request->all());
        $convenio->doctor_id = session('user_id');
        $convenio->save();
        return redirect('adm' . $this->module . '/' . $convenio->id . '/edit');
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
        $title = 'Segments';
        $module = $this->module;
        $route = route($this->module . '.update', $id);
        $formulario = 'modules.'.$this->module.'.form';
        $convenio = Convenio::find($id);

        return view('create', compact('title', 'module', 'route', 'formulario', 'convenio'));
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
        if (Gate::denies('permission-to-update', session('user_id'), $this->module_id)) {
            abort(403, 'Você não tem permissão para realizar esta ação');
        }

        $convenio = Convenio::find($id);
        $convenio->update($request->all());
        return back()->with('msg', 'Convênio atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Gate::denies('permission-to-delete', session('user_id'), $this->module_id)) {
            abort(403, 'Você não tem permissão para realizar esta ação');
        }

        $convenio = Convenio::find($id);
        $convenio->delete();
        return back()->with('msg', 'Convênio removido com sucesso');
    }
}
