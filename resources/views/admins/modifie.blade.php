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
  <p>{{Auth::User()->prenom}}</p>
<div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
            <h3>Ajouter un produit</h3>
           
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
  
   </script>
</body>
</html>