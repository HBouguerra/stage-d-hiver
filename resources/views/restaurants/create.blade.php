<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My blog</title>
    <link rel="stylesheet" href="/app.css">
</head>

<body>
    <fieldset>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form method="post" action="{{ route('restaurants.store') }}">
            @csrf
            <h1>Ajouter un restaurant</h1>
            <hr>
            <table>
                <tr>
                    <td>Nom du restaurant*</td>
                    <td><input type="text" class="form-control" id="nom" name="nom" required></td>
                </tr>

                <tr>
                    <td>Adresse*</td>
                    <td><input type="text" class="form-control" id="adresse" name="adresse" required></td>
                </tr>

                <tr>
                    <td>N° téléphone*</td>
                    <td><input type="tel" class="form-control" id="téléphone" name="téléphone" required></td>
                </tr>

                <!-- Add other form fields as needed -->

                <tr>
                    <td colspan="2"><button type="submit">ajouter</button></td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>

</html>
