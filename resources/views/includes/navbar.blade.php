<!--
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">mohamed zaki <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/project/public">home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/project/public/pl">programming language</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/project/public/about">About</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="button" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>  -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/project/public">mohamed zaki</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="/project/public"><span class="glyphicon glyphicon-home ">Home</a></li>
      <li class="dropdown"><a href="/project/public/posts">Posts</a></li>
      <li><a href="/project/public/posts/create"><span class="glyphicon glyphicon-pencil"></span>create</a></li>  
        
      
      <li><a href="http://localhost/project/public/about">About</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span> register</a></li>
      <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      
    </ul>
  </div>
</nav>
  


</body>
</html>




