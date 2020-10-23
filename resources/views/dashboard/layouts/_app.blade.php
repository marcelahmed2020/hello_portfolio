@include('dashboard.layouts._head')
@include('dashboard.layouts._aside')
@include('partials._errors')
<div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">
    @include('dashboard.layouts._nav')
    <!-- Begin Page Content -->
        <div class="container-fluid">
           @yield('content')


        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright © Your Website 2020</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

</div>

@include('dashboard.layouts._footer')
