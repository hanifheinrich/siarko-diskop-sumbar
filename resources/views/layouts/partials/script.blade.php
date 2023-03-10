    <!-- Required Jquery -->
    <script type="text/javascript" src={{ asset('/assets/js/jquery/jquery.min.js') }}></script>
    <script type="text/javascript" src={{ asset('/assets/js/popper.js/popper.min.js') }}></script>
    <script type="text/javascript" src={{ asset('/assets/js/bootstrap/js/bootstrap.min.js') }}></script>
    <script type="text/javascript" src={{ asset('/assets/pages/widget/excanvas.js') }}></script>
    <!-- waves js -->
    <script src={{ asset('/assets/pages/waves/js/waves.min.js') }}></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src={{ asset('/assets/js/jquery-slimscroll/jquery.slimscroll.js') }}></script>
    <!-- modernizr js -->
    <script type="text/javascript" src={{ asset('/assets/js/modernizr/modernizr.js') }}></script>
    <!-- slimscroll js -->
    <script type="text/javascript" src={{ asset('/assets/js/SmoothScroll.js') }}></script>
    <script src={{ asset('/assets/js/jquery.mCustomScrollbar.concat.min.js') }}></script>
    <!-- Chart js -->
    <script type="text/javascript" src={{ asset('/assets/js/chart.js/Chart.js') }}></script>
    <!-- amchart js -->
    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src={{ asset('/assets/pages/widget/amchart/gauge.js') }}></script>
    <script src={{ asset('/assets/pages/widget/amchart/serial.js') }}></script>
    <script src={{ asset('/assets/pages/widget/amchart/light.js') }}></script>
    <script src={{ asset('/assets/pages/widget/amchart/pie.min.js') }}></script>
    <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
    <!-- menu js -->
    <script src={{ asset('/assets/js/pcoded.min.js') }}></script>
    <script src={{ asset('/assets/js/vertical-layout.min.js') }}></script>
    <!-- custom js -->
    <script type="text/javascript" src={{ asset('assets/pages/dashboard/custom-dashboard.js') }}></script>
    <script type="text/javascript" src={{ asset('assets/js/script.js') }}></script>
    <!-- Datatables -->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.13.1/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    @yield('script')
    @yield('footer')
