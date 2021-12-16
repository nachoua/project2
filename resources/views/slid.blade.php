<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script><title>Document</title>
    <link rel="stylesheet" href={{asset('\project.css')}}>
</head>
<body>

     {{-- navbar-light bg-light   --}}
     <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
        <div class="container-fluid">
          {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown link
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
            </ul>
          </div>


          <form action="{{route('search')}}" method="GET">
            <input type="text" name="query" class="search-box">

            <input class="btn-primary" type="submit" value="search">
        </form>


        </div>

      </nav>
    <!-- slid-->

    <div id="myCarousel" class="carousel slide"  data-bs-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            @foreach ($BD_all as $bd)

          <div class="item @if($loop->first) active @endif" data-bs-interval="3000">

            <img class="im" src="{{ asset($bd->image) }}" alt="Chania">
            <div class="carousel-caption">
              <h3>{{$bd->first_name}}</h3>
              <p>{{$bd->last_name}}</p>
            </div>
          </div>

          {{-- <div class="item ">
            <img class="im" src="{{ asset($bd->image) }}" alt="Chicago">
            <div class="carousel-caption">
              <h3>Chicago</h3>
              <p>Thank you, Chicago!</p>
            </div>
          </div> --}}

          {{-- <div class="item">
            <img class="im" src="{{ asset($bd->image) }}" alt="New York">
            <div class="carousel-caption">
              <h3>New York</h3>
              <p>We love the Big Apple!</p>
            </div>
          </div> --}}

          @endforeach
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!--form-->

      @foreach ($BD_all as $bd)
      <form  action="{{route('indexp')}}" method="GET">
          <div class="bg">
              <h1 class="title"> {{ $bd->first_name }} </h1>
              {{-- {{ $bd->image }} --}}
              <img class="im" src="{{ asset($bd->image) }}" />
              {{-- <img src="{{ asset($bd->image) }}" /> --}}
              {{-- {{ HTML::image($bd->image, '', array('class' => 'image')); }} --}}
              <a class="btn btn-info" href="{{route('showp', ['id' =>$bd->id])}}">Read more</a>


      </form>
      <form action="{{ route('destroyp', ['id' =>$bd->id]) }}" method="POST">
          @csrf
          @method('DELETE')
          <button  class="btn btn btn-danger">Delete </button>

      </form>
      <form action="{{route('editp', ['id' => $bd->id])}}" method="GET">
          @csrf

      <button class="btn btn-success">Update </button>
       </div>
      </form>

  @endforeach

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
