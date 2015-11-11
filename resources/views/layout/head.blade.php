<head>
    <title>Palm Court Pavilion</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/media/css/font-awesome.css">
    <link rel="stylesheet" href="/media/css/main.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" media="all"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="{{ asset('/media/js/vendor/jquery/jquery-2.1.1.min.js') }}"></script>
    <script src="{{ asset('/media/js/vendor/twitter/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <script>
        $(function() {
            $('a[href*=#]:not([href=#carousel-example-generic])').click(function() {
                if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                    if (target.length) {
                        $('html,body').animate({
                            scrollTop: target.offset().top
                        }, 600);
                        return false;
                    }
                }
            });
        });
    </script>

    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Open Sans';
        }

        /*.top-photo {*/
            /*background: #fefefe no-repeat top center;*/
            /*min-height: 285px;*/
            /*background-size: cover;*/
            /*color: rgba(100,100,100,.9);*/
        /*}*/

        .container-fluid {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
            color: rgba(100,100,100,.9);
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title1 {
            font-size: 72pt;
            font-weight: 100;
          }

        .logo {
            margin-top: 56px;
            margin-right: 36px;
            margin-bottom: 30px;
            align-content: center;
            align-self: center;
        }

        .title {
            font-size: 64px;
            color: #8a6;
            font-weight: 100;
        }

        .title2 {
            font-size: 24px;
            color: #684;
            font-weight: 100;
        }

        .address {
            font-family: Open Sans;
            font-size: 24px;
            line-height: 170%;
            font-weight: 200;
        }

    </style>

</head>
