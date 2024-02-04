<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medianet</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/app.css">
</head>

<body>
    <div class="">
        @include('layouts.app')
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <form method="post" action="{{route('commande.update',['commande' =>  $commande]) }}">
                    @csrf
                    @method('put')
                    <h1 class="text-center">modifier une commmande</h1>
                    <center><hr></center>
                    <div class="form-group">
                        <label for="nom">N de commande*</label>
                        <input type="text" class="form-control" id="num_commande" name="num_commande" required  value="{{$commande->num_commande}}">
                    </div>

                    <div class="form-group">
                        <label for="adresse">Adresse*</label>
                        <input type="text" class="form-control" id="adresse" name="adresse" required value="{{$commande->adresse}}">
                    </div>

                    <div class="form-group">
                        <label for="téléphone">N° téléphone*</label>
                        <input type="tel" class="form-control" id="téléphone" name="téléphone" required value="{{$commande->téléphone}}">
                    </div>

                    <!-- Add other form fields as needed -->

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Modifier</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
