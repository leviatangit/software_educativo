<!-- ============================================================== -->
<!-- Page Content -->
<!-- ============================================================== -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title"> @yield('titulo_pagina') </h4> </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">   
                <ol class="breadcrumb">  @yield('breadcrumb') </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row">
            @yield('contenido_pagina')
            <!-- <div class="col-md-12">
                <div class="white-box">
                    <h3 class="box-title"> </h3> </div>
            </div>
        </div> -->
        </div>
    <!-- /.container-fluid -->
    <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by wrappixel.com </footer>
</div>
<!-- ============================================================== -->
<!-- End Page Content -->
<!-- ============================================================== -->