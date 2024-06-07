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

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Link</a>
        </li>
      </ul>
      <form class="d-flex">
        <a href="{{route('User.seconnecter')}}">
      <button class="btn btn-primary" type="button">connexion</button>
      </a>
      <form action="{{route('User.deconnexion')}}" method="post" style="display: none;">
    @csrf
   
        <button class="btn btn-danger" type="submit">
           de connexion
        </button>
      
        </form>
      </form>
    </div>
  </div>
</nav>

<div class="container-fluid mt-3">
  <h3>bienvenue</h3>
  <p>{{Auth::User()->prenom}}</p>

<div class="container mt-3">
 
  <p>ajouter la catégorie du produits:</p>
  <form action="{{Route('Categorie.categorie')}}" method="post">
    @csrf
    @Method('POST')
    <div class="mb-3 mt-3">
      <label for="comment">nom de la categorie:</label>
      <textarea class="form-control" rows="5" id="comment" name="libelle"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">envoyer</button>
  </form>
</div>
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
  <h2>Table Head Colors</h2>
  <p>You can use any of the contextual classes to only add a color to the table header:</p>
  <table class="table">
    <thead class="table-dark">
      <tr>
        <th>id</th>
        <th>libellé</th>
        <th>actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($categories as $categorie )
        <tr>
        <td>{{$categorie->id}}</td>
        <td>{{$categorie->libelle}}</td>
        <td> <div class="btn-group">
    <button type="button" class="btn btn-primary">Apple</button>
    <button type="button" class="btn btn-primary">Samsung</button>
    <button type="button" class="btn btn-primary">Sony</button>
  </div></td>
      </tr>
        @endforeach
    
    
    </tbody>
  </table>

</div>

</body>
</html>


