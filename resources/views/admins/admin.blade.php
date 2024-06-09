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
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">gestion produits</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">gestion articles</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">gestion commandes</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
  </li>
</ul>
    
<div class="container mt-5 mb-5">
            <div class="d-flex justify-content-center row">
                <div class="col-md-8">
                    <div class="p-2">
                        <h4>list des produits disponible</h4>
                        <button type="button" class="btn btn-primary btn-lg">ajouter un produit</button>
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
                        <a href="">
                        <div class="d-flex align-items-center"><i class="fa fa-edit mb-1 text-primary"></i></div>
                        </a>
                       <form action="{{Route('Admin.supprimerP',$produit)}}" method="post">
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
            @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200&display=swap');

body {
  font-family: 'Manrope', sans-serif;
  background:#eee;
}

.size span {
  font-size: 11px;
}

.color span {
  font-size: 11px;
}

.product-deta {
  margin-right: 70px;
}

.gift-card:focus {
  box-shadow: none;
}

.pay-button {
  color: #fff;
}

.pay-button:hover {
  color: #fff;
}

.pay-button:focus {
  color: #fff;
  box-shadow: none;
}

.text-grey {
  color: #a39f9f;
}

.qty i {
  font-size: 11px;
}
        </style>
</body>
</html>

      