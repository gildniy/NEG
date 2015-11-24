<!DOCTYPE html>
<html lang="en">
<head>
    {!! Theme::partial('head') !!}
    {!! Theme::asset()->styles() !!}
</head>
<body id="slimScroll">

{!! Theme::partial('header-home') !!}

<div class="container">
    {!! Theme::content() !!}
</div>

{!! Theme::partial('footer') !!}


<script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?lang=css"></script>
{!! Theme::asset()->container('footer')->scripts() !!}
{!! Theme::asset()->scripts() !!}
</body>
</html>