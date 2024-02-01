<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>records</title>
</head>
<body>
    <center>
    <h1>Data base records</h1>
    <div>
        <a href="{{route('commande.create')}}">create a commande  </a>
    </div>
        <table  border="10">
            <tr>
                    <th>id</th>
                    <th>num_commande</th>
                    <th>adresse</th>
                    <th>téléphone</th>
                    <th>Edit</th>
                    <th>Delete</th>
            </tr>
            @foreach ($commande as $commande)
            <tr>
                <td>{{$commande->id}}</td>
                <td>{{$commande->num_commande}}</td>
                <td>{{$commande->adresse}}</td>
                <td>{{$commande->téléphone}}</td>
                <td>
                    <a href="{{route('commande.edit',['commande' => $commande])}}">Edit</a>
                </td>
                <td>
                    <form method="post" action="{{route('commande.delete', ['commande' => $commande])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete">
                    </form>

                </td>

            </tr>
            @endforeach





        </table>
    </center>
</body>
</html>
