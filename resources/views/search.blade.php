<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">



    <title>Document</title>
    <link rel="stylesheet" href={{asset('\project.css')}}>
</head>
<body>



      <!--form-->

      @foreach ($data as $d)
      <form  action="{{route('indexp')}}" method="GET">
          <div class="bg">
              <h1 class="title"> {{ $d->first_name }} </h1>
              {{-- {{ $bd->image }} --}}
              <img class="im" src="{{ asset($d->image) }}" />
              {{-- <img src="{{ asset($bd->image) }}" /> --}}
              {{-- {{ HTML::image($bd->image, '', array('class' => 'image')); }} --}}
              <a class="btn btn-info" href="{{route('showp', ['id' =>$d->id])}}">Read more</a>


      </form>
      <form action="{{ route('destroyp', ['id' => $d->id]) }}" method="POST">
          @csrf
          @method('DELETE')
          <button  class="btn btn-danger">Delete </button>

      </form>
      <form action="{{route('editp', ['id' => $d->id])}}" method="GET">
          @csrf


      <button class="btn btn-success">Update </button>
       </div>
      </form>

  @endforeach


</body>
</html>
