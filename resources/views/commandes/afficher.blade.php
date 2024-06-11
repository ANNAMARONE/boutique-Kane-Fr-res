<!-- resources/views/afficher_commande.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afficher Commande</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>Détails de la Commande</h2>
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header">
           
        </div>
        <div class="card-body">
             @foreach ($commandes as $commande )
             
            
            <h5 class="card-title">Référence: {{ $commande->reference }}</h5>
            <p class="card-text">Montant Total: {{ $commande->montant_total }} FCFA</p>
            <p class="card-text">État de la Commande: {{ $commande->etat_commande }}</p>
            <p class="card-text">Date de la Commande: {{ $commande->created_at->format('d/m/Y H:i') }}</p>
            <hr>
            @endforeach
            <h5 class="card-title">Produits</h5>
            <ul class="list-group">
                @foreach($commande->produits as $produit)
                    <li class="list-group-item">
                        {{ $produit->reference }} - {{ $produit->pivot->quantite }} x {{ $produit->prix_unitaire }} FCFA
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
</body>
</html>
