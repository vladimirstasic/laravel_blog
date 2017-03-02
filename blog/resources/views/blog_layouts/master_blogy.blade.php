<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Blog Template for Bootstrap</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/blogy.css" rel="stylesheet">
</head>

<body>

    @include('blog_layouts.nav_blogy')

    <div class="blog-header">
        <div class="container">
            <h1 class="blog-title">Nas Blogato</h1>
            <p class="lead blog-description">An example to how to get insane programmer in Laravel.</p>
        </div>
    </div>

    <div class="container">

        <div class="row">

            @yield('content')

            @include('blog_layouts.blogSidebar')

        </div>

    </div>

    @include('blog_layouts.footer_blogy')

</body>
</html>
