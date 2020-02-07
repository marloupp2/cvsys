<style>
    table.dataTable thead .sorting:after,
table.dataTable thead .sorting:before,
table.dataTable thead .sorting_asc:after,
table.dataTable thead .sorting_asc:before,
table.dataTable thead .sorting_asc_disabled:after,
table.dataTable thead .sorting_asc_disabled:before,
table.dataTable thead .sorting_desc:after,
table.dataTable thead .sorting_desc:before,
table.dataTable thead .sorting_desc_disabled:after,
table.dataTable thead .sorting_desc_disabled:before {
bottom: .5em;
}
</style>
<!-- navbar-fixed-top-->
<nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-semi-dark navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-header" style="background: white">
            <ul class="nav navbar-nav">
                <li class="nav-item mobile-menu hidden-md-up float-xs-left" ><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5 font-large-1" style="color: black !important;"></i></a></li>
                <li class="nav-item"><a  style="padding-top: 10px;   -webkit-filter: drop-shadow(0px 0px 0px black);" class="navbar-brand nav-link font-weight-bold m-0"><img alt="srimca logo" src="../images/cpsulogo.jpg" data-expand="../images/cpsulogo.jpg" data-collapse="../images/cpsulogo.jpg" class="brand-logo" style="width: 40px; "></a></li>
            </ul>
        </div>
        <div class="navbar-container content container-fluid">
            <div id="navbar-mobile" class="collapse navbar-toggleable-sm">
                <ul class="nav navbar-nav ">  
                </ul>

                <ul class="nav navbar-nav float-xs-right">
                    <li class="dropdown dropdown-notification nav-item rs_top_message_notify">
                        <a class="nav-link nav-link-label" >
                            <div class="font-weight-bold h5" style="padding: 0px; margin: 0px;">
                                <div id="time"></div>
                              
                              </div>
                        </a>
                    </li><li class="nav-item hidden-sm-down ml-3"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5"></i></a></li>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<div id="fullscreen-search" class="fullscreen-search">
    <form class="fullscreen-search-form">
        <input type="search" placeholder="Search..." class="fullscreen-search-input">
        <button type="submit" class="fullscreen-search-submit">Search</button>
    </form>
    <div class="fullscreen-search-content">
        <div class="fullscreen-search-options">
            <div class="row">
                <div class="col-sm-12">
                    <fieldset>
                        <label class="custom-control custom-checkbox display-inline">
                            <input type="checkbox" class="custom-control-input"><span class="custom-control-indicator"></span><span class="custom-control-description m-0">All</span>
                        </label>
                        <label class="custom-control custom-checkbox display-inline">
                            <input type="checkbox" class="custom-control-input"><span class="custom-control-indicator"></span><span class="custom-control-description m-0">People</span>
                        </label>
                        <label class="custom-control custom-checkbox display-inline">
                            <input type="checkbox" class="custom-control-input"><span class="custom-control-indicator"></span><span class="custom-control-description m-0">Project</span>
                        </label>
                        <label class="custom-control custom-checkbox display-inline">
                            <input type="checkbox" class="custom-control-input"><span class="custom-control-indicator"></span><span class="custom-control-description m-0">Task</span>
                        </label>
                    </fieldset>
                </div>
            </div>
        </div>
       
    </div><span class="fullscreen-search-close"></span>
</div>
<div class="fullscreen-search-overlay"></div>


<!-- main menu-->
<div id="main-menu" style="height: 100%;" data-scroll-to-active="true" class="main-menu menu-dark menu-fixed menu-shadow menu-accordion">
    <!-- main menu header-->
    <div class="main-menu-header">
        <input type="text" placeholder="Search" class="menu-search form-control round"/>
    </div>
    <!-- / main menu header-->
    <!-- main menu content-->
    <div class="main-menu-content">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
            <li class=" nav-item">
                <a href="index.php"><i class="icon-dashboard"></i><span data-i18n="nav.dash.main" class="menu-title">Dashboard</span></a>
            </li>
            <li class=" nav-item">
                <a href="candidates.php"><i class="fas fa-users"></i><span data-i18n="nav.dash.main" class="menu-title">Candidates  </span></a>
            </li>
            <li class=" nav-item">
                <a href="voters.php"><i class="fas fa-users"></i><span data-i18n="nav.dash.main" class="menu-title">Voters</span></a>
            </li>
            <li class=" nav-item">
                <a href="logout.php?logout"><i class="icon-sign-out"></i><span data-i18n="nav.dash.main" class="menu-title">logout</span></a>
            </li>
        </ul>
    </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->	
<body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns ">

    <body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns ">
        <div class="robust-content content container-fluid">
            <div class="content-wrapper" style="padding-top: 3px;">
                <div class="content-header row">
                </div>
                <div class="content-body">
                    

            



                </div>
            </div>
        </div>
    </body>

    <script>
        $(document).ready(function(){
            setInterval(function(){
            $.ajax({
                url:"time_and_date.php",
                type:"POST",
                data:{
                    "submit":1
                },
                success:function(time){
                    $("#time").html(time);
                }
            })
            },1000);
        })
    </script>