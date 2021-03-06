@extends('layouts.app')

@section('content')
    <div id="page-wrapper" style="min-height: 900px;">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Módulo :: {{ $title }}</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session('msg'))
            <div class="alert alert-success">
                {{ session('msg') }}
            </div>
        @endif

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading clearfix">
                        <div class="col-md-6">
                            <h4>Create</h4>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ url('adm/'.$module) }}" class="btn btn-warning pull-right">Voltar</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        @include($formulario)
                    </div>
                    <div class="panel-footer">
                        Footer
                    </div>
                </div>
            </div>
            <!-- /.col-lg-4 -->
        </div>
    </div>
    <!-- /#page-wrapper -->
@endsection