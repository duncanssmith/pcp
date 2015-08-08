<!DOCTYPE html>
<html>


    @section('head')
        @include('layout.head')
    @show

    <body class="top-photo">

    @section('nav')
        @include('layout.nav')
    @show
        <div class="container">
            <div class="content">
                <div class="logo">
                    <img src="/media/images/Home/logo.png" width="290px"/>
                </div>
                <table>
                    <tr>
                        <td colspan="1">
                            <img src="/media/images/Home/terrace.jpg" width="290px"/>
                        </td>
                        <td>
                            <img src="/media/images/Home/salads.jpg" width="290px"/>
                        </td>
                        <td>
                            <img src="/media/images/Home/teascones.jpg" width="290px"/>
                        </td>
                    </tr>
                </table>
                <br/>
                <div class="title">Coming soon!</div>
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
    </body>
</html>
