<!-- Coding by CodingLab | www.codinglabweb.com -->
<!DOCTYPE html>
<html lang="en">
    @include('components.admin.header-component')
<body class="hold-transition light-skin sidebar-mini theme-primary fixed">


    <div class="wrapper">
        <div id="loader"></div>
        @include('components.admin.navbar-component')
        @include('components.admin.sidebar-component')
                <!-- Content Wrapper. Contains page content -->
                <div class="content-wrapper">
                    <div class="container-full">
                        <!-- Main content -->
                        @yield('content')
                        <!-- /. content -->
                    </div>
                </div>
                <!-- /.content-wrapper -->
                @include('components.admin.footer-component')
    </div>


 


    <!-- Vendor JS -->
    <script src="{{asset('admin_asset/js/vendors.min.js')}}"></script>
    <script src="{{asset('admin_asset/js/pages/chat-popup.js')}}"></script>
    <script src="{{asset('assets/icons/feather-icons/feather.min.js')}}"></script>

    <script src="{{asset('assets/vendor_components/jquery-knob/js/jquery.knob.js')}}"></script>
    <script src="{{asset('assets/vendor_components/apexcharts-bundle/dist/apexcharts.js')}}"></script>

    <!-- WebkitX Admin App -->
    <script src="{{asset('admin_asset/js/template.js')}}"></script>
    <script src="{{asset('admin_asset/js/pages/dashboard.js')}}"></script>
    <script src="{{asset('admin_asset/js/pages/datatables.min.js')}}"></script>
    <script src="{{asset('admin_asset/js/pages/data-table.js')}}"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    


</body>
</html>