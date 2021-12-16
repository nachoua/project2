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
    {{-- @foreach ($BD_edit as $edit)
   <h1>{{$BD_edit->id}}</h1> --}}


    <form action="{{route('updatep', ['id' => $BD_edit->id])}}" method="POST">
            <input type="hidden" name="_method" value="PUT">
            @csrf
            <div class="bgg">

        <label class="mrg"> first name : <input class="btne" type="text" name="first_name" value="{{$BD_edit->first_name}}"></label>
        <label class="mrg"> last name :  <input class="btne" type="text" name="last_name" value="{{$BD_edit->last_name}}"></label>
        <label class="mrg"> gender :
            <select name="gender" class="btne" value="{{$BD_edit->gender}}">
                <option name="gender" value="femme">Femme</option>
                <option name="gender" value="homme">Homme</option>
            </select>
        </label>
            <label class="mrg"> email : <input class="btne" type="email" name="email" value="{{$BD_edit->email}}">
            <label class="mrg"> tele : <input class="btne" type="text" name="telephone" value="{{$BD_edit->telephone}}">
            <label class="mrg">  picture : <div class="custom-file btne">
                    <input type="file" class="custom-file-input" id="customFile" name="image" value="{{$BD_edit->image}}">
                    {{-- <label class="custom-file-label" for="customFile">Choose file</label> --}}
                </div> </label>
            <input class="btn color" type="submit" value="submit" name="submit">
                </div>
        </form>
        {{-- @endforeach --}}

</body>
</html>
