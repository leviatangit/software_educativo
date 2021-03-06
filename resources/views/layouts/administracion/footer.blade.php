    </div>

    <!-- /#wrapper -->
    <!-- Toast -->    
    <script src="{{ url('js/jquery.js') }}"></script>
    <!-- jQuery -->
    <script src="{{ url('js/jquery.toast.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ url('js/bootstrap.js') }}"></script>    
    <!-- Menu Plugin JavaScript -->
    <script src="{{ url('js/sidebar-nav.js') }}"></script>    
    <!--slimscroll JavaScript -->
    <script src="{{ url('js/jquery.slimscroll.js ') }}"></script>
    <!--Wave Effects -->
    <script src="{{ url('js/waves.js') }}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{ url('js/administracion.js') }}"></script>
    @if( session()->has('notificacion') )
    <?php $notificacion = session('notificacion'); ?>
    <script type="text/javascript">
    $.toast({
         heading: "{{ $notificacion['header'] }}",
         text: "{{ $notificacion['text'] }}",
         position: 'top-right',
         loaderBg: '#fff',
         icon: "{{ $notificacion['tipo'] }}",
         hideAfter: 6500,
         stack: 6
    })
    </script>
    @endif

    @yield('js')
</body>
</html>