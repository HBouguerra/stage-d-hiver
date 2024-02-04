<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/app.css">

</head>

<body>
    @include('layouts.app')

    <div class="container text-center">
        <h1 class="text-center"></h1>

        <div class="text-center mb-4">
            <a href="{{route('commande.create')}}" class="btn btn-primary">Ajouter une commande</a>
        </div>

        <table class="table table-bordered mx-auto" >
            <thead class="thead-dark">
                <tr>
                    <th>Commande Number</th>
                    <th>adresse</th>
                    <th>téléphone</th>
                    <th>Edit</th>
                    <th>Delete</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($commande as $commande)
                <tr>
                    <td>{{$commande->num_commande}}</td>
                    <td>{{$commande->adresse}}</td>
                    <td>{{$commande->téléphone}}</td>
                    <td>
                        <a  href="{{route('commande.edit',['commande' => $commande])}}" class="btn btn-warning">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('commande.delete', ['commande' => $commande])}}">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Add Bootstrap JS (optional) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
