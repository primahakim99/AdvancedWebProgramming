<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.partials.head')
    </head>
    <body>
        <div id="page">
            <!---header top---->
            @include('layouts.partials.headerTop')
            <!--header--->
            <header class="header-container">
                @include('layouts.partials.header')
            </header>


            <!--end-->
            @yield('content')

            <!---footer--->
            <footer>
                @include('layouts.partials.footer')
            </footer>

            <!--back to top--->
            <a style="display: none;" href="assets/javascript:void(0);" class="scrollTop back-to-top" id="back-to-top">
                <span><i aria-hidden="true" class="fa fa-angle-up fa-lg"></i></span>
                <span>Top</span>
            </a>

        </div>
    </body>
</html>
