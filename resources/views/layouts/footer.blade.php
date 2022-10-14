<footer>
    <section id="pos_footer">
    @yield('footer_content')
    </section>

        <script src="{{ URL::asset('/plugins/jquery/jquery.min.js') }}"></script>
        <script src="{{ URL::asset('/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ URL::asset('/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ URL::asset('/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        @yield('footer_script')
        @auth
    <script src="{{ URL::asset('/js/bootstrap-switch.js') }}"></script>


    @endauth
        <script src="{{ URL::asset('/js/sidebar.js') }}"></script>
        <script src="{{ URL::asset('/js/custom.js') }}"></script>
        <script>

        </script>
    </footer>