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
        <a href="{{route('restaurants.create')}}">create a restaurant   </a>
    </div>
        <table  border="6">
            <tr>
                    <th>id</th>
                    <th>nom</th>
                    <th>adresse</th>
                    <th>télephone</th>
                    <th>Edit</th>
                    <th>Delete</th>
            </tr>
            @foreach ($restaurant as $restaurant)
            <tr>
                <td>{{$restaurant->id}}</td>
                <td>{{$restaurant->nom}}</td>
                <td>{{$restaurant->adresse}}</td>
                <td>{{$restaurant->téléphone}}</td>
                <td>
                    <a href="{{route('restaurant.edit',['restaurant' => $restaurant])}}">Edit</a>
                </td>
                <td>
                    <form method="post" action="{{route('restaurant.delete', ['restaurant' => $restaurant])}}">
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
