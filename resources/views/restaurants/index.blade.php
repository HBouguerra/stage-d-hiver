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
            <a href="{{ route('restaurants.create') }}" class="btn btn-primary">Create a Restaurant</a>
        </div>

        <table class="table table-bordered mx-auto">
            <thead class="thead-dark">
                <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($restaurant as $restaurant)
                    <tr>
                        <td>{{ $restaurant->nom }}</td>
                        <td>{{ $restaurant->adresse }}</td>
                        <td>{{ $restaurant->téléphone }}</td>
                        <td>
                            <a href="{{ route('restaurant.edit', ['restaurant' => $restaurant]) }}"
                                class="btn btn-warning">Edit</a>
                        </td>
                        <td>
                            <form method="post"
                                action="{{ route('restaurant.delete', ['restaurant' => $restaurant]) }}">
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
