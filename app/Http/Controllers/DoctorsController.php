<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use App\State;

class DoctorsController extends Controller
{
    private $module = 'doctors';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Doctors';
        $modulo = 'doctors';
        $models = Doctor::all();
        $total = Doctor::all()->count();
        $fields = [
            'name',
            'address',
            'city',
            'crm',
            'email'
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
        $fillables = [
            'name' => ['label' => 'Nome', 'size' => 4, 'type' => 'text', 'value' => null, 'class' => 'form-control'],
            'email' => ['label' => 'Email', 'size' => 4, 'type' => 'text', 'value' => null, 'class' => 'form-control'],
            'birthday' => ['label' => 'Data Nasc.', 'size' => 4, 'type' => 'text', 'value' => null, 'class' => 'form-control'],
            'address' => ['label' => 'Endereço', 'size' => 12, 'type' => 'text', 'value' => null, 'class' => 'form-control'],
            'state_id' => ['label' => 'Estado', 'size' => 6, 'type' => 'select', 'value' => null, 'class' => 'form-control', 'options' => State::all()],
            'city_id' => ['label' => 'Cidade', 'size' => 6, 'type' => 'text', 'value' => null, 'class' => 'form-control'],
            'zipcode' => ['label' => 'CEP', 'size' => 4, 'type' => 'text', 'value' => null, 'class' => 'form-control'],
            'Phone' => ['label' => 'Telefone', 'size' => 4, 'type' => 'text', 'value' => null, 'class' => 'form-control'],
            'Phone_cel' => ['label' => 'Celular', 'size' => 4, 'type' => 'text', 'value' => null, 'class' => 'form-control'],
            'genre' => ['label' => 'Sexo', 'size' => 4, 'type' => 'text', 'value' => null, 'class' => 'form-control'],
            'crm' => ['label' => 'CRM', 'size' => 4, 'type' => 'text', 'value' => null, 'class' => 'form-control'],
            'crm_status' => ['label' => 'Status CRM', 'size' => 4, 'type' => 'text', 'value' => null, 'class' => 'form-control'],
            'pass' => ['label' => 'Senha', 'size' => 4, 'type' => 'text', 'value' => null, 'class' => 'form-control'],
            'status' => ['label' => 'Status', 'size' => 4, 'type' => 'text', 'value' => null, 'class' => 'form-control'],
            'obs' => ['label' => 'Observação', 'size' => 4, 'type' => 'text', 'value' => null, 'class' => 'form-control']
        ];
        $title = 'Doctors';
        $module = 'doctors';
        $route = route('doctors.store');
        $method = 'PUT';
        $formulario = 'modules.'.$this->module.'.form';
        return view('create', compact('title', 'patients', 'total', 'module', 'fillables', 'route', 'method', 'formulario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $doctor = new Doctor($request);
        $doctor->save();
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Doctor::destroy($id);
        return back()->with('msg', 'Doutor removido com sucesso');
    }
}
