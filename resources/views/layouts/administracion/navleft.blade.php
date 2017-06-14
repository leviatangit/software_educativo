<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav slimscrollsidebar">
        <div class="sidebar-head">
            <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
        </div>

        <ul class="nav" id="side-menu">

            <li style="padding: 70px 0 0;">  <a href="{{ url('dashboard') }}" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Dashboard</a>  </li>

            <li> <a href="{{ route('years.index') }}" class="waves-effect"><i class="fa fa-calendar fa-fw" aria-hidden="true"></i> Años Academico </a> </li>

            <li> <a href="{{ route('users.index') }}" class="waves-effect"><i class="fa fa-users fa-fw" aria-hidden="true"></i> Usuarios </a> </li>

            <li> <a href="{{ route('modulos.index') }}" class="waves-effect"><i class="fa  fa-file-text-o fa-fw" aria-hidden="true"></i> Modulos </a> </li>            

            <li> <a href="{{ route('config.index') }}" class="waves-effect"><i class="fa fa-gears fa-fw" aria-hidden="true"></i> Configuraciòn </a> </li>     

        </ul>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Left Sidebar -->
<!-- ============================================================== -->