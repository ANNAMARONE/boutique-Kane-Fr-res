<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
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
            <div class="card">
                <h5 class="text-center mb-4">Ajouter les produits</h5>
                <form class="form-card" action="{{Route('Produit.ajouteproduit')}}" method="post" >
                @csrf
                @method('POST')
                
                           
                            <input type="hidden" id="lname" name="user_id" value="{{$user->id}}"> 
                      
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> 
                            <label class="form-control-label px-3">catégorie<span class="text-danger"> *</span></label> 
                            <select class="form-control" name="categorie_id" id="libelle">
        <option value="">Sélectionnez le type</option>
        @foreach ( $categorie as $type )
            <option value="{{ $type->id}}" {{ old('libelle') == $type ? 'selected' : '' }}>
             {{ $type->libelle}}
            </option>
            @endforeach
    </select>
   
                        </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> 
                            <label class="form-control-label px-3">designation<span class="text-danger"> *</span></label> 
                            <input type="text" id="lname" name="designation" onblur="validate(2)"> 
                        </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex">
                             <label class="form-control-label px-3">prix<span class="text-danger"> *</span></label> 
                             <input type="number" id="email" name="prix_unitaire" placeholder="" onblur="validate(3)"> 
                            </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> 
                            <label class="form-control-label px-3">references<span class="text-danger"> *</span></label>
                             <input type="text" id="mob" name="reference" placeholder="" onblur="validate(4)"> 
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> 
                            <label class="form-control-label px-3">image<span class="text-danger"> *</span></label>
                             <input type="text" id="mob" name="image" placeholder="" onblur="validate(4)"> 
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> 
                            <label class="form-control-label px-3">etat produit<span class="text-danger"> *</span></label>
                             <select name="etat_produit" id="etat_produit">
                          <option value="disponible" {{old('etat_produit')=='disponible'? 'selected':''}}>disponible</option>
                          <option value="en rupture" {{old('etat_produit')=='en rupture'? 'elected':''}}>en rupture</option>
                          <option value="en stock" {{old('etat_produit')=='en stock'? 'selected':''}}>en stock</option>
                        </select>
                        @error('etat_produit')
                          <span class="text-danger">{{$message}}</span>
                          @enderror
                            </div>
        
                    </div>
                  
                    <div class="row justify-content-end">
                        <div class="form-group col-sm-6"> 
                            <button type="submit" class="btn-block btn-primary">envoyer</button> 
                        </div>
                    </div>
                </form>
            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
          
        </div>
    </div>
</div>
   <style>
    body{color: #000;overflow-x: hidden;height: 100%;background-image: url("https://i.imgur.com/GMmCQHC.png");background-repeat: no-repeat;background-size: 100% 100%}.card{padding: 30px 40px;margin-top: 60px;margin-bottom: 60px;border: none !important;box-shadow: 0 6px 12px 0 rgba(0,0,0,0.2)}.blue-text{color: #00BCD4}.form-control-label{margin-bottom: 0}input, textarea, button{padding: 8px 15px;border-radius: 5px !important;margin: 5px 0px;box-sizing: border-box;border: 1px solid #ccc;font-size: 18px !important;font-weight: 300}input:focus, textarea:focus{-moz-box-shadow: none !important;-webkit-box-shadow: none !important;box-shadow: none !important;border: 1px solid #00BCD4;outline-width: 0;font-weight: 400}.btn-block{text-transform: uppercase;font-size: 15px !important;font-weight: 400;height: 43px;cursor: pointer}.btn-block:hover{color: #fff !important}button:focus{-moz-box-shadow: none !important;-webkit-box-shadow: none !important;box-shadow: none !important;outline-width: 0}
   </style> 
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
.card{
  margin-left: 20%;
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
  
   </script>
</body>
</html>