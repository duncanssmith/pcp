    <nav class="navbar navbar-fixed-top nav-bottom-line <?php echo isset($body_class) ? '' : ''?>" role="navigation">

        <div class="navbar-header">

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>

            <div class="navbar-collapse collapse " role="navigation">

                <ul class="nav navbar-nav">

                    <li class="dropdown" role="presentation">
                        <a href="/" class="navbar-brand header-link">
                            <strong>Palm Court Pavilion</strong>
                        </a>
                    </li>

                    <li><a href="/mainmenu" class="btn btn-info" ><i class="fa fa-menu"></i>Main menu</a></li>
                    <li><a href="/drinksmenu" class="btn btn-info" ><i class="fa fa-menu"></i>Drinks</a></li>
                    <li><a href="/winelist" class="btn btn-info" ><i class="fa fa-menu"></i>Wine list</a></li>
                    <li><a href="/kidsmenu" class="btn btn-info" ><i class="fa fa-menu"></i>Kids menu</a></li>


                </ul>
            </div>
        </div>
        <!-- <div class="navbar-header pull-right">
            <ul class="nav navbar-nav">

                @if (Auth::guest())

                    <li><a href="/login" title="Log in" class="<?php echo isset($body_class) ? 'header-link-secure' : 'header-link'?>"><i class="fa fa-key icon-white"></i> </a></li>

                @else

                    <li class="dropdown" role="presentation">
                        <a href="#" data-toggle="dropdown" title="Logged in as" class="header-link-secure"><i class="fa fa-user xicon-white"></i> {{ Auth::check() ?  Auth::user()->username : "" }}</a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dlabel">
                            <li class="dropdown" role="presentation"><a href="/logout" title="Log out" class="header-dropdown-link">Log out</a></li>
                        </ul>
                @endif
            </ul>
        </div> -->
    </nav>
<hr class="navbar-end">
