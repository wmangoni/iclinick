<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\State;
use App\Profession;

class PatientsController extends Controller
{
    protected $request;
    private $module = 'patients';

    public function __construct(Request $request) {
        $this->request = $request;
    }

    public function index()
    {
        $title = 'Patients';
        $modulo = $this->module;
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
        $module = $this->module;
        $route = route($this->module . '.store');
        $formulario = 'modules.'.$this->module.'.form';
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validation = Patient::validate($this->request->all());

        if($validation->fails()) {
            return redirect()->route('patients.create')->withErrors($validation)->withInput();
        }
        $patients = new Patient($request->all());
        $patients->doctor_id = session('user_id');
        $patients->save();
        return redirect($this->module . '/' . $patients->id . '/edit')->with('msg', 'Paciente criado com sucesso');;
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
        $route = route($this->module . '.update', $id);
        $formulario = 'modules.'.$this->module.'.form';
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
        return back()->with('msg', 'Paciente atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Patient::destroy($id);
        return back()->with('msg', 'Paciente removido com sucesso');
    }
}
