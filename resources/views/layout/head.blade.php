<head>
    <title>Palm Court Pavilion</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/media/css/font-awesome.css">
    <link rel="stylesheet" href="/media/css/main.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" media="all"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="{{ asset('/media/js/vendor/jquery/jquery-2.1.1.min.js') }}"></script>
    <script src="{{ asset('/media/js/vendor/twitter/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>

    <!-- 1. Link to jQuery (1.8 or later), -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> <!-- 33 KB -->

    <!-- fotorama.css & fotorama.js. -->
    <link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet"> <!-- 3 KB -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script> <!-- 16 KB -->

    <script>
        $(function() {
            $('a[href*=#]:not([href=#carousel-menu])').click(function() {
                if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                    if (target.length) {
                        $('html,body').animate({
                            scrollTop: target.offset().top
                        }, 800);
                        return false;
                    }
                }
            });
        });
    </script>
    {{--<script>--}}
        {{--$(function() {--}}
            {{--$('#myCarousel').carousel({--}}
                {{--interval: 4000;--}}
            {{--});--}}

        {{--// handles the carousel thumbnails--}}
        {{--$('[id^=carousel-selector-]').click( function(){--}}
            {{--var id_selector = $(this).attr("id");--}}
            {{--var id = id_selector.substr(id_selector.length -1);--}}
            {{--id = parseInt(id);--}}
            {{--$('#myCarousel').carousel(id);--}}
            {{--$('[id^=carousel-selector-]').removeClass('selected');--}}
            {{--$(this).addClass('selected');--}}
            {{--});--}}

            {{--// when the carousel slides, auto update--}}
            {{--$('#myCarousel').on('slid', function (e) {--}}
                {{--var id = $('.item.active').data('slide-number');--}}
                {{--id = parseInt(id);--}}
                {{--$('[id^=carousel-selector-]').removeClass('selected');--}}
                {{--$('[id=carousel-selector-'+id+']').addClass('selected');--}}
            {{--});--}}
        {{--});--}}
    {{--</script>--}}
</head>
