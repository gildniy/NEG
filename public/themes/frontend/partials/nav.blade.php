{{--<link rel="stylesheet" href="nav.css">--}}
<div class="header-menu">
    <div class="navbar navbar-default" role="navigation" id="main-nav">
        <div class="container">
            <div class="spinner-master">
                <input type="checkbox" id="spinner-form"/>
                <label for="spinner-form" class="spinner-spin" data-toggle="collapse"
                       data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="spinner diagonal part-1"></span>
                    <span class="spinner horizontal"></span>
                    <span class="spinner diagonal part-2"></span>
                </label>
            </div>
            <a class="navbar-brand logo hidden" href="#">NEG</a>

            <ul class="nav navbar-nav pull-right social-search">
                <li>
                    <a href="#search_box" class="social-search-btn"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                    <a href="#search_box" class="social-search-btn"><i
                                class="fa fa-facebook-official"></i></a>
                </li>
                <li>
                    <a href="#search_box" class="social-search-btn"><i class="fa fa-youtube"></i></a>
                </li>
                <li>
                    <a href="#search_box" class="social-search-btn" id="search"><i class="fa fa-search"></i></a>
                </li>

            </ul>

            <div class="menu navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Link</a></li>
                    <li><a href="#">Link</a></li>
                    <li><a href="#">Link</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b
                                    class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Nav header</li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
        <!--/.container-fluid -->
        <div class="container">
            <form class="search_box" id="search_box" action="/search/">
                <input name="search_criteria" placeholder="Search here" value="" type="text">
                <input class="search_icon" value="Search" type="submit">
            </form>
            <!--/.search_box -->
        </div>
    </div>
</div>
{{--<script src="nav.js"></script>--}}