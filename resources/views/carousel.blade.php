<!DOCTYPE html>
<html>

@section('head')
    @include('layout.head')
@show

<body>

@section('nav')
    @include('layout.nav')
@show

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
            </div>
        </div>

        <h1>Bootstrap 3 Thumbnail Slider / Carousel</h1>

        <!-- thumb navigation carousel -->
        <div class="col-md-12 hidden-sm hidden-xs" id="slider-thumbs">

            <!-- thumb navigation carousel items -->
            <ol class="list-inline">
                <li data-target="#slider-thumbs" data-slide-to="0" class="active"> 
                    <a id="carousel-selector-0" class="selected">
                        <img src="http://placehold.it/80x60&amp;text=one" class="img-responsive">
                    </a>
                </li>
                <li data-target="#slider-thumbs" data-slide-to="1"> 
                    <a id="carousel-selector-1">
                        <img src="http://placehold.it/80x60&amp;text=two" class="img-responsive">
                    </a>
                </li>
                <li data-target="#slider-thumbs" data-slide-to="2"> 
                    <a id="carousel-selector-2">
                        <img src="http://placehold.it/80x60&amp;text=three" class="img-responsive">
                    </a>
                </li>
            </ol>
        </div>

        <!-- main slider carousel -->
        <div class="row">
            <div class="col-md-12" id="slider">
                <div class="col-md-12" id="carousel-bounding-box">
                    <div id="myCarousel" class="carousel slide">
                        <!-- main slider carousel items -->
                        <div class="carousel-inner">
                            <div class="active item" data-slide-number="0">
                                <img src="http://placehold.it/1200x480&amp;text=one" class="img-responsive">
                            </div>
                            <div class="item" data-slide-number="1">
                                <img src="http://placehold.it/1200x480&amp;text=two" class="img-responsive">
                            </div>
                            <div class="item" data-slide-number="2">
                                <img src="http://placehold.it/1200x480&amp;text=three" class="img-responsive">
                            </div>
                        </div>
                        <!-- main slider carousel nav controls -->
                        <a class="carousel-control left" href="#myCarousel" data-slide="prev"> < </a>
                        <a class="carousel-control right" href="#myCarousel" data-slide="next"> > </a>
                    </div>
                </div>
            </div>
        </div>
        <!--/main slider carousel-->
    </div>





</body>

</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/vendor/twitter/bootstrap/js/bootstrap.min.js"></script>
