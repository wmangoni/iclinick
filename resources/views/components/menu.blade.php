<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="{{ route( 'home.index' ) }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="flot.html">Flot Charts</a></li>
                    <li><a href="morris.html">Morris.js Charts</a></li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li><a href="{{ route( 'doctors.index' ) }}"><i class="fa fa-table fa-fw"></i> Doctors</a></li>
            <li><a href="{{ route( 'patients.index' ) }}"><i class="fa fa-edit fa-fw"></i> Patients</a></li>
            <li>
                <a href="#"><i class="fa fa-files-o fa-fw"></i> Convenios<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{ route( 'convenios.index' ) }}">Listar</a></li>
                    <li><a href="{{ route( 'convenios.create' ) }}">Cadastrar</a></li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>