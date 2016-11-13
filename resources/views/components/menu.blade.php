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
                <a href="{{ route( 'doctors.index' ) }}"><i class="fa fa-bar-chart-o fa-fw"></i> Doctors</a>
            </li>
            <li>
                <a href="{{ route( 'patients.index' ) }}"><i class="fa fa-files-o fa-fw"></i> Patients</a>
            </li>
            <li>
                <a href="{{ route( 'convenios.index' ) }}"><i class="fa fa-files-o fa-fw"></i> Convenios</a>
            </li>
            <li>
                <a href="{{ route( 'segments.index' ) }}"><i class="fa fa-files-o fa-fw"></i> Segments</a>
            </li>
            <li>
                <a href="{{ route( 'professions.index' ) }}"><i class="fa fa-files-o fa-fw"></i> Professions</a>
            </li>
            <li>
                <a href="{{ route( 'services.index' ) }}"><i class="fa fa-files-o fa-fw"></i> Services</a>
            </li>
            <li>
                <a href="{{ route( 'medicines.index' ) }}"><i class="fa fa-files-o fa-fw"></i> Medicines</a>
            </li>
            <li>
                <a href="{{ route( 'payments.index' ) }}"><i class="fa fa-files-o fa-fw"></i> Payments</a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>