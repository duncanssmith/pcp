<!DOCTYPE html>
<html>

@section('head')
    @include('layout.head')
@show

<body data-spy="scroll" data-target="#pcp-navbar" data-offset="90">

@section('nav')
    @include('layout.nav')
@show

<div id="content">

    <div id="page-menu">
    <div class="container">
        <div class="row top-row">
            <div class="col-md-12">
                <h1 class="title pull-right">Our menu</h1>
            </div>
        </div>
        <div class="row middle-row">
            <div class="col-md-2">

            </div>
            <div class="col-md-8">
                <div id="carousel-menu" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-menu" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-menu" data-slide-to="1"></li>
                        <li data-target="#carousel-menu" data-slide-to="2"></li>
                        <li data-target="#carousel-menu" data-slide-to="3"></li>
                        <li data-target="#carousel-menu" data-slide-to="4"></li>
                        <li data-target="#carousel-menu" data-slide-to="5"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="/media/images/Menu/png/ValentinesMenu2016-4.png" />
                            <div class="carousel-caption"></div>
                        </div>
                        <div class="item">
                            <img src="/media/images/Menu/png/MothersDayMenu2016-4.png" />
                        </div>
                        <div class="item">
                            <img src="/media/images/Menu/png/MainMenu2015-4.png" />
                        </div>
                        <div class="item">
                            <img src="/media/images/Menu/png/DrinksMenu2015-4.png" />
                        </div>
                        <div class="item">
                            <img src="/media/images/Menu/png/KidsMenu2015-4.png" />
                        </div>
                        <div class="item">
                            <img src="/media/images/Menu/png/WineList2015-4.png" />
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-menu" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-menu" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div> <!-- Carousel -->
            </div>
            <div class="col-md-2">
                <h4 class="title-sub pull-right">Download</h4>
                <a href="/media/images/Menu/pdf/ValentinesMenu2016.pdf" class="" target="_blank">Valentine's Day </a><br>
                <a href="/media/images/Menu/pdf/MothersDayMenu2016.pdf" class="" target="_blank">Mother's Day </a><br>
                <a href="/media/images/Menu/pdf/PalmCourtMainMenu2015.pdf" class="" target="_blank">Main menu </a><br>
                <a href="/media/images/Menu/pdf/PalmCourtDrinksMenu2015.pdf" class="" target="_blank">Drinks </a><br>
                <a href="/media/images/Menu/pdf/PalmCourtKidsMenu2015.pdf" class="" target="_blank">Kid's menu </a><br>
                <a href="/media/images/Menu/pdf/PalmCourtWineList2015.pdf" class="" target="_blank">Wine list </a><br>
            </div>
        </div>
    </div>
    </div>
</div>

</body>

</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/vendor/twitter/bootstrap/js/bootstrap.min.js"></script>
