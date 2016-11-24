<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\State;
use App\Profession;

class PatientsController extends Controller
{
    protected $request;

    public function __construct(Request $request) {
        $this->request = $request;
    }

    public function index()
    {
        $title = 'Patients';
        $modulo = 'patients';
        $models = Patient::all();
        $total = Patient::all()->count();
        $fields = [
            'name',
            'address',
            'phone',
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
        $title = 'Patients';
        $module = 'patients';
        $route = route('patients.store');
        $formulario = 'modules.patients.form';
        $statesCollection = State::all();
        $states['0'] = 'Selecione';
        foreach ($statesCollection as $key => $value) {
            $states[$value->id] = $value->name;
        }
        
        $profs = Profession::all();
        $profissoes['0'] = 'Selecione';
        foreach ($profs as $key => $value) {
            $profissoes[$value->id] = $value->name;
        }
        
        
        return view('create', compact('title', 'module', 'route', 'formulario', 'states', 'profissoes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = Patient::validate($this->request->all());

        if($validation->fails()) {
            return redirect()->route('patients.create')->withErrors($validation)->withInput();
        }
        $patients = new Patient($request->all());
        $patients->save();
        return redirect('patients/' . $patients->id . '/edit');
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
        $title = 'Patients';
        $module = 'patients';
        $route = route('patients.update', $id);
        $formulario = 'modules.patients.form';
        $patient = Patient::find($id);
        $statesCollection = State::all();
        $states['0'] = 'Selecione';
        foreach ($statesCollection as $key => $value) {
            $states[$value->id] = $value->name;
        }
        
        $profs = Profession::all();
        $profissoes['0'] = 'Selecione';
        foreach ($profs as $key => $value) {
            $profissoes[$value->id] = $value->name;
        }
        
        
        return view('create', compact('title', 'module', 'route', 'formulario', 'states', 'profissoes', 'patient'));
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
        $patient = Patient::find($id);
        $patient->update($request->all());
        return redirect('patients/' . $patient->id . '/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
