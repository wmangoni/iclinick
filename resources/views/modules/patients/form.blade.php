    @if(isset($patient->id))
        {{ Form::model($patient, ['route' => ['patients.update', $patient->id]]) }}
        {{ method_field('PUT') }}
    @else
        {!! Form::open(['url' => $route]) !!}
    @endif
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-4">
                {{ Form::label('name', 'Nome') }}
                {{ Form::text('name', null, ['class' => 'form-control']) }}
            </div>
            <div class="col-md-4">
                {{ Form::label('email', 'E-mail') }}
                {{ Form::text('email', null, ['class' => 'form-control']) }}
            </div>
            <div class="col-md-4">
                {{ Form::label('cpf', 'CPF') }}
                {{ Form::text('cpf', null, ['class' => 'form-control cpf-mask']) }}
            </div>
            <div class="col-md-6">
                {{ Form::label('address', 'Endereço') }}
                {{ Form::text('address', null, ['class' => 'form-control']) }}
            </div>
            <div class="col-md-3">
                {{ Form::label('state_id', 'Estado') }}
                {{ Form::select('state_id', $states, null, ['class' => 'form-control']) }}
            </div>
            <div id="campo-cidade" class="col-md-3" data-value="{{$patient->city_id}}">
                {{ Form::label('city_id', 'Cidade') }}
                {{ Form::select('city_id', ['' => 'Selecione'], null, [ 'class' => 'form-control', 'data-id' => isset($patient->city_id) ? $patient->city_id : 0 ]) }}
            </div>
            <div class="col-md-3">
                {{ Form::label('zipcode', 'CEP') }}
                {{ Form::text('zipcode', null, ['class' => 'form-control cep-mask']) }}
            </div>
            <div class="col-md-3">
                {{ Form::label('phone', 'Telefone Principal') }}
                {{ Form::text('phone', null, ['class' => 'form-control phone-mask']) }}
            </div>
            <div class="col-md-3">
                {{ Form::label('phone_comercial', 'Telefone Comercial') }}
                {{ Form::text('phone_comercial', null, ['class' => 'form-control phone-mask']) }}
            </div>
            <div class="col-md-3">
                {{ Form::label('phone_cel', 'Telefone Celular') }}
                {{ Form::text('phone_cel', null, ['class' => 'form-control phone-mask']) }}
            </div>
            <div class="col-md-3">
                {{ Form::label('prof_id', 'Profissão') }}
                {{ Form::select('prof_id', $profissoes, null, ['class' => 'form-control']) }}
            </div>
            <div class="col-md-3">
                {{ Form::label('genre', 'Sexo') }}
                {{ Form::select('genre', ['M' => 'Masculino', 'F' => 'Feminino'], null, ['class' => 'form-control']) }}
            </div>
            <div class="col-md-3">
                {{ Form::label('height', 'Altura') }}
                {{ Form::text('height', null, ['class' => 'form-control height-mask', 'placeholder' => '98']) }}
            </div>
            <div class="col-md-3">
                {{ Form::label('weight', 'Peso') }}
                {{ Form::text('weight', null, ['class' => 'form-control weight-mask', 'placeholder' => '172']) }}
            </div>
            <div class="col-md-3">
                {{ Form::label('birthday', 'Data de nasc.') }}
                {{ Form::text('birthday', null, ['class' => 'form-control']) }}
            </div>
            <div class="col-md-3">
                {{ Form::label('estado_civil', 'Estado Civil') }}
                {{ Form::select('estado_civil', ['' => 'Selecione', 'C' => 'Casado', 'S' => 'Solteiro', 'D' => 'Divorciado', 'V' => 'Viuvo'], null, ['class' => 'form-control']) }}
            </div>
            <div class="col-md-6">
                {{ Form::label('prontuario', 'Prontuário') }}
                {{ Form::text('prontuario', null, ['class' => 'form-control']) }}
            </div>
            <div class="col-md-6">
                {{ Form::label('pai', 'Nome do Pai') }}
                {{ Form::text('pai', null, ['class' => 'form-control']) }}
            </div>
            <div class="col-md-6">
                {{ Form::label('mae', 'Nome da Mãe') }}
                {{ Form::text('mae', null, ['class' => 'form-control']) }}
            </div>
            <div class="col-md-12">
                {{ Form::label('obs', 'Observação') }}
                {{ Form::textarea('obs', null, ['class' => 'form-control']) }}
            </div>
            <div class="col-md-12" style="margin-top: 10px;">
                {{ Form::submit('Save', ['class' => 'btn btn-primary']) }}
            </div>
        </div>
    </div>
{!! Form::close() !!}