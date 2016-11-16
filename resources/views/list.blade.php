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
                        <table class="table table-responsive table-striped">
                            @foreach($fields as $field)
                                <th>{{ $field }}</th>
                            @endforeach
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
