<div class="col-md-3 left_col">
    <div class="left_col scroll-view">

        <div class="navbar nav_title" style="border: 0;">
            <a href="admin/dashboard" class="site_title">
            <span>Obit Scraper</span></a>
        </div>
        <div class="clearfix"></div>


        <!-- menu prile quick info -->
        <div class="profile col-lg-12">
            <div class="profile_info">
                <span>Welcome</span>
            </div>
        </div>
        <!-- /menu prile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
                <h3>&nbsp; </h3>
                <ul class="nav side-menu">
                    <li><a href="{{ route('home') }}"><i class="fa fa-edit"></i>{{ __('Home') }}</a>
                    </li>
                    <li><a href="{{ url('/skills') }}"><i class="fa fa-edit"></i>Skills</a>
                    </li>
                    <li><a href="{{ url('/education') }}"><i class="fa fa-edit"></i>Education</a>
                    </li>
                    
                    <li><a href="admin/home/logout"><i class="fa fa-power-off">   </i> Logout</a>
                    </li>   
                </ul>
            </div>

        </div>
    </div>
</div>
<!-- top navigation -->

               