{!! Form::open(['route' => $route ]) !!}
    <div class="row">
        <div class="col-md-12">
            <div class="input-group">
                {{ Form::label('name', 'Nome') }}
                {{ Form::text('name', null, ['class' => 'form-control']) }}
            </div>
            <div class="input-group">
                {{ Form::label('email', 'Email') }}
                {{ Form::text('email', null, ['class' => 'form-control']) }}
            </div>
            <div class="input-group">
                {{ Form::label('name', 'Nome') }}
                {{ Form::text('name', null, ['class' => 'form-control']) }}
            </div>
        </div>
    </div>
{!! Form::close() !!}