<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Créer un compte</h2>
  <form action="{{Route('User.CreationCompt')}}" method="post">
 
    @csrf
    @method('POST')
  <div class="mb-3 mt-3">
      <label for="nom">Nom:</label>
      <input type="text" class="form-control" id="nom" placeholder="entre votre nom" name="nom" value="{{old('nom')}}">
    @error('nom')
    <span class="text-danger">{{$message}}</span>
    @enderror
    </div>
    <div class="mb-3">
      <label for="prenom">prenom:</label>
      <input type="text" class="form-control" id="prenom" placeholder="Enter votre prenom" name="prenom" value="{{old('prenom')}}">
      @error('prenom')
    <span class="text-danger">{{$message}}</span>
    @enderror
    </div>
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{old('email')}}">
      @error('email')
    <span class="text-danger">{{$message}}</span>
    @enderror
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter mot de passe" name="password" value="{{old('nom')}}">
      @error('password')
    <span class="text-danger">{{$message}}</span>
    @enderror
    </div>
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me <br>
        <a href="{{url('/connexion')}}">se connecter</a>
      </label>
    </div>
    <button type="submit" class="btn btn-primary">envoyer</button>
  </form>
</div>

</body>
</html>
