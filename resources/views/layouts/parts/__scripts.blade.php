    <!-- Javascript -->
    <script src="{{ asset('assets/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>


    @if (request()->routeIs('admin:home'))
        <!-- Charts JS -->
        <script src="{{ asset('assets/plugins/chart.js/chart.min.js') }}"></script>
        <script src="{{ asset('assets/js/index-charts.js') }}"></script>
    @endif


    <!-- Page Specific JS -->
    <script src="{{ asset('assets/js/app.js') }}"></script>
