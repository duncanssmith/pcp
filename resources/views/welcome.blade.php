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
                            <h1 class="title pull-right">Welcome</h1>
                            <img id="welcome-logo" class="pull-right" src="/media/images/Home/logo-transparent.png" width="480px"/>
                    </div>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-10"></div>
                    </div>
                </div>
            </section>

            <section id="section-about" class="section flat">
                <div class="container">
                    <div class="row">
                        <h1 class="title pull-right">About us</h1>
                    </div>
<!-- //////////////////////////////////////////////////////////////////////////////////-->
                    <div class="row">
                        <div class="col-md-4">
                            <img src="/media/images/Home/gBar.jpg" width="400px">
                        </div>
                        <div class="col-md-4">
                            <img src="/media/images/Home/gOffer2.jpg" width="400px">
                        </div>
                        <div class="col-md-4">
                            <img src="/media/images/Home/gCocktail.jpg" width="400px">
                        </div>
                    </div>
<!-- //////////////////////////////////////////////////////////////////////////////////-->

<!-- //////////////////////////////////////////////////////////////////////////////////-->
                    <div class="row">
                        <div class="col-md-4">
                            <img src="/media/images/Home/gCoffeeMachine.jpg" width="400px">
                        </div>
                        <div class="col-md-4">
                            <img src="/media/images/Home/gGlasses.jpg" width="400px">
                        </div>
                        <div class="col-md-4">
                            <img src="/media/images/Home/gCoffeePour.jpg" width="400px">
                        </div>
                    </div>
<!-- //////////////////////////////////////////////////////////////////////////////////-->
                    <div class="row">
                        <div class="col-md-4">
                            <img src="/media/images/Home/gFacade.jpg" width="400px">
                        </div>
                        <div class="col-md-4">
                            <img src="/media/images/Home/gTable.jpg" width="400px">
                        </div>
                        <div class="col-md-4">
                            <img src="/media/images/Home/gTerrace.jpg" width="400px">
                        </div>
                    </div>
<!-- //////////////////////////////////////////////////////////////////////////////////-->
                    <div class="row photo-float">
                        <div class="col-md-4">
                                <p class="address float-text">
                                    Palm Court Pavilion<br>
                                    Beach House Park<br>
                                    Lyndhurst Road<br>
                                    Worthing<br>
                                    BN11 2DB<br>
                                    www.palmcourtpavilion.co.uk<br>
                                    01903 212 011
                                </p>
                                <p class="address float-text">
                                  Open daily from 8 am to 4:30 pm
                                </p>
                        </div>
                        <div class="col-md-4">
                            <p class="float-text" style="text-align:left;">
                                Nestled in Worthing’s stunning Beach House Park, Palm Court Pavilion is a stylish, beautifully renovated café-bistro in the park’s Old Pavilion. Located just minutes from the town centre and the seafront, Palm Court Pavilion serves delicious homemade food and has a range of options for functions and events.
                            </p>
                            <p class="float-text" style="text-align:left;">
                                The cafe is an exciting new chapter in the Pavilion’s interesting history; after some years in disuse, the Pavilion has been given a new lease of life. The landmark building has been sympathetically renovated, emphasising the natural light and an extensive outdoor decking area makes the most of the beautiful park setting. Both areas of decking can be used for private parties.
                            </p>
                        </div>
                        <div class="col-md-4">
                            <p class="float-text" style="text-align:left;">
                                The upstairs function room has a balcony giving delightful views of the park and bowling greens, a perfect venue for parties, meetings and events.
                            </p>
                            <p class="float-text" style="text-align:justify;">
                                The outside space in the park can also be used for larger scale events of up to 1000 people, ideal for weddings, dining, exhibitions, corporate launches, markets and roadshows.<br>
                            </p>
                        </div>
                    </div>

                </div>
            </section>

            <section id="section-christmas" class="section photo">
                <div class="container">
                    <div class="row">
                        <h1 class="title">Christmas</h1>
                        <div class="col-md-4"></div>
                        <div class="col-md-8">
                            <a href="/media/images/Menu/ChristmasMenu2015.pdf" class="btn btn-success pull-right" target="_blank"><i class="fa fa-download"></i> Download our Christmas booking form</a>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-4">
                            <div class="menu-page-1 pull-left">
                                <img src="/media/images/Menu/ChristmasMenu2015-11-2a.png" width="480px"/>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="menu-page-2 pull-right">
                                <img src="/media/images/Menu/ChristmasMenu2015-11-1a.png" width="480px"/>
                            </div>
                        </div>
                                <br><br>
                                <br><br>
                     </div>
                </div>
            </section>

            <section id="section-menu" class="section photo">
                <div class="container">
                    <div class="row">
                        <h1 class="title">Our menu</h1>
                        <div class="col-md-2">
                            <h4 class="title-sub">Download</h4>
                                <a href="/media/images/Menu/ChristmasMenu2015.pdf" class="" target="_blank"><i class="fa fa-download"></i> Christmas Menu</a><br>
                                <a href="/media/images/Menu/PalmCourtMainMenu2015.pdf" class="" target="_blank"><i class="fa fa-download"></i> Main menu </a><br>
                                <a href="/media/images/Menu/PalmCourtDrinksMenu2015.pdf" class="" target="_blank"><i class="fa fa-download"></i> Drinks </a><br>
                                <a href="/media/images/Menu/PalmCourtWineList2015.pdf" class="" target="_blank"><i class="fa fa-download"></i> Wine list </a><br>
                                <a href="/media/images/Menu/PalmCourtKidsMenu2015.pdf" class="" target="_blank"><i class="fa fa-download"></i> Kid's menu </a><br>
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
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="/media/images/Menu/ChristmasMenu2015-11-2a.png" />
                                        <div class="carousel-caption"></div>
                                    </div>
                                    <div class="item">
                                        <img src="/media/images/Menu/MainMenu2015-2.png" />
                                    </div>
                                    <div class="item">
                                        <img src="/media/images/Menu/DrinksMenu2015-2.png" />
                                    </div>
                                    <div class="item">
                                        <img src="/media/images/Menu/KidsMenu2015-2.png" />
                                    </div>
                                    <div class="item">
                                        <img src="/media/images/Menu/WineList2015-2.png" />
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
                        <div class="col-md-2"></div>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/vendor/twitter/bootstrap/js/bootstrap.min.js"></script>
