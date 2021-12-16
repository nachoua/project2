<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href={{asset('\project.css')}}>
    <title>Document</title>
</head>
<body>
    @foreach ($bd_show as $show)
        <form  action="{{route('showp', ['id' =>$show->id])}}" method="GET">
            {{-- @csrf --}}
            <h1>{{$show->first_name}}<h1>
                <h1>{{$show->last_name}}<h1>
                    <h1>{{$show->gender}}<h1>
                        <h1>{{$show->email}}<h1>
            <h1>{{$show->telephone}}<h1>
                <img class="im" src="{{ asset($show->image) }}" />

        </form>
    @endforeach


</body>
</html>
