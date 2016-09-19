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

            <section id="section-welcome" class="section photo">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-6">
                                <h1 class="title pull-right">Palm Court Pavilion</h1>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-md-5 col-md-offset-7">
                            <p class="float-text-main">
                                @include('partials.text_1')
                            </p>
                        </div>
                    </div>
                    <div class="row bottom-row">
                        <div class="col-md-5 col-md-offset-7">
                            <h4 class="opening-times float-text">2016 Autumn opening times:</h4>
                        </div>
                        <div class="col-md-5 col-md-offset-7">
                            <p class="opening-times float-text">
                                @include('partials.opening_times')
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="section-menu" class="section photo">
                <div class="container">
                    <div class="row top-row">
                        <div class="col-md-6 col-md-offset-6">
                            <h1 class="title pull-right">Our menu</h1>
                        </div>
                    </div>
                    <div class="row middle-row">

                        <div class="col-md-8 col-md-offset-2">
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
                                        <img src="/media/images/Menu/png/201609PalmCourtMenu2Specials.png" />
                                        {{--<img src="/media/images/Menu/png/SummerMenuWithWine-20160525-2.png" />--}}
                                    </div>
                                    <div class="item ">
                                        {{--<img src="/media/images/Menu/png/SummerMenuWithWine-20160525-3.png" />--}}
                                        <img src="/media/images/Menu/png/201609PalmCourtMenu1Lunch.png" />
                                    </div>
                                    <div class="item">
                                        {{--<img src="/media/images/Menu/png/BreakfastMenu-20160717-1.png" />--}}
                                        <img src="/media/images/Menu/png/BreakfastMenu-20160717-1.png" />
                                    </div>
                                    <div class="item">
                                        {{--<img src="/media/images/Menu/png/DrinksMenu2016-0.png" />--}}
                                        <img src="/media/images/Menu/png/201609PalmCourtMenu3Wine.png" />
                                    </div>
                                    <div class="item">
                                        <img src="/media/images/Menu/png/KidsMenu2015-4.png" />
                                    </div>
                                    <div class="item">
                                        <img src="/media/images/Menu/png/201609PalmCourtMenu4Drinks.png" />
                                        {{--<img src="/media/images/Menu/png/201609PalmCourtMenu0Cover.png" />--}}
                                        {{--<img src="/media/images/Menu/png/SummerMenuWithWine-20160525-4.png" />--}}
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
                            <h4 class="title-sub">Download</h4>

                            <p class="download-box">
                                <a href="/media/images/Menu/pdf/PalmCourtMainMenu201609.pdf" target="_blank" title="Click to download the Menu">Main menu </a><br>
                                <a href="/media/images/Menu/pdf/PalmCourtBreakfastMenu201607.pdf" target="_blank" title="Click to download the Breakfast Menu">Breakfast </a><br>
                                <a href="/media/images/Menu/pdf/PalmCourtKidsMenu2015.pdf" target="_blank" title="Click to download the Kids Menu">Kid's menu </a><br>
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="section-views" class="section photo">
                <div class="container">
                    <div class="row top-row">
                        <div class="col-md-6 col-md-offset-6">
                            <h1 class="title pull-right">Enjoy the views</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="fotorama" data-nav="thumbs">
                                <img src="/media/images/Home/aMainFront-1.jpg" width="400px">
                                <img src="/media/images/Home/aInteriorSpace-1.jpg" width="400px">
                                <img src="/media/images/Home/aMainFront-2.jpg" width="400px">
                                <img src="/media/images/Home/aInteriorSpace-2.jpg" width="400px">
                                <img src="/media/images/Home/aMainFront-3.jpg" width="400px">
                                <img src="/media/images/Home/gCoffeeMachine.jpg" width="200px">
                                <img src="/media/images/Home/aMainFront-4.jpg" width="400px">
                                <img src="/media/images/Home/gCoffeePour.jpg" width="400px">
                                <img src="/media/images/Home/gFacade.jpg" width="400px">
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <section id="section-functions" class="section photo">
                <div class="container">
                    <div class="col-md-4 col-md-offset-8">
                        <h1 class="title">Functions</h1>
                    </div>

                    <div class="col-md-4 col-md-offset-8">
                        <p class="float-text">
                            @include('partials.text_2')
                        </p>
                    </div>
                    <div class="col-md-4 col-md-offset-8">
                        <p class="float-text">
                            @include('partials.text_3')
                        </p>
                    </div>
                    <div class="col-md-4 col-md-offset-8">
                        <h4 class="title-sub">Download</h4>
                        <p class="download-box">
                            <a href="/media/images/Docs/PalmCourtPavilionFunctions.pdf" target="_blank" title="Click to download details about Palm Court Pavilions Functions">Functions information </a><br>
                        </p>
                    </div>
                    </div>
                </div>
            </section>

            <section id="section-about" class="section photo">
                <div class="container">
                    <div class="row top-row">
                        <div class="col-md-6 col-md-offset-6">
                            <h1 class="title pull-right">About us</h1>
                        </div>
                    </div>
                    <div class="row middle-row">
                        <div class="col-md-5 ">
                            <p class="address float-text">
                                @include('partials.address')
                            </p>
                        </div>
                        <div class="col-md-7">
                            <p class="float-text">
                                @include('partials.text_4')
                            </p>
                            <p class="float-text">
                                @include('partials.text_5')
                            </p>
                        </div>
                    </div>
                    <div class="row bottom-row">
                        <div class="col-md-4">
                            <h4 class="opening-times float-text">2016 Autumn opening times:</h4>
                        </div>
                        <div class="col-md-8">
                            <p class="opening-times float-text">
                                @include('partials.opening_times')
                            </p>
                        </div>
                    </div>
                    <div class="row bottom-row">
                        <div class="col-md-12">
                            <div class="google-map-container">
                                <h1>How to find us</h1>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2520.9094489491195!2d-0.36574868437995894!3d50.81431636896051!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNTDCsDQ4JzUxLjUiTiAwwrAyMSc0OC44Ilc!5e0!3m2!1sen!2suk!4v1451944856246" width="100%" height="400px" frameborder="2" style="border:2px; padding:4px;" ></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/vendor/twitter/bootstrap/js/bootstrap.min.js"></script>
