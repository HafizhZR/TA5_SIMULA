<!DOCTYPE html>
<html lang="en">

@include('layouts.css')

<body id="page-top">

    <div id="wrapper">

        @include('layouts.sidebar')

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">

                @include('layouts.navbar')

                <div class="container-fluid">

                    @yield('content')
                </div>

            </div>

            @include('layouts.footer')

        </div>
    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    @include('layouts.js')

    @yield('script')

</body>

</html>
