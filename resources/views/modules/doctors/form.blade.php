@if(isset($doctor->id))
    {{ Form::model($doctor, ['route' => ['doctors.update', $doctor->id]]) }}
    {{ method_field('PUT') }}
@else
    {!! Form::open(['url' => $route]) !!}
@endif
<div class="row">
    <div class="col-md-12">
        @foreach($fillables as $key => $value)
            <div class="col-md-{$value['size']}">
                {{ Form::label($key, $value['label']) }}
                {{ Form::text($key, $value['value'], ['class' => $value['class']]) }}
            </div>
        @endforeach
        <div class="col-md-12" style="margin-top: 10px;">
            {{ Form::submit('Save', ['class' => 'btn btn-primary']) }}
        </div>
    </div>
</div>
{!! Form::close() !!}