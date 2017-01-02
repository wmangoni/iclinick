@extends('layouts.app')

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Módulo :: {{ $title }}</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading clearfix">
                        <div class="col-md-6">
                            <h4>List</h4>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ $modulo }}/create" class="btn btn-default pull-right">Add</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if (session('msg'))
                            <div class="alert alert-success">
                                {{ session('msg') }}
                            </div>
                        @endif
                        <table class="table table-responsive table-hover">
                            <thead>
                                @foreach($fields as $field)
                                    @if($field == 'obs' || $field == 'description')
                                        <th style="width: 380px;">{{ $field }}</th>
                                    @else
                                        <th>{{ $field }}</th>
                                    @endif
                                @endforeach
                                <th>Editar</th>
                                <th>Excluir</th>
                            </thead>
                            <tbody>
                                @foreach($models as $model)
                                    <tr>
                                        @foreach($fields as $field)
                                            @if( isset(json_decode($model->$field)->name) )
                                                <td>{{ json_decode($model->$field)->name }}</td>
                                            @else
                                                @if( is_float($model->$field) )
                                                    <td>$ {{ number_format($model->$field, 2, ',', '.') }}</td>
                                                @else
                                                    <td>{{ $model->$field }}</td>
                                                @endif
                                            @endif
                                        @endforeach
                                        <?php $edit_link = 'adm/' . $modulo . '/' . $model->id . '/edit' ?>
                                        <td style="width: 73px;">
                                            <a class="btn btn-info" href="{{ url($edit_link) }}"><i class="fa fa-edit"></i> Editar</a>
                                        </td>
                                        <td style="width: 73px;">
                                            <form action="{{ route($modulo . '.destroy', $model->id) }}" method="POST">
                                                {{ method_field('DELETE') }}
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <button type="submit" class="btn btn-danger" href="{{ route($modulo . '.destroy', $model->id) }}">
                                                    <i class="fa fa-trash"></i> Excluir
                                                </button>
                                            </form>
                                        </td>
                                    <tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="panel-footer">
                        Total: {{ $total }}
                    </div>
                </div>
            </div>
            <!-- /.col-lg-4 -->
        </div>
    </div>
    <!-- /#page-wrapper -->
@endsection
