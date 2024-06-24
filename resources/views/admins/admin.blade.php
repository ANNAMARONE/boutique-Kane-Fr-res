<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href=" https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
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
            </div>
        </div>
    </div>
</div>
<div class="container mt-5 mb-5">
            <div class="d-flex justify-content-center row">
                <div class="col-md-8">
                    <div class="p-2">
                        <h4>list des produits disponible</h4>
                        <a href="{{Route('Produit.ajouteproduit')}}">
                        <button type="button" class="btn btn-primary btn-lg">ajouter un produit</button>
                        </a>
                    </div>
                    @foreach ($produits as $produit )
                    
                  
                    <div class="d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded">
                        <div class="mr-1"><img class="rounded" src="{{$produit->image}}" width="70"></div>
                        <div class="d-flex flex-column align-items-center product-details"><span class="font-weight-bold">{{$produit->designation}}</span>
                            <div class="d-flex flex-row product-desc">
                                <div class="size mr-1"><span class="text-grey">Etat:</span><span class="font-weight-bold">&nbsp;{{$produit->etat_produit}}</span></div>
                               
                            </div>
                        </div>
                        <div>
                            <h5 class="text-grey">Prix:{{$produit->prix_unitaire}}FCFA</h5>
                        </div>
                        <a href="{{Route('Admin.modifProduit',$produit->id)}}">
                        <div class="d-flex align-items-center">
                            <button type="submit"><i class="fa fa-edit mb-1 text-primary"></i></button>
                          </div>
                        </a>
                       <form action="{{Route('Admin.supprimerP',$produit->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                       
                        <div class="d-flex align-items-center"><button type="submit"><i class="fa fa-trash mb-1 text-danger"></i></button></div>
                        </form>
                    </div>
                    @endforeach
                    
                   
                </div>
            </div>
        </div>
<style>
  html,
body,
.grid-block {
    height: 100%;
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

      