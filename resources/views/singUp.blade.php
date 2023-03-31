<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

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
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h4>S'inscrire</h4>
                </div>
                <div class="card-body">
                    <form method="post" action="{{route('/insert')}}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Votre Nom</label>
                            <input type="text" class="form-control" id="email" placeholder="Entrer votre Nom" name="name"><br>
                        </div>
                        <div class="form-group">
                            <label for="email">Adresse email</label>
                            <input type="email" class="form-control" id="email" placeholder="Entrer votre email" name="email"><br>
                        </div>
                        <div class="form-group">
                            <label for="email2">Confirmer l'email</label>
                            <input type="email" class="form-control" id="email" placeholder="Confirmez votre email" name="email2"><br>
                        </div>
                        <div class="form-group">
                            <label for="password">Mot de passe</label>
                            <input type="password" class="form-control" id="password" placeholder="Entrer votre mot de passe" name="mdp"><br>
                        </div>
                        <div class="form-group">
                            <label for="password2">Confirmer Mot de passe</label>
                            <input type="password" class="form-control" id="password" placeholder="Confirmez votre mot de passe" name="mdp2">
                        </div>
                        <br>
                        <a href={{route('/login')}}>Se connecter</a>
                        <br>
                        <button type="submit" class="btn btn-primary btn-block">S'inscrire</button>

                    </form>
                </div>
            </div>
            @if (!empty(Session::get('error')))
                <br>
                <div class="alert alert-danger" role="alert">
                    {!! session()->get('error') !!}
                </div>
            @endif
        </div>
    </div>
</div>
</body>
</html>
