<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Document</title>
</head>
<body>
    <header>
    <body class="bg-light">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav me-auto">
          <a class="nav-link active border-bottom" aria-current="page" href="#">Accueil</a>
          <a class="nav-link" aria-current="page" href="{{Route('commande.afficher')}}">Panier</a>
        </div>
        <div class="d-flex">
            <div class="rounded-pill bg-light d-flex">
                <a href="{{Route('login')}}">
            <button type="button" class="btn btn-success">Se connecter</button>
            </a>
            <form action="{{url('/deconnexion')}}" method="post">
                @csrf
                @method('DELETE')
            <button type="submit" class="btn btn-danger">deconnexion</button>
            </form>

            </div>
          </div>
      </div>
    </div>
  </nav>
<router-outlet></router-outlet>
</body>
    </header>
<div class="container">


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
                       <span class="price h5">{{$produit->prix_unitaire}}:fcfa</span> <br> <small class="text-success">{{$produit->etat_produit}}</small>
                    
    <form action="{{ route('panier.ajouter') }}" method="POST">
        @csrf
<div class="form-group">
    <input type="hidden" name="produit_id" value="{{ $produit->id }}">
    <label for="quantite">Quantité</label>
    <input type="number" name="quantite" id="quantite" class="form-control" min="1" required>
</div>
        <button type="submit" class="btn btn-primary">Ajouter au Panier</button>
    </form>
                   </div>
               </div> 
           </figure>
       </div>
   
       @endforeach
   
   </div>
     </div>
 <style>
        body{
        background-color: #eeeeee;
    }

    .container{
        margin-top:50px;
        margin-bottom: 50px;
    }

    a{
        text-decoration: none !important;
    }

    .card-product-list, .card-product-grid {
        margin-bottom: 0;
    }

    .card {
        
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid rgba(0, 0, 0, 0.1);
        border-radius: 0.10rem;
        margin-top: 10px;



    }

    .card-product-grid:hover {
        -webkit-box-shadow: 0 4px 15px rgba(153, 153, 153, 0.3);
        box-shadow: 0 4px 15px rgba(153, 153, 153, 0.3);
        -webkit-transition: .3s;
        transition: .3s;
    }


    .card-product-grid .img-wrap {
        border-radius: 0.2rem 0.2rem 0 0;
        height: 220px;
    }


    .card .img-wrap {
        overflow: hidden;
    }

    .card-lg .img-wrap {
        height: 280px;
    }


    .card-product-grid .img-wrap {
        border-radius: 0.2rem 0.2rem 0 0;
            height: 228px;
            padding: 16px;
    }

    [class*='card-product'] .img-wrap img {
        height: 100%;
        max-width: 100%;
        width: auto;
        display: inline-block;
        -o-object-fit: cover;
        object-fit: cover;
    }

    .img-wrap {
        text-align: center;
        display: block;
    }

    .card-product-grid .info-wrap {
        overflow: hidden;
        padding: 18px 20px;
    }

    [class*='card-product'] a.title {
        color: #212529;
        display: block;
    }

    .rating-stars {
        display: inline-block;
        vertical-align: middle;
        list-style: none;
        margin: 0;
        padding: 0;
        position: relative;
        white-space: nowrap;
        clear: both;
    }


    .rating-stars li.stars-active {
        z-index: 2;
        position: absolute;
        top: 0;
        left: 0;
        overflow: hidden;
    }

    .rating-stars li {
        display: block;
        text-overflow: clip;
        white-space: nowrap;
        z-index: 1;
    }

    .card-product-grid .bottom-wrap {
        padding: 18px;
        border-top: 1px solid #e4e4e4;
    }

    .btn {
        display: inline-block;
        font-weight: 600;
        color: #343a40;
        text-align: center;
        vertical-align: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-color: transparent;
        border: 1px solid transparent;
        padding: 0.45rem 0.85rem;
        font-size: 1rem;
        line-height: 1.5;
            border-radius: 0.2rem;
        
    } 

    .btn-primary {
        color: #fff;
        background-color: #3167eb;
        border-color: #3167eb;
    }

    .fa{
            color: #FF5722;
    }

 </style>      
</body>
</html>