<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Segment;

class SegmentsController extends Controller
{
    private $module = 'segments';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Segments';
        $modulo = $this->module;
        $models = Segment::all();
        $total = Segment::all()->count();
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
        $title = 'Segments';
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
        $segment = new Segment($request->all());
        $segment->doctor_id = session('user_id');
        $segment->save();
        return redirect('adm/' . $this->module)->with('msg', 'Segmento criado com sucesso');
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
        $route = route('segments.update', $id);
        $formulario = 'modules.'.$this->module.'.form';
        $segment = Segment::find($id);

        return view('create', compact('title', 'module', 'route', 'formulario', 'segment'));
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
        $segment = Segment::find($id);
        $segment->update($request->all());
        return back()->with('msg', 'Segmento removida com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Segment::destroy($id);
        return back()->with('msg', 'Segmento removido com sucesso');
    }
}
