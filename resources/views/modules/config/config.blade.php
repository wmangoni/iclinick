@extends('layouts.app')

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dashboard</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="{{ route( 'modules.index' ) }}" style="color: #222;"><i class="fa fa-sitemap"></i> Módulos</a>
                    </div>
                    <div class="panel-body">
                        <p>Here you can register modules of system</p>
                    </div>
                    <div class="panel-footer">
                        Total - 2
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="{{ route( 'modules.index' ) }}" style="color: #222;"><i class="fa fa-users"></i> Groups</a>
                    </div>
                    <div class="panel-body">
                        <p>Here you can register groups to control permission in system</p>
                    </div>
                    <div class="panel-footer">
                        Total - 2
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
@endsection
