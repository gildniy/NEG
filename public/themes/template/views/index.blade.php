<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="descriptionription" content="NEG Template">
    <meta name="author" content="gildniy">
    <title>NEG | Welcome</title>

    <!-- Bootstrap core CSS -->
    <link href="{!! Theme::asset()->url('css/bootstrap.css') !!}" rel="stylesheet" type='text/css'>
    <!-- Bootstrap customised CSS -->
    <link href="{!! Theme::asset()->url('css/bootstrap-flat.css') !!}" rel="stylesheet" type='text/css'>
    <link href="{!! Theme::asset()->url('css/bootstrap-select.min.css') !!}" rel="stylesheet" type='text/css'>
    <link href="{!! Theme::asset()->url('css/awesome-bootstrap-checkbox.css') !!}" rel="stylesheet" type='text/css'>
    <!-- Fonts-->
    <link href="{!! Theme::asset()->url('css/font-awesome.css') !!}" rel="stylesheet" type='text/css'>
    <!-- Custom CSS -->
    <link href="{!! Theme::asset()->url('css/main.css') !!}" rel="stylesheet" type='text/css'>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

{{--Start the navbar--}}
{{--<div class="navbar-wrapper" data-pg-collapsed>--}}

{{--Rapid ask link--}}
{{--<div class="container">--}}
{{--<div class="row">--}}
{{--<div class="col-md-12">--}}
{{--<a class="btn ask centered" type="button">--}}
{{--<img src="img/ask.png" class="img-responsive" alt="Ask on NEG">--}}
{{--</a>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}


<div class="container">
    <div class="navbar navbar-neg" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">NATIONAL EXAMS</a>
        </div>
        <div class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">

            <ul class="nav navbar-nav">
                <li><a class="active" href="index.html"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="questions.html"><i class="fa fa-question-circle"></i> Questions</a></li>
                <li><a href="schools.html"><i class="fa fa-graduation-cap"></i> Schools</a></li>
                <li><a href="partnerships.html"><i class="fa fa-users"></i> Partnerships</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                       aria-haspopup="true"
                       aria-expanded="false">More <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i><i
                                class="fa fa-angle-right"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="articles.html">Articles</a></li>
                        <li><a href="thoughts">NEG in Press</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="tos.html">TOS</a></li>
                        <li><a href="privacy.html">Privacy</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true"
                                        aria-expanded="false">Membership <i class="fa fa-angle-right"></i><i
                                class="fa fa-angle-right"></i><i
                                class="fa fa-angle-right"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="http://neg.dev/users/login"><i class="fa fa-sign-in"></i> Log In</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="http://neg.dev/users/create"><i class="fa fa-plus-square-o"></i> Register</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</div>

{{--Main alert place--}}
{{--<section class="section-materials">--}}
{{--<div class="container-fluid">--}}
{{--<div class="col-md-12">--}}
{{--<div class="alert">--}}
{{--<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>--}}
{{--<strong>Wufff</strong> This is the alert on the header!--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</section>--}}
{{--Campain carousel--}}
<section class="campain">
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false" data-pg-collapsed>
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <img src="../../themes/template/assets/img/img1.jpg" alt="First slide">

                <div class="container">
                    <div class="col-md-6">
                        <div class="carousel-caption">
                            <h1>Example headline.</h1>

                            <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and
                                "previous" Glyphicon buttons on the left and right might not load/display properly due
                                to web browser security rules.</p>

                            <p class="pull-left"><a class="btn btn-lg btn-primary" href="#" role="button">Sign up
                                    today</a></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="campain-image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="../../themes/template/assets/img/img2.jpg" alt="Second slide">

                <div class="container">
                    <div class="col-md-6">
                        <div class="carousel-caption">
                            <h1>Another example.</h1>

                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
                                gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="campain-image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="../../themes/template/assets/img/img3.jpg" alt="Third slide">

                <div class="container">
                    <div class="col-md-6">
                        <div class="carousel-caption">
                            <h1>One more for good.</h1>

                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
                                gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="campain-image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="../../themes/template/assets/img/img4.jpg" alt="Fourth slide">

                <div class="container">
                    <div class="col-md-6">
                        <div class="carousel-caption">
                            <h1>Another example.</h1>

                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
                                gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="campain-image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="../../themes/template/assets/img/img5.jpg" alt="Fifth slide">

                <div class="container">
                    <div class="col-md-6">
                        <div class="carousel-caption">
                            <h1>One more for good.</h1>

                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
                                gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="campain-image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{--Mission & Statistics section--}}
<section class="section-light mission">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="centered page-header">
                    <i class="fa fa-book"></i> YOUR KNOWLEDGE IS A NEED FOR MANY OF US
                </h2>

                <p class="centered para-2">
                    Crowdcube is the world’s leading investment crowdfunding platform. We enable anyone to invest
                    alongside professional investors in start-up, early stage and growth businesses through equity, debt
                    and investment fund options.
                    Join the 190,000-strong crowd looking for more interesting investments - it’s free, quick and has no
                    obligations.

                </p>
            </div>
        </div>
    </div>
</section>

<section class="section-light statistics">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <a href="#">
                    <div class="block-bg col-md-12">
                        <div class="block-item col-md-12">
                            <div class="icon-box col-md-3">
                                <div class="icon">
                                    <i class="fa fa-calendar fa-2x"></i>
                                </div>
                            </div>
                            <div class="description-box col-md-9">
                                <div class="number">
                                    <h3>
                                        WITHIN 50 DAYS
                                    </h3>
                                </div>
                                <div class="description">
                                    WE GROW WITH RESULTS
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="#">
                    <div class="block-bg col-md-12">
                        <div class="block-item col-md-12">
                            <div class="icon-box col-md-3">
                                <div class="icon">
                                    <i class="fa fa-puzzle-piece fa-2x"></i>
                                </div>
                            </div>
                            <div class="description-box col-md-9">
                                <div class="number">
                                    <h3>
                                        97,705 THREATS ON NEG
                                    </h3>
                                </div>
                                <div class="description">
                                    MORE AGAIN ARE GETTING POSTED
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="#">
                    <div class="block-bg col-md-12">
                        <div class="block-item col-md-12">
                            <div class="icon-box col-md-3">
                                <div class="icon">
                                    <i class="fa fa-thumbs-up fa-2x"></i>
                                </div>
                            </div>
                            <div class="description-box col-md-9">
                                <div class="number">
                                    <h3>
                                        5,290 TRUSTFUL USERS
                                    </h3>
                                </div>
                                <div class="description">
                                    COMMUNITY SHARES AND LEARN
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="#">
                    <div class="block-bg col-md-12">
                        <div class="block-item col-md-12">
                            <div class="icon-box col-md-3">
                                <div class="icon">
                                    <i class="fa fa-institution fa-2x"></i>
                                </div>
                            </div>
                            <div class="description-box col-md-9">
                                <div class="number">
                                    <h3>
                                        90 INSTITUTIONS
                                    </h3>
                                </div>
                                <div class="description">
                                    SUPPORTING OUR CAUSE
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

{{--The Questions' section on home--}}
<section class="materials-bg">
    <div class="transparent-bg">
        <div class="container">
            <div class="col-md-8 qa-home">
                <div class="row">
                    <div class="col-md-6">
                        <form action="" method="POST" class="form-horizontal search" role="form">
                            <input type="search" class="form-control col-xs-10" placeholder="Any thing you missed?">
                            <button type="submit" class="btn btn-search col-xs-10"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <div class="adv-search">
                            <div class="form-group">
                                <label for="adv-search" class="col-sm-2" control-label>Advanced Search:</label>

                                <div class="col-sm-10">
                                    <select name="name" id="adv-search" class="form-control">
                                        <option value=""> -- Select One --</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10">
                        <div class="widget widget-10 widget-featured">

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li class="widget widget-6 widget-home">

                            </li>
                            <li class="widget widget-6 widget-home">

                            </li>
                            <li class="widget widget-6 widget-home">

                            </li>
                            <li class="widget widget-6 widget-home">

                            </li>
                            <li class="widget widget-6 widget-home">

                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <div class="widget widget-categories">
                            <h3><i class="fa fa-tasks"></i> Questions' categories</h3>
                            <ul>
                                <li><a href="#" class="widget-category-link"><i class="fa fa-arrow-right"></i> Lorem
                                        ipsum</a>
                                </li>
                                <li><a href="#" class="widget-category-link"><i class="fa fa-arrow-right"></i> Lorem
                                        ipsum</a>
                                </li>
                                <li><a href="#" class="widget-category-link"><i class="fa fa-arrow-right"></i> Lorem
                                        ipsum</a>
                                </li>
                                <li><a href="#" class="widget-category-link"><i class="fa fa-arrow-right"></i> Lorem
                                        ipsum</a>
                                </li>
                                <li><a href="#" class="widget-category-link"><i class="fa fa-arrow-right"></i> Lorem
                                        ipsum</a>
                                </li>
                                <li><a href="#" class="widget-category-link"><i class="fa fa-arrow-right"></i> Lorem
                                        ipsum</a>
                                </li>
                                <li><a href="#" class="widget-category-link"><i class="fa fa-arrow-right"></i> Lorem
                                        ipsum</a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
            <aside class="col-md-4">
                <div class="row">
                    <div class="col-md-4">

                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>

{{--Thoughts about NEG--}}
<section class="section-light on-us">
</section>

{{--Footer main section--}}
<footer class="dark footer-main">
</footer>

{{--And finally the JS scripts section--}}
<script src="{!! Theme::asset()->url('js/jquery.js') !!}"></script>
<script src="{!! Theme::asset()->url('js/bootstrap.js') !!}"></script>
<script src="{!! Theme::asset()->url('js/bootstrap-select.js') !!}"></script>
<script src="{!! Theme::asset()->url('js/bootstrap-confirmation.js') !!}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.selectpicker').selectpicker();
        $('.confirmation').confirmation();
        $('.tolltip').tooltip();
    });
</script>
</body>
</html>
