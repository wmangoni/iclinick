<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Convenio;

class ConveniosController extends Controller
{
    private $module = 'convenios';
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
        $convenio = new Convenio($request->all());
        $convenio->save();
        return redirect($this->module . '/' . $convenio->id . '/edit');
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
        $convenio = Convenio::find($id);
        $convenio->update($request->all());
        return redirect($this->module . '/' . $convenio->id . '/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $convenio = Convenio::find($id);
        $convenio->delete();
        return redirect($this->module);
    }
}
