<!DOCTYPE html>
<html>
    @section('head')
        @include('layout.head')
    @show
    @section('nav')
        @include('layout.nav')
    @show
    <body>

        <div class="container">

            <div class="content">

                <div class="row">

                    <div class="col-md-3 logo">
                        <a href="/" class="logo">
                            <img src="/media/images/Home/logo.png" width="290px"/>
                        </a>
                        <br>
                        <br>
                        <p>Main menu</p>
                        <p>Drinks</p>
                        <p>Kids</p>
                        <p>Wines</p>

                        <p><a href="/" class="btn btn-sm btn-success"><i class="fa fa-arrow-left"></i> Back</a></p>
                    </div>

                    <div class="col-md-6">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                              <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="/media/images/Menu/pcpMainMenu2015-2.png" />
                                    <div class="carousel-caption">
                                        <h3>Main menu</h3>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="/media/images/Menu/pcpDrinksMenu2015-2.png" />
                                    <div class="carousel-caption">
                                        <h3>Drinks</h3>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="/media/images/Menu/pcpKidsMenu2015-2.png" />
                                    <div class="carousel-caption">
                                        <h3>Kids</h3>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="/media/images/Menu/pcpWineList2015-2.png" />
                                    <div class="carousel-caption">
                                        <h3>Winelist</h3>
                                    </div>
                                </div>
                            </div>

                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div> <!-- Carousel -->

                    </div>
                    <div class="col-md-3">

                    </div>

                </div>
            </div>
        </div>
    </body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/vendor/twitter/bootstrap/js/bootstrap.min.js"></script>
