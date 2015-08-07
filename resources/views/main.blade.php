<!DOCTYPE html>
<html>
    <head>
        <title>Palm Court Pavilion</title>
    	  <meta charset="UTF-8">
        <title>{{$title}}</title>
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        <link rel="stylesheet" href="/media/css/font-awesome.css">
        <link rel="stylesheet" href="/media/css/main.css">
        <!-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.4.1/slick.css"/>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css"> -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <script src="{{ asset('/media/js/vendor/jquery/jquery-2.1.1.min.js') }}"></script>
        <script src="{{ asset('/media/js/vendor/twitter/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>

        <!--<script src="{{ asset('/media/js/vendor/ckeditor/ckeditor.js') }}"></script> -->
        <script src="//cdn.ckeditor.com/4.4.5/basic/ckeditor.js"></script>

        <!--<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.4.1/slick.min.js"></script>-->

        <script src="{{ asset('/media/js/image_sort.js')}}"></script>
        <script src="{{ asset('/media/js/text_sort.js')}}"></script>

    </head>

    <body <?php echo isset($body_class) ? 'class="'.$body_class.'"' : ''?>>

        @section('nav')
        @show

        <div class="container">

            @yield('content')

        </div>

    </body>

    <!--<script>$("#image-sort").sortable();</script> -->

</html>
