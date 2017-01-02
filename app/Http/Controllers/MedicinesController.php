<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medicine;

class MedicinesController extends Controller
{
    private $module = 'medicines';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Medicines';
        $modulo = 'medicines';
        $models = Medicine::all();
        $total = Medicine::all()->count();
        $fields = [
            'id',
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
        $title = 'Medicines';
        $module = $this->module;
        $route = route($this->module . '.store');
        $formulario = 'modules.'.$this->module.'.form';
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
        $medicine = new Medicine($request->all());
        $medicine->doctor_id = session('user_id');
        $medicine->save();
        return redirect($this->module . '/' . $medicine->id . '/edit');
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
        $title = 'Medicines';
        $module = $this->module;
        $route = route($this->module.'.update', $id);
        $formulario = 'modules.'.$this->module.'.form';
        $medicine = Medicine::find($id);

        return view('create', compact('title', 'module', 'route', 'formulario', 'medicine'));
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
        $medicine = Medicine::find($id);
        $medicine->update($request->all());
        return back()->with('msg', 'Medicamento atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Medicine::destroy($id);
        back()->with('msg', 'Medicamento removido com sucesso');
    }
}
