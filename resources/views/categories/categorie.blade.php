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
  <style>
  body{
    font-family: 'Manrope', sans-serif;
  background:#eee;
  }
  </style>
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link " aria-current="page" href="{{url('/admin')}}">gestion produits</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="{{url('/categorie')}}">gestion categorie</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">gestion commandes</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
  </li>
</ul>
<section  id="section1" class="section">

<div class="container-fluid mt-3">
  <h3>bienvenue</h3>
  <p>{{Auth::User()->prenom}}</p>
</div>
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
</section>
<section  id="section2" class="section">

<div class="container mt-3">
 
  <p>Liste des catégories disponibles</p>
  <table class="table">
    <thead class="table-dark">
      <tr>
        <th>id</th>
        <th>libellé</th>
        <th>modifier</th>
        <th>supprimer</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($categories as $categorie )
        <tr>
        <td>{{$categorie->id}}</td>
        <td>{{$categorie->libelle}}</td>
        <td>
            <form action="{{Route('Categorie.suppresion',$categorie->id)}}" style ="display:inline" method="post">
                @csrf
                @Method('DELETE')
            <button type="submit" class="btn btn-primary">modifier</button>
            </form>
        </td>
        <td>
            <a href="{{Route('Categorie.editcategorie',$categorie->id)}}">
            <button type="submit" class="btn btn-danger">suprimer</button>
            </a>
        </td>
      </tr>
        @endforeach
        
    </tbody>
  </table>

</div>
</section>
    
<script>
        function showSection(sectionId) {
            // Cache toutes les sections
            var sections = document.querySelectorAll('.section');
            sections.forEach(function(section) {
                section.style.display = 'none';
            });

            // Affiche la section sélectionnée
            var selectedSection = document.getElementById(sectionId);
            if (selectedSection) {
                selectedSection.style.display = 'block';
            }
        }
    </script>

</body>
</html>

