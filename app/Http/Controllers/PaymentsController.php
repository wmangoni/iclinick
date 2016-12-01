<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;
use App\Payment;

class PaymentsController extends Controller
{
    private $module = 'payments';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Payments';
        $modulo = 'payments';
        $models = Payment::with('patient')->get();
        $total = Payment::all()->count();
        $fields = [
            'id',
            'amount',
            'patient',
            'obs',
            'created_at'
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
        $title = 'Payments';
        $module = $this->module;
        $pats = Patient::all();
        $patients['0'] = 'Selecione';
        foreach ($pats as $key => $value) {
            $patients[$value->id] = $value->name;
        }
        $route = route($this->module . '.store');
        $formulario = 'modules.'.$this->module.'.form';
        return view('create', compact('title', 'module', 'route', 'formulario', 'patients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $payment = new Payment($request->all());
        $payment->save();
        return redirect($this->module . '/' . $payment->id . '/edit');
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
        $title = 'Payments';
        $module = $this->module;
        $pats = Patient::all();
        $patients['0'] = 'Selecione';
        foreach ($pats as $key => $value) {
            $patients[$value->id] = $value->name;
        }
        $route = route($this->module.'.update', $id);
        $formulario = 'modules.'.$this->module.'.form';
        $payment = Payment::find($id);

        return view('create', compact('title', 'module', 'route', 'formulario', 'payment', 'patients'));
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
        $payment = Payment::find($id);
        $payment->update($request->all());
        return redirect($this->module . '/' . $payment->id . '/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Payment::destroy($id);
        return redirect($this->module)->with('msg', 'Pagamento removido com sucesso');
    }
}
