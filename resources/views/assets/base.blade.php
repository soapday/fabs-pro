<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
    </head>
  <body class="body">
    <nav class="nav">
         <ul class="navul">
            <li class="navli">
                <a class="navhome" href=#>Home</a>
            </li>
            <li class="navli">
                <a class="navpro" href=#>Product</a>
            </li>
            <li class="navli">
                <a class="navabout" href=#>About us</a>
            </li>
        </ul>
    </nav>
    {{-- Style Navbar --}}
    <style>
        body {
            background-color: hsl(218, 44%, 59%);
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;

        }
        ul{

        }

        li {
            background-color: #ffffff;
            list-style: none;
            display: flex;
            position: end;
        }
        a {
            text-align: center;
            padding: 50px 60px;
            margin: 50px 60px;
        }


    </style>
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
