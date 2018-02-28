<!-- Javascript files-->
<script src="{{URL::to('assets/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{URL::to('assets/vendor/popper.js/umd/popper.min.js')}}"> </script>
<script src="{{URL::to('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{URL::to('assets/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
<script src="{{URL::to('assets/vendor/chart.js/Chart.min.js')}}"></script>
<script src="{{URL::to('assets/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{URL::to('assets/js/charts-home.js')}}"></script>
<script src="{{URL::to('assets/js/html5shiv.min.js')}}"></script>
<script src="{{URL::to('assets/js/respond.min.js')}}"></script>
<script src="{{URL::to('assets/js/charts-custom.js')}}"></script>



<!-- Main File-->
<script src="{{URL::to('assets/js/front.js')}}"></script>
<script>
    $(".flash-alert").fadeTo(2000, 500).slideUp(500, function(){
        $("#success-alert").slideUp(500);
    });
</script>


