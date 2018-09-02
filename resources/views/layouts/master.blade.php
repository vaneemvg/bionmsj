<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('title','Default') | Bion Messages</title>

    <!--STYLESHEET-->
    <!--=================================================-->

    <!--Open Sans Font [ OPTIONAL ]
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=latin" rel="stylesheet">-->

    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="{{asset('css/nifty.min.css')}}" rel="stylesheet">

<!--Pace - Page Load Progress Par [OPTIONAL]
    <link href="{{asset('css/pace.min.css')}}" rel="stylesheet">-->

    <!--Premium Icons [ OPTIONAL ]-->
    <link href="{{asset('images/icons/line-icons/premium-line-icons.min.css')}}" rel="stylesheet">

    <!--Dropzone [ OPTIONAL ]-->
    <link href="{{asset('plugins/dropzone/dropzone.min.css')}}" rel="stylesheet">

    <!--FooTable [ OPTIONAL ]-->
    <link href="{{asset('plugins/fooTable/footable.core.min.css')}}" rel="stylesheet">


    <!--=================================================-->

</head>


<body>
<div id="container" class="effect aside-float aside-bright mainnav-lg">

    <!--NAVBAR-->
    <!--===================================================-->
    <header id="navbar">
        <div id="navbar-container" class="boxed">

            <!--Brand logo & name-->
            <!--================================-->
            <div class="navbar-header">
                <a href="{{ url('/') }}" class="navbar-brand">
                    <img src="{{asset('images/icons_msj_bion.png')}}" alt="Bion Messages" class="brand-icon">

                    <div class="brand-title">
                        <span class="brand-text"> BionMessages</span>
                    </div>
                </a>
            </div>
            <!--================================-->
            <!--End brand logo & name-->


            <!--Navbar Dropdown-->
            <!--================================-->
            <div class="navbar-content clearfix">
                <ul class="nav navbar-top-links">

                    <!--Navigation toogle button-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <li class="tgl-menu-btn">
                        <a class="mainnav-toggle" href="#">
                            <i class="pli-list-view icon-lg"></i>
                        </a>
                    </li>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End Navigation toogle button-->


                    <!--Search-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <li>
                        <div class="custom-search-form">
                            <label class="btn btn-trans" for="search-input" data-toggle="collapse"
                                   data-target="#nav-searchbox">
                                <i class="pli-magnifi-glass"></i>
                            </label>
                            <!--<form>
                                <div class="search-container collapse" id="nav-searchbox">
                                    <input id="search-input" type="text" class="form-control" placeholder="Type for search...">
                                </div>
                            </form>-->
                        </div>
                    </li>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End Search-->


                </ul>
                <ul class="nav navbar-top-links">
                    <img width="200px" src="{{asset('images/logo.png')}}" alt="Bion Messages">

                </ul>
            </div>
            <!--================================-->
            <!--End Navbar Dropdown-->

        </div>
    </header>
    <!--===================================================-->
    <!--END NAVBAR-->

    <div class="boxed">

        <!--CONTENT CONTAINER-->
        <!--===================================================-->
        <div id="content-container">
            <div id="page-head">

                <!--Page Title-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <div id="page-title">
                    <h1 class="page-header text-overflow">@yield('title','Default')</h1>
                </div>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End page title-->


            </div>


            <!--Page content-->
            <!--===================================================-->
            <div id="page-content">

                <hr class="new-section-sm bord-no">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="panel panel-body">

                            <div class="panel-body">@include('flash::message')@yield('content')</div>

                        </div>
                    </div>
                </div>

            </div>


        </div>
        <!--===================================================-->
        <!--END CONTENT CONTAINER-->


        <!--MAIN NAVIGATION-->
        <!--===================================================-->
        <nav id="mainnav-container">
            <div id="mainnav">


                <!--OPTIONAL : ADD YOUR LOGO TO THE NAVIGATION-->
                <!--It will only appear on small screen devices.-->
                <!--================================
                <div class="mainnav-brand">
                    <a href="index.html" class="brand">
                        <img src="img/logo.png" alt="Nifty Logo" class="brand-icon">
                        <span class="brand-text">Nifty</span>
                    </a>
                    <a href="#" class="mainnav-toggle"><i class="pci-cross pci-circle icon-lg"></i></a>
                </div>
                -->


                <!--Menu-->
                <!--================================-->
                <div id="mainnav-menu-wrap">
                    <div class="nano">
                        <div class="nano-content">

                            <!--Profile Widget-->
                            <!--================================-->
                            <div id="mainnav-profile" class="mainnav-profile">
                                <div class="profile-wrap text-center">
                                    <div class="pad-btm">
                                        <img class="img-circle img-md" src=@yield('useravatar')
                                                alt="Profile Picture">
                                    </div>

                                    <p class="mnp-name">@yield('username')</p>
                                    <span class="mnp-desc">@yield('usermail')</span>

                                </div>

                            </div>


                            <!--Shortcut buttons-->
                            <!--================================-->
                            <div id="mainnav-shortcut">
                                <ul class="list-unstyled shortcut-wrap">
                                    <li class="col-xs-3" data-content="Home">
                                        <a class="shortcut-grid" href="{{ url('/')}}">
                                            <div class="icon-wrap icon-wrap-sm icon-circle bg-purple">
                                                <i class="pli-home"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="col-xs-3" data-content="Mi perfil">
                                        <a class="shortcut-grid" href="{{ url('/profile')}}">
                                            <div class="icon-wrap icon-wrap-sm icon-circle bg-success">
                                                <i class="pli-male"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="col-xs-3" data-content="Configuración">
                                        <a class="shortcut-grid" href="{{ url('/config')}}">
                                            <div class="icon-wrap icon-wrap-sm icon-circle bg-warning">
                                                <i class="pli-gear"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="col-xs-3" data-content="Salir">
                                        <a class="shortcut-grid" href="#">
                                            <div class="icon-wrap icon-wrap-sm icon-circle bg-mint">
                                                <i class="pli-lock-2"></i>
                                            </div>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                            <!--================================-->
                            <!--End shortcut buttons-->

                            @yield('listaction')

                        </div>
                    </div>
                </div>
                <!--================================-->
                <!--End menu-->

            </div>
        </nav>
        <!--===================================================-->
        <!--END MAIN NAVIGATION-->


    </div>


    <!-- FOOTER -->
    <!--===================================================-->
    <footer id="footer">

        <!-- Visible when footer positions are fixed -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <div class="show-fixed pad-rgt pull-right">
            You have <a href="#" class="text-main"><span class="badge badge-danger">3</span> pending action.</a>
        </div>


        <!-- Visible when footer positions are static -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <div class="hide-fixed pull-right pad-rgt">
            <p class="pad-lft">&#0169; 2018 By Rabbit</p>
        </div>


    </footer>
    <!--===================================================-->
    <!-- END FOOTER -->


    <!-- SCROLL PAGE BUTTON -->
    <!--===================================================-->
    <button class="scroll-top btn">
        <i class="pci-chevron chevron-up"></i>
    </button>
    <!--===================================================-->
</div>
<!--===================================================-->
<!-- END OF CONTAINER -->


<!--JAVASCRIPT-->
<!--=================================================-->

<!--jQuery [ REQUIRED ]-->
<script src="{{asset('js/jquery.min.js')}}"></script>

<!--Nifty Admin [ RECOMMENDED ]-->
<script src="{{asset('js/nifty.min.js')}}"></script>

<!--FooTable Tablas-->
<script src="{{asset('plugins/fooTable/tables-footable.js')}}"></script>

<!--FooTable [ OPTIONAL ]-->
<script src="{{asset('plugins/fooTable/footable.all.min.js')}}"></script>

<!--Bootstrap Datepicker [ OPTIONAL ]-->
<script src="{{asset('plugins/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>

<!--Bootstrap Tags Input -->
<script src="{{asset('plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js')}}"></script>

<!--Bootstrap Validator [ OPTIONAL ]-->
<script src="{{asset('plugins/bootstrap-validator/bootstrapValidator.min.js')}}"></script>

<!--Unite Gallery [ OPTIONAL ]-->
<script src="{{asset('plugins/unitegallery/js/unitegallery.min.js')}}"></script>
<script src="{{asset('plugins/unitegallery/js/ug-theme-carousel.js')}}"></script>

<!--BootstrapJS [ RECOMMENDED ]-->
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<!--Form Wizard [ SAMPLE ]-->
<script src="{{asset('js/form-wizard.js')}}"></script>

<!--Bootstrap Wizard [ OPTIONAL ]-->
<script src="{{asset('plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js')}}"></script>


</body>

</html>


