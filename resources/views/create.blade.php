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
                    <div class="panel-body">
                        <form role="form" action="{{ $route }}" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <input class="form-control" type="text" name="name">
                                    </div>
                                </div>
                            </div>
                            {!! csrf_field() !!}
                            @if(isset($method) && $method == 'PUT')
                                <input type="hidden" name="_method" value="PUT">
                            @endif
                        </form>
                    </div>
                    <div class="panel-footer">
                        Fotter
                    </div>
                </div>
            </div>
            <!-- /.col-lg-4 -->
        </div>
    </div>
    <!-- /#page-wrapper -->
@endsection