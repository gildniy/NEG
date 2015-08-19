<script src="{{elixir('js/all.js')}}"></script>
<script src="{{asset('js/bootstrap-select.js')}}"></script>
{!! Theme::asset()->container('footer')->scripts() !!}
<script type="text/javascript">
    $(document).ready(function () {
        $('.selectpicker').selectpicker();
        $('.confirmation').confirmation();
        $('.tolltip').tooltip();
    });
</script>