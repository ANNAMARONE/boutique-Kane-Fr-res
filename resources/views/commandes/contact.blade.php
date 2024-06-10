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
     <h3>créer un compte</h3> 
     <form  action="{{Route('Utilisteur.ajouteInfo')}}" method="post"> 
        @csrf
        <div class="">
            <label for="Prenom">Prenom</label>
             <input type="text" name="prenom" class="form-control" > 
           @error('prenom')
           <span class="text-danger">{{$message}}</span>
           @enderror
            </div>
             <div class="">
             <label for="Prenom">nom</label>
                 <input type="text" name="nom" class="form-control"> 
                 @error('nom')
           <span class="text-danger">{{$message}}</span>
           @enderror
                </div>
                <div class="">
                <label for="Prenom">Adresse</label>
                 <input type="text" name="adresse" class="form-control"> 
                 @error('adresse')
           <span class="text-danger">{{$message}}</span>
           @enderror
                </div>
                 <div class=""> 
                 <label for="Prenom">téléphone</label>
                <input type="text" name="telephone" class="form-control" >
                @error('telephone')
           <span class="text-danger">{{$message}}</span>
           @enderror
                <div class=""> 
                 <label for="Prenom">email</label>
                <input type="text" name="email" class="form-control">
                @error('email')
           <span class="text-danger">{{$message}}</span>
           @enderror
                <div class=""> 
                 <label for="Prenom">Mot de passe</label>
                <input type="text" name="password" class="form-control">
                @error('password')
           <span class="text-danger">{{$message}}</span>
           @enderror
                  </div>
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