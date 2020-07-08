<html>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>
        @yield('title')
    </title>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                  <a class="nav-link" href="/">ToDo App <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/todo">ToDo's</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/new-todo">Create New ToDo</a>
                </li>
               
              </ul>
              
            </div>
          </nav>
        <div class="container">

          @if (session()->has('success'))

          <div class="alert alert-success">
            {{ session()->get('success')}}
          </div>
              
          @endif

            @yield('content');
        
        </div>
    </body>
</html>