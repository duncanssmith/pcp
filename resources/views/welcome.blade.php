<!DOCTYPE html>
<html>
    @section('head')
        @include('layout.head')
    @show
    <body data-spy="scroll" data-target="#pcp-navbar" data-offset="90">

        {{--<div id="fb-root">--}}
            {{--<script>(function(d, s, id) {--}}
                    {{--var js, fjs = d.getElementsByTagName(s)[0];--}}
                    {{--if (d.getElementById(id)) return;--}}
                    {{--js = d.createElement(s); js.id = id;--}}
                    {{--js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8";--}}
                    {{--fjs.parentNode.insertBefore(js, fjs);--}}
                {{--}(document, 'script', 'facebook-jssdk'));--}}
{{--//            </script>--}}
//        </div>

        <div id="content">

            @section('nav')
                @include('layout.nav')
            @show

            <section id="section-welcome" class="section photo">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-md-8 col-sm-6 col-xs-3">
                           <h1 class="title">Palm Court Pavilion </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-10 col-md-8 col-sm-6 col-xs-3">
                            @include('partials.text_1')
                        </div>
                    </div>
                    <div class="row video">
                        <div class="col-lg-10 col-md-6 col-sm-4 col-xs-2">
                            @include('partials.you-tube-video')
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-10 col-md-8 col-sm-6 col-xs-3">
                            @include('partials.opening_times')
                        </div>
                    </div>
                </div>
            </section>

            <section id="section-menu" class="section photo">
                <div class="container">
                    <div class="row top-row">
                        <div class="col-lg-10 col-md-8 col-sm-6 col-xs-3">
                            <h1 class="title">Menu</h1>
                        </div>
                    </div>
                    <div class="row middle-row">

                        <div class="col-md-8 col-md-offset-0">
                            <div id="carousel-menu" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-menu" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-menu" data-slide-to="1"></li>
                                    <li data-target="#carousel-menu" data-slide-to="2"></li>
                                    <li data-target="#carousel-menu" data-slide-to="3"></li>
                                    <li data-target="#carousel-menu" data-slide-to="4"></li>
                                    <li data-target="#carousel-menu" data-slide-to="5"></li>
                                    {{--  <li data-target="#carousel-menu" data-slide-to="6"></li>  --}}
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        {{--  <img src="/media/images/Menu/png/2018/01/Valentines.png" />  --}}
                                    {{--  </div>  --}}
                                    {{--  <div class="item">  --}}
                                        <img src="/media/images/Menu/png/2017/05/Main-1.png" />
                                    </div>
                                    <div class="item">
                                        <img src="/media/images/Menu/png/2017/05/Main-2.png" />
                                    </div>
                                    <div class="item">
                                        <img src="/media/images/Menu/png/2016/12/SundayLunch1.png" />
                                    </div>
                                    <div class="item">
                                        <img src="/media/images/Menu/png/2017/05/Breakfast.png" />
                                    </div>
                                    <div class="item">
                                        <img src="/media/images/Menu/png/2017/05/Kids.png" />
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
                        <div class="col-md-4">
                            <p class="download-box">
                                {{--  <a href="/media/images/Menu/pdf/2017/11/Christmas.pdf" target="_blank" title="Download the Main Menu">  --}}
                                    {{--  <i class="fa fa-download"></i>  --}}
                                    {{--  Christmas 2017 Menu and Booking Form  --}}
                                {{--  </a>  --}}
                                {{--  <br/>  --}}
                                {{--  <a href="/media/images/Menu/pdf/2018/01/Valentines.pdf" target="_blank" title="Download the Valentine's Day Menu">  --}}
                                    {{--  <i class="fa fa-download"></i>  --}}
                                    {{--  Valentine's Day Menu  --}}
                                {{--  </a>  --}}
                                {{--  <br/>  --}}
                                <a href="/media/images/Menu/pdf/2017/05/Main.pdf" target="_blank" title="Download the Main Menu">
                                    <i class="fa fa-download"></i>
                                    Main Menu:
                                    Panini/Sandwiches/Salads<br/>Mains/Afternoon Tea<br/>Drinks/Wine
                                </a>
                                <br/>
                                <a href="/media/images/Menu/pdf/2016/12/SundayLunch.pdf" target="_blank" title="Download the Sunday Lunch menu">
                                    <i class="fa fa-download"></i>
                                    Sunday lunch
                                </a><br/>
                                <a href="/media/images/Menu/pdf/2017/05/Breakfast.pdf" target="_blank" title="Download the Breakfast menu">
                                    <i class="fa fa-download"></i>
                                    Breakfast
                                </a><br/>
                                <a href="/media/images/Menu/pdf/2017/05/Kids.pdf" target="_blank" title="Download the kids menu">
                                    <i class="fa fa-download"></i>
                                    Kids
                                </a><br/>
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="section-views" class="section photo">
                <div class="container">
                    <div class="row top-row">
                        <div class="col-lg-10 col-md-8 col-sm-6 col-xs-3">
                            <h1 class="title">Views</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-10 col-md-8 col-sm-6 col-xs-3">
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
                    <div class="col-lg-10 col-md-8 col-sm-6 col-xs-3">
                        <h1 class="title">Functions</h1>
                    </div>
                    <div class="col-lg-10 col-md-8 col-sm-6 col-xs-3">
                        @include('partials.text_2')
                    </div>
                    <div class="col-lg-10 col-md-8 col-sm-6 col-xs-3">
                        @include('partials.text_3')
                    </div>
                    <div class="col-lg-10 col-md-8 col-sm-6 col-xs-3">
                        <p class="download-box">
                            <a href="/media/images/Documents/2018/02/Functions.pdf" target="_blank" title="Download Functions info">Functions information <i class="fa fa-download"></i></a><br>
                            <h1>Please call us on 01903 212 011 for a quote</h1>
                        </p>
                    </div>
                    </div>
                </div>
            </section>

            <section id="section-about" class="section photo">
                <div class="container">
                    <div class="row top-row">
                        <div class="col-lg-10 col-md-8 col-sm-6 col-xs-3">
                            <h1 class="title">About us</h1>
                        </div>
                    </div>
                    <div class="row middle-row">
                        <div class="col-lg-5 col-md-4 col-sm-4 col-xs-3">
                            @include('partials.address')
                        </div>
                        {{--<div class="col-lg-8 col-md-5 col-sm-4 col-xs-3">--}}
                        <div class="col-lg-7 col-md-8 col-sm-8 col-xs-4">
                             @include('partials.text_4')
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-3">
                             @include('partials.text_5')
                        </div>
                    </div>
                    <div class="row bottom-row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-3">
                            @include('partials.opening_times')
                        </div>
                    </div>
                    <div class="row bottom-row">
                        <div class="col-lg-10 col-md-12 col-sm-6 col-xs-4">
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
