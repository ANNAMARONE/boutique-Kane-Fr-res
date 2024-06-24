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
<div class="grid-frame">
    <div class="grid-block">
        <div id="sidebar" class="medium-4 grid-block">
            <div class="logo-container">
                <a class="logo" href="#">{{Auth::User()->nom}} {{Auth::User()->prenom}}</a>
            </div>
            <div>
                <ul class="primary-nav">
                    <li><a href="#">Dasboard</a></li>
                    <li><a href="{{url('/categorie')}}">gestion categorie</a></li>
                    <li><a href="#">gestion des commandes</a></li>
                    <li><a href="{{url('/admin')}}">Gestion des produits</a></li>
                    <li><a href="#">Campaigns &amp; Automation</a></li>
                </ul>
            </div>
            <form action="{{url('/deconnexion')}}" method="post">
                @csrf
                @method('DELETE')
    <button class="login-button">deconnection</button>
    </form>
    
        </div>
        <div id="main" class="grid-block">
            <div class="grid-block">
                <div class="menu-group primary">
<div class="menu-group-left">
<ul class="menu-bar primary">
<li><a href="#">Item One</a></li>
<li><a href="#">Item Too</a></li>
<li><a href="#">Item Three</a></li>
</ul>
</div>
<div class="menu-group-right">
<ul class="icon-left primary menu-bar">
<li><a href="#"><img zf-iconic="" icon="thumb" size="small" class="iconic-color-primary">Item Aye</a></li>
<li><a href="#"><img zf-iconic="" icon="thumb" size="small" class="iconic-color-primary">Item Bee</a></li>
</ul>
</div>
</div>
<div class="categorie">
<div>
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
    <div class="container mt-3">
 
  <p>Liste des catégories disponibles</p>
  <table class="table">
    <thead class="table-dark">
      <tr>
        <th>id</th>
        <th>libellé</th>
        <th>supprimer</th>
        <th>modifier</th>
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
            <button type="submit" class="btn btn-danger">supprimer</button>
            </form>
        </td>
        <td>
            <a href="{{Route('Categorie.editcategorie',$categorie->id)}}">
            <button type="submit" class="btn btn-primary">modifier</button>
            </a>
        </td>
      </tr>
        @endforeach
        
    </tbody>
  </table>

</div>
</div>
            </div>
        </div>
    </div>
   

</div>






</div>
</div>
<style>
  html,
body,
a{
  text-decoration: none;
}
.grid-block {
    height: 100%;
}
.categorie{
  margin-left: 20%;
}

#sidebar {
    background-color:  #D4E4B7;
    height: 100%;
    width: 236px;
    padding: 20px;
    position: fixed;
    ul {
        list-style: none;
        margin: 0;
        padding: 12px 0 20px 0;
        border-bottom: 1px solid #3B3B3B;
        a {
           
            &:hover {color: #fff;}   
        }
    }

}
.primary-nav a {
    display: block;
    padding: 8px 0;
    font-size: 14px;
    letter-spacing:.5px;
    color: #646464;
    font-weight: 600;
}
.secondary-nav a{
    font-size: 13px;
}
.logo {
    display: block;
    font-weight: 800;
    padding-bottom: 20px;
    border-bottom: 1px solid #3B3B3B
}

  </style>

</body>
</html>

