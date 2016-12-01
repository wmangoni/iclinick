    @if(isset($service->id))
        {{ Form::model($service, ['route' => ['services.update', $service->id]]) }}
        {{ method_field('PUT') }}
    @else
        {!! Form::open(['url' => $route]) !!}
    @endif
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-12">
                {{ Form::label('name', 'Nome') }}
                {{ Form::text('name', null, ['class' => 'form-control']) }}
            </div>
            <div class="col-md-12">
                {{ Form::label('description', 'Descrição') }}
                {{ Form::text('description', null, ['class' => 'form-control']) }}
            </div>
            <div class="col-md-12" style="margin-top: 10px;">
                {{ Form::submit('Save', ['class' => 'btn btn-primary']) }}
            </div>
        </div>
    </div>
{!! Form::close() !!}