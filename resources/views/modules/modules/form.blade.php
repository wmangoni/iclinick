@if(isset($modulo->id))
    {{ Form::model($modulo, ['route' => ['modules.update', $modulo->id]]) }}
    {{ method_field('PUT') }}
@else
    {!! Form::open(['url' => $route]) !!}
@endif
<div class="row">
    <div class="col-md-12">
        <div class="col-md-6">
            {{ Form::label('name', 'Nome') }}
            {{ Form::text('name', null, ['class' => 'form-control']) }}
        </div>
        <div class="col-md-6">
            {{ Form::label('route', 'Rota') }}
            {{ Form::text('route', null, ['class' => 'form-control']) }}
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    {{ Form::label('status', 'Status') }}
                </div>
                <div class="col-md-6">
                    <span style="margin-right: 10px;">Active </span>{{ Form::radio('status', '1', ['class' => 'form-control']) }}
                </div>
                <div class="col-md-6">
                    <span style="margin-right: 10px;">Inactive </span>{{ Form::radio('status', '0', ['class' => 'form-control']) }}
                </div>
            </div>
        </div>
        <div class="col-md-6">
            {{ Form::label('icon', 'Icone') }}
            {{ Form::text('icon', null, ['class' => 'form-control']) }}
        </div>
        <div class="col-md-12" style="margin-top: 10px;">
            {{ Form::submit('Save', ['class' => 'btn btn-primary']) }}
        </div>
    </div>
</div>
{!! Form::close() !!}