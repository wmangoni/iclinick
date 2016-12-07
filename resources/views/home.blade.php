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
                @foreach($counts as $key => $value)
                <div class="col-lg-4">
                    <div class="panel panel-{{ $value['class'] }}">
                        <div class="panel-heading">
                            <a href="{{ route( $key.'.index' ) }}" style="color: #222;"><i class="fa fa-{{ $value['icon'] }} fa-fw"></i> {{ studly_case($key) }}</a>
                        </div>
                        <div class="panel-body">
                            <p>Total number of {{ studly_case($key) }} that you have in your base.</p>
                        </div>
                        <div class="panel-footer">
                            Total - {{ $value['num'] }}
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            List of Convenios
                        </div>
                        <!-- .panel-heading -->
                        <div class="panel-body">
                            <div class="panel-group" id="accordion">
                                @foreach($convenios as $key => $value)
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $key }}">{{ $value->name }}</a>
                                        </h4>
                                    </div>
                                    <div id="collapse{{ $key }}" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            {{ $value->description }}
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- .panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                @if (isset($segments) && !empty($segments))
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Segments
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                @foreach($segments as $key => $value)
                                    @if($key == 0)
                                        <li class="active"><a href="#id{{ $key }}" data-toggle="tab">{{ $value->name }}</a></li>
                                    @else
                                        <li><a href="#id{{ $key }}" data-toggle="tab">{{ $value->name }}</a></li>
                                    @endif
                                @endforeach
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                @foreach($segments as $key => $value)
                                    @if($key == 0)
                                        <div class="tab-pane fade in active" id="id{{ $key }}">
                                    @else
                                        <div class="tab-pane fade" id="id{{ $key }}">
                                    @endif
                                        <h4>{{ $value->name }}</h4>
                                        <p>{{ $value->description }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
                @endif
                @if (isset($services) && !empty($services))
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Services
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-pills">
                                @foreach($services as $key => $value)
                                    @if($key == 0)
                                        <li class="active"><a href="#cod{{ $key }}" data-toggle="tab">{{ $value->name }}</a></li>
                                    @else
                                        <li><a href="#cod{{ $key }}" data-toggle="tab">{{ $value->name }}</a></li>
                                    @endif
                                @endforeach
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                @foreach($services as $key => $value)
                                    @if($key == 0)
                                        <div class="tab-pane fade in active" id="cod{{ $key }}">
                                    @else
                                        <div class="tab-pane fade" id="cod{{ $key }}">
                                    @endif
                                        <h4>{{ $value->name }}</h4>
                                        <p>{{ $value->description }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
                @endif
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="well">
                        <h4>Normal Well</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                    </div>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="well well-lg">
                        <h4>Large Well</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                    </div>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="well well-sm">
                        <h4>Small Well</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                    </div>
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
@endsection
