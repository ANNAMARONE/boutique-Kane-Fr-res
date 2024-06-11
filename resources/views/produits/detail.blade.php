<!-- resources/views/ajouter_au_panier.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter au Panier</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
</head>
<body>
<div class="container">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container-fluid pe-lg-2 p-0">
                <a class="navbar-brand fw-bold fs-3" href="{{Route('Produit. affichagerproduits')}}"><button type="button" class="btn btn-success">Accueil</button></a>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   
                    <ul class="navbar-nav icons ms-auto mb-2 mb-lg-0">
                        <li class=" nav-item pe-3">
                            <a href="" class="fas fa-heart">

                                <span class="num rounded-circle">0</span>
                            </a>
                        </li>
                        <li class=" nav-item pe-3">
                            <a href="" class="fas fa-shopping-bag">
                                <span class="num rounded-circle">0</span>
                            </a>
                        </li>
                        <li class=" nav-item">
                            <span class="">prix:</span>
                            <span class="fw-bold">{{$produits->prix_unitaire}}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="row">
            <div class="col-lg-3 mb-lg-0 mb-2">
                <p>
                    <a class="btn btn-primary w-100 d-flex align-items-center justify-content-between"
                        data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true"
                        aria-controls="collapseExample">
                        <span class="fas fa-bars"><span class="ps-3">Catégorie</span></span>
                        <span class="fas fa-chevron-down"></span>
                    </a>
                </p>
                <div class="collapse show border" id="collapseExample">
                    <ul class="list-unstyled">
                        @foreach ($categories as $categorie)
                        
                       
                        <li><a class="dropdown-item" href="{{Route('Produit. affichagerproduits')}}">{{$categorie->libelle}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="d-lg-flex">
                 
                    <div class="d-flex align-items-center ms-lg-auto mt-lg-0 mt-3 pe-2">
                       
                        <div class="d-flex flex-column ps-2">
                            <p class="fw-bold">ajouter le:{{$produits->created_at}}</p>
                            <p class="text-muted">ETAT:{{$produits->etat_produit}}</p>
                        </div>
                    </div>
                </div>
                <div class=" d-lg-flex flex-lg-row d-flex flex-column-reverse bg-light mt-5">
                    <div class="p-5" id="2">
                        <p class="p-green">{{$categorie->libelle}}</p>
                        <P class="fs-4 fw-bold">NOM:{{$produits->designation}}</P>
                        <p class="fs-4 fw-bold">Prix:{{$produits->prix_unitaire}} FCFA</p>
                        <p class="text-muted mb-4">{{$produits->etat_produit}}</p>
                        <div id="1">
                        <img src="{{$produits->image}}"
                            class="w-75 h-75" alt="">
                    </div>
                        <div class="container">
    <h2>Ajouter au Panier</h2>
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
    <form action="{{ route('panier.ajouter') }}" method="POST">
        @csrf
        <input type="hidden" name="produit_id" value="{{ $produits->id }}">

<div class="form-group">
    <label for="quantite">Quantité</label>
    <input type="number" name="quantite" id="quantite" class="form-control" min="1" required>
</div>
        <button type="submit" class="btn btn-primary">Ajouter au Panier</button>
    </form>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div> 

</div>
<style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

.navbar .navbar-nav .nav-item .active {
    color: #67971f;
}

a.fas {
    position: relative;
    font-size: 20px;
    text-decoration: none;
    color: black;
}

.num {
    position: absolute;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    top: -8px;
    left: 18px;
    width: 15px;
    height: 15px;
    font-size: 8px;
    background-color: #67971f;
    color: white;
}


.col-lg-3 .btn.btn-primary {
    width: 100%;
    height: 43px;
    box-shadow: none;
    outline: none;
    background-color: #67971f;
    color: white;
    font-weight: 800;
    padding: 0px 15px;
    line-height: 22px;
    border: none;
}

.col-lg-3 .btn.btn-primary:focus {
    outline: none;
    box-shadow: none;
}

.col-lg-3 .btn.btn-primary:hover {
    background-color: #aadf5a;

}

.col-lg-3 ul {
    width: 100%;
}

.col-lg-9 .btn.btn-secondary {
    width: 100%;
    height: 100% !important;
    box-shadow: none;
    outline: none;
    background-color: transparent;
    color: black;
    font-weight: 800;
    padding: 0px 15px;
    line-height: 22px;
    border: none;
}


.col-lg-9 .btn.btn-primary {
    background-color: #67971f;
    border: none;
    height: 100%;
    width: 100px;
}

.col-lg-9 .btn.btn-primary:hover {
    background-color: #aadf5a;
}

.col-lg-9 ul {
    width: 100%;
}

.fas.fa-phone {
    width: 40px;
    height: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #67971f;
}

.p-green {
    letter-spacing: 2px;
    color: #67971f;
    font-size: 14px;
}

input {
    width: 230px;
    border: none;
    outline: none;
}

p {
    margin: 0%;
}

.text-muted {
    font-size: 14px;
}


.btn.btn-success {
    color: white;
    background-color: #67971f;
    outline: none;
    border: none;
}

.btn.btn-success:hover {
    background-color: #aadf5a;
}

@media(max-width:1022px) {
    input {
        width: 100%;
        border: none;
    }

}
    </style> 
</body>
</html>





















<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <title>Document</title>
</head>
<body>
<div class="container">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container-fluid pe-lg-2 p-0">
                <a class="navbar-brand fw-bold fs-3" href="{{Route('Produit. affichagerproduits')}}"><button type="button" class="btn btn-success">Accueil</button></a>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   
                    <ul class="navbar-nav icons ms-auto mb-2 mb-lg-0">
                        <li class=" nav-item pe-3">
                            <a href="" class="fas fa-heart">

                                <span class="num rounded-circle">0</span>
                            </a>
                        </li>
                        <li class=" nav-item pe-3">
                            <a href="" class="fas fa-shopping-bag">
                                <span class="num rounded-circle">0</span>
                            </a>
                        </li>
                        <li class=" nav-item">
                            <span class="">prix:</span>
                            <span class="fw-bold">{{$produits->prix_unitaire}}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="row">
            <div class="col-lg-3 mb-lg-0 mb-2">
                <p>
                    <a class="btn btn-primary w-100 d-flex align-items-center justify-content-between"
                        data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true"
                        aria-controls="collapseExample">
                        <span class="fas fa-bars"><span class="ps-3">Catégorie</span></span>
                        <span class="fas fa-chevron-down"></span>
                    </a>
                </p>
                <div class="collapse show border" id="collapseExample">
                    <ul class="list-unstyled">
                        @foreach ($categories as $categorie)
                        
                       
                        <li><a class="dropdown-item" href="{{Route('Produit. affichagerproduits')}}">{{$categorie->libelle}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="d-lg-flex">
                 
                    <div class="d-flex align-items-center ms-lg-auto mt-lg-0 mt-3 pe-2">
                       
                        <div class="d-flex flex-column ps-2">
                            <p class="fw-bold">ajouter le:{{$produits->created_at}}</p>
                            <p class="text-muted">ETAT:{{$produits->etat_produit}}</p>
                        </div>
                    </div>
                </div>
                <div class=" d-lg-flex flex-lg-row d-flex flex-column-reverse bg-light mt-5">
                    <div class="p-5" id="2">
                        <p class="p-green">{{$categorie->libelle}}</p>
                        <P class="fs-4 fw-bold">NOM:{{$produits->designation}}</P>
                        <p class="fs-4 fw-bold">Prix:{{$produits->prix_unitaire}} FCFA</p>
                        <p class="text-muted mb-4">{{$produits->etat_produit}}</p>
                        <form action="{{Route('panier.ajouter')}}" method="post">
                            @csrf
                            <input type="hidden" id="lname" name="user_id" value="{{ Auth::user()->id }}">
                            <input type="hidden" name="reference" class="form-control" value="{{$produits->reference}}" required="required"> 
                            <input type="hidden" name="montant_total" value="{{$produits->prix_unitaire}}" class="form-control" required="required"> 
                            <select hidden="hidden" name="etat_commande" id="etat_commande">
                          <option value="validé" {{old('etat_commande')=='validé'? 'selected':''}}>validé</option>
                          <option value="annulé" {{old('etat_commande')=='annulé'? 'elected':''}}>annulé</option>
                          <option value="en cours" {{old('etat_commande')=='en cours'? 'selected':''}}>en cours</option>
                        </select>
                            <input type="hidden" value="{{$produits->prix_unitaire}}" name="prix_totale">
                           <input class="btn btn-success px-4" type="submit" value="ajouter au panier"> 
                        </form>
                        
                    </div>
                    <div id="1">
                        <img src="{{$produits->image}}"
                            class="w-75 h-75" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div> 
</body>
</html>








    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

.navbar .navbar-nav .nav-item .active {
    color: #67971f;
}

a.fas {
    position: relative;
    font-size: 20px;
    text-decoration: none;
    color: black;
}

.num {
    position: absolute;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    top: -8px;
    left: 18px;
    width: 15px;
    height: 15px;
    font-size: 8px;
    background-color: #67971f;
    color: white;
}


.col-lg-3 .btn.btn-primary {
    width: 100%;
    height: 43px;
    box-shadow: none;
    outline: none;
    background-color: #67971f;
    color: white;
    font-weight: 800;
    padding: 0px 15px;
    line-height: 22px;
    border: none;
}

.col-lg-3 .btn.btn-primary:focus {
    outline: none;
    box-shadow: none;
}

.col-lg-3 .btn.btn-primary:hover {
    background-color: #aadf5a;

}

.col-lg-3 ul {
    width: 100%;
}

.col-lg-9 .btn.btn-secondary {
    width: 100%;
    height: 100% !important;
    box-shadow: none;
    outline: none;
    background-color: transparent;
    color: black;
    font-weight: 800;
    padding: 0px 15px;
    line-height: 22px;
    border: none;
}


.col-lg-9 .btn.btn-primary {
    background-color: #67971f;
    border: none;
    height: 100%;
    width: 100px;
}

.col-lg-9 .btn.btn-primary:hover {
    background-color: #aadf5a;
}

.col-lg-9 ul {
    width: 100%;
}

.fas.fa-phone {
    width: 40px;
    height: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #67971f;
}

.p-green {
    letter-spacing: 2px;
    color: #67971f;
    font-size: 14px;
}

input {
    width: 230px;
    border: none;
    outline: none;
}

p {
    margin: 0%;
}

.text-muted {
    font-size: 14px;
}


.btn.btn-success {
    color: white;
    background-color: #67971f;
    outline: none;
    border: none;
}

.btn.btn-success:hover {
    background-color: #aadf5a;
}

@media(max-width:1022px) {
    input {
        width: 100%;
        border: none;
    }

}
    </style> -->