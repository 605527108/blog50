<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Blog50</title>

    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/style.css" />
  </head>

  <body>
    <header>
      <div class="container">
        <div class="pull-right">
          @yield('header-right')
        </div>

        <h1><a href="/">This is Blog50</a></h1>
        <p class="lead">An example of dynamic web app development with Laravel</p>
      </div>
    </header>

    <div class="main">
      <div class="container">
          @yield('content')
      </div>
    </div>

  </body>
</html>
