<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <style>
        html, body {
            height: 100%;
        }

        body {
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                    <div class="card-header text-center">
                        <h1 class="mt-3">Connexion réussie</h1>
                        <h2>Bonjour {{ session()->get('user')->name }}</h2>
                    </div>
                    <div class="card-body">
                        <div>
                            <span>Email :</span>
                            <span>{{session()->get('user')->email}}</span>
                        </div>
                        <div>
                            <span>Nom :</span>
                            <span>{{session()->get('user')->name}}</span>
                        </div>
                        <br>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger">Se déconnecter</button>
                        </form>

                </div>
            </div>
        </div>
    </div>

</div>

</body>
</html>
