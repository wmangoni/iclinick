{!! Form::open(['route' => $route ]) !!}
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
                {{ Form::text('cpf', null, ['class' => 'form-control']) }}
            </div>
            <div class="col-md-6">
                {{ Form::label('address', 'Endereço') }}
                {{ Form::text('address', null, ['class' => 'form-control']) }}
            </div>
            <div class="col-md-3">
                {{ Form::label('state', 'Estado') }}
                {{ Form::select('state', $states, null, ['class' => 'form-control']) }}
            </div>
            <div class="col-md-3">
                {{ Form::label('city', 'Cidade') }}
                {{ Form::select('city', ['' => 'Selecione'], null, ['class' => 'form-control']) }}
            </div>
        </div>
    </div>
{!! Form::close() !!}