<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My blog</title>
    <link rel="stylesheet" href="/app.css">
</head>
<center>
<body>
    <fieldset>
        @if (session()->has('success'))
        <div>
            {{ session('success') }}
        </div>
         @endif
        <form method="post" action="{{route('restaurant.update',['restaurant' =>  $restaurant]) }}">
            @csrf
            @method('put')
            <h1>modifier un restaurant</h1>
            <hr>
            <table>
                <tr>
                    <td>Nom du restaurant*</td>
                    <td><input type="text" class="form-control" id="nom" name="nom" required value="{{$restaurant->nom}}"></td>
                </tr>

                <tr>
                    <td>Adresse*</td>
                    <td><input type="text" class="form-control" id="adresse" name="adresse" required value="{{$restaurant->adresse}}"></td>
                </tr>

                <tr>
                    <td>N° téléphone*</td>
                    <td><input type="tel" class="form-control" id="téléphone" name="téléphone" required value="{{$restaurant->téléphone}}"></td>
                </tr>

                <!-- Add other form fields as needed -->

                <tr>
                    <td colspan="2"><button type="submit">modifier</button></td>
                </tr>
            </table>
        </form>
    </fieldset>
</center>
</body>

</html>
