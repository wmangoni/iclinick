<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServicesController extends Controller
{
    private $module = 'services';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Services';
        $modulo = 'services';
        $models = Service::all();
        $total = Service::all()->count();
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
        $title = 'Services';
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
        $service = new Service($request->all());
        $service->doctor_id = session('user_id');
        $service->save();
        return redirect($this->module . '/' . $service->id . '/edit');
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
        $title = 'Services';
        $module = $this->module;
        $route = route($this->module.'.update', $id);
        $formulario = 'modules.'.$this->module.'.form';
        $service = Service::find($id);

        return view('create', compact('title', 'module', 'route', 'formulario', 'service'));
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
        $service = Service::find($id);
        $service->update($request->all());
        return redirect($this->module . '/' . $service->id . '/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Service::destroy($id);
        return redirect($this->module)->with('msg', 'Serviço removido com sucesso');
    }
}
