<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
</head>
<body>
    <h1>Zmodyfikuj dane studenta studenta</h1>
    <form method="post" action="{{route('people.update',['people' => $people])}}">
    @csrf
    @method('put')
        <div>
            <label> Imie </label>
            <input type="text" name="name" value="{{$people->name}}"/>
        </div>
        <div>
            <label> Nazwisko </label>
            <input type="text" name="surname" value="{{$people->surname}}"/>
        </div>
        <div>
            <label> Numer telefonu </label>
            <input type="number" name="phone" value="{{$people->phone}}"/>
        </div>
        <div>
            <label> Ulica </label>
            <input type="text" name="street" value="{{$people->street}}"/>
        </div>
        <div>
            <label> Miasto </label>
            <input type="text" name="city" value="{{$people->city}}"/>
        </div>
        <div>
        <input type="submit" value="Zapisz" />
        </div>
    </form>
</body>
</html>