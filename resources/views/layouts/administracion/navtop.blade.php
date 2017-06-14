<!-- ============================================================== -->
<!-- Topbar header - style you can find in pages.scss -->
<!-- ============================================================== -->
<nav class="navbar navbar-default navbar-static-top m-b-0">
    <div class="navbar-header">
        <div class="top-left-part">
        <span class="logo__" style="font-size:2em; text-align: center"> E.T.I.J.A </span>
            <!-- Logo -->
            <a class="logo" href="#" style="visibility: hidden;">
                <!-- Logo icon image, you can use font-icon also --><b>
                <!--This is dark logo icon--><img src="../plugins/images/admin-logo.png" alt="home" class="dark-logo" /><!--This is light logo icon--><img src="../plugins/images/admin-logo-dark.png" alt="home" class="light-logo" />
             </b>
                <!-- Logo text image you can use text also --><span class="hidden-xs">
                <!--This is dark logo text--><img src="../plugins/images/admin-text.png" alt="home" class="dark-logo" /><!--This is light logo text--><img src="../plugins/images/admin-text-dark.png" alt="home" class="light-logo" />
             </span> </a>
        </div>
        <!-- /Logo -->
        <ul class="nav navbar-top-links navbar-right pull-right">
            <!--<li>
                <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                    <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
            </li>-->
            <li>
                <a class="profile-pic dropdown-toggle"  href="javascript:;" data-toggle="dropdown" aria-expanded="true"> <span class="fa fa-user"></span> <b class="hidden-xs"> {{ Auth::user()->fullName() }} </b></a>
                <ul class="dropdown-menu dropdown-usermenu pull-right">
                  <li> <a href="#" onclick="document.getElementById('logout').submit()"> <i class="fa fa-sign-out pull-right"></i>  <span>Salir </span>  </a> <form style="display:none" action="{{ url('logout') }}" id="logout" method="POST">
                  {{ csrf_field() }} {{ method_field('post') }} </form> </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- /.navbar-header -->
    <!-- /.navbar-top-links -->
    <!-- /.navbar-static-side -->
</nav>
<!-- End Top Navigation -->

