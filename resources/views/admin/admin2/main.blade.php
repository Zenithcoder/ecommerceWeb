<!DOCTYPE html>
<html>    
    <head>
        <meta charset="utf-8">
        <title>@yield('title', 'Shawarma')</title>
        <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" href="{{asset('xnote/css/font.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('xnote/js/calendar/bootstrap_calendar.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('xnote/css/app.v1.css')}}" type="text/css">
        <!--[if lt IE 9]>
            <script src="js/ie/html5shiv.js"></script>
            <script src="js/ie/respond.min.js"></script>
            <script src="js/ie/excanvas.js"></script>
        <![endif]-->
    </head>
    
    <body class="">
        <section class="vbox">
            <header class="bg-dark dk header navbar navbar-fixed-top-xs">
                <div class="navbar-header aside-md">
                    <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open"
                    data-target="#nav,html"> <i class="fa fa-bars"></i> </a>
                    <a href="{{route('admin.index')}}" class="navbar-brand" data-toggle="fullscreen"><img src="{{asset('xnote/images/logo.png')}}" class="m-r-sm">Admin UI</a>
                    <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".nav-user"> <i class="fa fa-cog"></i> </a>
                </div>
                <ul class="nav navbar-nav hidden-xs">
                  
                </ul>
                <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user">
                    <li class="hidden-xs">
                        <a href="#" class="dropdown-toggle dk" data-toggle="dropdown"> <i class="fa fa-adn"></i> <span class="badge badge-sm up bg-danger m-l-n-sm count">2</span> </a>
                        <section class="dropdown-menu aside-xl">
                            <section class="panel bg-white">
                                <header class="panel-heading b-light bg-light">
                                    <strong>You have
                                        <span class="count">2</span>notifications</strong>
                                </header>
                                <div class="list-group list-group-alt animated fadeInRight">
                                    <a href="#" class="media list-group-item"> <span class="pull-left thumb-sm"> <img src="{{asset('xnote/images/avatar.jpg')}}" alt="John said" class="img-circle"> </span> <span class="media-body block m-b-none"> Use awesome animate.css<br> <small class="text-muted">10 minutes ago</small> </span> </a>
                                    <a href="#" class="media list-group-item"> <span class="media-body block m-b-none"> 1.0 initial released<br> <small class="text-muted">1 hour ago</small> </span> </a>
                                </div>
                                <footer class="panel-footer text-sm">
                                    <a href="#" class="pull-right"><i class="fa fa-cog"></i></a>
                                    <a href="#notes" data-toggle="class:show animated fadeInRight">See all the notifications</a>
                                </footer>
                            </section>
                        </section>
                    </li>
                    <li class="dropdown hidden-xs">
                        <a href="#" class="dropdown-toggle dker" data-toggle="dropdown"><i class="fa fa-fw fa-search"></i></a>
                        <section class="dropdown-menu aside-xl animated fadeInUp">
                            <section class="panel bg-white">
                                <form role="search">
                                    <div class="form-group wrapper m-b-none">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search">
                                            <span class="input-group-btn">
                                                <button type="submit" class="btn btn-info btn-icon">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                </form>
                            </section>
                        </section>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="thumb-sm avatar pull-left"> <img src="{{asset('xnote/images/avatar.jpg')}}"> </span> {{Auth::user()->name}} <b class="caret"></b> </a>
                        <ul class="dropdown-menu animated fadeInRight">
                            <span class="arrow top"></span>
                            
                            <li>
                                <a href="profile.html">Profile</a>
                            </li>
                            
                            <li>
                                <a href="docs.html">Help</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="{{route('user.logout')}}" data-toggle="ajaxModal">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </header>
            <section>
                <section class="hbox stretch">
                    <!-- .aside -->
                    <aside class="bg-dark lter aside-md hidden-print hidden-xs" id="nav">
                        <section class="vbox">
                            <header class="header bg-primary lter text-center clearfix">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-dark btn-icon" title="New project">
                                        <i class="fa fa-newspaper-o"></i>
                                    </button> 
                                </div>
                            </header>
                            <section class="w-f scrollable">
                                <div class="slim-scroll" data-height="auto" data-disable-fade-out="true"
                                data-distance="0" data-size="5px" data-color="#333333">
                                    <!-- nav -->
                                    <nav class="nav-primary hidden-xs">
                                        <ul class="nav">
                                            <li class="active">
                                                <a href="{{route('admin.index')}}" class="active"> <i class="fa fa-dashboard icon"> <b class="bg-danger"></b> </i> <span class="pull-right"> <i class="fa fa-angle-down text"></i> <i class="fa fa-angle-up text-active"></i> </span> <span>Dashboard</span> </a>
                                                <ul class="nav lt">
                                                    <li class="active">
                                                        <a href="{{url('/')}}" class="active"> <i class="fa fa-angle-right"></i> <span>FrontEnd</span> </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#layout"> <i class="fa fa-columns icon"> <b class="bg-warning"></b> </i> <span class="pull-right"> <i class="fa fa-angle-down text"></i> <i class="fa fa-angle-up text-active"></i> </span> <span>Category</span> </a>
                                                <ul class="nav lt">
                                                    <li>
                                                        <a href="{{route('category.index')}}"> <i class="fa fa-angle-right"></i> <span>Add Category</span> </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#uikit"> <i class="fa fa-flask icon"> <b class="bg-success"></b> </i> <span class="pull-right"> <i class="fa fa-angle-down text"></i> <i class="fa fa-angle-up text-active"></i> </span> <span>Orders</span> </a>
                                                <ul class="nav lt">
                                                    <li>
                                                        <a href="{{url('admin/orders/pending')}}"> <i class="fa fa-angle-right"></i> <span>Pending Orders</span> </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{url('admin/orders/delivered')}}"> <b class="badge bg-info pull-right">369</b> <i class="fa fa-angle-right"></i> <span>Delivered Orders</span> </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{url('admin/orders')}}"> <i class="fa fa-angle-right"></i> <span>All Orders</span> </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#pages"> <i class="fa fa-file-text icon"> <b class="bg-primary"></b> </i> <span class="pull-right"> <i class="fa fa-angle-down text"></i> <i class="fa fa-angle-up text-active"></i> </span> <span>Products</span> </a>
                                                <ul class="nav lt">
                                                    <li>
                                                        <a href="{{route('product.index')}}"> <i class="fa fa-angle-right"></i> <span>Products</span> </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('product.create')}}"> <i class="fa fa-angle-right"></i> <span>Add Products</span> </a>
                                                    </li>
                                                   
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                    <!-- / nav -->
                                </div>
                            </section>
                            <footer class="footer lt hidden-xs b-t b-dark">
                                <div id="chat" class="dropup">
                                    <section class="dropdown-menu on aside-md m-l-n">
                                        <section class="panel bg-white">
                                            <header class="panel-heading b-b b-light">Active chats</header>
                                            <div class="panel-body animated fadeInRight">
                                                <p class="text-sm">No active chats.</p>
                                                <p>
                                                    <a href="#" class="btn btn-sm btn-default">Start a chat</a>
                                                </p>
                                            </div>
                                        </section>
                                    </section>
                                </div>
                                <div id="invite" class="dropup">
                                    <section class="dropdown-menu on aside-md m-l-n">
                                        <section class="panel bg-white">
                                            <header class="panel-heading b-b b-light">John
                                                <i class="fa fa-circle text-success"></i>
                                            </header>
                                            <div class="panel-body animated fadeInRight">
                                                <p class="text-sm">No contacts in your lists.</p>
                                                <p>
                                                    <a href="#" class="btn btn-sm btn-facebook"><i class="fa fa-fw fa-facebook"></i> Invite from Facebook</a>
                                                </p>
                                            </div>
                                        </section>
                                    </section>
                                </div>
                                <a href="#nav" data-toggle="class:nav-xs" class="pull-right btn btn-sm btn-dark btn-icon"> <i class="fa fa-angle-left text"></i> <i class="fa fa-angle-right text-active"></i> </a>
                               
                            </footer>
                        </section>
                    </aside>
                    <!-- /.aside -->
                    @yield('content')
                    <aside class="bg-light lter b-l aside-md hide" id="notes">
                        <div class="wrapper">Notification</div>
                    </aside>
                </section>
            </section>
        </section>
        <!-- Bootstrap -->
        <!-- App -->
        @yield('js')
        <script src="{{asset('xnote/js/app.v1.js')}}"></script>
        <script src="{{asset('xnote/js/charts/easypiechart/jquery.easy-pie-chart.js')}}"></script>
        <script src="{{asset('xnote/js/charts/sparkline/jquery.sparkline.min.js')}}"></script>
        <script src="{{asset('xnote/js/charts/flot/jquery.flot.min.js')}}"></script>
        <script src="{{asset('xnote/js/charts/flot/jquery.flot.tooltip.min.js')}}"></script>
        <script src="{{asset('xnote/js/charts/flot/jquery.flot.resize.js')}}"></script>
        <script src="{{asset('xnote/js/charts/flot/jquery.flot.grow.js')}}"></script>
        <script src="{{asset('xnote/js/charts/flot/demo.js')}}"></script>
        <script src="{{asset('xnote/js/calendar/bootstrap_calendar.js')}}"></script>
        <script src="{{asset('xnote/js/calendar/demo.js')}}"></script>
        <script src="{{asset('xnote/js/sortable/jquery.sortable.js')}}"></script>
        <script src="{{asset('xnote/js/app.plugin.js')}}"></script>
    </body>
</html>