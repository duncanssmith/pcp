<!DOCTYPE html>
<html>

    @section('head')
        @include('layout.head')
    @show

    <body <?php echo isset($body_class) ? 'class="'.$body_class.'"' : ''?>>
    @section('nav')
        @include('nav')
    @show

        <div class="container">

            @yield('content')

        </div>

    </body>

    <!--<script>$("#image-sort").sortable();</script> -->

</html>
