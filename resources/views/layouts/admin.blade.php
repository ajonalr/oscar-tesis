<!DOCTYPE html>
<html dir="ltr" lang="es">

<head>

    <title>{{config('app.name')}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sobre Nosotros">
    <meta name="keywords" content="Dientes, Dentista, Boca, Clinica, huehuetenango, clinica huehuetenango, huehue, clinica">
    <meta name="author" content="DeCoDev Desarrollo de Software">
    <!-- Favicon icon -->

    <link rel="icon" href="{{asset('logos/ico.ico')}}" type="image/x-icon">

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href=" {{asset('assets/theme/css/bootstrap/css/bootstrap.min.css')}}">

    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/theme/css/icons/themify-icons/themify-icons.css')}}">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/theme/css/icons/icofont/css/icofont.css')}}">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/theme/css/icons/feather/css/feather.css')}}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/theme/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/theme/css/jquery.mCustomScrollbar.css')}}">

    <script  src="{{asset('assets/theme/js/fontaweson.js')}}" crossorigin="anonymous"></script>

    <link href="{{ asset('styles.css') }}" rel="stylesheet">

    @yield('styles')
</head>

<body>

    @include('partial.admin.preloader')

    <div id="pcoded" class="pcoded" nav-type="st5">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <!-- header -->
            @include('partial.admin.header')
            <!-- end hader -->


            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <!-- navbar -->
                    @include('partial.admin.navbar')
                    <!-- end navbar -->

                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">


                                @include('partial.includes.alerts')
                                    <!-- Page-body start -->
                                    <div class="page-body button-page">
                                    
                                    @yield('content')

                                    </div>
                                    <!-- Page-body end -->
                                </div>
                            </div>
                            <!-- Warning Section Starts -->

                            
                        </div>
                    </div>

                </div>
            </div>
            
            
        </div>
        @include('partial.admin.footer')
    </div>


    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script type="text/javascript" src="{{asset('assets/theme/js/jquery/js/jquery.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('assets/theme/js/jquery-ui/js/jquery-ui.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('assets/theme/js/popper.js/js/popper.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('assets/theme/js/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{asset('assets/theme/js/jquery-slimscroll/js/jquery.slimscroll.js')}}"></script>

    <!-- modernizr js -->
    <script type="text/javascript" src="{{asset('assets/theme/js/modernizr/js/modernizr.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/theme/js/modernizr/js/css-scrollbars.js')}}"></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="{{asset('assets/theme/js/i18next/js/i18next.min.js')}}"></script>
    <script type=" text/javascript" src="{{asset('assets/theme/js/i18next-xhr-backend/js/i18nextXHRBackend.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/theme/js/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/theme/js/jquery-i18next/js/jquery-i18next.min.js')}}"></script>

    <!-- Custom js -->

    <script src="{{asset('assets/theme/js/pcoded.min.js')}}"></script>
    <script src="{{asset('assets/theme/js/vartical-layout.min.js')}}"></script>
    <script src="{{asset('assets/theme/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>

    <!-- Custom js -->
    <script>
        $(document).ready(function() {
            $('[data-toggle="popover"]').popover({
                html: true,
                content: function() {
                    return $('#primary-popover-content').html();
                }
            });
        });
    </script>
    <script type="text/javascript" src="{{asset('assets/theme/js/script.js')}}"></script>

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>


    @yield('scripts')
</body>

</html>