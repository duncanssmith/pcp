<!DOCTYPE html>
<html>
    @section('head')
        @include('layout.head')
    @show

    <body class="top-photo">

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
                                    <a href="/menu" alt="Cream Teas at Pal Court Pavilion" title="Cream teas with jam and scones at Palm Court Pavilion">
                                        <img src="/media/images/Home/teascones.jpg" width="290px"/>
                                    </a>
                                </td>
                            </tr>
                        </table>
                        <br/>
                        <div class="title">Palm Court Pavilion</div>
                        <div class="address-box">
                            <p class="address">
                            Lyndhurst Road<br/>
                            Worthing<br/>
                            BN11 2DB<br/>
                            T: 01903 212 011<br/>
                            W: www.palmcourtpavilion.co.uk</p>
                        </div>

                        <a href="/menu" class="btn btn-sm btn-primary">Menus </a>
                        <a href="/about" class="btn btn-sm btn-primary">About </a>

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
