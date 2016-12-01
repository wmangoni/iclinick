    @if(isset($payment->id))
        {{ Form::model($payment, ['route' => ['payments.update', $payment->id]]) }}
        {{ method_field('PUT') }}
    @else
        {!! Form::open(['url' => $route]) !!}
    @endif
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-6">
                {{ Form::label('amount', 'Quantia') }}
                {{ Form::text('amount', null, ['class' => 'form-control']) }}
            </div>
            <div class="col-md-6">
                {{ Form::label('patient_id', 'Paciente') }}
                {{ Form::select('patient_id', $patients, null, ['class' => 'form-control']) }}
            </div>
            <div class="col-md-12">
                {{ Form::label('obs', 'Observações') }}
                {{ Form::text('obs', null, ['class' => 'form-control']) }}
            </div>
            <div class="col-md-12" style="margin-top: 10px;">
                {{ Form::submit('Save', ['class' => 'btn btn-primary']) }}
            </div>
        </div>
    </div>
{!! Form::close() !!}