<!DOCTYPE html>
<html>
<head>
    <title>myten.se</title>
    <meta charset="utf-8">
    <meta name="description"
          content="This is a portfolio site, it let me try out new cool things with PHP, HTML5, CSS3, RWD, AJAX"/>
    <meta name="author" content="Johan Burmester">
    <meta name="keywords" content="Portfolio, myten.se, PHP, HTML5, CSS3, RWD, AJAX"/>
    <!-- Optimized mobile viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>

    <!-- Icons -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" media="all" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/1dot5x.css"
          media="only screen and (-moz-min-device-pixel-ratio: 1.5), only screen and (-o-min-device-pixel-ratio: 3/2), only screen and (-webkit-min-device-pixel-ratio: 1.5), only screen and (min-device-pixel-ratio: 1.5)"/>
    <link rel="stylesheet" type="text/css" href="css/2x.css"
          media="only screen and (-moz-min-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 2/1), only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min-device-pixel-ratio: 2)"/>

    <!--[if lt IE 9]>
    <script src="js/html5.js"></script>
    <![endif]-->
</head>
<body>


<div class="container">
    <div class="background">
        <div class="aqua row" data-type="background" data-speed="0.85"></div>
        <div class="aqua row" data-type="background" data-speed="1.10"></div>
        <div class="khaki row" data-type="background" data-speed="0.80"></div>
        <div class="khaki row" data-type="background" data-speed="1.15"></div>
    </div>
    <div id="window">
        <header>
            <?php include("header.php") ?>
        </header>
        <div class="main" data-type="background" data-speed="1">
            <?php include("sections/home.php") ?>
            <?php include("sections/rwd.php") ?>
            <?php include("sections/github.php") ?>
            <?php include("sections/wew.php") ?>
            <?php include("sections/deploy.php") ?>
            <?php include("sections/contact.php") ?>
        </div>
        <footer>
            <?php include("footer.php") ?>
        </footer>
    </div>
    <div class="forground">
    </div>
</div>


<script src="js/head.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript">
    head.js("js/respond.min.js", "js/custom.js");

    $(document).ready(function () {
        $('.row').css('height', $(window).height() / 4 + 'px');

        window.onresize = function (event) {
            $('.row').css('height', $(window).height() / 4 + 'px');
        }

        $(window).scroll(function () {
            var scrollHeight = $(window).scrollTop();

            var test = scrollHeight + $(window).outerHeight();

            var boolean = $('#window').height() > test;

//            $('header').text($('#window').height() + ' > ' + test + ' boolean: ' + boolean);

            if (boolean) {
                $('div[data-type="background"]').each(function () {
                    var multiplier = $(this).data('speed');
                    var top = scrollHeight / multiplier;
                    $(this).css('top', top + 'px');
                });
            }
        });
    });
</script>
<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-29415811-2']);
    _gaq.push(['_trackPageview']);

    (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();
</script>
</body>
</html>