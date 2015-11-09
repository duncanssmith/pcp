<!DOCTYPE html>
<html>
    @section('head')
        @include('layout.head')
    @show
    @section('nav')
        @include('layout.nav')
    @show

    <body id="top-photo">
        <section id="section-1">
            <div class="container">
                <div class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="logo">
                                <img src="/media/images/Home/logo.png" width="290px"/>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-12">
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
                            </table>
                            <br/>
                            <div class="address-box">
                                <p class="address">
                                Lyndhurst Road<br/>
                                Worthing<br/>
                                BN11 2DB<br/>
                                T: 01903 212 011<br/>
                                W: www.palmcourtpavilion.co.uk</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="section-2">
            <div class="container">
                <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">About</div>
                    <p><a href="/" class="btn btn-sm btn-success"><i class="fa fa-arrow-left"></i> Back</a></p>
                    <p>
                        Nestled in Worthing’s stunning Beach House Park, Palm Court Pavilion is a stylish,<br>
                        beautifully renovated café-bistro in the park’s Old Pavilion. Located just minutes from<br>
                        the town centre and the seafront, Palm Court Pavilion serves delicious homemade food<br>
                        and has a range of options for functions and events.<br>
                    </p>
                    <p>
                        The cafe is an exciting new chapter in the Pavilion’s interesting history; after some years<br>
                        in disuse, the Pavilion has been given a new lease of life. The landmark building has been<br>
                        sympathetically renovated, emphasising the natural light and an extensive outdoor decking<br>
                        area makes the most of the beautiful park setting. Both areas of decking can be used for<br>
                        private parties.<br>
                    </p>
                    <p>
                        The upstairs function room has a balcony giving delightful views of the park and bowling<br>
                        greens, a perfect venue for parties, meetings and events.<br>
                    </p>
                    <p>
                        The outside space in the park can also be used for larger scale events of up to 1000 people,<br>
                        ideal for weddings, dining, exhibitions, corporate launches, markets and roadshows.<br>
                    </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="section-3">
            <div class="container">
                <div class="content">
                    <div class="row">
                        <div class="col-md-12">
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
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/vendor/twitter/bootstrap/js/bootstrap.min.js"></script>
