<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script><title>Document</title> --}}

    <link rel="stylesheet" href={{asset('\project.css')}}>


    {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script> --}}
    <title>Project Laravel</title>
</head>
<body>

      {{-- slide
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img class="im" src="pexels-karolina-grabowska-4467683.jpg" alt="Chania">
            <div class="carousel-caption">
              <h3>Los Angeles</h3>
              <p>LA is always so much fun!</p>
            </div>
          </div>

          <div class="item">
            <img class="im" src="pexels-karolina-grabowska-4467683.jpg" alt="Chicago">
            <div class="carousel-caption">
              <h3>Chicago</h3>
              <p>Thank you, Chicago!</p>
            </div>
          </div>

          <div class="item">
            <img class="im" src="pexels-karolina-grabowska-4467683.jpg" alt="New York">
            <div class="carousel-caption">
              <h3>New York</h3>
              <p>We love the Big Apple!</p>
            </div>
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a> --}}
      </div>
    {{-- {{route("StorePerson")}} --}}
    <form action="{{route('storep')}}" method="POST">
        @csrf
        <div class="bgg">
            {{-- <label class="mrg"> date : <input class="btne" type="date" name="date"></label> --}}
     <label class="mrg"> first name : <input class="btne" type="text" name="first_name"></label>
      <label class="mrg"> last name :  <input class="btne" type="text" name="last_name"></label>
      <label class="mrg"> gender :
        <select name="gender" class="btne">
            <option name="gender" value="femme">Femme</option>
            <option name="gender" value="homme">Homme</option>
        </select>
      </label>
        <label class="mrg"> email : <input class="btne" type="email" name="email">
        <label class="mrg"> tele : <input class="btne" type="text" name="telephone">
        <label class="mrg">  picture : <div class="custom-file btne">
                <input type="file" class="custom-file-input" id="customFile" name="image">
                {{-- <label class="custom-file-label" for="customFile">Choose file</label> --}}
              </div> </label>
        <input class="btn color" type="submit" value="submit" name="submit">
            </div>
    </form>






    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> --}}
</body>
</html>

