
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Accueil</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">À propos</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                                <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="button-div">
         
    <form action="{{url('/deconnexion')}}" method="post">
                @csrf
                @method('DELETE')
    <button class="login-button">deconnection</button>
    </form>
    
    
</div>
                    <form class="d-flex" action="{{Route('commande.afficher')}}">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                           
                        </button>
                    </form>
                  
                </div>
            </div>
        </nav>

        <p>Bienvenue{{Auth::User()->nom}} {{Auth::User()->prenom}}</p>
        
        <!-- Header-->
        <header  class="bg py-5">
            <div id="header" class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Kane & frése</h1>
                    <p class="lead fw-normal text-white-50 mb-0"> spécialisés dans le vente de produits alimentaires</p>
                </div>
                <div>
                    <img src="image/background.png" alt="">
                </div>
            </div>
        </header>
        <!-- Section-->
        <div id="container1" class="container">

        <div class="col-lg-3 mb-lg-0 mb-2">
                <p class="categorie">
                    <a class="btn  w-100 d-flex align-items-center justify-content-between"
                        data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true"
                        aria-controls="collapseExample">
                        <span class="fas fa-bars"><span class="ps-3">Catégorie</span></span>
                        <span class="fas fa-chevron-down"></span>
                    </a>
                </p>
                <div class="collapse show border" id="collapseExample">
                    <ul class="list-unstyled">
                        @foreach ($categories as $categorie)
                        
                       
                        <li><a class="dropdown-item" href="{{Route('produits.parCategorie', $categorie->id)}}">{{$categorie->libelle}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
<div class="row">
@if(session('success'))
  <div class="alert alert-success">
      {{ session('success') }}
  </div>
@endif
@if(session('error'))
  <div class="alert alert-danger">
      {{ session('error') }}
  </div>
@endif
@foreach ( $produits as $produit )


 <div class="col-md-4">
     <figure class="card card-product-grid card-lg">
     <button id="etat" type="button" class="btn btn-dark">{{$produit->etat_produit}}</button>
         <a href="{{Route('Produit. afficherdetail',$produit->id)}}" class="img-wrap" data-abc="true">
          <img src="{{$produit->image}}"></a>
         <figcaption class="info-wrap">
                    <div class="row">

                        <div class="col-md-8">

                            <a href="#" class="title" data-abc="true">{{$produit->designation}}</a>
                            
                        </div>

                        <div class="col-md-4">

                            <div class="rating text-right">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                
                            </div>

                            
                            
                        </div>
                        
                    </div>

                 
                 
         </figcaption>
         <div class="bottom-wrap">
                      
                      
             <div class="price-wrap">
                 <span class="price h5">{{$produit->prix_unitaire}}:fcfa</span> <br> 
              
<form action="{{ route('panier.ajouter') }}" method="POST">
  @csrf
<div class="form-group">
<input type="hidden" name="produit_id" value="{{ $produit->id }}">
<label for="quantite">Quantité</label>
<input type="number" name="quantite" id="quantite" class="form-control" min="1" required>
</div>
  <button  type="submit" class="btn" style="background-color:#77A713;color:white">Ajouter au Panier</button>
</form>
             </div>
         </div> 
     </figure>
 </div>

 @endforeach

</div>
</div>
        <!-- Footer-->
        <footer class="py-5 bg">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
