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
                            <h4>Create</h4>
                        </div>
                        <div class="col-md-6">
                            <a href="/{{ $module }}" class="btn btn-warning pull-right">Voltar</a>
                        </div>
                    </div>
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (Session::has('message'))
                        <div class="alert {{ session('alert') }}">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                            @if (Session::has('alert') && session('alert') == 'alert-danger')
                                <h4><strong>Erro na Aplicação</strong></h4>
                            @endif
                            {{ session('message') }}
                        </div>
                    @endif
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