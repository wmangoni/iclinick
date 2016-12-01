<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use App\State;

class DoctorsController extends Controller
{
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
        $doctor = new Doctor();
        $fillables = [
            'name' => ['size' => 12, 'type' => 'text', 'value' => null, 'class' => 'form-control'],
            'email' => ['size' => 12, 'type' => 'text', 'value' => null, 'class' => 'form-control'],
            'birthday' => ['size' => 12, 'type' => 'text', 'value' => null, 'class' => 'form-control'],
            'address' => ['size' => 12, 'type' => 'text', 'value' => null, 'class' => 'form-control'],
            'city_id' => ['size' => 12, 'type' => 'text', 'value' => null, 'class' => 'form-control'],
            'state_id' => ['size' => 12, 'type' => 'select', 'value' => null, 'class' => 'form-control', 'options' => State::all()],
            'zipcode' => ['size' => 12, 'type' => 'text', 'value' => null, 'class' => 'form-control'],
            'Phone' => ['size' => 12, 'type' => 'text', 'value' => null, 'class' => 'form-control'],
            'Phone_cel' => ['size' => 12, 'type' => 'text', 'value' => null, 'class' => 'form-control'],
            'genre' => ['size' => 12, 'type' => 'text', 'value' => null, 'class' => 'form-control'],
            'crm' => ['size' => 12, 'type' => 'text', 'value' => null, 'class' => 'form-control'],
            'crm_status' => ['size' => 12, 'type' => 'text', 'value' => null, 'class' => 'form-control'],
            'pass' => ['size' => 12, 'type' => 'text', 'value' => null, 'class' => 'form-control'],
            'status' => ['size' => 12, 'type' => 'text', 'value' => null, 'class' => 'form-control'],
            'obs' => ['size' => 12, 'type' => 'text', 'value' => null, 'class' => 'form-control']
        ];
        $title = 'Doctors';
        $module = 'doctors';
        $route = route('doctors.store');
        $method = 'PUT';
        return view('create', compact('title', 'patients', 'total', 'module', 'fillables', 'route', 'method'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        return redirect($this->module)->with('msg', 'Doutor removido com sucesso');
    }
}
