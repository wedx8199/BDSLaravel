<!DOCTYPE html>
<html lang="en">
  <head>
    <title>BDS Sài Gòn</title>
<base href="{{asset(' ')}}"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
    <link href="source/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="source2/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="source2/css/animate.css">
    <link rel="stylesheet" href="source2/css/owl.carousel.min.css">
    <link rel="stylesheet" href="source2/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="source2/css/magnific-popup.css">
    <link rel="stylesheet" href="source2/css/aos.css">
    <link rel="stylesheet" href="source2/css/ionicons.min.css">
    <link rel="stylesheet" href="source2/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="source2/css/jquery.timepicker.css">
	<link rel="stylesheet" href="source2/css/bootstrap/source2/css/bootstrap.css">
	<link rel="stylesheet" href="source2/css/bootstrap/source2/css/bootstrap.min.css">
    <link rel="stylesheet" href="source2/css/bootstrap/source2/css/bootstrap.css">
    <link rel="stylesheet" href="source2/css/flaticon.css">
    <link rel="stylesheet" href="source2/css/icomoon.css">
    <link rel="stylesheet" href="source2/css/style.css">
	<link rel="stylesheet" href="source2/css/Login.css">
  </head>
  <body>

<!-- Start header -->

@include('main.header')
<!-- END header -->



@yield('content')




<!-- footer -->
@include('main.footer')

<!-- end footer -->
  

  <!-- loader -->
  <!--<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>-->

  <script src="source2/css/bootstrap/js/bootstrap.js"></script> 	
  <script src="source2/js/jquery.min.js"></script>
  <script src="source2/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="source2/js/popper.min.js"></script>
  <script src="source2/js/bootstrap.min.js"></script>
  <script src="source2/js/jquery.easing.1.3.js"></script>
  <script src="source2/js/jquery.waypoints.min.js"></script>
  <script src="source2/js/jquery.stellar.min.js"></script>
  <script src="source2/js/owl.carousel.min.js"></script>
  <script src="source2/js/jquery.magnific-popup.min.js"></script>
  <script src="source2/js/aos.js"></script>
  <script src="source2/js/jquery.animateNumber.min.js"></script>
  <script src="source2/js/bootstrap-datepicker.js"></script>
  <script src="source2/css/bootstrap/js/bootstrap.js"></script>
  <script src="source2/css/bootstrap/js/bootstrap.min.js"></script>
  <script src="source2/js/jquery.timepicker.min.js"></script>
  <script src="source2/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="source2/js/google-map.js"></script>
  <script src="source2/js/main.js"></script>
  <script src="source2/js/Login.js"></script>  







     <script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>



<script type="text/javascript">
    jQuery(document).ready(function ()
{
    jQuery('select[name="country"]').on('change',function(){
        var countryID = jQuery(this).val();
        if(countryID)
        {
            jQuery.ajax({
                url : '/bdstest/public/getQuan/' +countryID,    //  /getQuan/
                type : "GET",
                dataType : "json",
                success:function(data)
                {
                    jQuery('select[name="state"]').empty();
                    $('select[name="state"]').prepend("<option value='' selected=''>Toàn Tỉnh/TP</option>");
                    jQuery.each(data, function(key,value){
                        $('select[name="state"]').append('<option value="'+ key +'">'+ value +'</option>');
                    });
                }
            });
        }
        else
        {
            $('select[name="state"]').empty();
        }
    });
});

</script>



<script type="text/javascript">
    jQuery(document).ready(function ()
{
    jQuery('select[name="city"]').on('change',function(){
        var cityID = jQuery(this).val();
        if(cityID)
        {
            jQuery.ajax({
                url : '/bdstest/public/getDist/' +  cityID,
                type : "GET",
                dataType : "json",
                success:function(data)
                {
                    jQuery('select[name="district"]').empty();
                    jQuery.each(data, function(key,value){
                        $('select[name="district"]').append('<option value="'+ key +'">'+ value +'</option>');
                    });
                }
            });
        }
        else
        {
            $('select[name="district"]').empty();
        }
    });
});

</script>




<!--<script type="text/javascript">
    function toggleTables(which)
{
    var isCustomize = document.getElementById('onl_1').checked; 
    var isStandard = document.getElementById('off_1').checked;
    
    var customize = document.getElementById('onl'); 
    var standard = document.getElementById('off');    
       
    customize.style.display = isCustomize  ? 'table' : 'none';
    standard.style.display = isStandard  ? 'table' : 'none';
}
</script>-->


<script type="text/javascript">
$(document).ready(function(){ 
    $("input[name='cars']").click(function() {
       
        var test = $(this).val();
        $(".desc").hide();
        $("#"+test).show();
    }); 
});
</script>






  
  </body>
</html>