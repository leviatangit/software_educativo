
</div> <!-- /container-fluid -->

<script type="text/javascript" src="{{ url('js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ url('js/bootstrap.js') }}"></script>
<script src="{{ url('js/jquery.toast.js') }}"></script>
<script type="text/javascript" src="{{ url('js/app.js') }}"></script>
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
</body>
</hmtl>
@yield('librerias_js')

