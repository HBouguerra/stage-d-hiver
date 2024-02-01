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
        <form method="POST" action="{{route('commande.update',['commande' =>  $commande]) }}">
            @csrf
            @method('put')
            <h1>modifier une commmande</h1>
            <hr>
            <table>
                <tr>
                    <td>Nom de commande*</td>
                    <td><input type="text" class="form-control" id="num_commande" name="num_commande" required  value="{{$commande->num_commande}}"></td>
                </tr>

                <tr>
                    <td>Adresse*</td>
                    <td><input type="text" class="form-control" id="adresse" name="adresse" required value="{{$commande->adresse}}"></td>
                </tr>

                <tr>
                    <td>N° téléphone*</td>
                    <td><input type="tel" class="form-control" id="téléphone" name="téléphone" required value="{{$commande->téléphone}}"></td>
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
