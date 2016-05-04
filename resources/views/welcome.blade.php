<!DOCTYPE html>
<html>
    @section('head')
        @include('layout.head')
    @show
    <body data-spy="scroll" data-target="#pcp-navbar" data-offset="90">
        @section('nav')
            @include('layout.nav')
        @show
        <section id="content">

            <section id="section-welcome" class="section photo">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-6">
                                <h1 class="title pull-right">Palm Court Pavilion</h1>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-md-12">
                            <p class="float-text-main">
                                Palm Court Pavilion is a beautifully renovated, stylish café-bistro in Worthing's delightful Beach House Park.
                                We serve delicious homemade food in a tranquil setting, and are a few minutes walk from the town centre and the seafront. We also offer excellent facilities for events and functions.
                            </p>
                        </div>
                    </div>
                    {{--<div class="row bottom-row">--}}
                        {{--<div class="col-md-6">--}}
                            {{--<div class="float-text-main">--}}
                                {{--<img src="/media/images/Home/logo-transparent.png" width="140px"/>--}}
                                {{--<h1><a href="https://www.groupon.co.uk/deals/palm-court-pavilion-1">Our <span class="groupon-logo-style">GROUPON</span> offer</a></h1>--}}
                                {{--<p>--}}
                                    {{--Enjoy sandwiches, scones with cream and jam, and a slice of cake served with a pot of tea and a glass of Prosecco.--}}
                                {{--</p>--}}
                                {{--<h2> Choose Between Two Options </h2>--}}
                                {{--<p>--}}
                                    {{--£15 for an afternoon tea for two with a glass of Prosecco (40% off)<br>--}}
                                    {{--£29 for an afternoon tea for four with a glass of Prosecco (42% off)--}}
                                {{--</p>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-6"></div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
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
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="/media/images/Menu/png/MainMenu2016-0-1.png" />
                                    </div>
                                    <div class="item ">
                                        <img src="/media/images/Menu/png/MainMenu2016-0-2.png" />
                                    </div>
                                    <div class="item">
                                        <img src="/media/images/Menu/png/DrinksMenu2016-0.png" />
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
                            <a href="/media/images/Menu/pdf/PalmCourtMainMenu2016.pdf" class="" target="_blank">Main menu </a><br>
                            <a href="/media/images/Menu/pdf/PalmCourtDrinksMenu2016.pdf" class="" target="_blank">Drinks </a><br>
                            <a href="/media/images/Menu/pdf/PalmCourtKidsMenu2015.pdf" class="" target="_blank">Kid's menu </a><br>
                            <a href="/media/images/Menu/pdf/PalmCourtWineList2015.pdf" class="" target="_blank">Wine list </a><br>
                        </div>
                    </div>
                </div>
            </section>

            <section id="section-views" class="section photo">
                <div class="container">
                    <div class="row top-row">
                        <div class="col-md-6 col-md-offset-6">
                            <h1 class="title pull-right">Enjoy the views &hellip;</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <p class="float-text">
                               To give you a flavour &hellip;
                            </p>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="fotorama" data-nav="thumbs">
                                <img src="/media/images/Home/gBar.jpg" width="200px">
                                <img src="/media/images/Home/gOffer2.jpg" width="200px">
                                <img src="/media/images/Home/gCocktail.jpg" width="200px">
                                <img src="/media/images/Home/gCoffeeMachine.jpg" width="200px">
                                <img src="/media/images/Home/gGlasses.jpg" width="400px">
                                <img src="/media/images/Home/gCoffeePour.jpg" width="400px">
                                <img src="/media/images/Home/gFacade.jpg" width="400px">
                                <img src="/media/images/Home/gTable.jpg" width="400px">
                                <img src="/media/images/Home/gOffer1.jpg" width="400px">
                                <img src="/media/images/Home/gQuartet.jpg" width="400px">
                                <img src="/media/images/Home/gTerrace.jpg" width="400px">
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <section id="section-functions" class="section flat">
                <div class="container">
                    <div class="row top-row">
                        <div class="col-md-6 col-md-offset-6">
                            <h1 class="title pull-right">Functions</h1>
                        </div>
                    </div>


                    {{--####--}}
                    <div class="col-md-12">
                        <a href="/media/images/Docs/PalmCourtPavilionFunctions.pdf" class="" target="_blank">Functions information </a><br>
                        <a id="modal-function-info" href="#" class=""> <h1 class="title"> Functions </h1></a>
                        <!-- Image display modal ////////////////////////////////////////////////////////// -->
                        <div id="function-show" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                                        <h4 class="modal-title">Functions</h4>
                                    </div>
                                    <div class="modal-body ">
                                       <h1>Functions content here</h1>
                                    </div>
                                    <div class="modal-footer">
                                        <p class="modal-title pull-left">
                                            Functions blurb here
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    {{--####--}}

                    <div class="row bottom-row">
                        <div class="col-md-4">
                            <p class="float-text">
                                The upstairs function room has a balcony giving delightful views of the park and bowling greens, a perfect venue for parties, meetings and events.
                            </p>
                        </div>
                        <div class="col-md-4">
                            <p class="float-text">
                                The outside space in the park can be used for larger scale events of up to 1000 people, ideal for weddings, dining, exhibitions, corporate launches, markets and roadshows.<br>
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="section-about" class="section flat">
                <div class="container">
                    <div class="row top-row">
                        <div class="col-md-6 col-md-offset-6">
                            <h1 class="title pull-right">About us</h1>
                        </div>
                    </div>
                    <div class="row middle-row">
                        <div class="col-md-5">
                            <p class="address float-text">
                                Palm Court Pavilion<br>
                                Beach House Park<br>
                                Lyndhurst Road<br>
                                Worthing<br>
                                BN11 2DB<br>
                                www.palmcourtpavilion.co.uk<br>
                                01903 212 011
                            </p>
                            <p class="address float-text">Daily 8am to 4:30pm </p>
                        </div>
                        <div class="col-md-7">
                            <p class="float-text">
                                Nestled in Worthing’s stunning Beach House Park, Palm Court Pavilion is a stylish, beautifully renovated café-bistro in the park’s Old Pavilion. Located just minutes from the town centre and the seafront, Palm Court Pavilion serves delicious homemade food and has a range of options for functions and events.
                            </p>
                            <p class="float-text">
                                The cafe marks an exciting new chapter in the Pavilion’s history. After some years in disuse, the Pavilion has been given a new lease of life. The landmark building has been sympathetically renovated to emphasise natural light inside, and large decking areas outside have been added so that visitors can enjoy the beautiful park setting. The decking areas can also be used for private parties or functions.
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
