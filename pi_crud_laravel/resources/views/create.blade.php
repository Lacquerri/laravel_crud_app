<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
</head>
<body>
    <h1>Dodaj studenta</h1>
    <form method="post" action="{{route('people.store')}}">
    @csrf
    @method('post')
        <div>
            <label> Imie </label>
            <input type="text" name="name" />
        </div>
        <div>
            <label> Nazwisko </label>
            <input type="text" name="surname" />
        </div>
        <div>
            <label> Numer telefonu </label>
            <input type="number" name="phone" />
        </div>
        <div>
            <label> Ulica </label>
            <input type="text" name="street" />
        </div>
        <div>
            <label> Miasto </label>
            <input type="text" name="city" />
        </div>
        <div>
        <input type="submit" value="Zapisz" />
        </div>
    </form>
</body>
</html>