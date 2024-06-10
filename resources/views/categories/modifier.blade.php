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
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">gestion produits</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{url('/categorie')}}">gestion categorie</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">gestion commandes</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
  </li>
</ul>
<style>
  body {
  font-family: 'Manrope', sans-serif;
  background:#eee;
}
</style>
<section  id="section1" class="section">

<div class="container-fluid mt-3">
</div>
<div class="container mt-3">
 
  <p>ajouter la catégorie du produits:</p>
  <form action="{{Route('Categorie.modifier', $categorie->id)}}" method="post" enctype="multipart/form-data">
  @csrf
  @method('POST')
    <div class="mb-3 mt-3">
      <label for="comment">nom de la categorie:</label>
      <input class="form-control" rows="5" id="comment" name="libelle" value="{{$categorie->libelle}}">
    </div>
    <button type="submit" class="btn btn-primary">modifier</button>
  </form>
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

