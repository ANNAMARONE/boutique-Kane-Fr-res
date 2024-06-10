<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="card">
<p>Welcome, {{ Auth::user()->nom }}</p>
     <h3>Veuillez confrimer votre commande</h3> 
     <form  action="{{Route('Commmande.validecommande')}}" method="post"> 
        @csrf
        <input type="hidden" id="lname" name="user_id" value="{{ Auth::user()->id }}"> 
        <div class="">
            <label for="Prenom">Reference</label>
             <input type="text" name="reference" class="form-control" value="{{$produits->reference}}" required="required"> 
           
            </div>
             <div class="">
             <itionl for="Prenom">Montant total</label>
                 <input type="text" name="montant_total" value="{{$produits->prix_unitaire}}" class="form-control" required="required"> 
                
                </div>
                <div class="">
                <label class="form-control-label px-3">etat commande<span class="text-danger"> *</span></label>
                             <select name="etat_commande" id="etat_commande">
                          <option value="validé" {{old('etat_commande')=='validé'? 'selected':''}}>validé</option>
                          <option value="annulé" {{old('etat_commande')=='annulé'? 'elected':''}}>annulé</option>
                          <option value="en cours" {{old('etat_commande')=='en cours'? 'selected':''}}>en cours</option>
                        </select>
                        @error('etat_produit')
                          <span class="text-danger">{{$message}}</span>
                          @enderror
            
                      <button type="submit" class="btn btn-success btn-block">envoyer</button>
                     </form> 
                    </div>
                    <style>
                        body
                        {
                            height: 100vh;
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            background: linear-gradient(#67971f)
                        }
                        .btn{
                            margin-top: 10%;
                        }
                        .card
                        {
                            width: 700px;
                                padding: 80px 50px;
                                position: relative;
                                border-radius: 20px;
                                box-shadow: 0 5px 25px rgba(0,0,0,0.2)
                            }
                            .card h3{
                                color: #111;
                                margin-bottom: 50px;
                                border-left: 5px solid red;
                                padding-left: 10px;
                                line-height: 1em
                            }.inputbox
                            {margin-bottom: 50px
                            }.inputbox input{
                                position:absolute;width: 600px;background:transparent
                            }.inputbox input:focus{
                                color: #495057;
                                background-color: #fff;
                                border-color: #e54b38;
                                outline: 0;
                                box-shadow: none
                            }
                            .inputbox span{
                                position: relative;
                                top: 7px;
                                left: 1px;
                                padding-left: 10px;
                                display: inline-block;
                                transition: 0.5s
                            }
                            .inputbox input:focus ~ span
                            {
                                transform: translateX(-10px) translateY(-32px);font-size: 12px
                            }
                            .inputbox input:valid ~ span{
                                transform: translateX(-10px) translateY(-32px);font-size: 12px
                            }
                    </style>
</body>
</html>