<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="shortcut icon" href="img/favicon.png">

    <title>Form Component | Creative - Bootstrap 3 Responsive Admin Template</title>

        {!! HTML::style('css/bootstrap.min.css') !!}
        <!-- bootstrap theme -->
        {!! HTML::style('css/bootstrap-theme.css') !!}
        <!--external css-->
        <!-- font icon -->
        {!! HTML::style('css/elegant-icons-style.css') !!}
        {!! HTML::style('css/font-awesome.min.css') !!}
         <!-- full calendar css-->
        {!! HTML::style('css/fullcalendar/fullcalendar/bootstrap-fullcalendar.css') !!}
        {!! HTML::style('css/fullcalendar/fullcalendar/fullcalendar.css') !!}
        <!-- easy pie chart-->
        {!! HTML::style('css/jquery-easy-pie-chart/jquery.easy-pie-chart.css') !!}
        <!-- owl carousel -->
        {!! HTML::style('css/owl.carousel.css') !!}
        {!! HTML::style('css/jquery-jvectormap-1.2.2.css') !!}
        <!-- Custom styles -->
        {!! HTML::style('css/fullcalendar.css') !!}
        {!! HTML::style('css/widgets.css') !!}
        {!! HTML::style('css/style.css') !!}
        {!! HTML::style('css/style-responsive.css') !!}
        {!! HTML::style('css/xcharts.min.css') !!}
        {!! HTML::style('css/jquery-ui-1.10.4.min.css') !!}
        <!--kendo css-->
        {!! HTML::style('kendoui/styles/kendo.silver.min.css') !!}
        {!! HTML::style('kendoui/styles/kendo.common-bootstrap.min.css') !!}
        {!! HTML::style('kendoui/styles/kendo.dataviz.min.css') !!}
        {!! HTML::style('kendoui/styles/kendo.dataviz.bootstrap.min.css') !!}
        {!! HTML::style('kendoui/styles/kendo.ez.css') !!}

        <!--sweetalert2 css-->
        {!! HTML::style('sweetalert/sweetalert2.min.css') !!}
    </head>
    <body>
        <!-- container section start -->
        <section id="container" class="">
            <!--header start-->
            <header class="header dark-bg">
                <div class="toggle-nav">
                    <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
                </div>

                <!--logo start-->
                <a href="index.html" class="logo">Nice <span class="lite">Admin</span></a>
                <!--logo end-->

                <div class="nav search-row" id="top_menu">
                    <!--  search form start -->
                    <ul class="nav top-menu">
                        <li>
                            <form class="navbar-form">
                                <input class="form-control" placeholder="Search" type="text">
                            </form>
                        </li>
                    </ul>
                    <!--  search form end -->
                </div>

                <div class="top-nav notification-row">
                    <!-- notificatoin dropdown start-->
                    <ul class="nav pull-right top-menu">

                        <!-- task notificatoin start -->
                        <li id="task_notificatoin_bar" class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="icon-task-l"></i>
                                <span class="badge bg-important">5</span>
                            </a>
                            <ul class="dropdown-menu extended tasks-bar">
                                <div class="notify-arrow notify-arrow-blue"></div>
                                <li>
                                    <p class="blue">You have 5 pending tasks</p>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="task-info">
                                            <div class="desc">Design PSD </div>
                                            <div class="percent">90%</div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                                <span class="sr-only">90% Complete (success)</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="task-info">
                                            <div class="desc">
                                                Project 1
                                            </div>
                                            <div class="percent">30%</div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                                                <span class="sr-only">30% Complete (warning)</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="task-info">
                                            <div class="desc">Digital Marketing</div>
                                            <div class="percent">80%</div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                <span class="sr-only">80% Complete</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="task-info">
                                            <div class="desc">Logo Designing</div>
                                            <div class="percent">78%</div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%">
                                                <span class="sr-only">78% Complete (danger)</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="task-info">
                                            <div class="desc">Mobile App</div>
                                            <div class="percent">50%</div>
                                        </div>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar"  role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                                <span class="sr-only">50% Complete</span>
                                            </div>
                                        </div>

                                    </a>
                                </li>
                                <li class="external">
                                    <a href="#">See All Tasks</a>
                                </li>
                            </ul>
                        </li>
                        <!-- task notificatoin end -->
                        <!-- inbox notificatoin start-->
                        <li id="mail_notificatoin_bar" class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="icon-envelope-l"></i>
                                <span class="badge bg-important">5</span>
                            </a>
                            <ul class="dropdown-menu extended inbox">
                                <div class="notify-arrow notify-arrow-blue"></div>
                                <li>
                                    <p class="blue">You have 5 new messages</p>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="photo"><img alt="avatar" src="./img/avatar-mini.jpg"></span>
                                        <span class="subject">
                                        <span class="from">Greg  Martin</span>
                                        <span class="time">1 min</span>
                                        </span>
                                        <span class="message">
                                            I really like this admin panel.
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="photo"><img alt="avatar" src="./img/avatar-mini2.jpg"></span>
                                        <span class="subject">
                                        <span class="from">Bob   Mckenzie</span>
                                        <span class="time">5 mins</span>
                                        </span>
                                        <span class="message">
                                         Hi, What is next project plan?
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="photo"><img alt="avatar" src="./img/avatar-mini3.jpg"></span>
                                        <span class="subject">
                                        <span class="from">Phillip   Park</span>
                                        <span class="time">2 hrs</span>
                                        </span>
                                        <span class="message">
                                            I am like to buy this Admin Template.
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="photo"><img alt="avatar" src="./img/avatar-mini4.jpg"></span>
                                        <span class="subject">
                                        <span class="from">Ray   Munoz</span>
                                        <span class="time">1 day</span>
                                        </span>
                                        <span class="message">
                                            Icon fonts are great.
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">See all messages</a>
                                </li>
                            </ul>
                        </li>
                        <!-- inbox notificatoin end -->
                        <!-- alert notification start-->
                        <li id="alert_notificatoin_bar" class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                                <i class="icon-bell-l"></i>
                                <span class="badge bg-important">7</span>
                            </a>
                            <ul class="dropdown-menu extended notification">
                                <div class="notify-arrow notify-arrow-blue"></div>
                                <li>
                                    <p class="blue">You have 4 new notifications</p>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="label label-primary"><i class="icon_profile"></i></span>
                                        Friend Request
                                        <span class="small italic pull-right">5 mins</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="label label-warning"><i class="icon_pin"></i></span>
                                        John location.
                                        <span class="small italic pull-right">50 mins</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="label label-danger"><i class="icon_book_alt"></i></span>
                                        Project 3 Completed.
                                        <span class="small italic pull-right">1 hr</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="label label-success"><i class="icon_like"></i></span>
                                        Mick appreciated your work.
                                        <span class="small italic pull-right"> Today</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">See all notifications</a>
                                </li>
                            </ul>
                        </li>
                        <!-- alert notification end-->
                        <!-- user login dropdown start-->
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="profile-ava">
                                    <img alt="" src="img/avatar1_small.jpg">
                                </span>
                                <span class="username">Jenifer Smith</span>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu extended logout">
                                <div class="log-arrow-up"></div>
                                <li class="eborder-top">
                                    <a href="#"><i class="icon_profile"></i> My Profile</a>
                                </li>
                                <li>
                                    <a href="#"><i class="icon_mail_alt"></i> My Inbox</a>
                                </li>
                                <li>
                                    <a href="#"><i class="icon_clock_alt"></i> Timeline</a>
                                </li>
                                <li>
                                    <a href="#"><i class="icon_chat_alt"></i> Chats</a>
                                </li>
                                <li>
                                    <a href="login.html"><i class="icon_key_alt"></i> Log Out</a>
                                </li>
                                <li>
                                    <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
                                </li>
                                <li>
                                    <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
                                </li>
                            </ul>
                        </li>
                        <!-- user login dropdown end -->
                    </ul>
                    <!-- notificatoin dropdown end-->
                </div>
            </header>
            <!--header end-->

            <!--sidebar start-->
            @include('layouts.menu')
            <!--sidebar end-->

            <!--main content start-->
            <section id="main-content">
                <section class="wrapper">
                    @yield('content')
                </section>
            </section>

            <!-- container section start -->
            <section class="apx-loading">
                @include('layouts.loading')
            </section>
            <!--main content end-->
        </section>
        <!-- javascripts -->
        {!! HTML::script('js/jquery.js') !!}
        {!! HTML::script('js/jquery-ui-1.10.4.min.js') !!}
        {!! HTML::script('js/jquery-ui-1.9.2.custom.min.js') !!}
        <!-- bootstrap -->
        {!! HTML::script('js/bootstrap.min.js') !!}
        <!-- nice scroll -->
        {!! HTML::script('js/jquery.scrollTo.min.js') !!}
        {!! HTML::script('js/jquery.nicescroll.js') !!}
        <!-- charts scripts -->
        {!! HTML::script('js/jquery-knob/js/jquery.knob.js') !!}
        {!! HTML::script('js/jquery.sparkline.js') !!}
        {!! HTML::script('css/jquery-easy-pie-chart/jquery.easy-pie-chart.js') !!}
        {!! HTML::script('js/owl.carousel.js') !!}
        <!-- jQuery full calendar -->
        {!! HTML::script('js/fullcalendar.min.js') !!}
        {!! HTML::script('css/fullcalendar/fullcalendar/fullcalendar.js') !!}
        <!--script for this page only-->
        {!! HTML::script('js/calendar-custom.js') !!}
        {!! HTML::script('js/jquery.rateit.min.js') !!}
        <!-- custom select -->
        {!! HTML::script('js/jquery.customSelect.min.js') !!}
        {!! HTML::script('css/chart-master/Chart.js') !!}

        <!--custome script for all page-->
        {!! HTML::script('js/scripts.js') !!}
        <!-- custom script for this page-->
        {!! HTML::script('js/sparkline-chart.js') !!}
        {!! HTML::script('js/easy-pie-chart.js') !!}
        {!! HTML::script('js/jquery-jvectormap-1.2.2.min.js') !!}
        {!! HTML::script('js/jquery-jvectormap-world-mill-en.js') !!}
        {!! HTML::script('js/xcharts.min.js') !!}
        {!! HTML::script('js/jquery.autosize.min.js') !!}
        {!! HTML::script('js/jquery.placeholder.min.js') !!}
        {!! HTML::script('js/gdp-data.js') !!}
        {!! HTML::script('js/morris.min.js') !!}
        {!! HTML::script('js/sparklines.js') !!}
        {!! HTML::script('js/charts.js') !!}
        {!! HTML::script('js/jquery.slimscroll.min.js') !!}

        <!--kendo-->
        {!! HTML::script('kendoui/js/kendo.all.min.js') !!}

        <!--knockout-->
        {!! HTML::script('js/knockout-3.4.0.js') !!}
        {!! HTML::script('js/knockout.mapping.js') !!}
        {!! HTML::script('js/knockout-kendo.min.js') !!}
        <!--sweet alert-->
        {!! HTML::script('sweetalert/sweetalert2.js') !!}

        <!-- moment -->
        {!! HTML::script('js/moment.min.js') !!}

    @yield('script')
  <script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })
        /*
      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
    /*$(function(){
      $('#map').vectorMap({
        map: 'world_mill_en',
        series: {
          regions: [{
            values: gdpData,
            scale: ['#000', '#000'],
            normalizeFunction: 'polynomial'
          }]
        },
        backgroundColor: '#eef3f7',
        onLabelShow: function(e, el, code){
          el.html(el.html()+' (GDP - '+gdpData[code]+')');
        }
      });
    });*/
  </script>

  </body>
</html>
