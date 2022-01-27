<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{url('js/scripts.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="{{url('assets/demo/chart-area-demo.js')}}"></script>
<script src="{{url('assets/demo/chart-bar-demo.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="{{url('js/datatables-simple-demo.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="{{url('jquery.pjax.js')}}"></script>
<script>
    $(document).ready(()=> {
        $(document).pjax('a','#pjax');
    })
    $(document).on('pjax:complete', function() {
        $.getScript("https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js")
        $.getScript("{{url('js/scripts.js')}}")
        $.getScript("https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js")
        $.getScript("{{url('assets/demo/chart-area-demo.js')}}")
        $.getScript("{{url('assets/demo/chart-bar-demo.js')}}")
        $.getScript("https://cdn.jsdelivr.net/npm/simple-datatables@latest")
        $.getScript("{{url('js/datatables-simple-demo.js')}}")
        $.getScript("https://code.jquery.com/jquery-3.6.0.min.js")
        $.getScript( "{{url('jquery.pjax.js')}}")
    })
</script>
</body>
</html>
