<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@($page.title)</title>
    <meta name="keywords" content="@($page.keywords)" />
    <meta name="description" content="@($page.metaContent)">
    <meta name="author" content="@($page.author)">
    <base href="@( BASE_URL )/">
    <!-- Bootstrap -->
    <link href="assets/protocols/qv/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- custom css -->
    <link href="assets/protocols/qv/css/style.css" rel="stylesheet" type="text/css" media="screen">
    <!-- font awesome for icons -->
    <link href="assets/protocols/qv/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <!--ytp player-->
    <link href="assets/protocols/qv/css/YTPlayer.css" rel="stylesheet" type="text/css">
    <!--flex slider-->
    <link href="assets/protocols/qv/css/flexslider.css" rel="stylesheet" type="text/css" media="screen">
    <!-- animated css  -->
    <link href="assets/protocols/qv/css/animate.css" rel="stylesheet" type="text/css" media="screen">
    <!--web fonts-->
    <link href='//fonts.googleapis.com/css?family=Lato:300,400,400italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!--owl carousel css-->
    <link href="assets/protocols/qv/css/owl.carousel.css" rel="stylesheet" type="text/css" media="screen">
    <link href="assets/protocols/qv/css/owl.theme.css" rel="stylesheet" type="text/css" media="screen">
    <!--popups css-->
    <link href="assets/protocols/qv/css/magnific-popup.css" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="assets/protocols/qv/css/style-custom.css">

    @block('style')
    <!-- For Extra Set of Styles on child page -->
    @endblock

</head>


    <body>


        @block('content')

        <!-- Content from child page is rendered here. You may create multiple blocks
        with other names like [@]block('sidebar') etc if you like ;) -->

        @endblock






    </body>

<!--back to top-->
<a href="#" class="scrollToTop"><i class="fa fa-angle-up"></i></a>
<!--back to top end-->
<!--scripts and plugins -->
<!--must need plugin jquery-->
<script src="assets/protocols/qv/js/jquery.min.js"></script>
<!--bootstrap js plugin-->
<script src="assets/protocols/qv/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!--easing plugin for smooth scroll-->
<script src="assets/protocols/qv/js/jquery.easing.1.3.min.js" type="text/javascript"></script>
<script src="assets/protocols/qv/js/jquery.sticky.js" type="text/javascript"></script>
<script src="assets/protocols/qv/js/jquery.mb.YTPlayer.min.js" type="text/javascript"></script>
<!--digit countdown plugin-->
<script src="assets/protocols/qv/js/jquery.counterup.min.js" type="text/javascript"></script>
<!--on scroll animation-->
<script src="assets/protocols/qv/js/wow.min.js" type="text/javascript"></script>
<!--easy pie charts-->
<script src="assets/protocols/qv/js/waypoints.min.js" type="text/javascript"></script>
<script src="assets/protocols/qv/js/easypiechart.js" type="text/javascript"></script>
<script src="assets/protocols/qv/js/jquery.flexslider-min.js" type="text/javascript"></script>
<script src="assets/protocols/qv/js/jquery.mixitup.min.js" type="text/javascript"></script>
<script src="assets/protocols/qv/js/jquery.stellar.min.js" type="text/javascript"></script>
<!--owl carousel slider-->
<script src="assets/protocols/qv/js/owl.carousel.min.js" type="text/javascript"></script>
<!--twitter feed-->
<script src="assets/protocols/qv/js/tweetie.min.js" type="text/javascript"></script>
<!--popup js-->
<script src="assets/protocols/qv/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
<script src="assets/protocols/qv/js/jquery.backstretch.min.js" type="text/javascript"></script>

<!--valid / working contact form js-->
<script src="assets/protocols/qv/js/contact_me.js" type="text/javascript"></script>
<script src="assets/protocols/qv/js/jqBootstrapValidation.js" type="text/javascript"></script>
<!--customizable plugin edit according to your needs-->
<script src="assets/protocols/qv/js/custom.js" type="text/javascript"></script>

<script src="assets/protocols/qv/js/script-custom.js" type="text/javascript"></script>

@block('script')
<!-- For Extra Set of Scripts on child page -->
@endblock

</html>