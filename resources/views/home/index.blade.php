{{--<div class="jumbotron intro">--}}
    {{--<div class="container">--}}
        {{--<h1 class="page-header">Hello, Yamm 3!</h1>--}}
        {{--<p>This is<i>Yet another megamenu </i>for Bootstrap 3 from Twitter. Lightweight and pure CSS megamenu that uses the standard navbar markup and the fluid grid system classes from Bootstrap 3. Work for fixed and responsive layout and has the facility to include (almost) any Bootstrap elements.</p>--}}
        {{--<p>This project is currently hosted on Github and is the sequel to Bootstrap2 Yamm <small><sup><a href="http://geedmo.github.com/yamm" title="Yamm for Bootstrap 2" target="_blank" class="text-muted"><em class="glyphicon glyphicon-new-window"></em></a></sup></small></p><br>--}}
        {{--<p><a href="https://github.com/geedmo/yamm3" class="btn btn-default btn-lg">View on Github</a> <a href="https://github.com/geedmo/yamm3/archive/master.zip" class="btn btn-primary btn-lg">Download</a></p>--}}
    {{--</div>--}}
{{--</div>--}}
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <p class="lead">Markup</p><ol>
                <li><p>Reuse navbar markup and add class <code>.yamm</code> at the top.</p>
                </li>
                <li><p>Then add your markup into the <code>.dropdown-menu</code></p>
                </li>
                <li><p>Optionally use <code>.yamm-content</code> to wrap content with padding.</p>
                </li>
            </ol>

        </div>
        <div class="col-md-8">
          <pre class="prettyprint">&lt;nav class="navbar yamm navbar-default " role="navigation"&gt;
...
     &lt;ul class="nav navbar-nav"&gt;
       &lt;li class="dropdown"&gt;
         &lt;a href="#" class="dropdown-toggle" data-toggle="dropdown"&gt;Dropdown&lt;/a&gt;
         &lt;ul class="dropdown-menu"&gt;
           &lt;li&gt;
               &lt;div class="yamm-content"&gt;
                  &lt;div class="row"&gt; 
                    ...
           &lt;/li&gt;
         &lt;/ul&gt;
       &lt;/li&gt;
     &lt;/ul&gt;
...
&lt;/nav&gt;</pre>
        </div>
    </div>
</div>
<div class="jumbotron">
    <div class="container">
        <p class="lead">Grid Example</p>
        <!-- Grid demo navbar -->
        <div class="navbar navbar-default yamm">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target="#navbar-collapse-grid" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="#" class="navbar-brand">Yamm Megamenu</a>
            </div>
            <div id="navbar-collapse-grid" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <!-- Grid 12 Menu -->
                    <li class="dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Grid<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="grid-demo">
                                <div class="row">
                                    <div class="col-sm-12">.col-sm-12</div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">.col-sm-6</div>
                                    <div class="col-sm-6">.col-sm-6</div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">.col-sm-4</div>
                                    <div class="col-sm-4">.col-sm-4</div>
                                    <div class="col-sm-4">.col-sm-4</div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">.col-sm-3</div>
                                    <div class="col-sm-3">.col-sm-3</div>
                                    <div class="col-sm-3">.col-sm-3</div>
                                    <div class="col-sm-3">.col-sm-3</div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">.col-sm-2</div>
                                    <div class="col-sm-2">.col-sm-2</div>
                                    <div class="col-sm-2">.col-sm-2</div>
                                    <div class="col-sm-2">.col-sm-2</div>
                                    <div class="col-sm-2">.col-sm-2</div>
                                    <div class="col-sm-2">.col-sm-2</div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-1">.col-sm-1</div>
                                    <div class="col-sm-1">.col-sm-1</div>
                                    <div class="col-sm-1">.col-sm-1</div>
                                    <div class="col-sm-1">.col-sm-1</div>
                                    <div class="col-sm-1">.col-sm-1</div>
                                    <div class="col-sm-1">.col-sm-1</div>
                                    <div class="col-sm-1">.col-sm-1</div>
                                    <div class="col-sm-1">.col-sm-1</div>
                                    <div class="col-sm-1">.col-sm-1</div>
                                    <div class="col-sm-1">.col-sm-1</div>
                                    <div class="col-sm-1">.col-sm-1</div>
                                    <div class="col-sm-1">.col-sm-1</div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!--With Offsets
                    -->
                    <li class="dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Offset<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="grid-demo">
                                <div class="row">
                                    <div class="col-sm-4">4</div>
                                    <div class="col-sm-4 col-sm-offset-4">4 offset 4</div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 col-sm-offset-3">3 offset 3</div>
                                    <div class="col-sm-3 col-sm-offset-3">3 offset 3</div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-sm-offset-3">6 offset 6</div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!--Aside Menu
                    -->
                    <li class="dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Aside<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="grid-demo">
                                <div class="row">
                                    <div class="col-sm-3"><br>
                                        <h3>3</h3><br>
                                    </div>
                                    <div class="col-sm-9"><br>
                                        <h3>9</h3><br>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!--Nesting Menu
                    -->
                    <li class="dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Nesting<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="grid-demo">
                                <div class="row">
                                    <div class="col-sm-12">12</div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">12
                                        <div class="row">
                                            <div class="col-sm-4">4</div>
                                            <div class="col-sm-4">4</div>
                                            <div class="col-sm-4">4</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <p class="lead">Width</p><p>By default every mega-dropdown will take the content size so is possible to use add <code>.yamm-fw</code> to <code>.dropdown</code> to expand it fullwidth</p>
            <p>Yamm works better with fullwidth menus.</p>

        </div>
        <div class="col-md-8">
          <pre class="prettyprint">&lt;nav class="navbar yamm navbar-default " role="navigation"&gt;
...
     &lt;ul class="nav navbar-nav"&gt;
       &lt;li class="dropdown yamm-fw"&gt;
             ...
       &lt;/li&gt;
     &lt;/ul&gt;
...
&lt;/nav&gt;</pre>
        </div>
    </div>
</div>
<div class="jumbotron">
    <div class="container">
        <p class="lead">More components</p>
        <!-- Extra components navbar -->
        <div class="navbar navbar-default yamm">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target="#navbar-collapse-2" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="#" class="navbar-brand">Yamm Megamenu</a>
            </div>
            <div id="navbar-collapse-2" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <!-- Media Example -->
                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Media<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <ul class="media-list">
                                        <li class="media"><a href="#" class="pull-right"><img src="demo/img/64x64.gif" alt="64x64" class="media-object"></a>
                                            <div class="media-body">
                                                <h4 class="media-heading">Media heading</h4>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante.
                                            </div>
                                        </li>
                                        <li class="media"><a href="#" class="pull-right"><img src="demo/img/64x64.gif" alt="64x64" class="media-object"></a>
                                            <div class="media-body">
                                                <h4 class="media-heading">Media heading</h4>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque.
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Tables -->
                    <li class="dropdown yamm-fullwidth"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Tables<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td colspan="2">Larry the Bird</td>
                                            <td>@twitter</td>
                                            <td colspan="2">Larry the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Thumbnails demo -->
                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Thumbnails<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="thumbnail"><img alt="260x130" src="demo/img/260.jpg">
                                                <div class="caption">
                                                    <h3>Thumb Label</h3>
                                                    <p>Mazagran doppio half and half aftertaste organic, rich doppio</p>
                                                    <p><a href="#" class="btn btn-primary">Action</a> <a href="#" class="btn btn-default">Action</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="thumbnail"><img alt="260x130" src="demo/img/260.jpg">
                                                <div class="caption">
                                                    <h3>Thumb Label</h3>
                                                    <p>Black latte cinnamon, cultivar trifecta crema cappuccino</p>
                                                    <p><a href="#" class="btn btn-primary">Action</a> <a href="#" class="btn btn-default">Action</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="thumbnail"><img alt="260x130" src="demo/img/260.jpg">
                                                <div class="caption">
                                                    <h3>Thumb Label</h3>
                                                    <p>Bar roast et, as latte café au lait, mocha aromatic robusta</p>
                                                    <p><a href="#" class="btn btn-primary">Action </a> <a href="#" class="btn btn-default">Action </a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <!-- Forms -->
                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Forms<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <form action="send.php">
                                        <div class="form-group">
                                            <input id="inputName" type="text" placeholder="Name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input id="inputEmail" type="password" placeholder="Email" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <textarea placeholder="Write your message.." class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success">Send</button>
                                        </div>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <p class="lead">JavaScript</p><p>This code will prevent unexpected menu close when using some components (like accordion, forms, etc)</p>

        </div>
        <div class="col-md-8">
          <pre class="prettyprint">$(document).on('click', '.yamm .dropdown-menu', function(e) {
  e.stopPropagation()
})</pre>
        </div>
    </div>
    <footer>
        <hr>
        <div class="row">
            <div class="col-sm-4">
                <p>MIT &copy; Geedmo 2014</p>
            </div>
            <div class="col-sm-8">
                <div class="social">
                    <ul class="list-inline text-right">
                        <li>
                            <iframe src="http://ghbtns.com/github-btn.html?user=geedmo&amp;repo=yamm3&amp;type=watch&amp;count=true" allowtransparency="true" frameborder="0" scrolling="0" width="100px" height="20px" class="github-btn"></iframe>
                        </li>
                        <li>
                            <iframe src="http://ghbtns.com/github-btn.html?user=geedmo&amp;repo=yamm3&amp;type=fork&amp;count=true" allowtransparency="true" frameborder="0" scrolling="0" width="98px" height="20px" class="github-btn"></iframe>
                        </li>
                        <li><a href="https://twitter.com/share" data-lang="en" class="twitter-share-button">Tweet</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>