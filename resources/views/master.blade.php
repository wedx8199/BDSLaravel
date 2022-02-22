<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    
<base href="{{asset(' ')}}"/>
    <link href="source/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="source/css/sb-admin-2.min.css" rel="stylesheet">

    <link href="source/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->

        @include('sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->

                @include('header')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->

                @yield('content')
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{route('logout')}}">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="source/vendor/jquery/jquery.min.js"></script>
    <script src="source/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="source/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="source/js/sb-admin-2.min.js"></script>

    <script src="source/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="source/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="source/js/demo/datatables-demo.js"></script>

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