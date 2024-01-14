<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
</head>
<body>
    <h1>Studenci</h1>
    <p>Znajdź studenta po ID 
    <form method="post" action="{{route('people.readone')}}">
    @csrf
    @method('post')
        <div>
            <label> ID: </label>
            <input type="number" name="id" />
            <input type="submit" value="Wyszukaj" />
        </div>
        </form>
    </p>

<table border = "1">
<tr>
<th>ID</th>
<th>Imie</th>
<th>Nazwisko</th>
<th>Nr tel</th>
<th>Ulica</th>
<th>Miasto</th>
<th>Edytuj</th>
<th>Usuń</th>
</tr>
@foreach($people as $people)
<tr>
    <td>{{$people->id}}</td>
    <td>{{$people->name}}</td>
    <td>{{$people->surname}}</td>
    <td>{{$people->phone}}</td>
    <td>{{$people->street}}</td>
    <td>{{$people->city}}</td>
    <td><a href="{{route('people.edit',['people' => $people])}}">Edytuj</a></td>
    <td><form method="post" action="{{route('people.delete',['people' => $people])}}">
        @csrf
        @method('delete')
        <input type="submit" value="Usuń" />
        </form>
    </td>
</tr>
@endforeach
</body>
</html>