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
                        <span class="title">Welcome</span>
                        <a href="/" class="navbar-brand header-link">
                            <img id="welcome-logo" src="/media/images/Home/logo-transparent.png" width="280px"/>
                        </a>&nbsp;
                    </div>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-10">
<!--    <div class="logo">
                                <img src="/media/images/Home/pavilion.jpg" width="290px"/>
                                <img src="/media/images/Home/logo.png" width="290px"/>
                                <img src="/media/images/Home/terrace.jpg" width="290px"/>
                                <img src="/media/images/Home/salads.jpg" width="290px"/>
                                <img src="/media/images/Home/teascones.jpg" width="290px"/>
                            </div>
                            <table class="main-table">
                                <tr>
                                    <td colspan="1">
                                        <a href="/menu" alt="Al fresco dining at Palm Court Pavilion" title="Dining outdoors at Palm Court Pavilion">
                                            <img src="/media/images/Home/terrace.jpg" width="290px"/>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="/menu" alt="Summer salads at Palm Court Pavilion" title="Delicious summer salads at Palm Court Pavilion">
                                            <img src="/media/images/Home/salads.jpg" width="290px"/>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="/menu" alt="Cream Teas at Palm Court Pavilion" title="Cream teas with jam and scones at Palm Court Pavilion">
                                            <img src="/media/images/Home/teascones.jpg" width="290px"/>
                                        </a>
                                    </td>
                                </tr>
                            </table> -->
                        </div>
                    </div>
                </div>
            </section>

            <section id="section-about" class="section flat">
                <div class="container">

                    <div class="row">
                        <h1 class="title">About</h1>
                        <div class="col-md-3">&nbsp;</div>
                        <div class="col-md-3">
                            <p style="text-align:right;">
                                Nestled in Worthing’s stunning Beach House Park, Palm Court Pavilion is a stylish, beautifully renovated café-bistro in the park’s Old Pavilion. Located just minutes from the town centre and the seafront, Palm Court Pavilion serves delicious homemade food and has a range of options for functions and events.
                            </p>
                        </div>
                        <div class="col-md-6"><img src="/media/images/Home/teascones.jpg" width="400px" style="align:right;"/></div>
                        <div class="col-md-3"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">&nbsp;</div>
                        <div class="col-md-6"><img src="/media/images/Home/terrace.jpg" width="400px"/></div>
                        <div class="col-md-3">
                        <p style="text-align:left;">
                            The cafe is an exciting new chapter in the Pavilion’s interesting history; after some years in disuse, the Pavilion has been given a new lease of life. The landmark building has been sympathetically renovated, emphasising the natural light and an extensive outdoor decking area makes the most of the beautiful park setting. Both areas of decking can be used for private parties.
                        </p>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">&nbsp;</div>
                        <div class="col-md-3">
                            <p style="text-align:right;">
                                The upstairs function room has a balcony giving delightful views of the park and bowling greens, a perfect venue for parties, meetings and events.
                            </p>
                            <p style="text-align:left;">
                                The outside space in the park can also be used for larger scale events of up to 1000 people, ideal for weddings, dining, exhibitions, corporate launches, markets and roadshows.<br>
                            </p>
                        </div>
                        <div class="col-md-6"><img src="/media/images/Home/teascones.jpg" width="400px"/></div>
                        <div class="col-md-3"></div>
                    </div>

                </div>
            </section>

            <section id="section-christmas" class="section photo">
                <div class="container">
                    <div class="row">
                        <h1 class="title">Christmas</h1>
                        <div class="col-md-12">
                            <div class="download-pdf">
                                <a href="/media/images/Menu/ChristmasMenu2015.pdf" class="btn btn-danger"><i class="fa fa-download"></i> Download our Christmas menu and booking form</a>
                            </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-4">
                            <div class="menu-page-1">
                                <img src="/media/images/Menu/ChristmasMenu2015-11-2.png" width="400px"/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="menu-page-2">
                                <img src="/media/images/Menu/ChristmasMenu2015-11-1.png" width="400px"/>
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                                <br><br>
                                <br><br>
                                <br><br>
                                <br><br>
                                <br><br>
                                <br><br>
                                <br><br>
                                <br><br>
                                <br><br>
                                <br><br>
                                <br><br>
                                <br><br>
                                <br><br>
                                <br><br>
                                <br><br>
                                <br><br>
                    </div>
                </div>
            </section>

            <section id="section-menu" class="section photo">
                <div class="container">
                    <div class="row">
                        <h1 class="title">Menu</h1>
                        <div class="col-md-2"></div>
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
                                    <li data-target="#carousel-menu" data-slide-to="6"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="/media/images/Menu/ChristmasMenu2015-11-1.png" />
                                        <div class="carousel-caption">
                                            <h3>Christmas</h3>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="/media/images/Menu/ChristmasMenu2015-11-2.png" />
                                        <div class="carousel-caption">
                                            <h3>Christmas</h3>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="/media/images/Menu/ChristmasMenu2015-11-3.png" />
                                        <div class="carousel-caption">
                                            <h3>Christmas</h3>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="/media/images/Menu/MainMenu2015-2.png" />
                                        <div class="carousel-caption">
                                            <h3>Main menu</h3>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="/media/images/Menu/DrinksMenu2015-2.png" />
                                        <div class="carousel-caption">
                                            <h3>Drinks</h3>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="/media/images/Menu/KidsMenu2015-2.png" />
                                        <div class="carousel-caption">
                                            <h3>Kids</h3>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="/media/images/Menu/WineList2015-2.png" />
                                        <div class="carousel-caption">
                                            <h3>Winelist</h3>
                                        </div>
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


            <section id="section-gallery" class="section photo">
                <div class="container">
                    <div class="row">
                        <h1 class="title">Gallery</h1>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <img src="">
                        </div>
                        <div class="col-md-4">
                            <img src="">
                        </div>
                        <div class="col-md-4">
                            <img src="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <img src="">
                        </div>
                        <div class="col-md-4">
                            <img src="">
                        </div>
                        <div class="col-md-4">
                            <img src="">
                        </div>
                    </div>
                                <br><br>
                                <br><br>
                                <br><br>
                                <br><br>
                                <br><br>
                                <br><br>
                                <br><br>
                                <br><br>
                                <br><br>
                                <br><br>
                                <br><br>
                                <br><br>
                                <br><br>
                                <br><br>
                                <br><br>
                                <br><br>
                                <br><br>
                                <br><br>
                    </div>
                </div>
            </section>

            <section id="section-contact" class="section flat">
                <div class="container">
                    <div class="row">
                        <h1 class="title">Contact</h1>
                        <div class="col-md-12">
                            <div class="address-box">
                                <p class="address">
                                    Palm Court Pavilion<br>
                                    Beach House Park<br>
                                    Lyndhurst Road<br>
                                    Worthing<br>
                                    BN11 2DB<br>
                                    www.palmcourtpavilion.co.uk<br>
                                    01903 212 011
                                </p>
                                <p class="opening-times">
                                  Open daily from 8 am to 4:30 pm
                                </p>
                            </div>
                        </div>
                                <br><br>
                                <br><br>
                                <br><br>
                                <br><br>
                                <br><br>
                                <br><br>
                                <br><br>
                                <br><br>
                                <br><br>
                                <br><br>
                                <br><br>
                                <br><br>
                                <br><br>
                                <br><br>
                                <br><br>
                                <br><br>
                                <br><br>
                                <br><br>
                                <br><br>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/vendor/twitter/bootstrap/js/bootstrap.min.js"></script>
