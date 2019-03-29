<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ecommerce Admin Panel</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>


        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="">
                        <a href="{{url('adminDashboard')}}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard</a>
                    </li>
                    
                    </li>
                     
                    <li class="menu-item-has-children dropdown">
                        <a href="{{ url('getOrders') }}"   aria-expanded="false"> 
                            <i class="menu-icon fa fa-building"></i>
                            All Orders

                        </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="{{ url('getCategories') }}"   aria-expanded="false"> 
                            <i class="menu-icon fa fa-building"></i>
                            All Categories

                        </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="{{ url('getProducts') }}"   aria-expanded="false"> 
                            <i class="menu-icon fa fa-building"></i>
                            All Products

                        </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="{{ url('getSchedules') }}"   aria-expanded="false"> 
                            <i class="menu-icon fa fa-building"></i>
                            All Schedules

                        </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="{{ url('getSliders') }}"   aria-expanded="false"> 
                            <i class="menu-icon fa fa-building"></i>
                            All Sliders

                        </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="{{ url('getUsers') }}"   aria-expanded="false"> 
                            <i class="menu-icon fa fa-building"></i>
                            All Users

                        </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="{{ url('getUserBalance') }}"   aria-expanded="false"> 
                            <i class="menu-icon fa fa-building"></i>
                            User Balance

                        </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="{{ url('getAddBalance') }}"   aria-expanded="false"> 
                            <i class="menu-icon fa fa-building"></i>
                            Add Balance

                        </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="{{ url('getAddCategory') }}"   aria-expanded="false"> 
                            <i class="menu-icon fa fa-building"></i>
                            Add Categories

                        </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="{{ url('getAddSlider') }}"   aria-expanded="false"> 
                            <i class="menu-icon fa fa-building"></i>
                            Add Slider

                        </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="{{ url('getAddSchedule') }}"   aria-expanded="false"> 
                            <i class="menu-icon fa fa-building"></i>
                            Set Schedule

                        </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="{{ url('getAddUser') }}"   aria-expanded="false"> 
                            <i class="menu-icon fa fa-building"></i>
                            Add User

                        </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="{{ url('getAddProduct') }}"   aria-expanded="false"> 
                            <i class="menu-icon fa fa-building"></i>
                            Add Product

                        </a>
                    </li>
                    
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">

                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                                
                                <a class="nav-link" href="{{ url('adminLogout') }}"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->
        @yield('content')
        
        <div class="footer">

            <div class="pull-right">
               <!--  10GB of <strong>250GB</strong> Free. -->
            </div>
            <div>
                <!-- <strong>Copyright</strong> Example Company &copy; 2014-2017 -->
            </div>
        </div>
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>

</body>
</html>
