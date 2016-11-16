{!! Form::open(['route' => $route ]) !!}
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-6">
                {{ Form::label('name', 'Nome') }}
                {{ Form::text('name', null, ['class' => 'form-control']) }}
            </div>
            <div class="col-md-6">
                {{ Form::label('description', 'Descrição') }}
                {{ Form::text('description', null, ['class' => 'form-control']) }}
            </div>
        </div>
    </div>
{!! Form::close() !!}